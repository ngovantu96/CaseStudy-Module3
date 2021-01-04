<?php
namespace App\Http\Repositories\UserRepo;


use App\Http\Repositories\BaseRepository;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    public function __construct(User $model)
    {
        parent::__construct($model);
    }
    public function create($request){
        $this->model->name = $request->name;
        $this->model->email = $request->email;
        $this->model->password = Hash::make($request->password);
        $this->model->username = $request->username;
        $this->model->phone = $request->phone;
        $this->model->address = $request->address;
        $this->model->image = $request->image;
        $this->model->role_id = $request->role;

        $this->model->save();
    }
    public function update($request, $obj){
        $obj->name = $request->name;
        $obj->email = $request->email;
        $obj->password = Hash::make($request->password);
        $obj->username = $request->username;
        $obj->phone = $request->phone;
        $obj->address = $request->address;
        $obj->image = $request->image;
        $obj->role_id = $request->role;

        $obj->save();
    }
}
