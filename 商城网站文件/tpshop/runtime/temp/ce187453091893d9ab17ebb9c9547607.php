<?php /*a:1:{s:74:"E:\phpStudy\PHPTutorial\WWW\tpshop\application\admin\view\login\login.html";i:1551496573;}*/ ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>六星商城 | 后台登陆</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.4 -->
  <link href="/tpshop/public/static/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <!-- Theme style -->
  <link href="/tpshop/public/static/css/adminlte.min.css" rel="stylesheet" type="text/css" />
  <!-- iCheck -->
  <link href="/tpshop/public/static/css/blue.css" rel="stylesheet" type="text/css" />
  <link href="/tpshop/public/static/css/layer.css" rel="stylesheet">
  <style>
    #imgVerify {
      width: 120px;
      margin: 0 auto;
      text-align: center;
      display: block;
    }
  </style>
  <script>
    function detectBrowser() {
      var browser = navigator.appName
      if (navigator.userAgent.indexOf("MSIE") > 0) { 
        var b_version = navigator.appVersion
        var version = b_version.split(";");
        var trim_Version = version[1].replace(/[ ]/g, "");
        if ((browser == "Netscape" || browser == "Microsoft Internet Explorer")) {
          if (trim_Version == 'MSIE8.0' || trim_Version == 'MSIE7.0' || trim_Version == 'MSIE6.0') {
            alert('请使用IE9.0版本以上进行访问');
            return;
          }
        }
      }
    }
    detectBrowser();
  </script>
</head>

<body class="login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="#"><b>六星商城系统</b></a>
    </div>
    <div class="login-box-body">
      <p class="login-box-msg">后台管理</p>
      <div class="form-group has-feedback">
        <input type="text" name="username" id="username" class="form-control" placeholder="账号" />
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" id="password" placeholder="密码" />
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <opinioncontrol realtime="true" opinion_name="vertify_code" default="true">
          <div class="row" style="padding-right: 65px;">
            <div class="col-xs-8">
              <input style="width: 135px" type="text" name="verify" class="form-control" placeholder="验证码" />
            </div>
            <div class="col-xs-4">
              <img id="imgVerify" style="cursor:pointer;" src="<?php echo url('/admin/verify'); ?>" onclick="fleshVerify();" />
            </div>
          </div>
        </opinioncontrol>
      </div>
      <div class="form-group">
        <button type="button" class="btn btn-primary btn-block btn-flat" onclick="checkLogin()">立即登陆 </button>
      </div>
    </div>
    <div class="margin text-center">
      <div class="copyright">
        2014-2018 &copy; <a href="http://wd.23673.com">wd.23673.com</a>
        <br/>
        <a href="http://wd.23673.com">湖南六星教育网络有限公司</a>出品
      </div>
    </div>
  </div>
  <!-- /.login-box -->
  <!-- jQuery 2.1.4 -->
  <script src="/tpshop/public/static/js/jquery-2.1.4.min.js" type="text/javascript"></script>
  <!-- Bootstrap 3.3.2 JS -->
  <script src="/tpshop/public/static/js/bootstrap.min.js" type="text/javascript"></script>
  <!-- iCheck -->
  <script src="/tpshop/public/static/js/icheck.min.js" type="text/javascript"></script>
  <script src="/tpshop/public/static/js/layer.js"></script>
  <!-- 弹窗js 参考文档 http://layer.layui.com/-->
  <script>
    $(function() {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
      });
    });
    function fleshVerify() {
      //重载验证码
      $('#imgVerify').attr('src', "<?php echo url('/admin/verify/"+Math.random()+"'); ?>");

    }
    jQuery.fn.center = function() {
      this.css("position", "absolute");
      this.css("top", Math.max(0, (($(window).height() - $(this).outerHeight()) / 2) +
        $(window).scrollTop()) - 30 + "px");
      this.css("left", Math.max(0, (($(window).width() - $(this).outerWidth()) / 2) +
        $(window).scrollLeft()) + "px");
      return this;
    }

    function checkLogin() {
      var username = $('#username').val();
      var password = $('#password').val();
      var verify = $('input[name="verify"]').val();
      if (username == '' || password == '') {
        layer.alert('用户名或密码不能为空', {
          icon: 2
        }); //alert('用户名或密码不能为空');
        return;
      }
      if (verify == '') {
        layer.alert('验证码不能为空', {
          icon: 2
        });
        return;
      }
      if (verify.length == '') {
        layer.alert('验证码错误', {
          icon: 2
        });
        //fleshVerify();
        return;
      }

      $.ajax({
        url: "<?php echo URL('/admin/login'); ?>",
        type: 'post',
        dataType: 'json',
        data: {
          username: username,
          password: password,
          verify : verify
        },
        success: function(res) {
          if (res.status) {
            top.location.href = "<?php echo URL('/admin/index'); ?>";
          } else {
            layer.alert(res.msg, {
              icon: 2
            });
            fleshVerify();
          }
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
          layer.alert('网络失败，请刷新页面后重试', {
            icon: 2
          });
        }
      })
    }
    document.onkeydown = function(event) {
      e = event ? event : (window.event ? window.event : null);
      if (e.keyCode == 13) {
        checkLogin();
      }
    }
  </script>
</body>

</html>
