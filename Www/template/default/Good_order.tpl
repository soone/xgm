<!--{include file="header.tpl"}-->
<h3 class="topmenu">配送单登记</h3>
<div class="divform">
	<form action="index.php" method="POST">
		<p>
			<label>配送单类型：</label>
			<select name="otype">
				<option value="0">请选择</option>
				<option value="1">储物卡配送单</option>
				<option value="2">储值卡配送单</option>
				<option value="3">零散配送单</option>
				<option value="4">补送配送单</option>
				<option value="5">投诉补送配送单</option>
			</select>
		</p>
		<p>
			<label>用户EMAIL：</label><input type="text" name="email" class="text" id="email" />&nbsp;&nbsp;<a href="javascript:void(0);" id="checkemail">查看</a>
		</p>
		<p>
			<label>订货人姓名：</label><input type="text" name="truename" class="text" style="width:120px" id="truename" />&nbsp;&nbsp;
			<label>拼音：</label><input type="text" name="pinname" class="text" style="width:120px" id="pinname" />
		</p>
		<p>
			<label>手机：</label><input type="text" name="mobile" class="text" style="width:120px" id="mobile" />&nbsp;&nbsp;
			<label>电话：</label><input type="text" name="phone" class="text" style="width:120px" id="phone" />
		</p>
		<p>
			<input type="submit" name="submit" value="下一步" id="thenext" />
			<input type="hidden" name="action" value="order" />
			<input type="hidden" name="control" value="good" />
		</p>
	</form>
</div>
<script language="javascript" type="text/javascript">
$('#checkemail').click(function(){
	var email = $('#email').val();
	if(!email)
	{
		alert('请填写订货人EMAIL');
		return false;
	}

	$.getJSON('index.php', {control:"good",action:"getpinfo",ou_email:email}, function(data){
		if(data == 0)
			alert('暂无该客户信息');
		else
		{

		}
	});
});
</script>
<!--{include file="footer.tpl"}-->
