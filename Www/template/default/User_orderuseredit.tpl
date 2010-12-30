<!--{include file="header.tpl"}-->
<h3 class="topmenu">下单客户资料详情</h3>
<form method="post">
<table class="slist">
	<tr>
		<td><b>用户名</b></td>
		<td><input type="text" style="width:120px;" name="name" value="<!--{$info[1]}-->" /></td>
		<td><b>姓名</b></td>
		<td><input type="text" style="width:120px;" name="truename" value="<!--{$info[2]}-->" /></td>
		<td><b>姓名拼音</b></td>
		<td><input type="text" style="width:120px;" name="py" value="<!--{$info[3]}-->" /></td>
		<td><b>手机</b></td>
		<td><input type="text" style="width:120px;" name="phone" value="<!--{$info[4]}-->" /></td>
	</tr>
	<tr>
		<td><b>电话</b></td>
		<td><input type="text" style="width:120px;" name="tel" value="<!--{$info[5]}-->" /></td>
		<td><b>总消费金额</b></td>
		<td><input type="text" style="width:120px;" name="total" value="<!--{$info[6]}-->" /></td>
		<td><b>邮箱</b></td>
		<td><input type="text" style="width:120px;" name="email" value="<!--{$info[9]}-->" /></td>
		<td><b></b></td>
		<td></td>
	</tr>
	<tr>
		<td colspan="8"><input type="hidden" name="ouid" value="<!--{$info[0]}-->" /><input type="submit" name="submit" value="保存修改" /></td>
	</tr>
</table>
</form>
<!--{include file="footer.tpl"}-->
