<?php

namespace App\Controllers;
//use App\Models\UserModel;

class Admin extends BaseController
{
    public function index()
    {
        //return view('index');
        
       // $Userlist = new UserModel;
        //$data = $Userlist->findAll(); 
        return view('admin/pages/index');

    }
    public function login()
    {
        //var_dump($_POST);
        //return view('admin/pages/pages-login');
        return view('admin/pages/'."pages-login");
    }
    public function apexcharts()
    {
        return view('admin/pages/charts-apexcharts');
    }
    public function chartjs()
    {
        return view('admin/pages/charts-chartjs');
    }
    public function echarts()
    {
        return view('admin/pages/charts-echarts');
    }
    // public function accordion()
    // {
    //     return view('admin/pages/components-accordion');

    // }
    // public function alerts()
    // {
    //     return view('admin/pages/components-alerts');

    // }
    // public function badges()
    // {
    //     return view('admin/pages/components-badges');

    // }
    // public function breadcrumbs()
    // {
    //     return view('admin/pages/components-breadcrumbs');

    // }
    // public function buttons()
    // {
    //     return view('admin/pages/components-buttons');

    // }
    // public function cards()
    // {
    //     return view('admin/pages/components-cards');

    // }
    // public function carousel()
    // {
    //     return view('admin/pages/components-carousel');

    // }
    // public function group()
    // {
    //     return view('admin/pages/components-list-group');

    // }
    // public function modal()
    // {
    //     return view('admin/pages/components-modal');

    // }
    // public function pagination()
    // {
    //     return view('admin/pages/components-pagination');

    // }
    // public function progress()
    // {
    //     return view('admin/pages/components-progress');

    // }
    // public function spinners()
    // {
    //     return view('admin/pages/'."components-spinners");

    // }
    // public function tabs()
    // {
    //     return view('admin/pages/'."components-tabs");

    // }
    // public function tooltips()
    // {
    //     return view('admin/pages/'."components-tooltips");

    // }
    // public function editors()
    // {
    //     return view('admin/pages/'."froms-editors");

    // }
    // public function elements()
    // {
    //     return view('admin/pages/'."froms-elements");

    // }
    // public function layouts()
    // {
    //     return view('admin/pages/'."froms-layouts");

    // }
    // public function validation()
    // {
    //     return view('admin/pages/'."froms-validation");

    // }
    // public function bootstrap()
    // {
    //     return view('admin/pages/'."icons-bootstrap");

    // }
    // public function boxicons()
    // {
    //     return view('admin/pages/'."icons-boxicons");

    // }
    // public function remix()
    // {
    //     return view('admin/pages/'."icons-remix");

    // }
    // public function blank()
    // {
    //     return view('admin/pages/'."pages-blank");

    // }
    public function contact()
    {
        return view('admin/pages/'."pages-contact");

    }
    public function error()
    {
        return view('admin/pages/'."pages-error-404");

    }
    public function faq()
    {
        return view('admin/pages/'."pages-faq");

    }
    public function register()
    {
        return view('admin/pages/'."pages-register");

    }
    public function data()
    {
        return view('admin/pages/tables-data');

    }
    public function general()
    {
        return view('admin/pages/tables-general');

    }
    public function profile()
    {
        return view('admin/pages/users-profile');

    }
    public function product()
    {
        $category = new \App\Models\CategoryModel();
        $data = $category->findAll();
        $subcategory = new \App\Models\SubcategoryModel();
        $data1 = $subcategory->findAll();
        return view('admin/pages/product-upload', ['name' => $data,'subname' => $data1]);
        // return view('admin/pages/product-upload', ['subname' => $data1]);
    }
    public function display()
    {
        $product = new \App\Models\ProductModel();
        $data = $product->findAll();
        // return view('admin/pages/display', ['name' => $data]);
        // $category = new \App\Models\CategoryModel();
        // $data1 = $category->findAll();
        // $subcategory = new \App\Models\SubcategoryModel();
        // $data2 = $subcategory->findAll();
        // return view('admin/pages/display', ['name2' => $data]);
        return view('admin/pages/display', ['name' => $data]);


    }
    // public function session()
    // {
    //     return view('admin/pages/checksession');

    // }

    public function category()
    {
        return view('admin/pages/category');

    }
    public function subcategory()
    {
        $category = new \App\Models\CategoryModel();
        $data = $category->findAll();
        return view('admin/pages/subcategory', ['name' => $data]);

    }

}
