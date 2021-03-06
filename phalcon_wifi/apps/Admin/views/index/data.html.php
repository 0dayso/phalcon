<?= \Phalcon\Tag::getDoctype() ?>
<html>
	<head>
		<title>Wifi营销精灵--<?php echo $title; ?></title>	
		<?php echo $this->tag->stylesheetLink('css/global.css'); ?>	
<?php echo $this->tag->stylesheetLink('css/main.css'); ?>	
<?php echo $this->tag->javascriptInclude('js/jquery-1.11.0.min.js'); ?>
<?php echo $this->tag->javascriptInclude('js/DD_belatedPNG.js'); ?>
<?php echo $this->tag->javascriptInclude('js/My97DatePicker/WdatePicker.js'); ?>
<?php echo $this->tag->javascriptInclude('js/jquery.circliful.js'); ?>
<?php echo $this->tag->javascriptInclude('js/highcharts/highcharts.js'); ?>
<?php echo $this->tag->javascriptInclude('js/highcharts/exporting.js'); ?>
<?php echo $this->tag->javascriptInclude('js/main.js'); ?>
<script>
		DD_belatedPNG.fix('*');
</script>
	</head>
<body>
<script type="text/javascript">
$(function(){
	//插入饼图
	$('#myStat1,#myStat2,#myStat3').circliful(); 
	//插入曲线图
    $('#container').highcharts({
        title: {
            text: 'Monthly Average Temperature',
            x: -20 //center
        },
        subtitle: {
            text: 'Source: WorldClimate.com',
            x: -20
        },
        xAxis: {
            categories: ['1日', '2日', '3日', '4日', '5日', 'Jun','Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        yAxis: {
            
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: '°C'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: 'Tokyo',
            data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
        }, {
            name: 'New York',
            data: [-0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8, 24.1, 20.1, 14.1, 8.6, 2.5]
        }, {
            name: 'Berlin',
            data: [-0.9, 0.6, 3.5, 8.4, 13.5, 17.0, 18.6, 17.9, 14.3, 9.0, 3.9, 1.0]
        }, {
            name: 'London',
            data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
        }]
    });
	
	//数据曲线的时间选择
	$('.cale .cale_title').click(function(){
		if($('.cale .cale_list').css('display')=='none'){
			$('.cale .cale_list').show();
			$('.cale .cale_arrow').show();
		}else{
			$('.cale .cale_list').hide();
			$('.cale .cale_arrow').hide();
		}
	})
	
				
})
</script>

<div class="inner_box">
	<div class="user_date fl">
		<div class="date">
			<div class="date01 clearfix">
			<div class="view">
				<div class="view01">
					<div>
						<div id="myStat1" data-dimension="200" data-text="3" data-info="今日新增" data-type="full" 
						data-width="35" data-fontsize="45" data-percent="18" data-fgcolor="#2192f8"  
						data-bgcolor="#e0edf5" data-fill="#fff">
						</div>
					</div>
					<h3>代理商总数304</h3>
				</div>
				<div class="view02">
					<div>
						<div id="myStat2" data-dimension="200" data-text="4" data-info="今日新增" data-type="full" 
						data-width="35" data-fontsize="45" data-percent="25" data-fgcolor="#2192f8"  
						data-bgcolor="#e0edf5" data-fill="#fff">
						</div> 
					</div>
					<h3>商户总数582</h3>
				</div>
				<div class="view03">
					<div>
						<div id="myStat3" data-dimension="200" data-text="0" data-info="今日新增" data-type="full" 
						data-width="35" data-fontsize="45" data-percent="0" data-fgcolor="#2192f8"  
						data-bgcolor="#e0edf5" data-fill="#fff">
						</div> 
					</div>
					<h3>设备总数88</h3>
				</div>
			</div>	
			</div>
			<div class="date02 clearfix">
				<h3 class="date02_title">访客数量曲线变化（11.1-12.1）</h3>
				<div id="container" style="height:350px"></div>
				<div class="cale">
					<div class="cale_det">								
						<div class="cale_title"><i class="cale_icon"></i>2014-11-13至 2014-12-12</div>
						<span class="cale_arrow" style="display:none;"></span>
						<div class="cale_list" style="display:none;">
							<form action="" method="get">
							<input type="text" value="今  天"/>
							<input type="text" value="一周内"/>
							<input type="text" value="一月内"/>
							<input type="text" value="自定义"/>
							<span class="cale_opt fl">从<br/><input type="text" value="2014-11-13" name="time1" id="time1" onClick="WdatePicker()" style="width:50px;"/></span>
							<span class="cale_opt fr">至<br/><input type="text" value="2014-12-12" name="time2" id="time2" onClick="WdatePicker()" style="width:50px;"/></span>
							<span class="fr"><button class="confirm-btn">确定</button></span>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="date03 clearfix">
				<h3>服务器性能检测</h3>
				<div class="stable">
					<table style="table-layout: auto;">
					  <thead>
						<tr>
						  <th name="id" class="hover enable">Id</th>
						  <th name="name" class="hover enable">用户名</th>
						  <th name="time" class="hover enable">注册时间</th>
						  <th name="status" class="hover enable">状态</th>
						  <th name="operate" class="hover enable">操作</th>
						</tr>
					  </thead>
					  <tbody>
						<tr>
						  <td><div>01</div></td>
						  <td><div>胡万春</div></td>
						  <td><div>2014-10-24</div></td>
						  <td><div>启用</div></td>
						  <td><div> <span><a>修改</a></span>  <span><a>冻结</a></span> <span><a>删除</a></span> </div></td>
						</tr>
						<tr>
						  <td><div>02</div></td>
						  <td><div>杨晓燕</div></td>
						  <td><div>2014-11-13</div></td>
						  <td><div>启用</div></td>
						  <td><div> <span><a>修改</a></span>  <span><a>冻结</a></span> <span><a>删除</a></span> </div></td>
						</tr>
						<tr>
						  <td><div>03</div></td>
						  <td><div>钱伟伟</div></td>
						  <td><div>2014-12-12</div></td>
						  <td><div>启用</div></td>
						  <td><div> <span><a>修改</a></span>  <span><a>冻结</a></span> <span><a>删除</a></span> </div></td>
						</tr>
						<tr>
						  <td><div>04</div></td>
						  <td><div>李耿直</div></td>
						  <td><div>2014-11-13</div></td>
						  <td><div>启用</div></td>
						  <td><div> <span><a>修改</a></span>  <span><a>冻结</a></span> <span><a>删除</a></span> </div></td>
						</tr>
						<tr>
						  <td><div>05</div></td>
						  <td><div>张晓巧</div></td>
						  <td><div>2014-11-13</div></td>
						  <td><div>启用</div></td>
						  <td><div> <span><a>修改</a></span>  <span><a>冻结</a></span> <span><a>删除</a></span> </div></td>
						</tr>
						<tr>
						  <td><div>06</div></td>
						  <td><div>周佳人</div></td>
						  <td><div>2014-10-24</div></td>
						  <td><div>启用</div></td>
						  <td><div> <span><a>修改</a></span>  <span><a>冻结</a></span> <span><a>删除</a></span> </div></td>
						</tr>
						<tr>
						  <td><div>07</div></td>
						  <td><div>闫芬安</div></td>
						  <td><div>2014-11-13</div></td>
						  <td><div>启用</div></td>
						  <td><div> <span><a>修改</a></span>  <span><a>冻结</a></span> <span><a>删除</a></span> </div></td>
						</tr>
					  </tbody>
					</table>
				</div>
			</div>
			<div class="date04 clearfix">
				<h3>服务器参数</h3>
				<div class="stable">
					<table style="table-layout: auto;">
					  <thead>
						<tr>
						  <th name="id" class="hover enable">Id</th>
						  <th name="name" class="hover enable">用户名</th>
						  <th name="time" class="hover enable">注册时间</th>
						  <th name="status" class="hover enable">状态</th>
						  <th name="operate" class="hover enable">操作</th>
						</tr>
					  </thead>
					  <tbody>
						<tr>
						  <td><div>01</div></td>
						  <td><div>胡万春</div></td>
						  <td><div>2014-10-24</div></td>
						  <td><div>启用</div></td>
						  <td><div> <span><a>修改</a></span>  <span><a>冻结</a></span> <span><a>删除</a></span> </div></td>
						</tr>
						<tr>
						  <td><div>02</div></td>
						  <td><div>杨晓燕</div></td>
						  <td><div>2014-11-13</div></td>
						  <td><div>启用</div></td>
						  <td><div> <span><a>修改</a></span>  <span><a>冻结</a></span> <span><a>删除</a></span> </div></td>
						</tr>
						<tr>
						  <td><div>03</div></td>
						  <td><div>钱伟伟</div></td>
						  <td><div>2014-12-12</div></td>
						  <td><div>启用</div></td>
						  <td><div> <span><a>修改</a></span>  <span><a>冻结</a></span> <span><a>删除</a></span> </div></td>
						</tr>
						<tr>
						  <td><div>04</div></td>
						  <td><div>李耿直</div></td>
						  <td><div>2014-11-13</div></td>
						  <td><div>启用</div></td>
						  <td><div> <span><a>修改</a></span>  <span><a>冻结</a></span> <span><a>删除</a></span> </div></td>
						</tr>
						<tr>
						  <td><div>05</div></td>
						  <td><div>张晓巧</div></td>
						  <td><div>2014-11-13</div></td>
						  <td><div>启用</div></td>
						  <td><div> <span><a>修改</a></span>  <span><a>冻结</a></span> <span><a>删除</a></span> </div></td>
						</tr>
						<tr>
						  <td><div>06</div></td>
						  <td><div>周佳人</div></td>
						  <td><div>2014-10-24</div></td>
						  <td><div>启用</div></td>
						  <td><div> <span><a>修改</a></span>  <span><a>冻结</a></span> <span><a>删除</a></span> </div></td>
						</tr>
						<tr>
						  <td><div>07</div></td>
						  <td><div>闫芬安</div></td>
						  <td><div>2014-11-13</div></td>
						  <td><div>启用</div></td>
						  <td><div> <span><a>修改</a></span>  <span><a>冻结</a></span> <span><a>删除</a></span> </div></td>
						</tr>
					  </tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="user_infor fr">
		<div class="infor login_infor clearfix">
			<p style="text-align:center;">
			    <?php echo Phalcon\Tag::image('images/li_top.png');?>
			</p>
			<div class="pic_head fl">
			    <?php echo Phalcon\Tag::image('images/pic_head.jpg');?>
			</div>
			<h3 class="fr">登陆信息</h3>
			<div class="user_detail fr">						
				<ul>
					<li><label>用户名：</label><span>Adny</span></li>
					<li><label>您的等级：</label><span class="user_level">v3</span></li>
					<li><label>上次登陆时间：</label><span>12-10 13:21</span></li>
					<li><label>上次登陆IP：</label><span>192.168.23.1</span></li>
				</ul>
			</div>
		</div>
		<div class="infor system_infor clearfix">
			<div class="li_dian tl">
			    <?php echo Phalcon\Tag::image('images/li_dian.png');?>
			</div>
			<div class="li_dian tr">
			    <?php echo Phalcon\Tag::image('images/li_dian.png');?>
			</div>
			<div class="li_dian bl">
			    <?php echo Phalcon\Tag::image('images/li_dian.png');?>
			</div>
			<div class="li_dian br">
			    <?php echo Phalcon\Tag::image('images/li_dian.png');?>
            </div>
			<div class="tubiao fl">
			    <?php echo Phalcon\Tag::image('images/tubiao.png');?>
			</div>
			<h3 class="fr" style="margin-top:20px;">系统信息</h3>
			<div class="ver_detail fr">	
				<hr/>
				<ul>
					<li><label>版本系统：</label><span>3.0.768</span></li>
					<li><label>系统要求：</label><span>win7及以上</span></li>
					<li><label>系统授权：</label><span>同享网络</span></li>
				</ul>
			</div>
		</div>
		<div class="infor after_infor clearfix">
			<div class="card2 fl">
			    <?php echo Phalcon\Tag::image('images/card2.png');?>
			</div>
			<h3 class="fr" style="margin-top:20px;">售后服务</h3>
			<div class="ser_detail fr">	
				<hr/>
				<ul>
					<li><label><?php echo Phalcon\Tag::image('images/hou_01.png');?>技术支持：</label><span>同享网络</span></li>
					<li><label><?php echo Phalcon\Tag::image('images/hou_02.png');?>售后电话：</label><span>1381234567</span></li>
					<li><label><?php echo Phalcon\Tag::image('images/hou_03.png');?>联系QQ：</label><span>123456789</span></li>
				</ul>
			</div>
		</div>
		<div class="fr" style="margin:80px 0px;">
		    <?php echo Phalcon\Tag::image('images/shuiyin.png');?>
		</div>
	</div>
</div>
<!-- html5.js for IE less than 9 --> 
<!--[if lt IE 9]>
	<script src="<?php echo $this->tag->javascriptInclude('js/html5.js'); ?>"></script>
<![endif]--> 

<!-- css3-mediaqueries.js for IE less than 9 --> 
<!--[if lt IE 9]>
	<script  src="<?php echo $this->tag->javascriptInclude('js/html5.js'); ?>./js/css3-mediaqueries.js"></script>
<![endif]-->
</body>
</html>
