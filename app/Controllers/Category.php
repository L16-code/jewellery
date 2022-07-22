<?php

namespace App\Controllers;

use App\Models\SubcategoryModel;

class Category extends BaseController
{
    public function Subcategory()
    {
        $category = new \App\Models\CategoryModel();
        $name = $this->request->getVar("category");

        $values = [
            'category_name' => $name,
        ];
        $query = $category->insert($values);
        $subcategory = new \App\Models\SubcategoryModel();
        $subname = $this->request->getVar("subcategory");
        $categoryid = $this->request->getVar("category");

        $values1 = [
            'subcategory_name' => $subname,
            'category_id' => $categoryid
        ];
        $query = $subcategory->insert($values1);

        if (!$query) {

            return redirect()->back();
        } else {
            return redirect('subcategory');
        }
        
    }
    public function category()
    {
        $category = new \App\Models\CategoryModel();
        $name = $this->request->getVar("category");

        $values = [
            'category_name' => $name,
        ];
        $query = $category->insert($values);
        if (!$query) {

            return redirect()->back();
        } else {
            return redirect('category');
        }
    }
    // public function displaycategory()
    // {
    //     $category = new \App\Models\CategoryModel();

    // }
    // public function subCategory()
    // {
    //     $name = $this->request->getVar("subname");
    //     $category = new SubcategoryModel();
    //     $query = $category->insert(['subname' => $name]);
    //     if (!$query) {
    //         // return redirect()->back()->with('fail','Something wrong');
    //         // return view('user/login/registration'); 
    //         return redirect()->back();
    //     } else {
    //         return redirect('category');
    //         // return view('user/login/login'); 
    //     }
    // }
}
