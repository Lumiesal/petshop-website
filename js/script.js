(function($){
    $(".container-banner").slick({
    infinite: true,
    dots: true,
    speed: 3000,
    slidesToShow: 1,
    slidesToScroll: 1
    });

/*     activo = $("body").attr('class');
    $("nav.menu ul li " ).each(function() {
        li_activo = $( this ).attr('class');
        $("nav.menu ul li a").remove( "active" );
        if (activo == li_activo) {
            $("nav.menu ul li a").addClass( "active" );
        }
    }); */

})(jQuery);