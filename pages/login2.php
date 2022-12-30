<!-- <?php
if($_COOKIE["djs"]){
    echo "<script language='javascript'>\n";
        echo "location.href='../index.php'\n";   //如果存在cookie就跳转回主页
        echo "</script>";
}
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入</title>
    <link rel="stylesheet" href="../css/login.css">
</head>

<style>
    .yzm{
        display: flex;
        flex-direction: row;
        justify-content: space-evenly;
        padding-top: 40px;
        padding-right: 60px;
        padding-left: 70px;
    }
    .code
    {
         background-color: aquamarine;
     }
     #inputCode{
        /* margin-top: 40px;
        margin-left: 90px;
        margin-right: 90px; */
        display: flex;
        flex-direction: row;
        justify-content: center;
        border: 2px solid #d9d9d9;
        border-radius: 10px;
     }
   
</style>

<script src="../js/login.js"></script>
<body>
    <div class="con_body">
        <div class="con_left">
            <span id="con_font">欢迎来到独角兽资源网</span>
        </div>
        <div class="con_right_1">
            <p style="text-align:center;">
            <div class="login_con">
                <div class="login_con_top">
                    <p style="text-align:center ;">账号登入</p>
                </div>
                <!-- 登入框 -->
                <form action="login.php" method="post" class="login_all">
                    <div class="number">
                        <img src="../images/user.png" width="17px" height="17px">
                        <input type="email" id="number" placeholder="邮箱" name="name">
                    </div>
                    <div class="number">
                        <img src="../images/lock.png" width="17px" height="17px">
                        <input type="password" id="number" placeholder="密码" name="passwd">
                    </div>
                    <!-- // 验证码区域 -->
                    <div class="yzm">
                        <div id="checkCode" class="code"  onclick="createCode(4)" ></div>
                        <input type="text" id="inputCode"  style="float:left;" />
                    </div>
                    <div class="submit_button">
                        <input type="submit" id="submit" value="登入" onclick="validateCode()">
                    </div>
                </form>
                <div class="login_foot">
                    <a href="forget_passwd.php">忘记密码</a>
                    <a href="register.html">注册</a>
                </div>
            </div>
            </p>
        </div>
    </div>
</body>

</html>