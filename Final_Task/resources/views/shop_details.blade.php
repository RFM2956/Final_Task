@extends("layouts.master")

@section("title", 'details')
@section('content')



<section class="breadcrumb-section">
    <h2 class="sr-only">Site Breadcrumb</h2>
    <div class="container">
        <div class="breadcrumb-contents">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('client.index')}}">Home</a></li>
                    <li class="breadcrumb-item active">Product Details</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
<main class="inner-page-sec-padding-bottom">
    <div class="container">
        <div class="row mb--60">
            <div class="col-lg-5 mb--30">
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
                        <img src="{{ asset($product->img)}}" alt="" />
                    </div>
                    <!-- <div class="single-slide">
                        <img src="{{ asset('front/assets/image/products/product-details-2.jpg')}}" alt="" />
                    </div>
                    <div class="single-slide">
                        <img src="{{ asset('front/assets/image/products/product-details-3.jpg')}}" alt="" />
                    </div>
                    <div class="single-slide">
                        <img src="{{ asset('front/assets/image/products/product-details-3.jpg')}}}" alt="" />
                    </div>
                    <div class="single-slide">
                        <img src="{{ asset('front/assets/image/products/product-details-5.jpg')}}" alt="" />
                    </div> -->
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
                        <img src="{{ asset($product->img)}}" alt="" />
                    </div> -->
                    <!-- <div class="single-slide">
                        <img src="{{ asset('front/assets/image/products/product-details-2.jpg')}}" alt="" />
                    </div>
                    <div class="single-slide">
                        <img src="{{ asset('front/assets/image/products/product-details-3.jpg')}}" alt="" />
                    </div>
                    <div class="single-slide">
                        <img src="{{ asset('front/assets/image/products/product-details-3.jpg')}}" alt="" />
                    </div>
                    <div class="single-slide">
                        <img src="{{ asset('front/assets/image/products/product-details-3.jpg')}}" alt="" />
                    </div> -->
                </div>
            </div>
            <div class="col-lg-7">
                <div class="product-details-info pl-lg--30">
                    <p class="tag-block">
                        Tags: <a href="#">Movado</a>, <a href="#">Omega</a>
                    </p>
                    <h3 class="product-title">
                       {{$product->title}}
                    </h3>
                    <ul class="list-unstyled">
                        <!-- <li>Ex Tax: <span class="list-value"> £60.24</span></li> -->
                        <!-- <li>
                            Brands:
                            <a href="#" class="list-value font-weight-bold"> Canon</a>
                        </li>
                        <li>Product Code: <span class="list-value"> model1</span></li> -->
                        <li>Reward Points: <span class="list-value"> 200</span></li>
                        <li>
                            Availability: <span class="list-value"> In Stock</span>
                        </li>
                    </ul>
                    <div class="price-block">
                        <span class="price-new">£{{$product->price}}</span>
                    </div>
                    <div class="rating-widget">
                        <div class="rating-block">
                            <span class="fas fa-star star_on"></span>
                            <span class="fas fa-star star_on"></span>
                            <span class="fas fa-star star_on"></span>
                            <span class="fas fa-star star_on"></span>
                            <span class="fas fa-star"></span>
                        </div>
                        <div class="review-widget">
                            <a href="">(1 Reviews)</a> <span>|</span>
                            <a href="">Write a review</a>
                        </div>
                    </div>
                    <article class="product-details-article">
                        <h4 class="sr-only">Product Summery</h4>
                        <p>
                        This engaging narrative follows the protagonist as they navigate through life's challenges, uncovering hidden strengths and embracing personal growth.
                         Set against diverse landscapes and filled with relatable characters, this book is a universal exploration of resilience, courage, and the pursuit of happiness. 
                         
                        </p>
                    </article>
                   <div class="add-to-cart-row">
                            <form method="post" class="row" action="{{route('client.cartqty',$product->id)}}">
                                @csrf
                                <div class="count-input-block">
                                    <span class="widget-label">+</span>
                                    <input type="number" class="form-control text-center" name="qty" value="1" />
                                </div>
                                <div class="add-cart-btn">
                                    <button href="" class="btn btn-outlined--primary"><span class="plus-icon">+</span>Add to Cart</button>
                                </div>
                            </form>
                        </div>
                    <!-- <div class="compare-wishlist-row">
                        <a href="" class="add-link"><i class="fas fa-heart"></i>Add to Wish List</a>
                        <a href="" class="add-link"><i class="fas fa-random"></i>Add to Compare</a>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="sb-custom-tab review-tab section-padding">
            <ul class="nav nav-tabs nav-style-2" id="myTab2" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="tab1" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">
                        DESCRIPTION
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="tab2" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="true">
                        REVIEWS (1)
                    </a>
                </li>
            </ul>
            <div class="tab-content space-db--20" id="myTabContent">
                <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab1">
                    <article class="review-article">
                        <h1 class="sr-only">Tab Article</h1>
                        <p>
                        It is not just a story; it's an invitation to introspection. Themes of love, resilience, and the pursuit of authenticity resonate throughout,
                         making it a timeless addition to your reading list. Whether you're a fan of character-driven narratives, enjoy exploring the intricacies 
                         of the human experience, or simply crave a tale that leaves a lasting impression, this book promises to be a fulfilling and enriching read.
Join the countless readers who have found solace, inspiration, and a 
renewed sense of purpose within these pages.  It is more than a book; it's an odyssey that reminds us all of the extraordinary 
 possibilities that lie within ourselves.

                        </p>
                    </article>
                </div>
                <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab2">
                    <div class="review-wrapper">
                        <h2 class="title-lg mb--20">
                            1 REVIEW FOR AUCTOR GRAVIDA ENIM
                        </h2>
                        <div class="review-comment mb--20">
                            <div class="avatar">
                                <img src="{{ asset('front/assets/image/icon/author-logo.png')}}" alt="" />
                            </div>
                            <div class="text">
                                <div class="rating-block mb--15">
                                    <span class="ion-android-star-outline star_on"></span>
                                    <span class="ion-android-star-outline star_on"></span>
                                    <span class="ion-android-star-outline star_on"></span>
                                    <span class="ion-android-star-outline"></span>
                                    <span class="ion-android-star-outline"></span>
                                </div>
                                <h6 class="author">
                                    ADMIN –
                                    <span class="font-weight-400">March 23, 2015</span>
                                </h6>
                                <p>
                                    Lorem et placerat vestibulum, metus nisi posuere nisl,
                                    in accumsan elit odio quis mi.
                                </p>
                            </div>
                        </div>
                        <h2 class="title-lg mb--20 pt--15">ADD A REVIEW</h2>
                        <div class="rating-row pt-2">
                            <p class="d-block">Your Rating</p>
                            <span class="rating-widget-block">
                                <input type="radio" name="star" id="star1" />
                                <label for="star1"></label>
                                <input type="radio" name="star" id="star2" />
                                <label for="star2"></label>
                                <input type="radio" name="star" id="star3" />
                                <label for="star3"></label>
                                <input type="radio" name="star" id="star4" />
                                <label for="star4"></label>
                                <input type="radio" name="star" id="star5" />
                                <label for="star5"></label>
                            </span>
                            <form action="./" class="mt--15 site-form">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="message">Comment</label>
                                            <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="name">Name *</label>
                                            <input type="text" id="name" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="email">Email *</label>
                                            <input type="text" id="email" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="website">Website</label>
                                            <input type="text" id="website" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="submit-btn">
                                            <a href="#" class="btn btn-black">Post Comment</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="tab-product-details">
  <div class="brand">
    <img src="{{ asset('front/assets/image/others/review-tab-product-details.jpg')}}" alt="">
  </div>
  <h5 class="meta">Reference <span class="small-text">demo_5</span></h5>
  <h5 class="meta">In stock <span class="small-text">297 Items</span></h5>
  <section class="product-features">
    <h3 class="title">Data sheet</h3>
    <dl class="data-sheet">
      <dt class="name">Compositions</dt>
      <dd class="value">Viscose</dd>
      <dt class="name">Styles</dt>
      <dd class="value">Casual</dd>
      <dt class="name">Properties</dt>
      <dd class="value">Maxi Dress</dd>
    </dl>
  </section>
</div> -->
    </div>
    <!--=================================
    RELATED PRODUCTS BOOKS
===================================== -->
    <section class="">
        <div class="container">
            <div class="section-title section-title--bordered">
                <h2>RELATED PRODUCTS</h2>
            </div>
            <div class="product-slider sb-slick-slider slider-border-single-row" data-slick-setting='{
                "autoplay": true,
                "autoplaySpeed": 8000,
                "slidesToShow": 4,
                "dots":true
            }' data-slick-responsive='[
                {"breakpoint":1200, "settings": {"slidesToShow": 4} },
                {"breakpoint":992, "settings": {"slidesToShow": 3} },
                {"breakpoint":768, "settings": {"slidesToShow": 2} },
                {"breakpoint":480, "settings": {"slidesToShow": 1} }
            ]'>
                <div class="single-slide">
                    <div class="product-card">
                        <div class="product-header">
                            <a href="" class="author"> {{$product->author}} </a>
                            <h3>
                                <a href="{{route('client.shop.detail', $product->id)}}">{{$product->title}}</a>
                            </h3>
                        </div>
                        <div class="product-card--body">
                            <div class="card-image">
                                <img src="{{ asset($product->img)}}" alt="" />
                                <div class="hover-contents">
                                    <a href="{{route('client.shop.detail', $product->id)}}" class="hover-image">
                                        <img src="{{ asset($product->img)}}" alt="" />
                                    </a>
                                    <div class="hover-btns">
                                        <a href="{{ route('client.cart')}}" class="single-btn">
                                            <i class="fas fa-shopping-basket"></i>
                                        </a>
                                        <!-- <a href="{{ route('client.wishlist')}}" class="single-btn">
                                            <i class="fas fa-heart"></i>
                                        </a> -->
                                    </div>
                                </div>
                            </div>
                            <div class="price-block">
                                <span class="price">₼{{$product->price}}</span>
                                <span class="price-discount">{{$product->percent}}%</span>
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
                                    <img src="{{ asset('front/assets/image/products/product-details-1.jpg')}}" alt="" />
                                </div>
                                <div class="single-slide">
                                    <img src="{{ asset('front/assets/image/products/product-details-2.jpg')}}" alt="" />
                                </div>
                                <div class="single-slide">
                                    <img src="{{ asset('front/assets/image/products/product-details-3.jpg')}}" alt="" />
                                </div>
                                <div class="single-slide">
                                    <img src="{{ asset('front/assets/image/products/product-details-4.jpg')}}" alt="" />
                                </div>
                                <div class="single-slide">
                                    <img src="{{ asset('front/assets/image/products/product-details-5.jpg')}}" alt="" />
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
                                <div class="single-slide">
                                    <img src="{{ asset('front/assets/image/products/product-details-1.jpg')}}" alt="" />
                                </div>
                                <div class="single-slide">
                                    <img src="{{ asset('front/assets/image/products/product-details-2.jpg')}}" alt="" />
                                </div>
                                <div class="single-slide">
                                    <img src="{{ asset('front/assets/image/products/product-details-3.jpg')}}" alt="" />
                                </div>
                                <div class="single-slide">
                                    <img src="{{ asset('front/assets/image/products/product-details-4.jpg')}}" alt="" />
                                </div>
                                <div class="single-slide">
                                    <img src="{{ asset('front/assets/image/products/product-details-5.jpg')}}" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 mt--30 mt-lg--30">
                            <div class="product-details-info pl-lg--30">
                                <p class="tag-block">
                                    Tags: <a href="#">Movado</a>, <a href="#">Omega</a>
                                </p>
                                <h3 class="product-title">
                                {{$product->title}}
                                </h3>
                                <ul class="list-unstyled">
                                    <!-- <li>Ex Tax: <span class="list-value"> £60.24</span></li>
                                    <li>
                                        Brands:
                                        <a href="#" class="list-value font-weight-bold">
                                            Canon</a>
                                    </li>
                                    <li>
                                        Product Code: <span class="list-value"> model1</span>
                                    </li> -->
                                    <li>
                                        Reward Points: <span class="list-value"> 200</span>
                                    </li>
                                    <li>
                                        Availability:
                                        <span class="list-value"> In Stock</span>
                                    </li>
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
                                        <span class="fas fa-star"></span>
                                    </div>
                                    <div class="review-widget">
                                        <a href="">(1 Reviews)</a> <span>|</span>
                                        <a href="">Write a review</a>
                                    </div>
                                </div>
                                <article class="product-details-article">
                                    <h4 class="sr-only">Product Summery</h4>
                                    <p>
                                    With its heartwarming story and timeless lessons, "Journey to Self-Discovery" 
                         invites readers to reflect on their own paths and discover the beauty of the human spirit.
                          Whether you seek inspiration or simply enjoy a good tale, this book promises an uplifting and rewarding experience for all.
                                    </p>
                                </article>
                                <div class="add-to-cart-row">
                                    <div class="count-input-block">
                                        <span class="widget-label">+</span>
                                        <input type="number" class="form-control text-center" value="1" />
                                    </div>
                                    <div class="add-cart-btn">
                                        <a href="" class="btn btn-outlined--primary"><span class="plus-icon">+</span>Add to Cart</a>
                                    </div>
                                </div>
                                <!-- <div class="compare-wishlist-row">
                                    <a href="" class="add-link"><i class="fas fa-heart"></i>Add to Wish List</a>
                                    <a href="" class="add-link"><i class="fas fa-random"></i>Add to Compare</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="widget-social-share">
                        <span class="widget-label">Share:</span>
                        <div class="modal-social-share">
                            <a href="#" class="single-icon"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="single-icon"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="single-icon"><i class="fab fa-youtube"></i></a>
                            <a href="#" class="single-icon"><i class="fab fa-google-plus-g"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</div>
<!--=================================
  Brands Slider
===================================== -->



@endsection
