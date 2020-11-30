
@extends('dashboard.layout.master')
@section('title')
    Users
@endsection
@section('content')
<div class="row">

    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">Users</h4>
                <p class="category">List of all registered users</p>
            </div>
            <div class="content table-responsive table-full-width">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>registered</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php
                        $nom='';
                        @endphp
                        @foreach ($users as $user )
                        @php
                           $nom++; 
                        @endphp
                        <tr>
                            <td>{{ $nom }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>

                      <td><span class="label label-success">{{$user->created_at}}</label></td>

                         

                            <td>
                          <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                          @method('DELETE')
                          @csrf
                     <button class="btn btn-sm btn-success ti-close" title="Delete User" type="submit" ></button>

                         <form>
                             
                            </td>
                        </tr>
                        @endforeach
            


                    </tbody>
                </table>







            </div>
        </div>
    </div>







@endsection