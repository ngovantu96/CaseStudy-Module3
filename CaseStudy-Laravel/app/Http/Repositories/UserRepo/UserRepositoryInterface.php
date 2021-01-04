<?php
namespace App\Http\Repositories\UserRepo;


use App\Http\Repositories\RepositoryInterface;

interface UserRepositoryInterface extends RepositoryInterface
{
    public function create($request);
    public function update($request,$obj);
}
