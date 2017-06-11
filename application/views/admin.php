<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>管理员登录</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<div class="wrapper" id="app">
    <div id="header">
        <img class="card" src="img/logo.png" alt="">
        <div class="title">管理通行证</div>
    </div>
    <div class="hr"></div>
    <div style="overflow: hidden;">
        <div id="form">
            <table>
                <tr>
                    <td>用户名</td>
                    <td><input type="text" name="username" id="username" placeholder="请输入姓名"></td>
                </tr>
                <tr>
                    <td>密<span style="opacity: 0;">户</span>码</td>
                    <td>
                        <input type="password" name="password" id="password" placeholder="请输入密码"><br>
                        <div id="submit">登 录</div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <!-- <img src="img/footer.png" alt="" id="footer"> -->
</div>

<script src="js/jq.js"></script>
<!-- <script src="js/vue.js"></script> -->
<script>
    $(function () {
       $("#submit").on("click",function(){
            var username = $("#username").val();
            var password = $("#password").val();
            if(username == ""){
                    alert("用户名不能为空");
                    return false;
                }
                if(password == ""){
                    alert("密码不能为空");
                    return false;
                }
                else{
                    $.get("admins/do_login",{
                        username: username,
                        password: password
                    },function(data){
                        // alert(data);
                        if(data == "have"){
                            window.location.href="http://127.0.0.1/house/admins/logs";
                        }
                    },"text");
                }
       });
    });
</script>
</body>
</html>