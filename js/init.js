/* initialize required functions. */
$(document).ready(
  function() {
    /* Menu */
    $('.sidenav').sidenav();
    $('.collapsible').collapsible();
    $('.dropdown-trigger').dropdown({
      hover: true,
      coverTrigger: false
    });
    /* Slider */
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
    /* Inview */
    $('.slick').on('inview', function(event, isInView) {
      if (isInView) {
        $('.slick').slick('slickPlay');
      } else {
        $('.slick').slick('slickPause');
      }
    });
    /* Tabs */
    $('#responsiveTabs').responsiveTabs({
      startCollapsed: 'accordion',
    });
    $('#responsiveTabsWallets').responsiveTabs({
      startCollapsed: 'accordion'
    });
    /* Map */
    $('#world-map').vectorMap({
      map: 'world_mill',  
      backgroundColor: 'transparent',  
      zoomButtons : false,
      regionStyle: {
          initial: {
              fill: '#ccc'
          }
      },
      zoomOnScroll: false,
       series: {   
          regions: [{
            values: {  
              "DE" : "#795548", 
              "GB" : "#796c5d", 
              "BRA" : "#796c5d", 
              "SE" : "#ae977f", 
              "AT" : "#ae977f", 
              "CH" : "#ae977f", 
              "CD" : "#ae977f", 
              "RU" : "#ae977f", 
              "LV" : "#ae977f", 
              "RU" : "#bba38a", 
              "FR" : "#bba38a", 
              "SL" : "#bba38a", 
              "CA" : "#bba38a", 
              "AU" : "#bba38a", 
              "IT" : "#bba38a", 
              "NL" : "#bba38a", 
              "BE" : "#bba38a", 
              "TR" : "#bba38a", 
              "PH" : "#bba38a", 
            },
            attribute: 'fill'
          }]
      },  
      onRegionClick: function (event, code) {    
          var myMap = $('#world-map').vectorMap('get', 'mapObject');
          var region = myMap.getRegionName(code);
          filterRegion(region);
          console.log(region);
      }  ,  onRegionTipShow: function (e, tip, code) {
        e.preventDefault();
      }
    });
    function filterRegion(region){
      switch (region)
        {
          case 'gebiet0': 
              name = 'moeller';
              showPartner(name);
          default:  
              break;
      }
    }
  }
);
