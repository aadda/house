<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>发布房源</title>
    <base href="<?php echo site_url();?>">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/sell.css">
</head>
<body>
	<div id="header">
		<div class="wrapper">
			<div id="title">
				<h4>没有<span>中介费</span>的真实二手房交易平台</h4>
			</div>
			<div id="login">
				<ul>
					<li>
					<?php $login_user=$this->session->userdata("login_user");
						if($login_user){
					?>
					<span><?php echo $login_user->name?>    你好</span>
					<a href="user/out">退出</a>
					<?php
						}else{
							?>
					<a href="user/login">登录</a>
					<?php		
						}
					?>
					</li>
					<li><a href="#">丨</a></li>
					<li><a href="#">服务热线：400-400-1111</a></li>
					<li><a href="#">丨</a></li>
					<li><a href="#">帮助</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="logo">
		<div class="wrapper">
			<img src="img/logo.png" alt="" style="margin-left: 0;">
			<div id="choose">
				<ul>
					<li id="choose1"><a href="user">首页</a></li>
					<li><a href="#">二手房</a></li>
					<li><a href="#">卖房</a></li>
					<li><a href="houses/house">买房</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="banner">
		<div class="wrapper">
			<div id="work">
				<h1>一个电话 免费上门拍照 发布房源</h1>
				<div>立即拨打电话 <h2>400-400-1111</h2></div>
			</div>
		</div>
	</div>
	<script src="js/jq.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>