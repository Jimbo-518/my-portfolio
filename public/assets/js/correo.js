const form = document.querySelector("form");
const button = document.querySelector(".send-button");
const overlay = document.querySelector(".plane-overlay");
const plane = document.querySelector(".plane-wrapper");

form.addEventListener("submit", async (e) => {

    e.preventDefault();

    if (button.classList.contains("active")) return;

    button.classList.add("active");

    const formData = new FormData(form);

    try {

        const response = await fetch(form.action, {
            method: "POST",
            body: formData,
            headers: {
                'Accept': 'application/json'
            }
        });

        if (response.ok) {

            const tl = gsap.timeline({
                onComplete: () => {

                    gsap.set(plane, {
                        x: 0,
                        y: 0,
                        rotate: 45
                    });

                    setTimeout(() => {
                        button.style.setProperty('--text-opacity', 1);
                        button.style.setProperty('--success-opacity', 0);
                        button.style.setProperty('--success-scale', .2);
                        button.classList.remove("active");
                        form.reset();
                    }, 2500);

                }
            });

            tl.to(overlay, {
                opacity: 1,
                duration: 0.2
            });

            tl.to(button, {
                '--text-opacity': 0,
                duration: 0.15
            }, "<");

            tl.to(button, {
                '--success-opacity': 1,
                '--success-scale': 1,
                duration: 0.25
            });

            tl.fromTo(plane, {
                x: 0,
                y: 0,
                rotate: 45,
                scale: 1
            }, {
                x: window.innerWidth * 0.8,
                y: -window.innerHeight * 0.9,
                rotate: 60,
                scale: 0.6,
                duration: 0.9,
                ease: "power3.in"
            });

            tl.to(overlay, {
                opacity: 0,
                duration: 0.3
            });

        } else {
            throw new Error("Error en el envío");
        }

    } catch (error) {

        button.classList.remove("active");
        alert("Hubo un error al enviar el mensaje. Inténtalo nuevamente.");

    }

});