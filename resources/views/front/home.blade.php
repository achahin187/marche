@extends('front.layout.master1')
@section('title')
Home

@endsection

@section('content')
  

 <div class="home">

    <!-- Home Slider -->
    <div class="home_slider_container">
        <div class="owl-carousel owl-theme home_slider">

            <!-- Slide -->
            <div class="owl-item">
                <div class="background_image" style="background-image:url(images/home.jpg)"></div>
                <div class="container fill_height">
                    <div class="row fill_height">
                        <div class="col fill_height">
                            <div class="home_container d-flex flex-column align-items-center justify-content-start">
                                <div class="home_content">
                                    <div class="home_title">New Arrivals</div>
                                    <div class="home_subtitle">Summer Wear</div>
                                    <div class="home_items">
                                        <div class="row">
                                            <div class="col-sm-3 offset-lg-1">
                                                <div class="home_item_side">
                                                    <a href="product.html"><img src="images/home_1.jpg" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-8 offset-sm-2 offset-md-0">
                                                <div class="product home_item_large">
                                                    <div class="product_tag d-flex flex-column align-items-center justify-content-center">
                                                        <div>
                                                            <div>from</div>
                                                            <div>$3<span>.99</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="product_image"><img src="images/home_2.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_info d-flex flex-row align-items-start justify-content-start">
                                                            <div>
                                                                <div>
                                                                    <div class="product_name"><a href="product.html">Cool Clothing with Brown Stripes</a></div>
                                                                    <div class="product_category">In <a href="category.html">Category</a></div>
                                                                </div>
                                                            </div>
                                                            <div class="ml-auto text-right">
                                                                <div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                                                <div class="product_price text-right">$3<span>.99</span></div>
                                                            </div>
                                                        </div>
                                                        <div class="product_buttons">
                                                            <div class="text-right d-flex flex-row align-items-start justify-content-start">
                                                                <div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
                                                                    <div>
                                                                        <div><img src="images/heart.svg" alt="">
                                                                            <div>+</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
                                                                    <div>
                                                                        <div><img src="images/cart_2.svg" alt="">
                                                                            <div>+</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="home_item_side">
                                                    <a href="product.html"><img src="images/home_3.jpg" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide -->
            <div class="owl-item">
                <div class="background_image" style="background-image:url(images/home.jpg)"></div>
                <div class="container fill_height">
                    <div class="row fill_height">
                        <div class="col fill_height">
                            <div class="home_container d-flex flex-column align-items-center justify-content-start">
                                <div class="home_content">
                                    <div class="home_title">Popular</div>
                                    <div class="home_subtitle">Summer Wear</div>
                                    <div class="home_items">
                                        <div class="row">
                                            <div class="col-sm-3 offset-lg-1">
                                                <div class="home_item_side">
                                                    <a href="product.html"><img src="images/home_1.jpg" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-8 offset-sm-2 offset-md-0">
                                                <div class="product home_item_large">
                                                    <div class="product_tag d-flex flex-column align-items-center justify-content-center">
                                                        <div>
                                                            <div>from</div>
                                                            <div>$3<span>.99</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="product_image"><img src="images/product_1.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_info d-flex flex-row align-items-start justify-content-start">
                                                            <div>
                                                                <div>
                                                                    <div class="product_name"><a href="product.html">Cool Clothing with Brown Stripes</a></div>
                                                                    <div class="product_category">In <a href="category.html">Category</a></div>
                                                                </div>
                                                            </div>
                                                            <div class="ml-auto text-right">
                                                                <div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                                                <div class="product_price text-right">$3<span>.99</span></div>
                                                            </div>
                                                        </div>
                                                        <div class="product_buttons">
                                                            <div class="text-right d-flex flex-row align-items-start justify-content-start">
                                                                <div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
                                                                    <div>
                                                                        <div><img src="images/heart.svg" alt="">
                                                                            <div>+</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
                                                                    <div>
                                                                        <div><img src="images/cart_2.svg" alt="">
                                                                            <div>+</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="home_item_side">
                                                    <a href="product.html"><img src="images/home_3.jpg" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide -->
            <div class="owl-item">
                <div class="background_image" style="background-image:url(images/home.jpg)"></div>
                <div class="container fill_height">
                    <div class="row fill_height">
                        <div class="col fill_height">
                            <div class="home_container d-flex flex-column align-items-center justify-content-start">
                                <div class="home_content">
                                    <div class="home_title">Trendsetters</div>
                                    <div class="home_subtitle">Summer Wear</div>
                                    <div class="home_items">
                                        <div class="row">
                                            <div class="col-sm-3 offset-lg-1">
                                                <div class="home_item_side">
                                                    <a href="product.html"><img src="images/home_1.jpg" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-8 offset-sm-2 offset-md-0">
                                                <div class="product home_item_large">
                                                    <div class="product_tag d-flex flex-column align-items-center justify-content-center">
                                                        <div>
                                                            <div>from</div>
                                                            <div>$3<span>.99</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="product_image"><img src="images/product_2.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_info d-flex flex-row align-items-start justify-content-start">
                                                            <div>
                                                                <div>
                                                                    <div class="product_name"><a href="product.html">Cool Clothing with Brown Stripes</a></div>
                                                                    <div class="product_category">In <a href="category.html">Category</a></div>
                                                                </div>
                                                            </div>
                                                            <div class="ml-auto text-right">
                                                                <div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                                                <div class="product_price text-right">$3<span>.99</span></div>
                                                            </div>
                                                        </div>
                                                        <div class="product_buttons">
                                                            <div class="text-right d-flex flex-row align-items-start justify-content-start">
                                                                <div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
                                                                    <div>
                                                                        <div><img src="images/heart.svg" alt="">
                                                                            <div>+</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
                                                                    <div>
                                                                        <div><img src="images/cart_2.svg" alt="">
                                                                            <div>+</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="home_item_side">
                                                    <a href="product.html"><img src="images/home_3.jpg" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide -->
            <div class="owl-item">
                <div class="background_image" style="background-image:url(images/home.jpg)"></div>
                <div class="container fill_height">
                    <div class="row fill_height">
                        <div class="col fill_height">
                            <div class="home_container d-flex flex-column align-items-center justify-content-start">
                                <div class="home_content">
                                    <div class="home_title">Premium Items</div>
                                    <div class="home_subtitle">Summer Wear</div>
                                    <div class="home_items">
                                        <div class="row">
                                            <div class="col-sm-3 offset-lg-1">
                                                <div class="home_item_side">
                                                    <a href="product.html"><img src="images/home_1.jpg" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-8 offset-sm-2 offset-md-0">
                                                <div class="product home_item_large">
                                                    <div class="product_tag d-flex flex-column align-items-center justify-content-center">
                                                        <div>
                                                            <div>from</div>
                                                            <div>$3<span>.99</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="product_image"><img src="images/product_3.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_info d-flex flex-row align-items-start justify-content-start">
                                                            <div>
                                                                <div>
                                                                    <div class="product_name"><a href="product.html">Cool Clothing with Brown Stripes</a></div>
                                                                    <div class="product_category">In <a href="category.html">Category</a></div>
                                                                </div>
                                                            </div>
                                                            <div class="ml-auto text-right">
                                                                <div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                                                <div class="product_price text-right">$3<span>.99</span></div>
                                                            </div>
                                                        </div>
                                                        <div class="product_buttons">
                                                            <div class="text-right d-flex flex-row align-items-start justify-content-start">
                                                                <div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
                                                                    <div>
                                                                        <div><img src="images/heart.svg" alt="">
                                                                            <div>+</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
                                                                    <div>
                                                                        <div><img src="images/cart_2.svg" alt="">
                                                                            <div>+</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="home_item_side">
                                                    <a href="product.html"><img src="images/home_3.jpg" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="home_slider_nav home_slider_nav_prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
        <div class="home_slider_nav home_slider_nav_next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>

        <!-- Home Slider Dots -->

        <div class="home_slider_dots_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_slider_dots">
                            <ul id="home_slider_custom_dots" class="home_slider_custom_dots d-flex flex-row align-items-center justify-content-center">
                                <li class="home_slider_custom_dot active">01</li>
                                <li class="home_slider_custom_dot">02</li>
                                <li class="home_slider_custom_dot">03</li>
                                <li class="home_slider_custom_dot">04</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Products -->

<div class="products">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section_title text-center">Popular on Little Closet</div>
            </div>
        </div>
        <div class="row page_nav_row">
            <div class="col">
                <div class="page_nav">
                    <ul class="d-flex flex-row align-items-start justify-content-center">
                        <li class="active"><a href="category.html">Women</a></li>
                        <li><a href="category.html">Men</a></li>
                        <li><a href="category.html">Kids</a></li>
                        <li><a href="category.html">Home Deco</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row products_row">
             
              @foreach ($products as $product )
                      <!-- Product -->
            <div class="col-xl-4 col-md-6">
                <div class="product">
                    <div class="product_image">
                     
                        <img src="uploades/{{ $product->image }}" alt="">
                    
                    </div>
                    <div class="product_content">
                        <div class="product_info d-flex flex-row align-items-start justify-content-start">
                            <div>
                                <div>
                                        <div class="product_name"><a href="{{ route('product.show',$product->id) }}">{{ $product->name }}</a></div>
                                    <div class="product_category">by: 
                                        @if($product->vendor_name)
								<a href="#">{{ $product->vendor_name }} </a>
								@else
								marche
								@endif
                                    </div>
                                    @if(Auth::check())
                                    <form   method="POST" action="{{ route('cart.store') }}"> 
                                           @csrf
                                           <input type="hidden" name="id"       value="{{$product->id}}">
                                            <input type="hidden" name="name" value="{{$product->name}}">
                                           <input type="hidden" name="price"  value="{{$product->price}}">
                                                  
                                              <button  id="cart"  class="btn btn-primary btn-outline-dark">
                                                   <i class="fa fa-cart-plus "></i> Add ToCart    </button>
                              
                                        </form>
                                     @else
                                    <button  type="submit" class="btn btn-primary btn-outline-dark"  onclick="return confirm('Login Now')">
                                    <i class="fa fa-cart-plus "></i> Add ToCart    </button>
                                     @endif
                                </div>
                            </div>
                            <div class="ml-auto text-right">
                                <div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                <div class="product_price text-right">${{ $product->price }}<span>.99</span></div>
                            </div>
                        
                        </div>
              

                    </div>
                </div>
            </div>
              @endforeach
 


        </div>
        <div class="row">
            <div class="col">
                <div class=" load_more ml-auto mr-auto">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</div>


  

  

<!-- Boxes -->

<div class="boxes">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="boxes_container d-flex flex-row align-items-start justify-content-between flex-wrap">

                    <!-- Box -->
                    <div class="box">
                        <div class="background_image" style="background-image:url(images/box_1.jpg)"></div>
                        <div class="box_content d-flex flex-row align-items-center justify-content-start">
                            <div class="box_left">
                                <div class="box_image">
                                    <a href="category.html">
                                        <div class="background_image" style="background-image:url(images/box_1_img.jpg)"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="box_right text-center">
                                <div class="box_title">Trendsetter Collection</div>
                            </div>
                        </div>
                    </div>

                    <!-- Box -->
                    <div class="box">
                        <div class="background_image" style="background-image:url(images/box_2.jpg)"></div>
                        <div class="box_content d-flex flex-row align-items-center justify-content-start">
                            <div class="box_left">
                                <div class="box_image">
                                    <a href="category.html">
                                        <div class="background_image" style="background-image:url(images/box_2_img.jpg)"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="box_right text-center">
                                <div class="box_title">Popular Choice</div>
                            </div>
                        </div>
                    </div>

                    <!-- Box -->
                    <div class="box">
                        <div class="background_image" style="background-image:url(images/box_3.jpg)"></div>
                        <div class="box_content d-flex flex-row align-items-center justify-content-start">
                            <div class="box_left">
                                <div class="box_image">
                                    <a href="category.html">
                                        <div class="background_image" style="background-image:url(images/box_3_img.jpg)"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="box_right text-center">
                                <div class="box_title">Popular Choice</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Features -->

<div class="features">
    <div class="container">
        <div class="row">

            <!-- Feature -->
            <div class="col-lg-4 feature_col">
                <div class="feature d-flex flex-row align-items-start justify-content-start">
                    <div class="feature_left">
                        <div class="feature_icon"><img src="images/icon_1.svg" alt=""></div>
                    </div>
                    <div class="feature_right d-flex flex-column align-items-start justify-content-center">
                        <div class="feature_title">Fast Secure Payments</div>
                    </div>
                </div>
            </div>

            <!-- Feature -->
            <div class="col-lg-4 feature_col">
                <div class="feature d-flex flex-row align-items-start justify-content-start">
                    <div class="feature_left">
                        <div class="feature_icon ml-auto mr-auto"><img src="images/icon_2.svg" alt=""></div>
                    </div>
                    <div class="feature_right d-flex flex-column align-items-start justify-content-center">
                        <div class="feature_title">Premium Products</div>
                    </div>
                </div>
            </div>

            <!-- Feature -->
            <div class="col-lg-4 feature_col">
                <div class="feature d-flex flex-row align-items-start justify-content-start">
                    <div class="feature_left">
                        <div class="feature_icon"><img src="images/icon_3.svg" alt=""></div>
                    </div>
                    <div class="feature_right d-flex flex-column align-items-start justify-content-center">
                        <div class="feature_title">Free Delivery</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>




@endsection
@section('js')

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script>
    

</script>
@endsection