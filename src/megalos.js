import './megalos.scss'
import './js/jquery.arcticmodal-0.3.min'
import './js/slick.min'
import './js/ion.rangeSlider'


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

$('.js-slider-detail').slick({
    arrows: false,
    dots: true,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear'
});

/*Скрипт для модальных окон*/
$('.popap_box').click(function () {
    $('#modalbox_' + $(this).data('body')).arcticmodal();
});

$(".js-range-slider").ionRangeSlider({
    skin: "modern",
    postfix: " м3",
    step: 5,
    grid: true,
    gridMargin: 17,
    onStart: function (data) {
        var key = $('.js-range-slider').data('key');
        var re = /\s*,\s*/
        var tagList = key.split(re);

        console.log(tagList[data.from]);
        $('.js-rec').attr("href", tagList[data.from]);
    },
    onChange: function (data) {
        var key = $('.js-range-slider').data('key');
        var re = /\s*,\s*/
        var tagList = key.split(re);

        console.log(tagList[data.from]);
        $('.js-rec').attr("href", tagList[data.from]);


    },
    onFinish: function (data) {
        // fired on pointer release
    },
    onUpdate: function (data) {
        // fired on changing slider with Update method
    }
});


