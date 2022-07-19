<?php
namespace App\Controllers;
use App\Models\SubcategoryModel;
class Category extends BaseController
{
    public function category()
    {
        $name = $this->request->getVar("category");
        $subname = $this->request->getVar("subcategory");
        $values=[
                    'category_name'=> $name,
                    'subcategory_name'=> $subname,
                ];
        $category = new \App\Models\CategoryModel();
        $query = $category->insert($values);
        if (!$query) {
            
            return redirect()->back();
        } else {
            return redirect('category');
        }
    }
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