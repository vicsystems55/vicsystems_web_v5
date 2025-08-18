$(function(){
   var swiperPartner = new Swiper('.swiper.swiperPartner',{
        autoplay: {
            delay: 5000,
        },
        speed: 1000,
        slidesPerView: 4,
        spaceBetween: 20,
        loop: true,
        hasNavigation: true,
        grabCursor: true,
        breakpoints: {
            1025: {
                slidesPerView: 4
            },
            767: {
                slidesPerView: 2
            },
            230: {
                slidesPerView: 1
            }
        },
        pagination: {
        enabled: true,
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true,
        },
   });
});

$(function(){
    var swiperTestimonial = new Swiper('.swiper.swiperTestimonial',{
        autoplay: {
            delay: 5000,
        },
        speed: 1000,
        slidesPerView: 3,
        spaceBetween: 50,
        loop: true,
        hasNavigation: true,
        grabCursor: true,
        breakpoints: {
            1025:{
                slidesPerView: 3,
            },
            769:{
                slidesPerView: 2
            },
            319: {
                slidesPerView: 1,
            },
        },
    });
});
