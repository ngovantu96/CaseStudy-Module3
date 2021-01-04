<?php
namespace App\Http\Repositories\RoleRepo;

use App\Http\Repositories\BaseRepository;
use App\Models\Role;
use Illuminate\Database\Eloquent\Model;

class RoleRepository extends BaseRepository implements RoleRepositoryInterface
{
    public function __construct(Role $model)
    {
        parent::__construct($model);
    }
    public function create($request){
        $this->model->name = $request->name;
        $this->model->save();
    }
    public function update($request, $obj){
        $obj->model->name = $request->name;
        $obj->model->save();
    }
}
