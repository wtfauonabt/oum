<?php
/***********************************
Foodies
--------------------------------------
Author: Chi Fung Stanley Yeung
--------------------------------------
Purpose: Base Controller
--------------------------------------
Version: 0
    Basic link to view
*************************************/
class  BaseControl
{
    /*
    private $user_controller;
    private $acc_controller;
    private $tran_controller;
*/
    public function __construct(){
        /*
        $conn = new ConnectDB();
        $this->user_controller = new UserController($conn);
        $this->acc_controller = new AccController($conn);
        $this->tran_controller = new TranController($conn);
        */
    }

    public function handleRequest()
    {
        try{
            include ("views/baseView.php");
            /*
            // Reset login
            if (isset($_COOKIE['user_name']) && !isset($_COOKIE['remb']))
                $this->user_controller->resetLogIn();

            if (!isset($_GET['model'])){
                if (!isset($_COOKIE['user_name'])) {
                    include ("views/homeView.php");
                } else {
                    header("Location: index.php?model=account&action=view");
                }
            } else {
                $model = $_GET['model'];


                // Handler
                if (!isset($_GET['action']))
                    throw new Exception ("Cannot read action");

                $action = $_GET['action'];
                if ($model == "user") {
                	$this->user_controller->handleRequest($action);

                } else if ($model == "account") {
                	$this->acc_controller->handleRequest($action);

                } else if ($model == "transaction") {
                	$this->tran_controller->handleRequest($action, $this->acc_controller);

                } else {
                    throw new Exception ("Cannot identify action.");
                }
            }
            */

        } catch (Exception $e){
            echo "Caught exception: " . $e->getMessage() . "<br>";
        }
    }
}
