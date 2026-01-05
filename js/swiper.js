"use strict";

/*-------------------------------------------*/
/*  TOP
/*-------------------------------------------*/

const topBlogSwiper = () => {

    const swiperElement = document.querySelector('.home .blog_swiper .swiper-container');

    if(swiperElement) {
        const swiper = new Swiper(swiperElement, {
            loop: true,
            autoplay:true,
            slidesPerView: 'auto',
            speed: 2000,
            autoplay: {
                delay: 3000,
            },
            disableOnInteraction: false,
        });
    }
}

document.addEventListener('DOMContentLoaded', (event) => {

/*-------------------------------------------*/
/*  TOP
/*-------------------------------------------*/

topBlogSwiper();

});