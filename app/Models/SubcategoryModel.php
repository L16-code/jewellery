<?php
namespace App\Models;
use CodeIgniter\Model;

class SubcategoryModel extends Model
{
    protected $table = 'subcategory';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
   // protected $useSoftDeletes = true;

    protected $allowedFields = ['subcategory_name','category_id'];
}