<?php
	//1.name
	$name=$_POST['name'];
	//2.密码
	$password=$_POST['password'];

	if(empty($_POST['keep'])){
		if(!empty($_COOKIE['name'])){
		setcookie("name",$name,time()-100);
		}
	}else{
		setcookie("name",$name,time()+7*2*24*3600);
	}

	require(dirname(__FILE__).'/../global.php');
	require_once 'service/adminService.php';
	$adminservice=new AdminService();
	
	$adminname=$adminservice->checkAdmin($name,$password);

	if($adminname!=""){
		session_start();
		$_SESSION['loginuser']=$adminname;
		header("Location: ../admin/index.php");
		exit();
	}else{
		header("Location: ../view/login.php?errno=1");
	}
?>