<?php

namespace App\Controllers;

// use CodeIgniter\Controller;

class Adminlogin extends BaseController
{
        public function login()
    {
        // $this->check_data();
        helper(['login', 'url']);
        if (!$this->validate([
            'username' => ['label' => 'Username', 'rules' => 'required'],
            'password' => ['label' => 'Password', 'rules' => 'required|min_length[8]'],
        ])) {
            return view('admin/pages/' . "pages-login", [
                'validation' => $this->validator,
            ]);
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $db = db_connect();
            $uname = $_POST["username"];
            $pass = md5($_POST["password"]);

            $sql = $db->query('SELECT username, password FROM admin');
            $result = $sql->getResult();
           // print_r($result); die();
            foreach ($result as $row) {
                $oldname = $row->username;
                $oldpass = $row->password;
                break;
            }
            if ($oldpass == $pass and $oldname == $uname) {
                session_start();
                $_SESSION['login'] = true;
                $_SESSION['username'] = $uname;
                return redirect('admin');
            }
            echo "<h1>User not registered, or invalid details.";
            echo "You will be redirected to login in 3 seconds";
            echo "<script>
                var timer = setTimeout(function() {
                window.location='login'}, 3000);
                </script></h1>";
        }
    }
    

}
