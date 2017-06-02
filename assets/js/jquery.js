//$("#menu-btn").click(function() {
//
//$("#sidebar-nav").removeClass("justify-center");
//$("#sidebar-nav").addClass("justify-end");
//
//  if ($("#sidebar-nav").hasClass("sidebar--open")) {
//
//    $("#sidebar-nav").addClass("sidebar--open");
//    $("#main").addClass("sidebar--open--main");
//    $("#sidebar-nav").removeClass("sidebar--open");
//    $("#main").removeClass("sidebar--open--main");
//    $("#menu-btn--icon").addClass("fa-bars");
//    $("#menu-btn--icon").removeClass("fa-times");
//
//    $("#sidebar-nav").removeClass("justify-center");
//    $("#sidebar-nav").addClass("justify-end");
//
//    $("#sidebar-right").css('width', '300px');
//    $("#main").removeClass('sidebar-right-close');
//	$("#categorias-lista").css('position', 'fixed');
//
//
//  } else {
//
//  $("#menu-btn--icon").removeClass("fa-bars");
//  $("#menu-btn--icon").addClass("fa-times");
//
//  $("#sidebar-nav").removeClass("sidebar--open");
//  $("#main").removeClass("sidebar--open--main");
//  $("#sidebar-nav").addClass("sidebar--open");
//  $("#main").addClass("sidebar--open--main");
//  $("#sidebar-search").css('display', 'none');
//  $("#categorias-lista").css('display', 'block');
//
//  $("#sidebar-nav").removeClass("justify-center");
//  $("#sidebar-nav").addClass("justify-end");
//
//  $("#main").addClass('sidebar-right-close');
//  $("#sidebar-right").css('width', '0px');
//
//
//  }
//
//});

//$("#search-btn").click(function() {
//
//$("#sidebar-nav").removeClass("justify-end");
//$("#sidebar-nav").addClass("justify-center");
//
//  if ($("#sidebar-nav").hasClass("sidebar--open")) {
//
//    $("#sidebar-nav").addClass("sidebar--open");
//    $("#main").addClass("sidebar--open--main");
//    $("#sidebar-nav").removeClass("sidebar--open");
//    $("#main").removeClass("sidebar--open--main");
//    $("#menu-btn--icon").addClass("fa-bars");
//    $("#menu-btn--icon").removeClass("fa-times");
//
//    $("#sidebar-nav").removeClass("justify-end");
//    $("#sidebar-nav").addClass("justify-center");
//
//    $("#sidebar-right").css('width', '300px');
//    $("#main").removeClass('sidebar-right-close');
//
//  } else {
//
//  $("#sidebar-nav").removeClass("sidebar--open");
//  $("#main").removeClass("sidebar--open--main");
//  $("#sidebar-nav").addClass("sidebar--open");
//  $("#main").addClass("sidebar--open--main");
//  $("#categorias-lista").css('display', 'none');
//  $("#sidebar-search").css('display', 'block');
//
//  $("#menu-btn--icon").removeClass("fa-bars");
//  $("#menu-btn--icon").addClass("fa-times");
//
//  $("#sidebar-nav").removeClass("justify-end");
//  $("#sidebar-nav").addClass("justify-center");
//
//  $("#main").addClass('sidebar-right-close');
//  $("#sidebar-right").css('width', '0px');
//
//
//  }
//
//});
/*
$(document).ready(function(){
  var scroll_pos = 0;
  $(document).scroll(function() {
      scroll_pos = $(this).scrollTop();
      if(scroll_pos > 175) {
          $("#nav").removeClass("bgcolor-multiesencia");
          $("#nav").addClass("bgcolor-tutecnomundo");
          $("#nav-ul").css('border-bottom', '5px solid #f0c300');
          $("#nav-logo-img").attr("src", 'assets/img/Iconos Temáticas/D TuTecnoMundo.png');
          $('#nav-logo-text').html("TuTecnoMundo");
          $("#nav-logo-text").removeClass("nav-logo-text");
          $("#nav-logo-text").addClass("nav-logo-text--alternativo");
      } else {
          $("#nav").removeClass("bgcolor-tutecnomundo");
          $("#nav").addClass("bgcolor-multiesencia");
          $("#nav-logo-img").attr("src", 'assets/img/logo-multiesencia.png');
          $('#nav-logo-text').html("Multiesencia");
          $("#nav-logo-text").removeClass("nav-logo-text--alternativo");
          $("#nav-logo-text").addClass("nav-logo-text");
      }
  });
});*/


var lastScrollTop = 0;
$(window).scroll(function (event) {

  var st = $(this).scrollTop();

  if (st > 175) {
    if (st > lastScrollTop) {
      $("#multiconos").css('display', 'none');
    } else {
      $("#multiconos").css('display', 'block');

    }
  } else {
    $("#multiconos").css('display', 'none');
  }
  lastScrollTop = st;
});

$("#apple").mouseover(function() {
  $("#apple").attr('src', 'assets/img/Iconos Temáticas/D TuAppleMundo.png');
  }).mouseout(function() {
    $("#apple").attr('src', 'assets/img/Iconos Temáticas/A TuAppleMundo.png');
  });

$("#belleza").mouseover(function() {
  $("#belleza").attr('src', 'assets/img/Iconos Temáticas/D TuBellezaMundo.png');
  }).mouseout(function() {
    $("#belleza").attr('src', 'assets/img/Iconos Temáticas/A TuBellezaMundo.png');
  });

$("#cocina").mouseover(function() {
  $("#cocina").attr('src', 'assets/img/Iconos Temáticas/D TuCocinaMundo.png');
  }).mouseout(function() {
    $("#cocina").attr('src', 'assets/img/Iconos Temáticas/A TuCocinaMundo.png');
  });

$("#educacion").mouseover(function() {
  $("#educacion").attr('src', 'assets/img/Iconos Temáticas/D TuEducacionMundo.png');
  }).mouseout(function() {
    $("#educacion").attr('src', 'assets/img/Iconos Temáticas/A TuEducacionMundo.png');
  });

$("#educacion").mouseover(function() {
  $("#educacion").attr('src', 'assets/img/Iconos Temáticas/D TuEducaMundo.png');
  }).mouseout(function() {
    $("#educacion").attr('src', 'assets/img/Iconos Temáticas/A TuEducaMundo.png');
  });

$("#fama").mouseover(function() {
  $("#fama").attr('src', 'assets/img/Iconos Temáticas/D TuFamaMundo.png');
  }).mouseout(function() {
    $("#fama").attr('src', 'assets/img/Iconos Temáticas/A TuFamaMundo.png');
  });

  $("#fit").mouseover(function() {
  $("#fit").attr('src', 'assets/img/Iconos Temáticas/D TuFitMundo.png');
  }).mouseout(function() {
    $("#fit").attr('src', 'assets/img/Iconos Temáticas/A TuFitMundo.png');
  });

  $("#foto").mouseover(function() {
  $("#foto").attr('src', 'assets/img/Iconos Temáticas/D TuFotoMundo.png');
  }).mouseout(function() {
    $("#foto").attr('src', 'assets/img/Iconos Temáticas/A TuFotoMundo.png');
  });

  $("#gaming").mouseover(function() {
  $("#gaming").attr('src', 'assets/img/Iconos Temáticas/D TuGamingMundo.png');
  }).mouseout(function() {
    $("#gaming").attr('src', 'assets/img/Iconos Temáticas/A TuGamingMundo.png');
  });

  $("#interes").mouseover(function() {
  $("#interes").attr('src', 'assets/img/Iconos Temáticas/D TuInteresMundo.png');
  }).mouseout(function() {
    $("#interes").attr('src', 'assets/img/Iconos Temáticas/A TuInteresMundo.png');
  });

  $("#motor").mouseover(function() {
  $("#motor").attr('src', 'assets/img/Iconos Temáticas/D TuMotorMundo.png');
  }).mouseout(function() {
    $("#motor").attr('src', 'assets/img/Iconos Temáticas/A TuMotorMundo.png');
  });

  $("#music").mouseover(function() {
  $("#music").attr('src', 'assets/img/Iconos Temáticas/D TuMusicMundo.png');
  }).mouseout(function() {
    $("#music").attr('src', 'assets/img/Iconos Temáticas/A TuMusicMundo.png');
  });

  $("#sport").mouseover(function() {
  $("#sport").attr('src', 'assets/img/Iconos Temáticas/D TuSportMundo.png');
  }).mouseout(function() {
    $("#sport").attr('src', 'assets/img/Iconos Temáticas/A TuSportMundo.png');
  });

  $("#tecno").mouseover(function() {
  $("#tecno").attr('src', 'assets/img/Iconos Temáticas/D TuTecnoMundo.png');
  }).mouseout(function() {
    $("#tecno").attr('src', 'assets/img/Iconos Temáticas/A TuTecnoMundo.png');
  });


  $("#vlog").mouseover(function() {
  $("#vlog").attr('src', 'assets/img/Iconos Temáticas/D TuVlogMundo.png');
  }).mouseout(function() {
    $("#vlog").attr('src', 'assets/img/Iconos Temáticas/A TuVlogMundo.png');
  });


  $("#windows").mouseover(function() {
  $("#windows").attr('src', 'assets/img/Iconos Temáticas/D TuWindowsMundo.png');
  }).mouseout(function() {
    $("#windows").attr('src', 'assets/img/Iconos Temáticas/A TuWindowsMundo.png');
  });

