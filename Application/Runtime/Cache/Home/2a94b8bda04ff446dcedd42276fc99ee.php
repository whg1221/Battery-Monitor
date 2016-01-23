<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>系统首页</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link href="/Public/adminlte/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="/Public/adminlte/dist/css/AdminLTE.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
     folder instead of downloading all of them to reduce the load. -->
    <link href="/Public/adminlte/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!--common style-->
    <link href="/Public/css/common.css" rel="stylesheet" type="text/css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
    <!-- Customized CSS Style -->
    <link href="/Public/css/customized.css" rel="stylesheet" type="text/css" />
</head>
<!-- ADD THE CLASS sidedar-collapse TO HIDE THE SIDEBAR PRIOR TO LOADING THE SITE -->

<body class="blue-background">
    <!-- Site wrapper -->
    <div class="wrapper wrapper-patch">
        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane" id="history">
                <!-- history-header -->
                <div class="index-header">
                    <div class="col-md-1"><img src="/Public/adminlte/dist/img/logo.png" alt="上海航天电源技术有限公司" class="logo-img-2"></div>
                </div>
                <!-- history-header end -->
                <!-- history-table -->
                <table class="table table-bordered table-patch">
                    <thead>
                        <tr>
                            <th>系统总压</th>
                            <th>系统SOC</th>
                            <th>系统电源</th>
                            <th>报警等级</th>
                            <th>TempMax</th>
                            <th>TempMin</th>
                            <th>VoltageMax</th>
                            <th>VoltageMin</th>
                            <th>故障事件</th>
                            <th>故障时间</th>
                            <th>记录时间</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- 以下tr标签可以append -->
                        <tr>
                            <th scope="row">测试</th>
                            <td>测试</td>
                            <td>测试</td>
                            <td>测试</td>
                            <td>测试</td>
                            <td>测试</td>
                            <td>测试</td>
                            <td>测试</td>
                            <td>测试</td>
                            <td>测试</td>
                            <td>测试</td>
                        </tr>
                    </tbody>
                </table>
                <!-- history-table end -->
            </div>
            <div role="tabpanel" class="tab-pane" id="parameter">
                <!-- parameter-header -->
                <div class="index-header">
                    <div class="col-md-1"><img src="/Public/adminlte/dist/img/logo.png" alt="上海航天电源技术有限公司" class="logo-img-2"></div>
                </div>
                <!-- parameter-header end -->
                <div class="row" style="margin-bottom:50px;">
                    <div class="col-md-6">
                    <form action="/index.php/Home/Index/index.html" method="post">
                        <div class="form-group has-feedback form-patch">
                            <div class="col-md-3"><span>旧ID：</span></div>
                            <div class="col-md-4"><input type="text" name="oldid1" class="form-control" style="width:100%"/></div>
                            <div class="col-md-1"><span style="text-align:center;">——</span></div>
                            <div class="col-md-4"><input type="text" name="oldid2" class="form-control" style="width:100%"/></div>
                        </div>
                        <div class="form-group has-feedback form-patch">
                            <div class="col-md-3"><span> 新ID：</span></div>
                            <div class="col-md-4"><input type="text" name="newid1" class="form-control" style="width:100%"/></div>
                            <div class="col-md-1"><span style="text-align:center;">——</span></div>
                            <div class="col-md-4"><input type="text" name="newid2" class="form-control" style="width:100%"/></div>
                        </div>
                        <div class="row">
                            <div class="col-xs-3"></div>
                            <div class="col-xs-2">
                                <button type="submit" class="btn btn-customized btn-block btn-flat">保存</button>
                            </div>
                            <div class="col-xs-2"></div>
                            <div class="col-xs-2">
                                <button type="submit" class="btn btn-customized btn-block btn-flat">标定</button>
                            </div>
                            <div class="col-xs-3"></div>
                        </div>
                    </form>
                    </div>
                    <div class="col-md-6">
                    <form action="/index.php/Home/Index/index.html" method="post">
                        <div class="form-group has-feedback form-patch">
                            <div class="col-md-3"><span>ID：</span></div>
                            <div class="col-md-4"><input type="text" name="id1" class="form-control" style="width:100%"/></div>
                            <div class="col-md-1"><span style="text-align:center;">——</span></div>
                            <div class="col-md-4"><input type="text" name="id2" class="form-control" style="width:100%"/></div>
                        </div>
                        <div class="form-group has-feedback form-patch">
                            <div class="col-md-3"><span> 电压路数：</span></div>
                            <div class="col-md-4"><input type="text" name="temp" class="form-control" style="width:100%"/></div>
                        </div>
                        <div class="form-group has-feedback form-patch">
                            <div class="col-md-3"><span> 温度路数：</span></div>
                            <div class="col-md-4"><input type="text" name="voltage" class="form-control" style="width:100%"/></div>
                        </div>
                        <div class="row">
                            <div class="col-xs-5"></div>
                            <div class="col-xs-2">
                                <button type="submit" class="btn btn-customized btn-block btn-flat">标定</button>
                            </div>
                            <div class="col-xs-5"></div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane active" id="battery">
                <!-- battery-header -->
                <div class="index-header">
                    <div class="col-md-1"><img src="/Public/adminlte/dist/img/logo.png" alt="上海航天电源技术有限公司" class="logo-img-2"></div>
                    <div class="col-md-11">
                        <div class="col-md-3">
                            <div class="header-cell"><span>系统总压：</span></div>
                            <div class="header-cell"><span>系统SOC：</span></div>
                        </div>
                        <div class="col-md-3">
                            <div class="header-cell">系统电流：</div>
                            <div class="header-cell">报警等级：</div>
                        </div>
                        <div class="col-md-3">
                            <div class="header-cell">TempMax：</div>
                            <div class="header-cell">TempMin：</div>
                        </div>
                        <div class="col-md-3">
                            <div class="header-cell">VoltageMax：</div>
                            <div class="header-cell">VoltageMin：</div>
                        </div>
                    </div>
                </div>
                <!-- battery-header end -->
                <!-- battery-cell -->
                <div class="battery-cell"><p>1</p></div>
                <div class="battery-cell"><p>2</p></div>
                <div class="battery-cell"><p>3</p></div>
                <div class="battery-cell"><p>4</p></div>
                <div class="battery-cell"><p>5</p></div>
                <div class="battery-cell"><p>6</p></div>
                <div class="battery-cell"><p>7</p></div>
                <div class="battery-cell"><p>8</p></div>
                <div class="battery-cell"><p>9</p></div>
                <div class="battery-cell"><p>10</p></div>
                <div class="battery-cell"><p>11</p></div>
                <div class="battery-cell"><p>12</p></div>
                <div class="battery-cell"><p>13</p></div>
                <div class="battery-cell"><p>14</p></div>
                <div class="battery-cell"><p>15</p></div>
                <div class="battery-cell"><p>16</p></div>
                <div class="battery-cell"><p>17</p></div>
                <div class="battery-cell"><p>18</p></div>
                <div class="battery-cell"><p>19</p></div>
                <div class="battery-cell"><p>20</p></div>
                <div class="battery-cell"><p>21</p></div>
                <div class="battery-cell"><p>22</p></div>
                <div class="battery-cell"><p>23</p></div>
                <div class="battery-cell"><p>24</p></div>
                <div class="battery-cell"><p>25</p></div>
                <div class="battery-cell"><p>26</p></div>
                <div class="battery-cell"><p>27</p></div>
                <div class="battery-cell"><p>28</p></div>
                <div class="battery-cell"><p>29</p></div>
                <div class="battery-cell"><p>30</p></div>
                <div class="battery-cell"><p>31</p></div>
                <div class="battery-cell"><p>32</p></div>
                <div class="battery-cell"><p>33</p></div>
                <div class="battery-cell"><p>34</p></div>
                <div class="battery-cell"><p>35</p></div>
                <div class="battery-cell"><p>36</p></div>
                <div class="battery-cell"><p>37</p></div>
                <div class="battery-cell"><p>38</p></div>
                <div class="battery-cell"><p>39</p></div>
                <div class="battery-cell"><p>40</p></div>
                <!-- battery-cell end -->
            </div>
            <div role="tabpanel" class="tab-pane" id="errors">
                <!-- errors-header -->
                <div class="index-header">
                    <div class="col-md-1"><img src="/Public/adminlte/dist/img/logo.png" alt="上海航天电源技术有限公司" class="logo-img-2"></div>
                </div>
                <!-- errors-header end -->
                <!-- errors-table -->
                <table class="table table-bordered table-patch">
                    <thead>
                        <tr>
                            <th>故障事件</th>
                            <th>故障时间</th>
                            <th>故障分析</th>
                            <th>接收时间</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- 以下tr标签可以append -->
                        <tr>
                            <th scope="row">测试</th>
                            <td>测试</td>
                            <td>测试</td>
                            <td>测试</td>
                        </tr>
                    </tbody>
                </table>
                <!-- errors-table end -->
            </div>
            <div role="tabpanel" class="tab-pane" id="settings">
                <!-- settings-header -->
                <div class="index-header">
                    <div class="col-md-1"><img src="/Public/adminlte/dist/img/logo.png" alt="上海航天电源技术有限公司" class="logo-img-2"></div>
                    <div class="col-md-11">
                        <p class="battery-detail-header">添加新用户</p>
                    </div>
                </div>
                <!-- settings-header end -->
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <form action="/index.php/Home/Index/index.html" method="post">
                            <div class="form-group has-feedback form-patch">
                                <div class="col-xs-6"><span> 新用户名：</span></div>
                                <div class="col-xs-6"><input type="text" name="username" class="form-control" style="width:100%;"/></div>
                            </div>
                            <div class="form-group has-feedback form-patch">
                                <div class="col-xs-6"><span>新用户密码：</span></div>
                                <div class="col-xs-6"><input type="password" name="password" class="form-control" style="width:100%;"/></div>
                            </div>
                            <div class="form-group has-feedback form-patch">
                                <div class="col-xs-6"><span>重复密码：</span></div>
                                <div class="col-xs-6"><input type="password" name="repassword" class="form-control" style="width:100%;"/></div>
                            </div>
                            <div class="row" style="margin-bottom:50px;">
                                <div class="col-xs-4"></div>
                                <div class="col-xs-4">
                                    <button type="submit" class="btn btn-customized btn-block btn-flat">确认添加</button>
                                </div>
                                <div class="col-xs-4"></div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation"><a href="#history" aria-controls="history" role="tab" data-toggle="tab">历史记录</a></li>
            <li role="presentation"><a href="#parameter" aria-controls="parameter" role="tab" data-toggle="tab">参数标定</a></li>
            <li role="presentation" class="active"><a href="#battery" aria-controls="battery" role="tab" data-toggle="tab">电池列阵</a></li>
            <li role="presentation"><a href="#errors" aria-controls="errors" role="tab" data-toggle="tab">故障记录和分析</a></li>
            <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">设置</a></li>
            <li><a href="<?php echo U('Login/logout');?>"><span>退出登录（仅测试功能）</span></a></li>
        </ul>
    </div>
    <!-- ./wrapper -->
    <!-- jQuery 2.1.4 -->
    <script src="/Public/adminlte/plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="/Public/adminlte/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="/Public/adminlte/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src="/Public/adminlte/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="/Public/adminlte/dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/Public/adminlte/dist/js/demo.js" type="text/javascript"></script>
</body>

</html>