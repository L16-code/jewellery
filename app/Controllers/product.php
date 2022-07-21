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
        $category = $this->request->getVar("categories");
        $subcategory = $this->request->getVar("subcategories");

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
            'category' => $category,
            'subcategory' => $subcategory,

        ];
        // $productModel = new \App\Models\ProductModel();
        $query = $productModel->insert($values);
        return redirect()->to('product-upload')->with('status', 'product and image has been successfully uploaded');
    }

    // public function productdisplay()
    // {
    //     // $product = new \App\Models\ProductModel();
    //     // $data = $product->findAll();
    //     // return view('admin/pages/display', ['name' => $data]);
        
    // }

}
