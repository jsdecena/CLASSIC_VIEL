@extends('layouts.front.app')

@section('og')
<meta property="og:type" content="home"/>
<meta property="og:title" content="{{ config('app.name') }}"/>
<meta property="og:description" content="{{ config('app.name') }}"/>
@endsection

@section('content')

<div style="background-image: url('../../img/SSS16_EDIT_7107_1024x1024.jpg')" class="parallax-box parrallax-page-title alt-bg parallax-shop" data-stellar-background-ratio="0.4">
  <div class="parallax-title-content">
    <h1>CLASSIC VEIL - 2018</h1>
    <div class="breadcrumbs">
      <ul>
        <li class="home">
          <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="https://www.chador.com.sa" title="Chador" itemprop="url"><span itemprop="title">Home</span></a></span><span> &gt; </span>
        </li>
        <li><span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/collections/sabel" title="SABEL - SS 2016" itemprop="url"><span itemprop="title">SABEL - SS 2016</span></a></span></li>
      </ul>
    </div>
  </div>
</div>
<div class="main-container">
  <div class="novaworks-main-content">
    <div class="main container">
      <div class="row columns-layout">
        <div class="col-main col-sm-9 col-sm-push-3">
          <div class="category-products">
            <div class="toolbar">
              <div class="sorter">
                <div class="sort-by">
                  <span class="current">
                    <span>

                      Name

                      <i class="fa fa-sort-down"></i>
                    </span>
                  </span>
                  <ul>
                    <li><a class="sort-link" href="price-ascending">Price</a></li>
                    <li><a class="sort-link" href="title-ascending">Name</a></li>
                    <li><a class="sort-link" href="created-ascending">Date</a></li>
                    <li><a class="sort-link" href="best-selling">Best Selling</a></li>
                  </ul>
                </div>
                <div class="direction">

                  <a class="sort-link" href="title-descending" title="Set Descending Direction" data-toggle="modal" data-target="#myModal">
                    <i class="fa fa-long-arrow-down"></i>
                  </a>

                </div>
                <div class="direction">

                  <a class="sort-link" data-toggle="modal" data-target="#myModal">
                    <i class="fa fa-long-arrow-down"></i>Quick View
                  </a>

                </div>

                                  <!-- Trigger the modal with a button -->
                  <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> -->

                  <!-- Modal -->
                  <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Modal Header</h4>
                        </div>
                        <div class="modal-body">
                          <p>Some text in the modal.</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>

                    </div>
                  </div>


                <!-- <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal_1"> <i class="fa fa-eye"></i> Quick View</button> -->
                <p class="view-mode  hidden-xxs">
                  <a title="Grid" onclick="display('grid'); return false;" class="grid active">Grid</a>&nbsp;
                  <a title="List" onclick="display('list'); return false;" class="list">List</a>&nbsp;
                </p>
              </div>
            </div>

            <div id="products-viewmode" class="row products-grid">

              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 item">

                <div class="item-product-image-box">

                  <a class="product-image" href="/collections/sabel/products/product-3" title="Donna Shirt Dress">
                    <div class="product-img-additional back">
                      <img src="//cdn.shopify.com/s/files/1/1082/9152/products/Look5Front_large.jpg?v=1458479233" alt="Donna Shirt Dress">
                    </div>
                  </a>
                  <div class="product-hover-box hidden-xs">
                    <a class="detail_view" href="/collections/sabel/products/product-3"></a>
                    <div class="quick-view">
                      <a class="act-quickview-button" onclick="quickview(this,'product-3'); return false;" href="#"><i class="fa fa-search"></i></a>
                    </div>
                    <div class="detail-view">
                      <a class="act-imageview-button" href="/collections/sabel/products/product-3"><i class="fa fa-chain"></i></a>
                    </div>
                  </div>
                </div>
                <h3 class="product-name">
                  <a href="/collections/sabel/products/product-3" title="Donna Shirt Dress">Donna Shirt Dress</a>
                </h3>


                <div class="hidden-class">
                  <div class="desc std">
                    Maxi shirt dress, reversed V pleats at center back with a slit.
                    Hidden side pockets.
                    100% Linen. Medium Weight.
                    Almost all seams are binded.
                    <a href="/collections/sabel/products/product-3" title="Donna Shirt Dress" class="link-learn">Learn More</a>
                  </div>
                </div>

                <div class="review-wrap">
                  <span class="shopify-product-reviews-badge" data-id="4800635971"></span>
                </div>
                <div class="price-box">
                  <p class="special-price"><span class="price"><span class=money>1,380.00 SAR</span></span></p>
                  <!-- custom view button -->
                  <div class="custom-button">
                    <a class="btn" href="/collections/sabel/products/product-3">View Product</a>
                  </div>
                </div>

                <div class="novaworks-quick-act">
                  <a title="Add to Wishlist" class="act-wishlist act-add-to-wishlist" href="/account/login"><i class="fa fa-heart-o"></i></a>
                  <a href="javascript:;" title="Add to cart" onclick="ajaxcart(14840338691)" class="ajaxcart_simple button-ajax-cart-id-14840338691"><i class="fa fa-shopping-cart"></i></a>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 item">
                <div class="item-product-image-box">

                  <a class="product-image" href="/collections/sabel/products/product-1" title="Evander 1">
                    <div class="product-img-additional back">
                      <img src="//cdn.shopify.com/s/files/1/1082/9152/products/Look1_large.jpg?v=1458479083" alt="Evander 1">
                    </div>
                  </a>
                  <div class="product-hover-box hidden-xs">
                    <a class="detail_view" href="/collections/sabel/products/product-1"></a>
                    <div class="quick-view">
                      <a class="act-quickview-button" onclick="quickview(this,'product-1'); return false;" href="#"><i class="fa fa-search"></i></a>
                    </div>
                    <div class="detail-view">
                      <a class="act-imageview-button" href="/collections/sabel/products/product-1"><i class="fa fa-chain"></i></a>
                    </div>
                  </div>
                </div>
                <h3 class="product-name">
                  <a href="/collections/sabel/products/product-1" title="Evander 1">Evander 1</a>
                </h3>


                <div class="hidden-class">
                  <div class="desc std">
                    maxi over sized shirt, rounded collar with a knotted button.
                    Hidden side pockets.
                    100% Linen. Medium Weight.
                    All seams are binded.
                    <a href="/collections/sabel/products/product-1" title="Evander 1" class="link-learn">Learn More</a>
                  </div>
                </div>

                <div class="review-wrap">
                  <span class="shopify-product-reviews-badge" data-id="4799694787"></span>
                </div>
                <div class="price-box">



                  <p class="special-price"><span class="price"><span class=money>1,360.00 SAR</span></span></p>



                  <!-- custom view button -->
                  <div class="custom-button">
                    <a class="btn" href="/collections/sabel/products/product-1">View Product</a>
                  </div>
                </div>

                <div class="novaworks-quick-act">


                  <a title="Add to Wishlist" class="act-wishlist act-add-to-wishlist" href="/account/login"><i class="fa fa-heart-o"></i></a>



                  <a href="javascript:;" title="Add to cart" onclick="ajaxcart(14836716483)" class="ajaxcart_simple button-ajax-cart-id-14836716483"><i class="fa fa-shopping-cart"></i></a>
                </div>

              </div>

              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 item">

                <div class="item-product-image-box">

                  <a class="product-image" href="/collections/sabel/products/product-8" title="Evander 2">
                    <div class="product-img-additional back">
                      <img src="//cdn.shopify.com/s/files/1/1082/9152/products/Look2_large.jpg?v=1458479846" alt="Evander 2">
                    </div>
                  </a>
                  <div class="product-hover-box hidden-xs">
                    <a class="detail_view" href="/collections/sabel/products/product-8"></a>
                    <div class="quick-view">
                      <a class="act-quickview-button" onclick="quickview(this,'product-8'); return false;" href="#"><i class="fa fa-search"></i></a>
                    </div>
                    <div class="detail-view">
                      <a class="act-imageview-button" href="/collections/sabel/products/product-8"><i class="fa fa-chain"></i></a>
                    </div>
                  </div>
                </div>
                <h3 class="product-name">
                  <a href="/collections/sabel/products/product-8" title="Evander 2">Evander 2</a>
                </h3>


                <div class="hidden-class">
                  <div class="desc std">

                    Maxi over sized shirt, double collar with a knotted button.
                    Hidden side pockets.
                    100% Linen. Medium Weight.
                    Almost all seams are binded.
                    <a href="/collections/sabel/products/product-8" title="Evander 2" class="link-learn">Learn More</a>
                  </div>
                </div>

                <div class="review-wrap">
                  <span class="shopify-product-reviews-badge" data-id="5578477955"></span>
                </div>
                <div class="price-box">



                  <p class="special-price"><span class="price"><span class=money>1,360.00 SAR</span></span></p>



                  <!-- custom view button -->
                  <div class="custom-button">
                    <a class="btn" href="/collections/sabel/products/product-8">View Product</a>
                  </div>
                </div>

                <div class="novaworks-quick-act">


                  <a title="Add to Wishlist" class="act-wishlist act-add-to-wishlist" href="/account/login"><i class="fa fa-heart-o"></i></a>



                  <a href="javascript:;" title="Add to cart" onclick="ajaxcart(17818392963)" class="ajaxcart_simple button-ajax-cart-id-17818392963"><i class="fa fa-shopping-cart"></i></a>
                </div>

              </div>

              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 item">

                <div class="item-product-image-box">

                  <a class="product-image" href="/collections/sabel/products/product-7" title="Evander 3">
                    <div class="product-img-additional back">
                      <img src="//cdn.shopify.com/s/files/1/1082/9152/products/Look3_large.jpg?v=1458479768" alt="Evander 3">
                    </div>
                  </a>
                  <div class="product-hover-box hidden-xs">
                    <a class="detail_view" href="/collections/sabel/products/product-7"></a>
                    <div class="quick-view">
                      <a class="act-quickview-button" onclick="quickview(this,'product-7'); return false;" href="#"><i class="fa fa-search"></i></a>
                    </div>
                    <div class="detail-view">
                      <a class="act-imageview-button" href="/collections/sabel/products/product-7"><i class="fa fa-chain"></i></a>
                    </div>
                  </div>
                </div>
                <h3 class="product-name">
                  <a href="/collections/sabel/products/product-7" title="Evander 3">Evander 3</a>
                </h3>


                <div class="hidden-class">
                  <div class="desc std">

                    Maxi over sized dress, rounded shoulder, U neckline (dropped back).
                    Hidden side pockets.
                    100% Linen. Medium Weight.
                    Almost all seams are binded.
                    <a href="/collections/sabel/products/product-7" title="Evander 3" class="link-learn">Learn More</a>
                  </div>
                </div>

                <div class="review-wrap">
                  <span class="shopify-product-reviews-badge" data-id="5578406275"></span>
                </div>
                <div class="price-box">



                  <p class="special-price"><span class="price"><span class=money>1,300.00 SAR</span></span></p>



                  <!-- custom view button -->
                  <div class="custom-button">
                    <a class="btn" href="/collections/sabel/products/product-7">View Product</a>
                  </div>
                </div>

                <div class="novaworks-quick-act">


                  <a title="Add to Wishlist" class="act-wishlist act-add-to-wishlist" href="/account/login"><i class="fa fa-heart-o"></i></a>



                  <a href="javascript:;" title="Add to cart" onclick="ajaxcart(17185483523)" class="ajaxcart_simple button-ajax-cart-id-17185483523"><i class="fa fa-shopping-cart"></i></a>
                </div>

              </div>

              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 item">

                <div class="item-product-image-box">

                  <a class="product-image" href="/collections/sabel/products/fiona" title="Fiona">
                    <div class="product-img-additional back">
                      <img src="//cdn.shopify.com/s/files/1/1082/9152/products/Fiona_large.jpg?v=1458824905" alt="Fiona">
                    </div>
                  </a>
                  <div class="product-hover-box hidden-xs">
                    <a class="detail_view" href="/collections/sabel/products/fiona"></a>
                    <div class="quick-view">
                      <a class="act-quickview-button" onclick="quickview(this,'fiona'); return false;" href="#"><i class="fa fa-search"></i></a>
                    </div>
                    <div class="detail-view">
                      <a class="act-imageview-button" href="/collections/sabel/products/fiona"><i class="fa fa-chain"></i></a>
                    </div>
                  </div>
                </div>
                <h3 class="product-name">
                  <a href="/collections/sabel/products/fiona" title="Fiona">Fiona</a>
                </h3>


                <div class="hidden-class">
                  <div class="desc std">
                    Pleated front, large V opening with an under collar. A line shape with full length sleeves. Hidden side pockets. 100 % Linen. Medium Weight. Almost all seams are binded. Taking...
                    <a href="/collections/sabel/products/fiona" title="Fiona" class="link-learn">Learn More</a>
                  </div>
                </div>

                <div class="review-wrap">
                  <span class="shopify-product-reviews-badge" data-id="5807781251"></span>
                </div>
                <div class="price-box">



                  <p class="special-price"><span class="price"><span class=money>1,495.00 SAR</span></span></p>



                  <!-- custom view button -->
                  <div class="custom-button">
                    <a class="btn" href="/collections/sabel/products/fiona">View Product</a>
                  </div>
                </div>

                <div class="novaworks-quick-act">


                  <a title="Add to Wishlist" class="act-wishlist act-add-to-wishlist" href="/account/login"><i class="fa fa-heart-o"></i></a>



                  <a href="javascript:;" title="Add to cart" onclick="ajaxcart(17859169027)" class="ajaxcart_simple button-ajax-cart-id-17859169027"><i class="fa fa-shopping-cart"></i></a>
                </div>

              </div>

              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 item">

                <div class="item-product-image-box">

                  <a class="product-image" href="/collections/sabel/products/product-6" title="Lia Dress">
                    <div class="product-img-additional back">
                      <img src="//cdn.shopify.com/s/files/1/1082/9152/products/Look7_large.jpg?v=1458479463" alt="Lia Dress">
                    </div>
                  </a>
                  <div class="product-hover-box hidden-xs">
                    <a class="detail_view" href="/collections/sabel/products/product-6"></a>
                    <div class="quick-view">
                      <a class="act-quickview-button" onclick="quickview(this,'product-6'); return false;" href="#"><i class="fa fa-search"></i></a>
                    </div>
                    <div class="detail-view">
                      <a class="act-imageview-button" href="/collections/sabel/products/product-6"><i class="fa fa-chain"></i></a>
                    </div>
                  </div>
                </div>
                <h3 class="product-name">
                  <a href="/collections/sabel/products/product-6" title="Lia Dress">Lia Dress</a>
                </h3>


                <div class="hidden-class">
                  <div class="desc std">
                    Deep V Neck dress with bias skirt.
                    Hidden side pockets.
                    100% Linen. Pinstriped. Lightweight.
                    Mustard polyester piping in side seams.
                    <a href="/collections/sabel/products/product-6" title="Lia Dress" class="link-learn">Learn More</a>
                  </div>
                </div>

                <div class="review-wrap">
                  <span class="shopify-product-reviews-badge" data-id="4800718851"></span>
                </div>
                <div class="price-box">



                  <span class="regular-price"><span class="price"><span class=money>1,275.00 SAR</span></span></span>

                  Sold Out

                  <!-- custom view button -->
                  <div class="custom-button">
                    <a class="btn" href="/collections/sabel/products/product-6">View Product</a>
                  </div>
                </div>

                <div class="novaworks-quick-act">


                  <a title="Add to Wishlist" class="act-wishlist act-add-to-wishlist" href="/account/login"><i class="fa fa-heart-o"></i></a>



                  <a href="javascript:;" title="Add to cart" onclick="ajaxcart(14841063235)" class="ajaxcart_simple button-ajax-cart-id-14841063235"><i class="fa fa-shopping-cart"></i></a>
                </div>

              </div>

              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 item">

                <div class="item-product-image-box">

                  <a class="product-image" href="/collections/sabel/products/product-5" title="Mira1 Dress">
                    <div class="product-img-additional back">
                      <img src="//cdn.shopify.com/s/files/1/1082/9152/products/Look9front_large.jpg?v=1458479687" alt="Mira1 Dress">
                    </div>
                  </a>
                  <div class="product-hover-box hidden-xs">
                    <a class="detail_view" href="/collections/sabel/products/product-5"></a>
                    <div class="quick-view">
                      <a class="act-quickview-button" onclick="quickview(this,'product-5'); return false;" href="#"><i class="fa fa-search"></i></a>
                    </div>
                    <div class="detail-view">
                      <a class="act-imageview-button" href="/collections/sabel/products/product-5"><i class="fa fa-chain"></i></a>
                    </div>
                  </div>
                </div>
                <h3 class="product-name">
                  <a href="/collections/sabel/products/product-5" title="Mira1 Dress">Mira1 Dress</a>
                </h3>


                <div class="hidden-class">
                  <div class="desc std">

                    Maxi bell biased dress, fitted shoulders.
                    U shaped open back above bra line.
                    Hidden side pockets.
                    100% Linen. Medium Weight.
                    Almost all seams are binded.
                    <a href="/collections/sabel/products/product-5" title="Mira1 Dress" class="link-learn">Learn More</a>
                  </div>
                </div>

                <div class="review-wrap">
                  <span class="shopify-product-reviews-badge" data-id="4800714499"></span>
                </div>
                <div class="price-box">



                  <p class="special-price"><span class="price"><span class=money>1,425.00 SAR</span></span></p>



                  <!-- custom view button -->
                  <div class="custom-button">
                    <a class="btn" href="/collections/sabel/products/product-5">View Product</a>
                  </div>
                </div>

                <div class="novaworks-quick-act">


                  <a title="Add to Wishlist" class="act-wishlist act-add-to-wishlist" href="/account/login"><i class="fa fa-heart-o"></i></a>



                  <a href="javascript:;" title="Add to cart" onclick="ajaxcart(14841056131)" class="ajaxcart_simple button-ajax-cart-id-14841056131"><i class="fa fa-shopping-cart"></i></a>
                </div>

              </div>

              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 item">

                <div class="item-product-image-box">

                  <a class="product-image" href="/collections/sabel/products/product-4" title="Mira2 Dress">
                    <div class="product-img-additional back">
                      <img src="//cdn.shopify.com/s/files/1/1082/9152/products/Look6_large.jpg?v=1458479353" alt="Mira2 Dress">
                    </div>
                  </a>
                  <div class="product-hover-box hidden-xs">
                    <a class="detail_view" href="/collections/sabel/products/product-4"></a>
                    <div class="quick-view">
                      <a class="act-quickview-button" onclick="quickview(this,'product-4'); return false;" href="#"><i class="fa fa-search"></i></a>
                    </div>
                    <div class="detail-view">
                      <a class="act-imageview-button" href="/collections/sabel/products/product-4"><i class="fa fa-chain"></i></a>
                    </div>
                  </div>
                </div>
                <h3 class="product-name">
                  <a href="/collections/sabel/products/product-4" title="Mira2 Dress">Mira2 Dress</a>
                </h3>


                <div class="hidden-class">
                  <div class="desc std">
                    Deep V neck maxi bell shaped biased dress.  Dropped V back neckline, fitted shoulders. Does not come with white shirt underneath. Hidden side pockets. 100% Linen. Medium Weight. Almost all...
                    <a href="/collections/sabel/products/product-4" title="Mira2 Dress" class="link-learn">Learn More</a>
                  </div>
                </div>

                <div class="review-wrap">
                  <span class="shopify-product-reviews-badge" data-id="4800644163"></span>
                </div>
                <div class="price-box">



                  <p class="special-price"><span class="price"><span class=money>1,475.00 SAR</span></span></p>



                  <!-- custom view button -->
                  <div class="custom-button">
                    <a class="btn" href="/collections/sabel/products/product-4">View Product</a>
                  </div>
                </div>

                <div class="novaworks-quick-act">


                  <a title="Add to Wishlist" class="act-wishlist act-add-to-wishlist" href="/account/login"><i class="fa fa-heart-o"></i></a>



                  <a href="javascript:;" title="Add to cart" onclick="ajaxcart(14840512131)" class="ajaxcart_simple button-ajax-cart-id-14840512131"><i class="fa fa-shopping-cart"></i></a>
                </div>

              </div>

              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 item">

                <div class="item-product-image-box">

                  <a class="product-image" href="/collections/sabel/products/test-product" title="Rania Dress">
                    <div class="product-img-additional back">
                      <img src="//cdn.shopify.com/s/files/1/1082/9152/products/Look10_large.jpg?v=1458479877" alt="Rania Dress">
                    </div>
                  </a>
                  <div class="product-hover-box hidden-xs">
                    <a class="detail_view" href="/collections/sabel/products/test-product"></a>
                    <div class="quick-view">
                      <a class="act-quickview-button" onclick="quickview(this,'test-product'); return false;" href="#"><i class="fa fa-search"></i></a>
                    </div>
                    <div class="detail-view">
                      <a class="act-imageview-button" href="/collections/sabel/products/test-product"><i class="fa fa-chain"></i></a>
                    </div>
                  </div>
                </div>
                <h3 class="product-name">
                  <a href="/collections/sabel/products/test-product" title="Rania Dress">Rania Dress</a>
                </h3>


                <div class="hidden-class">
                  <div class="desc std">
                    Maxi A line, cowl neck collar. Full length sleeves.
                    Center back invisible zipper.
                    100% Linen. Light Weight.
                    <a href="/collections/sabel/products/test-product" title="Rania Dress" class="link-learn">Learn More</a>
                  </div>
                </div>

                <div class="review-wrap">
                  <span class="shopify-product-reviews-badge" data-id="5698245123"></span>
                </div>
                <div class="price-box">



                  <p class="special-price"><span class="price"><span class=money>1,350.00 SAR</span></span></p>



                  <!-- custom view button -->
                  <div class="custom-button">
                    <a class="btn" href="/collections/sabel/products/test-product">View Product</a>
                  </div>
                </div>

                <div class="novaworks-quick-act">


                  <a title="Add to Wishlist" class="act-wishlist act-add-to-wishlist" href="/account/login"><i class="fa fa-heart-o"></i></a>



                  <a href="javascript:;" title="Add to cart" onclick="ajaxcart(17517638083)" class="ajaxcart_simple button-ajax-cart-id-17517638083"><i class="fa fa-shopping-cart"></i></a>
                </div>

              </div>

              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 item">

                <div class="item-product-image-box">

                  <a class="product-image" href="/collections/sabel/products/product-2" title="Suzie">
                    <div class="product-img-additional back">
                      <img src="//cdn.shopify.com/s/files/1/1082/9152/products/Look4_large.jpg?v=1458478462" alt="Suzie">
                    </div>
                  </a>
                  <div class="product-hover-box hidden-xs">
                    <a class="detail_view" href="/collections/sabel/products/product-2"></a>
                    <div class="quick-view">
                      <a class="act-quickview-button" onclick="quickview(this,'product-2'); return false;" href="#"><i class="fa fa-search"></i></a>
                    </div>
                    <div class="detail-view">
                      <a class="act-imageview-button" href="/collections/sabel/products/product-2"><i class="fa fa-chain"></i></a>
                    </div>
                  </div>
                </div>
                <h3 class="product-name">
                  <a href="/collections/sabel/products/product-2" title="Suzie">Suzie</a>
                </h3>


                <div class="hidden-class">
                  <div class="desc std">
                    Maxi wrapped collar A line flowy dress, full length sleeve.
                    Hidden side pockets.
                    100% Linen. Medium Weight.
                    Almost all seams are binded.
                    <a href="/collections/sabel/products/product-2" title="Suzie" class="link-learn">Learn More</a>
                  </div>
                </div>

                <div class="review-wrap">
                  <span class="shopify-product-reviews-badge" data-id="4799981635"></span>
                </div>
                <div class="price-box">



                  <p class="special-price"><span class="price"><span class=money>1,440.00 SAR</span></span></p>



                  <!-- custom view button -->
                  <div class="custom-button">
                    <a class="btn" href="/collections/sabel/products/product-2">View Product</a>
                  </div>
                </div>

                <div class="novaworks-quick-act">


                  <a title="Add to Wishlist" class="act-wishlist act-add-to-wishlist" href="/account/login"><i class="fa fa-heart-o"></i></a>



                  <a href="javascript:;" title="Add to cart" onclick="ajaxcart(17860167235)" class="ajaxcart_simple button-ajax-cart-id-17860167235"><i class="fa fa-shopping-cart"></i></a>
                </div>

              </div>

            </div>



          </div>
        </div>



        <div class="col-left sidebar col-sm-3 col-sm-pull-9">
          <div class="col-left sidebar">

            <div class="block block-custom-html">
              <div id="custom-html" class="block-title">
                <strong><span>SABEL</span></strong>
              </div>
              <div class="block-content">
                <p>SABEL is the new Online Boutique launched by Chador in the Summer of 2016. Sabel is a casual ready to wear line designed for every day comfort. The SS16 Collection consists of comfortable, loose, and light maxi beach dresses and kaftans that flatters a range of body types.
                  The classic design of the various styles subtly adapts to each wearer's individual aesthetic from the conservative dresser to the beach goer.
                  Sabel dresses are meticulously made with precision tailoring.
                  All garments are %100 Linen</p>
                </div>
              </div>

              <div class="block">
                <div class="block-title">
                  <strong><span>Shop By Color</span></strong>
                </div>
                <div class="block-content clear-wrap">
                  <ul id="color-filter" class="filter-list">

                    <li>

                      <input name="green" class="hidden-class coll-filter" id="hidden-green" type="radio" value="green" />
                      <label for="hidden-green"  title="">
                        <img src="//cdn.shopify.com/s/files/1/1082/9152/t/5/assets/color-1.png?15477611418652202961" alt="" />
                      </label>
                    </li>

                    <li>

                      <input name="brick" class="hidden-class coll-filter" id="hidden-brick" type="radio" value="brick" />
                      <label for="hidden-brick"  title="">
                        <img src="//cdn.shopify.com/s/files/1/1082/9152/t/5/assets/color-2.png?15477611418652202961" alt="" />
                      </label>
                    </li>

                    <li>

                      <input name="powder-blue" class="hidden-class coll-filter" id="hidden-powder-blue" type="radio" value="powder-blue" />
                      <label for="hidden-powder-blue"  title="">
                        <img src="//cdn.shopify.com/s/files/1/1082/9152/t/5/assets/color-3.png?15477611418652202961" alt="" />
                      </label>
                    </li>

                    <li>

                      <input name="grass-chambre" class="hidden-class coll-filter" id="hidden-grass-chambre" type="radio" value="grass-chambre" />
                      <label for="hidden-grass-chambre"  title="">
                        <img src="//cdn.shopify.com/s/files/1/1082/9152/t/5/assets/color-4.png?15477611418652202961" alt="" />
                      </label>
                    </li>

                    <li>

                      <input name="navy" class="hidden-class coll-filter" id="hidden-navy" type="radio" value="navy" />
                      <label for="hidden-navy"  title="">
                        <img src="//cdn.shopify.com/s/files/1/1082/9152/t/5/assets/color-6.png?15477611418652202961" alt="" />
                      </label>
                    </li>

                    <li>

                      <input name="ice" class="hidden-class coll-filter" id="hidden-ice" type="radio" value="ice" />
                      <label for="hidden-ice"  title="">
                        <img src="//cdn.shopify.com/s/files/1/1082/9152/t/5/assets/color-7.png?15477611418652202961" alt="" />
                      </label>
                    </li>

                    <li>

                      <input name="gray-pinstripes" class="hidden-class coll-filter" id="hidden-gray-pinstripes" type="radio" value="gray-pinstripes" />
                      <label for="hidden-gray-pinstripes"  title="">
                        <img src="//cdn.shopify.com/s/files/1/1082/9152/t/5/assets/color-8.png?15477611418652202961" alt="" />
                      </label>
                    </li>

                    <li>

                      <input name="white" class="hidden-class coll-filter" id="hidden-white" type="radio" value="white" />
                      <label for="hidden-white"  title="">
                        <img src="//cdn.shopify.com/s/files/1/1082/9152/t/5/assets/color-9.png?15477611418652202961" alt="" />
                      </label>
                    </li>

                    <li>

                      <input name="navy-pinstripes" class="hidden-class coll-filter" id="hidden-navy-pinstripes" type="radio" value="navy-pinstripes" />
                      <label for="hidden-navy-pinstripes"  title="">
                        <img src="//cdn.shopify.com/s/files/1/1082/9152/t/5/assets/color-10.png?15477611418652202961" alt="" />
                      </label>
                    </li>


                  </ul>
                </div>
              </div>

              <div class="images-block"><img src="//cdn.shopify.com/s/files/1/1082/9152/t/5/assets/sidebar_staticblock.jpg?15477611418652202961" alt=""></div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <script>
  Shopify.queryParams = {};
  if (location.search.length) {
    for (var aKeyValue, i = 0, aCouples = location.search.substr(1).split('&'); i < aCouples.length; i++) {
      aKeyValue = aCouples[i].split('=');
      if (aKeyValue.length > 1) {
        Shopify.queryParams[decodeURIComponent(aKeyValue[0])] = decodeURIComponent(aKeyValue[1]);
      }
    }
  }
  var collFilters = jQuery('.coll-filter');
  collFilters.change(function() {
    var newTags = [];
    var newURL = '';
    delete Shopify.queryParams.page;
    collFilters.each(function() {
      if (jQuery(this).val() && jQuery(this).is(':checked')) {
        newTags.push(jQuery(this).val());
      }
    });

    newURL = '/collections/' + 'sabel';
    if (newTags.length) {
      newURL += '/' + newTags.join('+');
    }
    var search = jQuery.param(Shopify.queryParams);
    if (search.length) {
      newURL += '?' + search;
    }
    location.href = newURL;

  });
  jQuery('.sort-link').click(function(e){
    e.preventDefault();
    Shopify.queryParams.sort_by = jQuery(this).attr('href');
    location.search = jQuery.param(Shopify.queryParams).replace(/\+/g, '%20');
  });
</script>

<!-- Begin footer -->
<div id="footer-bg" class="footer-bg">
  <div id="footer">
    <div id="footer_a">
      <div class="container">
        <div class="row">
          <div class="footer-top">
            <div class="logo-ft">
              <img src="//cdn.shopify.com/s/files/1/1082/9152/t/5/assets/logo-ft.png?15477611418652202961" alt="" />
            </div>
            <p class="text-center"></p>
            <ul class="icon">

              <li><a href="#"><i class="fa fa-facebook"></i></a></li>


              <li><a href="#"><i class="fa fa-twitter"></i></a></li>


              <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>


              <li><a href="#chador"><i class="fa fa-instagram"></i></a></li>


              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>

            </ul>
          </div>

        </div>
      </div>
    </div>
    <div id="footer_c">
      <div class="container">
        <!-- Information -->
        <div class="row">
          <div class="col-md-3 col-sm-3">
            <div class="widget-heading clearfix">
              <h3>
                <span>ABOUT CHADOR</span>
                <span class="line-ft"></span>
              </h3>
            </div>
            <div class="widget-text">
              <ul>


              </ul>
            </div>

          </div>
          <div class="col-md-3 col-sm-3">
            <div class="widget-heading clearfix">
              <h3>
                <span>CONTACT US</span>
                <span class="line-ft"></span>
              </h3>
            </div>
            <div class="widget-text">
              <ul>


              </ul>
            </div>

          </div>
          <div class="col-md-3 col-sm-3">
            <div class="widget-heading clearfix">
              <h3>
                <span>SITE MAP</span>
                <span class="line-ft"></span>
              </h3>
            </div>
            <div class="widget-text">
              <ul>


                <li><a href="/search" title="">Search</a></li>

                <li><a href="/pages/about-us" title="">About Us</a></li>

              </ul>
            </div>

          </div>
          <div class="col-md-3 col-sm-3">
            <div class="widget-heading clearfix">
              <h3>
                <span>OUR LOCATION</span>
                <span class="line-ft"></span>
              </h3>
            </div>
            <div class="widget-text">
              <p>Chador</p><p>P.O. Box 8533</p><p>Riyadh 11492</p><p>Saudi Arabia</p>
            </div>
          </div>
        </div>
        <!-- End Information -->
      </div>
    </div>
    <div id="footer_d">
      <div class="container copyright-footer">
        <div class="footer">
          <div class="row">
            <div class="footer-copyright-left col-md-7 col-sm-7">
              <address>&copy; 2016 Chador &nbsp;|&nbsp <a href="/pages/terms-conditions">Terms & Conditions</a> &nbsp;|&nbsp <a href="/pages/return-policy">Return Policy</a></address>
            </div>
            <div class="footer-copyright-right col-md-5 col-sm-5">
              <div class="paypal-logo">






              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- end footer_d -->
  </div><!-- end footer -->
</div><!-- end footer-bg -->

<!-- End footer -->

@endSection('content')
