<?php
require(dirname(__FILE__).'/../global.php');
require_once 'service/personService.class.php';
$personservice=new PersonService();
$pagenow =1;
$pagesize=6;
$indexdata=$personservice->uiIndexData();
echo json_encode($indexdata);

?>