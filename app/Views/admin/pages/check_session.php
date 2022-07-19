<?php
        class check
        {
            function check_login()
            {
                if(!isset($_SESSION)) { 
                    session_start(); 
                } 
                if (!isset($_SESSION['login']) || $_SESSION['login'] != true) {
                    echo "<h1>You are not logged in.";
                    echo "You will be redirected in 3 seconds";
                    echo "<script>
                        var timer = setTimeout(function() {
                        window.location='pages-login'}, 3000);
                        </script></h1>";
                    exit;
                }
            }
        }
        