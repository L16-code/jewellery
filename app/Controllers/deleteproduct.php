<?php

namespace App\Controllers;
//use App\Models\UserModel;

class Admin extends BaseController
{
    public function delete_product()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $db = new \App\Models\ProductModel();
            $sku = $_POST["id"];
            $db->where('id', $sku)->delete();
            return redirect()->back();
        }
    }
    
}