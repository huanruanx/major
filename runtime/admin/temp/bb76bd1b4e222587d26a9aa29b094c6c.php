<?php /*a:3:{s:44:"F:\web\yiyanyun\app\admin\view\dcodeadd.html";i:1648165725;s:49:"F:\web\yiyanyun\app\admin\view\public\header.html";i:1652228345;s:49:"F:\web\yiyanyun\app\admin\view\public\footer.html";i:1652233101;}*/ ?>
<!--
 * @Author       : Lucifer
 * @Date         : 2022-05-06 19:46:46
 * @LastEditTime : 2022-05-11 08:19:01
 * @FilePath     : \yiyanyun\app\admin\view\public\header.html
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
  <link rel="stylesheet" type="text/css" href="/static/js/jquery-confirm/jquery-confirm.min.css">
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
          </ul>
        </nav>
      </header>
      <!--End 头部信息-->

      <!-- 开始主体信息 -->
<main class="lyear-layout-content">

    <div class="container-fluid p-t-15">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">卡密生成</div>
                    </div>
                    <div class="card-body">
                        <form class="needs-validation" novalidate>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationTooltip01">项目绑定</label>
                                    <div class="form-group">
                                        <select class="custom-select" name="project_id" required>
                                            <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$projectlist): $mod = ($i % 2 );++$i;?>
                                            <option value="<?php echo htmlentities($projectlist['id']); ?>"><?php echo htmlentities($projectlist['name']); ?></option>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                        <div class="invalid-feedback">请选择一项</div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationTooltip02">卡密类型</label>
                                    <div class="form-group">
                                        <select class="custom-select" name="type" required>
                                            <option value="0">单码</option>
                                        </select>
                                        <div class="invalid-feedback">请选择一项</div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationTooltipUsername">时长</label>
                                    <div class="form-group">
                                        <select class="custom-select" name="value" required>
                                            <option value="1">一天</option>
                                            <option value="2">三天</option>
                                            <option value="3">一周</option>
                                            <option value="4">一月</option>
                                            <option value="5">一年</option>
                                            <option value="6">永久</option>
                                        </select>
                                        <div class="invalid-feedback">请选择一项</div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-3 mb-3">
                                    <label for="validationTooltip03">数量</label>
                                    <input type="text" name="trait" class="form-control" id="validationTooltip03"
                                        placeholder="单次生成不宜超过200" value="1" required>
                                    <div class="invalid-tooltip">
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="validationTooltip04">长度</label>
                                    <select class="custom-select" name="kami_lenght" id="validationTooltip04" required>
                                        <option value="2">18</option>
                                        <option value="3">32</option>
                                        <option value="4">40</option>
                                    </select>
                                    <div class="invalid-tooltip">
                                        请选择有效状态。
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="validationTooltip04">特点</label>
                                    <select class="custom-select" name="tatol" id="validationTooltip04" required>
                                        <option value="Single">全大写</option>
                                        <option value="2">全数字</option>
                                        <option value="3">全混合</option>
                                    </select>
                                    <div class="invalid-tooltip">
                                        请选择有效状态。
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="validationTooltip05" data-toggle="tooltip" data-placement="bottom"
                                        title="生成后立即激活用户可在到期时间前使用">立即激活？</label>
                                    <select class="custom-select" id="validationTooltip04" required>
                                        <option selected disabled value="">待激活</option>
                                        <option selected disabled value="">立激活</option>
                                    </select>
                                    <div class="invalid-tooltip">
                                        请选择有效状态。
                                    </div>
                                </div>
                            </div>
                            <button type="button" id="submit" class="btn btn-outline-purple btn-block"> 生 成 卡 密
                            </button>
                        </form>
                    </div>
                </div>

            </div>


        </div>

    </div>

</main>
<!--
 * @Author: Lucifer
 * @Date: 2022-04-10 20:27:36
 * @LastEditTime : 2022-05-11 09:38:04
 * @FilePath     : \yiyanyun\app\admin\view\public\footer.html
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
<!-- js弹窗的资源 -->
<script type="text/javascript" src="/static/js/jquery-confirm/jquery-confirm.min.js"></script>
<script>
  // 生命周期监控
  // orderlst = window.setInterval(function () {
  //   $.alert({
  //     title: '安全提醒',
  //     content: '您已长时间未进行操作，如不需继续停留控制面板请及时退出登录保护好身份验证',
  //     icon: 'mdi mdi-rocket',
  //     animation: 'scale',
  //     closeAnimation: 'scale',
  //     buttons: {
  //       okay: {
  //         text: '退出',
  //         btnClass: 'btn-blue',
  //         action: function () {
  //           // $.alert('一个非常关键的动作被 <strong>触发了!</strong>');
  //         }
  //       }
  //     }
  //   });
  // }, 300000); 
</script>
</body>

</html>
<script>
    $("#submit").on('click', function () {
        var kami_tatol = $("select[name='tatol']").val();//1
        var kami_type = $("select[name='type']").val();//1
        var kami_lenght = $("select[name='kami_lenght']").val();//1
        var kami_trait = $("input[name='trait']").val();
        var project_id = $("select[name='project_id']").val();//1
        var kami_value = $("select[name='value']").val();//1
        $.post("<?php echo url('add'); ?>", {
            kami_tatol: kami_tatol,
            kami_lenght: kami_lenght,
            kami_trait: kami_trait,
            kami_value: kami_value,
            project_id: project_id,
            kami_type: kami_type
        }, function (res) {
            if (res.code == 200) {
                showNotify('添加成功~', 'success');
            } else {
                showNotify(res.msg, 'danger');
            }
        }, 'json')
    })
</script>