<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ShopController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.shop.index', compact('products'));
    }

    public function create()
    {
        return view('admin.shop.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = $request->file('image')->store('products', 'public');

        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.shop.index')->with('success', 'Product added successfully');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.shop.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $product = Product::findOrFail($id);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
            $product->update([
                'name' => $request->name,
                'price' => $request->price,
                'image' => $imagePath,
            ]);
        } else {
            $product->update([
                'name' => $request->name,
                'price' => $request->price,
            ]);
        }

        return redirect()->route('admin.shop.index')->with('success', 'Product updated successfully');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('admin.shop.index')->with('success', 'Product deleted successfully');
    }
}
