<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>二手房交易平台</title>
    <base href="<?php echo site_url();?>">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
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
			<img src="img/logo.png" alt="" >
			<div id="choose">
				<ul>
					<li id="choose1"><a href="user">首页</a></li>
					<li><a href="#">二手房</a></li>
					<li><a href="houses/sell">卖房</a></li>
					<li><a href="houses/house">买房</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="logoimg">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
		  </ol>
		  <div class="carousel-inner" role="listbox">
		    <div class="item active">
		      <img src="img/1.jpeg" alt="...">
		      <div class="carousel-caption">
		        
		      </div>
		    </div>
		    <div class="item">
		      <img src="img/2.jpeg" alt="...">
		      <div class="carousel-caption">
		        
		      </div>
		    </div>
		    <div class="item">
		      <img src="img/3.jpg" alt="...">
		      <div class="carousel-caption">
		        
		      </div>
		    </div>
		    <div class="item">
		      <img src="img/4.jpeg" alt="...">
		      <div class="carousel-caption">
		        
		      </div>
		    </div>
		  </div>
		  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</div>
	<div id="why">
		<div class="wrapper">
			<div id="whytitle">
				<h2>为什么选择<span>我们</span></h2>
			</div>
			<div id="speak">
				<div class="row">
					  <div class="col-xs-6 col-md-3 speak">
					  <h2>专业</h2>
					    <a href="#" class="thumbnail">
					      <img src="img/lx_1.png" alt="...">
					    </a>
					    我们有二手房专业交易顾问房小二，签约中心覆盖全城，让我们离您更近，更高效地为您服务。
					      <br>
					   	<span class="span1">联系房小二</span>
					  </div>
					  <div class="col-xs-6 col-md-3 speak">
					  <h2>省钱</h2>
					    <a href="#" class="thumbnail">
					      <img src="img/lx_2.png" alt="...">
					    </a>
					    我们不收中介费，平均帮每个用户省去3万元。同时提供专业的增值服务，让您买房省心又放心。
					      <br>
					      <span class="span1">过户费用对比</span>
					  </div>
					  <div class="col-xs-6 col-md-3 speak">
					  <h2>安全</h2>
					    <a href="#" class="thumbnail">
					      <img src="img/lx_3.png" alt="...">
					    </a>
					      我们提供三方买卖合同，对接多家合作银行，设立银行面签服务点，保障买卖双方权益，确保交易资金安全。
					      <br>
					      <span class="span1">了解交易流程</span>
					  </div>
				</div>
			</div>
		</div>
	</div>
	<div id="footer">
        <div class="wrapper">
            <div class="footer-left">
                <ul id="tab">
                    <li>Home</li>
                    <li>About</li>
                    <li>Services</li>
                    <li>Work</li>
                    <li>Blog</li>
                    <li>Contact</li>
                </ul></br>
                <p>© 2013 BlueBox.  All Rights Reserved.</p>
                <p id="p1">The logos used in the design are the property of their respective owners / copyright holders.</p>
            </div>
            <div class="footer-right"></div>
        </div>
    </div>
	<script src="js/jq.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>