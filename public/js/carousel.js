document.addEventListener("DOMContentLoaded", () => {

    document.querySelectorAll(".carousel-wrapper").forEach(wrapper => {

        const track = wrapper.querySelector(".carousel-track");
        const prevBtn = wrapper.querySelector(".carousel-prev");
        const nextBtn = wrapper.querySelector(".carousel-next");

        let index = 0;
        let autoplay;
        const AUTOPLAY_DELAY = 4000;

        function getCardWidth() {
            const card = track.children[0];
            const gap = parseInt(getComputedStyle(track).gap || 0);
            return card.offsetWidth + gap;
        }

        function getMaxIndex() {
            const totalCards = track.children.length;
            const wrapperWidth = wrapper.offsetWidth;
            const trackWidth = track.scrollWidth;

            const maxScroll = trackWidth - wrapperWidth;
            return Math.max(Math.ceil(maxScroll / getCardWidth()), 0);
        }

        function move() {
            track.style.transform = `translateX(-${index * getCardWidth()}px)`;
        }

        function next() {
            const maxIndex = getMaxIndex();
            index = index < maxIndex ? index + 1 : 0;
            move();
        }

        function prev() {
            const maxIndex = getMaxIndex();
            index = index > 0 ? index - 1 : maxIndex;
            move();
        }

        function start() {
            stop();
            autoplay = setInterval(next, AUTOPLAY_DELAY);
        }

        function stop() {
            if (autoplay) clearInterval(autoplay);
        }

        nextBtn.addEventListener("click", () => {
            stop();
            next();
            start();
        });

        prevBtn.addEventListener("click", () => {
            stop();
            prev();
            start();
        });

        wrapper.addEventListener("mouseenter", stop);
        wrapper.addEventListener("mouseleave", start);

        window.addEventListener("resize", () => {
            index = 0;
            move();
        });

        start();
    });

});
