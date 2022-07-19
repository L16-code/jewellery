<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use Config\App;
class adminregister extends BaseController
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
    public function register()
    {
        // var_dump($_POST);
        // die();
        helper(['register', 'url']);
        if (!$this->validate([
            'username' => ['label' => 'Username', 'rules' => 'required'],
            'password' => ['label' => 'Password', 'rules' => 'required|min_length[10]|alpha_numeric_punct'],
        ])) {
            return view('admin/pages/'."pages-register", [
                'validation' => $this->validator,
            ]);
        }
        $name = $this->request->getVar("name");
        $username = $this->request->getVar("username");
        $email = $this->request->getVar("email");
        $password = $this->request->getVar("password");

        $values = [
            'name' => $name,
            'email' => $email,
            'password' => md5($password),
            'username' => $username,
        ];

        $adminModel = new \App\Models\AdminModel();
        $query = $adminModel->insert($values);
        if(!$query){
            // return redirect()->back()->with('fail','Something wrong');
            // return view('user/login/registration'); 
            return redirect()->back();
        }else{
            // return redirect('index');
            //echo " successfully registered ";
            return view('admin/pages/pages-login'); 
        }
        // return view('user/login/' . "registration");
    }
}
?>