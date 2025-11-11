<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required',
            'price' => 'nullable|numeric',
            'image' => 'image|mimes:jpg,png,jpeg|max:2048'
        ]);

        $data = $request->only('name','description','price','category');

        if($request->hasFile('image')){
            $imageName = time().'_'.$request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/products'), $imageName);
            $data['image'] = 'uploads/products/'.$imageName;
        }

        Product::create($data);
        return redirect()->route('products.index')->with('success','Produk berhasil ditambahkan!');
    }

    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name'  => 'required',
            'price' => 'nullable|numeric',
            'image' => 'image|mimes:jpg,png,jpeg|max:2048'
        ]);

        $data = $request->only('name','description','price','category');

        if($request->hasFile('image')){
            if($product->image && file_exists(public_path($product->image))){
                unlink(public_path($product->image));
            }
            $imageName = time().'_'.$request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/products'), $imageName);
            $data['image'] = 'uploads/products/'.$imageName;
        }

        $product->update($data);
        return redirect()->route('products.index')->with('success','Produk berhasil diperbarui!');
    }

    public function destroy(Product $product)
    {
        if($product->image && file_exists(public_path($product->image))){
            unlink(public_path($product->image));
        }
        $product->delete();
        return redirect()->route('products.index')->with('success','Produk berhasil dihapus!');
    }
}
