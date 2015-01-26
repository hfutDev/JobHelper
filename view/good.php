<?php
	require(dirname(__FILE__).'/../global.php');
	include_once 'service/personService.class.php';
	$id=$_POST['id'];
	$personservice=new PersonService();
	$good=$personservice->updataGood($id);
	if ($good) {
		$data = array('res' => 1 );
	return json_encode($data);
	}else{
		$data = array('res' => 0 );
	return json_encode($data);
	}
	?>