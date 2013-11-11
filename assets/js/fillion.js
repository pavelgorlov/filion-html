/* Blogs Page js */
(function($) {

  function fillion($element) {

    var $mainContainer = $element,
        $socialBlock,
        $rubricsItem,
        $sliderLeft,
        $sliderRight,
        $scrollNumber,
        $newsItem;

    function init() {
      $socialBlock = $('.social-block', $mainContainer);
      $rubricsItem = $('.rubrics__content', $mainContainer);
      $sliderPrev  = $('.slider-prev', $mainContainer);
      $sliderNext = $('.slider-next', $mainContainer);
      $scrollNumber = $('.scrolling-links span', $mainContainer);
      $newsItem = $('.news__item', $mainContainer);

      bindDomEvents();
    }

    function bindDomEvents() {

      $('.top-banners, .big-slider-with-banner').imagesLoaded().done( function() {
        setSliderWidth();
        resizeBannners();
      })
      
      $(window).resize(function() {
        setSliderWidth();
        resizeBannners();
      })

      $sliderPrev.on('click', function(e){
        e.preventDefault();
        sliderSlidePrev($(this).parents('.slider-wrapper').find('.slider-scrolling'));
      });
      $sliderNext.on('click', function(e){
        e.preventDefault();
        sliderSlideNext($(this).parents('.slider-wrapper').find('.slider-scrolling'));
      });

      initNumberSlider();

      $('.map-link').on('click', function(e) {
        $siteMap = $('#bottom-site-map');
        e.preventDefault();
        if ($siteMap.is(':visible')) {
          $siteMap.slideUp('normal');
          $(this).removeClass('active');
        } else {
          $siteMap.slideDown('normal');
          $(this).addClass('active');
        }
      });

      $('.parent-item a, .brend-qr a').on('click', function(e) {
        e.preventDefault();
        $(this).parent().toggleClass('active');
      })

      $('#shops-menu').on('click', function(e) {
        if ($(window).width() > 480) {
          e.preventDefault();
          $('#overlay-box').height($('body').height());
          $('#shop-overlay').show();
          $('#overlay-box').show();
        }
      })
      

      $('.close-overlay').on('click', function(e) {
        e.preventDefault();
        $('#shop-overlay').hide();
        $('#overlay-box').hide();
      })
    }

    function resizeBannners() {
      $mainSlider = $('.main-banner .slider-item');
      $bigSlider = $('.big-slider-with-banner .slider-item');
      if ($(window).width() > 767) {
        $('.main-banner .slider-item, .main-banner .slider-item img').height($('.small-banner.bigger').height()+$('.medium-banner').height());
        $('img', $mainSlider).css({'left': ($mainSlider.width() - $('img', $mainSlider).width())/2+'px'});
        
        $('.big-slider-with-banner .slider-item, .big-slider-with-banner .slider-item img').height($('.medium-banner.first').height()+$('.medium-banner.second').height());
        $('img', $bigSlider).css({'left': ($bigSlider.width() - $('img', $bigSlider).width())/2+'px'});
        
        $('.small-banner.smaller').height(($('.small-banner.bigger').height()-2)/2);  
      } else {
        $mainSlider.height('auto');
      }
    
      $('.other-banners img').each(function(i, el){
        if ($(el).width() > $(el).parents('.banner-wrapper').width()) {
          $(el).css({'left': ($(el).parents('.banner-wrapper').width() - $(el).width())/2+'px'})
        } else {
          $(el).css({'left': '0px'});
        }
      })
    }

    //TO DO: for all sliders navigate
    function initNumberSlider() {
      var $scrollNumberContainer = $('.slider-nav', $mainContainer);

      $scrollNumberContainer.parents('.slider-wrapper').find('.slider-item').each(function(i, el){
        number = i+1;
        $scrollNumberContainer.append('<span>'+number+'</span>');
      });

      var $scrollNumber = $('.slider-nav span', $mainContainer);

      $scrollNumber.eq(0).addClass('active');
      
      $scrollNumber.on('click', function(e){
        e.preventDefault();
        var $this = $(this);
        $('.slider-nav .active').removeClass('active');
        $this.addClass('active');
        sliderNumber($this, 1);
      });

      $(window).resize(function() {
        sliderNumber($('.active', $scrollNumberContainer), 0);
      })
    }

    function sliderNumber($currentNumber, animate_slider) {
      var indexToGo = $currentNumber.index(),
          $sliderContainer = $currentNumber.parents('.slider-wrapper').find('.slider-scrolling'),
          offset = parseInt($('.slider-item', $sliderContainer).eq(0).width(), 10);

      if (animate_slider) {
        $sliderContainer.animate({'left' : indexToGo*offset*(-1)+'px' }, 400, 'easeInOutCubic');  
      } else {
        $sliderContainer.css({'left' : indexToGo*offset*(-1)+'px' }, 400, 'easeInOutCubic');
      }
      
      $('.slider-item.active', $sliderContainer).removeClass('active');
      $('.slider-item', $sliderContainer).eq(indexToGo).addClass('active');
    }


    // Set correct width to slider container
    function setSliderWidth() {
      $('.slider-wrapper', $mainContainer).each(function(i, el) {
        var $inner_item = $('.slider-item', $(el)),
            kWidthItem = $(el).data('width-items');
        if ($(window).width() < 768) kWidthItem=1;
        if (kWidthItem == 0) {
          $('.slider-item', $(el)).each(function(i_item, el_item) {
            $(el_item).width(157+'px');
          });
        } else {
          $('.slider-item', $(el)).each(function(i_item, el_item) {
            $(el_item).width($(el).width()*kWidthItem);
          });
        }

        $('.slider-scrolling',$(el)).width($inner_item.width()*$inner_item.length+10);
        if ($('.slider-nav', $(el)).length == 0) {
          $('.slider-scrolling',$(el)).css({left: 0});
          $('.slider-next', $(el)).removeClass('unactive');
          $('.slider-prev', $(el)).addClass('unactive');
        }  
      
        $('img', $inner_item).css({'left': ($inner_item.width() - $('img', $inner_item).width())/2+'px'});
      })
    }

    function updateSliderArrows($sliderContainer) {
      var offset = parseInt($('.slider-item', $sliderContainer).eq(0).width(), 10),
          left  = parseInt($sliderContainer.css('left'), 10),
          width_full = parseInt($sliderContainer.width(), 10),
          maxOffset = parseInt($sliderContainer.width() - $sliderContainer.parent().width(), 10),
          $sliderWrapper = $sliderContainer.parents('.slider-wrapper'),
          $sliderRight = $('.slider-next', $sliderWrapper),
          $sliderLeft = $('.slider-prev', $sliderWrapper);

      if ( width_full+left < maxOffset ) {
        $sliderRight.addClass('unactive');
      } else if ( left == 0 ) {
        $sliderLeft.addClass('unactive');
      } else {
        $sliderLeft.removeClass('unactive');
        $sliderRight.removeClass('unactive');
      }
    }

    function sliderSlidePrev($sliderContainer) {
      var offset = parseInt($('.slider-item', $sliderContainer).eq(0).width(), 10),
          left  = parseInt($sliderContainer.css('left'), 10);

      if (left != 0) {
        $sliderContainer.animate({'left' : offset + left }, 400, 'easeInOutCubic', function() {
          updateSliderArrows($sliderContainer);
        });
      }
    }

    function sliderSlideNext($sliderContainer) {
      var offset = parseInt($('.slider-item', $sliderContainer).eq(0).width(), 10),
          left  = parseInt($sliderContainer.css('left'), 10),
          maxOffset = parseInt($sliderContainer.width() - $sliderContainer.parent().width() - 10, 10),
          width_full = parseInt($sliderContainer.width(), 10);

      if (-left < maxOffset) {
        $sliderContainer.animate({'left' : - offset + left }, 400, 'easeInOutCubic', function() {
          updateSliderArrows($sliderContainer);
        });
      }
    }


    // Init !
    init();

    return {
    };

  }

  $.fn.fillion = function() {
    return this.each(function() {
      var $this = $(this);

      if (!$this.data('fillion')) {
        $this.data('fillion', fillion($this));
      }
    });
  };

})(jQuery);
