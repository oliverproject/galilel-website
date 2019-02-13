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
              "GB" : "#795548",
              "BR" : "#795548",
              "SE" : "##bca389",
              "AT" : "##bca389",
              "CH" : "##bca389",
              "DO" : "##bca389",
              "RU" : "##bca389", 
              "LV" : "##bca389",
              "RO" : "#c9b5a0",
              "FR" : "#c9b5a0",
              "SK" : "#c9b5a0",
              "CA" : "#c9b5a0",
              "AU" : "#c9b5a0",
              "IT" : "#c9b5a0",
              "NL" : "#c9b5a0",
              "BE" : "#c9b5a0",
              "TR" : "#c9b5a0",
              "PH" : "#c9b5a0"
            },
            attribute: 'fill'
          }]
      },  
      onRegionClick: function (event, code) {    
          var myMap = $('#world-map').vectorMap('get', 'mapObject');
          var region = myMap.getRegionName(code);
          filterRegion(region);
          console.log(region);
      },  
      onRegionTipShow: function (e, tip, code) {
        tip.html(tip.html()+' ('+code+')');
        //e.preventDefault();
      }
    });
    function filterRegion(region){
      console.log(region);
      switch (region)
        {
          case 'Brazil':
            window.open('https://t.me/GalilelBR','_blank');
            break;
          case 'Germany':
            window.open('https://t.me/GalilelDE','_blank');
            break;
          case 'United States':
            window.open('https://t.me/GalilelEN','_blank');
            break;
        default:
      }
    }
  }
);
