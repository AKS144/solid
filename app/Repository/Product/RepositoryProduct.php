<?php

namespace App\Repository\Product;
use App\Models\Product;
use App\Repository\Product\InterfaceProduct;

class RepositoryProduct implements InterfaceProduct{

    public function index()
    {
        return Product::latest()->paginate(5);
    }

    public function store($data)
    {
        Product::create($data);
    }


    public function find($id)
    {
        return  Product::where('id','=',$id)->first();
    }

    public function update($data, $id)
    {
        $product = Product::where('id','=',$id)->first();
        $product->name = $data['name'];
        $product->detail = $data['detail'];
        $product->save();
           
    }

    public function delete($id)
    {
        $product = Product::where('id',$id)->first();
        $product->delete();
    }



  

    // public function store(Request $request)
    // {        
    //     Product::create($request->all());     
    // }
  

    // public function show(Product $product)
    // {
    //     return view('products.show',compact('product'));
    // }
  

    // public function edit(Product $product)
    // {
    //     return view('products.edit',compact('product'));
    // }
  

    // public function update(Request $request, Product $product)
    // {        
    //     $product->update($request->all());
        
     
    // }
  

    // public function destroy(Product $product)
    // {
    //     $product->delete();
         
       
    // }


}



?>
