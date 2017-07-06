<?php

/***********************************
OUM
--------------------------------------
Author: Chi Fung Stanley Yeung
--------------------------------------
Purpose: User Controller
--------------------------------------
Version: 0
    User Model
*************************************/
class UserModel
{
    public function __construct(){
        
    }

    public function resetLogIn()
    {
        $time = time() + (60 * 15);             // 15 mins

        setcookie('user_name', $_COOKIE['user_name'], $time, "/");
        //setcookie('user_id', $_COOKIE['user_id'], $time, "/");
    }

    public function logInAction()
    {
        if(isset($_POST['user_name'], $_POST['user_pswd'])){
            //$user_id = $this->user_model->logIn($_POST['user_name'], $_POST['user_pass']);

            if (isset($_POST['remb'])) {
                $time = time() + (60 * 60 * 24 * 30);   // 30 days
                setcookie('remb', 'y', $time, "/");
            } else {
                $time = time() + (60 * 15);             // 15 mins
            }

            setcookie('user_name', $_POST['user_name'], $time, "/");
            //setcookie('user_id', $user_id, $time, "/");

            echo $_POST['user_name'];
        }
    }
    public function signOutAction()
    {
        //$this->user_model->logOut();
        echo 'here';
        setcookie('user_name', "", time() - 3600, "/");
        //setcookie('user_id', "", time() - 3600, "/");

        // remove all session variables
        session_unset();

        // destroy the session
        session_destroy();
    }

    public function signUpAction()
    {
        if(isset($_POST['user_name'], $_POST['user_pass'])){
            $this->user_model->signUp($_POST['user_name'], $_POST['user_pass']);
            $this->logInAction();
        }
        include ("views/signupview.php");
    }
}