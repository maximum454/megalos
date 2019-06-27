import './megalos.scss'
import './js/slick'

import './img/logo.png'
import './img/logo.svg'
import './img/Rectangle2.1.png'
import './img/Rectangle2.2.png'
import './img/Adv-02.png'
import './img/projects-1.jpg'
import './img/projects-2.jpg'
import './img/b1.jpg'
import './img/b2.jpg'
import './img/c1.jpg'
import './img/c2.jpg'
import './img/current-graf.svg'
import './img/search.svg'


$('.js-project').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1
});
/*
function responseMenu() {
    $('navbar__dropdown .nav-item').appendTo('.navbar-nav');
    var items = $('.navbar-nav .nav-item');
    var max_width = $('.navbar-nav').width() - $('.navbar__dd').outerWidth();
    var width = 0;
    var hide_from = 0;
    console.log('len'+items.length);
    items.css({'width': 'auto'});
    items.each(function (index) {
        if (width + $(this).outerWidth() > max_width) {
            return false;
        } else {
            hide_from = index;
            width += $(this).outerWidth();
        }
    });
    if (hide_from < items.length - 1) {
        items.eq(hide_from).nextAll('.nav-item').appendTo('.navbar__dropdown');
        items.css({'width': (max_width / (hide_from + 1)) + 'px'});
        $('.navbar__dd').show();
    } else {
        $('.navbar__dd').hide();
    }
}


$(function () {
    $('.navbar').on('click', '.navbar__toggle', function () {
        $('.navbar__dropdown').toggle();
    });

    $(window).on('resize', function(){
        responseMenu();
    }).trigger('resize');
});*/
