<?php

namespace App\Http\Repositories\CategoryRepo;


use App\Http\Repositories\BaseRepository;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
{
    public function __construct(Category $model)
    {
        parent::__construct($model);
    }
    public function create($request){
        $this->model->name = $request->name;
        $this->model->save();
    }
    public function update($request,$obj){
        $obj->name = $request->name;
        $obj->save();
    }
}
