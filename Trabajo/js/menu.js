$(function (){
var header = document.getElementById('header');
var headroom = new Headroom(header);

headroom.init();

// menu responsive
// calculamos el ancho de la pagina

var ancho = $(window).width(),
    enlaces = $('#enlaces'),
    btnMenu = $('#btn-menu'),
    icono = $('#btn-menu ,icono');

    if (ancho < 875) {
      enlaces.hide();
      icono.addClass('fa-bars');
    }


    btnMenu.on('click', function(e){
        enlaces.slideToggle();
        icono.toggleClass('fa-bars');
        icono.toggleClass('fa-times');
    })

    $(window).on('resize', function(){
      if ($(this).width()>875){
        enlaces.show();
        icono.addClass('fa-times');
        icono.removeClass('fa-bars');
      } else {
          enlaces.hide();
          icono.addClass('fa-bars');
          icono.removeClass('fa-times');
      }

    })
});