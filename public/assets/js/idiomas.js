
// ============================================================
// i18n — Sistema de idiomas
// ============================================================
const translations = {
    es: {
        "nav.home": "Inicio",
        "nav.about": "Sobre mí",
        "nav.projects": "Proyectos",
        "nav.certificates": "Certificados",
        "nav.contact": "Contacto",

        "hero.greeting": "Hola, soy",
        "hero.role": "Desarrollador Web Full Stack",
        "hero.tagline": "Construyo experiencias digitales elegantes, funcionales y bien estructuradas.",
        "hero.btn_about": "Sobre mí",
        "hero.btn_contact": "Contactar",

        "about.title": "Sobre mí",
        "about.p1": "Especialista en convertir la complejidad operativa en eficiencia tecnológica a través de arquitecturas limpias. No solo construyo aplicaciones; diseño experiencias digitales personalizadas que optimizan resultados y resuelven problemas reales.",
        "about.btn_projects": "Ver proyectos",
        "about.btn_skills": "Habilidades",

        "projects.title": "Proyectos",
        "projects.wip_title": "En proceso",
        "projects.freelance_badge": "Vendido como freelancer",

        "projects.pas.name": "Profe Attendance System (P.A.S.)",
        "projects.pas.short": "Entorno desarrollado para la toma de asistencia cada hora del personal docente en una escuela. Con este entorno se migró de un sistema manual a un sistema digital.",

        "projects.ip.name": "Control de Incidencias",
        "projects.ip.short": "Hecho a la medida de una empresa, este es un sistema dedicado a la automatización de reportes de incidencias en una empresa.",

        "projects.allcat.name": "AllCatalog",
        "projects.allcat.short": "Entorno para aquellos que se dedican a la venta por catálogo. Se centralizan todas las marcas que se manejan en un solo lugar.",

        "projects.bible.name": "Biblioteca de Manuales",
        "projects.bible.short": "Una solución sencilla pero eficaz para proveer manuales de usuario en una empresa sin exponerse a terceros.",

        "projects.wedding.name": "Invitación de boda",
        "projects.wedding.short": "Sistema para la gestión y organización de invitados a una boda, con confirmación de asistencia y detalles del evento.",

        "projects.crud.name": "CRUD ClinicaOdonto",
        "projects.crud.short": "Un sistema de práctica para la gestión de citas en una clínica odontológica.",

        "projects.erp.name": "Foturing ERP System",
        "projects.erp.short": "Un sistema de gestión empresarial (Enterprise Resource Planning) dirigido a PYMEs (pequeñas y medianas empresas).",

        "projects.port.name": "Portfolio interactivo",
        "projects.port.short": "Una presentación fuera de lo común con estilo \"pixel gaming\" realizada con Laravel, y Phaser.",

        "projects.next.name": "¿Qué más me espera?",
        "projects.next.short": "Pronto lo sabremos ambos.",

        "skills.title": "Habilidades (Principales)",
        "skills.others": "Otras",
        "skills.scrum": "Scrum y Agile",
        "skills.repair": "Reparación y Mantenimiento (Hard & Soft)",
        "skills.learning": "Estoy en continuo aprendizaje",

        "certs.title": "Certificados",
        "certs.view_pdf": "Ver PDF",
        "certs.ipn.name": "Técnico en Informática",
        "certs.ipn.btn_title": "Título",
        "certs.ipn.btn_cedula": "Cédula",
        "certs.springboot.name": "Desarrollo de APIs con Spring Boot",
        "certs.microservices.name": "Microservicios con Spring Cloud",
        "certs.java.name": "Programación Orientada a Objetos con Java",
        "certs.mysql.name": "Base de Datos Relacionales con MySQL",
        "certs.git.name": "Git y GitHub",

        "contact.title": "Contacto",
        "contact.name": "Nombre",
        "contact.email": "Correo Electrónico",
        "contact.message": "Mensaje",
        "contact.btn_send": "Enviar",
        "contact.btn_sent": "Enviado",

        "footer.copy": "© 2026 Benjamín Jiménez — Web Developer",

        "modal.tech_title": "Lenguajes implicados",
    },
    en: {
        "nav.home": "Home",
        "nav.about": "About me",
        "nav.projects": "Projects",
        "nav.certificates": "Certificates",
        "nav.contact": "Contact",

        "hero.greeting": "Hi, I'm",
        "hero.role": "Full Stack Web Developer",
        "hero.tagline": "I build elegant, functional, and well-structured digital experiences.",
        "hero.btn_about": "About me",
        "hero.btn_contact": "Contact",

        "about.title": "About me",
        "about.p1": "Specialist in turning operational complexity into technological efficiency through clean architectures. I don't just build applications; I design personalized digital experiences that optimize results and solve real problems.",
        "about.btn_projects": "View projects",
        "about.btn_skills": "Skills",

        "projects.title": "Projects",
        "projects.wip_title": "In progress",
        "projects.freelance_badge": "Sold as freelancer",

        "projects.pas.name": "Profe Attendance System (P.A.S.)",
        "projects.pas.short": "Environment developed for hourly attendance tracking of teaching staff at a school. This system migrated the process from manual to fully digital.",

        "projects.ip.name": "Incident Control",
        "projects.ip.short": "Custom-built for a company, this system is dedicated to automating incident reporting.",

        "projects.allcat.name": "AllCatalog",
        "projects.allcat.short": "Environment for catalog sellers. All brands are centralized in one place.",

        "projects.bible.name": "Manuals Library",
        "projects.bible.short": "A simple but effective solution for providing user manuals within a company without exposure to third parties.",

        "projects.wedding.name": "Wedding Invitation",
        "projects.wedding.short": "System for managing and organizing wedding guests, with RSVP and event details.",

        "projects.crud.name": "CRUD ClinicaOdonto",
        "projects.crud.short": "A practice system for managing appointments in a dental clinic.",

        "projects.erp.name": "Foturing ERP System",
        "projects.erp.short": "An Enterprise Resource Planning system aimed at SMEs (small and medium-sized enterprises).",

        "projects.port.name": "Interactive Portfolio",
        "projects.port.short": "An unconventional presentation with a \"pixel gaming\" style built with Laravel and Phaser.",

        "projects.next.name": "What's next for me?",
        "projects.next.short": "We'll both find out soon.",

        "skills.title": "Skills (Main)",
        "skills.others": "Others",
        "skills.scrum": "Scrum & Agile",
        "skills.repair": "Hardware & Software Repair and Maintenance",
        "skills.learning": "I'm in continuous learning",

        "certs.title": "Certificates",
        "certs.view_pdf": "View PDF",
        "certs.ipn.name": "Computer Technician",
        "certs.ipn.btn_title": "Degree",
        "certs.ipn.btn_cedula": "Professional ID",
        "certs.springboot.name": "API Development with Spring Boot",
        "certs.microservices.name": "Microservices with Spring Cloud",
        "certs.java.name": "Object-Oriented Programming with Java",
        "certs.mysql.name": "Relational Databases with MySQL",
        "certs.git.name": "Git and GitHub",

        "contact.title": "Contact",
        "contact.name": "Name",
        "contact.email": "Email Address",
        "contact.message": "Message",
        "contact.btn_send": "Send",
        "contact.btn_sent": "Sent",

        "footer.copy": "© 2026 Benjamín Jiménez — Web Developer",

        "modal.tech_title": "Technologies involved",
    }
};

let currentLang = localStorage.getItem("lang") || "es";

function applyTranslations(lang) {
    document.documentElement.lang = lang;
    currentLang = lang;
    localStorage.setItem("lang", lang);

    // Textos normales
    document.querySelectorAll("[data-i18n]").forEach(el => {
        const key = el.getAttribute("data-i18n");
        if (translations[lang][key] !== undefined) {
            el.textContent = translations[lang][key];
        }
    });

    // Botón del switcher
    const toggle = document.getElementById("lang-toggle");
    if (toggle) toggle.textContent = lang === "es" ? "EN" : "ES";
}

document.getElementById("lang-toggle").addEventListener("click", () => {
    applyTranslations(currentLang === "es" ? "en" : "es");
});

// Aplicar al cargar
applyTranslations(currentLang);
