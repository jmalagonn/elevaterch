(function($){
    $(function(){
        var gallery_swiper = new Swiper('.swiper-container', {
            slidesPerView: 3,
            loop: true,

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
    })
})(jQuery);