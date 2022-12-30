<?php

namespace App\Http\Controllers\Backend;

use Auth;
use App\Models\Order;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function show($id)
    {
        $notfication = Auth::user()->notifications->where('id', $id)->first();

        if ($notfication)
        {
            $notfication->markAsRead();
            $order = Order::where('id',$notfication->data['data']['product_id'])->first();
            return redirect()->route('admin.order.show', $order->id);
        }else{
            return back();
        }
    }
}
