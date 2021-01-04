<?php
namespace App\Http\Repositories\BlogRepo;

class BlogRepository extends BaseRepository implements BlogRepositoryInterface
{
    public function __construct(Blog $model){
        parent::__construct($model);
    }
    public function create($request){
        $this->model->name = $request->name;
        $this->model->title = $request->title;
        $this->model->save();
    }
    public function update($request,$obj){
        $obj->name = $request->name;
        $obj->title = $request->title;
        $obj->save();
}