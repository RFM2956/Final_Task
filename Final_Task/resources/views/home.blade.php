@extends("layouts.master")

@section("title", 'Home')


@section("content")
<section class="hero-area hero-slider-4 ">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 offset-lg-3">
                <div class="sb-slick-slider" data-slick-setting='{
                                                                    "autoplay": true,
                                                                    "autoplaySpeed": 8000,
                                                                    "slidesToShow": 1,
                                                                    "dots":true
                                                                    }'>
                    @foreach($slides as $slide)
                    <div class="single-slide bg-image bg-overlay--dark" data-bg="{{ asset($slide->image_path)}}">
                        <div class="home-content text-center">
                            <div class="row justify-content-end">
                                <div class="col-lg-8">
                                    <h1 class="v2">{{$slide->title}}</h1>
                                    <h2>{{$slide->head}}</h2>
                                    <a href="{{route('client.shop')}}" class="btn btn--yellow">
                                        Shop Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
<!--=================================
        Home Features Section
    ===================================== -->

<!--=================================
        Home Category Gallery
    ===================================== -->
<section class="mt-4 section-margin">
    <h2 class="sr-only">Category Gallery Section</h2>
    <div class="container">
        <div class="category-gallery-block">
            @foreach($images as $image)
            <a href="#" class="single-block hr-large">
                <img src="{{ asset($image->img)}}" alt="">
            </a>
            @endforeach
        </div>
    </div>
</section>
<!--=================================
        Home Two Column Section
    ===================================== -->
<section class="section-margin">
    <h1 class="sr-only">Promotion Section</h1>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="home-left-side text-center text-lg-left">
                    <div class="single-block">
                        <h3 class="home-sidebar-title">
                            BEST SELLERS
                        </h3>
                        <div class="product-slider product-list-slider multiple-row sb-slick-slider home-4-left-sidebar" data-slick-setting='{
                                            "autoplay": true,
                                            "autoplaySpeed": 8000,
                                            "slidesToShow":1,
                                            "rows":4,
                                            "dots":true
                                        }' data-slick-responsive='[
                                            {"breakpoint":1200, "settings": {"slidesToShow": 1} },
                                            {"breakpoint":992, "settings": {"slidesToShow": 2, "rows":2} },
                                            {"breakpoint":768, "settings": {"slidesToShow": 2, "rows":2} },
                                            {"breakpoint":575, "settings": {"slidesToShow": 1} },
                                            {"breakpoint":490, "settings": {"slidesToShow": 1} }
                                        ]'>
                            <div class="single-slide">
                                <div class="product-card card-style-list">
                                    <div class="card-image">
                                        <img src="{{ asset('front/assets/image/products/product-1.jpg')}}" alt="">
                                    </div>
                                    <div class="product-card--body">
                                        <div class="product-header">
                                            <a href="#" class="author">
                                                Fpple
                                            </a>
                                            <h3><a href="{{route('client.shop.detail', '$product->id')}}">Get Through To Your
                                                    BOOK</a></h3>
                                        </div>
                                        <div class="price-block">
                                            <span class="price">£51.20</span>
                                            <del class="price-old">£51.20</del>
                                            <span class="price-discount">20%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="product-card card-style-list">
                                    <div class="card-image">
                                        <img src="{{ asset('front/assets/image/products/product-2.jpg')}}" alt="">
                                    </div>
                                    <div class="product-card--body">
                                        <div class="product-header">
                                            <a href="" class="author">
                                                Gpple
                                            </a>
                                            <h3><a href="{{route('client.shop.detail', '$product->id')}}">What Can You Do To Save Your
                                                    BOOK</a></h3>
                                        </div>
                                        <div class="price-block">
                                            <span class="price">£51.20</span>
                                            <del class="price-old">£51.20</del>
                                            <span class="price-discount">20%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="product-card card-style-list">
                                    <div class="card-image">
                                        <img src="{{ asset('front/assets/image/products/product-3.jpg')}}" alt="">
                                    </div>
                                    <div class="product-card--body">
                                        <div class="product-header">
                                            <a class="author">
                                                Hpple
                                            </a>
                                            <h3><a href="{{route('client.shop.detail', '$product->id')}}">From Destruction By Social
                                                    Media?</a></h3>
                                        </div>
                                        <div class="price-block">
                                            <span class="price">£51.20</span>
                                            <del class="price-old">£51.20</del>
                                            <span class="price-discount">20%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="product-card card-style-list">
                                    <div class="card-image">
                                        <img src="{{ asset('front/assets/image/products/product-4.jpg')}}" alt="">
                                    </div>
                                    <div class="product-card--body">
                                        <div class="product-header">
                                            <a href="#" class="author">
                                                Gpple
                                            </a>
                                            <h3><a href="{{route('client.shop.detail', '$product->id')}}">Find Out More About BOOK ?</a></h3>
                                        </div>
                                        <div class="price-block">
                                            <span class="price">£51.20</span>
                                            <del class="price-old">£51.20</del>
                                            <span class="price-discount">20%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="product-card card-style-list">
                                    <div class="card-image">
                                        <img src="{{ asset('front/assets/image/products/product-5.jpg')}}" alt="">
                                    </div>
                                    <div class="product-card--body">
                                        <div class="product-header">
                                            <a href="#" class="author">
                                                Dpple
                                            </a>
                                            <h3><a href="{{route('client.shop.detail', '$product->id')}}">Controversial BOOK
                                                    Social Media?</a></h3>
                                        </div>
                                        <div class="price-block">
                                            <span class="price">£51.20</span>
                                            <del class="price-old">£51.20</del>
                                            <span class="price-discount">20%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="product-card card-style-list">
                                    <div class="card-image">
                                        <img src="{{ asset('front/assets/image/products/product-6.jpg')}}" alt="">
                                    </div>
                                    <div class="product-card--body">
                                        <div class="product-header">
                                            <a href="" class="author">
                                                Cpple
                                            </a>
                                            <h3><a href="{{route('client.shop.detail', '$product->id')}}">Lightweight
                                                    Portable Headphone</a></h3>
                                        </div>
                                        <div class="price-block">
                                            <span class="price">£51.20</span>
                                            <del class="price-old">£51.20</del>
                                            <span class="price-discount">20%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="product-card card-style-list">
                                    <div class="card-image">
                                        <img src="{{ asset('front/assets/image/products/product-7.jpg')}}" alt="">
                                    </div>
                                    <div class="product-card--body">
                                        <div class="product-header">
                                            <a href="" class="author">
                                                Apple
                                            </a>
                                            <h3><a href="{{route('client.shop.detail', '$product->id')}}">Ways To Have More
                                                    BOOK</a></h3>
                                        </div>
                                        <div class="price-block">
                                            <span class="price">£51.20</span>
                                            <del class="price-old">£51.20</del>
                                            <span class="price-discount">20%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="product-card card-style-list">
                                    <div class="card-image">
                                        <img src="{{ asset('front/assets/image/products/product-8.jpg')}}" alt="">
                                    </div>
                                    <div class="product-card--body">
                                        <div class="product-header">
                                            <a href="" class="author">
                                                Xpple
                                            </a>
                                            <h3><a href="{{route('client.shop.detail', '$product->id')}}">Ways To Have More
                                                    BOOK</a></h3>
                                        </div>
                                        <div class="price-block">
                                            <span class="price">£51.20</span>
                                            <del class="price-old">£51.20</del>
                                            <span class="price-discount">20%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="product-card card-style-list">
                                    <div class="card-image">
                                        <img src="{{ asset('front/assets/image/products/product-9.jpg')}}" alt="">
                                    </div>
                                    <div class="product-card--body">
                                        <div class="product-header">
                                            <a href="" class="author">
                                                Tpple
                                            </a>
                                            <h3><a href="{{route('client.shop.detail', '$product->id')}}">10 Minutes, I'll Give You
                                                    The Truth</a></h3>
                                        </div>
                                        <div class="price-block">
                                            <span class="price">£51.20</span>
                                            <del class="price-old">£51.20</del>
                                            <span class="price-discount">20%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="product-card card-style-list">
                                    <div class="card-image">
                                        <img src="{{ asset('front/assets/image/products/product-10.jpg')}}" alt="">
                                    </div>
                                    <div class="product-card--body">
                                        <div class="product-header">
                                            <a href="" class="author">
                                                Fpple
                                            </a>
                                            <h3><a href="{{route('client.shop.detail', '$product->id')}}">What Can You Do To Save Your
                                                    BOOK</a></h3>
                                        </div>
                                        <div class="price-block">
                                            <span class="price">£51.20</span>
                                            <del class="price-old">£51.20</del>
                                            <span class="price-discount">20%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="product-card card-style-list">
                                    <div class="card-image">
                                        <img src="{{ asset('front/assets/image/products/product-9.jpg')}}" alt="">
                                    </div>
                                    <div class="product-card--body">
                                        <div class="product-header">
                                            <a href="" class="author">
                                                Tpple
                                            </a>
                                            <h3><a href="{{route('client.shop.detail', '$product->id')}}">10 Minutes, I'll Give You
                                                    The Truth</a></h3>
                                        </div>
                                        <div class="price-block">
                                            <span class="price">£51.20</span>
                                            <del class="price-old">£51.20</del>
                                            <span class="price-discount">20%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="product-card card-style-list">
                                    <div class="card-image">
                                        <img src="{{ asset('front/assets/image/products/product-10.jpg')}}" alt="">
                                    </div>
                                    <div class="product-card--body">
                                        <div class="product-header">
                                            <a href="" class="author">
                                                Fpple
                                            </a>
                                            <h3><a href="{{route('client.shop.detail', '$product->id')}}">What Can You Do To Save Your
                                                    BOOK</a></h3>
                                        </div>
                                        <div class="price-block">
                                            <span class="price">£51.20</span>
                                            <del class="price-old">£51.20</del>
                                            <span class="price-discount">20%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
            <div class="col-lg-8">
                <div class="home-right-side">
                    <div class="single-block">
                        <div class="sb-custom-tab text-lg-left text-center">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="shop-tab" data-toggle="tab" href="#shop" role="tab" aria-controls="shop" aria-selected="true">
                                        Featured Products
                                    </a>
                                    <span class="arrow-icon"></span>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="men-tab" data-toggle="tab" href="#men" role="tab" aria-controls="men" aria-selected="true">
                                        New Arrivals
                                    </a>
                                    <span class="arrow-icon"></span>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="woman-tab" data-toggle="tab" href="#woman" role="tab" aria-controls="woman" aria-selected="false">
                                        Most view products
                                    </a>
                                    <span class="arrow-icon"></span>
                                </li>
                            </ul>
                            <div class="tab-content space-db--30" id="myTabContent">
                                <div class="tab-pane show active" id="shop" role="tabpanel" aria-labelledby="shop-tab">
                                    <div class="product-slider multiple-row slider-border-multiple-row  sb-slick-slider" data-slick-setting='{
                        "autoplay": true,
                        "autoplaySpeed": 8000,
                        "slidesToShow": 3,
                        "rows":2,
                        "dots":true
                    }' data-slick-responsive='[
                        {"breakpoint":992, "settings": {"slidesToShow": 3} },
                        {"breakpoint":768, "settings": {"slidesToShow": 2} },
                        {"breakpoint":480, "settings": {"slidesToShow": 1} },
                        {"breakpoint":320, "settings": {"slidesToShow": 1} }
                    ]'>

                                        @foreach($productimgs as $image)
                                        <div class="single-slide">
                                            <div class="product-card">
                                                <div class="product-header">
                                                    <a href="" class="author">
                                                        {{$image->author}}
                                                    </a>
                                                    <h3><a href="{{route('client.shop.detail', $image->id)}}">{{$image->title}}</a></h3>
                                                </div>
                                                <div class="product-card--body">
                                                    <div class="card-image">
                                                        <img src="{{ asset($image->img)}}" alt="">
                                                        <div class="hover-contents">
                                                            <a href="{{route('client.shop.detail', $image->id)}}" class="hover-image">
                                                                <img src="{{ asset($image->img)}}" alt="">
                                                            </a>
                                                            <div class="hover-btns">
                                                                <a href="{{ route('client.add', $image->id)}}" class="single-btn">
                                                                    <i class="fas fa-shopping-basket"></i>
                                                                </a>
                                                                <a href="#" data-toggle="modal" data-target="#quickModal" class="single-btn">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="price-block">
                                                        <span class="price">₼{{$image->price}}</span>
                                                        <span class="price-discount">{{$image->percent}}%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                </div>
                                <div class="tab-pane" id="men" role="tabpanel" aria-labelledby="men-tab">
                                    <div class="product-slider multiple-row slider-border-multiple-row  sb-slick-slider" data-slick-setting='{
                                    "autoplay": true,
                                    "autoplaySpeed": 8000,
                                    "slidesToShow": 3,
                                    "rows":2,
                                    "dots":true
                                    }' data-slick-responsive='[
                            {"breakpoint":992, "settings": {"slidesToShow": 3} },
                            {"breakpoint":768, "settings": {"slidesToShow": 2} },
                            {"breakpoint":480, "settings": {"slidesToShow": 1} },
                            {"breakpoint":320, "settings": {"slidesToShow": 1} }
                        ]'>

                                    </div>
                                </div>
                                <div class="tab-pane" id="woman" role="tabpanel" aria-labelledby="woman-tab">
                                    <div class="product-slider multiple-row slider-border-multiple-row  sb-slick-slider" data-slick-setting='{
                                    "autoplay": true,
                                    "autoplaySpeed": 8000,
                                    "slidesToShow": 3,
                                    "rows":2,
                                    "dots":true
                                }' data-slick-responsive='[
                                        {"breakpoint":992, "settings": {"slidesToShow": 3} },
                                        {"breakpoint":768, "settings": {"slidesToShow": 2} },
                                        {"breakpoint":480, "settings": {"slidesToShow": 1} },
                                        {"breakpoint":320, "settings": {"slidesToShow": 1} }
                                    ]'>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</section>
<!-- Modal -->
<div class="modal fade modal-quick-view" id="quickModal" tabindex="-1" role="dialog" aria-labelledby="quickModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close modal-close-btn ml-auto" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="product-details-modal">
                <div class="row">
                    <div class="col-lg-5">
                        <!-- Product Details Slider Big Image-->
                        <div class="product-details-slider sb-slick-slider arrow-type-two" data-slick-setting='{
              "slidesToShow": 1,
              "arrows": false,
              "fade": true,
              "draggable": false,
              "swipe": false,
              "asNavFor": ".product-slider-nav"
              }'>
                            <div class="single-slide">
                                <img src="{{ asset('front/assets/image/products/product-details-1.jpg')}}" alt="">
                            </div>
                            <div class="single-slide">
                                <img src="{{ asset('front/assets/image/products/product-details-2.jpg')}}" alt="">
                            </div>
                            <div class="single-slide">
                                <img src="{{ asset('front/assets/image/products/product-details-3.jpg')}}" alt="">
                            </div>
                            <div class="single-slide">
                                <img src="{{ asset('front/assets/image/products/product-details-4.jpg')}}" alt="">
                            </div>
                            <div class="single-slide">
                                <img src="{{ asset('front/assets/image/products/product-details-5.jpg')}}" alt="">
                            </div>
                        </div>
                        <!-- Product Details Slider Nav -->
                        <div class="mt--30 product-slider-nav sb-slick-slider arrow-type-two" data-slick-setting='{
            "infinite":true,
              "autoplay": true,
              "autoplaySpeed": 8000,
              "slidesToShow": 4,
              "arrows": true,
              "prevArrow":{"buttonClass": "slick-prev","iconClass":"fa fa-chevron-left"},
              "nextArrow":{"buttonClass": "slick-next","iconClass":"fa fa-chevron-right"},
              "asNavFor": ".product-details-slider",
              "focusOnSelect": true
              }'>
                            <!-- <div class="single-slide">
                                <img src="{{ asset('front/assets/image/products/product-details-1.jpg')}}" alt="">
                            </div>
                            <div class="single-slide">
                                <img src="{{ asset('front/assets/image/products/product-details-2.jpg')}}" alt="">
                            </div>
                            <div class="single-slide">
                                <img src="{{ asset('front/assets/image/products/product-details-3.jpg')}}" alt="">
                            </div>
                            <div class="single-slide">
                                <img src="{{ asset('front/assets/image/products/product-details-4.jpg')}}" alt="">
                            </div>
                            <div class="single-slide">
                                <img src="{{ asset('front/assets/image/products/product-details-5.jpg')}}" alt="">
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-7 mt--30 mt-lg--30">
                        <div class="product-details-info pl-lg--30 ">
                            <p class="tag-block">Tags: <a href="#">Movado</a>, <a href="#">Omega</a></p>
                            <h3 class="product-title">Beats EP Wired On-Ear Headphone-Black</h3>
                            <ul class="list-unstyled">
                                <!-- <li>Ex Tax: <span class="list-value"> £60.24</span></li>
                                <li>Brands: <a href="#" class="list-value font-weight-bold"> Canon</a></li>
                                <li>Product Code: <span class="list-value"> model1</span></li> -->
                                <li>Reward Points: <span class="list-value"> 200</span></li>
                                <li>Availability: <span class="list-value"> In Stock</span></li>
                            </ul>
                            <div class="price-block">
                                <span class="price-new">£73.79</span>
                                <del class="price-old">£91.86</del>
                            </div>
                            <div class="rating-widget">
                                <div class="rating-block">
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star "></span>
                                </div>
                                <div class="review-widget">
                                    <a href="">(1 Reviews)</a> <span>|</span>
                                    <a href="">Write a review</a>
                                </div>
                            </div>
                            <article class="product-details-article">
                                <h4 class="sr-only">Product Summery</h4>
                                <p>Long printed dress with thin adjustable straps. V-neckline and wiring under
                                    the Dust with ruffles
                                    at the bottom
                                    of the
                                    dress.</p>
                            </article>
                            <div class="add-to-cart-row">
                                <div class="count-input-block">
                                    <span class="widget-label">Qty</span>
                                    <input type="number" class="form-control text-center" value="1">
                                </div>
                                <div class="add-cart-btn">
                                    <a href="" class="btn btn-outlined--primary"><span class="plus-icon">+</span>Add to Cart</a>
                                </div>
                            </div>
                            <div class="compare-wishlist-row">
                                <a href="" class="add-link"><i class="fas fa-heart"></i>Add to Wish List</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="widget-social-share">
                    <span class="widget-label">Share:</span>
                    <div class="modal-social-share">
                        <a href="https://www.facebook.com/" class="single-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/" class="single-icon"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.youtube.com/" class="single-icon"><i class="fab fa-youtube"></i></a>
                        <a href="https://myaccount.google.com/profile" class="single-icon"><i class="fab fa-google-plus-g"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=================================
    Footer
===================================== -->
</div>
<!--=================================
  Brands Slider
===================================== -->

@endsection
