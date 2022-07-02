<?php /*a:1:{s:41:"F:\web\yiyanyun\app\agent\view\login.html";i:1648295561;}*/ ?>
<!DOCTYPE html>
<html lang="zh">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="keywords" content="LightYear,LightYearAdmin,光年,后台模板,后台管理系统,光年HTML模板">
    <meta name="description" content="Light Year Admin V4是一个基于Bootstrap v4.4.1的后台管理系统的HTML模板。">
    <meta name="author" content="yinq">
    <title>登录页面一 - 光年(Light Year Admin V4)后台管理系统模板</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link rel="stylesheet" type="text/css" href="/static/css/materialdesignicons.min.css">
    <link rel="stylesheet" type="text/css" href="/static/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/static/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="/static/css/style.min.css">
</head>

<body>
    <!--页面loading-->
    <div id="lyear-preloader" class="loading">
        <div class="ctn-preloader">
            <div class="round_spinner">
                <div class="spinner"></div>
                <img src="/static/images/loading-logo.png" alt="">
            </div>
        </div>
    </div>
    <!--页面loading end-->
    <div class="row no-gutters bg-white vh-100">
        <div class="col-md-6 col-lg-7 col-xl-8 d-none d-md-block"
            style="background-image: url(/static/images/login-bg-1.jpg); background-size: cover;">

            <div class="d-flex vh-100">
                <div class="p-5 align-self-end">
                    <img src="/static/images/logo.png" alt="...">
                    <br><br><br>
                    <p class="text-white">Light Year Admin V4是一个后台管理系统的HTML模板，基于Bootstrap v4.4.1。</p>
                </div>
            </div>

        </div>

        <div class="col-md-6 col-lg-5 col-xl-4 align-self-center">
            <div class="p-5">
                <div class="text-center">
                    <a href="index.html"> <img alt="light year admin" src="/static/images/logo-sidebar.png"> </a>
                </div>
                <p class="text-center text-muted"><small>请使用您的账号登录系统</small></p>

                <form action="#!" method="post">
                    <div class="form-group">
                        <label for="username">用户名</label>
                        <input type="text" class="form-control" id="user" placeholder="请输入您的用户名">
                    </div>

                    <div class="form-group">
                        <label for="password">密码</label>
                        <input type="password" class="form-control" id="password" placeholder="请输入您的密码">
                    </div>

                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="rememberme">
                            <label class="custom-control-label not-user-select" for="rememberme">5天内自动登录</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-block btn-primary" type="button" onclick="login()">立即登录</button>
                    </div>
                </form>
                <p class="text-center text-muted mt-3">Copyright © 2020 <a href="http://lyear.itshubao.com">IT书包</a>.
                    All right reserved</p>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="/static/js/jquery.min.js"></script><script type="text/javascript" src="/static/js/bootstrap-notify.min.js"></script><script type="text/javascript" src="/static/js/sha1.min.js"></script><script type="text/javascript" src="/static/js/lyear-loading.min.js"></script>
    <script type="text/javascript" src="/static/js/app.min.js"></script><script type="text/javascript" src="/static/js/main.min.js"></script>
    <script type="text/javascript" src="/static/js/jquery.min.js"></script>
    <script type="text/javascript" src="/static/js/main.min.js"></script>
    <script type="text/javascript">;</script>
    <!--消息提示-->
    <script src="/static/js/bootstrap-notify.min.js"></script>
    <script type="text/javascript" src="/static/js/lyear-loading.min.js"></script>
    <script type="text/javascript" src="/static/js/main.min.js"></script>
    <script type="text/javascript" src="/static/js/bootstrap-notify.min.js"></script>
    <script>
        function login() {
            user = $("#user").val();
            password = $("#password").val();
            $.post("<?php echo url('login'); ?>", { user: user, password: password }, function (res) {
                if (res.code == 200) {
                    showNotify(res.msg, 'success');
                    setTimeout("location.href='/agent/index'", 3000);
                } else {
                    showNotify(res.msg, 'danger');
                }
            }, 'json')
        }
    </script>
</body>

</html>