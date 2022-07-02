<?php /*a:3:{s:44:"F:\web\yiyanyun\app\agent\view\scodeadd.html";i:1647740212;s:49:"F:\web\yiyanyun\app\agent\view\public\header.html";i:1652011654;s:49:"F:\web\yiyanyun\app\agent\view\public\footer.html";i:1647341202;}*/ ?>
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
                                            <option value="<?php echo htmlentities($projectlist['pid']); ?>"><?php echo htmlentities($projectlist['pid']); ?></option>
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
                                            <option value="1">会员</option>
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