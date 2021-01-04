<?php

namespace App\Models;

use App\Http\Controllers\StatusOrderConst;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function orders()
    {
        return $this->belongsToMany(Order::class,'order_details','product_id','order_id')
            ->withPivot(['quantity','price','total']);
    }


}
