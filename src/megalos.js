import './megalos.scss'
import './js/jquery.arcticmodal-0.3.min'
import './js/slick.min'
import './js/ion.rangeSlider'
import './js/lightbox'


import './img/logo.png'
import './img/logo-group.png'
import './img/main-news.png'
import './img/main-company-1.svg'
import './img/main-company-2.svg'
import './img/main-company-3.svg'
import './img/main-company-4.svg'
import './img/main-company-5.svg'
import './img/slider-img.jpg'
import './img/alta-m.png'
import './img/Air-Master.png'


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
    step: 1,
    from: 0,
    grid: true,
    gridMargin: 17,
    onStart: function (data) {
        var key = $('.js-range-slider').data('link');
        var re = /\s*,\s*/
        var tagList = key.split(re);
        $('.js-rec').on('click', function () {
            $('.filter__img').removeClass('hidden').attr("href", tagList[data.from]).children('img').attr("src", tagList[data.from])
        });
    },
    onChange: function (data) {
        var key = $('.js-range-slider').data('link');
        var re = /\s*,\s*/
        var tagList = key.split(re);
        $('.js-rec').on('click', function () {
            $('.filter__img').removeClass('hidden').attr("href", tagList[data.from]).children('img').attr("src", tagList[data.from])
        });


    },
    onFinish: function (data) {
        // fired on pointer release
    },
    onUpdate: function (data) {
        // fired on changing slider with Update method
    }
});
let my_range = $(".js-range-slider").data("ionRangeSlider");

$('.js-specifications').on('click', function () {
    var val, calc, perfomace, count;
    val = $('#human').val();
    calc = (val * 150) / 1000;
    $('#capacity').val(calc);
    $('.filter__specifications').each(function (i, elem) {
        $(elem).addClass('hidden');
        perfomace = $(this).data('perfomace');
        count = perfomace;
        if (calc <= count) {
            $(elem).addClass('select');
            $('.select:first').removeClass('hidden');
            perfomace = $('.select:first').data('perfomace');
            my_range.update({
            });

        } else if(calc > count) {
            console.log("позвоните менеджеру");
        }

    });
});


