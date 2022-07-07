<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table ='product';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
   // protected $useSoftDeletes = true;

  //  protected $allowedFields = ['product_name', 'product_dec','product_img1','product_img2','product_img3','product_price','product_stock];
}