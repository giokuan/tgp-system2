import "./bootstrap";

import Swiper from "swiper";
import { Navigation, Pagination } from "swiper/modules";
// import Swiper and modules styles
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";

// init Swiper:
document.addEventListener("livewire:navigated", () => {
    const swiper = new Swiper(".swiper", {
        // configure Swiper to use modules
        modules: [Navigation, Pagination],
        direction: "horizontal",
        loop: false,
        slidesPerView: 3,
        spaceBetween: 30,

        centeredSlides: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },

        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 1,
                spaceBetween: 30,
            },
            // when window width is >= 480px
            480: {
                slidesPerView: 1,
                spaceBetween: 30,
            },
            // when window width is >= 640px
            768: {
                slidesPerView: 2,
                spaceBetween: 30,
            },

            1024: {
                slidesPerView: 3,
                spaceBetween: 40,
            },
        },
        // Navigation arrows
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        // And if we need scrollbar
        scrollbar: {
            el: ".swiper-scrollbar",
        },
    });
});
