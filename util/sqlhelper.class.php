<?php

class SqlHelper{

		public $conn;
		public $dbname="findjob";
		public $username="root";
		public $password="123456";
		public $host="localhost";

		public function __construct(){
			
			$this->conn=mysql_connect($this->host,$this->username,$this->password);
			if(!$this->conn){
				die("连接失败".mysql_error());
			}
			
			mysql_select_db($this->dbname,$this->conn);
		}

		public function execute_dql($sql){
			
			$arr=array(); 
			$res=mysql_query($sql,$this->conn) or die(mysql_error());
			
			//把$res=>$arr 把结果集内容转移到一个数组中.
			while($row=mysql_fetch_assoc($res)){
				$arr[]=$row;
			}
			//这里就可以马上把$res关闭.
			mysql_free_result($res);
			return $arr;
				
		}
		public  function execute_dml($sql){
			
			$b=mysql_query($sql,$this->conn) or die(mysql_error());
			if(!$b){
				return 0; //失败
			}else{
				if(mysql_affected_rows($this->conn)>0){
					return 1;//表示执行ok
				}else{
					return 2;//表示没有行受到影响
				}
			}
		}
		public function close_connect(){
			
			if(!empty($this->conn)){
				mysql_close($this->conn);
			}
		}
}


 ?>
