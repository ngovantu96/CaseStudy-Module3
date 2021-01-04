<?php
namespace App\Http\Repositories\RoleRepo;

use App\Http\Repositories\RepositoryInterface;

interface RoleRepositoryInterface extends RepositoryInterface
{
    public function create($request);
    public function update($request,$obj);
}
