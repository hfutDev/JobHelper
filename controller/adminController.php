<?php

	$flag=$_GET[flag];
	require(dirname(__FILE__).'/../global.php');
	require_once 'service/adminService.php';
	if($flag=="loginout"){
		session_start();
		unset($_SESSION['loginuser']);
		header("Location: ../view/login.php");
	}
	if($flag==updatapw){
		
		
	}
?>