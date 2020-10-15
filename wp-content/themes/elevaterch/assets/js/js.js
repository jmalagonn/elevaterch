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

        $('#menu-item-14').click(() => {
            $('#contacto').removeClass('d-none');
        })
    
        $('#close-icon').click(() => {
            $('#contacto').addClass('d-none');
        })
    
        $('.contacto-overlay').click(() => {
            $('#contacto').addClass('d-none');
        })

        $('#menu-icon').click(() => {
            $('.desp-menu').toggleClass('d-none');
        })
    })
})(jQuery);