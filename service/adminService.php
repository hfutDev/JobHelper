<?php
	require(dirname(__FILE__).'/../global.php');
	require_once 'util/sqlhelper.class.php';
	 class AdminService{
		public function  checkAdmin($name,$password){
			$sql="select * from admin where Name='$name'";
			//创建一个SqlHelper对象
			$sqlHelper=new SqlHelper();
			$arr=$sqlHelper->execute_dql($sql);
				//比对密码
				if(md5($password)==$arr[0]['Password']){
					return $arr[0]['Name'];
				}
				else {
					return "";
				}
			//关闭连接 
			$sqlHelper->close_connect();
		}
		public function updatapw($name,$password){
		$sql="updata admin set password='$password' where Name='$name'";

	}	
	}
	

?>