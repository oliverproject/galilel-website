/* initialize required functions. */
$(document).ready(
  function() {
    $('.sidenav').sidenav();
    $('.collapsible').collapsible();
    $('.dropdown-trigger').dropdown({
      hover: true,
      coverTrigger: false
    });
    $(".slick").slick({
      infinite: true,
      arrows: true,
      autoplay: false,
      autoplaySpeed: 4000,
      speed: 800,
      pauseOnHover: true,
      adaptiveHeight: true,
      prevArrow: $('.slick-control-prev'),
      nextArrow: $('.slick-control-next'),
      responsive: [{
          breakpoint: 1024,
          settings: {
            slidesToShow: 1,
            infinite: true
          }
        }, {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
          }
        }, {
          breakpoint: 300,
          settings: "unslick"
        }]
    });
    $('.slick').on('inview', function(event, isInView) {
      if (isInView) {
        $('.slick').slick('slickPlay');
      } else {
        $('.slick').slick('slickPause');
      }
    });
    $('#responsiveTabs').responsiveTabs({
      startCollapsed: 'accordion',
    });
    $('#responsiveTabsWallets').responsiveTabs({
      startCollapsed: 'accordion'
    });
  }
);
