<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<?php
require(dirname(__FILE__).'/../global.php');
	include_once 'service/personService.class.php';
		include_once 'util/image.class.php';
	$flag=$_GET['flag'];
	$id=$_GET['id'];
	
if($flag=="updata"){
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
	if(is_uploaded_file($_FILES['headpic']['tmp_name']))
	{
		$image=new image();
		$movepath="/images/face/";
		$headpic=$image->uploadImage($movepath);
		

	}else{
		$personmodel=new Person();
		$headpic=$personmodel->getHeadpic($id);
	}

	
	$person=new PersonService();
	$res=$person->updatePerson($id,$nickname,$headpic,$dept,$major,$degree,$company,$year,$position,$address,$oneword,$qq,$wechat,$tel,$email,$suggest,$share);
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
	}

	if($flag=="delete"){
		
		$person=new PersonService();
	$res=$person->delPersonById($id);
	if($res){
	header("Location: ../admin/index.php");
	}else{
		echo "出现错误";
	}
	}	
?>						