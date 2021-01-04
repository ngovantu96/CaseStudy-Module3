<?php

namespace App\Http\Controllers;

use App\Http\Repositories\ProductRepo\ProductRepository;
use App\Http\Repositories\ProductRepo\ProductRepositoryInterface;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $homePoductRepository;
    public function __construct(ProductRepositoryInterface $homePoductRepository)
    {
        $this->homePoductRepository = $homePoductRepository;
    }
    public function getProductNew(){
        $productNews = $this->homePoductRepository->getProductNew();
        $categories = Category::all();
        return view('Cakebaker.index',compact('productNews','categories'));
    }

    public function viewShop()
    {
        return view('Cakebaker.shop');
    }
    public function getCakeBaker(){
        $cakeBakers = $this->homePoductRepository->getCakeBaker();
        return view('Cakebaker.cake-baker',compact('cakeBakers'));
    }
    public function getBirthDay(){
        $cakeBirthDays = $this->homePoductRepository->getBirthDay();
        return view('Cakebaker.birth-day',compact('cakeBirthDays'));
    }
    public function getChopped(){
        $cakeCoppeds = $this->homePoductRepository->getChopped();
        return view('Cakebaker.chopped',compact('cakeCoppeds'));
    }
    public function productDetail($id){
        $product = $this->homePoductRepository->findById($id);
        $cakeBakers= $this->homePoductRepository->getCakeBaker();
        return view('Cakebaker.product-detail',compact('product','cakeBakers'));
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $results = Product::where('name','like',"%$search%")->get();
        return view('Cakebaker.search',compact('results'));   
    }
}
