<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <title>学长学姐帮你找工作</title>
    <link rel="stylesheet" type="text/css" href="../css/appdetail.css">
    <script src="http://cdn.bootcss.com/zepto/1.1.4/zepto.min.js"></script>
    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
</head>
<body>
<div id="header">
    <a href="/index">
        <h1>
            <label for=""><</label>
            <span>学长学姐帮你找工作</span>
        </h1>
    </a>
</div>
<?php
    require(dirname(__FILE__).'/../global.php');
    include_once 'service/personService.class.php';
    $personservice=new PersonService();
    $id=$_GET['id'];
    $person=$personservice->getSecondData($id);

?>
<div id="main">
    <div class="main-top">
        <div class="main-info">
            <div class="avator">
                <img src="../images/face/default.jpg" alt=""/>
            </div>
            <div class="nick">
                <h1>
                    <span class="nickname"><?php echo $person[0]['NickName']; ?></span>
                    <span>（</span>
                    <span><?php echo $person[0]['Year']; ?></span>
                    <span>级）</span>
                </h1>
                <h1><?php echo $person[0]['Oneword']; ?></h1>
            </div>
            <div class="zan">
                <label for=""><?php echo $person[0]['Good']; ?></label>
                <span class="zan-icon"></span>
            </div>
        </div>
    </div>
    <div class="main-mid">
        <ul>
            <li>
                <div class="common">
                    <span><?php echo $person[0]['Company']; ?></span>
                </div>
                <p>签约公司</p>
            </li>
            <li>
                <div class="common">
                    <span><?php echo $person[0]['Position']; ?></span>
                </div>
                <p>应聘职位</p>
            </li>
            <li>
                <div class="common contact">
                </div>
                <p>联系TA</p>
            </li>
        </ul>
    </div>
    <div class="mid-bot">
        <p>
            <i class="sug"></i>
            <span>大学生活及建议</span>
        </p>
        <p>
            <i class="shares"></i>
            <span>面试分享</span>
        </p>
    </div>
</div>
</body>
</html>


