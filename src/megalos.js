import './megalos.scss'
import './js/ion.rangeSlider'
import './js/jquery.arcticmodal-0.3.min'
import './js/slick.min'
import './js/lightbox'
import './js/lightgallery'
import './js/lightgallery-all'


import './img/logo.png'
import './img/logo-group.png'
import './img/main-news.png'
import './img/main-company-1.svg'
import './img/main-company-2.svg'
import './img/main-company-3.svg'
import './img/main-company-4.svg'
import './img/main-company-5.svg'
import './img/slider-1.png'
import './img/alta-m.png'
import './img/detail-img.png'
import './img/shema.png'

$('a[href^="#"]').click(function(){
    var target = $(this).attr('href');
    $('html, body').animate({scrollTop: $(target).offset().top}, 1000);
    return false;
});

$(".lightgallery").lightGallery();

$('.popap_box').click(function () {
    $('#modalbox_' + $(this).data('body')).arcticmodal({
        afterClose: function(){
            $('body').css('overflow','scroll');
        }
    });
});

$('.js-down').on('click', function () {
    $('.main-company__down').toggleClass("active");
});

$('.js-slider').not('.slick-initialized').slick({
    arrows: false,
    dots: true,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear',
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 6000
});



$(".js-range-slider").ionRangeSlider({
    skin: "modern",
    step: 0,
    from: 0,
    grid: true,
    gridMargin: 17,
    onStart: function (data) {
        var key = $('.js-range-slider').data('key');
        var re = /\s*,\s*/;
        var tagList = key.split(re);
        $('.js-rec').on('click', function () {
            $('.properties').addClass('hidden');
            $('.filter').find('#' + tagList[data.from]).removeClass('hidden');
        });
    },
    onChange: function (data) {
        var key = $('.js-range-slider').data('key');
        var re = /\s*,\s*/;
        var tagList = key.split(re);
        $('.js-rec').on('click', function () {
            $('.properties').addClass('hidden');
            $('.filter').find('#' + tagList[data.from]).removeClass('hidden');
        });


    },
});
$(".js-range-slider-2").ionRangeSlider({
    skin: "modern",
    step: 0,
    from: 0,
    grid: true,
    gridMargin: 17,
    onStart: function (data) {
        var key = $('.js-range-slider-2').data('key2');
        var re = /\s*,\s*/;
        var tagList = key.split(re);
        $('.js-rec').on('click', function () {
            $('.properties').addClass('hidden');
            $('.filter').find('#' + tagList[data.from]).removeClass('hidden');
        });
    },
    onChange: function (data) {
        var key = $('.js-range-slider-2').data('key2');
        var re = /\s*,\s*/;
        var tagList = key.split(re);
        $('.js-rec').on('click', function () {
            $('.properties').addClass('hidden');
            $('.filter').find('#' + tagList[data.from]).removeClass('hidden');
            console.log(data.from);
        });


    },
});

