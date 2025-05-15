jQuery(document).ready(function(){
   jQuery('.autoplay_two').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: false,
            autoplay: false,
            autoplaySpeed: 2000,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3,
                        infinite: true
                    }
                },
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        infinite: true
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        infinite: true
                    }
                },
                {
                    breakpoint: 667,
                    settings: {
                        arrows: false,
                        slidesToShow: 1,
                        infinite: true
                    }
                }
            ]
        });


       
   jQuery('.hero_banner').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            autoplay: true,
            autoplaySpeed: 4000,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 1,
                        infinite: true
                    }
                },
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        infinite: true
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        infinite: true
                    }
                },
                {
                    breakpoint: 667,
                    settings: {
                        arrows: false,
                        slidesToShow: 1,
                        infinite: true
                    }
                }
            ]
        });


        jQuery('.achievement_slider  ').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 2000,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3,
                        infinite: true
                    }
                },
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        infinite: true
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        infinite: true
                    }
                },
                {
                    breakpoint: 667,
                    settings: {
                        arrows: false,
                        slidesToShow: 2,
                        infinite: true
                    }
                }
            ]
        });
});