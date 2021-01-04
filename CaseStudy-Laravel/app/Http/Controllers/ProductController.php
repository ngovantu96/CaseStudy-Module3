<?php

namespace App\Http\Controllers;

use App\Http\Repositories\ProductRepo\ProductRepositoryInterface;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $productRepository;
    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }
    public function index(){
        $products = $this->productRepository->getAll();
        return view('admin.product.list',compact('products'));
    }
    public function create(){
        $categories = Category::all();
        return view('admin.product.create',compact('categories'));
    }
    public function store(ProductRequest $request)
    {
        $this->productRepository->store($request);
        return redirect()->route('product.list')->with('add','Thêm mới thành công');
    }
    public function edit($id)
    {
        $categories = Category::all();
        $product = $this->productRepository->findById($id);
        return view('admin.product.edit',compact('product','categories'));
    }
    public function update(ProductRequest $request, $id)
    {
        $product = $this->productRepository->findById($id);
        $this->productRepository->update($request,$product);
        return redirect()->route('product.list')->with('update','Cập Nhật thành công');;
    }
    public function delete($id){
        $this->productRepository->delete($id);
        return redirect()->route('product.list')->with('delete','Xóa thành công');;
    }


}
