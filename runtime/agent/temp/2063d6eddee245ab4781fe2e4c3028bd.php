<?php /*a:3:{s:39:"F:\web\yiyanyun\app\agent\view\pro.html";i:1647739648;s:49:"F:\web\yiyanyun\app\agent\view\public\header.html";i:1652011654;s:49:"F:\web\yiyanyun\app\agent\view\public\footer.html";i:1647341202;}*/ ?>
<!--
 * @Author       : Lucifer
 * @Date         : 2022-04-10 20:27:36
 * @LastEditTime : 2022-05-08 20:07:34
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
          <a href="/agent/index.html"><img src="/static/images/logo-sidebar.png" title="LightYear" alt="LightYear" /></a>
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
<main class="lyear-layout-content">

    <div class="container-fluid p-t-15">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="check-all">
                                                <label class="custom-control-label" for="check-all"></label>
                                            </div>
                                        </th>
                                        <th>编号</th>
                                        <th>项目编号</th>
                                        <th>项目余额</th>
                                        <th>添加时间</th>
                                        <th>天卡价格</th>
                                        <th>周卡价格</th>
                                        <th>月卡价格</th>
                                        <th>整年价格</th>
                                        <th>永久价格</th>
                                        <th>状态</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$agent): $mod = ($i % 2 );++$i;?>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input ids" name="ids[]"
                                                    value="1" id="ids-1">
                                                <label class="custom-control-label" for="ids-1"></label>
                                            </div>
                                        </td>
                                        <td><?php echo htmlentities($agent['id']); ?></td>
                                        <td><?php echo htmlentities($agent['pid']); ?></td>
                                        <td><?php echo htmlentities($agent['balance']); ?></td>
                                        <td><?php echo htmlentities($agent['time']); ?></td>
                                        <td><?php echo htmlentities($agent['day']); ?></td>
                                        <td><?php echo htmlentities($agent['zhou']); ?></td>
                                        <td><?php echo htmlentities($agent['month']); ?></td>
                                        <td><?php echo htmlentities($agent['year']); ?></td>
                                        <td><?php echo htmlentities($agent['permanent']); ?></td>
                                        <td><?php if($agent['status'] == 'y'): ?>正常<?php else: ?>禁用<?php endif; ?></td>
                                    </tr>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </tbody>
                            </table>
                        </div>
                        <?php echo $page; ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>



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