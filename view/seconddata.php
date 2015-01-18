<?php
	require(dirname(__FILE__).'/../global.php');
	include_once 'service/personService.class.php';
	$id=$_GET['id'];
	// $id=20;
	$personservice=new PersonService();
	$seconddata=$personservice->getSecondData($id);
	echo json_encode($seconddata);
?>