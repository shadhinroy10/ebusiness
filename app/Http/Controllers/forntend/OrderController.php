<?php

namespace App\Http\Controllers\forntend;

use App\Models\user;
use App\Models\order;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Notification;
use App\Notifications\orderNotification;

class OrderController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($slug)
    {
        $product = Product::where ('slug',$slug)->firstOrFail();
        return view('frontend.order.index', compact('product'));
    }
    public function order(Request $request)
    {
        $order = order::create($request->all());

        $users= User::where ('is_admin',1)->get();

        $data = [
            'user_id'=> Auth::user()->id,
            'product_id' => $request->product_id,
            'order_id' => $order->id,
        ];

        foreach ($users as $user){
            Notification::send($user, new orderNotification($data));
        }



        return redirect()->route('order.confirm');
    }
    public function confirm()
    {
        return view('frontend.order.confirm');
    }
}
