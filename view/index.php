<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<title>学长学姐帮你找工作</title>
<link rel="stylesheet" type="text/css" href="../css/appindex.css">
<script src="../js/zepto.min.js"></script>
<!--[if lt IE 9]>
<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
</head>
<body>
    <div id="header">
        <form action="" method="POST">
            <input type="text" placeholder="学院，专业，年级，公司，地点，职位">
            <input type="submit" value="" class="submit"/>
        </form>
    </div>
    <div id="main">
        <div class="main-wrapper">
            <h1>热门></h1>
            <ul>
<?php
require(dirname(__FILE__).'/../global.php');
require_once 'service/personService.class.php';
$personservice=new PersonService();
$indexdata=$personservice->uiIndexData();
//echo json_encode($indexdata);
$start=0;
$end=6;

for ($i=$start; $i < $end; $i++) { 
    echo "<li>";
    echo "<a href=detail.php?id=".$indexdata[$i]['ID'].">";
    echo "<img src="."../images/face/".$indexdata[$i]['HeadPic']." />";
    echo "<label for=''>".$indexdata[$i]['Company']."</label>";
    echo "<p>";
    echo "<span>".$indexdata[$i]['Dept']."</span>";
    echo "</p>";
    echo "<p>";
    echo "<span>".$indexdata[$i]['Major']."</span>";
    echo "<span>专业</span>";
    echo "</p>";
    echo "</a>"; 
    echo "</li>"; 
}
?>
            </ul>
        </div>
    </div>
</body>
</html>


