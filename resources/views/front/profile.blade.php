@extends('front.layout.master2')
@section('title')
    profile

@endsection
@section('content')




    <div class="home">
        <div class="home_container d-flex flex-column align-items-center justify-content-end">
            <div class="home_content text-center">
                <div class="home_title">{{ auth()->user()->name }}</div>
                <div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">

                </div>
            </div>
        </div>
    </div>

    <!-- Product -->

    <div class="product">
        <div class="container">
            <div class="row chat-row">
                <div class="col-md-9">
                    <div class="card" style="margin-top: 15px">
                       
                        <div class="content table-responsive table-full-width">
                            <table class="table" style="color:black">
                                <thead>
                                    <tr class="table-active">
                                        <th>ID</th>
                                        <td>{{ auth()->user()->id }}</td>
                                    </tr>
                                    <tr class="table-active">
                                        <th>Name</th>
                                        <td>{{ auth()->user()->name }}</td>
                                    </tr>
                                    <tr class="table-active">
                                        <th>Email</th>
                                        <td>{{ auth()->user()->email }}</td>
                                    </tr>
                                    <tr class="table-active">
                                        <th>Registered At</th>
                                        <td>{{ auth()->user()->created_at }}</td>
                                    </tr>
                                    <tr class="table-active">
                                        <th><i class="fa fa-cog"></i>  Settings</th>
                                        <td>
                                            @if($vendor)
                                  <a class="btn btn-secondary btn-sm" href="{{ route('vendor.show',auth()->user()->id) }}"> Vendor Room  </a>

                                  <a class="btn btn-danger btn-sm"> <i class="fa fa-user-times"></i> Delete Acc</a>

                                  <span class="alert alert-success alert-sm" href="#">  You Are Vendor  <i class="fa fa-check-circle"></i>   </span>


                                            @elseif($vendor == null)
                                 <a class="btn btn-secondary btn-sm" href="{{ route('vendor.show',auth()->user()->id) }}"><i class="fa fa-plus"></i> Create Vendor </a>
                                 <a class="btn btn-danger btn-sm"> <i class="fa fa-user-times"></i> Delete Acc</a>


                                            @endif



                                        </td>
                                    </tr>

                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                          <!---- start users for chat ---->
                          <div class="users">
                            <h5 class="user">Users</h5>
                            <ul class="list-group list-chat-item">
                                @if($users->count())
                                @foreach ($users as $user ) 
                               <li class="chat-user-list">
                                <a href="{{ route('chat.show',$user->id) }}">
                                    <div class="chat-image">
                                    {!!   makeImageFromName($user->name) !!}
                                    <i class="fa fa-circle user-status-icon user-icon-{{ $user->id }}" title="away"></i>
                                    </div>

                                    <div class="chat-name font-weight-bold">
                                        {{ $user->name }}
                                    </div>
                                    
                                </a>
                               
                               </li>
                                @endforeach
                                 @endif
                            </ul>
    
                        </div>
                        <!-----end ----->
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
    </div>






@endsection

@push('js')
<script>
    $(function (){
        let user_id = "{{ auth()->user()->id }}";
        let ip_address = '127.0.0.1';
        let socket_port = '4000';
        let socket = io(ip_address + ':' + socket_port);
        socket.on('connect', function() {
           socket.emit('user_connected', user_id);
        });
        socket.on('updateUserStatus', (data) => {
            let $userStatusIcon = $('.user-status-icon');
            $userStatusIcon.removeClass('text-success');
            $userStatusIcon.attr('title', 'Away');
            $.each(data, function (key, val) {
               if (val !== null && val !== 0) {
                  let $userIcon = $(".user-icon-"+key);
                  $userIcon.addClass('text-success');
                  $userIcon.attr('title','Online');
               }
            });
        });
    });
</script>

@endpush
