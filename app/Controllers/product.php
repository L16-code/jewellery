<?php
namespace App\Controllers;
use App\Models\SubcategoryModel;
class product extends BaseController
{
    public function products()
    {
        $name = $this->request->getVar("pname");
        // $image = $this->request->getFile("image");
        $price = $this->request->getVar("price");
        $qty = $this->request->getVar("qty");
        $productModel = new \App\Models\ProductModel();
        $file = $this->request->getFile('image');
        if ($file->isValid() && !$file->hasMoved()) {
            $imageName = $file->getName();
            $file->move('public/uploads/', $imageName);
        }
        $values = [
            'product_name' => $name,
            'product_img' => $imageName,
            'product_price' => $price,
            'product_qty' => $qty,
        ];
        // $productModel = new \App\Models\ProductModel();
        $query = $productModel->insert($values);
        return redirect()->to('product-upload')->with('status', 'product and image has been successfully uploaded');
    }

}
