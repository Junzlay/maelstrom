<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        $products = Service::paginate(9);

        return view('products.index', compact('products'));
    }

    ############ ADD TO CART FUNCTION ###################

    function addToCart(Request $req)
    {

        if (Auth::check()) {

            $cart['user_id'] = $req->user_id;
            $cart['product_id'] = $req->product_id;

            $form = Cart::create($cart);

            if (!$form) {

                return redirect()->back()->with('error', 'Not logged in.');

            } else {

                return redirect()->back()->with('success', 'Orders added to cart');
            }

        } else {
            return redirect('/maglogin');
        }

    }

    function cartList()
    {

        if (Auth::check()) {

            $user_id = Auth::id();
            $products = DB::table('cart')
                ->join('products', 'cart.product_id', '=', 'products.id')
                ->where('cart.user_id', $user_id)
                ->select('products.*', 'cart.id as cart_id')
                ->get();

            $total = DB::table('cart')
                ->join('products', 'cart.product_id', '=', 'products.id')
                ->where('cart.user_id', $user_id)
                ->sum('products.price');

            return view('cart', ['products' => $products, 'total' => $total])->with('products', $products);

        } else {
            return redirect('/maglogin');
        }
    }

    function removeCart($id)
    {

        Cart::destroy($id);
        return redirect('cart');
    }

    function orderNow()
    {

        $user_id = Auth::id();
        $allCart = Cart::where('user_id', $user_id)->get();


        foreach ($allCart as $cart) {
            $order = new Order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status = "pending";
            $order->save();
            Cart::where('user_id', $user_id)->delete();
        }

        return redirect('product');
    }

    function myOrders()
    {

        $user_id = Auth::id();
        $orders = DB::table('orders')
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->where('orders.user_id', $user_id)
            ->get();

        $orderstotal = DB::table('orders')
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->where('orders.user_id', $user_id)
            ->sum('products.price');

        // $ordersbydate = DB::table('orders')
        //     ->select('*')
        //     ->where('user_id','=',$user_id)
        //     ->where('created_at','=', '2023-09-27')
        //     ->get();

        return view('profile._purchasehistory', ['orders' => $orders, 'orderstotal' => $orderstotal])->with('orders', $orders);
    }

}