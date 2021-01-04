<?php
namespace App\Http\Repositories\CustomerRepo;

use App\Http\Repositories\RepositoryInterface;

interface CustomerRepositoryInterface extends RepositoryInterface
{
    public function create($request);

    public function update($request, $obj);
}
