<?php 
namespace App\Http\Repositories\BlogRepo;

interface BlogRepositoryInterface extends RepositoryInterface
{
    public function create();
    public function update();
}