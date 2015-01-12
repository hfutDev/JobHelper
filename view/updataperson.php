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
<title>修改信息</title>
<link href="../css/bootstrap.css" rel="stylesheet" media="screen">
  <script src="../js/bootstrap.min.js"></script>
</head>
<body style="width:960px;margin:0 auto">
<div class="span12">
<form enctype="multipart/form-data" method="post"  action="../controller/personController.php?id=<?php echo $id ?>&flag=updata" name="updata">
			<fieldset>
					<legend>修改信息</legend>
					<p>
		昵称：<input type="text" value="<?php echo $person->getID(); ?>" name="nickname" /><br />
		请选择你要上传头像:<input type="file" name="headpic" /><br />
		学院：<input type="text" value="<?php echo $person->getDept(); ?>" name="dept" /><br />
		专业：<input type="text" value="<?php echo $person->getMajor(); ?>" name="major" /><br />
		年级：<input type="text" value="<?php echo $person->getYear(); ?>" name="year" /><br />
		学位：<input type="text" value="<?php echo $person->getDegree(); ?>" name="degree" /><br />
		公司：<input type="text" value="<?php echo $person->getCompany(); ?>" name="company" /><br />
		职位：<input type="text" value="<?php echo $person->getPosition(); ?>" name="position" /><br />
		地址：<input type="text" value="<?php echo $person->getAddress(); ?>" name="address" /><br />
		一句话简介：<input type="text" value="<?php echo $person->getOneword(); ?>" name="oneword" /><br />
		QQ：<input type="text" value="<?php echo $person->getQQ(); ?>" name="qq" /><br />
		微信：<input type="text" value="<?php echo $person->getWechat(); ?>" name="wechat" /><br />
		电话：<input type="text" value="<?php echo $person->getTel(); ?>" name="tel" /><br />
		邮箱：<input type="text" value="<?php echo $person->getEmail(); ?>" name="email" /><br />
		<script type="text/javascript" src="../js/nicEdit.js"></script> <script type="text/javascript">
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
  </script>
		建议：<br />
		 <textarea name="suggest" style="width: 800px; height: 300px;"><?php echo $person->getSuggest(); ?></textarea><br />
		 分享：<br />
		 <textarea name="share" style="width: 800px; height: 300px;"><?php echo $person->getShare(); ?></textarea><br />
		
	
		</form>
<button class="btn" type="submit">确认修改</button>
						<a class="btn" href="../admin/index.php">返回首页</a>
					</p>
				</fieldset>
		</div>

</body>
</html>