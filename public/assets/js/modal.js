const modal = document.getElementById("projectModal");
const closeModal = document.getElementById("closeModal");

const modalTitle = document.getElementById("modalTitle");
const modalDescription = document.getElementById("modalDescription");
const modalTechList = document.getElementById("modalTechList");
const modalImages = document.getElementById("modalImages");

document.querySelectorAll(".open-project").forEach(button => {
    button.addEventListener("click", e => {
        e.preventDefault();

        // Título — usa data-title-es / data-title-en si existen, si no cae a data-title
        const titleKey = `data-title-${currentLang}`;
        modalTitle.textContent = button.getAttribute(`data-title-${currentLang}`)
            || button.dataset.title;

        // Descripción bilingüe
        modalDescription.textContent = button.getAttribute(`data-description-${currentLang}`)
            || button.dataset.description;

        // Tecnologías
        modalTechList.innerHTML = "";
        button.dataset.tech.split(",").forEach(tech => {
            const li = document.createElement("li");
            li.textContent = tech.trim();
            modalTechList.appendChild(li);
        });

        // Imágenes
        modalImages.innerHTML = "";
        button.dataset.images.split(",").forEach(img => {
            const image = document.createElement("img");
            image.src = `/assets/img/${img.trim()}`;
            image.alt = "Preview";
            modalImages.appendChild(image);
        });

        // Reset carrusel
        currentIndex = 0;
        updateCarousel();

        modal.classList.add("active");
        document.body.classList.add("modal-open");
    });
});

closeModal.addEventListener("click", closeProjectModal);

modal.addEventListener("click", e => {
    if (e.target === modal) {
        closeProjectModal();
    }
});

function closeProjectModal() {
    modal.classList.remove("active");
    document.body.classList.remove("modal-open");
}

let currentIndex = 0;

function updateCarousel() {
    const track = document.getElementById("modalImages");
    const slides = track.children;

    if (slides.length === 0) return;

    track.style.transform = `translateX(-${currentIndex * 100}%)`;
}

document.querySelector(".carousel-btn.next").addEventListener("click", () => {
    const slides = document.getElementById("modalImages").children;

    if (slides.length === 0) return;

    currentIndex++;
    if (currentIndex >= slides.length) {
        currentIndex = 0;
    }
    updateCarousel();
});

document.querySelector(".carousel-btn.prev").addEventListener("click", () => {
    const slides = document.getElementById("modalImages").children;

    if (slides.length === 0) return;

    currentIndex--;
    if (currentIndex < 0) {
        currentIndex = slides.length - 1;
    }
    updateCarousel();
});
