const parallaxBackgrounds =
    document.querySelectorAll(".parallax-bg");

const parallaxElements =
    document.querySelectorAll("[data-parallax-element]");


function updateParallax() {

    const scrollY = window.scrollY;

    // Background parallax
    parallaxBackgrounds.forEach((element) => {

        const speed =
            parseFloat(element.dataset.speed) || 0.2;

        const rect =
            element.parentElement.getBoundingClientRect();

        const offset =
            rect.top + window.scrollY;

        const distance =
            scrollY - offset;

        element.style.transform =
            `translate3d(0, ${distance * speed}px, 0) scale(1.15)`;
    });


    // Element parallax
    parallaxElements.forEach((element) => {

        const speed =
            parseFloat(element.dataset.speed) || 0.1;

        const rect =
            element.getBoundingClientRect();

        const center =
            window.innerHeight / 2;

        const distance =
            rect.top + rect.height / 2 - center;

        const movement =
            distance * speed;

        element.style.transform =
            `translate3d(0, ${movement}px, 0)`;
    });
}


let ticking = false;

window.addEventListener("scroll", () => {

    if (!ticking) {

        window.requestAnimationFrame(() => {

            updateParallax();

            ticking = false;

        });

        ticking = true;
    }

});


window.addEventListener("resize", updateParallax);

updateParallax();

