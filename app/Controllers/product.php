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
    public function edit($id = null)
    {
        // echo $id;
        $category = new \App\Models\CategoryModel();
        $data2 = $category->findAll();
        $subcategory = new \App\Models\SubcategoryModel();
        $data1 = $subcategory->findAll();
        // return view('admin/pages/product-upload', ['name' => $data,'subname' => $data1]);
        $product = new \App\Models\ProductModel();
        $data =$product->find($id);
        return view('admin/pages/edit',['product'=>$data,'name' => $data2,'subname' => $data1]);
    }
    public function update($id = null)
    {
        $name = $this->request->getVar("pname");
        $price = $this->request->getVar("price");
        $qty = $this->request->getVar("qty");
        $category = $this->request->getVar("categories");
        $subcategory = $this->request->getVar("subcategories");

        $product = new \App\Models\ProductModel();
        $file = $this->request->getFile('image');
        if ($file->isValid() && !$file->hasMoved()) {
        $imageName = $file->getName();
        $file->move('public/uploads/', $imageName);
        }
        $data = [
            'product_name' => $name,
            'product_img' => $imageName,
            'product_price' => $price,
            'product_qty' => $qty,
            'category' => $category,
            'subcategory' => $subcategory,
        ];
        $product->update($id,$data);
        return redirect()->to('display');
        
    }
    public function delete($id)
    {
        $product = new \App\Models\ProductModel();
        $product->where('id',$id)->delete();
        
        return redirect()->to('display');
        unlink("");
        // $product->update($id,$data);
    }
    // public function productdisplay()
    // {
    //     // $product = new \App\Models\ProductModel();
    //     // $data = $product->findAll();
    //     // return view('admin/pages/display', ['name' => $data]);
        
    // }



    

}
