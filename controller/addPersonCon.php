<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<?php
require(dirname(__FILE__).'/../global.php');
	include_once 'service/personService.class.php';
	include_once 'util/image.class.php';
	//接收 用户名
	$nickname=$_POST["nickname"];
	$dept=$_POST['dept'];
	$major=$_POST["major"];
	$year=$_POST['year'];
	$degree=$_POST["degree"];
	$company=$_POST["company"];
	$position=$_POST['position'];
	$address=$_POST["address"];
	$oneword=$_POST["oneword"];
	$qq=$_POST['qq'];
	$wechat=$_POST["wechat"];
	$tel=$_POST['tel'];
	$email=$_POST["email"];
	$suggest=$_POST["suggest"];
	$share=$_POST['share'];

	$image=new image();
	
	$movepath=dirname(__FILE__)."/images/face/";
	$headpic=$image->uploadImage($movepath);
	
	
	
	$person=new PersonService();
	$res=$person->addPerson($nickname,$headpic,$dept,$major,$year,$degree,$company,$position,$address,$oneword,$qq,$wechat,$tel,$email,$suggest,$share);
	if($res==0){
		?>
			<script language='javascript' >
			alert("上传失败!");
			history.back();
			</script>
			<?php
			exit();
			?>
			<?php
	}else{
		?>
			<script language='javascript' >
			alert("上传成功!");
			</script>

			<?php
			header("Location: ../admin/index.php");
			exit();
			?>
			<?php
	}	
?>						