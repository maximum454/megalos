import './megalos.scss'
import './js/jquery.arcticmodal-0.3.min'
import './js/slick.min'


import './img/logo.png'
import './img/logo-group.png'
import './img/main-news.png'
import './img/main-company-1.svg'
import './img/main-company-2.svg'
import './img/main-company-3.svg'
import './img/main-company-4.svg'
import './img/main-company-5.svg'
import './img/slider-img.jpg'


$('.js-slider').slick({
    arrows: false,
    dots: true,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear'
});


/*Скрипт для модальных окон*/
$('.popap_box').click(function() {
    $('#modalbox_' + $(this).data('body')).arcticmodal();
});


