<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repository\Product\InterfaceProduct;

class ProductController extends Controller
{

    private $interfaceproduct;

    public function __construct(InterfaceProduct $interfaceproduct)
    {
        $this->interfaceproduct = $interfaceproduct;
    }


    public function index()
    {
        $products = $this->interfaceproduct->index();
        return view('products.index',compact('products'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function create()
    {
        return view('products.create');
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
        
        $this->interfaceproduct->store($data);
         
        return redirect()->route('products.index')
                        ->with('success','Product created successfully.');
    }


    public function show($id)
    {
        $product = $this->interfaceproduct->find($id);
        return view('products.show',compact('product'));
    }


    public function edit($id)
    {
        $product = $this->interfaceproduct->find($id);

        return view('products.edit',compact('product'));
    }


    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
        
        $this->interfaceproduct->update($request->all(),$id);
        
        return redirect()->route('products.index')
                        ->with('success','Product updated successfully');
    }


    public function destroy(string $id)
    {
        $this->interfaceproduct->delete($id);   

        return redirect()->route('products.index')
                        ->with('success','Product deleted successfully');
    }
}
