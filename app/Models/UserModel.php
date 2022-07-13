<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'customer';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType = 'array';
   // protected $useSoftDeletes = true;

    protected $allowedFields = ['customer_name', 'customer_email','customer_password', 'customer_username'];
}