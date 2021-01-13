var counter = 1;
var homePc = false;

window.onload = function() {
 setTimeout (function () {scrollTo(0,0);}, 100);

   if(window.location.pathname == "/" && $(window).width() >= 1024) {
     homePc = true;

     if(homePc) {
       $('#header-menu').css('background','transparent');
       $('#header-menu-title, .header-menu-links-item').css('color','white');
       $('#header-menu').css('borderBottom','0 none');
     }
   }
}

$(document).ready(function() {

  $(document).scroll(function() {
    if (counter >= 1 && homePc) {
      if( $(document).scrollTop() > 3 ) {
        $('#header-menu').css('backgroundColor','white');
        $('.header-menu-links-item').css('color','black');
        $('#header-menu-title').css('color','rgb(0, 163, 255)');
        $('#header-menu').css('borderBottom','1px solid black');
      } else {
        $('#header-menu').css('backgroundColor','transparent');
        $('#header-menu-title, .header-menu-links-item').css('color','white');
        $('#header-menu').css('borderBottom','0 none');
      }
    }
  });

  $('#header-menu-img').on('click', function() {
    if(counter >= 1) {
      $('#header-menu').css('borderColor','white');
      counter--;
    } else {
      $('#header-menu').css('borderColor','black');
      counter++;
    }
    $('#header-menu-img').toggleClass('header-menu--open');
    $('.header-menu-links, #header-menu-title').toggleClass('header-menu-links--open',300);
  });

  $('#home-down-icon').click(function() {
    $('html, body').animate({
      scrollTop: $('#home-lib-examples').offset().top - 200
    },1000);
    console.log('go down');
  });

  $('#footer-discord').click(function() {
    if($(window).width()>=1024) {
      $('.footer-popup-wrapper').toggleClass('discord-popup--open',300);
    } else {
      $('.footer-popup-wrapper').toggleClass('discord-popup--open');
      $('#header-menu').css('display','none');
    }
  });

  $('#footer-discord--close').click(function() {
    $('.footer-popup-wrapper').toggleClass('discord-popup--open');
    $('#header-menu').css('display','block');
  });

  $('.home-lib-examples-item').hover(function(){
    if( $(window).width() >= 1024) {
      $(this).children('.home-lib-examples-description').addClass('home-lib-examples-descr--open',300);
    }
  }, function() {
    if( $(window).width() >= 1024) {
      $(this).children('.home-lib-examples-description').removeClass('home-lib-examples-descr--open',300);
    }
  });

  $('#warningDivClose').click(function() {
    $('.warningDiv').hide();
  });
});
