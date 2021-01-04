<?php

namespace App\Http\Controllers;


use App\Http\Repositories\CategoryRepo\CategoryRepositoryInterface;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $categoryRepository;
    public function  __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }
    public function index(){
        $categories = $this->categoryRepository->getAll();
        return view('admin.category.list',compact('categories'));
    }
    public function store(CategoryRequest $requets){
        $this->categoryRepository->create($requets);
        return redirect()->route('category.list')->with('add','Thêm Mới Thành Công !');
    }
    public function edit($id){
        $category = $this->categoryRepository->findById($id);
        return view('category.edit',compact('category'));
    }
    public function update(CategoryRequest $requets, $id){
        $category = $this->categoryRepository->findById($id);
        $this->categoryRepository->update($requets, $category);
        return redirect()->route('category.list')->with('update','Cập Nhật Thành Công !');
    }
    public function delete($id){
        $this->categoryRepository->delete($id);
        return redirect()->route('category.list')->with('delete','Xóa Thành Công !');
    }
}
