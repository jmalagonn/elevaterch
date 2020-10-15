(function($){
    $(function(){
        var gallery_swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            loop: true,

            breakpoints: {
                768: {
                    slidesPerView: 2
                },
                1024: {
                    slidesPerView: 3
                }
            },

            pagination: {
                el: '.swiper-pagination'
            }
        });

        $('.menu-item-51').click(() => {
            $('#contacto').removeClass('d-none');
        })
    
        $('.contacto-close').click(() => {
            $('#contacto').addClass('d-none');
        })
    
        $('.contacto-overlay').click(() => {
            $('#contacto').addClass('d-none');
        })

        $('.icon-col').click(() => {
            $('.desp-menu').toggleClass('d-none');
        })
    })
})(jQuery);