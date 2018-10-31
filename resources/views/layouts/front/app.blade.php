<!DOCTYPE html>
<html lang="{{Config::get('app.locale')}}">

<head>


    <!-- Favicons -->

    <link rel="shortcut icon" href="//cdn.shopify.com/s/files/1/1082/9152/t/5/assets/favicon.png?15477611418652202961" type="image/png"/>
    <!--[if lt IE 8]>
    <link rel="stylesheet" type="text/css" href="css/settings-ie8.css" media="all"/><![endif]-->
    <!--[if lt IE 9]>
    <script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->


    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Chador - Luxury Kaftans and Abayas"/>
    <meta property="og:description" content="{{config('app.description')}}"/>
    <meta property="og:url" content="{{config('app.url')}}"/>
    <meta property="og:site_name" content="Chador"/>
    <meta name="twitter:site" content="@Gwhoai">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Questrial:400%7CRosarivo:400%7CPetit+Formal+Script:400" media="all">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <meta name="description" content="Modern open-source e-commerce framework for free">
    <meta name="tags"
          content="modern, opensource, open-source, e-commerce, framework, free, laravel, php, php7, symfony, shop, shopping, responsive, fast, software, blade, cart, test driven, adminlte, storefront">
    <meta name="author" content="Jeff Simons Decena">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link href="{{ asset('css/plugin.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset('css/megamenu.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset('css/static-blocks.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset('css/chador.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{ asset('https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
    <script src="{{ asset('https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
    <![endif]-->
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">
    @yield('css')
    <meta property="og:url" content="{{ request()->url() }}"/>
@yield('og')
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
</head>
<body class="header-transparent cms-home-v2 cms-index white-nav">
<div id="nova-notification" class="ajax-notification">
    <div class="notification-content"></div>
    <a href="javascript:;" class="btn-remove">Close</a>
</div>
<div class="wrapper">
    <div class="page">
        <div id="header-container" class="header-container" data-sticky-class="not-dark">
            <!-- Top Header -->
            <div class="top-header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12 welcome-msg"></div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <!-- Header Currency -->
                            <div class="pull-right top-dropdown currency">
                                <p class="label">Currency:</p>
                                <div class="parent aux-currency">
                                    <a class="selected-currency" href="javascript:;">SAR</a>
                                    <ul class="currency" id="currency">
                                        <li><a class="currency-link currency-SAR current-currency"
                                               onclick="jQuery('[name=currencies]').val('SAR').change();"
                                               href="javascript:;"><span class="name">SAR</span></a></li>
                                        <li><a class="currency-link currency-INR"
                                               onclick="jQuery('[name=currencies]').val('INR').change();"
                                               href="javascript:;"><span class="name">INR</span></a></li>
                                        <li><a class="currency-link currency-GBP"
                                               onclick="jQuery('[name=currencies]').val('GBP').change();"
                                               href="javascript:;"><span class="name">GBP</span></a></li>
                                        <li><a class="currency-link currency-CAD"
                                               onclick="jQuery('[name=currencies]').val('CAD').change();"
                                               href="javascript:;"><span class="name">CAD</span></a></li>
                                        <li><a class="currency-link currency-USD"
                                               onclick="jQuery('[name=currencies]').val('USD').change();"
                                               href="javascript:;"><span class="name">USD</span></a></li>
                                        <li><a class="currency-link currency-AUD"
                                               onclick="jQuery('[name=currencies]').val('AUD').change();"
                                               href="javascript:;"><span class="name">AUD</span></a></li>
                                        <li><a class="currency-link currency-EUR"
                                               onclick="jQuery('[name=currencies]').val('EUR').change();"
                                               href="javascript:;"><span class="name">EUR</span></a></li>
                                        <li><a class="currency-link currency-JPY"
                                               onclick="jQuery('[name=currencies]').val('JPY').change();"
                                               href="javascript:;"><span class="name">JPY</span></a></li>
                                    </ul>
                                    <div class="hidden-class">
                                        <select class="currency-picker hidden-class" name="currencies"
                                                style="display: inline; width: auto; vertical-align: inherit;">
                                            <option value="SAR" selected="selected">SAR</option>
                                            <option value="INR">INR</option>
                                            <option value="GBP">GBP</option>
                                            <option value="CAD">CAD</option>
                                            <option value="USD">USD</option>
                                            <option value="AUD">AUD</option>
                                            <option value="EUR">EUR</option>
                                            <option value="JPY">JPY</option>
                                        </select>
                                    </div>
                                </div>
                                <i class="fa fa-angle-down"></i>
                            </div>
                            <script type="text/javascript">
                                function handleSelect(elm) {
                                    window.location = elm.value;
                                }
                            </script>

                            <!-- End Header Currency -->
                            <div class="pull-right top-dropdown header-links">
                                <p class="label">Languages</p>
                                <ul class="links">
                                    <li><a @if(session('locale')=='en') selected="{{Config::get('app.locale')}}"
                                           @endif href="{{route('lang.switch',['lang'=>'en'])}}">ENGLISH</a></li>
                                    <li><a @if(session('locale')=='ar') selected="selected"
                                           @endif href="{{route('lang.switch',['lang'=>'ar'])}}">ARABIC</a></li>
                                </ul>

                                <i class="fa fa-angle-down"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Header -->
            <div class="nav-container">
                <!-- Header -->
                <div class="logo-fade" id="header-section">
                    <div class="container nova-header">
                        <div class="row">
                            <div class="col-md-3 col-sm-3">
                                <!-- Header Logo -->
                                <div class="header-logo">
                                    <div class="logo-center clearfix" id="logo">
                                        <h1 class="logo">
                                            <a href="/">
                                                <img alt="Chador" src="/img/logo-alt1.png" />
                                            </a>
                                        </h1>
                                    </div>
                                </div>
                                <!-- End Header Logo -->
                            </div>
                            <!-- Start Header Top Menu -->
                            <div class="col-md-7 col-sm-7 col-xs-6">
                                <div id="nova-mobile-menu" class="visible-md visible-sm visible-xs"></div>
                                <!-- Header Top Menu -->
                                <div class="main-navigation hidden-md hidden-sm hidden-xs">
                                    <div class="header-topMenu">
                                        <div class="header-topMenu-inner">
                                            <!-- Mobile menu -->
                                            <div class="novaworks-mobile-navbar">
                                                <nav>
                                                    <ul id="mobile-menu">

                                                        @foreach($categories as $category)
                                                            <li class="level0 level-top parent-dropdown">
                                                                @if($category->children()->count() > 0)
                                                                    @include('layouts.front.category-sub', ['subs' => $category->children])
                                                                @else
                                                                    <a href="{{route('front.category.slug', $category->slug)}}"
                                                                       class="level-top">
                  <span>
                     {{$category->name}}
                  </span>
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </a>
                                                                @endif
                                                            </li>
                                                        @endforeach
                                                        @if(auth()->check())
                                                            <li class="level0 level-top ">
                                                                <a href="{{ route('accounts', ['tab' => 'profile']) }}"><span>{{ __('general.my_account') }}</span></a>
                                                            </li>
                                                            <li><a href="{{ route('logout') }}"><i
                                                                            class="fa fa-sign-out"></i> {{ __('general.logout') }}
                                                                </a></li>
                                                        @else
                                                            <li class="level0 level-top  parent">
                                                                <a href="{{ route('login') }}"><span>{{ __('general.login') }}</span></a>
                                                            </li>
                                                            <li class="level0 level-top  last">
                                                                <a href="{{ route('register') }}"><span>{{ __('general.register') }}</span></a>
                                                            </li>
                                                        @endif
                                                    </ul>
                                                </nav>
                                            </div>
                                            <!-- End Mobile menu -->
                                            <!-- Desktop menu -->
                                            <div class="novaworks-navigation">
                                                <div class="novaworks-main-menu">
                                                    <ul id="novaworks-nav" class="megamenu">
                                                        @foreach($categories as $category)
                                                            <li class="level0 level-top parent-dropdown">
                                                                @if($category->children()->count() > 0)
                                                                    @include('layouts.front.category-sub', ['subs' => $category->children])
                                                                @else
                                                                    <a href="{{route('front.category.slug', $category->slug)}}"
                                                                       class="level-top">
                  <span>
                    @if(session('locale')=='en')
                          {{$category->name}}
                      @else
                          {{$category->name_ar}}
                      @endif
                  </span>
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </a>
                                                                @endif
                                                            </li>
                                                        @endforeach
                                                        @if(auth()->check())
                                                            <li class="level0 level-top">
                                                                <a href="{{ route('accounts', ['tab' => 'profile']) }}"
                                                                   class="level-top">
                  <span>
                    {{ __('general.my_account') }}
                  </span>
                                                                </a>
                                                            </li>
                                                            <li class="level0 level-top parent-dropdown">
                                                                <a href="{{ route('logout') }}" class="level-top">
                <span>
                  {{ __('general.logout') }}
                </span>
                                                                    <i class="fa fa-angle-down"></i>
                                                                </a>
                                                            </li>
                                                        @else
                                                            <li class="level0 level-top">
                                                                <a href="{{ route('login') }}" class="level-top">
                <span>
                  {{ __('general.login') }}
                </span>
                                                                </a>
                                                            </li>
                                                            <li class="level0 level-top">
                                                                <a href="{{ route('register') }}" class="level-top">
                <span>
                  {{ __('general.register') }}
                </span>
                                                                </a>
                                                            </li>
                                                        @endif
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- End Desktop menu -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- End Header Top Menu -->
                            <div class="col-md-2 col-sm-2 col-xs-6 no-relative">
                                <!-- Top Search ============================================= -->
                                <div id="top-search">
                                    <a href="javascript;" id="top-search-trigger">
                                        <i class="fa fa-search"></i>
                                        <i class="fa fa-times"></i>
                                    </a>
                                    <form action="/search" method="GET" id="search_mini_form">
                                        <input id="search" type="text" placeholder="Type & Hit Enter.." name="q"
                                               value="" class="input-text" maxlength="128" autocomplete="off">
                                    </form>
                                </div>
                                <!-- End Top Search ============================================= -->
                                <div id="cart">
                                    <div class="parent shopping-bag-item">
                                        <a class="cart-contents" href="/cart"
                                           title="View contents of your shopping cart">
                                            <i class="fa fa-shopping-cart"></i>
                                            <span class="cart-count">{{ $cartCount }}</span>
                                        </a>
                                        <div class="shopping-bag">

                                            <div class="shopping-no-items">
                                                <a href="{{route('front.category.slug', $category->slug)}}"
                                                   class="level-top"></a>
                                                <p class="empty">You have no items in your shopping cart.</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- CLOSE .row -->
                    </div>
                    <!-- CLOSE .container -->
                </div>
                <!-- End Header -->
            </div>
        </div>
    </div>

    @yield('content')

    @include('layouts.front.footer')

    <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery-migrate-1.2.0.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/plugins.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/novaworks.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.themepunch.tools.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.themepunch.revolution.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.transit.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.megamenu.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/social-buttons.js') }}" type="text/javascript"></script>
    <script>
        window.shop_currency = "SAR";
    </script>
    <meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/10829152/digital_wallets/dialog">
    <script id="shopify-features" type="application/json">
        {"accessToken":"f877b81104bd45ba35355a0794582893","betas":[],"domain":"www.CLASSIC-VEIL.com.sa","shopId":10829152,"smart_payment_buttons_url":"https:\/\/cdn.shopifycloud.com\/payment-sheet\/assets\/latest\/spb.js"}
    </script>
    <script>var Shopify = Shopify || {};
        Shopify.shop = "chador-2.myshopify.com";
        Shopify.currency = {"active": "SAR"};
        Shopify.theme = {"name": "chador-custom-v1-1", "id": 100557635, "theme_store_id": null, "role": "main"};
        Shopify.theme.handle = "null";
        Shopify.theme.style = {"id": null, "handle": null};</script>
    <script id="__st">var __st = {
            "a": 10829152,
            "offset": -14400,
            "reqid": "28d278cf-f9a6-489b-b384-aa0badf9656e",
            "pageurl": "www.CLASSIC-VEIL.com.sa\/",
            "u": "1e7375b401f1",
            "p": "home"
        };</script>
    <script>window.ShopifyPaypalV4VisibilityTracking = true;</script>
    <script>window.Shopify = window.Shopify || {};
        window.Shopify.Checkout = window.Shopify.Checkout || {};
        window.Shopify.Checkout.apiHost = "chador-2.myshopify.com";</script>
    <script>window.ShopifyAnalytics = window.ShopifyAnalytics || {};
        window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
        window.ShopifyAnalytics.meta.currency = 'SAR';
        var meta = {"page": {"pageType": "home"}};
        for (var attr in meta) {
            window.ShopifyAnalytics.meta[attr] = meta[attr];
        }</script>
    <script>window.ShopifyAnalytics.merchantGoogleAnalytics = function () {

        };
    </script>
    <script class="analytics">(window.gaDevIds = window.gaDevIds || []).push('BwiEti');
        (function () {
            var customDocumentWrite = function (content) {
                var jquery = null;

                if (window.jQuery) {
                    jquery = window.jQuery;
                } else if (window.Checkout && window.Checkout.$) {
                    jquery = window.Checkout.$;
                }

                if (jquery) {
                    jquery('body').append(content);
                }
            };

            var trekkie = window.ShopifyAnalytics.lib = window.trekkie = window.trekkie || [];
            if (trekkie.integrations) {
                return;
            }
            trekkie.methods = [
                'identify',
                'page',
                'ready',
                'track',
                'trackForm',
                'trackLink'
            ];
            trekkie.factory = function (method) {
                return function () {
                    var args = Array.prototype.slice.call(arguments);
                    args.unshift(method);
                    trekkie.push(args);
                    return trekkie;
                };
            };
            for (var i = 0; i < trekkie.methods.length; i++) {
                var key = trekkie.methods[i];
                trekkie[key] = trekkie.factory(key);
            }
            trekkie.load = function (config) {
                trekkie.config = config;
                var script = document.createElement('script');
                script.type = 'text/javascript';
                script.onerror = function (e) {
                    (new Image()).src = '//v.shopify.com/internal_errors/track?error=trekkie_load';
                };
                script.async = true;
                script.src = 'https://cdn.shopify.com/s/javascripts/tricorder/trekkie.storefront.min.js?v=2017.09.05.1';
                var first = document.getElementsByTagName('script')[0];
                first.parentNode.insertBefore(script, first);
            };
            trekkie.load(
                {
                    "Trekkie": {
                        "appName": "storefront",
                        "development": false,
                        "defaultAttributes": {
                            "shopId": 10829152,
                            "isMerchantRequest": null,
                            "themeId": 100557635,
                            "themeCityHash": 12281845816261828272
                        }
                    },
                    "Performance": {
                        "navigationTimingApiMeasurementsEnabled": true,
                        "navigationTimingApiMeasurementsSampleRate": 1.0
                    },
                    "Google Analytics": {
                        "trackingId": "UA-51244229-8",
                        "domain": "auto",
                        "siteSpeedSampleRate": "10",
                        "enhancedEcommerce": true,
                        "doubleClick": true,
                        "includeSearch": true
                    },
                    "Session Attribution": {}
                }
            );

            var loaded = false;
            trekkie.ready(function () {
                if (loaded) return;
                loaded = true;

                window.ShopifyAnalytics.lib = window.trekkie;

                ga('require', 'linker');

                function addListener(element, type, callback) {
                    if (element.addEventListener) {
                        element.addEventListener(type, callback);
                    }
                    else if (element.attachEvent) {
                        element.attachEvent('on' + type, callback);
                    }
                }

                function decorate(event) {
                    event = event || window.event;
                    var target = event.target || event.srcElement;
                    if (target && (target.getAttribute('action') || target.getAttribute('href'))) {
                        ga(function (tracker) {
                            var linkerParam = tracker.get('linkerParam');
                            document.cookie = '_shopify_ga=' + linkerParam + '; ' + 'path=/';
                        });
                    }
                }

                addListener(window, 'load', function () {
                    for (var i = 0; i < document.forms.length; i++) {
                        var action = document.forms[i].getAttribute('action');
                        if (action && action.indexOf('/cart') >= 0) {
                            addListener(document.forms[i], 'submit', decorate);
                        }
                    }
                    for (var i = 0; i < document.links.length; i++) {
                        var href = document.links[i].getAttribute('href');
                        if (href && href.indexOf('/checkout') >= 0) {
                            addListener(document.links[i], 'click', decorate);
                        }
                    }
                });


                var originalDocumentWrite = document.write;
                document.write = customDocumentWrite;
                try {
                    window.ShopifyAnalytics.merchantGoogleAnalytics.call(this);
                } catch (error) {
                }
                ;
                document.write = originalDocumentWrite;


                window.ShopifyAnalytics.lib.page(
                    null,
                    {"pageType": "home"}
                );
            });


            var eventsListenerScript = document.createElement('script');
            eventsListenerScript.async = true;
            eventsListenerScript.src = "//cdn.shopify.com/s/assets/shop_events_listener-eb3a0956834d3ac2162627d302f61df5b8ad9d920784b944893d98de11d0dd7f.js";
            document.getElementsByTagName('head')[0].appendChild(eventsListenerScript);

        })();</script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-9325492-23"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', '{{ env('GOOGLE_ANALYTICS') }}');
    </script>
@yield('js')
</body>
</html>
