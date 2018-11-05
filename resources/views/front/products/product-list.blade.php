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
                </div> -->
                <div class="direction">
<!--
                  <a class="sort-link" href="title-descending" title="Set Descending Direction" data-toggle="modal" data-target="#myModal">
                    <i class="fa fa-long-arrow-down"></i>
                  </a> -->

                </div>

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

                  <a class="product-image" href="#" title="Evander 1">
                    <div class="product-img-additional back">
                      <img src="{{$product->cover}}" alt="{{ $product->name }}" class="img-bordered img-responsive">
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
                    {{ $product->description }}
                    <a href="{{ route('front.get.product', str_slug($product->slug)) }}" title="Evander 1" class="link-learn">Learn More</a>
                  </div>
                </div>

                <div class="review-wrap">
                  <span class="shopify-product-reviews-badge" data-id="4799694787"></span>
                </div>
                <div class="price-box">



                  <p class="special-price"><span class="price"><span class=money>
                    {{ config('cart.currency') }}
                    §@if(!is_null($product->attributes->where('default', 1)->first()))
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
                    <a class="btn" href="{{ route('front.get.product', str_slug($product->slug)) }}">View Product</a>
                  </div>

                    <a data-toggle="modal" data-target="#order_modal_8" title="Show order" href="javascript: void(0)"><span>| Size Chart |</span></a>
                  <!-- <li class="product-links-item u-inline-block u-va-middle"><a href="#" class="product-links-item-link" data-popin-open data-popin-target="size">Size chart</a></li> -->

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
                <strong><span>CLASSIC VEIL</span></strong>
              </div>
              <div class="block-content">
                <p>Classic Veil, was launched in 1998
                    to breath creativity
                    and life into the traditional
                    abayas of the region ,
                    , weaving a modern sense of fashion
                    like never before,
                    while respecting local customs
                    and designs.
                    Finally... the Veil has come of age !</p>
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

              <div class="images-block"><img src="{{ asset('../img/sidebar_staticblock.jpg')}}" alt=""></div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>


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
<div class="modal fade" id="order_modal_8" tabindex="-1" role="dialog" aria-labelledby="MyOrders" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" role="document" style="width: 1400px;margin: auto;">
        <div class="modal-content" style="background-color:#F0F0F0;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>

            </div>
            <div class="modal-body" style="background-color:#F0F0F0;">
              <div class="row">
            <div class="col-sm-3">
              <br />
              <br />
              <br />
              <br />
              <br />
              <h4 class="modal-title" id="myModalLabel">Size calculator</h4>
              <hr />
              <p>Select your measurements using the dropdown lists below

              and our size calculator will recommend the best size for you<p>
              <ht>------------------------------------------------------</ht><br />
              <select name="bustSize" style="background-color:#F0F0F0;">
              <option value="0" disabled selected>BUST ↓</option>
              <option value="22.8">22.8 (CM)</option>
              <option value="26.7">26.7 (CM)</option>
              <option value="30.5">30.5 (CM)</option>
              <option value="35.5">35.5 (CM)</option>
            </select>
            <ht>------------------------------------------------------</ht><br />
            <select name="hipsSize" style="background-color:#F0F0F0;">
              <option value="0" disabled selected>HIPS ↓</option>
              <option value="25.5">25.5 (CM)</option>
              <option value="29.3">29.3 (CM)</option>
              <option value="33">33 (CM)</option>
              <option value="38">38 (CM)</option>
            </select>
            <ht>------------------------------------------------------</ht><br />
            <select name="armSize" style="background-color:#F0F0F0;">
              <option value="0" disabled selected>ARM ↓</option>
              <option value="22.8">22.8 (CM)</option>
              <option value="26.7">26.7 (CM)</option>
              <option value="30.5">30.5 (CM)</option>
              <option value="35.5">35.5 (CM)</option>
            </select>

            Your size is : <label class="result"></label>
          </div>
            <div class="col-sm-4">
            <table class="sizecharttable" summary="Women's Clothing Sizing Chart">
              <tbody>
              <tr>
              <td class="colHeader">  </td>
              </tr>
              <tr>
              <td> <img class="u-fit-h" src="{{ asset('../img/size-chart.png')}}" alt=""> </td>
              </tbody>
              </table>
          </div>
          <div class="col-sm-5">
            <br />
            <br />
            <br />
            <br />
            <br />
            <h4 class="modal-title" id="myModalLabel">Select your fit size :</h4>
            <br />
            <br />
            <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <th><strong>#</strong></th>
                <th><strong>S</strong></th>
                <th><strong>M</strong></th>
                <th><strong>L</strong></th>
                <th><strong>XL</strong></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>LENGTH</td>
                <td>152.5 CM</td>
                <td>152.5 CM</td>
                <td>152.5 CM</td>
                <td>152.5 CM</td>
                </tr>
              <tr>
                <td>BUST</td>
                <td>22.5 CM</td>
                <td>26.7 CM</td>
                <td>30.5 CM</td>
                <td>35.5 CM</td>
              </tr>
            <tr>
                <td>ARM</td>
                <td>17.5 CM</td>
                <td>20.3 CM</td>
                <td>22.5 CM</td>
                <td>28 CM</td>
              </tr>
            <tr>
                <td>BOTTOM</td>
                <td>17.5 CM</td>
                <td>20.3 CM</td>
                <td>22.5 CM</td>
                <td>28 CM</td>
              </tr>
            <tr>
                <td>SLEEVE</td>
                <td>71 CM</td>
                <td>71 CM</td>
                <td>71 CM</td>
                <td>71 CM</td>
              </tr>
            <tr>
                <td>HIPS</td>
                <td>25.5 CM</td>
                <td>29.3 CM</td>
                <td>33 CM</td>
                <td>38 CM</td>
              </tr>
            <tr>
                <td>SHOULDER</td>
                <td>35.6 CM</td>
                <td>38.1 CM</td>
                <td>40.5 CM</td>
                <td>43.2 CM</td>
              </tr>

            </tbody>
          </table>
        </div>
      </div>
    </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default"  data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.js">
    </script>
  <script>
    $(document).ready(function() {
      console.log("Hi");
    // this will run on every select value change. if you want it to only run for those specific selects, add the same class in all of them and change the selector to $('select.yourclass')
    $('select').on('change', function() {

    if ($('select[name=bustSize]').val() == 22.8 || $('select[name=hipsSize]').val() == 25.5 || $('select[name=armSize]').val() == 17.8){
      $('.result').text('S');
      } if ($('select[name=bustSize]').val() == 26.7 || $('select[name=hipsSize]').val() == 29.3 || $('select[name=armSize]').val() == 20.3) {
      $('.result').text('M');
    } if ($('select[name=bustSize]').val() == 30.5 || $('select[name=hipsSize]').val() == 33 || $('select[name=armSize]').val() == 22.5) {
      $('.result').text('L');
    }else if ($('select[name=bustSize]').val() == 35.5 || $('select[name=hipsSize]').val() == 38 || $('select[name=armSize]').val() == 28) {
      $('.result').text('XL');
    }
    });

  });

  </script>
