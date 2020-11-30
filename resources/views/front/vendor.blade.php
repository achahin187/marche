@extends('front.layout.master2')
@section('title')
    profile

@endsection
@section('content')




    <div class="home">
        <div class="home_container d-flex flex-column align-items-center justify-content-end">
            <div class="home_content text-center">
                <div class="home_title">Vendor: {{ auth()->user()->name }}</div>
                <div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
                  
                </div>
            </div>
        </div>
    </div>

    <!-- Product -->

    <div class="product">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                       
                        <div class="content">
                            <form method="POST" action="{{ route('vendor.store') }}"  enctype="multipart/form-data" >
                                @csrf
                                    <div class="col-md-12">
                                        <fieldset style="color: black;text-align:center;" class="alert alert-dismissable"> Add Products</fieldset>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Product Name:</label>
                                            <input type="text" class="form-control border-input" placeholder="Macbook pro" name="name">
                                            <span class="text-danger" >
                                                {{$errors->has('name')?$errors->first('name'): ''}}
                                                </span>
                                        </div>
            
                                        <div class="form-group">
                                            <label>Product Price:</label>
                                            <input type="text" class="form-control border-input" placeholder="$2500" name="price">
                                            <span class="text-danger">{{ $errors->has('price')? $errors->first('price'): '' }}</span>
                                        </div>
            
                                        <div class="form-group">
                                            <label>Product Description:</label>
                                            <textarea  cols="30" rows="10"
                                              class="form-control border-input" placeholder="Product Description" name="desc"></textarea>
                                              <span class="text-danger">{{ $errors->has('desc')? $errors->first('desc'): '' }}</span>
                                        </div>
            
                                        <div class="form-group">
                                            <label>Product Image:</label>
                                            <input type="file" class="form-control border-input" name="image">
                                            <span class="text-danger">{{ $errors->has('image')? $errors->first('image'): '' }}</span>
                                        </div>
                                    </div>
            
                                </div>
                                <div class="">
                                    <button type="submit" class="btn btn-info btn-fill btn-wd">Add Product</button>
                                </div>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">

                    <div class="card-group">
                        @foreach ($products as $product )
                        <div class="card">
                            <img class="card-img-top" src="/uploades/{{ $product->image }}" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">{{ $product->name }}</h5>
                              <p class="card-text">{{ $product->desc }}</p>
                              <p class="card-text"><small class="text-muted">${{ $product->price }}</small></p>
                            </div>
                          </div>
                        @endforeach
                   
                      </div>
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
                <div class="col-lg-6">
                    <div class="box d-flex flex-row align-items-center justify-content-start">
                        <div class="mt-auto">
                            <div class="box_image"><img src="/images/boxes_1.png" alt=""></div>
                        </div>
                        <div class="box_content">
                            <div class="box_title">Size Guide</div>
                            <div class="box_text">Phasellus sit amet nunc eros sed nec tellus.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 box_col">
                    <div class="box d-flex flex-row align-items-center justify-content-start">
                        <div class="mt-auto">
                            <div class="box_image"><img src="/images/boxes_2.png" alt=""></div>
                        </div>
                        <div class="box_content">
                            <div class="box_title">Shipping</div>
                            <div class="box_text">Phasellus sit amet nunc eros sed nec tellus.</div>
                        </div>
                    </div>
            </div>
        </div>
    </div>






@endsection
