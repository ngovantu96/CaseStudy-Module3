<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::orderBy('id','DESC')->get();
        return view('admin.order.list',compact('orders'));
    }
    public function orderDetails($id)
    {
        $orders =  Order::where('id',$id)->get();
       $orderDetails = DB::table('order_details')
           ->join('products','products.id','=','order_details.product_id')
           ->select('order_details.quantity','order_details.price','order_details.total','products.name')
           ->where('order_details.order_id',$id)
           ->get();
        return view('admin.order.order-detail',compact('orders','orderDetails'));
    }
    public function orderDelete($id)
    {
        DB::table('order_details')->where('order_id', '=', $id)->delete();
        $orderDelete = Order::FindOrFail($id);
        $orderDelete->delete();
        return redirect()->route('order.list')->with('delete','xóa thành công.');
    }

    public function waiting()
    {
        $orders = Order::where("status", 1)->get();
        return view('admin.order.list',compact('orders'));
    }
    public function ship()
    {
        $orders = Order::where("status", 2)->get();
        return view('admin.order.list',compact('orders'));
    }
    public function success()
    {
        $orders = Order::where("status", 3)->get();
        return view('admin.order.list',compact('orders'));
    }
    public function cancel()
    {
        $orders = Order::where("status", 4)->get();
        return view('admin.order.list',compact('orders'));
    }

    public function statusOrder(Request $request,$id)
    {
        $order = Order::findOrFail($id);
        $order->status = $request->name;
        if($order->status == StatusOrderConst::SUCCESS)
        {
            foreach ($order->products as $item) {
                $product = Product::findOrFail($item->id);
                $product->quantity -= $item->pivot->quantity;
                $product->save();
            }
        }elseif ($order->status == StatusOrderConst::CANCEL)
        {
            foreach ($order->products as $item) {
                $product = Product::findOrFail($item->id);
                $product->quantity += $item->pivot->quantity;
                $product->save();
            }

        }
        $order->save();
        return redirect()->route('order.list')->with('update','Cập nhật thành công');
    }


}
