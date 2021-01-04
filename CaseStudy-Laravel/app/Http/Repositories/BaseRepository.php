<?php
namespace App\Http\Repositories;


use Illuminate\Database\Eloquent\Model;

class BaseRepository implements RepositoryInterface {
    protected $model;
    public function __construct(Model $model){
        $this->model = $model;
    }
    public function getAll()
    {
        return $this->model->all();
    }
    public function findById($id)
    {
        return $this->model->where('id',$id)->first();
    }
    public function delete($id){
        return $this->model->where('id',$id)->delete();
    }
}
