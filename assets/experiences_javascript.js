var menu = ['1988', '1990', '1990', '2007', '2007', '2007']
var mySwiper = new Swiper ('.swiper-container', {
  direction: 'vertical',
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
			clickable: true,
        renderBullet: function (index, className) {
          return '<span class="' + className + '">' + (menu[index]) + '</span>';
        },
    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  })