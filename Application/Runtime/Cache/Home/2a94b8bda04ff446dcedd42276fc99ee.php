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
    <!-- ECharts -->
    <script src="/Public/adminlte/dist/js/echarts.min.js" type="text/javascript"></script>
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
                        <?php if(is_array($battyHis)): foreach($battyHis as $key=>$b): ?><tr>
                            <th scope = 'row'><?php echo ($b["syspressure"]); ?></th>
                            <td><?php echo ($b["soc"]); ?></td>
                            <td><?php echo ($b["battery"]); ?></td>
                            <td><?php echo ($b["range"]); ?></td>
                            <td><?php echo ($b["tempmax"]); ?></td>
                            <td><?php echo ($b["tempmin"]); ?></td>
                            <td><?php echo ($b["voltagemax"]); ?></td>
                            <td><?php echo ($b["voltagemin"]); ?></td>
                            <td><?php echo ($b["faultevent"]); ?></td>
                            <td><?php echo ($b["faulttime"]); ?></td>
                            <td><?php echo ($b["recordtime"]); ?></td>
                        </tr><?php endforeach; endif; ?>
                        
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
                <div class="row" style="margin-bottom:50px;background: #fff;">
                    <div class="col-md-6" id="chart1" style="height:400px;width:650px;">
                        <script type="text/javascript">
                        // 基于准备好的dom，初始化echarts实例
                        var myChart = echarts.init(document.getElementById('chart1'));

                        // 指定图表的配置项和数据
                        var option = {
                            title: {
                                text: 'Battery Temp',
                                subtext: 'Test Data'
                            },
                            tooltip: {
                                trigger: 'axis'
                            },
                            legend: {
                                data:['MaxTemp','MinTemp']
                            },
                            toolbox: {
                                show: true,
                                feature: {
                                    dataZoom: {},
                                    dataView: {readOnly: false},
                                    magicType: {type: ['line', 'bar']},
                                    restore: {},
                                    saveAsImage: {}
                                }
                            },
                            xAxis:  {
                                type: 'category',
                                boundaryGap: false,
                                data: ['周一','周二','周三','周四','周五','周六','周日']
                            },
                            yAxis: {
                                type: 'value',
                                axisLabel: {
                                    formatter: '{value} °C'
                                }
                            },
                            series: [
                                {
                                    name:'MaxTemp',
                                    type:'line',
                                    data:[11, 11, 15, 13, 12, 13, 10],
                                    markPoint: {
                                        data: [
                                            {type: 'max', name: '最大值'},
                                            {type: 'min', name: '最小值'}
                                        ]
                                    },
                                    markLine: {
                                        data: [
                                            {type: 'average', name: '平均值'}
                                        ]
                                    }
                                },
                                {
                                    name:'MinTemp',
                                    type:'line',
                                    data:[1, -2, 2, 5, 3, 2, 0],
                                    markPoint: {
                                        data: [
                                            {name: '周最低', value: -2, xAxis: 1, yAxis: -1.5}
                                        ]
                                    },
                                    markLine: {
                                        data: [
                                            {type: 'average', name: '平均值'}
                                        ]
                                    }
                                }
                            ]
                        };
                        // 使用刚指定的配置项和数据显示图表。
                        myChart.setOption(option);
                        </script>
                    </div>
                    <div class="col-md-6" id="chart2" style="height:400px;width:650px;">
                        <script type="text/javascript">
                        // 基于准备好的dom，初始化echarts实例
                        var myChart = echarts.init(document.getElementById('chart2'));

                        // 指定图表的配置项和数据
                        var option = {
                            title: {
                                text: 'Battery Voltage',
                                subtext: 'Test Data'
                            },
                            tooltip: {
                                trigger: 'axis'
                            },
                            legend: {
                                data:['VoltageMax','VoltageMin']
                            },
                            toolbox: {
                                show: true,
                                feature: {
                                    dataZoom: {},
                                    dataView: {readOnly: false},
                                    magicType: {type: ['line', 'bar']},
                                    restore: {},
                                    saveAsImage: {}
                                }
                            },
                            xAxis:  {
                                type: 'category',
                                boundaryGap: false,
                                data: ['周一','周二','周三','周四','周五','周六','周日']
                            },
                            yAxis: {
                                type: 'value',
                                axisLabel: {
                                    formatter: '{value} V'
                                }
                            },
                            series: [
                                {
                                    name:'VoltageMax',
                                    type:'line',
                                    data:[11, 11, 15, 13, 12, 13, 10],
                                    markPoint: {
                                        data: [
                                            {type: 'max', name: '最大值'},
                                            {type: 'min', name: '最小值'}
                                        ]
                                    },
                                    markLine: {
                                        data: [
                                            {type: 'average', name: '平均值'}
                                        ]
                                    }
                                },
                                {
                                    name:'VoltageMin',
                                    type:'line',
                                    data:[1, -2, 2, 5, 3, 2, 0],
                                    markPoint: {
                                        data: [
                                            {name: '周最低', value: -2, xAxis: 1, yAxis: -1.5}
                                        ]
                                    },
                                    markLine: {
                                        data: [
                                            {type: 'average', name: '平均值'}
                                        ]
                                    }
                                }
                            ]
                        };
                        // 使用刚指定的配置项和数据显示图表。
                        myChart.setOption(option);
                        </script>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane active" id="battery">
                <!-- battery-header -->
                <div class="index-header">
                    <div class="col-md-1"><img src="/Public/adminlte/dist/img/logo.png" alt="上海航天电源技术有限公司" class="logo-img-2"></div>
                    <div class="col-md-11">
                        <div class="col-md-3">
                            <div class="header-cell"><span>系统总压：</span><span><?php echo ($b["soc"]); ?></span></div>
                            <div class="header-cell"><span>系统SOC：</span><span><?php echo ($b["soc"]); ?></span></div>
                        </div>
                        <div class="col-md-3">
                            <div class="header-cell"><span>系统电流：</span><span><?php echo ($b["soc"]); ?></span></div>
                            <div class="header-cell"><span>报警等级：</span><span><?php echo ($b["soc"]); ?></span></div>
                        </div>
                        <div class="col-md-3">
                            <div class="header-cell"><span>TempMax：</span><span><?php echo ($b["soc"]); ?></span></div>
                            <div class="header-cell"><span>TempMin：</span><span><?php echo ($b["soc"]); ?></span></div>
                        </div>
                        <div class="col-md-3">
                            <div class="header-cell"><span>VoltageMax：</span><span><?php echo ($b["soc"]); ?></span></div>
                            <div class="header-cell"><span>VoltageMin：</span><span><?php echo ($b["soc"]); ?></span></div>
                        </div>
                    </div>
                </div>
                <!-- battery-header end -->
                <!-- battery-cell -->
                <div class="battery-cell"><a href="<?php echo U('index/battery_detail');?>">1</a></div>
                <!-- append here!!! -->
                
                
                
                
                
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
                        <?php if(is_array($battyHis)): foreach($battyHis as $key=>$b): ?><tr>
                            <th scope="row"><?php echo ($b["faultevent"]); ?></th>
                            <td><?php echo ($b["faulttime"]); ?></td>
                            <td>测试</td>
                            <td><?php echo ($b["recordtime"]); ?></td>
                        </tr><?php endforeach; endif; ?>
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
                        <button class="btn btn-customized btn-flat" style="position:absolute;top:0;right:0;"><a href="<?php echo U('Login/logout');?>">退出登录</a></button>
                    </div>
                </div>
                <!-- settings-header end -->
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <form action="<?php echo U('Index/battery_detail');?>" method="post">
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
            <li role="presentation"><a href="#parameter" aria-controls="parameter" role="tab" data-toggle="tab">图表查看</a></li>
            <li role="presentation" class="active"><a href="#battery" aria-controls="battery" role="tab" data-toggle="tab">电池列阵</a></li>
            <li role="presentation"><a href="#errors" aria-controls="errors" role="tab" data-toggle="tab">故障记录和分析</a></li>
            <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">设置</a></li>
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
    <!-- Different Button -->
    <script type="text/javascript">
    	function store() {
    		document.getElementById("form0").action="<?php echo U('Index/store');?>";
    		document.form0.submit;
    	}
    	
    	function standard() {
    		document.getElementById("form0").action="<?php echo U('Index/standard');?>";
    		document.form0.submit;
    	}
    </script>
</body>

</html>