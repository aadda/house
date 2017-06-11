<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户注册</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/regist.css">
</head>
<body>
<div class="wrapper" id="app">
    <div id="header">
        <img class="card" src="img/logo.png" alt="">
        <div class="title">注册通行证</div>
        <a href="user/login" class="login">登录</a>
    </div>
    <div class="hr"></div>
    <table id="form">
        <tr>
            <td>用户名</td>
            <td>
                <input id="username" type="text" placeholder="请输入手机号">
                <span id="have"></span>
                <div class="ps">手机号</div>
            </td>
        </tr>
        <tr>
            <td>密&nbsp;&nbsp; 码</td>
            <td>
                <input type="password" placeholder="请输入密码" id="password1">
                <div class="ps">由6-16位字符组成</div>
            </td>
        </tr>
        <tr>
            <td>确认密码</td>
            <td>
                <input type="password" placeholder="请再次输入密码" id="password2" @blur="same">
                <span id="same"></span>
                <div class="ps">由6-16位字符组成</div>
            </td>
        </tr>
        <tr>
            <td>姓&nbsp;&nbsp; 名</td>
            <td>
                <input type="text" placeholder="请输入姓名" id="name">
                <div class="ps">中文组成</div>
            </td>
        </tr>
        <tr>
            <td>验证码</td>
            <td>
                <a class="code" href="javascript:;">
                    <div>1</div>
                    <div>2</div>
                    <div>3</div>
                    <div>4</div>
                </a>
                <a class="change" href="javascript:;">换一张</a>
                <br><br><br>
                <div class="ps">4位数字组成</div>
                <input type="text" placeholder="请输入验证码" class="code-input" id="code">
                <span id="error"></span>
                <div id="submit"><img src="img/regist.gif" alt="" @click="send"></div>
            </td>
        </tr>
    </table>
    <!-- <img src="img/footer.png" alt="" id="footer"> -->
</div>
</body>
<script src="js/jq.js"></script>
<!-- <script src="js/vue.js"></script> -->
<script>
    $(function () {
        // 该函数用来生成验证码
        function code() {
            var $coad = $(".code div");
            for (var i = 0; i < $coad.length; i++) {
                var random1 = Math.floor(Math.random() * 60 - 30);
                var random2 = Math.floor(Math.random() * 60 - 30);
                var random0 = Math.floor(Math.random() * 10);
                var random3 = Math.floor(Math.random() * 900000 + 100000);
                $coad.eq(i).css({
                    transform: "skew(" + random1 + "deg," + random2 + "deg)",
                    color: "#" + random3
                }).html(random0);
            }
        }

        // 该函数用来查询用户名是否存在
        function checkUser() {
            var $have = $("#have");
            var val = $("#username").val();
            if(val != ""){
                $.get("user/chack", {
                    username: val
                }, function (data) {
                    // console.log(data);
                    if (data == "have") {
                        $have.html("该用户名已被注册").css("color", "#f00");
                    } else {
                        $have.html("可以使用").css("color", "#5bc700");
                    }
                }, "text");
            }
        }

        
        code(); //生成验证码
        $(document).on("click", ".change", code);
        $(document).on("click", ".code", code);
        $(document).on("blur", "#username", checkUser);
        $(document).on("click", "#submit", regist);
        function regist(){
            var username = $("#username").val();
            var password1 = $("#password1").val();
            var password2 = $("#password2").val();
            var name = $("#name").val();
            var code = $("#code").val();
            var str = $(".code").text();
            var nowStr = str.replace(/\s/g, "");
            if(username == ""){
                    alert("用户名不能为空");
                    return false;
                }
                if(password1 == ""){
                    alert("密码不能为空");
                    return false;
                }
                if(password2 == ""){
                    alert("密码不能为空");
                    return false;
                }
                if(password1 != password2){
                    alert("两次输入的密码不一致");
                    return false;
                }
                if (code != nowStr) {
                    $("#error").html("验证码输入错误!");
                }else{
                    $.get("user/regist",{
                        username: username,
                        password: password1,
                        name: name
                    },function(data){
                        alert(data);
                        if(data == "注册成功"){
                            window.location.href="http://127.0.0.1/house/user/login";
                        };
                    },"text");
                }

        };

    });
</script>

</html>