<?php 
	session_start();
	if(empty($_SESSION['loginuser'])){
			header("Location: ../view/login.php");
		}
?>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<title>增加信息</title>
<link href="../css/bootstrap.css" rel="stylesheet" media="screen">
  <script src="../js/bootstrap.min.js"></script>
</head>
<body style="width:960px;margin:0 auto">
<div class="span12">
			<form enctype="multipart/form-data" method="post"  action="../controller/addPersonCon.php" name="add">
				<fieldset>
					<legend>增加信息</legend>
					<p>
						昵称：<input type="text" name="nickname" /><br /> 
						请选择你要上传头像:<input type="file" name="headpic" /><br /> 
						学院：<input type="text" name="dept" /> 
						专业：<input type="text" name="major" /><br /> 
						年级：<input type="text" name="year"  /> 
						学位：<input type="text" name="degree" /><br /> 
						公司：<input type="text" name="company"  />
						职位：<input type="text" name="position"  />
						地址：<input type="text" name="address"  /><br /> 
						一句话简介：<input type="text" name="oneword" /><br /> 
						QQ：<input type="text" name="qq" />
						微信：<input type="text" name="wechat" /><br /> 
						电话：<input type="text" name="tel" />
						邮箱：<input type="text" name="email" /><br />
						<script type="text/javascript" src="../js/nicEdit.js"></script> <script type="text/javascript">
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
  </script> 
  						建议：<textarea name="suggest" style="width: 800px; height: 300px;">建议</textarea>
  						分享：<textarea name="share" style="width: 800px; height: 300px;">分享</textarea>

						<button class="btn" type="submit">提交</button>
						<a class="btn" href="../admin/index.php">返回首页</a>
					</p>
				</fieldset>
			</form>
		</div>

</body>
</html>