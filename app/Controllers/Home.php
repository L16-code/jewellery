<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        //return view('index');
        
        $Userlist = new \App\Models\UserModel;
        $data = $Userlist->findAll(); 
        return view('pages/index',['name' => $data]);
    }
    public function about()
    {
        return view('pages/'."about");
    }
    public function contact()
    {
        return view('pages/'."contact");
    }
    public function checkout()
    {
        return view('pages/'."checkout");
    }
    public function cart()
    {
        return view('pages/'."cart");
    }
    public function index_2()
    {
        return view('pages/'."index_2");
    }
    public function news()
    {
        return view('pages/'."news");
    }
    public function shop()
    {
        return view('pages/'."shop");
    }
    public function single_news()
    {
        return view('pages/'."single-news");
    }
    public function single_product()
    {
        return view('pages/'."single-product");
    }
}
