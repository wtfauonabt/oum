<?php
/***********************************
OUM
--------------------------------------
Author: Chi Fung Stanley Yeung
--------------------------------------
Purpose: User Controller
--------------------------------------
Version: 0
    Basic login
*************************************/
class UserControl
{
    private $userModel;

    public function __construct(){
        $this->user_model = new UserModel();
    }

    public function handleRequest($action)
    {
        try{
            
            if ($action == "log_in") {
                $this->user_model->logInAction();

            } else if ($action == "sign_out") {
                $this->user_model->signOutAction();

            }
            header("Location: index.php");

        } catch (Exception $e){
            echo "Caught exception: " . $e->getMessage() . "<br>";
        }
    }

    public function resetLogIn(){
        $this->user_model->resetLogIn();
    }
}
