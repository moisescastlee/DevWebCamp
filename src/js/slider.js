import Swiper from 'swiper';
import 'swiper/css';

document.addEventListener('DOMContentLoaded', function() {
    if(document.querySelector('.slider')) {
        const opciones = {
            slidesPerView: 3,
            spaceBetween: 15,
            freemode: true,
            breakpoints: {
                640: {
                    slidesPerView: 1
                }
            }
        }

        new Swiper('.slider', opciones)
    }
});