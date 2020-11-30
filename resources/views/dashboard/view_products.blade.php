
@extends('dashboard.layout.master')
@section('title')
Products
@endsection
@section('content')
<div class="row">

    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">All Products</h4>
                <p class="category">List of all stock</p>
            </div>
            <div class="content table-responsive table-full-width">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Vendor_name</th>
                        <th>Price</th>
                        <th>Desc</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php
                            $nom='';
                        @endphp
                        @foreach ($products as $product )
                        @php
                        $nom++;
                        @endphp
                        <tr>
                            <td>{{ $nom }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->vendor_name }}</td>
                            <td>{{ $product->price }}$</td>
                            <td>{{ $product->desc }}</td>
                            <td><img src="/uploades/{{ $product->image }}" alt="" class="img-thumbnail"
                                     style="width: 80px"></td>
                            <td>

                        <a class="btn btn-sm btn-info ti-pencil-alt" title="Edit" href="{{ route('products.edit',$product->id) }}"></a>
                                
                 <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                          @method('DELETE')
                          @csrf
                     <button class="btn btn-sm btn-success ti-close" title="Delete product" type="submit" ></button>

                  <form>                               
                            </td>
                        </tr>
                        @endforeach
             
               
              
                    </tbody>
                </table>
            {{ $products->links() }}
            </div>
        </div>
    </div>
</div>
@endsection