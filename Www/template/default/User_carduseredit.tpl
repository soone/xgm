<!--{include file="header.tpl"}-->
<h3 class="topmenu">定卡客户资料详情</h3>
<form method="post">
<table class="slist">
	<tr>
		<td><b>客户姓名</b></td>
		<td><input type="text" style="width:120px;" name="name" value="<!--{$info[1]}-->" /></td>
		<td><b>姓名拼音</b></td>
		<td><input type="text" style="width:120px;" name="py" value="<!--{$info[2]}-->" /></td>
		<td><b>性别</b></td>
		<td>
			<select name="sex">
				<option value="2" <!--{if $info[4] == 2}-->selected="selected"<!--{/if}-->>女</option>
				<option value="1" <!--{if $info[4] == 1}-->selected="selected"<!--{/if}-->>男</option>
			</select>
		</td>
		<td><b>职位</b></td>
		<td><input type="text" style="width:120px;" name="job" value="<!--{$info[5]}-->" /></td>
	</tr>
	<tr>
		<td><b>电话1</b></td>
		<td><input type="text" style="width:120px;" name="tel1" value="<!--{$info[6]}-->" /></td>
		<td><b>电话2</b></td>
		<td><input type="text" style="width:120px;" name="tel2" value="<!--{$info[7]}-->" /></td>
		<td><b>邮箱</b></td>
		<td><input type="text" style="width:120px;" name="email" value="<!--{$info[8]}-->" /></td>
		<td><b>网址</b></td>
		<td><input type="text" style="width:120px;" name="website" value="<!--{$info[9]}-->" /></td>
	</tr>
	<tr>
		<td><b>Msn</b></td>
		<td><input type="text" style="width:120px;" name="msn" value="<!--{$info[10]}-->" /></td>
		<td><b>qq</b></td>
		<td><input type="text" style="width:120px;" name="qq" value="<!--{$info[11]}-->" /></td>
		<td><b>淘宝</b></td>
		<td><input type="text" style="width:120px;" name="taobao" value="<!--{$info[12]}-->" /></td>
		<td><b>飞信</b></td>
		<td><input type="text" style="width:120px;" name="fetion" value="<!--{$info[13]}-->" /></td>
	</tr>
	<tr>
		<td><b>公司帐号</b></td>
		<td><input type="text" style="width:120px;" name="bank" value="<!--{$info[14]}-->" /></td>
		<td><b>银行名称</b></td>
		<td><input type="text" style="width:120px;" name="bankname" value="<!--{$info[15]}-->" /></td>
		<td colspan="4"></td>
	</tr>
	</tr>
	<tr>
		<td><b>备注</b></td>
		<td colspan="7"><textarea name="mark"><!--{$info[16]}--></textarea></td>
	</tr>
	<!--{if $t != 'v'}-->
	<tr>
		<td colspan="8"><input type="hidden" name="cuid" value="<!--{$info[0]}-->" /><input type="submit" name="submit" value="保存修改" /></td>
	</tr>
	<!--{/if}-->
</table>
</form>
<!--{include file="footer.tpl"}-->
