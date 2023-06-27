jQuery(function ($) {
  $('.js-hamburger').on('click', function(){
    if($('.js-hamburger').hasClass('open')){
      $(this).removeClass('open');
      $(".header-nav").removeClass('active');
      $(".circle-bg").removeClass('active');
      $('.header-nav').removeClass('open');
      $('.header-nav').fadeOut();
      $('.mv__text').fadeIn();
      $('body').removeClass('active');
    } else {
      $(this).addClass('open');
      $(".header-nav").addClass('active');
      $(".circle-bg").addClass('active');
      $('.header-nav').addClass('open');
      $('.header-nav').fadeIn();
      $('.mv__text').fadeOut();
      $('body').addClass('active');
    }
  });


});