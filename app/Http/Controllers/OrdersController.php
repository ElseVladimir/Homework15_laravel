<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrdersController extends Controller
{
    public function index(){

        $orders = Order::all();

        $ordersAll = $orders;

        return view('orders.index')->with(compact('ordersAll'));
    }
}
