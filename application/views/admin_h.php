<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>管理系统</title>
    <base href="<?php echo site_url();?>">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/admin.css">

</head>
<body>
	<div id="header">
		<div class="wrapper">
			<div id="title">
				<h4>二手房交易平台管理系统</h4>
			</div>
			<div id="login">
				<ul>
					<li>
					<?php $login_admin=$this->session->userdata("login_admin");
						if($login_admin){
					?>
					<span><?php echo $login_admin->adminname?>    你好</span>
					<a href="admins/out">退出</a>
					<?php
						}else{
							?>
					<a href="admins/login">登录</a>
					<?php		
						}
					?>
					</li>
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
					<li><a href="houses/sell">卖房</a></li>
					<li><a href="houses/house">买房</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="operation">
		<div class="wrapper">
			<ul id="operation1">
				<li class="chack">添加房源</li>
				<li>删除房源</li>
				<li>修改房源</li>
			</ul>
			<div id="operation2">
				<div>
					<table id="t1">
					<tr>
						<td>位置:</td>
						<td><input id="location" type="text" placeholder="房子位置"></td>
					</tr>
					<tr>
						<td>房主:</td>
						<td><input id="user_id" type="text" placeholder="房子主人"></td>
					</tr>
					<tr>
						<td>面积:</td>
						<td><input id="area" type="text" placeholder="房子面积"></td>
					</tr>
					<tr>
						<td>修建时间:</td>
						<td><input id="year" type="text" placeholder="房子修建时间"></td>
					</tr>
					<tr>
						<td>价格:</td>
						<td><input id="price" type="text" placeholder="房子价格"></td>
					</tr>
					<tr>
						<td>楼层:</td>
						<td><input id="floor" type="text" placeholder="房子楼层"></td>
					</tr>
					<tr>
						<td>主图:</td>
						<td><input id="img1" type="text" placeholder="房子主图"></td>
					</tr>
					<tr>
						<td>副图1:</td>
						<td><input id="img2" type="text" placeholder="房子副图"></td>
					</tr>
					<tr>
						<td>副图2:</td>
						<td><input id="img3" type="text" placeholder="房子副图"></td>
					</tr>
					<tr>
						<td>服务人员:</td>
						<td><input id="serve_id" type="text" placeholder="业务员"></td>
					</tr>
					<tr>
						<td>
							<button id="b1">添加</button>
						</td>
					</tr>
				</table>
				</div>
				<div>
					<table>
					<?php 
						foreach ($houses as $house) {
					?>
						<tr>
							<td>位置:&nbsp;&nbsp;<?php echo $house->location;?>&nbsp;&nbsp;</td>
							<td><form action="admins/del" method="post">
								<input name="house_id" type="hidden" value="<?php echo $house->house_id;?>">
								<input type="submit" value="删除">
							</form></td>
						</tr>
					<?php }?>
					</table>
				</div>
				<div>
					<table>
					<?php 
						foreach ($houses as $house) {
					?>
						<tr>
							<td>位置:&nbsp;&nbsp;<?php echo $house->location;?>&nbsp;&nbsp;</td>
							<td><button>修改</button></td>
						</tr>
					<?php }?>
					</table>
				</div>
			</div>
		</div>
	</div>
	<script src="js/jq.js"></script>
	<script>
		$(function(){
			var $op = $("#operation2 div");
			var $op1 = $("#operation1 li");
			for(var i=0; i<$op1.length; i++){
				$op.eq(i+1).hide();
				$op1.eq(i).on("click",function(){
				$(this).addClass("chack").siblings().removeClass("chack");
				$op.eq($(this).index()).show().siblings().hide();
				});
			};
			// console.log($("#i1").val());
			$("#b1").on("click",function(){
				var location = $("#location").val();
				var user = $("#user_id").val();
				var area = $("#area").val();
				var price = $("#price").val();
				var img1 = $("#img1").val();
				var img2 = $("#img2").val();
				var img3 = $("#img3").val();
				var year = $("#year").val();
				var floor = $("#floor").val();
				var serve = $("#serve_id").val();
				$.get("admins/add",{
					location: location,
					user: user,
					area: area,
					price: price,
					img1: img1,
					img2: img2,
					img3: img3,
					year: year,
					floor: floor,
					serve: serve
				},function(data){
					alert(data);
                        if(data == "成功"){
                            window.location.href="http://127.0.0.1/house/admins/logs";
                        };
				},"text");
			})
		})
	</script>
</body>
</html>