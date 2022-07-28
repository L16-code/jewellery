<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use Config\App;
class Register extends BaseController
{
    // public function Register(){
    //     $db=\Config\Database::connect();
    //     $uname=$this->request->getVar("username");
    //     $pass=$this->request->getVar("password");
    //     $name=$this->request->getVar("name");
    //     $email=$this->request->getVar("email");

        
    //     $sql ='INSERT INTO customer(customer_name,customer_email,customer_password,customer_username) VALUES (?,?,?,?)';
    //     $db->query($sql,[$name,$email,$pass,$uname]);
    //     $db->close();
    // }
    public function userSignup()
    {
        // var_dump($_POST);
        // die();
    //     helper(['register', 'url']);
    //     if (!$this->validate([
    //         'username' => ['label' => 'Username', 'rules' => 'required'],
    //         'password' => ['label' => 'Password', 'rules' => 'required|min_length[5]'],
    //     ])) {
    //         return view('user/pages/'."register", [
    //             'validation' => $this->validator,
    //         ]);
    //     }
    //     $name = $this->request->getVar("name");
    //     $username = $this->request->getVar("username");
    //     $email = $this->request->getVar("email");
    //     $password = $this->request->getVar("password");

    //     $values = [
    //         'customer_name' => $name,
    //         'customer_email' => $email,
    //         'customer_password' => md5($password),
    //         'customer_username' => $username,
    //     ];

    //     $userModel = new \App\Models\UserModel();
    //     $query = $userModel->insert($values);
    //     if(!$query){
    //         // return redirect()->back()->with('fail','Something wrong');
    //         // return view('user/login/registration'); 
    //         return redirect()->back();
    //     }else{
    //         // return redirect('index');
    //         //echo " successfully registered ";
    //         return view('user/pages/login'); 
    //     }
    //     // return view('user/login/' . "registration");
    // }
    $name = $this->request->getVar("name");
        $username = $this->request->getVar("username");
        $email = $this->request->getVar("email");
        $password = $this->request->getVar("password");

        $values = [
            'customer_name' => $name,
            'customer_email' => $email,
            'customer_password' => md5($password),
            'customer_username' => $username,
        ];
        $userModel = new \App\Models\UserModel();
        $query = $userModel->insert($values);
        if (!$query) {
            // return redirect()->back()->with('fail','Something wrong');
            // return view('user/login/registration'); 
            return redirect()->back();
        } else {
            return redirect('login');
            // return view('user/login/login'); 
        }
    }
}
?>