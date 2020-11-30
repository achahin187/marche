
@extends('dashboard.layout.master')
@section('title')
    orders
@endsection
@section('content')
<div class="row">

    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">Orders</h4>
                <p class="category">List of all orders</p>


                    @if(session()->has('msg'))
                    <div class="alert alert-danger">{{ session()->get('msg') }}</div>

                    @endif
            
               </div>
            <div class="content table-responsive table-full-width">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>User</th>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php
                           $nom=''; 
                        @endphp
                        @foreach ($orders as $order )
                        @php
                            $nom++;
                        @endphp
                        <tr>
                            <td>{{ $nom }}</td>
                            <td>{{ $order->user->name }}</td>
<td>
                            @foreach($order->products as  $item)   
                             @endforeach 
                             <span>({{$order->products->count()}}) <span style="color: red">Products</span></span>

                            </td>

<td>
                             @foreach($order->orderitems as  $item)
                         @endforeach  
                         <span>({{$order->orderitems->count()}}) <span style="color: red">Qy</span></span>

                           </td>
                                
                            <td>
                                @if($order->status == 1)
                                <span class="label label-success">Confirmed</span>
                               @else
                                <span class="label label-warning">Pending</span>
                                @endif
                            </td>
                            <td>
                                <button class="btn btn-sm btn-success ti-close"
                                        title="Cancel Order"></button>
    
                                <a class="btn btn-sm btn-primary ti-view-list-alt"
                                        title="Details" href="{{ route('orders.show',$order->id) }}"></a>
                            </td>
                        </tr>
                            
                        @endforeach
                

             

                    </tbody>
                </table>

            </div>
        </div>
    </div>


</div>
@endsection