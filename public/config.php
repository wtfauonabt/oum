<?php
/***********************************
OUM
--------------------------------------
Author: Chi Fung Stanley Yeung
--------------------------------------
Purpose: Initial configuration
--------------------------------------
Version: 0
    - Include relevant documents in
    	for initial website visit
*************************************/

	define('APP_ROOT',  realpath( dirname( __FILE__ )).'/');

    require_once( APP_ROOT . 'control/base_control.php');
    //require_once( APP_ROOT . 'control/user_control.php');

    require_once( APP_ROOT . 'model/user_model.php');