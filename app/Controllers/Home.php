<?php

namespace App\Controllers;
use App\Models\UserModel;

class Home extends BaseController
{
    public function index()
    {
        //return view('index');
        
        $Userlist = new UserModel;
        $data = $Userlist->findAll(); 
        return view('user/pages/index',['name' => $data]);

    }
    public function about()
    {
        return view('user/pages/'."about");
    }
    public function contact()
    {
        return view('user/pages/'."contact");
    }
    public function checkout()
    {
        return view('user/pages/'."checkout");
    }
    public function cart()
    {
        return view('user/pages/'."cart");
    }
    public function index_2()
    {
        return view('user/pages/'."index_2");
    }
    public function news()
    {
        return view('user/pages/'."news");
    }
    public function shop()
    {
        return view('user/pages/'."shop");
    }
    public function single_news()
    {
        return view('user/pages/'."single-news");
    }
    public function single_product()
    {
        return view('user/pages/'."single-product");
    }
    public function login()
    {
        return view('user/pages/'."login");
    }
    public function register()
    {
        return view('user/pages/'."register");
    }
}
