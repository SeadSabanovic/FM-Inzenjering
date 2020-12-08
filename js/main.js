$(document).ready(function () {

  $('.up').fadeOut();
  
  $('.loader-wrap').fadeOut(1000);
  $('body').removeClass("fixed");

  $(window).scroll(() => {
    const windscroll = $(window).scrollTop();
    if (windscroll > 0) {
      $('.desktop-nav').addClass('active');
    } else {
      $('.desktop-nav').removeClass('active');
    }
  });

  
  $(window).scroll(function () {
    if ($(window).scrollTop() > 100) {
      $('.up').fadeIn();
    } else {
      $('.up').fadeOut();
    }
  });

  $(".up").click(function () {
    $("html, body").animate({ scrollTop: 0 }, "slow");
    return false;
  });

  $(".hamburger").click(function () {
    $(this).stop().toggleClass("is-active");
    $('.mobile-menu').stop().toggleClass("is-active");
    $('body').stop().toggleClass("fixed");
  });

  (function ($) {
    /* $('.accordion > li:eq(0) a').addClass('active').next().slideDown();
    $('.accordion > li:eq(0)').addClass('active').next().slideDown(); */

    $('.accordion a').click(function (j) {
      var dropDown = $(this).closest('li').find('.content');

      $(this).closest('.accordion').find('.content').not(dropDown).slideUp();

      if ($(this).hasClass('active')) {
        $(this).removeClass('active');
        $(this).closest('li').removeClass('active');
      } else {
        $(this).closest('.accordion').find('a.active').removeClass('active');
        $(this).closest('.accordion').find('li.active').removeClass('active');
        $(this).addClass('active');
        $(this).closest('li').addClass('active');
      }

      dropDown.stop(false, true).slideToggle();

      j.preventDefault();
    });
  })(jQuery);
});