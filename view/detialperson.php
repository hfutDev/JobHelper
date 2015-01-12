<?php 
	session_start();
	if(empty($_SESSION['loginuser'])){
			header("Location: ../view/login.php");
		}
?>

<?php
	require(dirname(__FILE__).'/../global.php');
	include_once 'service/personService.class.php';
	$personservice=new PersonService();
	$id=$_GET['id'];
	$person=$personservice->getPersonById($id);

?>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<title>详细信息</title>
<link href="../css/bootstrap.css" rel="stylesheet" media="screen">
  <script src="../js/bootstrap.min.js"></script>
</head>
<body style="width:960px;margin:0 auto">

<ul class="unstyled" contenteditable="true">
		<li><div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">
		ID：<?php echo $person->getID(); ?></div>
		</li>
		<li><div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">昵称：<?php echo $person->getNickName(); ?></div></li>
		<li><div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">头像:<img src=<?php echo '../images/face/'.$person->getHeadPic();?> /></div></li>
		<li><div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">学院：<?php echo $person->getDept(); ?></div></li>
		<li><div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">专业：<?php echo $person->getMajor(); ?></div></li>
		<li><div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">年级：<?php echo $person->getYear(); ?></div></li>
		<li><div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">学位：<?php echo $person->getDegree(); ?></div></li>
		<li><div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">公司：<?php echo $person->getCompany(); ?></div></li>
		<li><div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">职位：<?php echo $person->getPosition(); ?></div></li>
		<li><div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">地址：<?php echo $person->getAddress(); ?></div></li>
		<li><div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">一句话简介：<?php echo $person->getOneword(); ?></div></li>
		<li><div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">QQ：<?php echo $person->getQQ(); ?></div></li>
		<li><div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">微信：<?php echo $person->getWechat(); ?></div></li>
		<li><div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">电话：<?php echo $person->getTel(); ?></div></li>
		<li><div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">邮箱：<?php echo $person->getEmail(); ?></div></li>
		<li><div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">点赞：<?php echo $person->getGood(); ?></div></li>
		<li><div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">查看量：<?php echo $person->getFakeClick(); ?></div></li>
		<li><div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">建议：</div></li>
		<li><div style="background:#eee;border:1px solid #ccc;padding:5px 10px;"> <?php echo $person->getSuggest(); ?></div></li>
		 <li><div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">分享：</div></li>
		<li><div style="background:#eee;border:1px solid #ccc;padding:5px 10px;"><?php echo $person->getShare(); ?></div></li>
		
		</ul>
		
<a class="btn" href="../admin/index.php">返回首页</a>

</body>


		

</html>