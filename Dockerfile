FROM php:8.4-apache

# Instalar dependencias del sistema y extensiones necesarias para Laravel
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Limpiar caché
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Instalar extensiones de PHP
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Copiar Composer desde su imagen oficial
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Configurar directorio de trabajo
WORKDIR /var/www/html

# Copiar el código del proyecto
COPY . .

# Instalar dependencias de Composer
RUN composer install --no-dev --optimize-autoloader

# Cambiar permisos de las carpetas de almacenamiento y caché de Laravel
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Apuntar el DocumentRoot de Apache a la carpeta public de Laravel
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Habilitar mod_rewrite para las rutas amigables de Laravel
RUN a2enmod rewrite

# Exponer el puerto dinámico de Render (Render usa la variable PORT, normalmente 10000)
ENV PORT=10000

# Cambiar el puerto por defecto de Apache (80) al puerto de Render en los archivos de configuración
RUN sed -i "s/Listen 80/Listen \${PORT}/g" /etc/apache2/ports.conf && \
    sed -i "s/:80/:\\${PORT}/g" /etc/apache2/sites-available/000-default.conf

EXPOSE 10000

# Comando para iniciar Apache en primer plano
CMD ["apache2-ctl", "-D", "FOREGROUND"]