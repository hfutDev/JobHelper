
<html>
<head>
<title>管理员登录</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css/style.css" rel="stylesheet">
<link href="../css/bootstrap.css" rel="stylesheet" media="screen">
</head>
<body>
<script language="javascript">
	  function chkinput(form){
	    if(form.name.value==""){
		  alert("请输入用户名!");
		  form.name.select();
		  return(false);
		}
		if(form.password.value==""){
		  alert("请输入用户密码!");
		  form.password.select();
		  return(false);
		}
		return(true);
	  }
	</script>



<div class="container" style="margin:100px auto;width:210px;">
	<div class="row" style="margin:0 auto;width:210px;">
		<div class="span12" style="margin:0 auto;width:210px;">
			<form  method="post" action="../controller/loginController.php" onSubmit="return chkinput(this)">
				<fieldset>
					<legend>管理员登陆</legend>
					 <label>用户名</label>
					 <input name="name" type="text" id="name"  /> 
					 <label>密码</label>
					 <input name="password" type="password" id="password" /><br />
					  <button class="btn" type="submit">提交</button>
					   <button class="btn" type="reset">重置</button>
				</fieldset>

				<fieldset><br/>
				<?php 
	//接收errno
	if(!empty($_GET['errno'])){
		
		//接收错误编号
		$errno=$_GET['errno'];
		if($errno==1){
			echo "<td colspan=2 style='text-align:center;'><font color='red' size='3'>你的用户名或者密码错误</font></td>";
		}
		
	}
?>
				</fieldset>
			</form>
		</div>
	</div>
</div>


</body>
</html>