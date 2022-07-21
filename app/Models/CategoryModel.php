<?php
namespace App\Models;
use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table = 'category';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
   // protected $useSoftDeletes = true;

    protected $allowedFields = ['category_name'];
}