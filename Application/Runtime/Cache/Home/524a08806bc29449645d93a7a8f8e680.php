<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>新用户注册</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link href="/Wwww/Public/adminlte/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="/Wwww/Public/adminlte/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="/Wwww/Public/adminlte/plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
    <!-- Customized CSS Style -->
    <link href="/Wwww/Public/css/customized.css" rel="stylesheet" type="text/css" />
</head>
<style type="text/css">
body {
    font-family: "Microsoft Yahei", verdana, helvetica, arial, sans-serif;
}

.verify {
    position: absolute;
    top: 0px;
    right: 0px;
    cursor: pointer;
}
</style>

<body class="login-page">
    <!-- header -->
    <div class="col-md-4 line-horizontal"></div>
    <div class="col-md-4 login-header">电池监控系统</div>
    <div class="col-md-4 line-horizontal"></div>
    <!-- header end -->
    <!-- form -->
    <div class="col-md-6">
        <div class="login-left">
            <div class="center">
                <img src="/Wwww/Public/adminlte/dist/img/logo.png" alt="上海航天电源技术有限公司" class="logo-img">
            </div>
            <p>上海航天电源技术有限公司</p>
            <p>SHANGHAI AEROSPACE POWER</p>
        </div>
    </div>
    <div class="col-md-6">
        <div class="login-box-body login-box-body-patch">
            <p class="login-box-msg login-box-msg-patch">注册一个新用户</p>
            <form action="/Wwww/index.php/Home/Login/register.html" method="post">
                <div class="form-group has-feedback">
                    <span>用户名：</span>
                    <input type="text" name="username" class="form-control" />
                    <!-- <span class="glyphicon glyphicon-user form-control-feedback"></span> -->
                </div>
                <div class="form-group has-feedback">
                    <span>密码：</span>
                    <input type="password" name="password" class="form-control" />
                    <!-- <span class="glyphicon glyphicon-lock form-control-feedback"></span> -->
                </div>
                <div class="form-group has-feedback">
                    <span>确认密码：</span>
                    <input type="password" name="repassword" class="form-control" />
                    <!-- <span class="glyphicon glyphicon-lock form-control-feedback"></span> -->
                </div>
                <div class="row">
                    <div class="col-xs-8" style="color:#fff;">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox" name="agree" value="1"> 我同意 <a href="#">网站安全协议</a>
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-customized btn-block btn-flat">注册</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <a href="login.html" class="text-center">我已经注册了账户</a>
        </div>
    </div>
    <!-- form end -->
    <!-- jQuery 2.1.4 -->
    <script src="/Wwww/Public/adminlte/plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="/Wwww/Public/adminlte/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="/Wwww/Public/adminlte/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <script>
    $(function() {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
    </script>
</body>

</html>