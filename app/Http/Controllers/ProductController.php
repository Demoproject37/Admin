<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product=product::paginate(5);
        $user=Auth::user();
        return view('Admins.showproduct',compact(['product','user']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user=Auth::user();
        return view('Admins.addproduct',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->all();
        if ($image= $request->file('image')){
            $path='image/';
            $productimage=date('YmdHis')."." . $image->getClientOriginalExtension();
            $image->move($path,$productimage);
            $input['image']= "$productimage";
        }
        product::create($input);
        return redirect()->route('products.index');
    }
    public function update(Request $request,$id)
    {
        $product=product::find($id);
        $input=$request->all();
        if ($image= $request->file('image')){
            $path='image/';
            $productimage=date('YmdHis')."." . $image->getClientOriginalExtension();
            $image->move($path,$productimage);
            $input['image']= "$productimage";
        }
        else{
            unset($input['image']);
        }
        $product->update($input);
        return redirect()->route('products.index');
    }
    
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pro=product::find($id);
        $user=Auth::user();
        return view('Admins.editproduct',compact(['pro','user']));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=product::find($id);
        $product->delete();
        return redirect()->route('products.index');
    }
}
