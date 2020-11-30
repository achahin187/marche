<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\product;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = product::paginate(4);
        return view('dashboard.view_products', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.add_product');
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
            'image' => $image->getClientOriginalName()
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
     

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $product=product::find($id);
        return view('dashboard.edit_product',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,product $product)
    {
        ////find $product
        product::find($product);
           /////validion
           $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'desc' => 'required',
            'image' => 'required',
        ]);

        ////check if there in any image
if($request->hasFile('image')){

    if(file_exists(public_path('uploades/').$product->image)){
        unlink(public_path('uploades/').$product->image);
    }
};
            /////////////preper image 
            
                $image=$request->image;
                $image->move('uploades', $image->getClientOriginalName());
                $product->image=$request->image->getClientOriginalName();

            ////////save data ...
           $product->update([
                'name' => $request->name,
                'price' => $request->price,
                'desc' => $request->desc,
                'image' => $product->image,
            ]);
            ////////alert
            toastr()->success('Product updated Successfully');
    
            /////////redirect
            return redirect('admin/products');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
               ///find id 
      $product=product::find($id);
        
      $product->delete();
          ////////alert
   toastr()->success('product Deleted Successfully');

   /////////redirect
   return redirect()->back();
    }
}
