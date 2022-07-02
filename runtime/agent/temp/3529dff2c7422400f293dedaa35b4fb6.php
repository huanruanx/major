<?php /*a:3:{s:41:"F:\web\yiyanyun\app\agent\view\index.html";i:1652011603;s:49:"F:\web\yiyanyun\app\agent\view\public\header.html";i:1652098543;s:49:"F:\web\yiyanyun\app\agent\view\public\footer.html";i:1647341202;}*/ ?>
<!--
 * @Author       : Lucifer
 * @Date         : 2022-04-10 20:27:36
 * @LastEditTime : 2022-05-09 20:15:29
 * @FilePath     : \yiyanyun\app\agent\view\public\header.html
-->
<!DOCTYPE html>
<html lang="zh">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="author" content="yinq">
  <title>YIYANYUN - 代理控制台</title>
  <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-touch-fullscreen" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="default">
  <link rel="stylesheet" type="text/css" href="/static/css/materialdesignicons.min.css">
  <link rel="stylesheet" type="text/css" href="/static/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/static/css/animate.min.css">
  <link rel="stylesheet" type="text/css" href="/static/css/style.min.css">
  <link rel="stylesheet" type="text/css" href="/static/css/style.esc.css">
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
  <div class="lyear-layout-web">
    <div class="lyear-layout-container">
      <!--左侧导航-->
      <aside class="lyear-layout-sidebar">

        <!-- logo -->
        <div id="logo" class="sidebar-header">
          <p class="text-center" style="margin-top:30px"><img class="img-avatar img-avatar-48 m-r-10" style="width: 50px;height: 50px;" src="/static/images/users/avatar.jpg"
              alt="其实这只是个图片" /></p>
          <p class="text-center"><b><span>我的ID <?php echo htmlentities($aid); ?></span></b> </p>
        </div>

        <div class="lyear-layout-sidebar-info lyear-scroll">
          <nav class="sidebar-main">
            <ul class="nav-drawer">
              <li class="nav-item active"> <a href="/agent/index.html"><i class="mdi mdi-home"></i> <span>后台首页</span></a> </li>
              <li class="nav-item nav-item-has-subnav">
                <a href="javascript:void(0)"><i class="mdi mdi-projector-screen"></i> <span>项目管理</span></a>
                <ul class="nav nav-subnav">
                  <li> <a href="/agent/pro">项目列表</a> </li>
                </ul>
              </li>
              <li class="nav-item nav-item-has-subnav">
                <a href="javascript:void(0)"><i class="mdi mdi-card-text-outline"></i> <span>卡密管理</span></a>
                <ul class="nav nav-subnav">
                  <li> <a href="/agent/scode">单卡管理</a> </li>
                  <li> <a href="/agent/scode/scodeadd">单卡添加</a> </li>
                </ul>
              </li>
            </ul>
          </nav>

          <div class="sidebar-footer">
            <p class="copyright">Copyright &copy; 2019-2023. <a target="_blank" href="http://lyear.itshubao.com">易验云</a> All
              rights reserved.</p>
          </div>
        </div>

      </aside>
      <!--End 左侧导航-->

      <!--头部信息-->
      <header class="lyear-layout-header">

        <nav class="navbar">

          <div class="navbar-left">
            <div class="lyear-aside-toggler">
              <span class="lyear-toggler-bar"></span>
              <span class="lyear-toggler-bar"></span>
              <span class="lyear-toggler-bar"></span>
            </div>
          </div>

          <ul class="navbar-right d-flex align-items-center">
          </ul>

        </nav>

      </header>
      <!--End 头部信息-->

<!--页面主要内容-->
<main class="lyear-layout-content">

  <div class="container-fluid p-t-15">
    <div class="row">
      <div class="col-md-3">
        <div class="card wave wave-animate-slow wave-primary">
          <div class="card-body position-relative">
            <div class="flex-box">
              <span class="img-avatar img-avatar-48 bg-translucent"><i class="mdi mdi-comment-outline fs-22"></i></span>
              <span class="fs-22 lh-22"><?php echo htmlentities($code); ?> 张</span>
            </div>
            <div class="text-right">卡密总数</div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card wave wave-animate wave-danger">
          <div class="card-body position-relative">
            <div class="flex-box">
              <span class="img-avatar img-avatar-48 bg-translucent"><i class="mdi mdi-comment-outline fs-22"></i></span>
              <span class="fs-22 lh-22"><?php echo htmlentities($use_code); ?> 张</span>
            </div>
            <div class="text-right">未激活卡</div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card wave wave-animate wave-infos">
          <div class="card-body position-relative">
            <div class="flex-box">
              <span class="img-avatar img-avatar-48 bg-translucent"><i class="mdi mdi-comment-outline fs-22"></i></span>
              <span class="fs-22 lh-22"><?php echo htmlentities($id); ?> 位</span>
            </div>
            <div class="text-right">我的ID</div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card wave wave-animate-fast wave-info">
          <div class="card-body position-relative">
            <div class="flex-box">
              <span class="img-avatar img-avatar-48 bg-translucent"><i class="mdi mdi-comment-outline fs-22"></i></span>
              <span class="fs-22 lh-22"><?php echo htmlentities($pro); ?> 个</span>
            </div>
            <div class="text-right">项目总数</div>
          </div>
        </div>
      </div>
    </div>

  </div>
</main>
<!--End 页面主要内容-->
</div>
</div>

<script type="text/javascript" src="/static/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/js/popper.min.js"></script>
<script type="text/javascript" src="/static/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/static/js/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="/static/js/jquery.cookie.min.js"></script>
<script type="text/javascript" src="/static/js/main.min.js"></script>
<script type="text/javascript" src="/static/js/Chart.min.js"></script>
<script type="text/javascript" src="/static/js/sha1.min.js"></script>
<script type="text/javascript" src="/static/js/lyear-loading.min.js"></script>
<script type="text/javascript" src="/static/js/app.min.js"></script>
<script type="text/javascript" src="/static/js/bootstrap-notify.min.js"></script>
</body>
</html>
