<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        $orders = Order::all();
        return view('admin.index',compact('customers','orders'));
    }

}
