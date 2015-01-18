<?php
	require(dirname(__FILE__).'/../global.php');
	include_once 'service/personService.class.php';
	$good=$_GET['good'];
	$id=$_GET['id'];
	$personservice=new PersonService();
	$good=$personservice->updataGood($id);
	echo json_encode($good);
?>