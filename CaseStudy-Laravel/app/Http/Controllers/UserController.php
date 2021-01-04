<?php

namespace App\Http\Controllers;

use App\Http\Repositories\UserRepo\UserRepository;
use App\Http\Repositories\UserRepo\UserRepositoryInterface;
use App\Http\Requests\UserRequest;
use App\Models\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $userRepository;
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    public function index(){
        $users = $this->userRepository->getAll();
        return view('admin.user.list',compact('users'));
    }
    public function showCreate(){
        $roles = Role::all();
        return view('admin.user.create',compact('roles'));
    }
    public function store(UserRequest $request){
        $this->userRepository->create($request);
        return redirect()->route('user.list')->with('add','Thêm mới thành công');
    }
    public function edit($id){
        $user = $this->userRepository->findById($id);
        $roles = Role::all();
        return view('admin.user.edit',compact('user','roles'));
    }
    public function update(UserRequest $request, $id){
        $user = $this->userRepository->findById($id);
        $this->userRepository->update($request, $user);
        return redirect()->route('user.list')->with('update','Cập nhật thành công');
    }
    public function delete($id){
        $this->userRepository->delete($id);
        return redirect()->route('user.list')->with('add','Xóa Thành Công.!!');

    }
}
