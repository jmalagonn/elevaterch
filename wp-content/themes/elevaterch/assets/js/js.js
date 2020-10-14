(function($){
    $(function(){
        var gallery_swiper = new Swiper('.swiper-container', {
            slidesPerView: 3,
            loop: true,

            pagination: {
                el: '.swiper-pagination'
            }
        });
    })
})(jQuery);