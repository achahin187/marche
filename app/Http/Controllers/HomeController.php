<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\pageViewer;
use App\views;
use App\product;
use App\order;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  /* public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
     

        $products=product::inRandomOrder()->paginate(6);
        $order=order::all();
    
        return view('front.home',compact('products','order'));

    }



  

  
}
