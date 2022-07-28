<?php

namespace App\Controllers;

// use CodeIgniter\Controller;

class Login extends BaseController
{
        public function login()
    {
        // $this->check_data();
    //     helper(['login', 'url']);
    //     if (!$this->validate([
    //         'username' => ['label' => 'Username', 'rules' => 'required'],
    //         'password' => ['label' => 'Password', 'rules' => 'required|min_length[5]'],
    //     ])) {
    //         return view('user/pages/' . "login", [
    //             'validation' => $this->validator,
    //         ]);
    //     }

    //     if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //         $db = db_connect();
    //         $uname = $_POST["username"];
    //         $pass = md5($_POST["password"]);

    //         $sql = $db->query('SELECT customer_username, customer_password FROM customer');
    //         $result = $sql->getResult();
    //        // print_r($result); die();
    //         foreach ($result as $row) {
    //             $oldname = $row->customer_username;
    //             $oldpass = $row->customer_password;
    //             break;
    //         }
    //         if ($oldpass == $pass and $oldname == $uname) {
    //             session_start();
    //             $_SESSION['login'] = true;
    //             $_SESSION['username'] = $uname;
    //             return redirect('index');
    //         }
    //         echo "<h1>User not registered, or invalid details.";
    //         echo "You will be redirected to login in 3 seconds";
    //         echo "<script>
    //             var timer = setTimeout(function() {
    //             window.location='login'}, 3000);
    //             </script></h1>";
    //     }

    helper(['form']);
        $username = $this->request->getVar("username");
        $password = $this->request->getVar("password");
        $data = [];
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'username' => 'required',
                'password' => 'required|min_length[8]|alpha_numeric_punct',
            ];

            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
                return view('user/pages/login', $data);
            } else {
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // $db = \Config\Database::connect();
                    $userModel = new \App\Models\UserModel();
                    $currentPass = md5($password);
                    $users = $userModel->where('customer_username', $username)->first();
                    if (!isset($users)) {
                        session()->setFlashdata('fail', 'Incorrect Username');
                        return redirect('login')->withInput();
                    } else {
                        $oldPass = $users['customer_password'];
                        if ($oldPass == $currentPass) {
                            $session = session();
                            $session->set('login', true);
                            $session->set('username', $username);
                            $session->set('useremail', $users['customer_email']);
                            $session->set('userid', $users['id']);
                            return redirect('index');
                            // header("location: index.php");
                        } else {
                            // die('bhad me jao');
                            session()->setFlashdata('fail', 'Incorrect Password');
                            return redirect('login')->withInput();
                            // return redirect('login');
                        }
                    }
                    // print_r($users);

                    // $query   = $db->query('SELECT user_name, user_password FROM user');
                    // $result = $query->getResult();
                    // $oldPass = $result->user_password;
                    // $sql = "SELECT * FROM user WHERE user_name=? AND user_password=? ";
                    // $result = $db->query($sql, [$username, $password]);
                    // echo "$result->'user_name'";
                    // foreach ($result as $row) {
                    //     // echo $row->user_name;
                    //     $oldPass = $row->user_password;
                    //     break;
                    // }
                    // die();

                }
                // die('form submit');
            }
        }
    
    }
    

}
