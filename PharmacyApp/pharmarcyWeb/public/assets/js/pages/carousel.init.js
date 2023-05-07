/**
 * Theme: Tailfox - Tailwind Admin Dashboard Template
 * Author: Mannatthemes
 * Carousel Js
 */
var swiper=new Swiper(".defaultSwiper",{autoplay:{delay:2500,disableOnInteraction:!1},navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"}}),swiper=new Swiper(".paginationSwiper",{pagination:{el:".swiper-pagination"},navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"}}),swiper=new Swiper(".effectSwiper",{spaceBetween:30,effect:"fade",navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"},pagination:{el:".swiper-pagination",clickable:!0}}),swiper=new Swiper(".thumbsSwiper",{spaceBetween:10,slidesPerView:4,freeMode:!0,watchSlidesProgress:!0}),swiper2=new Swiper(".gallerySwiper",{loop:!0,spaceBetween:10,navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"},thumbs:{swiper:swiper}});