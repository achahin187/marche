@extends('front.layout.master2')
@section('title')
    @php
    echo $_GET['search'];
    @endphp

@endsection

@section('content')

    <div class="home">
        <div class="home_container d-flex flex-column align-items-center justify-content-end">
            <div class="home_content text-center">
                <div class="home_title">Search:
                    @php
                    echo $_GET['search'];
                    @endphp
                </div>
                <div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
                    <ul class="d-flex flex-row align-items-start justify-content-start text-center">
                        <li><a href="#">Home</a></li>
                        <li><a href="category.html">Woman</a></li>
                        <li>New Products</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @if (!empty($products))
        <div class="products">
            <div class="container">


                <div class="row products_row">

                    @foreach ($products as $product)
                        <!-- Product -->
                        <div class="col-xl-4 col-md-6">
                            <div class="product">
                                <div class="product_image">

                                    <img src="/uploades/{{ $product->image }}" alt="">

                                </div>
                                <div class="product_content">
                                    <div class="product_info d-flex flex-row align-items-start justify-content-start">
                                        <div>
                                            <div>
                                                <div class="product_name"><a
                                                        href="{{ route('product.show', $product->id) }}">{{ $product->name }}</a>
                                                </div>
                                                <div class="product_category">by:
                                                    @if ($product->vendor_name)
                                                        <a href="#">{{ $product->vendor_name }} </a>
                                                    @else
                                                        marche
                                                    @endif
                                                </div>
                                                @if (Auth::check())
                                                    <form method="POST" action="{{ route('cart.store') }}">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $product->id }}">
                                                        <input type="hidden" name="name" value="{{ $product->name }}">
                                                        <input type="hidden" name="price" value="{{ $product->price }}">


                                                        <button type="submit" class="btn btn-primary btn-outline-dark">
                                                            <i class="fa fa-cart-plus "></i> Add ToCart </button>

                                                    </form>
                                                @else
                                                    <button type="submit" class="btn btn-primary btn-outline-dark"
                                                        onclick="return confirm('Login Now')">
                                                        <i class="fa fa-cart-plus "></i> Add ToCart </button>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="ml-auto text-right">
                                            <div class="rating_r rating_r_4 home_item_rating">
                                                <i></i><i></i><i></i><i></i><i></i>
                                            </div>
                                            <div class="product_price text-right">${{ $product->price }}<span>.99</span>
                                            </div>
                                        </div>

                                    </div>


                                </div>
                            </div>
                        </div>
                </div>
            </div>
    @endforeach



    </div>
@else
    <div class="products">
        <div class="container">
            <div class="row products_row">
                <div class="alert alert-info">your Search Not Found !</div>


            </div>
        </div>
    </div>
    @endif



@endsection
