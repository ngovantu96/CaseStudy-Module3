<?php

namespace App\Models;

use App\Http\Controllers\StatusOrderConst;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    public function customer()
    {
        return $this->belongsTo(Customer::class,'customer_id');
    }
    public function products()
    {
        return $this->belongsToMany(Product::class,'order_details','order_id','product_id')->withPivot(['quantity','price','total']);
    }

    public function status()
    {

        if ($this->status == StatusOrderConst::WAITING) {
            return "Đang Chờ Xử Lý";
        } elseif ($this->status == StatusOrderConst::SHIPPING) {
            return "Đang Giao Hàng";
        } elseif ($this->status == StatusOrderConst::SUCCESS) {
            return "Đã Giao Hàng ";
        } else {
            return "Đã Hủy Đơn Hàng";
        }
    }
    public function Badge()
    {
        if($this->status == StatusOrderConst::WAITING){
            return "badge-secondary";
        }elseif ($this->status == StatusOrderConst::SHIPPING){
            return "badge-info";
        }elseif ($this->status == StatusOrderConst::SUCCESS){
            return "badge-success";
        }else{
            return "badge-danger";
        }
    }
}
