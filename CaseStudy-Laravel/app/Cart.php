<?php
namespace App;

class Cart {
    public $products = [];
    public $totalPrice = 0;
    public $totalQuanty = 0;

    public function __construct($cart)
    {
        if ($cart) {
            $this->products = $cart->products;
            $this->totalPrice = $cart->totalPrice;
            $this->totalQuanty = $cart->totalQuanty;
        }
    }
    public function AddCart($product, $id){
        $newProduct =['qty'=>0, 'price'=>$product->price, 'productInfo'=>$product];
        if($this->products){
            if(array_key_exists($id,$this->products)){
                $newProduct = $this->products[$id];
            }
        }
        $newProduct['qty']++;
        $newProduct['price'] = $newProduct['qty'] * $product->price;
        $this->products[$id] = $newProduct;
        $this->totalPrice += $product->price;
        $this->totalQuanty++;
    }
    public function DeleteCart($id){
        $this->totalQuanty -= $this->products[$id]['qty'];
        $this->totalPrice -= $this->products[$id]['price'];
        unset($this->products[$id]);
    }
    public function MinusCart($product,$id){

        $newProduct = ['qty'=>0, 'price'=>$product->price, 'productInfo'=>$product];
        if($this->products){
            if(array_key_exists($id,$this->products)){
                $newProduct = $this->products[$id];
            }
        }
        if($newProduct['qty']>1){
            $newProduct['qty']--;
            $newProduct['price'] = $newProduct['qty'] * $product->price;
            $this->products[$id] = $newProduct;
            $this->totalPrice -= $product->price;
            $this->totalQuanty--;
        }else{
            $newProduct['qty'] = 1;
        }


    }
}
