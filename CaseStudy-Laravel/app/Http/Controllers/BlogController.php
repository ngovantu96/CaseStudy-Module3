<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $blogRepository;
    public function __construct(BlogRepositoryInterface $blogRepository)
    {
        $this->blogRepository = $blogRepository;
    }
    public function index()
    {
        return view('admin.blog.list');
    }
    public function showCreate()
    {
        return view('admin.blog.create');
    }
    public function store(Request $request)
    {
        $this->blogRepository->create($request);
        return redirect()->route('blog.list')->with('add','thêm mới thành công');
    }
    public function edit($id)
    {
        $blog = $this->blogRepository->findById($id);
        return view('admin.blog.edit',compact('blog'));
    }
    public function update(Request $request, $id)
    {
        $blog = $this->blogRepository->findById($id);
        $this->blogRepository->update($request,$blog);
        return redirect()->route('blog.list')->with('update','cập nhật thành công'); 
    }
    public function delete($id)
    {
        $this->blogRepository->delete($id);
        return redirect()->route('blog.list')->with('delete','xóa thành công'); 
    }
}
