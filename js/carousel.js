$.js = function (el) {
    return $('[data-js=' + el + ']')
};

function carousel() {
  $.js('carousel').slick({
    infinite: false,
    arrows: false,
    dots: false,
    autoplay: false,
    speed: 1100,
    slidesToShow: 4,
    slidesToScroll: 2,
    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1
        }
      }]
  });
}

carousel();