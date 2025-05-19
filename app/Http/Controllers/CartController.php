<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        $total = 0;
        
        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        return view('cart.index', compact('cart', 'total'));
    }

    public function add(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'sometimes|integer|min:1',
            'size' => 'sometimes|string',
            'color' => 'sometimes|string',
            'instructions' => 'sometimes|string'
        ]);

        $cart = session()->get('cart', []);
        $productId = $request->product_id;

        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += $request->quantity ?? 1;
        } else {
            $product = Product::find($productId);
            $cart[$productId] = [
                "name" => $product->name,
                "quantity" => $request->quantity ?? 1,
                "price" => $product->discount_price ?? $product->price,
                "image" => $product->image,
                "size" => $request->size,
                "color" => $request->color,
                "instructions" => $request->instructions
            ];
        }

        session()->put('cart', $cart);
        
        return response()->json([
            'success' => true,
            'message' => 'Product added to cart successfully',
            'cart_count' => count($cart)
        ]);
    }

    public function buyNow(Request $request)
    {
        $response = $this->add($request);
        
        if ($response->getData()->success) {
            return redirect()->route('cart.checkout');
        }
        
        return back()->with('error', 'Could not add product to cart');
    }

    public function remove($id)
    {
        $cart = session()->get('cart');
        
        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return back()->with('success', 'Product removed from cart');
    }

    public function checkout()
    {
        $cart = session()->get('cart', []);
        
        if (empty($cart)) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty');
        }

        $total = 0;
        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        return view('cart.checkout', compact('cart', 'total'));
    }

    public function process(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'address' => 'required|string',
            'payment_method' => 'required|string'
        ]);

        // Process order here (save to database, etc.)
        
        // Clear cart
        session()->forget('cart');

        return redirect()->route('home')->with('success', 'Order placed successfully!');
    }
}