<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

use App\Models\User;

use App\Models\Product;

use App\Models\Cart;

use App\Models\Order;



class HomeController extends Controller
{
    public function redirect()
    {
        $usertype = Auth::user()->usertype;

        if ($usertype == '1') {
            return view('admin.home');
        } else {
            $data = product::paginate(3);

            $user = auth()->user();

            $count = cart::where('phone', $user->phone)->count();

            return view('user.home', compact('data', 'count'));
        }
    }


    public function index()
    {
        if (Auth::id()) {
            return redirect('redirect');
        } else {
            $data = product::paginate(3);
            return view('user.home', compact('data'));
        }
    }

    public function search(Request $request)
    {
        $search = $request->search;

        if ($search == '') {
            $data = product::paginate(3);
            return view('user.home', compact('data'));
        }

        $data = product::where('title', 'Like', '%' . $search . '%')->get();

        return view('user.home', compact('data'));
    }

    public function addcart(Request $request, $id)
    {
        if (Auth::id()) {

            $user = auth()->user();

            $product = product::find($id);

            $cart = new cart;

            $cart->name = $user->name;
            $cart->phone = $user->phone;
            $cart->address = $user->address;
            $cart->product_title = $product->title;
            $cart->price = $product->price;
            $cart->quantity = $request->quantity;
            $cart->save();

            return redirect()->back()->with('message', 'Product Added to Cart Successfully');
        } else {
            return redirect('login');
        }
    }

    public function showcart()
    {
        $user = auth()->user();

        $cart = cart::where('phone', $user->phone)->get();

        $count = cart::where('phone', $user->phone)->count();

        return view('user.showcart', compact('count', 'cart'));
    }

    public function deletecart($id)
    {
        $data = cart::find($id);
        $data->delete();

        return redirect()->back()->with('message', 'Product Removed from Cart Successfully');
    }



    public function allbooks()
    {
        if (auth()->check()) {
            $usertype = Auth::user()->usertype;

            if ($usertype == '1') {
                return view('admin.home');
            } else {
                $data = product::paginate(3);

                $user = auth()->user();

                $count = cart::where('phone', $user->phone)->count();

                return view('user.books', compact('data', 'count'));
            }
        } else {
            // Handle the case when the user is not logged in
            $data = product::paginate(3);

            return view('user.books', compact('data'));
        }
    }

    public function about()
    {
        if (auth()->check()) {
            $usertype = Auth::user()->usertype;

            if ($usertype == '1') {
                return view('admin.home');
            } else {
                $data = product::paginate(3);

                $user = auth()->user();

                $count = cart::where('phone', $user->phone)->count();

                return view('user.about', compact('data', 'count'));
            }
        } else {
            // Handle the case when the user is not logged in
            $data = product::paginate(3);

            return view('user.about', compact('data'));
        }
    }

    public function contact()
    {
        if (auth()->check()) {
            $usertype = Auth::user()->usertype;

            if ($usertype == '1') {
                return view('admin.home');
            } else {
                $data = product::paginate(3);

                $user = auth()->user();

                $count = cart::where('phone', $user->phone)->count();

                return view('user.contact', compact('data', 'count'));
            }
        } else {
            // Handle the case when the user is not logged in
            $data = product::paginate(3);

            return view('user.contact', compact('data'));
        }
    }

    public function cash_on_delivery(Request $request)
    {
        $user = auth()->user();

        $name = $user->name;

        $phone = $user->phone;

        $address = $user->address;

        foreach ($request->productname as $key => $productname) {

            $order = new order;

            $order->product_name = $request->productname[$key];

            $order->price = $request->price[$key];

            $order->quantity = $request->quantity[$key];

            $order->name = $name;

            $order->phone = $phone;

            $order->address = $address;

            $order->status = 'not delivered';

            $order->payment_status = 'Cash On Delivery';

            $order->save();
        }

        DB::table('carts')->where('phone', $phone)->delete();

        return redirect()->back()->with('message', 'Product Ordered Successfully');
    }

    public function showorder()
    {
        $order = order::all();

        return view('user.showorder', compact('order'));
    }
}
