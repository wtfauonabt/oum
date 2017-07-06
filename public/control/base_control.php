<?php
/***********************************
OUM
--------------------------------------
Author: Chi Fung Stanley Yeung
--------------------------------------
Purpose: Base Controller
--------------------------------------
Version: 0
    Basic link to view
*************************************/
require_once('user_control.php');
class BaseControl
{
    /*
    private $user_controller;
    private $acc_controller;
    private $tran_controller;
*/
    private $user_control;

    public function __construct(){
        /*
        $conn = new ConnectDB();
   
        $this->acc_controller = new AccController($conn);
        $this->tran_controller = new TranController($conn);
        */
        $this->user_control = new UserControl();
    }

    public function handleRequest()
    {
        try{
            include (APP_ROOT . 'view/base/base_view.php');

            // Reset login
            if (isset($_COOKIE['user_name']) && !isset($_COOKIE['remb']))
                $this->user_control->resetLogIn();

            if (!isset($_GET['model'])){
                if (!isset($_COOKIE['user_name'])) {
                    include (APP_ROOT . 'view/pages/login/login_view.php');
                    //header("Location: index.php?model=user&action=log_in");
                } else {
                    include (APP_ROOT . 'view/header/header.php');
                }
            } else {
                $model = $_GET['model'];

                // Handler
                if (!isset($_GET['action']))
                    throw new Exception ("Cannot read action");

                $action = $_GET['action'];
                if ($model == "user") {
                    echo 'base';
                	$this->user_control->handleRequest($action);

                } else {
                    throw new Exception ("Cannot identify action.");
                }
            }

        } catch (Exception $e){
            echo "Caught exception: " . $e->getMessage() . "<br>";
        }
    }
}