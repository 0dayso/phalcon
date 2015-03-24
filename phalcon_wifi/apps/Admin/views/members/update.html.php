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
<div class="inner_box">
<div class="page_title">
	<div class="title_list"><div style="padding-left:13px;">员工管理-<span>修改员工</span></div></div>
</div>
<script type="text/javascript">
$(function() {
	/*
	$("#user_submit").click(function(){
		if(!$("#mname").val()){
			$("#mname").parent().children('span').addClass(".tip_name").text("*姓名不能为空！").css('color','#f94a69');
			$("#mname").addClass("focus");
			return;
			}
		if(!$("#user_name").val()){
			$(".tip_user").text("*用户名不能为空！").css('color','#f94a69');
			$("#user_name").addClass("focus");
			return;
		}	
		if(!$("#firm").val()){
			$(".tip_firm").text("*公司不能为空！").css('color','#f94a69');
			$("#firm").addClass("focus");
			return;
		}
		if(!$("#phone").val() || !$("#phone").val().match(/^1[3|4|5|6|8][0-9]\d{4,8}$/)){
			$(".tip_phone").text("*号码格式有误，请填写正确号码！").css('color','#f94a69');
			$("#phone").addClass("focus");
			return;
		}
	});*/
});

//修改用户
function updateUser() {
	var mid = $("#mid").val();
	var email = $("#email").val();
	var mobile = $("#mobile").val();
	var mchild = $("#mchild").val();
	
	if (mid == "" || mid == undefined) {
		alert("缺少参数 : mid");
		return false;
	}
	
	if (email == "" || email == undefined) {
		alert("缺少参数 : email");
		return false;
	}
	
	if (mobile == "" || mobile == undefined) {
		alert("缺少参数 : mobile");
		return false;
	}
	
	if (mchild == "" || mchild == undefined) {
		alert("缺少参数 : mchild");
		return false;
	}
	
	var src = "<?php echo $this->url->get(array('for'=>'common','controller'=>'Ajax','action'=>'updateUser'));?>";
	$.ajax({
		url : ""+src+"mid/" + mid + "/email/" + email + "/mobile/" + mobile + "/mchild/" + mchild,
		data : { isAjax:true},
		success : function(result) {
			result = jQuery.parseJSON(result);
			alert(result.msg);
			location.reload()
		}
	});
}
</script>
<div class="user_manage">
	
	<div class="user_lists">
	<div class="user_list show">
		<form name="form-search" method="get">
			<div class="wrapper">
				<table style="table-layout: auto;">
				<tbody>
					<tr>
						<td><label>用户名：</label></td>
						<td>
							<input type="hidden" name="mid" id="mid" value="<?php echo $member['mid'];?>"/>
							<?php echo $member['mname'];?>
						</td>
					</tr>
					<tr>
						<td><label>邮箱：</label></td>
						<td>
							<input type="text" class="" name="email" id="email" style="width:240px;" value="<?php echo $member['email'];?>"/>
					</tr>
					<tr>
						<td><label>联系电话：</label></td>
						<td>
							<input type="text" class="" id="mobile" name="mobile" value="<?php echo $member['mobile'];?>"/>
					</tr>
					<tr>
						<td><label>类型：</label></td>
						<td>
						<select class="search-opt" name="mchild" id="mchild">
							<?php foreach($mchilds as $key => $item) { ?>
								<option 
									value="<?php echo $key;?>" 
									<?php if ($member['mchild'] == $key) { echo "selected"; } ?>
								>
									<?php echo $item;?>
								</option>
							<?php } ?>
						</select>
						</td>
					</tr>
					<tr>
						<td><label>注册ip：</label></td>
						<td>
							<?php echo $member['reg_ip'];?>
						</td>
					</tr>
					<tr>
						<td><label>最后登陆ip：</label></td>
						<td>
							<?php echo $member['last_login_ip'];?>
						</td>
					</tr>
					<tr>
						<td><label>注册时间：</label></td>
						<td>
							<?php echo date('Y-m-d H:i:s', $member['reg_time']);?>
						</td>
					</tr>
					<tr>
						<td><label>最后登陆时间：</label></td>
						<td>
							<?php echo date('Y-m-d H:i:s', $member['last_login_time']);?>
						</td>
					</tr>
					<tr>
						<td><label>登陆次数：</label></td>
						<td>
							<?php echo $member['login_counts'];?>
						</td>
					</tr>
				</tbody>
				</table>
			</div>
		</form>
		<div style="height:50px; line-height:50px;padding-left:21%;">
			<button onclick="updateUser();" class="add-btn" id="submit" type="button">提交</button>
		</div>
	</div>
	</div>
</div>
</div>
</body>
</html>

