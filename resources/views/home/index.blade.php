@extends('layouts.app')
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="slider-area an-1 hm-1">
        <!-- slider -->
        <div class="bend niceties preview-2">
            <div id="ensign-nivoslider" class="slides">
                <img src="{{asset('themes_template/img/slider/home-1/slider1-1.jpg')}}" alt="" title="#slider-direction-1"  />
                <img src="{{asset('themes_template/img/slider/home-1/slider1-2.jpg')}}" alt="" title="#slider-direction-2"  />
            </div>
            <!-- direction 1 -->
            <div id="slider-direction-1" class="t-cn slider-direction">
                <div class="slider-progress"></div>
                <div class="slider-content t-cn s-tb slider-1">
                    <div class="title-container s-tb-c title-compress">
                        <h2 class="title1">minimal bags</h2>
                        <h3 class="title2" >collection</h3>
                        <h4 class="title2" >Simple is the best.</h4>
                        <a class="btn-title" href="">View collection</a>
                    </div>
                </div>
            </div>
            <!-- direction 2 -->
            <div id="slider-direction-2" class="slider-direction">
                <div class="slider-progress"></div>
                <div class="slider-content t-lfl s-tb slider-2 lft-pr">
                    <div class="title-container s-tb-c">
                        <h2 class="title1">minimal bags</h2>
                        <h3 class="title2" >collection</h3>
                        <h4 class="title2" >Simple is the best.</h4>
                        <a class="btn-title" href="">View collection</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider end-->
    </div>
    <!-- end home slider -->
    <!-- product section start -->
    <div class="our-product-area">
        <div class="container">
            <!-- area title start -->
            <div class="area-title">
                <h2>Our products</h2>
            </div>
            <!-- area title end -->
            <!-- our-product area start -->
            <div class="row">
                <div class="col-md-12">
                    <div class="features-tab">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li role="presentation" class="active"><a href="#home" data-toggle="tab">Best Selling</a></li>
                            <li role="presentation"><a href="#profile" data-toggle="tab">Random Products</a></li>
                        </ul>
                        <!-- Tab pans -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                <div class="row">
                                    <div class="features-curosel">
                                        <div class="col-lg-12 col-md-12">
                                            <!-- single-product start -->
                                            <div class="single-product first-sale">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="primary-image" src="{{asset('themes_template/img/products/product-1.jpg')}}" alt="" />
                                                        <img class="secondary-image" src="{{asset('themes_template/img/products/product-2.jpg')}}" alt="" />
                                                    </a>
                                                    <div class="action-zoom">
                                                        <div class="add-to-cart">
                                                            <a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <div class="action-buttons">
                                                            <div class="add-to-links">
                                                                <div class="add-to-wishlist">
                                                                    <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                                </div>
                                                                <div class="compare-button">
                                                                    <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="quickviewbtn">
                                                                <a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="new-price">$222.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
                                                    <p>Nunc facilisis sagittis ullamcorper...</p>
                                                </div>
                                            </div>
                                            <!-- single-product end -->
                                            <!-- single-product start -->
                                            <div class="single-product">
                                                <span class="sale-text">Sale</span>
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="primary-image" src="{{asset('themes_template/img/products/product-3.jpg')}}" alt="" />
                                                        <img class="secondary-image" src="{{asset('themes_template/img/products/product-4.jpg')}}" alt="" />
                                                    </a>
                                                    <div class="action-zoom">
                                                        <div class="add-to-cart">
                                                            <a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <div class="action-buttons">
                                                            <div class="add-to-links">
                                                                <div class="add-to-wishlist">
                                                                    <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                                </div>
                                                                <div class="compare-button">
                                                                    <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="quickviewbtn">
                                                                <a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="new-price">$240.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h2 class="product-name"><a href="#">Primis in faucibus</a></h2>
                                                    <p>Nunc facilisis sagittis ullamcorper...</p>
                                                </div>
                                            </div>
                                            <!-- single-product end -->
                                        </div>
                                        <!-- single-product end -->
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                <div class="row">
                                    <div class="features-curosel">
                                        <div class="col-lg-12 col-md-12">
                                            <!-- single-product start -->
                                            <div class="single-product first-sale">
                                                <span class="sale-text">Sale</span>
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="primary-image" src="{{asset('themes_template/img/products/product-11.jpg')}}" alt="" />
                                                        <img class="secondary-image" src="{{asset('themes_template/img/products/product-2.jpg')}}" alt="" />
                                                    </a>
                                                    <div class="action-zoom">
                                                        <div class="add-to-cart">
                                                            <a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <div class="action-buttons">
                                                            <div class="add-to-links">
                                                                <div class="add-to-wishlist">
                                                                    <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                                </div>
                                                                <div class="compare-button">
                                                                    <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="quickviewbtn">
                                                                <a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="new-price">$110.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h2 class="product-name"><a href="#">Pellentesque habitant</a></h2>
                                                    <p>Nunc facilisis sagittis ullamcorper...</p>
                                                </div>
                                            </div>
                                            <!-- single-product end -->
                                            <!-- single-product start -->
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="primary-image" src="{{asset('themes_template/img/products/product-11.jpg')}}" alt="" />
                                                        <img class="secondary-image" src="{{asset('themes_template/img/products/product-12.jpg')}}" alt="" />
                                                    </a>
                                                    <div class="action-zoom">
                                                        <div class="add-to-cart">
                                                            <a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <div class="action-buttons">
                                                            <div class="add-to-links">
                                                                <div class="add-to-wishlist">
                                                                    <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                                </div>
                                                                <div class="compare-button">
                                                                    <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="quickviewbtn">
                                                                <a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="new-price">$300.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h2 class="product-name"><a href="#">Donec non est</a></h2>
                                                    <p>Nunc facilisis sagittis ullamcorper...</p>
                                                </div>
                                            </div>
                                            <!-- single-product end -->
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <!-- single-product start -->
                                            <div class="single-product first-sale">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="primary-image" src="{{asset('themes_template/img/products/product-11.jpg')}}" alt="" />
                                                        <img class="secondary-image" src="{{asset('themes_template/img/products/product-12.jpg')}}" alt="" />
                                                    </a>
                                                    <div class="action-zoom">
                                                        <div class="add-to-cart">
                                                            <a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <div class="action-buttons">
                                                            <div class="add-to-links">
                                                                <div class="add-to-wishlist">
                                                                    <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                                </div>
                                                                <div class="compare-button">
                                                                    <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="quickviewbtn">
                                                                <a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="new-price">$200.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h2 class="product-name"><a href="#">Nunc facilisis</a></h2>
                                                    <p>Nunc facilisis sagittis ullamcorper...</p>
                                                </div>
                                            </div>
                                            <!-- single-product end -->
                                            <!-- single-product start -->
                                            <div class="single-product">
                                                <span class="sale-text">Sale</span>
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="primary-image" src="{{asset('themes_template/img/products/product-13.jpg')}}" alt="" />
                                                        <img class="secondary-image" src="{{asset('themes_template/img/products/product-2.jpg')}}" alt="" />
                                                    </a>
                                                    <div class="action-zoom">
                                                        <div class="add-to-cart">
                                                            <a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <div class="action-buttons">
                                                            <div class="add-to-links">
                                                                <div class="add-to-wishlist">
                                                                    <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                                </div>
                                                                <div class="compare-button">
                                                                    <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="quickviewbtn">
                                                                <a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="new-price">$250.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h2 class="product-name"><a href="#">Fusce aliquam</a></h2>
                                                    <p>Nunc facilisis sagittis ullamcorper...</p>
                                                </div>
                                            </div>
                                            <!-- single-product end -->
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <!-- single-product start -->
                                            <div class="single-product first-sale">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="primary-image" src="{{asset('themes_template/img/products/product-8.jpg')}}" alt="" />
                                                        <img class="secondary-image" src="{{asset('themes_template/img/products/product-9.jpg')}}" alt="" />
                                                    </a>
                                                    <div class="action-zoom">
                                                        <div class="add-to-cart">
                                                            <a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <div class="action-buttons">
                                                            <div class="add-to-links">
                                                                <div class="add-to-wishlist">
                                                                    <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                                </div>
                                                                <div class="compare-button">
                                                                    <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="quickviewbtn">
                                                                <a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="new-price">$370.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h2 class="product-name"><a href="#">Aliquam consequat</a></h2>
                                                    <p>Nunc facilisis sagittis ullamcorper...</p>
                                                </div>
                                            </div>
                                            <!-- single-product end -->
                                            <!-- single-product start -->
                                            <div class="single-product">
                                                <span class="sale-text">Sale</span>
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="primary-image" src="{{asset('themes_template/img/products/product-10.jpg')}}" alt="" />
                                                        <img class="secondary-image" src="{{asset('themes_template/img/products/product-12.jpg')}}" alt="" />
                                                    </a>
                                                    <div class="action-zoom">
                                                        <div class="add-to-cart">
                                                            <a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <div class="action-buttons">
                                                            <div class="add-to-links">
                                                                <div class="add-to-wishlist">
                                                                    <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                                </div>
                                                                <div class="compare-button">
                                                                    <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="quickviewbtn">
                                                                <a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="new-price">$170.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h2 class="product-name"><a href="#">Pleasure rationally</a></h2>
                                                    <p>Nunc facilisis sagittis ullamcorper...</p>
                                                </div>
                                            </div>
                                            <!-- single-product end -->
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <!-- single-product start -->
                                            <div class="single-product first-sale">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="primary-image" src="{{asset('themes_template/img/products/product-13.jpg')}}" alt="" />
                                                        <img class="secondary-image" src="{{asset('themes_template/img/products/product-1.jpg')}}" alt="" />
                                                    </a>
                                                    <div class="action-zoom">
                                                        <div class="add-to-cart">
                                                            <a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <div class="action-buttons">
                                                            <div class="add-to-links">
                                                                <div class="add-to-wishlist">
                                                                    <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                                </div>
                                                                <div class="compare-button">
                                                                    <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="quickviewbtn">
                                                                <a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="new-price">$450.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h2 class="product-name"><a href="#">Proin lectus ipsum</a></h2>
                                                    <p>Nunc facilisis sagittis ullamcorper...</p>
                                                </div>
                                            </div>
                                            <!-- single-product end -->
                                            <!-- single-product start -->
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="primary-image" src="{{asset('themes_template/img/products/product-2.jpg')}}" alt="" />
                                                        <img class="secondary-image" src="{{asset('themes_template/img/products/product-3.jpg')}}" alt="" />
                                                    </a>
                                                    <div class="action-zoom">
                                                        <div class="add-to-cart">
                                                            <a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <div class="action-buttons">
                                                            <div class="add-to-links">
                                                                <div class="add-to-wishlist">
                                                                    <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                                </div>
                                                                <div class="compare-button">
                                                                    <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="quickviewbtn">
                                                                <a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="new-price">$300.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h2 class="product-name"><a href="#">Consequences</a></h2>
                                                    <p>Nunc facilisis sagittis ullamcorper...</p>
                                                </div>
                                            </div>
                                            <!-- single-product end -->
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <!-- single-product start -->
                                            <div class="single-product first-sale">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="primary-image" src="{{asset('themes_template/img/products/product-4.jpg')}}" alt="" />
                                                        <img class="secondary-image" src="{{asset('themes_template/img/products/product-5.jpg')}}" alt="" />
                                                    </a>
                                                    <div class="action-zoom">
                                                        <div class="add-to-cart">
                                                            <a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <div class="action-buttons">
                                                            <div class="add-to-links">
                                                                <div class="add-to-wishlist">
                                                                    <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                                </div>
                                                                <div class="compare-button">
                                                                    <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="quickviewbtn">
                                                                <a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="new-price">$350.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h2 class="product-name"><a href="#">Quisque in arcu</a></h2>
                                                    <p>Nunc facilisis sagittis ullamcorper...</p>
                                                </div>
                                            </div>
                                            <!-- single-product end -->
                                            <!-- single-product start -->
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="primary-image" src="{{asset('themes_template/img/products/product-6.jpg')}}" alt="" />
                                                        <img class="secondary-image" src="{{asset('themes_template/img/products/product-7.jpg')}}" alt="" />
                                                    </a>
                                                    <div class="action-zoom">
                                                        <div class="add-to-cart">
                                                            <a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <div class="action-buttons">
                                                            <div class="add-to-links">
                                                                <div class="add-to-wishlist">
                                                                    <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                                </div>
                                                                <div class="compare-button">
                                                                    <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="quickviewbtn">
                                                                <a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="new-price">$250.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h2 class="product-name"><a href="#">Primis in faucibus</a></h2>
                                                    <p>Nunc facilisis sagittis ullamcorper...</p>
                                                </div>
                                            </div>
                                            <!-- single-product end -->
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <!-- single-product start -->
                                            <div class="single-product first-sale">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="primary-image" src="{{asset('themes_template/img/products/product-9.jpg')}}" alt="" />
                                                        <img class="secondary-image" src="{{asset('themes_template/img/products/product-10.jpg')}}" alt="" />
                                                    </a>
                                                    <div class="action-zoom">
                                                        <div class="add-to-cart">
                                                            <a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <div class="action-buttons">
                                                            <div class="add-to-links">
                                                                <div class="add-to-wishlist">
                                                                    <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                                </div>
                                                                <div class="compare-button">
                                                                    <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="quickviewbtn">
                                                                <a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="new-price">$180.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h2 class="product-name"><a href="#">Voluptas nulla</a></h2>
                                                    <p>Nunc facilisis sagittis ullamcorper...</p>
                                                </div>
                                            </div>
                                            <!-- single-product end -->
                                            <!-- single-product start -->
                                            <div class="single-product">
                                                <span class="sale-text">Sale</span>
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="primary-image" src="{{asset('themes_template/img/products/product-11.jpg')}}" alt="" />
                                                        <img class="secondary-image" src="{{asset('themes_template/img/products/product-12.jpg')}}" alt="" />
                                                    </a>
                                                    <div class="action-zoom">
                                                        <div class="add-to-cart">
                                                            <a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <div class="action-buttons">
                                                            <div class="add-to-links">
                                                                <div class="add-to-wishlist">
                                                                    <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                                </div>
                                                                <div class="compare-button">
                                                                    <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="quickviewbtn">
                                                                <a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="new-price">$310.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h2 class="product-name"><a href="#">Cras neque metus</a></h2>
                                                    <p>Nunc facilisis sagittis ullamcorper...</p>
                                                </div>
                                            </div>
                                            <!-- single-product end -->
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <!-- single-product start -->
                                            <div class="single-product first-sale">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="primary-image" src="{{asset('themes_template/img/products/product-5.jpg')}}" alt="" />
                                                        <img class="secondary-image" src="{{asset('themes_template/img/products/product-6.jpg')}}" alt="" />
                                                    </a>
                                                    <div class="action-zoom">
                                                        <div class="add-to-cart">
                                                            <a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <div class="action-buttons">
                                                            <div class="add-to-links">
                                                                <div class="add-to-wishlist">
                                                                    <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                                </div>
                                                                <div class="compare-button">
                                                                    <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="quickviewbtn">
                                                                <a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="new-price">$450.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h2 class="product-name"><a href="#">Occaecati cupiditate</a></h2>
                                                    <p>Nunc facilisis sagittis ullamcorper...</p>
                                                </div>
                                            </div>
                                            <!-- single-product end -->
                                            <!-- single-product start -->
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="primary-image" src="{{asset('themes_template/img/products/product-7.jpg')}}" alt="" />
                                                        <img class="secondary-image" src="{{asset('themes_template/img/products/product-8.jpg')}}" alt="" />
                                                    </a>
                                                    <div class="action-zoom">
                                                        <div class="add-to-cart">
                                                            <a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <div class="action-buttons">
                                                            <div class="add-to-links">
                                                                <div class="add-to-wishlist">
                                                                    <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                                </div>
                                                                <div class="compare-button">
                                                                    <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="quickviewbtn">
                                                                <a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="new-price">$178.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h2 class="product-name"><a href="#">Donec non est</a></h2>
                                                    <p>Nunc facilisis sagittis ullamcorper...</p>
                                                </div>
                                            </div>
                                            <!-- single-product end -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- our-product area end -->
        </div>
    </div>
    <!-- product section end -->
    <!-- banner-area start -->
    <div class="banner-area">
        <div class="container-fluid">
            <div class="row">
                <a href=""><img src="{{asset('themes_template/img/banner/banner-1.jpg')}}" alt="" /></a>
            </div>
        </div>
    </div>
    <!-- banner-area end -->
    <!-- product section start -->
    <div class="our-product-area new-product">
        <div class="container">
            <div class="area-title">
                <h2>Sản phẩm nổi bật</h2>
            </div>
            <!-- our-product area start -->
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="features-curosel">
                            @if(isset($productHot))
                                <!-- single-product start -->
                                @foreach($productHot as $hot)
                                        <div class="col-lg-12 col-md-12">
                                            <div class="single-product first-sale">
                                                <div class="product-img">
                                                    @if($hot->pro_number <1)
                                                        <span style="position: absolute; left: 40px; background: #e6193c; color: white; padding: 2px 6px; border-radius: 5px; font-size: 10px">Tạm hết hàng</span>
                                                    @endif
                                                    @if($hot->pro_sale > 0)
                                                        <span style="display: inline-block;position: absolute;right: 40px;font-size: 11px;color: #fff;font-weight: 600;background: #3fb846;border-radius: 2px;padding: 0 5px;height: 18px;">-{{$hot->pro_sale}}%</span>
                                                    @endif
                                                    <a href="{{route('get.detail.product', [$hot->pro_slug,$hot->id])}}">
                                                        <img class="primary-image" src="{{pare_url_file($hot->pro_avatar)}}" width="540px" height="600px"  alt="" />
                                                        <img class="secondary-image" src="{{pare_url_file($hot->pro_avatar)}}" width="540px" height="600px" alt="" />
                                                    </a>
                                                    <div class="action-zoom">
                                                        <div class="add-to-cart">
                                                            <a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <div class="action-buttons">
                                                            <div class="add-to-links">
                                                                <div class="add-to-wishlist">
                                                                    <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                                </div>
                                                                <div class="compare-button">
                                                                    <a href="{{route('add.shopping.cart',$hot->id)}}" title="Add to Cart"><i class="icon-bag"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="quickviewbtn">
                                                                <a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="new-price">{{number_format(($hot->pro_price-($hot->pro_price*$hot->pro_sale)/100))}} VNĐ</span>
                                                    </div>
{{--                                                    <div class="price-box">--}}
{{--                                                        <span class="new-price">{{number_format($hot->pro_price)}} VNĐ</span>--}}
{{--                                                    </div>--}}
                                                </div>
                                                <div class="product-content">
                                                    <h2 class="product-name"><a href="{{route('get.detail.product', [$hot->pro_slug,$hot->id])}}">{{$hot->pro_name}}</a></h2>
                                                    <p>{{$hot->pro_description}}</p>
                                                </div>
                                            </div>
                                        </div>
                                @endforeach
                                <!-- single-product end -->
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <!-- our-product area end -->
        </div>
    </div>
    <!-- product section end -->
    {{--gợi ý sản phẩm--}}
    @include('components.product_suggest')
    {{--    sp vừa xem--}}
    <div class="our-product-area new-product" id="viewed_product"></div>
    <!-- latestpost area start -->
    <div class="latest-post-area">
        <div class="container">
            <div class="area-title">
                <h2>Bài viết nổi bật</h2>
            </div>
            <div class="row">
                <div class="all-singlepost">
                    <!-- single latestpost start -->
                    @if(isset($articleNews))
                        @foreach($articleNews as $articleNew)
                            <div class="col-md-4 col-sm-4 col-xs-12" style="margin-bottom: 40px">
                                <div class="single-post">
                                    <div class="post-thumb">
                                        <a href="{{route('get.detail.article', [$articleNew->a_slug])}}">
                                            <img src="{{pare_url_file($articleNew->a_avatar)}}" width="370px" height="280px" alt="" />
                                        </a>
                                    </div>
                                    <div class="post-thumb-info">
                                        <div class="post-time">
                                            <a href="#">Beauty</a>
                                            <span>/</span>
                                            <span>Post by</span>
                                            <span>BootExperts</span>
                                        </div>
                                        <div class="postexcerpt">
                                            <p style="height: 40px" >{{$articleNew->a_name}}</p>
                                            <a href="{{route('get.detail.article', [$articleNew->a_slug])}}" class="read-more">Xem thêm</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif

                <!-- single latestpost end -->
                </div>
            </div>
        </div>
    </div>
    <!-- latestpost area end -->
    <!-- block category area start -->
    <div class="block-category">
        <div class="container">
            <div class="row">
                <!-- featured block start -->
                @if(isset($categoriesHome))
                    @foreach($categoriesHome as $cateHome)
                        <div class="col-md-4">
                            <!-- block title start -->
                            <div class="block-title">
                                <h2>{{$cateHome->c_name}}</h2>
                            </div>
                            <!-- block title end -->
                            <!-- block carousel start -->
                            @if(isset($cateHome->products))
                                <div class="block-carousel">
                                    @foreach($cateHome->products as $product)
                                        <div class="block-content">
                                                <!-- single block start -->
                                                <div class="single-block">
                                                    <div class="block-image pull-left">
                                                        <a href="{{route('get.detail.product', [$product->pro_slug,$product->id])}}"><img src="{{pare_url_file($product->pro_avatar)}}" width="170px" height="208px" alt="{{$product->pro_name}}" /></a>
                                                    </div>
                                                    <div class="category-info">
                                                        <h3 style=" margin: 0 0 5px"><a  href="{{route('get.detail.product', [$product->pro_slug,$product->id])}}">{{$product->pro_name}}</a></h3>
                                                        <p style=" margin: 0 0 5px;text-overflow: ellipsis;white-space: nowrap;overflow: hidden;">{{$product->pro_description}}</p>
                                                        <div style="margin: 0 0 12px;"class="cat-price">{{$product->pro_sale > 0 ? number_format(($product->pro_price-($product->pro_price*$product->pro_sale)/100)).' VNĐ' : number_format($product->pro_price).' VNĐ'}} <span class="old-price" style="color: #e6193c; ">{{$product->pro_sale > 0 ? number_format($product->pro_price) .'VNĐ' : ''}} </span></div>

                                                        <div class="cat-rating">
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single block end -->

                                            </div>
                                    @endforeach
                                </div>
                            @endif
                            <!-- block carousel end -->
                        </div>
                    @endforeach
                @endif

                <!-- featured block end -->
            </div>
        </div>
    </div>
    <!-- block category area end -->
@stop
@section('script')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(function () {
           // let urlroute = '{{route('post.product.view')}}';
            $(document).on('scroll',function () {
                checkScrool = false;
                if($(window).scrollTop() > 150 && checkScrool == false){
                    //console.log('scroll');
                    checkScrool = true;
                    let products = localStorage.getItem('products');
                    products =$.parseJSON(products)
                    //console.log(products);
                    if(products.length > 0){
                        $.ajax({
                            url : '{{route('post.product.view')}}',
                            method : "POST",
                            data : {id : products},
                            success : function (result) {
                               // console.log(result)
                                $('#viewed_product').html('').append(result.data);
                            }
                        });
                    }
                }
            })
        })
    </script>
@stop
