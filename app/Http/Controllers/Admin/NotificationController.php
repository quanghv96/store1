<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notification;
use App\Order;
use App\Events\OrderEvent;

class NotificationController extends Controller
{
    public function view($id){
    	$not = Notification::findOrFail($id);
        if ($not->status == 0) {
        	$not->update([
        		'status' => 1
        	]);
            event( new OrderEvent('false', $id));
        }
    	$order = Order::findOrFail($not->id_order);
    	
    	return redirect()->route('order.detail', ['id' => $order->id]);

    }

    public function viewAll()
    {
    	if (Notification::getNotifNew()->count() > 0) {
            event( new OrderEvent('true', null));
        }
        Notification::getNotifNew()->update([
    		'status' => 1
    	]);

    	return redirect()->route('order.index'); 
    }
}
