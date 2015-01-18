<?php
	require(dirname(__FILE__).'/../global.php');
	require_once 'util/sqlhelper.class.php';
	require_once 'model/person.class.php';
	class PersonService{
		
		//根据id好获取一个信息
		function getPersonById($id){
			
			$sql="select * from person where ID=$id";
			$sqlHelper=new SqlHelper();
			$arr=$sqlHelper->execute_dql($sql);
			$sqlHelper->close_connect();
			//二次封装.$arr->对象实例[演示..]
			//创建 对象实例
			$person=new Person();
			$person->setId($arr[0]['ID']);
			$person->setNickName($arr[0]['NickName']);
			$person->setHeadPic($arr[0]['HeadPic']);  
			$person->setDept($arr[0]['Dept']);
			$person->setMajor($arr[0]['Major']);
			$person->setYear($arr[0]['Year']);
			$person->setDegree($arr[0]['Degree']);
			$person->setCompany($arr[0]['Company']);
			$person->setPosition($arr[0]['Position']);
			$person->setAddress($arr[0]['Address']);  
			$person->setOneword($arr[0]['Oneword']);
			$person->setWeChat($arr[0]['WeChat']);
			$person->setTel($arr[0]['Tel']);
			$person->setEmail($arr[0]['Email']);
			$person->setGood($arr[0]['Good']);  
			$person->setFakeClick($arr[0]['FakeClick']);
			$person->setSuggest($arr[0]['Suggest']);
			$person->setShare($arr[0]['Share']);
			$person->setQQ($arr[0]['QQ']);
			return $person;
		}
		function getIndexData($pagenow,$pagesize){
			$limitstart=($pagenow-1)*$pagesize;
			$sql="select ID,NickName,HeadPic,Dept,Major,Company from person order by ID desc limit $limitstart,$pagesize";
			$sqlHelper=new SqlHelper();
			//这里的$res就是一个二维数组
			$res=$sqlHelper->execute_dql($sql);
			//释放资源和关闭连接
			//关闭连接
			$sqlHelper->close_connect();
			return $res;
		}
		function uiIndexData(){
			$sql="select ID,NickName,HeadPic,Dept,Major,Company from person order by Good asc,ID desc";
			$sqlHelper=new SqlHelper();
			//这里的$res就是一个二维数组
			$res=$sqlHelper->execute_dql($sql);
			//释放资源和关闭连接
			//关闭连接
			$sqlHelper->close_connect();
			return $res;
		}
		function getSecondData($id){
			$sql="select ID,NickName,HeadPic,Year,Degree,Oneword,FakeClick,Share,Good,Dept,Major,Company,Position,QQ,Tel,WeChat,Suggest,Email from person where ID=$id";
			$sqlHelper=new SqlHelper();
			$arr=$sqlHelper->execute_dql($sql);
			$fakeclick=$arr[0]['FakeClick']+1;
			//print_r($fakeclick);
			//exit();
			$sql2="update person set FakeClick=$fakeclick where ID=$id";
			$sqlHelper->execute_dml($sql2);
			$sqlHelper->close_connect();
			// $person=new Person();
			// $person->setId($arr[0]['ID']);
			// $person->setNickName($arr[0]['NickName']);
			// $person->setHeadPic($arr[0]['HeadPic']);  
			// $person->setDept($arr[0]['Dept']);
			// $person->setMajor($arr[0]['Major']);
			// $person->setYear($arr[0]['Year']);
			// $person->setDegree($arr[0]['Degree']);
			// $person->setCompany($arr[0]['Company']);
			// $person->setPosition($arr[0]['Position']);
			// $person->setAddress($arr[0]['Address']);  
			// $person->setOneword($arr[0]['Oneword']);
			// $person->setWeChat($arr[0]['WeChat']);
			// $person->setTel($arr[0]['Tel']);
			// $person->setEmail($arr[0]['Email']);
			// $person->setGood($arr[0]['Good']);
			// $person->setSuggest($arr[0]['Suggest']); 
			// $person->setShare($arr[0]['Share']);   
			// $person->setFakeClick($arr[0]['FakeClick']);
			// $person->setQQ($arr[0]['QQ']);
			return $arr;
		}
		function getSuggest($id){
			$sql="select Suggest from person where ID=$id";
			$sqlHelper=new SqlHelper();
			$arr=$sqlHelper->execute_dql($sql);
			$sqlHelper->close_connect();
			
			$res=$arr[0]['Suggest'];
			return $res;
		}
		function updataGood($id){
			$sql1="select Good from person where ID=$id";
			$sqlHelper=new SqlHelper();
			$arr=$sqlHelper->execute_dql($sql1);
			$good=$arr[0]['Good']+1;
			$sql2="update person set Good=$good where ID=$id";
			$res=$sqlHelper->execute_dml($sql2);
			$sqlHelper->close_connect();
			return $res;
		}
		function getShare($id){
			$sql="select Share from person where ID=$id";
			$sqlHelper=new SqlHelper();
			$arr=$sqlHelper->execute_dql($sql);
			$sqlHelper->close_connect();
			
			$res=$arr[0]['Share'];
			return $res;
		}

		function updatePerson($id,$nickname,$headpic,$dept,$major,$degree,$company,$year,$position,$address,$oneword,$qq,$wechat,$tel,$email,$suggest,$share){
			$sql="update person set NickName='$nickname',HeadPic='$headpic',Dept='$dept',Major='$major',Year='$year',Degree='$degree',Company='$company',Position='$position',Address='$address',Oneword='$oneword',QQ='$qq',WeChat='$wechat',Tel='$tel',Email='$email',Suggest='$suggest',Share='$share' where ID=$id";
			$sqlHelper=new SqlHelper();
			$res=$sqlHelper->execute_dml($sql);
			$sqlHelper->close_connect();
			return $res;
		}
		
		
		
		//添加一个方法
		function addPerson($nickname,$headpic,$dept,$major,$year,$degree,$company,$position,$address,$oneword,$qq,$wechat,$tel,$email,$suggest,$share){
			
			//做一个$sql语句
			$sql="insert into person (NickName,HeadPic,Dept,Major,Year,Degree,Company,Position,Address,Oneword,QQ,WeChat,Tel,Email,Suggest,Share) values('$nickname','$headpic','$dept','$major','$year','$degree','$company','$position','$address','$oneword','$qq','$wechat','$tel','$email','$suggest','$share')";
			//同sqlHelper完成添加
			$sqlHelper=new SqlHelper();
			$res=$sqlHelper->execute_dml($sql);
			$sqlHelper->close_connect();
			return $res;
		}
		
		
		//一个函数可以获取共有多少页
		function getPageCount($pagesize){
			
			//需要查询$rowCount
			$sql="select count(ID) from person";
			$sqlHelper=new SqlHelper();
			$res=$sqlHelper->execute_dql($sql);
			//print_r($res);
			$pagecount=$res[0]['count(ID)']/$pagesize;
			$sqlHelper->close_connect();
			return ceil($pagecount);
		}
		
		
		//根据输入id删除某个用户
		function delPersonById($id){
			
			//
			$sql="delete from person where ID=$id";
			//创建SqlHelper对象实例
			$sqlHelper=new SqlHelper();
			//0, 1 ,2
			return $sqlHelper->execute_dml($sql);
		}
		function search($keyword){
			$sql="select ";
		}
	}
?>