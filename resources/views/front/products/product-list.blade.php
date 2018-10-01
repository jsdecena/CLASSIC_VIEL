@if(!empty($products) && !collect($products)->isEmpty())
<div class="main-container">
  <div class="novaworks-main-content">
    <div class="main container">
      <div class="row columns-layout">
        <div class="col-main col-sm-9 col-sm-push-3">
          <div class="category-products">
            <div class="toolbar">
              <div class="sorter">
                <!-- <div class="sort-by">
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

                </div> -->
                <p class="view-mode  hidden-xxs">
                  <a title="Grid" onclick="display('grid'); return false;" class="grid active">Grid</a>&nbsp;
                  <a title="List" onclick="display('list'); return false;" class="list">List</a>&nbsp;
                </p>
              </div>
            </div>

            <div id="products-viewmode" class="row products-grid">


              @foreach($products as $product)
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 item">
                <div class="item-product-image-box">

                  <a class="product-image" href="/collections/sabel/products/product-1" title="Evander 1">
                    <div class="product-img-additional back">
                      <img src="{{ asset("storage/$product->cover") }}" alt="{{ $product->name }}" class="img-bordered img-responsive">
                      <!-- <img src="//cdn.shopify.com/s/files/1/1082/9152/products/Look1_large.jpg?v=1458479083" alt="Evander 1"> -->
                    </div>
                  </a>
                  <div class="product-hover-box hidden-xs">

                    <div class="centrize Center">
                        <form action="{{ route('cart.store') }}" class="form-inline" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="quantity" value="1" />
                            <input type="hidden" name="product" value="{{ $product->id }}">
                            <button id="add-to-cart-btn" class="act-quickview-button" type="submit"  data-toggle="modal" data-target="#cart-modal"> <i class="fa fa-cart-plus"></i></button>
                        </form>

                    </div>
                    <div class="quick-view">
                      <a class="act-quickview-button" data-toggle="modal" data-target="#myModal_{{ $product->id }}"><i class="fa fa-cart-plus"></i></a>
                    </div>
                    <div class="quick-view">
                      <a class="act-quickview-button" href="{{ route('front.get.product', str_slug($product->slug)) }}"><i class="fa fa-search"></i></a>
                    </div>
                  </div>
                </div>
                <h3 class="product-name">
                  <a href="{{ route('front.get.product', str_slug($product->slug)) }}" title="Evander 1">{{$product->name}}</a>
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



                  <p class="special-price"><span class="price"><span class=money>
                    {{ config('cart.currency') }}
                    @if(!is_null($product->attributes->where('default', 1)->first()))
                        @if(!is_null($product->attributes->where('default', 1)->first()->sale_price))
                            {{ number_format($product->attributes->where('default', 1)->first()->sale_price, 2) }}
                            <p class="text text-danger">Sale!</p>
                        @else
                            {{ number_format($product->attributes->where('default', 1)->first()->price, 2) }}
                        @endif
                    @else
                        {{ number_format($product->price, 2) }}
                    @endif
                  </span></span></p>



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

              @endforeach


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

    <ul class="row text-center list-unstyled">
        @foreach($products as $product)
                    <!-- Modal -->
                    <div class="modal fade" id="myModal_{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                @include('layouts.front.product')
                            </div>
                        </div>
                    </div>
                </div>

        @endforeach
        @if($products instanceof \Illuminate\Contracts\Pagination\LengthAwarePaginator)
            <div class="row">
                <div class="col-md-12">
                    <div class="pull-left">{{ $products->links() }}</div>
                </div>
            </div>
        @endif
    </ul>
@else
    <p class="alert alert-warning">No products yet.</p>
@endif
