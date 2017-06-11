<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>查看房源</title>
    <base href="<?php echo site_url();?>">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/hhh.css">
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
					<li><a href="houses/sell">卖房</a></li>
					<li><a href="#">买房</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="f1">
    <div id="f11" class="gg">
        <form action="">
            <input id="f2" value=""  placeholder="请输入关键字" type="text"/>
            <button id="f3">搜索</button>
        </form>
    </div>
</div>
<div id="f4">
    <div id="f44" class="gg">
        <a href="">呵呵</a>
        <span>&gt</span>
        <a href="">哈尔滨二手房</a>
    </div>
</div>
<div id="f5">
    <div id="f55" class="gg">
        <div class="enen">
            <span>地区:</span>
            <a @click="toggle(index)" v-for="(n,index) in region" :class="{oo:isOo===index}"  href="#">
                {{n.rea}}
            </a>
        </div>
        <div class="enen">
            <span>总价:</span>
            <a @click="toggl(index)" v-for="(n,index) in total" :class="{oo:isOp===index}"  href="#">
                {{n.rea}}
            </a>
        </div>
        <div class="enen">
            <span>面积:</span>
            <a @click="togg(index)" v-for="(n,index) in area" :class="{oo:isOi===index}"  href="#">
                {{n.rea}}
            </a>
        </div>
        <div class="enen">
            <span>户型:</span>
            <a @click="tog(index)" v-for="(n,index) in hType" :class="{oo:isOu===index}"  href="#">
                {{n.rea}}
            </a>
        </div>
        <div class="enen">
            <span>装修:</span>
            <a @click="to(index)" v-for="(n,index) in fitment" :class="{oo:isOy===index}"  href="#">
                {{n.rea}}
            </a>
        </div>
        <div class="enen">
            <span>特色:</span>
            <a @click="bia" :class="{oo:isFea}" href="#">精品房源</a>
            <a @click="biaa" :class="{oo:isFe}" href="#">业主委托</a>
            <a @click="biaaa" :class="{oo:isF}" href="#">地铁房</a>
        </div>
    </div>
</div>
<div id="f6" class="gg">
    <ul id="f66">
        <li @click="toggle(index)" v-for="(n,index) in hResource"><a :class="{fy:isFy===index}" href="#">{{n.rce}}</a></li>
    </ul>
    <p>您好，真二网为您找到<span>1475</span>套真实房源信息 </p>
</div>
<div id="f7" class="gg">
<?php 
	foreach ($houses as $house) {
?>
    <ul id="f77">
        <li>
            <a href="houses/index_house?house_id=<?php echo $house->house_id;?>">
            <img src="<?php echo $house->img1;?>" alt=""/>
            </a>
            <div class="kk">
                <a href="houses/index_house?house_id=<?php echo $house->house_id;?>"><?php echo $house->location;?></a>
            </div>
            <div class="ll">
                <table>
                    <tr>
                        <td>
                          建筑时间：<?php echo $house->year;?>	</td>
                    </tr>
                    <tr class="kl" >
                        <td class="kll">
                            楼层：<?php echo $house->floor;?>楼
                        </td>
                    </tr>
                </table>
                <div class="lp">
                    <strong><?php echo $house->price;?><b>万</b></strong>
                    <span><?php echo $house->area;?>/㎡</span>
                </div>
                <!-- <div id="sc">
                    <a :class="{scc:isScc}"  @mousemove="sscc"  @mouseout="sc" href=""><span :class="{ssc:isSsc}">收藏房源</span></a>
                </div> -->
            </div>
            <div id="lt1">
                <span class="lt">业主委托</span>
                <span class="lt">精品房源</span>
                <span class="lt">精品房源</span>
            </div>
        </li>
    </ul>
<?php }?>
</div>
<script src="js/vue.js"></script>
<script src="js/jq.js"></script>
<script>
    var vm2=new Vue({
        el: "#f55",
        data: {
            region:[{rea:"不限"}, {rea:"道里区"},{rea:"道外区"},{rea:"南岗区"},{rea:"平房区"},{rea:"江南"}],
            total:[{rea:"不限"},{rea:"40万以下"},{rea:"40-60万"},{rea:"60-80万"},{rea:"80-100万"},{rea:"100-140万"}],
            area:[{rea:"不限"},{rea:"50㎡以下"},{rea:"50-70㎡"},{rea:"70-90㎡"},{rea:"90-110㎡"},{rea:"110-130㎡"}],
            hType:[{rea:"不限"},{rea:"一室"},{rea:"二室"},{rea:"三室"},{rea:"四室"},{rea:"五室以上"}],
            fitment:[{rea:"不限"},{rea:"毛坯"},{rea:"简装"},{rea:"中装"},{rea:"精装"},{rea:"豪装"}],
            feature:[{rea:"精品房源"},{rea:"业主委托"},{rea:"地铁房"}],
            isOo:0,
            isOp:0,
            isOi:0,
            isOu:0,
            isOy:0,
            isFea:false,
            isFe:false,
            isF:false,
        },
        methods:{
            toggle: function (i) {
                this.isOo=i;
            },
            toggl: function (i) {
                this.isOp=i;
            },
            togg: function (i) {
                this.isOi=i;
            },
            tog: function (i) {
                this.isOu=i;
            },
            to: function (i) {
                this.isOy=i;
            },
            bia: function(){
                this.isFea=!this.isFea;
            },
            biaa: function(){
                this.isFe=!this.isFe;
            },
            biaaa: function(){
                this.isF=!this.isF;
            }
        }
    });
    var vm1=new Vue({
        el: "#f66",
        data: {
            hResource:[{rce:"全部房源"},{rce:"精品房源"}],
            isFy:0,
        },
        methods:{
            toggle: function (i) {
                this.isFy=i;
            }
        }
    });
    // var vm=new Vue({
    //     el: "#f77",
    //     data: {
    //         hImg:"img/200.134.jpg",
    //         hName:"哈哈哈哈哈房",
    //         house:[{type:"1室 1厅 1厨 1卫"},{type:"南北通透"},{type:"80㎡"}],
    //         house1:[{topping:"5/7层"},{topping:"精炼"},{topping:"2006"}],
    //         house2:[{feature:"业主委托"},{feature:"精品房源"},{feature:"精品房源"}],
    //         tPrice:114,
    //         price:13333,
    //         isScc:false,
    //         isSsc:true
    //     },
    //     methods:{
    //         sscc:function () {
    //             this.isScc=true;
    //             this.isSsc=false;
    //             // alert(111);
    //         },
    //         sc:function () {
    //             this.isScc=false;
    //             this.isSsc=true;
    //         },
    //         houses:function () {
    //         	$.get("houses/get",{},function(data){
    //         			console.log(data);
    //         	},"json");
    //         }
    //     }
    // });
    // // vm.houses();
</script>
	<!-- <script src="js/bootstrap.min.js"></script> -->
</body>
</html>