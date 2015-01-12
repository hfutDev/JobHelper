<?php 
	session_start();
	if(empty($_SESSION['loginuser'])){
			header("Location: ../view/login.php");
		}
?>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../css/bootstrap.css" rel="stylesheet" media="screen">
  <script src="../js/bootstrap.min.js"></script>
<title>信息列表</title>
</head>
<body style="width:960px;margin:0 auto">
<br/>
 <a class="btn btn-large btn-link " href="../controller/adminController.php?flag=loginout">退出</a>
 <a style="margin-left:720px;" class="btn btn-primary text-right" href="../view/addperson.php">增加信息</a>
<div class="container">
	<div class="row">
		<div class="span12">
			<table class="table table-hover table-bordered">
				<thead>
					<tr><th>id</th><th>昵称</th><th>学院</th>
						<th>专业</th><th>公司</th><th>修改
						</th><th>删除</th><th>详细</th>
					</tr>
				</thead>
				<tbody>
<?php
	require(dirname(__FILE__).'/../global.php');
	require_once 'service/personService.class.php';
	$personservice=new PersonService();
	
	$pagesize=12;
	$pagecount=$personservice->getPageCount($pagesize);
	if(empty($_GET['pagenow'])){
		$pagenow=1;
	}else if(($_GET['pagenow']-1)>=$pagecount){
		$pagenow=$pagecount;
	}else{
		$pagenow=$_GET['pagenow'];
	}
	$arr=$personservice->getIndexData($pagenow,$pagesize);
	$arrayName = array('0' =>"" ,
		'1'=>"success",
		'2'=>"error",
		'3'=>"warning",
		'4'=>"info",
		'5' =>"" ,
		'6'=>"success",
		'7'=>"error",
		'8'=>"warning",
		'9'=>"info",
		'10' =>"" ,
		'11'=>"success");
	for($i=0;$i<count($arr);$i++) {
		$id=$arr[$i]['ID'];
		echo "<tr class=".$arrayName[$i]."><td>".$arr[$i]['ID']."</td><td>".$arr[$i]['NickName']."</td><td>".$arr[$i]['Dept']."</td><td>".$arr[$i]['Major']."</td><td>".$arr[$i]['Company']."</td><td><a href='../view/updataperson.php?id=$id&flag=updata'>修改</a></td><td><a href='../controller/personController.php?id=$id&flag=delete'>删除</a></td><td><a href='../view/detialperson.php?id=$id'>详细信息</a></td></tr>";
	}
	?>
					
				</tbody>
			</table>
		</div>

	</div>
</div>
  <div class="pagination pagination-right" style="margin-top:10px;">
    <ul>
     <?php
     	echo "<li ><a style='color:#404040'>总共 <b>".$pagecount."</b> 页,当前 <b>".$pagenow."</b> 页</a></li>";
		$pagenow1=$pagenow-1;
		$pagenow2=$pagenow+1;
		echo "<li><a href='index.php?pagenow=$pagenow1'>上一页</a></li>"."<li><a href='index.php?pagenow=$pagenow2'>下一页</a></li>";

	?>
    </ul>
</div>
</body>
</html>