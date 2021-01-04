<?php
namespace App\Http\Repositories\CustomerRepo;


use App\Http\Repositories\BaseRepository;
use App\Models\Customer;
use http\Env\Request;
use Illuminate\Cache\Repository;
use Illuminate\Contracts\Cache\Store;

class CustomerRepository extends BaseRepository implements CustomerRepositoryInterface
{
    public function __construct(Customer $model)
    {
        parent::__construct($model);
    }
    public function create($request)
    {
        $this->model->name = $request->name;
        $this->model->phone = $request->phone;
        $this->model->address = $request->address;
        $this->model->email = $request->email;
        $this->model->save();

    }
    public function update($request , $obj)
    {
        $obj->name = $request->name;
        $obj->phone = $request->phone;
        $obj->address = $request->address;
        $obj->email = $request->email;
        $obj->save();
    }
}
