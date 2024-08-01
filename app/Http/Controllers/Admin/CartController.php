<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $orders = Cart::with('user')->get();
        return view('admin.carts.index', compact('carts'));
    }

    public function show($id)
    {
        $cart = Cart::with('user')->findOrFail($id);
        return view('admin.carts.show', compact('cart'));
    }

    public function update(Request $request, $id)
    {
        $cart = Cart::findOrFail($id);

        // Validate that the status is one of the expected values
        $request->validate([
            'status' => 'required|in:pending,completed,shipped'
        ]);

        $cart->update(['status' => $request->status]);

        return redirect()->route('admin.carts.index')->with('success', 'cart status updated successfully!');
    }

    public function destroy($id)
    {
        $cart = Cart::findOrFail($id);
        $cart->delete();

        return redirect()->route('admin.carts.index')->with('success', 'cart deleted successfully!');
    }
}
