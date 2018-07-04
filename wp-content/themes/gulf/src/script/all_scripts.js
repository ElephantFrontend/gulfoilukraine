
// Инициализация новостного слайдера
$('.news_wrapper').slick({
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 3000,
  responsive: [
    {
      breakpoint: 1210,
//сообщает, при какой ширине экрана нужно включать настройки
      settings: {
        slidesToShow: 3,
      }
    },
    {
      breakpoint: 920,
//сообщает, при какой ширине экрана нужно включать настройки
      settings: {
        slidesToShow: 2,
      }
    },
    {
      breakpoint: 600,
//сообщает, при какой ширине экрана нужно включать настройки
      settings: {
        slidesToShow: 1,
      }
    }
]
});

// Инициализация слайдеров на странице "О нас"
$('.image_wrapper').slick({
  infinite: true,
  slidesToShow: 5,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 5000,
  responsive: [
    {
      breakpoint: 1420,
//сообщает, при какой ширине экрана нужно включать настройки
      settings: {
        slidesToShow: 4,
      }
    },
    {
      breakpoint: 1210,
//сообщает, при какой ширине экрана нужно включать настройки
      settings: {
        slidesToShow: 3,
      }
    },
    {
      breakpoint: 920,
//сообщает, при какой ширине экрана нужно включать настройки
      settings: {
        slidesToShow: 2,
      }
    },
    {
      breakpoint: 580,
//сообщает, при какой ширине экрана нужно включать настройки
      settings: {
        slidesToShow: 1,
      }
    }
]
});

// Инициализация header_slider
$('.header_slider').slick({
  infinite: true,
  autoplay: true,
  autoplaySpeed: 5000,
});

// Гамбурегр меню
$('#menu-burger').click(function() {
  var overlayMenu = $('#overlay-menu'),
      menuIconLines = $('#menu-burger .menu-icon'),
      menuBurger = $('#menu-burger');
  
  if(overlayMenu.hasClass('open')) {
    overlayMenu.removeClass('open');
    menuIconLines.removeClass('open');
    menuBurger.removeClass('open');
  }else{    overlayMenu.addClass('open');
            menuIconLines.addClass('open');
            menuBurger.addClass('open');
  };
})

// ajax отправка формы

  




