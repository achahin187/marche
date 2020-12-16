<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\product;
use App\order;
use App\orderItem;
use DB;
use Illuminate\Support\Facades\Auth;


class cartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.cart');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dubl = Cart::search(function ($cartItem, $rowId) use ($request) {
            return $cartItem->id === $request->id;
        });
        if ($dubl->isNotEmpty()) {
          
            toastr()->warning('product is already in cart !');

        
        



        };

     

        ///////////////////////////////////////////////////

        $user = DB::table('orders')
            ->where('user_id', '=', Auth::user()->id)
            ->first();
        //////////////////////////////////////////////

        //////////////////////////////////
        $order_id = order::latest()->first()->id;

        /////////////////


////////////////////////////////////


        /////////////////////////////////////////////////

        if (isset($user) ) {


                orderItem::create([
                    'order_id' =>$order_id,
                    'product_id' => $request->id,
                    'user_id' => Auth::user()->id,
                    'quantity' => 1,
                    'price' => $request->price,
                ]);




        } else{

            order::create([
                'user_id' => (Auth::user()->id),
                'status' => 1,

            ]);

            orderItem::create([
                'order_id' => $order_id,
                'product_id' => $request->id,
                'user_id ' => Auth::user()->id,
                'quantity' => 1,
                'price' => $request->price,
            ]);
        }






        /////////////////////////////////////////

        Cart::add($request->id, $request->name, 1, $request->price)->associate('App\product', 'App\orderItem');
        toastr()->success('product added  Successfully');


      return redirect()->back();
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::Remove($id);
        toastr()->success('Product has been Deleted From cart !');
        session()->flash('msg','product deleted now');
        return redirect()->back();
    }
}
