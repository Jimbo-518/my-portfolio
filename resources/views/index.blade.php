<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="Portfolio | Web Developer">
    <meta property="og:description" content="Portfolio de Benjamín Jiménez">
    <meta property="og:image" content="{{ asset('assets/img/profile1.png') }}">
    <meta property="og:url" content="http://portfolio.luxesoft.com.mx/">

    <title>Portfolio | Web Developer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="shortcut icon" href="{{asset('assets/img/icon.png')}}" type="image/x-icon">
</head>

<body>
    <canvas id="particles"></canvas>
    <div class="background-blur"></div>

    <header class="navbar glass">
        <div class="logo">Benjamín.dev</div>
        <button class="hamburger" id="hamburger" aria-label="Menú">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <nav>
            <a href="#hero" data-i18n="nav.home">Inicio</a>
            <a href="#about" data-i18n="nav.about">Sobre mí</a>
            <a href="#projects" data-i18n="nav.projects">Proyectos</a>
            <a href="#certificate" data-i18n="nav.certificates">Certificados</a>
            <a href="#contact" data-i18n="nav.contact">Contacto</a>
            <!-- Language switcher — añádelo donde quieras en el nav -->
            <button id="lang-toggle" aria-label="Switch language">EN</button>
        </nav>
    </header>

    <section id="hero" class="hero">
        <div class="hero-text glass">
            <div class="columna">
                <h1 data-i18n="hero.greeting">Hola, soy</h1>
                <h1><span>Benjamín Jiménez</span></h1>
                <h2 data-i18n="hero.role">Desarrollador Web Full Stack</h2>
                <p data-i18n="hero.tagline">
                    Construyo experiencias digitales elegantes, funcionales y bien estructuradas.
                </p>
                <div class="buttons">
                    <a href="#about" class="btn-outline" data-i18n="hero.btn_about">Sobre mí</a>
                    <a href="#contact" class="btn-primary" data-i18n="hero.btn_contact">Contactar</a>
                </div>
            </div>
            <div class="hero-img columna">
                <img src="{{ asset('assets/img/profile.png') }}" alt="Foto de perfil">
            </div>
        </div>
    </section>

    <section id="about" class="hero">
        <div class="hero-text glass">
            <div class="hero-img columna">
                <img src="{{ asset('assets/img/profile1.png') }}" alt="Foto de perfil">
            </div>

            <div class="columna">
                <h1 data-i18n="about.title">Sobre mí</h1>
                <p data-i18n="about.p1">
                    Especialista en convertir la complejidad operativa en eficiencia tecnológica a través de arquitecturas limpias.
                    No solo construyo aplicaciones; diseño experiencias digitales personalizadas que optimizan resultados y resuelven problemas reales.
                </p>
                <p>
                    <a href="https://www.linkedin.com/in/jose-benjamin-jimenez-mora-5038233a2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="#660c7ce7" class="icon icon-tabler icons-tabler-filled icon-tabler-brand-linkedin">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M17 2a5 5 0 0 1 5 5v10a5 5 0 0 1 -5 5h-10a5 5 0 0 1 -5 -5v-10a5 5 0 0 1 5 -5zm-9 8a1 1 0 0 0 -1 1v5a1 1 0 0 0 2 0v-5a1 1 0 0 0 -1 -1m6 0a3 3 0 0 0 -1.168 .236l-.125 .057a1 1 0 0 0 -1.707 .707v5a1 1 0 0 0 2 0v-3a1 1 0 0 1 2 0v3a1 1 0 0 0 2 0v-3a3 3 0 0 0 -3 -3m-6 -3a1 1 0 0 0 -.993 .883l-.007 .127a1 1 0 0 0 1.993 .117l.007 -.127a1 1 0 0 0 -1 -1" />
                        </svg>
                    </a>
                    <a href="{{ asset('assets/documents/CV_Benjamin_Jimenez.pdf') }}" download>
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="#660c7ce7" class="icon icon-tabler icons-tabler-filled icon-tabler-file-download">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 2l.117 .007a1 1 0 0 1 .876 .876l.007 .117v4l.005 .15a2 2 0 0 0 1.838 1.844l.157 .006h4l.117 .007a1 1 0 0 1 .876 .876l.007 .117v9a3 3 0 0 1 -2.824 2.995l-.176 .005h-10a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-14a3 3 0 0 1 2.824 -2.995l.176 -.005zm0 8a1 1 0 0 0 -1 1v3.585l-.793 -.792a1 1 0 0 0 -1.32 -.083l-.094 .083a1 1 0 0 0 0 1.414l2.5 2.5l.044 .042l.068 .055l.11 .071l.114 .054l.105 .035l.15 .03l.116 .006l.117 -.007l.117 -.02l.108 -.033l.081 -.034l.098 -.052l.092 -.064l.094 -.083l2.5 -2.5a1 1 0 0 0 0 -1.414l-.094 -.083a1 1 0 0 0 -1.32 .083l-.793 .791v-3.584a1 1 0 0 0 -.883 -.993zm2.999 -7.001l4.001 4.001h-4z" />
                        </svg>
                    </a>
                </p>

                <div class="buttons">
                    <a href="#projects" class="btn-outline" data-i18n="about.btn_projects">Ver proyectos</a>
                    <a href="#skills" class="btn-primary" data-i18n="about.btn_skills">Habilidades</a>
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="section">
        <h2 data-i18n="projects.title">Proyectos</h2>

        <div class="projects-grid">
            <div class="card glass">
                <h3 data-i18n="projects.pas.name">Profe Attendance System (P.A.S.)</h3>
                <p data-i18n="projects.pas.short">Entorno desarrollado para la toma de asistencia cada hora del personal docente en una escuela. Con este entorno se migró de un sistema manual a un sistema digital.</p>

                <div class="buttons">
                    <a href="#"
                        class="btn-outline open-project"
                        data-title-es="Profe Attendance System (P.A.S.)"
                        data-title-en="Profe Attendance System (P.A.S.)"
                        data-description-es="Entorno de gestión de asistencias por hora para profesores. Con este sistema el personal docente puede hacer su chequeo desde la app móvil,
                            un único encargado revisa las asistencias desde una aplicación de escritorio que en caso de que aplique genera y envía por correo
                            los reportes debidos. Todo el sistema es alimentado desde una interfaz web que permite gestionar usuarios, horarios y la distribución de las aplicaciones.
                            Este proyecto contiene una mención especial a mi equipo
                            de trabajo pero en especial a mi, no solo compañero, mi amigo más intimo: José Armando Morales Pérez."
                        data-description-en="Hourly attendance management environment for teachers. With this system, teaching staff can check in from the mobile app,
                            a single administrator reviews attendance from a desktop application that, when applicable, generates and sends the corresponding reports by email.
                            The entire system is fed from a web interface that allows managing users, schedules, and application distribution. This project contains a special mention to my team, but especially to my closest friend and colleague: José Armando Morales Pérez."
                        data-tech="HTML,CSS,JavaScript,PHP,Java"
                        data-images="pas/VistaEscritorio1.png,pas/VistaEscritorio.png,pas/VistaWeb.png,pas/VistaWeb1.png,pas/VistaWeb2.png">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#d6d9e0" class="icon icon-tabler icons-tabler-filled icon-tabler-eye">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 4c4.29 0 7.863 2.429 10.665 7.154l.22 .379l.045 .1l.03 .083l.014 .055l.014 .082l.011 .1v.11l-.014 .111a.992 .992 0 0 1 -.026 .11l-.039 .108l-.036 .075l-.016 .03c-2.764 4.836 -6.3 7.38 -10.555 7.499l-.313 .004c-4.396 0 -8.037 -2.549 -10.868 -7.504a1 1 0 0 1 0 -.992c2.831 -4.955 6.472 -7.504 10.868 -7.504zm0 5a3 3 0 1 0 0 6a3 3 0 0 0 0 -6" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="card glass">
                <h3 data-i18n="projects.ip.name">Control de Incidencias</h3>
                <p><span style="all: unset" data-i18n="projects.ip.short">Hecho a la medida de una empresa, este es un sistema dedicado a la automatización de reportes de incidencias en una empresa.</span> <span data-i18n="projects.freelance_badge">Vendido como freelancer</span></p>
                <div class="buttons">
                    <a href="#" class="btn-outline open-project"
                        data-title-es="Control de Incidencias"
                        data-title-en="Incident Control"
                        data-description-es="Con este sistema se automatizó el proceso de reporte de incidencias en una empresa. 
                            Este sistema web permite gestionar empleados, horarios y reportes .xlsx. 
                            Esta implementación hizo un cambio radical en la empresa, ya que antes el proceso era completamente manual ocasionando retrasos y errores humanos.
                            Con este sistema se redujo el tiempo de hasta 2 días a solo minutos y se eliminó por completo el error humano en el proceso."
                        data-description-en="This system automated the incident reporting process in a company.
                            This web system allows managing employees, schedules, and .xlsx reports.
                            This implementation made a radical change in the company, as the process was previously completely manual, causing delays and human errors.
                            With this system, the time was reduced from up to 2 days to just minutes, and human error was completely eliminated from the process."
                        data-tech="HTML,CSS,JavaScript,PHP"
                        data-images="ip/PortalIncidencias.png,ip/PortalIncidencias1.png,ip/PortalIncidencias2.png,ip/PortalIncidencias3.png,ip/PortalIncidencias4.png,ip/PortalIncidencias5.png,ip/PortalIncidencias6.png">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#d6d9e0" class="icon icon-tabler icons-tabler-filled icon-tabler-eye">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 4c4.29 0 7.863 2.429 10.665 7.154l.22 .379l.045 .1l.03 .083l.014 .082l.011 .1v.11l-.014 .111a.992 .992 0 0 1 -.026 .11l-.039 .108l-.036 .075l-.016 .03c-2.764 4.836 -6.3 7.38 -10.555 7.499l-.313 .004c-4.396 0 -8.037 -2.549 -10.868 -7.504a1 1 0 0 1 0 -.992c2.831 -4.955 6.472 -7.504 10.868 -7.504zm0 5a3 3 0 1 0 0 6a3 3 0 0 0 0 -6" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="card glass">
                <h3 data-i18n="projects.allcat.name">AllCatalog</h3>
                <p data-i18n="projects.allcat.short">Entorno para aquellos que se dedican a la venta por catálogo. Se centralizan todas las marcas que se manejan en un solo lugar.</p>
                <div class="buttons">
                    <a href="#" class="btn-outline open-project"
                        data-title-es="AllCatalog"
                        data-title-en="AllCatalog"
                        data-description-es="Este sistema le da su propia página web para tomar pedidos de forma automatizada. 
                            Por otra parte, le brinda al vendedor una vista aislada, desde donde puede gestionar sus productos, pedidos y clientes, así como llevar un historial de los pagos y adeudos.
                            La función estrella de este sistema es la capacidad de consultar los productos disponibles directamente de la página de la marca que vende (scraping) y no tener que hacer el 
                            proceso de agregar productos manualmente."
                        data-description-en="This system gives catalog sellers their own website to take orders automatically.
                            Additionally, it provides the seller with an isolated view where they can manage their products, orders, and customers, as well as keep a history of payments and debts.
                            The star feature of this system is the ability to query available products directly from the brand's website (scraping), eliminating the need to add products manually."
                        data-tech="HTML,CSS,JavaScript,PHP/Laravel"
                        data-images="allcat/allcat.png,allcat/allcat1.png,allcat/allcat2.png,allcat/allcat3.png,allcat/allcat4.png,allcat/allcat5.png">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#d6d9e0" class="icon icon-tabler icons-tabler-filled icon-tabler-eye">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 4c4.29 0 7.863 2.429 10.665 7.154l.22 .379l.045 .1l.03 .083l.014 .055l.014 .082l.011 .1v.11l-.014 .111a.992 .992 0 0 1 -.026 .11l-.039 .108l-.036 .075l-.016 .03c-2.764 4.836 -6.3 7.38 -10.555 7.499l-.313 .004c-4.396 0 -8.037 -2.549 -10.868 -7.504a1 1 0 0 1 0 -.992c2.831 -4.955 6.472 -7.504 10.868 -7.504zm0 5a3 3 0 1 0 0 6a3 3 0 0 0 0 -6" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="card glass">
                <h3 data-i18n="projects.bible.name">Biblioteca de Manuales</h3>
                <p><span style="all: unset" data-i18n="projects.bible.short">Una solución sencilla pero eficaz para proveer manuales de usuario en una empresa sin exponerse a terceros.</span> <span data-i18n="projects.freelance_badge">Vendido como freelancer</span></p>
                <div class="buttons">
                    <a href="#" class="btn-outline open-project"
                        data-title-es="Bibblioteca de Manuales"
                        data-title-en="Manuals Library"
                        data-description-es="Esta solución permite a una empresa proveer manuales de usuario de forma digital. 
                            Se implementó con Laravel y se vendió como freelancer."
                        data-description-en="This solution allows a company to provide user manuals digitally.
                            It was implemented with Laravel and sold as a freelance project."
                        data-tech="HTML,CSS,JavaScript,PHP/Laravel"
                        data-images="bible/bible.png,bible/bible1.png,bible/bible2.png,bible/bible3.png,bible/bible4.png">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#d6d9e0" class="icon icon-tabler icons-tabler-filled icon-tabler-eye">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 4c4.29 0 7.863 2.429 10.665 7.154l.22 .379l.045 .1l.03 .083l.014 .055l.014 .082l.011 .1v.11l-.014 .111a.992 .992 0 0 1 -.026 .11l-.039 .108l-.036 .075l-.016 .03c-2.764 4.836 -6.3 7.38 -10.555 7.499l-.313 .004c-4.396 0 -8.037 -2.549 -10.868 -7.504a1 1 0 0 1 0 -.992c2.831 -4.955 6.472 -7.504 10.868 -7.504zm0 5a3 3 0 1 0 0 6a3 3 0 0 0 0 -6" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="card glass">
                <h3 data-i18n="projects.crud.name">CRUD ClinicaOdonto</h3>
                <p><span style="all: unset" data-i18n="projects.crud.short">Un sistema de práctica para la gestión de citas en una clínica odontológica.</span></p>
                <br><br>
                <div class="buttons">
                    <a href="#" class="btn-outline open-project"
                        data-title-es="CRUD ClinicaOdonto"
                        data-title-en="CRUD ClinicaOdonto"
                        data-description-es="Es un proyecto integrador como parte de mi aprendisaje de JAVA web. 
                        La resolución de este problema implicó hacer desde el planteamiento del problema, diseños con UML, hasta llegar a la implementación de un CRUD completo con Java, JSP, Servlets y MySQL."
                        data-description-en="This is an integrative project as part of my learning of JAVA web. 
                        The resolution of this problem involved doing from the problem statement, designs with UML, to reaching the implementation of a complete CRUD with Java, JSP, Servlets and MySQL."
                        data-tech="HTML,CSS,JavaScript,Java,JPA,JSP,Servlets,MySQL"
                        data-images="crud/login.jpeg,crud/inicio.jpeg,crud/table.jpeg,crud/crud.jpeg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#d6d9e0" class="icon icon-tabler icons-tabler-filled icon-tabler-eye">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 4c4.29 0 7.863 2.429 10.665 7.154l.22 .379l.045 .1l.03 .083l.014 .055l.014 .082l.011 .1v.11l-.014 .111a.992 .992 0 0 1 -.026 .11l-.039 .108l-.036 .075l-.016 .03c-2.764 4.836 -6.3 7.38 -10.555 7.499l-.313 .004c-4.396 0 -8.037 -2.549 -10.868 -7.504a1 1 0 0 1 0 -.992c2.831 -4.955 6.472 -7.504 10.868 -7.504zm0 5a3 3 0 1 0 0 6a3 3 0 0 0 0 -6" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="card glass">
                <h3 data-i18n="projects.wedding.name">Invitación de boda</h3>
                <p><span style="all: unset" data-i18n="projects.wedding.short">Sistema para la gestión y organización de invitados a una boda, con confirmación de asistencia y detalles del evento. </span> <span data-i18n="projects.freelance_badge"> Vendido como freelancer</span></p>
                <div class="buttons">
                    <a href="#" class="btn-outline open-project"
                        data-title-es="Invitación de boda"
                        data-title-en="Wedding Invitation"
                        data-description-es="Sistema para la gestión y organización de invitados a una boda, implicando la invitación personalizada para cada familia invitada y el acomodo de invitados según las mesas."
                        data-description-en="System for managing and organizing wedding guests, involving personalized invitations for each invited family and seating arrangements according to tables."
                        data-tech="HTML,CSS,JavaScript, Laravel/php"
                        data-images="wedding/login.jpeg,wedding/inicio.jpeg,wedding/invitados.jpeg,wedding/table.jpeg,wedding/mesas.jpeg,wedding/invitacion.jpeg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#d6d9e0" class="icon icon-tabler icons-tabler-filled icon-tabler-eye">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 4c4.29 0 7.863 2.429 10.665 7.154l.22 .379l.045 .1l.03 .083l.014 .055l.014 .082l.011 .1v.11l-.014 .111a.992 .992 0 0 1 -.026 .11l-.039 .108l-.036 .075l-.016 .03c-2.764 4.836 -6.3 7.38 -10.555 7.499l-.313 .004c-4.396 0 -8.037 -2.549 -10.868 -7.504a1 1 0 0 1 0 -.992c2.831 -4.955 6.472 -7.504 10.868 -7.504zm0 5a3 3 0 1 0 0 6a3 3 0 0 0 0 -6" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <br>
        <h2 data-i18n="projects.wip_title">En proceso</h2>
        <div class="projects-grid">
            <div class="card glass">
                <h3 data-i18n="projects.erp.name">Foturing ERP System</h3>
                <p data-i18n="projects.erp.short">Un sistema de gestión empresarial (Enterprise Resource Planning) dirigido a PYMEs (pequeñas y medianas empresas).</p>
                <div class="buttons">
                    <a href="#" class="btn-outline open-project"
                        data-title-es="Foturing RRHH Module"
                        data-title-en="Foturing HR Module"
                        data-description-es="Por ahora se está cubriendo el módulo de recursos humanos, el cual incluye gestión de empleados, nómina, vacaciones, incapacidades y reportes. 
                            Como próximas funcionalidades se planea un gestor de vacantes y postulaciones.
                            El sistema se está desarrollando con Laravel y se planea cubrir otros módulos como inventarios, ventas y contabilidad.
                            Este sistema cuenta con su propio checador de asistencias a base de geolocalización y reconocimiento facial."
                        data-description-en="The HR module is currently being developed, which includes employee management, payroll, vacations, sick leave, and reports.
                            As upcoming features, a vacancy and application manager is planned.
                            The system is being developed with Laravel and other modules such as inventory, sales, and accounting are planned.
                            This system has its own attendance checker based on geolocation and facial recognition."
                        data-tech="HTML,CSS,JavaScript,PHP/Laravel"
                        data-images="erp/erp.png,erp/erp1.png,erp/erp2.png,erp/erp3.png,erp/erp4.png,erp/erp5.png,erp/erp6.png,erp/erp7.png,erp/erp8.png">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#d6d9e0" class="icon icon-tabler icons-tabler-filled icon-tabler-eye">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 4c4.29 0 7.863 2.429 10.665 7.154l.22 .379l.045 .1l.03 .083l.014 .055l.014 .082l.011 .1v.11l-.014 .111a.992 .992 0 0 1 -.026 .11l-.039 .108l-.036 .075l-.016 .03c-2.764 4.836 -6.3 7.38 -10.555 7.499l-.313 .004c-4.396 0 -8.037 -2.549 -10.868 -7.504a1 1 0 0 1 0 -.992c2.831 -4.955 6.472 -7.504 10.868 -7.504zm0 5a3 3 0 1 0 0 6a3 3 0 0 0 0 -6" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="card glass">
                <h3 data-i18n="projects.port.name">Portfolio interactivo</h3>
                <p data-i18n="projects.port.short">Una presentación fuera de lo común con estilo "pixel gaming" realizada con Laravel, y Phaser.</p>
                <div class="buttons">
                    <a href="#" class="btn-outline open-project"
                        data-title-es="Portfolio interactivo"
                        data-title-en="Interactive Portfolio"
                        data-description-es="Una presentación con estilo pixel gaming hecha en laravel y phaser.
                            Este proyecto es un experimento para crear una forma diferente de presentar mi portafolio, con una experiencia interactiva y divertida.
                            La idea es que el usuario pueda navegar por un mundo pixelado y descubrir mis proyectos de una forma más dinámica e inmersiva."
                        data-description-en="A pixel gaming style presentation built with Laravel and Phaser.
                            This project is an experiment to create a different way of presenting my portfolio, with an interactive and fun experience.
                            The idea is for the user to navigate through a pixelated world and discover my projects in a more dynamic and immersive way."
                        data-tech="HTML,CSS,JavaScript,PHP/Laravel,Phaser"
                        data-images="port/port.png">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#d6d9e0" class="icon icon-tabler icons-tabler-filled icon-tabler-eye">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 4c4.29 0 7.863 2.429 10.665 7.154l.22 .379l.045 .1l.03 .083l.014 .055l.014 .082l.011 .1v.11l-.014 .111a.992 .992 0 0 1 -.026 .11l-.039 .108l-.036 .075l-.016 .03c-2.764 4.836 -6.3 7.38 -10.555 7.499l-.313 .004c-4.396 0 -8.037 -2.549 -10.868 -7.504a1 1 0 0 1 0 -.992c2.831 -4.955 6.472 -7.504 10.868 -7.504zm0 5a3 3 0 1 0 0 6a3 3 0 0 0 0 -6" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="card glass">
                <h3 data-i18n="projects.next.name">¿Qué más me espera?</h3>
                <p data-i18n="projects.next.short">Pronto lo sabremos ambos.</p>
            </div>
        </div>
    </section>

    <section id="skills" class="section">
        <h2 data-i18n="skills.title">Habilidades (Principales)</h2>

        <div class="skills-grid">

            <div class="skill-card glass">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="#df7b2a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-html5">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M20 4l-2 14.5l-6 2l-6 -2l-2 -14.5l16 0" />
                    <path d="M15.5 8h-7l.5 4h6l-.5 3.5l-2.5 .75l-2.5 -.75l-.1 -.5" />
                </svg>
                <span>HTML5</span>
            </div>

            <div class="skill-card glass">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="#2858c7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-css3">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M20 4l-2 14.5l-6 2l-6 -2l-2 -14.5l16 0" />
                    <path d="M8.5 8h7l-4.5 4h4l-.5 3.5l-2.5 .75l-2.5 -.75l-.1 -.5" />
                </svg>
                <span>CSS3</span>
            </div>

            <div class="skill-card glass">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="#f6fa23" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-javascript">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M20 4l-2 14.5l-6 2l-6 -2l-2 -14.5l16 0" />
                    <path d="M7.5 8h3v8l-2 -1" />
                    <path d="M16.5 8h-2.5a.5 .5 0 0 0 -.5 .5v3a.5 .5 0 0 0 .5 .5h1.423a.5 .5 0 0 1 .495 .57l-.418 2.93l-2 .5" />
                </svg>
                <span>JavaScript</span>
            </div>

            <div class="skill-card glass">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="#5a3caa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-php">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M2 12a10 9 0 1 0 20 0a10 9 0 1 0 -20 0" />
                    <path d="M5.5 15l.395 -1.974l.605 -3.026h1.32a1 1 0 0 1 .986 1.164l-.167 1a1 1 0 0 1 -.986 .836h-1.653" />
                    <path d="M15.5 15l.395 -1.974l.605 -3.026h1.32a1 1 0 0 1 .986 1.164l-.167 1a1 1 0 0 1 -.986 .836h-1.653" />
                    <path d="M12 7.5l-1 5.5" />
                    <path d="M11.6 10h2.4l-.5 3" />
                </svg>
                <span>PHP</span>
            </div>

            <div class="skill-card glass">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="#c40101" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-laravel">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M3 17l8 5l7 -4v-8l-4 -2.5l4 -2.5l4 2.5v4l-11 6.5l-4 -2.5v-7.5l-4 -2.5l0 11.5" />
                    <path d="M11 18v4" />
                    <path d="M7 15.5l7 -4" />
                    <path d="M14 7.5v4" />
                    <path d="M14 11.5l4 2.5" />
                    <path d="M11 13v-7.5l-4 -2.5l-4 2.5" />
                    <path d="M7 8l4 -2.5" />
                    <path d="M18 10l4 -2.5" />
                </svg>
                <span>Laravel</span>
            </div>

            <div class="skill-card glass">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="#3b5594" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-mysql">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M13 21c-1.427 -1.026 -3.59 -3.854 -4 -6c-.486 .77 -1.501 2 -2 2c-1.499 -.888 -.574 -3.973 0 -6c-1.596 -1.433 -2.468 -2.458 -2.5 -4c-3.35 -3.44 -.444 -5.27 2.5 -3h1c8.482 .5 6.421 8.07 9 11.5c2.295 .522 3.665 2.254 5 3.5c-2.086 -.2 -2.784 -.344 -3.5 0c.478 1.64 2.123 2.2 3.5 3" />
                    <path d="M9 7h.01" />
                </svg>
                <span>MySQL</span>
            </div>
        </div>
        <br>
        <h3 data-i18n="skills.others">Otras</h3>
        <br>
        <div class="skills-grid">
            <div class="skill-card glass">
                <svg xmlns="http://www.w3.org/2000/svg" height="113.4" width="150" viewBox="0 0 378 500">
                    <path d="M278.577 426.546h-2.038v-1.14h5.486v1.14h-2.024v5.688h-1.424zm10.942.297h-.032l-2.019 5.392h-.924l-2.006-5.392h-.025v5.392h-1.342v-6.828h1.975l1.86 4.835 1.854-4.835h1.968v6.828h-1.31v-5.392zM96.154 286.925s-14.178 8.245 10.09 11.035c29.4 3.354 44.426 2.873 76.825-3.259 0 0 8.518 5.341 20.414 9.967-72.63 31.128-164.376-1.803-107.329-17.743m-8.875-40.62s-15.902 11.771 8.384 14.283c31.406 3.24 56.208 3.505 99.125-4.759 0 0 5.936 6.018 15.27 9.309-87.814 25.678-185.623 2.025-122.779-18.833" fill="#5382a1" />
                    <path d="M162.098 177.4c17.896 20.604-4.702 39.145-4.702 39.145s45.441-23.458 24.572-52.833c-19.491-27.394-34.438-41.005 46.479-87.934 0 0-127.013 31.722-66.349 101.622" fill="#f8981d" />
                    <path d="M258.157 316.97s10.492 8.645-11.555 15.333c-41.923 12.7-174.488 16.535-211.314.506-13.238-5.759 11.587-13.751 19.396-15.428 8.144-1.766 12.798-1.437 12.798-1.437-14.722-10.371-95.157 20.364-40.857 29.166 148.084 24.015 269.943-10.814 231.532-28.14M102.972 204.218s-67.431 16.016-23.879 21.832c18.389 2.462 55.047 1.905 89.193-.956 27.906-2.354 55.927-7.359 55.927-7.359s-9.84 4.214-16.959 9.075c-68.475 18.009-200.756 9.631-162.674-8.79 32.206-15.568 58.392-13.802 58.392-13.802m120.963 67.614c69.608-36.171 37.424-70.931 14.96-66.248-5.506 1.146-7.961 2.139-7.961 2.139s2.044-3.202 5.948-4.588c44.441-15.624 78.619 46.081-14.346 70.52 0 .001 1.077-.962 1.399-1.823" fill="#5382a1" />
                    <path d="M181.968 0s38.55 38.563-36.563 97.862c-60.233 47.568-13.735 74.69-.025 105.678-35.159-31.722-60.961-59.647-43.651-85.637C127.136 79.752 197.522 61.255 181.968 0" fill="#f8981d" />
                </svg>
                <span>JAVA</span>
            </div>
            <div class="skill-card glass">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="#d6d9e0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-python">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 9h-7a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h3" stroke="#0d348d" />
                    <path d="M12 15h7a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-3" stroke="#efff0f" />
                    <path d="M8 9v-4a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v5a2 2 0 0 1 -2 2h-4a2 2 0 0 0" stroke="#0d348d" />
                    <path d="M8 14v5a2 2 0 0 0 2 2h4a2 2 0 0 0 2 -2v-4" stroke="#efff0f" />
                    <path d="M11 6l0 .01" />
                    <path d="M13 18l0 .01" />
                </svg>
                <span>Python</span>
            </div>
            <div class="skill-card glass">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="#c54b13" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-git">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M15 12a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                    <path d="M11 8a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                    <path d="M11 16a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                    <path d="M12 15v-6" />
                    <path d="M15 11l-2 -2" />
                    <path d="M11 7l-1.9 -1.9" />
                    <path d="M13.446 2.6l7.955 7.954a2.045 2.045 0 0 1 0 2.892l-7.955 7.955a2.045 2.045 0 0 1 -2.892 0l-7.955 -7.955a2.045 2.045 0 0 1 0 -2.892l7.955 -7.955a2.045 2.045 0 0 1 2.892 0" />
                </svg>
                <span>Git</span>
            </div>
            <div class="skill-card glass">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="#d6d9e0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-github">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" />
                </svg>
                <span>GitHub</span>
            </div>
            <div class="skill-card glass">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-blender">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M9 14a6 5 0 1 0 12 0a6 5 0 1 0 -12 0" stroke="#c9851f" />
                    <path d="M14 14a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" stroke="#041a7cb2" />
                    <path d="M3 16l9 -6.5" stroke="#c9851f" />
                    <path d="M6 9h9" stroke="#c9851f" />
                    <path d="M13 5l5.65 5" stroke="#c9851f" />
                </svg>
                <span>Blender</span>
            </div>
            <div class="skill-card glass">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="#d6d9e0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-prompt">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M5 7l5 5l-5 5" />
                    <path d="M13 17l6 0" />
                </svg>
                <span data-i18n="skills.scrum">Scrum y Agile</span>
            </div>
            <div class="skill-card glass">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="#9f09bd" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-bootstrap">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M2 12a2 2 0 0 0 2 -2v-4a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v4a2 2 0 0 0 2 2" />
                    <path d="M2 12a2 2 0 0 1 2 2v4a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-4a2 2 0 0 1 2 -2" />
                    <path d="M9 16v-8h3.5a2 2 0 1 1 0 4h-3.5h4a2 2 0 1 1 0 4h-4" />
                </svg>
                <span>Bootstrap</span>
            </div>
            <div class="skill-card glass">
                <svg xmlns="http://www.w3.org/2000/svg" height="80" width="150" viewBox="0 0 734.27 578.71">
                    <defs>
                        <style>
                            .cls-1 {
                                fill: none;
                            }

                            .cls-2 {
                                clip-path: url(#clippath);
                            }

                            .cls-3 {
                                fill: #fff;
                            }

                            .cls-4 {
                                fill: #b8eefe;
                            }

                            .cls-5 {
                                fill: #8fb7e5;
                            }

                            .cls-6 {
                                mix-blend-mode: overlay;
                            }

                            .cls-7 {
                                fill: url(#radial-gradient-2);
                            }

                            .cls-8 {
                                mix-blend-mode: soft-light;
                            }

                            .cls-9 {
                                fill: url(#radial-gradient);
                            }

                            .cls-10 {
                                isolation: isolate;
                            }
                        </style>
                        <clipPath id="clippath">
                            <path class="cls-1" d="m524.48,180.32h-50.35l50.35,41.94v25.16h-96.5v-25.16h54.55l-54.55-37.74v-29.35h96.5v25.16Zm-264.34,67.1h-29.37v-92.26h29.37v33.55h29.37v-33.55h29.37v92.26h-29.37v-33.55h-29.37v33.55Zm113.29-62.9l-20.98,62.9h-29.37l33.57-92.26h33.57l33.57,92.26h-29.37l-20.98-62.9Zm-239.16-29.35v92.26h29.37v-62.9h37.76v4.19h-33.57l12.59,29.35h46.15v-62.9h-92.31Zm478.32,29.35v-29.35h-83.92v92.26h83.92v-25.16h-58.74v-4.19h58.74v-29.35h-58.74v-4.19h58.74Zm79.72,29.35h20.98v-58.71h-96.5v92.26h29.37v-62.9h37.76v4.19h-33.57l33.57,79.68h29.37l-20.98-54.52Z" />
                        </clipPath>
                        <radialGradient id="radial-gradient" cx="427.97" cy="289.35" fx="427.97" fy="289.35" r="289.43" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#bfebfd" />
                            <stop offset="1" stop-color="#bfebfd" stop-opacity="0" />
                        </radialGradient>
                        <radialGradient id="radial-gradient-2" cx="427.97" cy="184.52" fx="427.97" fy="184.52" r="134.23" xlink:href="#radial-gradient" />
                    </defs>
                    <g class="cls-10">
                        <g id="Tweaked">
                            <path d="m698.7,218.06h18.78v-67.1h-293.71c0,11.93.45,22.9.42,34.83,0,.79.28,1.22.9,1.67,25.34,18.15,44.63,30.59,44.63,30.59h-45.96s.49,9.35.49,15.36c-.06.01-.17,2.04-.17,2.04l-31.69-84.5h-37.96s-22.34,58.49-31.58,86.22c-.1,0-.19-4.02-.28-4.03v-71.31c0-7.11.49-10.88.49-10.88h-37.76v33.55h-20.98v-33.55h-134.27v100.64h37.76s.37-33.42.37-51.01c.09-.02.18-.03.26-.05,2.6,6.7,5.12,14.93,7.76,21.71h50.35v29.35h37.76v-33.55h20.98v33.55h70.33l18.09-55.39,17.47,55.39h259.14v-51.32l30.9,72.27,38.43.02-20.98-54.52Zm-174.22-33.55v32.35l-40.76-32.35h40.76Z" />
                            <path class="cls-5" d="m524.48,180.32h-50.35l50.35,41.94v25.16h-96.5v-25.16h54.55l-54.55-37.74v-29.35h96.5v25.16Zm-264.34,67.1h-29.37v-92.26h29.37v33.55h29.37v-33.55h29.37v92.26h-29.37v-33.55h-29.37v33.55Zm113.29-62.9l-20.98,62.9h-29.37l33.57-92.26h33.57l33.57,92.26h-29.37l-20.98-62.9Zm-239.16-29.35v92.26h29.37v-62.9h37.76v4.19h-33.57l12.59,29.35h46.15v-62.9h-92.31Zm478.32,29.35v-29.35h-83.92v92.26h83.92v-25.16h-58.74v-4.19h58.74v-29.35h-58.74v-4.19h58.74Zm79.72,29.35h20.98v-58.71h-96.5v92.26h29.37v-62.9h37.76v4.19h-33.57l33.57,79.68h29.37l-20.98-54.52Z" />
                            <g class="cls-2">
                                <path class="cls-9" d="m427.97,0c159.89,0,289.51,129.55,289.51,289.35s-129.62,289.35-289.51,289.35S138.46,449.16,138.46,289.35,268.08,0,427.97,0Z" />
                                <g class="cls-6">
                                    <path class="cls-7" d="m427.97,50.32c74.15,0,134.27,60.08,134.27,134.19s-60.11,134.19-134.27,134.19-134.27-60.08-134.27-134.19,60.11-134.19,134.27-134.19Z" />
                                </g>
                                <g class="cls-8">
                                    <path class="cls-4" d="m167.83,130h109.09l-167.83,146.77H0l167.83-146.77Zm180.42,0h29.37l-167.83,146.77h-29.37l167.83-146.77Zm75.52,0h71.33l-167.83,146.77h-71.33l167.83-146.77Zm100.7,0h54.55l-167.83,146.77h-54.55l167.83-146.77Zm79.72,0h29.37l-167.83,146.77h-29.37l167.83-146.77Zm100.7,0h29.37l-167.83,146.77h-29.37l167.83-146.77Z" />
                                </g>
                                <g class="cls-8">
                                    <path class="cls-4" d="m167.83,130h109.09l-167.83,146.77H0l167.83-146.77Zm180.42,0h29.37l-167.83,146.77h-29.37l167.83-146.77Zm75.52,0h71.33l-167.83,146.77h-71.33l167.83-146.77Zm100.7,0h54.55l-167.83,146.77h-54.55l167.83-146.77Zm79.72,0h29.37l-167.83,146.77h-29.37l167.83-146.77Zm100.7,0h29.37l-167.83,146.77h-29.37l167.83-146.77Z" />
                                </g>
                                <path class="cls-3" d="m415.38,159.36l-281.12-4.19h579.02l-297.9,4.19Z" />
                            </g>
                        </g>
                    </g>
                </svg>
                <span>Phaser</span>
            </div>
            <div class="skill-card glass">
                <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" id="N8n--Streamline-Simple-Icons" height="80" width="80">
                    <path d="M21.4737 5.6842c-1.1772 0 -2.1663 0.8051 -2.4468 1.8947h-2.8955c-1.235 0 -2.289 0.893 -2.492 2.111l-0.1038 0.623a1.263 1.263 0 0 1 -1.246 1.0555H11.289c-0.2805 -1.0896 -1.2696 -1.8947 -2.4468 -1.8947s-2.1663 0.8051 -2.4467 1.8947H4.973c-0.2805 -1.0896 -1.2696 -1.8947 -2.4468 -1.8947C1.1311 9.4737 0 10.6047 0 12s1.131 2.5263 2.5263 2.5263c1.1772 0 2.1663 -0.8051 2.4468 -1.8947h1.4223c0.2804 1.0896 1.2696 1.8947 2.4467 1.8947 1.1772 0 2.1663 -0.8051 2.4468 -1.8947h1.0008a1.263 1.263 0 0 1 1.2459 1.0555l0.1038 0.623c0.203 1.218 1.257 2.111 2.492 2.111h0.3692c0.2804 1.0895 1.2696 1.8947 2.4468 1.8947 1.3952 0 2.5263 -1.131 2.5263 -2.5263s-1.131 -2.5263 -2.5263 -2.5263c-1.1772 0 -2.1664 0.805 -2.4468 1.8947h-0.3692a1.263 1.263 0 0 1 -1.246 -1.0555l-0.1037 -0.623A2.52 2.52 0 0 0 13.9607 12a2.52 2.52 0 0 0 0.821 -1.4794l0.1038 -0.623a1.263 1.263 0 0 1 1.2459 -1.0555h2.8955c0.2805 1.0896 1.2696 1.8947 2.4468 1.8947 1.3952 0 2.5263 -1.131 2.5263 -2.5263s-1.131 -2.5263 -2.5263 -2.5263m0 1.2632a1.263 1.263 0 0 1 1.2631 1.2631 1.263 1.263 0 0 1 -1.2631 1.2632 1.263 1.263 0 0 1 -1.2632 -1.2632 1.263 1.263 0 0 1 1.2632 -1.2631M2.5263 10.7368A1.263 1.263 0 0 1 3.7895 12a1.263 1.263 0 0 1 -1.2632 1.2632A1.263 1.263 0 0 1 1.2632 12a1.263 1.263 0 0 1 1.2631 -1.2632m6.3158 0A1.263 1.263 0 0 1 10.1053 12a1.263 1.263 0 0 1 -1.2632 1.2632A1.263 1.263 0 0 1 7.579 12a1.263 1.263 0 0 1 1.2632 -1.2632m10.1053 3.7895a1.263 1.263 0 0 1 1.2631 1.2632 1.263 1.263 0 0 1 -1.2631 1.2631 1.263 1.263 0 0 1 -1.2632 -1.2631 1.263 1.263 0 0 1 1.2632 -1.2632" fill="#fa5b5b" stroke-width="1"></path>
                </svg>
                <span>N8N</span>
            </div>
            <div class="skill-card glass">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="#6990ec" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-docker">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M22 12.54c-1.804 -.345 -2.701 -1.08 -3.523 -2.94c-.487 .696 -1.102 1.568 -.92 2.4c.028 .238 -.32 1 -.557 1h-14c0 5.208 3.164 7 6.196 7c4.124 .022 7.828 -1.376 9.854 -5c1.146 -.101 2.296 -1.505 2.95 -2.46" />
                    <path d="M5 10h3v3h-3l0 -3" />
                    <path d="M8 10h3v3h-3l0 -3" />
                    <path d="M11 10h3v3h-3l0 -3" />
                    <path d="M8 7h3v3h-3l0 -3" />
                    <path d="M11 7h3v3h-3l0 -3" />
                    <path d="M11 4h3v3h-3l0 -3" />
                    <path d="M4.571 18c1.5 0 2.047 -.074 2.958 -.78" />
                    <path d="M10 16l0 .01" />
                </svg>
                <span>Docker</span>
            </div>
            <div class="skill-card glass">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="#d6d9e0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-tool">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M7 10h3v-3l-3.5 -3.5a6 6 0 0 1 8 8l6 6a2 2 0 0 1 -3 3l-6 -6a6 6 0 0 1 -8 -8l3.5 3.5" />
                </svg>
                <span data-i18n="skills.repair">Reparación y Mantenimiento (Hard &amp; Soft)</span>
            </div>
            <div class="skill-card glass">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 60 70" fill="#d6d9e0" class="icon icon-tabler icons-tabler-filled icon-tabler-point">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <circle cx="10" cy="35" r="5" />
                    <circle cx="30" cy="35" r="5" />
                    <circle cx="50" cy="35" r="5" />
                </svg>
                <span data-i18n="skills.learning">Estoy en continuo aprendizaje</span>
            </div>
        </div>
    </section>

    <section id="certificate" class="section">
        <h2 data-i18n="certs.title">Certificados</h2>

        <div class="cert-grid">

            <div class="cert-card glass">
                <img src="{{ asset('assets/img/certificados/titulo.png') }}" alt="Título">

                <div class="cert-info">
                    <h3 data-i18n="certs.ipn.name">Técnico en Informática</h3>
                    <p>Instituto Politécnico Nacional (IPN)</p>
                    <span>2024</span>

                    <a href="{{ asset('assets/documents/tituloEscaneo.pdf') }}"
                        target="_blank"
                        class="btn-outline"
                        data-i18n="certs.ipn.btn_title">
                        Título
                    </a>
                    <a href="{{ asset('assets/documents/Cedula.pdf') }}"
                        target="_blank"
                        class="btn-outline"
                        data-i18n="certs.ipn.btn_cedula">
                        Cédula
                    </a>
                </div>
            </div>

            <div class="cert-card glass">
                <img src="{{ asset('assets/img/certificados/springboot.png') }}" alt="Certificado">

                <div class="cert-info">
                    <h3 data-i18n="certs.springboot.name">Desarrollo de APIs con Spring Boot</h3>
                    <p>TodoCode</p>
                    <span>2026</span>

                    <a href="{{ asset('assets/documents/Spring Boot - TodoCode.pdf') }}"
                        target="_blank"
                        class="btn-outline"
                        data-i18n="certs.view_pdf">
                        Ver PDF
                    </a>
                </div>
            </div>

            <div class="cert-card glass">
                <img src="{{ asset('assets/img/certificados/microservicios.png') }}" alt="Certificado">

                <div class="cert-info">
                    <h3 data-i18n="certs.microservices.name">Microservicios con Spring Cloud</h3>
                    <p>TodoCode</p>
                    <span>2026</span>

                    <a href="{{ asset('assets/documents/Microservicios con Spring Cloud - TodoCode.pdf') }}"
                        target="_blank"
                        class="btn-outline"
                        data-i18n="certs.view_pdf">
                        Ver PDF
                    </a>
                </div>
            </div>

            <div class="cert-card glass">
                <img src="{{ asset('assets/img/certificados/JavaPoo.png') }}" alt="Certificado">

                <div class="cert-info">
                    <h3 data-i18n="certs.java.name">Programación Orientada a Objetos con Java</h3>
                    <p>TodoCode</p>
                    <span>2025</span>

                    <a href="{{ asset('assets/documents/CertificadoCursoPOOconJava-TodoCode.pdf') }}"
                        target="_blank"
                        class="btn-outline"
                        data-i18n="certs.view_pdf">
                        Ver PDF
                    </a>
                </div>
            </div>

            <div class="cert-card glass">
                <img src="{{ asset('assets/img/certificados/BdRelacionales.png') }}" alt="Certificado">

                <div class="cert-info">
                    <h3 data-i18n="certs.mysql.name">Base de Datos Relacionales con MySQL</h3>
                    <p>TodoCode</p>
                    <span>2025</span>

                    <a href="{{ asset('assets/documents/BDRelacionalesconMySQL-TodoCode.pdf') }}"
                        target="_blank"
                        class="btn-outline"
                        data-i18n="certs.view_pdf">
                        Ver PDF
                    </a>
                </div>
            </div>

            <div class="cert-card glass">
                <img src="{{ asset('assets/img/certificados/GitAndGitHub.png') }}" alt="Certificado">

                <div class="cert-info">
                    <h3 data-i18n="certs.git.name">Git y GitHub</h3>
                    <p>TodoCode</p>
                    <span>2025</span>

                    <a href="{{ asset('assets/documents/GityGitHub-TodoCode.pdf') }}"
                        target="_blank"
                        class="btn-outline"
                        data-i18n="certs.view_pdf">
                        Ver PDF
                    </a>
                </div>
            </div>

        </div>
    </section>

    <section id="contact" class="section contact-section">
        <h2 data-i18n="contact.title">Contacto</h2>

        <div class="contact-container glass">
            <form action="https://formspree.io/f/xeeldvvk" id="contactForm" method="POST">

                <div class="input-group">
                    <input type="text" name="name" required>
                    <label data-i18n="contact.name">Nombre</label>
                </div>
                <div class="input-group">
                    <input type="email" name="email" required>
                    <label data-i18n="contact.email">Correo Electrónico</label>
                </div>
                <div class="input-group">
                    <textarea name="message" required></textarea>
                    <label data-i18n="contact.message">Mensaje</label>
                </div>
                <button type="submit" class="send-button">
                    <span class="default" data-i18n="contact.btn_send">Enviar</span>
                    <span class="success" data-i18n="contact.btn_sent">Enviado</span>
                </button>
            </form>
        </div>
    </section>

    <footer>
        <span data-i18n="footer.copy">© 2026 Benjamín Jiménez — Web Developer</span>
    </footer>

    <div class="modal-overlay" id="projectModal">
        <div class="modal glass">
            <button class="modal-close" id="closeModal">&times;</button>

            <h2 id="modalTitle"></h2>
            <p id="modalDescription"></p>

            <div class="modal-tech">
                <h4 data-i18n="modal.tech_title">Lenguajes implicados</h4>
                <ul id="modalTechList"></ul>
            </div>

            <div class="carousel">
                <button class="carousel-btn prev">&#10094;</button>
                <div class="carousel-track" id="modalImages"></div>
                <button class="carousel-btn next">&#10095;</button>
            </div>
        </div>
    </div>

    <div class="plane-overlay">
        <div class="plane-wrapper">
            <svg class="plane-svg" viewBox="0 0 512.003 512.003">
                <polygon fill="#0068FF" points="276.547,363.724 156.428,439.952 229.841,320.17" />
                <polygon fill="#10BAFC" points="424.343,501.551 229.841,320.17 499.021,10.446" />
                <polygon fill="#10BAFC" points="156.428,264.439 12.979,188.915 499.021,10.446" />
                <polygon fill="#0084FF" points="156.428,264.439 156.428,439.952 229.841,320.17 499.021,10.446" />
                <path fill="white" d="M409.804,197.83c-2.509,0-5.026-0.898-7.027-2.72c-4.269-3.883-4.582-10.491-0.699-14.76l0.164-0.181
            c3.883-4.268,10.493-4.582,14.76-0.698c4.27,3.883,4.582,10.491,0.699,14.76l-0.164,0.181
            C415.475,196.679,412.644,197.83,409.804,197.83z" />
            </svg>
        </div>
    </div>

    <script src="{{ asset('assets/js/idiomas.js') }}"></script>
    <script src="{{ asset('assets/js/modal.js') }}"></script>
    <script src="{{ asset('assets/js/particulas.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="{{ asset('assets/js/correo.js') }}"></script>
    <script>
        const hamburger = document.getElementById('hamburger');
        const nav = document.querySelector('.navbar nav');
        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('open');
            nav.classList.toggle('open');
        });
        // Cierra al hacer click en un link
        nav.querySelectorAll('a').forEach(a => a.addEventListener('click', () => {
            hamburger.classList.remove('open');
            nav.classList.remove('open');
        }));
    </script>

</body>

</html>