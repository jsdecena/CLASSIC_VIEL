<div class="row">
    <div class="col-md-6">
        <ul id="thumbnails" class="col-md-4 list-unstyled">
            <li>
                <a href="javascript: void(0)">
                    @if(isset($product->cover))
                    <img class="img-responsive img-thumbnail"
                         src="{{ $product->cover }}"
                         alt="{{ $product->name }}" />
                    @else
                    <img class="img-responsive img-thumbnail"
                         src="{{ asset("https://placehold.it/180x180") }}"
                         alt="{{ $product->name }}" />
                    @endif
                </a>
            </li>
            @if(isset($images) && !$images->isEmpty())
                @foreach($images as $image)
                <li>
                    <a href="javascript: void(0)">
                    <img class="img-responsive img-thumbnail"
                         src="{{ asset("storage/$image->src") }}"
                         alt="{{ $product->name }}" />
                    </a>
                </li>
                @endforeach
            @endif
        </ul>
        <figure class="text-center product-cover-wrap col-md-8">
            @if(isset($product->cover))
                <img id="main-image" class="product-cover img-responsive"
                     src="{{$product->cover}}?w=400"
                     data-zoom="{{$product->cover}}?w=1200">
            @else
                <img id="main-image" class="product-cover" src="https://placehold.it/300x300"
                     data-zoom="{{$product->cover}}?w=1200" alt="{{ $product->name }}">
            @endif
        </figure>
    </div>
    <div class="col-md-6">
        <div class="product-description">
            <h1>{{ $product->name }}
                <small>{{ config('cart.currency') }} {{ $product->price }}</small>
            </h1>
            <div class="description">{!! $product->description !!}</div>

                <hr>{!!  str_limit($product->description, 100, ' ...') !!}
            <hr>

            <div class="row">
                <div class="col-md-12">
                    @include('layouts.errors-and-messages')
                    <form action="{{ route('cart.store') }}" class="form-inline" method="post">
                        {{ csrf_field() }}
                        @if(isset($productAttributes) && !$productAttributes->isEmpty())
                            <div class="form-group" id="text" style="display:block">
                                <label for="productAttribute">Choose Combination</label> <br />
                                <select name="productAttribute" id="productAttribute" class="form-control select2">
                                    @foreach($productAttributes as $productAttribute)
                                        <option value="{{ $productAttribute->id }}">
                                            @foreach($productAttribute->attributesValues as $value)
                                                {{ $value->attribute->name }} : {{ ucwords($value->value) }}
                                            @endforeach
                                            @if(!is_null($productAttribute->price))
                                                ( {{ config('cart.currency_symbol') }} {{ $productAttribute->price }})
                                            @endif
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div id="text2" style="display:none">
                              <label for="productAttribute">Custome Size</label> <br />
                              <input type="number"
                               class="form-control"
                               name="LENGTH"
                               id="quantity"
                               placeholder="LENGTH"
                               value="{{ old('quantity') }}" />
                              <input type="number"
                                class="form-control"
                                name="BUST"
                                id="quantity"
                                placeholder="BUST"
                                value="{{ old('quantity') }}" /><br />
                              <input type="number"
                               class="form-control"
                               name="ARM"
                               id="quantity"
                               placeholder="ARM"
                               value="{{ old('quantity') }}" />
                              <input type="number"
                                class="form-control"
                                name="BOTTOM"
                                id="quantity"
                                placeholder="BOTTOM"
                                value="{{ old('quantity') }}" /><br />
                            </div>
                            Checkbox: <input type="checkbox" id="myCheck"  onclick="myFunction()"><br />
                            <hr>
                        @endif


                        <div class="form-group">
                            <input type="number"
                                   class="form-control"
                                   name="quantity"
                                   id="quantity"
                                   placeholder="Quantity"
                                   value="{{ old('quantity') }}" />
                            <input type="hidden" name="product" value="{{ $product->id }}" />
                        </div>
                        <button type="submit" class="btn btn-warning"><i class="fa fa-cart-plus"></i> Add to cart
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@section('js')
    <script type="text/javascript">
        $(document).ready(function () {
            var productPane = document.querySelector('.product-cover');
            var paneContainer = document.querySelector('.product-cover-wrap');

            new Drift(productPane, {
                paneContainer: paneContainer,
                inlinePane: false
            });
        });

        function myFunction() {
          var checkBox = document.getElementById("myCheck");
          var text = document.getElementById("text");
          var text2 = document.getElementById("text2");
          if (checkBox.checked == true){
              text.style.display = "none";
              text2.style.display = "block";
          } else {
             text.style.display = "block";
             text2.style.display = "none";
          }
      }
    </script>
@endsection
