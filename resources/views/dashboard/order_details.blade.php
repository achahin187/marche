
@extends('dashboard.layout.master')
@section('title')
    order details
@endsection
@section('content')
<div class="row">

    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">Order Details</h4>
                <p class="category">Order details</p>
            </div>
            <div class="content table-responsive table-full-width">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Status</th>
                        <th>Vendor</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$order->id}}</td>
                              <td>
                                @if($order->status == 1)
                                <span class="label label-success">Confirmed</span>
                               @else
                                <span class="label label-warning">Pending</span>
                                @endif
                            </td>

                               <td>
                                @if($order->status !== 1)
                                <a class="btn btn-success" href="{{ route('confirmed',$order->id) }}">Confirmed</a>
                               @else
                                <a class="btn btn-warning" href="{{route('pending',$order->id)}}">Pending</a>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="header">
                <h4 class="title">User Details</h4>
                <p class="category">User Details</p>
            </div>
            <div class="content table-responsive table-full-width">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <td>{{$order->user->id}}</td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>{{$order->user->name}}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{$order->user->email}}</td>
                    </tr>
                    <tr>
                        <th>Registered At</th>
                        <td>{{$order->user->created_at}}</td>
                    </tr>

                    </thead>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">Product Details</h4>
                <p class="category">Product Details</p>
            </div>
            <div class="content table-responsive table-full-width">
                <table class="table table-striped">
                    <tr>
                        <th>Order ID</th>
                        <th>product_name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Image</th>
                        <th>Vendor_Name</th>


                    </tr>
                    <tr>
                        <td>{{$order->id}}</td>
                        <td>
                        
                                <table class="table">
                                    <tr>
                                    <td>
                                    @foreach ($order->products as $item )
                                         <li>{{$item->name}}</li>
                                    @endforeach
                                    <span>({{$order->products->count()}}) <span style="color: red">Products</span></span>

                                    <td>
                                    </tr>
                                </table>
                         
                        </td>

                        <td>
                            
                                <table class="table">
                                    <tr>
                                        <td>
                                            @php
                                            $total=0;
                                            @endphp
                                            @foreach ($order->products as $item )
                                         <li>${{$item->price}}</li>
                                        @php  $total += $item->price @endphp

                                    @endforeach

                                        </td>
                                    </tr>
                                </table>
                            <h4 style="color: red" >  <span style="color:black"> Total </span>=$ {!! $total !!}   </h4> 

                            
                        </td>
                        <td>
                            
                                <table class="table">
                                    <tr>
                                        <td>
                                        @foreach ($order->orderitems as $item )
                                            <li>{{$item->quantity}}</li>
                                        @endforeach
                                        <span>({{$order->orderitems->count()}}) <span style="color: red">Qy</span></span>

                                        </td>
                                    </tr>
                                </table>

                        </td>
                        <td>
                            
                                <table class="table">
                                    <tr>
                                        <td>
                                        @foreach ($order->products as $item )
                                          <li> <img src="/uploades/{{ $item->image }}" alt="" style="width: 2em"><li>

                                        @endforeach

                                        </td>
                                    </tr>

                                </table>

                        </td>
                        <td>
                            
                            <table class="table">
                                <tr>
                                    <td>
                                    @foreach ($order->products as $item )
                                      <li>{{ $item->vendor_name }}<li>

                                    @endforeach

                                    </td>
                                </tr>

                            </table>

                    </td>
                    </tr>

                </table>

            </div>
        </div>
    </div>
</div>
@endsection