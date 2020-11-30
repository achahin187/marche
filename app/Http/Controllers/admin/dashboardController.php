<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\product;
use App\order;
use App\views;
use App\vendor;


class dashboardController extends Controller
{


    public function index()
    {
        $users = User::all();
        $products = product::all();
        $orders = order::all();
        $view = views::first();
        $vendors=vendor::all();


        return view('dashboard.dashboard', compact('users', 'products', 'orders','view','vendors'));
    }
}
