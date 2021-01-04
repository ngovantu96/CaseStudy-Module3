<?php
namespace App\Http\Repositories;

use Exception;
use Illuminate\Database\Eloquent\Model;
interface RepositoryInterface{
    public function getAll();
    public function findById(int $id);
    public function delete($id);
}
