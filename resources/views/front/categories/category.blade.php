@extends('layouts.front.app')

@section('og')
    <meta property="og:type" content="category"/>
    <meta property="og:title" content="{{ $category->name }}"/>
    <meta property="og:description" content="{{ $category->description }}"/>
    @if(!is_null($category->cover))
        <meta property="og:image" content="{{ asset("storage/$category->cover") }}"/>
    @endif
@endsection

@section('content')
<div class="top-container">

  <div style="background-image: url('../img/SNktU7Rg.jpeg')" class="parallax-box parrallax-page-title alt-bg parallax-shop" data-stellar-background-ratio="0.4">
    <div class="parallax-title-content">
      <!-- <h1>SABEL - SS 2016</h1> -->
      <div class="breadcrumbs">
        <!-- <ul>
          <li class="home">
            <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="https://www.chador.com.sa" title="Chador" itemprop="url"><span itemprop="title">Home</span></a></span><span> &gt; </span>
          </li>
          <li><span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/collections/sabel" title="SABEL - SS 2016" itemprop="url"><span itemprop="title">SABEL - SS 2016</span></a></span></li>
        </ul> -->
      </div>
    </div>
  </div>
    <div class="container">
        <hr>


            <div class="row">
                @include('front.products.product-list', ['products' => $products])
            </div>

    </div>
@endsection
