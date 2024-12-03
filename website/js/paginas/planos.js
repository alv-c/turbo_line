const observador = (function () {
    const init = function () {
        createObserver();
    };
    const createObserver = function () {
        let options = {
            root: null,
            rootMargin: "0px",
            threshold: 0.5
        };
        let observer = new IntersectionObserver(
            function (entries, observer) {
                handleIntersect(entries, observer);
            },
            options);
        let targetElements = document.querySelectorAll("[data-animation='true']");
        targetElements.forEach((targetElement) => {
            observer.observe(targetElement);
        });
    };
    const handleIntersect = function (entries, observer) {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("animacao");
                observer.unobserve(entry.target);
            }
        });
    };
    return {
        init: init
    };
})();
observador.init();