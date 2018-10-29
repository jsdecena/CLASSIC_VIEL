function wndsize(){
  var w = 0;
  if(!window.innerWidth){
    if(!(document.documentElement.clientWidth == 0)){
      w = document.documentElement.clientWidth;
    } else{
      w = document.body.clientWidth;
    }
  } else {
    w = window.innerWidth;
  }
  return w;
}
jQuery(window).load(function() {

  jQuery("#header-container .nav-container").sticky({
    topSpacing: 0
  });

  if (jQuery("#novaworks-active").hasClass('has-map')) {
    map.init();
  }
  if( wndsize() < 768 ){
    jQuery('#shopify-product-reviews').appendTo('#customer-reviews-xs');
  }
});
jQuery(window).resize(function(){
  if( wndsize() < 768 ){
    jQuery('#shopify-product-reviews').appendTo('#customer-reviews-xs');
  }else{
  	jQuery('#shopify-product-reviews').appendTo('#customer-reviews');
  }
});
jQuery(function() {
  jQuery(".bag-contents").niceScroll({cursorcolor:"#dddddd"});
  jQuery(".fancybox").fancybox({
    openEffect  : 'none',
    closeEffect : 'none'
  });
  jQuery(".shortcode-carousel").each(function(){
    jQuery(this).owlCarousel({
      items : jQuery(this).attr('data-column'),
      itemsDesktop : [1000,jQuery(this).attr('data-column')],
      itemsDesktopSmall : [900,jQuery(this).attr('data-column')],
      itemsTablet: [600,jQuery(this).attr('data-column')],
      itemsMobile : [320,1],
      navigation : true,
      navigationText : ["<a class=\"fa fa-angle-left\"></a>","<a class=\"fa fa-angle-right\"></a>"],
      pagination : false
    });
  });

  jQuery(".shortcode-products-carousel").each(function(){
    jQuery(this).owlCarousel({
      items : jQuery(this).attr('data-column'),
      itemsDesktop : [1024,jQuery(this).attr('data-column')],
      itemsDesktopSmall : [800,3],
      itemsTablet: [600,2],
      itemsMobile : [320,1],
      navigation : true,
      navigationText : ["<a class=\"fa fa-angle-left\"></a>","<a class=\"fa fa-angle-right\"></a>"],
      slideSpeed : 500,
      pagination : false
    });
  });

  // Lookbook
  jQuery(".slider_banner_4").owlCarousel({
    items: 2,
    itemsDesktop: [1024, 2],
    itemsDesktopSmall: [992, 2],
    itemsTablet: [771, 1],
    itemsMobile: [320, 1],
    navigation: true,
    navigationText: false,
    pagination: true
  });

  if( jQuery("#products-viewmode").length > 0)
  	bindGrid();
  jQuery(".colorbox-group").colorbox({rel:'colorbox-group'});
  jQuery(".product-view .product-essential .product-image").click(function(){
  	jQuery(".colorbox-group.show").trigger('click');
    return false;
  });
  jQuery('.panel-group').on('hidden.bs.collapse', function(e){
    jQuery(e.target).parent().removeClass('active');
  });
  jQuery('.panel-group').on('shown.bs.collapse', function(e){
    jQuery(e.target).parent().addClass('active');
  }) ;

  jQuery(document).on('click','.faq-tab-item', function () {
    jQuery('.faq-tab-item, .faq-tab-container').removeClass('active');
    jQuery(this).addClass('active');
    jQuery( jQuery(this).find('a').attr('href') ).addClass('active');
    return false;
  });

  /* Quick view Add to cart */
  jQuery(document).on('click','.add-to-cart button.btn-cart', function () {
    try {
      jQuery.ajax( {
        type: 'POST',
        url: '/cart/add.js',
        dataType: 'json',
        data: jQuery(this).parents('form').serialize(),
        error : function(data){
        	alert(data.responseJSON.description);
        },
        success : function(data) {
          jQuery.colorbox.close();
          jQuery('#nova-notification .notification-content').html("The product <span>"+data.title+"</span> was added to your shopping cart.<br><a href=\"/cart\" class=\"button-readmore\">View Cart</a>");
          jQuery('#nova-notification').stop().fadeIn('slow', function(){
            setTimeout(function(){ jQuery('#nova-notification').stop().fadeOut('slow'); }, 4000);
          });
          updateMiniCart();
        }
      });
    } catch (e) {}
  });
  /* End Quick view Add to cart */

  /* Add to wishlist */
  jQuery(document).on('click','.act-wishlist', function () {
    var wishlist_btn = jQuery(this);
    try {
      jQuery.ajax( {
        type: 'POST',
        url: '/contact',
        data: wishlist_btn.attr('data-submit'),
        success : function() {
          wishlist_btn.addClass('active');
          jQuery('#nova-notification .notification-content').html('The product <span>'+wishlist_btn.attr('data-title')+'</span> has been added to your wishlist.<br><a href=\"/pages/wish-list\" class=\"button-readmore\">Go to Wishlist</a>');
          jQuery('#nova-notification').stop().fadeIn('slow', function(){
            setTimeout(function(){ jQuery('#nova-notification').stop().fadeOut('slow'); }, 4000);
          });
        }
      });
    } catch (e) {}
  });
  /* End Add to wishlist */

  /* Remove wishlist */
    jQuery(".btn-remove-wishlist").click(function(n) {
    var r = jQuery(this).parents("tr");
    var i = r.find(".tag-id").val();
    var s = jQuery("#remove-wishlist-form");
    s.find("input[name='contact[tags]']").val("x" + i);
    jQuery.ajax({
      type: "POST",
      url: "/contact",
      data: s.serialize(),
      success: function(e) {
        r.fadeOut(1e3)
      }
    })
  });
  /* End Remove wishlist */

  /* Left column categories block toggle */
  Codnitive = {
    expandMenu: function(parent) {
      var mode = parseInt(parent.getElementsByTagName("ul")[0].getAttribute("data-expanded"));
      (mode == 1) ? Codnitive.collapse(parent): Codnitive.expand(parent);
    },

    expand: function(parent) {
      parent.getElementsByTagName("ul")[0].style.display = "block";
      parent.getElementsByTagName("span")[0].style.backgroundPosition = "right center";
      parent.getElementsByTagName("ul")[0].setAttribute("data-expanded", "1");
    },

    collapse: function(parent) {
      parent.getElementsByTagName("ul")[0].style.display = "none";
      parent.getElementsByTagName("span")[0].style.backgroundPosition = "left center";
      parent.getElementsByTagName("ul")[0].setAttribute("data-expanded", "0");
    }
  };
  /* End Left column categories block toggle */
  jQuery('#filterlabel1').each(function() {
    jQuery(this).addClass('active');
    jQuery(this).toggle(function() {
      jQuery(this).removeClass('active').next().slideUp(200);
    }, function() {
      jQuery(this).addClass('active').next().slideDown(200);
    })
  });

  /* Home Slider */
  if(jQuery('#rev_slider_2').length > 0)
    jQuery('#rev_slider_2').show().revolution({
      dottedOverlay: 'none',
      delay: 9000,
      startwidth: 1170,
      startheight: 960,

      hideThumbs: 200,
      thumbWidth: 100,
      thumbHeight: 50,
      thumbAmount: 1,

      navigationType: 'none',
      navigationArrows: '',
      navigationStyle: 'preview3',

      touchenabled: 'on',
      onHoverStop: 'on',

      swipe_velocity: 0.7,
      swipe_min_touches: 1,
      swipe_max_touches: 1,
      drag_block_vertical: false,

      spinner: 'spinner2',
      keyboardNavigation: 'on',

      navigationHAlign: '',
      navigationVAlign: '',
      navigationHOffset: 0,
      navigationVOffset: 0,

      soloArrowLeftHalign: '',
      soloArrowLeftValign: '',
      soloArrowLeftHOffset: 0,
      soloArrowLeftVOffset: 0,

      soloArrowRightHalign: '',
      soloArrowRightValign: '',
      soloArrowRightHOffset: 0,
      soloArrowRightVOffset: 0,

      shadow: 0,
      fullWidth: 'on',
      fullScreen: 'off',

      stopLoop: 'off',
      stopAfterLoops: -1,
      stopAtSlide: -1,

      shuffle: 'off',

      autoHeight: 'off',

      forceFullWidth: 'off',

      hideTimerBar: 'on',

      hideNavDelayOnMobile: 1500,

      hideThumbsOnMobile: 'off',
      hideBulletsOnMobile: 'off',
      hideArrowsOnMobile: 'off',
      hideThumbsUnderResolution: 0,

      hideSliderAtLimit: 0,
      hideCaptionAtLimit: 0,
      hideAllCaptionAtLilmit: 0,
      startWithSlide: 0
    });
  /* End Home Slider */


  /* Back to top btn */
  jQuery().UItoTop({ easingType: 'easeOutQuart' });
  /* End Back to top btn */

  /* Brand Carousel */
  jQuery(".brand_list").owlCarousel({
    items : 6,
    itemsDesktop : [1000,6],
    itemsDesktopSmall : [900,3],
    itemsTablet: [600,2],
    itemsMobile : [320,1],
    navigation : true,
    navigationText : ["<i class=\"fa fa-angle-left\"></i>","<i class=\"fa fa-angle-right\"></i>"],
    pagination : false
  });
  /* End Brand Carousel */

  /* Product tab */
  jQuery('#parentVerticalTab').easyResponsiveTabs({
    type: 'vertical', //Types: default, vertical, accordion
    width: 'auto', //auto or any width like 600px
    fit: true, // 100% fit in a container
    closed: 'accordion', // Start closed if in accordion view
    tabidentify: 'hor_1', // The tab groups identifier
  });
  /* End Product tab */

/*
  jQuery('#item-thumbnails').bxSlider({
    mode: 'vertical',
    minSlides: 6,
    maxSlides: 6,
    moveSlides: 1,
    infiniteLoop: false,
    pager: false,
    slideWidth: 96,
    slideMargin: 11,
    nextText: '<i class="fa fa-angle-up"></i>',
    prevText: '<i class="fa fa-angle-down"></i>',

  });
*/
  jQuery('#item-thumbnails .colorbox-group').hover(function(){
    jQuery('.colorbox-group').removeClass('show');
    jQuery(this).addClass('show');
  	jQuery('#image-zoom').attr('href', jQuery(this).attr('href'));
    jQuery('#image-zoom img').attr('src', jQuery(this).attr('href') );
  }, function(){});
  jQuery('#item-thumbnails').bxSlider({
    mode: 'vertical',
    minSlides: 5,
    moveSlides: 6,
    infiniteLoop: false,
    pager: false,
    nextText:'<i class="fa fa-angle-up"></i>',
    prevText:'<i class="fa fa-angle-down"></i>',
    adaptiveHeight: true
  });


  jQuery('#accordion2').collapse({
    toggle: true
  })
  jQuery(".product-right-static-block").owlCarousel({
    items : 6,
    itemsDesktop : [1024,6],
    itemsDesktopSmall : [900,3],
    itemsTablet: [600,2],
    itemsMobile : [480,1],
    pagination : true
  });
  jQuery(".slider-items").owlCarousel({
    items : 4,
    itemsDesktop : [1024,4],
    itemsDesktopSmall : [800,3],
    itemsTablet: [600,2],
    itemsMobile : [320,1],
    navigation : true,
    navigationText : ["<a class=\"fa fa-angle-left\"></a>","<a class=\"fa fa-angle-right\"></a>"],
    slideSpeed : 500,
    pagination : false
  });

  jQuery(".product-img-box").owlCarousel({
    items: 1,
    itemsDesktop: [1199, 1],
    itemsDesktopSmall: [979, 1],
    itemsTablet: [600, 1],
    itemsMobile: [320, 1],
    slideSpeed: 300,
    paginationSpeed: 300
  });

  jQuery("#latest-post").owlCarousel({
    items: 2,
    itemsDesktop: [1000, 2],
    itemsDesktopSmall: [900, 2],
    itemsTablet: [600, 1],
    itemsMobile: [320, 1],
    navigation: true,
    navigationText: ["", ""],
    slideSpeed: 500,
    pagination: false
  });



  jQuery('.slider-tab li').click(function(){
    var _this = jQuery(this);
    _this.parents('.arw_tab_slider').find('.ajax_loading_tab').show();
    _this.parents('.arw_tab_slider').find('li, .tab-content').removeClass('active');
    jQuery( '#'+_this.attr('id')+'_contents' ).find('.owl-carousel').trigger('refresh.owl');
    setTimeout (function(){
      _this.parents('.arw_tab_slider').find('.ajax_loading_tab').hide();
      _this.addClass('active');
      jQuery( '#'+_this.attr('id')+'_contents' ).addClass('active');
    }, 200);
  });

  /* Menu */
  jQuery('#mobile-menu').slicknav({
    openedSymbol: '-',
    closedSymbol: '+',
    prependTo: '#nova-mobile-menu',
    allowParentLinks: true
  });
  jQuery(".megamenu").megamenu({
    'animation': 'fade',
    'mm_timeout': 150
  });
  /* End Menu */
  // Top dropdown
  jQuery(".top-dropdown").mouseenter(function() {
    jQuery(this).click();
  });
  jQuery(".top-dropdown").click(function() {
    jQuery(this).addClass('hover');
    jQuery(this).find("ul").stop(true, true).delay(300).fadeIn(300, "easeOutCubic");
  }).mouseleave(function() {
    jQuery(this).find("ul").stop(true, true).delay(300).fadeOut(300, "easeInCubic");
  });
  // Shopping cart dropdown
  jQuery("#cart").on('click','.cart-contents',function(e) {
    jQuery(".shopping-bag").toggleClass("show");
    e.preventDefault();
  });
  jQuery(document).mouseup(function (e){
    var container = $('.shopping-bag, .cart-contents');
    if (!container.is(e.target) && container.has(e.target).length === 0){
      container.removeClass('show');
    }
  });
  //Top Search Trigger
  jQuery("#top-search-trigger").click(function(e){
    jQuery('body').toggleClass('top-search-open');
    jQuery('#cart .shopping-bag').toggleClass('show', false);
    e.preventDefault();
  });
  //Top Search dropdown
  jQuery("#top-search1").hover(function() {
    jQuery(".form-search3", this).transition({opacity:1});
  }, function() {
    jQuery(".form-search3", this).transition({opacity:0});
  });
  //Flex slider hover
  jQuery(".hidden-buttons").hover(function() {
    jQuery(".owl-buttons", this).transition({opacity:1});
  }, function() {
    jQuery(".owl-buttons", this).transition({opacity:0});
  });
  // Close notification
  jQuery("#nova-notification").on('click','.btn-remove',function(e) {
    jQuery('#nova-notification').fadeOut(200);
  });
  // Sort by dropdown
  jQuery(".sorter .sort-by").mouseenter(function() {
    jQuery(this).click();
  });
  jQuery(".sorter .sort-by").click(function() {
    jQuery(this).addClass('hover');
    jQuery(this).find("ul").stop(true, true).delay(300).fadeIn(500, "easeOutCubic");
  }).mouseleave(function() {
    jQuery(this).find("ul").stop(true, true).delay(300).fadeOut(500, "easeInCubic");
  });


  //Color box content html popup
  jQuery(".inline-size-guide").colorbox({inline:true, width:"50%",opacity:0.7, close: "<i class=\"fa fa-times-circle\"></i>"});
  jQuery.each(jQuery('#accordion a.accordion-toggle'), function(i, link){

    jQuery('#collapse' + 1).collapse({
      toggle : true,
      parent : '#accordion'
    });
    jQuery(link).on('click', function(){
      jQuery('#collapse' + 1).collapse('toggle');
    })
  });
  //brands slider
  jQuery(".brands-list").owlCarousel({
    items : 6,
    itemsDesktop : [1199,6],
    itemsDesktopSmall : [979,3],
    itemsTablet: [600,2], //2 items between 600 and 0;
    itemsMobile : [320,1],
    navigation : true,
    slideSpeed : 300,
    paginationSpeed : 300,
    navigationText : ["<i class=\"icon-left-open-big\"></i>","<i class=\"icon-right-open-big\"></i>"],
    pagination : false
  });
  //Video
  jQuery(".novaworks-video").colorbox({iframe:true, innerWidth:"99%", innerHeight:"100%",opacity:0.7,close: "<i class=\"fa fa-times-circle\"></i>"});
  // Add (+/-) Button Number Incrementers
  jQuery(document).on('click','.button-qty', function () {
    var $button = jQuery(this);
    var oldValue = $button.parent().find("input").val();

    if ($button.text() == "+") {
      var newVal = parseFloat(oldValue) + 1;
    } else {
      // Don't allow decrementing below zero
      if (oldValue > 1) {
        var newVal = parseFloat(oldValue) - 1;
      } else {
        newVal = 1;
      }
    }

    $button.parent().find("input").val(newVal);

  });
});


/* Update mini cart html */
function updateMiniCart(){
  jQuery.ajax({
    type: 'GET',
    url: '/cart.js',
    dataType: 'json',
    success: function(cart_info){
      jQuery('.cart-count').text(cart_info.item_count);
      var cart_items_html = '';
      if (cart_info.item_count > 0) {
        cart_items_html = '<div class="bag-header">There are <span class="cart-count">'+cart_info.item_count+'</span> items in your cart</div><div class="bag-contents">';
        for (var i = 0; i < cart_info.items.length; i++) {
            var cart_item_html = '';
            cart_item_html += '<div class="item">';
            cart_item_html +=     '<div class="product-image">'
            cart_item_html +=         '<a href="'+cart_info.items[i].url+'" title="'+cart_info.items[i].title+'" class="image"><img src="'+Shopify.resizeImage(cart_info.items[i].image, "small")+'" width="87" height="103" alt="'+cart_info.items[i].title+'"></a>';
            cart_item_html +=     '</div>';
            cart_item_html +=     '<div class="product-details">';
            cart_item_html +=         '<div class="product-name">';
            cart_item_html +=             '<a href="'+cart_info.items[i].url+'">'+cart_info.items[i].title+'</a>';
            cart_item_html +=         '</div>';
            cart_item_html +=         '<span class="price">'+Shopify.formatMoney(cart_info.items[i].price, window.money_format)+'</span>';
            cart_item_html +=         '<div class="quantity">Qty: <strong>'+cart_info.items[i].quantity+'</strong></div>';
            cart_item_html +=         '<a href="javascript:;" onclick="changeCartProduct('+cart_info.items[i].id+', 0)" title="Remove This Item" class="btn-remove"><i class="fa fa-times"></i></a>';
            cart_item_html +=     '</div>';
            cart_item_html += '</div>';
            cart_item_html += '<hr>';
            cart_items_html += cart_item_html;
        }
        cart_items_html += '</div><div class="bag-buttons"><a href="/cart" class="sf-roll-button bag-button"><span>View Cart</span><span>View Cart</span></a><a href="/checkout" class="sf-roll-button checkout-button"><span>Check Out</span><span>Check Out</span></a></div>';
      }else{
        cart_items_html += '<div class="shopping-no-items"><p class="empty">You have no items in your shopping cart.</p></div>';
      }
      jQuery(".bag-contents").getNiceScroll().remove();
      jQuery('.shopping-bag').html(cart_items_html);
      if(jQuery('.bag-contents').length > 0)
      	jQuery(".bag-contents").niceScroll({cursorcolor:"#dddddd"});
      Currency.convertAll(shopCurrency, jQuery('[name=currencies]').val());

    }
  });
};
/* End Update mini cart html */

/* Update cart product quantity */
function changeCartProduct(id, quantity){
  jQuery.ajax({
    type: 'POST',
    url: '/cart/change.js',
    dataType: 'json',
    data: 'id='+id+'&quantity='+quantity,
    success: function(data){
      updateMiniCart();
    }
  });
};
/* End Update cart product quantity */

/* Product list Add to cart */
function ajaxcart(id) {
  var addtocart_default_text = jQuery('.button-ajax-cart-id-'+id).html();
  if(!jQuery('.button-ajax-cart-id-'+id).hasClass('adding')){
    jQuery('.button-ajax-cart-id-'+id).addClass('adding').html('<i class="fa fa-circle-o-notch fa-spin"></i>');
    try {
      jQuery.ajax( {
        type: 'POST',
        url: '/cart/add.js',
        dataType: 'json',
        data: 'id='+id+'&quantity=1',
        error : function(data){
        	alert(data.responseJSON.description);
        },
        success : function(data) {
          jQuery('.button-ajax-cart-id-'+id).removeClass('adding').html(addtocart_default_text);
          jQuery('#nova-notification .notification-content').html("The product <span>"+data.title+"</span> was added to your shopping cart.<br><a href=\"/cart\" class=\"button-readmore\">View Cart</a>");
          jQuery('#nova-notification').stop().fadeIn('slow', function(){
            setTimeout(function(){ jQuery('#nova-notification').stop().fadeOut('slow'); }, 4000);
          });
          updateMiniCart();
        }
      });
    } catch (e) {}
  }
}
/* End Product list Add to cart */

/* Display product - list or grid */
function bindGrid()
{
	var view = $.totalStorage('display');
	if (!view && (typeof displayList != 'undefined') && displayList)
		view = 'list';

	if (view && view != 'grid')
		display(view);
	else
		$('.view-mode').find('.grid').addClass('active');
}

function display(display){
  if(display == 'list'){
    jQuery('#products-viewmode').removeClass().addClass('products-list');
    jQuery('.products-list > .item').each(function(index, element) {
      var review_html = '';
      if( jQuery(element).find('.review-wrap') ){
        review_html = '<div class="review-wrap">'+ jQuery(element).find('.review-wrap').html() + '</div>';
      }
      jQuery(element).removeClass('col-lg-4 col-md-4 col-sm-4 col-xs-6');
      html = '     <div class="row">';
      html +='        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">';
      html +='            <div class="products-list-inner">';
      html +='               <div class="item-product-image-box">';
      html +=                    jQuery(element).find('.item-product-image-box').html();
      html +='                </div>'
      html +='            </div>';
      html +='        </div>';
      html +='        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">';
      html +='            <div class="product-shop">';
      html +='                <div class="f-fix">';
      html +='                     <h2 class="product-name">'+ jQuery(element).find('.product-name').html() +'</h2>';
      html +=                      review_html;
      html +='                     <div class="desc std">'+ jQuery(element).find('.desc').html() +'</div>';
      html +='                     <div class="price-box">'+ jQuery(element).find('.price-box').html() +'</div>';
      html +='                     <div class="novaworks-quick-act">'+ jQuery(element).find('.novaworks-quick-act').html().replace("<i class=\"fa fa-shopping-cart\"></i>", "<span>Add to cart</span>") +'</div>';
      html +='                </div>';
      html +='            </div>';
      html +='        </div>';
      html +='    </div>';
      jQuery(element).html(html);
    });
    $('.view-mode').find('.list').addClass('active');
    $('.view-mode').find('.grid').removeClass('active');
    $.totalStorage('display', 'list');
  }else{
  	jQuery('#products-viewmode').removeClass().addClass('row products-grid');
    jQuery('.products-grid > .item').each(function(index, element) {
      var review_html = '';
      if( jQuery(element).find('.review-wrap') ){
        review_html = '<div class="review-wrap">'+ jQuery(element).find('.review-wrap').html() + '</div>';
      }
      jQuery(element).addClass('col-lg-4 col-md-4 col-sm-4 col-xs-6');
      html ='     <div class="item-product-image-box">'+ jQuery(element).find('.item-product-image-box').html() +'</div>';
      html +='    <h3 class="product-name">'+ jQuery(element).find('.product-name').html() +'</h3>';
      html +='    <div class="hidden-class"><div class="desc std">'+ jQuery(element).find('.desc').html() +'</div></div>';
      html +=     review_html;
      html +='    <div class="price-box">'+ jQuery(element).find('.price-box').html() +'</div>';
      html +='    <div class="novaworks-quick-act">'+ jQuery(element).find('.novaworks-quick-act').html().replace("<span>Add to cart</span>", "<i class=\"fa fa-shopping-cart\"></i>") +'</div>';
      jQuery(element).html(html);
    });
    $('.view-mode').find('.list').removeClass('active');
    $('.view-mode').find('.grid').addClass('active');
    $.totalStorage('display', 'grid');
  }
}
/* End Display product - list or grid */

/* Update main product image. */
var switchImage = function(newImageSrc, newImage, mainImageDomEl) {
  jQuery(mainImageDomEl).attr('src', newImageSrc);
  jQuery(mainImageDomEl).parent().attr('href', newImageSrc.replace('_1024x1024', '')).CloudZoom();
};
/* Quich view function*/

var quickview = function(e,product_handle){
  jQuery(e).html('<i class="fa fa-circle-o-notch fa-spin"></i>');
  jQuery.ajax({
    type: 'GET',
    url: '/products/'+product_handle+'.js',
    dataType: 'json',
    success: function(product_info){
      jQuery(e).html('<i class="fa fa-search"></i>');
      var wishlist_btn = '';
      var hidden_option = '';
      console.log(product_info.variants.length);
      console.log(product_info.variants[0].title);
      if (product_info.variants.length == 1 && product_info.variants[0].title.indexOf('Default') != -1)
	  hidden_option = 'hidden-class';



        if( typeof customer_email != 'undefined' && customer_email != '' ){
          var value = product_info.id;
          var productID = product_info.id;
          var display_index = 0;
          for (var i = 0; i < customer_tags.length; i++) {
            if(customer_tags[i].indexOf(productID) != -1){
              display_index = display_index + 1;
              value = 'x'+value;
            }
          }
          display_index = display_index % 2;
          if (display_index == 1)
            wishlist_btn = '<a title="Already in your wishlist, Go to wishlist" class="act-wishlist act-add-to-wishlist active" href="/pages/wish-list"><i class="fa fa-heart-o"></i></a>';
          else
            wishlist_btn = '<a data-submit="contact[email]='+customer_email+'&contact[tags]='+value+'&form_type=customer" data-title="'+ product_info.title +'" class="act-wishlist act-add-to-wishlist" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>';
        }
        else
          wishlist_btn = '<a title="Add to Wishlist" class="act-wishlist act-add-to-wishlist" href="/account/login"><i class="fa fa-heart-o"></i></a>';


      if (product_info.available) var avai_text = 'In stock'; else var avai_text = 'Sold out';
      var quickview_html = '';
      quickview_html += '<div class="product-view page-empty">';
      quickview_html += '  <div class="product-essential">';
      quickview_html += '    <div class="quick-view-details">';
      quickview_html += '      <div class="product-img-box hidden-buttons">';
      for (var i = 0; i < product_info.images.length; i++) {
      quickview_html += '        <div class="item">';
      quickview_html += '          <img src="'+Shopify.resizeImage(product_info.images[i] , "large")+'" alt="'+ product_info.title +'" />';
      quickview_html += '        </div>';}
      quickview_html += '      </div>';
      quickview_html += '      <div class="product-shop">';
      quickview_html += '        <div class="product-name">';
      quickview_html += '           <h1>'+product_info.title+'</h1>';
      quickview_html += '        </div>';
      quickview_html += '        <div class="price-box">';
      quickview_html += '          <span class="regular-price">';
      quickview_html += '             <span class="price">'+ Shopify.formatMoney(product_info.price, window.money_format) +'</span>';
      quickview_html += '           </span>';
      quickview_html += '         </div>';
      quickview_html += '        <div class="product-codes">';
      quickview_html += '          <p class="availability in-stock">Availability: <span>'+ avai_text +'</span></p>';
      quickview_html += '          <p>Collection: '+product_info.vendor+'</p>';
      quickview_html += '        </div>';
      quickview_html += '         <div class="add-to-box">';
      quickview_html += '           <form action="/cart/add" method="post" class="variants clearfix">';
      quickview_html += '             <div class="product-options">';
      quickview_html += '               <div class="select clearfix">';
      quickview_html += '                 <select class="product-select '+hidden_option+'" name="id">';
      for (var i = 0; i < product_info.variants.length; i++) {quickview_html += '<option value="'+ product_info.variants[i].id +'">'+ product_info.variants[i].title +'</option>';}
      quickview_html += '                 </select>';
      quickview_html += '               </div>';
      quickview_html += '               <div class="add-to-qty">';
      quickview_html += '                 <div class="desc-qty button-qty"><span style="display: none;">-</span></div>';
      quickview_html += '                 <input type="text" name="quantity" maxlength="12" value="1" title="Qty" class="input-text qty">';
      quickview_html += '                 <div class="inc-qty button-qty"><span style="display: none;">+</span></div>';
      quickview_html += '               </div>';
      quickview_html += '               <div class="purchase-section">';
      quickview_html += '                 <div class="purchase">';
      if (product_info.available){
      quickview_html += '                   <div class="add-to-cart">';
      quickview_html += '                     <button type="button" title="Add to Cart" name="add" class="button btn-cart" onclick="">';
      quickview_html += '                       <span><span>Add to Cart</span></span>';
      quickview_html += '                     </button>';
      quickview_html += '                   </div>';
      }else{
      quickview_html += '                   <div class="add-to-cart">';
      quickview_html += '                     <button name="add" disabled="disabled" type="button" onclick="" title="Sold Out" class="button btn-cart disabled">';
      quickview_html += '                       <span><span>'+avai_text+'</span></span>';
      quickview_html += '                     </button>';
      quickview_html += '                     </div>';
      }
      quickview_html += '                 </div>';
      quickview_html += '               </div>';
      quickview_html += '             </div>';
      quickview_html += '           </form>';
      quickview_html += '           <div class="add-to-link">';
      quickview_html += '             <ul class="add-to-links">';
      quickview_html += '               <li>';
	  quickview_html +=                   wishlist_btn;
      quickview_html += '               </li>';
      quickview_html += '             </ul> ';
      quickview_html += '           </div>';
      quickview_html += '         </div>';
      quickview_html += '         <div class="short-description">';
      quickview_html += '           <div class="std">'+ product_info.description +'</div>';
      quickview_html += '         </div>';
      quickview_html += '         <div class="clearer"></div>';
      quickview_html += '        </div>';
      quickview_html += '      </div>';
      quickview_html += '    </div>';
      quickview_html += '  </div>';
      quickview_html += '</div>';

      jQuery.colorbox({
        html: quickview_html ,
        width:"780px",
        maxWidth: "100%",
        height:"480px",
        opacity:0.7,
        onComplete: function(){
          jQuery(".product-img-box").owlCarousel({
            items: 1,
            itemsDesktop: [1199, 1],
            itemsDesktopSmall: [979, 1],
            itemsTablet: [600, 1],
            itemsMobile: [320, 1],
            slideSpeed: 300,
            paginationSpeed: 300
          });
        },
        close: "<i class=\"fa fa-times-circle\"></i>"
      });
      Currency.convertAll(shopCurrency, jQuery('[name=currencies]').val());
    }
  });
}
