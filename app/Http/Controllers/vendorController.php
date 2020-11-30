<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vendor;
use DB;
use App\product;
use App\User;
use Illuminate\Support\Facades\Auth;
class vendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
                /////validion
                $this->validate($request, [
                    'name' => 'required',
                    'price' => 'required',
                    'desc' => 'required',
                    'image' => 'required',
                ]);
                /////////////preper image 
                if ($request->hasFile('image')) {
                    $image = $request->image;
                    $image->move('uploades', $image->getClientOriginalName());
                }
                ////////save data ...
                product::create([
                    'name' => $request->name,
                    'price' => $request->price,
                    'desc' => $request->desc,
                    'image' => $image->getClientOriginalName(),
                    'vendor_name' =>Auth::user()->name,
                    'user_id' =>Auth::user()->id,
                ]);
                ////////alert
                toastr()->success('Product Add Successfully');
        
                /////////redirect
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
       vendor::find($id);
       ////////////////
       ///////////////////////////
       $vendor=DB::table('vendors')
       ->where('user_id','=', Auth::user()->id)
       ->first();
       /////////////////////////////////
       $products=DB::table('products')->orderBy('id', 'DESC')
       ->where('user_id','=', Auth::user()->id)
       ->paginate(3);
       
////////////////////////////////
        if($vendor){
            return view('front.vendor',compact('products'));


        }else{
            vendor::create([
                'user_id' => Auth::user()->id,
     
                ]);
     
     
            toastr()->success('You Are Vendor Now ');
     
             return view('front.vendor',compact('products'));

        }
  

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
        //
    }
}
