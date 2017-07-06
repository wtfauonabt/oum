<?php
/***********************************
OUM
--------------------------------------
Author: Chi Fung Stanley Yeung
--------------------------------------
Purpose: Index
--------------------------------------
Version: 0
    - Include relevant documents in
    	config.php
    - Basic link to controlller
    - Start session
*************************************/

	require_once('config.php');

	$control;

	if(session_id() == '') {
    	session_start();

    	if (!isset($_SESSION['control']))
		    $_SESSION['control'] = new BaseControl();

	}
	
	$control = $_SESSION['control'];

	$control->handleRequest();
