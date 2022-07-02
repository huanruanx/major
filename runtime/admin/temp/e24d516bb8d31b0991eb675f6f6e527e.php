<?php /*a:3:{s:42:"F:\web\yiyanyun\app\admin\view\indexs.html";i:1651927880;s:47:"F:\web\yiyanyun\app\admin\view\public\head.html";i:1651925433;s:49:"F:\web\yiyanyun\app\admin\view\public\footer.html";i:1649898267;}*/ ?>
<!--
 * @Author       : Lucifer
 * @Date         : 2022-05-06 15:41:44
 * @LastEditTime : 2022-05-07 20:50:46
 * @FilePath     : \yiyanyun\app\admin\view\indexs.html
-->
<!--
 * @Author       : Lucifer
 * @Date         : 2022-05-06 19:46:46
 * @LastEditTime : 2022-05-07 20:10:19
 * @FilePath     : \yiyanyun\app\admin\view\public\head.html
-->
<!--
 *                                                     __----~~~~~~~~~~~------___
 *                                    .  .   ~~//====......          __--~ ~~
 *                    -.            \_|//     |||\\  ~~~~~~::::... /~
 *                 ___-==_       _-~o~  \/    |||  \\            _/~~-
 *         __---~~~.==~||\=_    -_--~/_-~|-   |\\   \\        _/~
 *     _-~~     .=~    |  \\-_    '-~7  /-   /  ||    \      /
 *   .~       .~       |   \\ -_    /  /-   /   ||      \   /
 *  /  ____  /         |     \\ ~-_/  /|- _/   .||       \ /
 *  |~~    ~~|--~~~~--_ \     ~==-/   | \~--===~~        .\
 *           '         ~-|      /|    |-~\~~       __--~~
 *                       |-~~-_/ |    |   ~\_   _-~            /\
 *                            /  \     \__   \/~                \__
 *                        _--~ _/ | .-~~____--~-/                  ~~==.
 *                       ((->/~   '.|||' -_|    ~~-/ ,              . _||
 *                                  -_     ~\      ~~---l__i__i__i--~~_/
 *                                  _-~-__   ~)  \--______________--~~
 *                                //.-~~~-~_--~- |-------~~~~~~~~
 *                                       //.-~~~--\
 *                       ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 * 
 *                               神兽护体            永无BUG
 -->

<!DOCTYPE html>
<html lang="zh">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="keywords" content="易验云,网络验证,AIDE,易语言,IAPP,ANDLUA,Python">
  <meta name="description" content="易验云网络验证，一种高效的验证！">
  <meta name="author" content="yinq">
  <title><?php echo config('web.web_title'); ?></title>
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

<body data-theme="<?php echo htmlentities($theme); ?>">
  <!-- <body data-theme="dark"> -->
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

        <div id="logo" class="sidebar-header">
          <p class="text-center" style="margin-top:30px"><img class="img-avatar img-avatar-48 m-r-10" style="width: 50px;height: 50px;" src="/static/images/users/avatar.jpg"
              alt="其实这只是个图片" /></p>
          <p class="text-center"><b><span><?php echo config('web.nick'); ?></span></b> </p>
        </div>

        <div class="lyear-layout-sidebar-info lyear-scroll">
          <nav class="sidebar-main">
            <ul class="nav-drawer">
              <li class="nav-item active"> <a href="/admin/index.html"><i class="mdi mdi-home"></i>
                  <span>后台首页</span></a> </li>
              <li class="nav-item nav-item-has-subnav">
                <a href="javascript:void(0)"><i class="mdi mdi-projector-screen"></i> <span>项目管理</span></a>
                <ul class="nav nav-subnav">
                  <li> <a href="/admin/project">项目列表</a> </li>
                  <li> <a href="/admin/project/proadd">项目添加</a> </li>
                  <li> <a href="/admin/proclone">项目克隆</a> </li>
                </ul>
              </li>
              <li class="nav-item nav-item-has-subnav">
                <a href="javascript:void(0)"><i class="mdi mdi-account-box-multiple"></i> <span>用户管理</span></a>
                <ul class="nav nav-subnav">
                  <li> <a href="/admin/user">用户列表</a> </li>
                </ul>
              </li>
              <li class="nav-item nav-item-has-subnav">
                <a href="javascript:void(0)"><i class="mdi mdi-card-text-outline"></i> <span>卡密管理</span></a>
                <ul class="nav nav-subnav">
                  <li> <a href="/admin/scode">单卡管理</a> </li>
                  <li> <a href="/admin/scode/scodeadd">单卡添加</a> </li>
                  <li> <a href="/admin/dcode">双卡列表</a> </li>
                  <li> <a href="/admin/dcode/dcodeadd">双卡添加</a> </li>
                </ul>
              </li>
              <li class="nav-item nav-item-has-subnav">
                <a href="javascript:void(0)"><i class="mdi mdi-account-badge-horizontal"></i> <span>代理管理</span></a>
                <ul class="nav nav-subnav">
                  <li> <a href="/admin/agent">代理列表</a> </li>
                  <li> <a href="/admin/agent/apl">项目列表</a> </li>
                </ul>
              </li>
              <li class="nav-item nav-item-has-subnav">
                <a href="javascript:void(0)"><i class="mdi mdi-cloud-sync"></i> <span>系统管理</span></a>
                <ul class="nav nav-subnav">
                  <li> <a href="/admin/system">系统设置</a> </li>
                  <li> <a href="/admin/parts">插件添加</a> </li>
                </ul>
              </li>
              <li class="nav-item nav-item-has-subnav">
                <a href="javascript:void(0)"><i class="mdi mdi-apple-icloud"></i> <span>接口管理</span></a>
                <ul class="nav nav-subnav">
                  <li> <a href="/admin/api">接口列表</a> </li>
                </ul>
              </li>
              <li class="nav-item nav-item-has-subnav">
                <a href="/admin/login/logout"><i class="mdi mdi-logout-variant"></i> <span>退出登录</span></a>
              </li>
            </ul>
          </nav>

          <div class="sidebar-footer">
            <p class="copyright">Copyright &copy; <?php echo config('web.copyright'); ?>. <a target="_blank"
                href="https://github.com/yiyanyun/major"><?php echo config('web.copyright'); ?></a> All
              rights reserved.</p>
            <p class="copyright"><?php echo config('web.beian'); ?></p>
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
            <li class="dropdown dropdown-notice">
              <span data-toggle="dropdown" class="icon-item">
                <i class="mdi mdi-bell-outline"></i>
                <span class="badge badge-danger">10</span>
              </span>
              <div class="dropdown-menu dropdown-menu-right">
                <div class="lyear-notifications">

                  <div class="lyear-notifications-title clearfix" data-stopPropagation="true"><a href="#!"
                      class="float-right">查看全部</a> </div>
                  <div class="lyear-notifications-info lyear-scroll">
                    <a href="#!" class="dropdown-item"
                      title="树莓派销量猛增，疫情期间居家工作学习、医疗领域都需要它">树莓派销量猛增，疫情期间居家工作学习、医疗领域都需要它</a>
                    <a href="#!" class="dropdown-item" title="GNOME 用户体验团队将为 GNOME Shell 提供更多改进">GNOME 用户体验团队将为 GNOME
                      Shell 提供更多改进</a>
                    <a href="#!" class="dropdown-item" title="Linux On iPhone 即将面世，支持 iOS 的双启动">Linux On iPhone 即将面世，支持
                      iOS 的双启动</a>
                    <a href="#!" class="dropdown-item" title="GitHub 私有仓库完全免费面向团队提供">GitHub 私有仓库完全免费面向团队提供</a>
                    <a href="#!" class="dropdown-item" title="Wasmtime 为 WebAssembly 增加 Go 语言绑定">Wasmtime 为 WebAssembly
                      增加 Go 语言绑定</a>
                    <a href="#!" class="dropdown-item" title="红帽借“订阅”成开源一哥，首创者 Cormier 升任总裁">红帽借“订阅”成开源一哥，首创者 Cormier
                      升任总裁</a>
                    <a href="#!" class="dropdown-item" title="Zend 宣布推出两项 PHP 新产品">Zend 宣布推出两项 PHP 新产品</a>
                  </div>
                </div>
              </div>
            </li>
            <!--切换主题配色-->
            <li class="dropdown dropdown-skin">
              <span data-toggle="dropdown" class="icon-item"><i class="mdi mdi-palette"></i></span>
              <ul class="dropdown-menu dropdown-menu-right" data-stopPropagation="true">
                <li class="drop-title">
                  <p>主题</p>
                </li>
                <li class="drop-skin-li clearfix">
                  <span class="inverse">
                    <input type="radio" name="site_theme" value="default" id="site_theme_1" checked>
                    <label for="site_theme_1"></label>
                  </span>
                  <span>
                    <input type="radio" name="site_theme" value="dark" id="site_theme_2">
                    <label for="site_theme_2"></label>
                  </span>
                  <span>
                    <input type="radio" name="site_theme" value="translucent" id="site_theme_3">
                    <label for="site_theme_3"></label>
                  </span>
                </li>
                <li class="drop-title">
                  <p>LOGO</p>
                </li>
                <li class="drop-skin-li clearfix">
                  <span class="inverse">
                    <input type="radio" name="logo_bg" value="default" id="logo_bg_1" checked>
                    <label for="logo_bg_1"></label>
                  </span>
                  <span>
                    <input type="radio" name="logo_bg" value="color_2" id="logo_bg_2">
                    <label for="logo_bg_2"></label>
                  </span>
                  <span>
                    <input type="radio" name="logo_bg" value="color_3" id="logo_bg_3">
                    <label for="logo_bg_3"></label>
                  </span>
                  <span>
                    <input type="radio" name="logo_bg" value="color_4" id="logo_bg_4">
                    <label for="logo_bg_4"></label>
                  </span>
                  <span>
                    <input type="radio" name="logo_bg" value="color_5" id="logo_bg_5">
                    <label for="logo_bg_5"></label>
                  </span>
                  <span>
                    <input type="radio" name="logo_bg" value="color_6" id="logo_bg_6">
                    <label for="logo_bg_6"></label>
                  </span>
                  <span>
                    <input type="radio" name="logo_bg" value="color_7" id="logo_bg_7">
                    <label for="logo_bg_7"></label>
                  </span>
                  <span>
                    <input type="radio" name="logo_bg" value="color_8" id="logo_bg_8">
                    <label for="logo_bg_8"></label>
                  </span>
                </li>
                <li class="drop-title">
                  <p>头部</p>
                </li>
                <li class="drop-skin-li clearfix">
                  <span class="inverse">
                    <input type="radio" name="header_bg" value="default" id="header_bg_1" checked>
                    <label for="header_bg_1"></label>
                  </span>
                  <span>
                    <input type="radio" name="header_bg" value="color_2" id="header_bg_2">
                    <label for="header_bg_2"></label>
                  </span>
                  <span>
                    <input type="radio" name="header_bg" value="color_3" id="header_bg_3">
                    <label for="header_bg_3"></label>
                  </span>
                  <span>
                    <input type="radio" name="header_bg" value="color_4" id="header_bg_4">
                    <label for="header_bg_4"></label>
                  </span>
                  <span>
                    <input type="radio" name="header_bg" value="color_5" id="header_bg_5">
                    <label for="header_bg_5"></label>
                  </span>
                  <span>
                    <input type="radio" name="header_bg" value="color_6" id="header_bg_6">
                    <label for="header_bg_6"></label>
                  </span>
                  <span>
                    <input type="radio" name="header_bg" value="color_7" id="header_bg_7">
                    <label for="header_bg_7"></label>
                  </span>
                  <span>
                    <input type="radio" name="header_bg" value="color_8" id="header_bg_8">
                    <label for="header_bg_8"></label>
                  </span>
                </li>
                <li class="drop-title">
                  <p>侧边栏</p>
                </li>
                <li class="drop-skin-li clearfix">
                  <span class="inverse">
                    <input type="radio" name="sidebar_bg" value="default" id="sidebar_bg_1" checked>
                    <label for="sidebar_bg_1"></label>
                  </span>
                  <span>
                    <input type="radio" name="sidebar_bg" value="color_2" id="sidebar_bg_2">
                    <label for="sidebar_bg_2"></label>
                  </span>
                  <span>
                    <input type="radio" name="sidebar_bg" value="color_3" id="sidebar_bg_3">
                    <label for="sidebar_bg_3"></label>
                  </span>
                  <span>
                    <input type="radio" name="sidebar_bg" value="color_4" id="sidebar_bg_4">
                    <label for="sidebar_bg_4"></label>
                  </span>
                  <span>
                    <input type="radio" name="sidebar_bg" value="color_5" id="sidebar_bg_5">
                    <label for="sidebar_bg_5"></label>
                  </span>
                  <span>
                    <input type="radio" name="sidebar_bg" value="color_6" id="sidebar_bg_6">
                    <label for="sidebar_bg_6"></label>
                  </span>
                  <span>
                    <input type="radio" name="sidebar_bg" value="color_7" id="sidebar_bg_7">
                    <label for="sidebar_bg_7"></label>
                  </span>
                  <span>
                    <input type="radio" name="sidebar_bg" value="color_8" id="sidebar_bg_8">
                    <label for="sidebar_bg_8"></label>
                  </span>
                </li>
              </ul>
            </li>
            <!--切换主题配色-->
            <!-- <li class="dropdown dropdown-profile">
              <a href="javascript:void(0)" data-toggle="dropdown" class="dropdown-toggle">
                <img class="img-avatar img-avatar-48 m-r-10" src="/static/images/users/avatar.jpg" alt="其实这只是个图片" />
                <span><?php echo config('web.nick'); ?></span>
              </a>
              <ul class="dropdown-menu dropdown-menu-right">
                <li>
                  <a class="dropdown-item" href="/admin"><i class="mdi mdi-account"></i> 个人信息</a>
                </li>
                <li>
                  <a class="dropdown-item" href="/admin/yun"><i class="mdi mdi-lock-outline"></i>
                    云端绑定</a>
                </li>
                <li>
                  <a class="dropdown-item" href="javascript:void(0)"><i class="mdi mdi-delete"></i> 清空缓存</a>
                </li>
                <li class="dropdown-divider"></li>
                <li>
                  <a class="dropdown-item" href="/admin/login/logout"><i class="mdi mdi-logout-variant"></i>
                    退出登录</a>
                </li>
              </ul>
            </li> -->
          </ul>
        </nav>
      </header>
      <!--End 头部信息-->

      <!-- 开始主体信息 -->
<main class="lyear-layout-content">
    <div class="container-fluid p-t-15">

        <div class="row">
            <div class="col-md-6 col-xl-3">
                <!-- <div class="card bg-primary text-white"> -->
                <div class="card">
                    <div class="card-body clearfix text-center">
                        <p class="text-center"><span class="img-avatar img-avatar-48 bg-translucent"><i
                                    class="mdi mdi-account-circle fs-22"></i></span></p>
                        <div class="text-center">
                            <span class="fs-22 lh-22">102,125.00</span>
                        </div>
                        <div class="text-center"><b>用户总数</b></div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <!-- <div class="card bg-danger text-white"> -->
                    <div class="card">
                    <div class="card-body clearfix">
                        <p class="text-center"><span class="img-avatar img-avatar-48 bg-translucent"><i
                                    class="mdi mdi-credit-card-outline fs-22"></i></span></p>
                        <div class="text-center">
                            <span class="fs-22 lh-22">102,125.00</span>
                        </div>
                        <div class="text-center"><b>单卡总数</b></div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <!-- <div class="card bg-success text-white"> -->
                    <div class="card">
                    <div class="card-body clearfix">
                        <p class="text-center"><span class="img-avatar img-avatar-48 bg-translucent"><i
                                    class="mdi mdi-credit-card-multiple-outline fs-22"></i></span></p>
                        <div class="text-center">
                            <span class="fs-22 lh-22">102,125.00</span>
                        </div>
                        <div class="text-center"><b>双卡总数</b></div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <!-- <div class="card bg-purple text-white"> -->
                    <div class="card">
                    <div class="card-body clearfix">
                        <p class="text-center"><span class="img-avatar img-avatar-48 bg-translucent"><i
                                    class="mdi mdi-account-group fs-22"></i></span></p>
                        <div class="text-center">
                            <span class="fs-22 lh-22">102,125.00</span>
                        </div>
                        <div class="text-center"><b>代理总数</b></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <header class="card-header">
                        <div class="card-title"><b>数据概览</b> </div>
                    </header>
                    <div class="card-body">
                        <canvas id="chart-vbar-2" width="400" height="150"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <header class="card-header">
                        <div class="card-title"><b>数据占比</b></div>
                    </header>
                    <div class="card-body">
                        <canvas id="chart-doughnut" width="280" height="350"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title"><b>最近活跃</b></div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="table-active">
                                    <tr>
                                        <td>日志ID</td>
                                        <td>登录用户</td>
                                        <td>登录时间</td>
                                        <td>登录状态</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>18680299395</td>
                                        <td>2022-04-25 21:07:25</td>
                                        <td>
                                            <a class="example-p-4" style="color: coral;" href="#!">详情</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>18680299395</td>
                                        <td>2022-04-25 21:07:25</td>
                                        <td>
                                            <a class="example-p-4" style="color: coral;" href="#!">详情</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>18680299395</td>
                                        <td>2022-04-25 21:07:25</td>
                                        <td>
                                            <a class="example-p-4" style="color: coral;" href="#!">详情</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>18680299395</td>
                                        <td>2022-04-25 21:07:25</td>
                                        <td>
                                            <a class="example-p-4" style="color: coral;" href="#!">详情</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>18680299395</td>
                                        <td>2022-04-25 21:07:25</td>
                                        <td>
                                            <a class="example-p-4" style="color: coral;" href="#!">详情</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title"><b>最近活跃</b></div>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img src="https://iconfont.alicdn.com/t/img/NdzEShoF8VBW/2c79db91-1469-4408-8cdf-2704d2fcca9d.png@1000h_1000w.png" style="width: 100px;" class="rounded" alt="...">
                            <p class="text-center"><h5>你好！管理员</h5></p>
                            <hr>
                            <p>生命不息 代码不停</p>
                            <hr>
                            <button type="button" class="btn btn-outline-purple">修改密码</button>
                            <button type="button" class="btn btn-outline-pink">云端对接</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-5">
                <div class="card">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="">
                                <div class="card-body clearfix">
                                    <div class="flex-box">
                                        <span class="img-avatar img-avatar-48 bg-translucent"><i
                                                class="mdi mdi-credit-card-multiple-outline fs-22"></i></span>
                                        <span class="fs-22 lh-22">5 张</span>
                                    </div>
                                    <div class="text-right"><b>员工打卡</b></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="">
                                <div class="card-body clearfix">
                                    <div class="flex-box">
                                        <span class="img-avatar img-avatar-48 bg-translucent"><i
                                                class="mdi mdi-credit-card-multiple fs-22"></i></span>
                                        <span class="fs-22 lh-22">3 张</span>
                                    </div>
                                    <div class="text-right test-bold">员工人数</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                这里可以放点媒体
            </div>
            <div class="col-md-5">
                <div class="card">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="">
                                <div class="card-body clearfix">
                                    <div class="flex-box">
                                        <span class="img-avatar img-avatar-48 bg-translucent"><i
                                                class="mdi mdi-credit-card-multiple-outline fs-22"></i></span>
                                        <span class="fs-22 lh-22">3 张</span>
                                    </div>
                                    <div class="text-right">物料单位</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="">
                                <div class="card-body clearfix">
                                    <div class="flex-box">
                                        <span class="img-avatar img-avatar-48 bg-translucent"><i
                                                class="mdi mdi-credit-card-multiple fs-22"></i></span>
                                        <span class="fs-22 lh-22">5 张</span>
                                    </div>
                                    <div class="text-right">物料类型</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="">
                                <div class="card-body clearfix">
                                    <div class="flex-box">
                                        <span class="img-avatar img-avatar-48 bg-translucent"><i
                                                class="mdi mdi-credit-card-multiple-outline fs-22"></i></span>
                                        <span class="fs-22 lh-22">3 张</span>
                                    </div>
                                    <div class="text-right">时产总量</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="">
                                <div class="card-body clearfix">
                                    <div class="flex-box">
                                        <span class="img-avatar img-avatar-48 bg-translucent"><i
                                                class="mdi mdi-credit-card-multiple fs-22"></i></span>
                                        <span class="fs-22 lh-22">5 张</span>
                                    </div>
                                    <div class="text-right">预计目标</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="">
                                <div class="card-body clearfix">
                                    <div class="flex-box">
                                        <span class="img-avatar img-avatar-48 bg-translucent"><i
                                                class="mdi mdi-credit-card-multiple-outline fs-22"></i></span>
                                        <span class="fs-22 lh-22">3 张</span>
                                    </div>
                                    <div class="text-right">订单总数</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="">
                                <div class="card-body clearfix">
                                    <div class="flex-box">
                                        <span class="img-avatar img-avatar-48 bg-translucent"><i
                                                class="mdi mdi-credit-card-multiple fs-22"></i></span>
                                        <span class="fs-22 lh-22">5 张</span>
                                    </div>
                                    <div class="text-right">催收次数</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <header class="card-header">
                        <div class="card-title">用户走向</div>
                    </header>
                    <div class="card-body">
                        <canvas id="chart-area-1" width="400" height="250"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <header class="card-header">
                        <div class="card-title">数据走向</div>
                    </header>
                    <div class="card-body">
                        <canvas id="chart-vbar-1" width="400" height="250"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <header class="card-header">
                        <div class="card-title">首页访问</div>
                    </header>
                    <div class="card-body">
                        <canvas id="chart-line-4" width="400" height="250"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <header class="card-header">
                        <div class="card-title">数据走向</div>
                    </header>
                    <div class="card-body">
                        <canvas id="chart-vbar-1" width="400" height="250"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <header class="card-header">
                        <div class="card-title">数据走向</div>
                    </header>
                    <div class="card-body">
                        <canvas id="chart-vbar-1" width="400" height="250"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>
<!--
 * @Author: Lucifer
 * @Date: 2022-04-10 20:27:36
 * @LastEditTime: 2022-04-14 09:04:27
 * @FilePath: \yiyanyun\app\admin\view\public\footer.html
-->
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

<!-- <script>
  function host(params) {

  }
  // 间隔循环监控
  orderlst = window.setInterval(function () {
    alert('1231231');
  }, 5000); 
</script> -->
</body>

</html>


<script>
    new Chart($("#chart-area-1"), {
        type: 'line',
        data: {
            labels: ["一月", "二月", "三月", "四月", "五月", "六月", "七月"],
            datasets: [{
                label: "收入",
                backgroundColor: "rgba(51,202,185,0.5)",
                // background-image: linear-gradient(red, yellow);
                // backgroundImage: linear - gradient("red", "yellow"),
                borderWidth: 0,
                borderColor: "rgba(0,0,0,0)",
                data: [0, 59, 80, 58, 20, 55, 40]
            }]
        },
        options: {
            legend: {
                display: false
            },
        }
    });

    new Chart($("#chart-vbar-2"), {
        type: 'bar',
        data: {
            labels: ["激活单卡", "激活双卡", "项目总数", "用户总数", "单卡总数", "双卡总数"],
            datasets: [{
                label: "数值",
                backgroundColor: "rgba(173,225,47,0.5)",
                borderColor: "rgba(0,0,0,0)",
                hoverBackgroundColor: "rgba(204, 217, 255,0.7)",
                hoverBorderColor: "rgba(0,0,0,0)",
                data: [10, 59, 80, 58, 20, 55]
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    new Chart($("#chart-doughnut"), {
        type: 'doughnut',
        data: {
            labels: ["用户", "单卡", "双卡"],
            datasets: [{
                data: [300, 50, 100],
                backgroundColor: ['rgba(255,99,132,1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)']
            }]
        },
        options: {
            responsive: false
        }
    });
</script>