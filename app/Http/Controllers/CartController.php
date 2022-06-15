<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Variant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $title = 'Shop';
        $cartitems = CartItem::where('user_id', Auth::user()->id)->get();

        return view('shop-cart', compact('title', 'cartitems'));
    }

    public function addtocart($id)
    {
        $cartitems = CartItem::where('user_id', Auth::user()->id)->get();

        $any = $cartitems->where('variant_id', $id)->first();
        if ($any === null) {
            $item = new CartItem();
            $item->user()->associate(Auth::user());
            $item->variant()->associate(Variant::find($id));
            $item->quantity = 1;
            $item->subtotal = Variant::find($id)->product->price;
            $item->save();
        } else {
            $any->quantity = $any->quantity + 1;
            $any->subtotal = Variant::find($id)->product->price *  $any->quantity;
            $any->save();
        }

        $cartitems = CartItem::where('user_id', Auth::user()->id)->get();
        return response()->json([
            'nitem' => $cartitems->count(),
            'total' => $cartitems->sum('subtotal'),
        ]);
    }
}
