<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/ggg.css"/>
    <title>此房详细信息</title>
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
<div>
    <div id="g1">
        <a href="">真二网</a>>
        <a href="">哈尔滨二手房</a>>
        <a href="">中原区二手房</a>>
        <a href="">东村1号院</a>
    </div>
    <div id="g2">
        <p id="g21">
            <span>房源编号：<?php echo $houses->house_id?></span>
            <span>更新时间：2天前</span>
        </p>
        <a id="g211" href="#">收藏房源</a>
        <div id="g22" class="d1">
            <ul id="big-img">
                <li v-for="(n,index) in dimg" :class="{show1:isShow1===index}">
                    <span><img :src="n.img" alt=""/></span>
                </li>
            </ul>
        </div>
        <div id="g222">
            <span @click="prev" class="but d1">&lt</span>
            <span @click="next" class="but d2">&gt</span>
            <ul id="small-img">
                <li @click="smell(index)" v-for="(n,index) in ximg" :class="{show2:isShow2===index}">
                    <span><img :src="n.img" alt=""/></span>
                </li>
            </ul>

        </div>
        <div id="g3">
            <div id="g31">
                <h2 class="hName"><?php echo $houses->location?></h2>
                    <span v-for="n in house2" class="hFea">{{n.feature}}</span>
            </div>
            <table>
                <tr>
                    <td class="price">
                        <strong class="w-price">
                            <?php echo $houses->price?><span>万</span>
                        </strong>
                    </td>
                    <td>
                        <label>首付:</label>
                        <?php echo $houses->frist?>万
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>单价:</label>
                        <?php echo $houses->unit?>元/㎡
                    </td>
                    <td>
                        <label>月供:</label>
                        <?php echo $houses->monthly?>元
                    </td>
                </tr>
                <tr>
                    <td colspan="3" rowspan="2">
                        <p class="area-type">
                            <span class="area"><?php echo $houses->area?>㎡
                            </span>
                            &nbsp;|&nbsp
                            <span><?php echo $houses->describe?>
                            </span>
                        </p>
                    </td>
                </tr>
                <tr></tr>
                <tr>
                    <td>
                        <label>楼层:</label>
                        <?php echo $houses->floor?>层
                    </td>
                    <td>
                        <label>年代:</label>
                        <?php echo $houses->year?>年
                    </td>
                </tr>
                <tr class="last-raw">
                    <td>
                        <label>朝向:</label>
                        <?php echo $houses->location1?>

                    </td>
                    <td>
                        <label>装修:</label>
                        <?php echo $houses->fitment?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>电梯:</label>
                        <?php echo $houses->floor1?>
                    </td>
                    <td>
                        <label>楼型:</label>
                        <?php echo $houses->type?>
                    </td>
                </tr>
            </table>
            <div id="owner-info">
                <img src="img/39.jpg" alt=""/>
                <p class="uName">{{username}}先生
                    <span>业主</span>
                </p>
                <a class="call" href="#">与业主聊天</a>
            </div>
        </div>
    </div>
</div>
<script src="js/vue.js"></script>
<script>
    var index = 0;
    var vm = new Vue({
        el: '#g2',
        data: {
            dimg:[{img:"dimg/111.jpg"},{img:"dimg/112.jpg"},{img:"dimg/113.jpg"}],
            ximg:[{img:"ximg/11.jpg"},{img:"ximg/22.jpg"},{img:"ximg/33.jpg"}],
            tp:120,
            sp:"36.0",
            mp:15190,
            yp:4458,
            area:79,
            type:"2室 2厅 1厨 1卫",
            topping:"6/7",
            year:2008,
            cha:"南",
            zhu:"中装",
            username:"呵呵",
            house2:[{feature:"业主委托"},{feature:"精品房源"},{feature:"精品房源"}],
            isShow1:0,
            isShow2:0,
//            index:0
        },
        methods: {
            smell: function(i){
                this.isShow1=i;
                this.isShow2=i;
                index = i;
            },
            prev: function (){
                if(index==0){
                    index=2;
                    this.isShow1=index;
                    this.isShow2=index;
                }else{
                    index--;
                    this.isShow1=index;
                    this.isShow2=index;
                }
            },
            next: function (){
                if(index==2){
                    index=0;
                    this.isShow1=index;
                    this.isShow2=index;
                }else{
                    index++;
                    this.isShow1=index;
                    this.isShow2=index;
                }
            }
        }
    })
</script>
</body>
</html>