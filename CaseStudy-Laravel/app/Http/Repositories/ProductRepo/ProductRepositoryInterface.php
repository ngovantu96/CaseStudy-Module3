<?php
namespace App\Http\Repositories\ProductRepo;


use App\Http\Repositories\RepositoryInterface;

interface ProductRepositoryInterface extends RepositoryInterface
{
    public function store($request);
    public function update($request,$obj);
    public function getCategory();
    public function getProductNew();
    public function getCakeBaker();
    public function getBirthDay();
    public function getChopped();



}
