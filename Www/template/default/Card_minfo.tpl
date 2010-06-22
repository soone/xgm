<!--{include file="header.tpl"}-->
<h3 class="topmenu">售卡订单详情(点击这里<a href="<!--{$refurl}-->">返回</a>)</h3>
<table class="slist">
	<tr>
		<td><b>订单ID</b></td>
		<td><!--{$data[0]}--></td>
		<td><b>订单号</b></td>
		<td><!--{$data[2]}--></td>
		<td><b>订卡总价</b></td>
		<td><!--{$data[4]}--></td>
		<td><b>卡均价</b></td>
		<td><!--{$data[5]}--></td>
	</tr>
	<tr>
		<td><b>客户名称</b></td>
		<td><!--{$data[9]}--></td>
		<td><b>下单时间</b></td>
		<td><!--{$data[9]}--></td>
		<td><b>订单状态</b></td>
		<td><!--{if $data[11] == 1}-->未出卡<!--{elseif $data[11] == 3}-->出卡完成<!--{elseif $data[11] == 5}-->作废<!--{/if}--></td>
		<td><b>完成时间</b></td>
		<td><!--{$data[12]}--></td>
	</tr>
	<tr>
		<td><b>订单详情</b></td>
		<td colspan="7">
			购卡数量：<!--{$data[3]}--><br />
			卡名称：<!--{$data[6][1]}--><br />
			卡面值：<!--{$data[6][2]}--><br />
			卡外观名称：<!--{$data[6][4]}--><br />
			卡类型：<!--{if $data[6][6] == 1}-->储值卡<!--{else}-->储物卡<!--{/if}--><br />
			卡配置信息：<!--{$data[6][7]}--><br />
			卡备注：<!--{$data[6][8]}--><br />
		</td>
	</tr>
	<tr>
		<td><b>发票内容</b></td>
		<td colspan="7"><!--{$data[7]}--></td>
	</tr>
	<tr>
		<td><b>备注</b></td>
		<td colspan="7"><!--{$data[8]}--></td>
	</tr>
	<tr>
		<td><b>对应卡号</b></td>
		<td colspan="7" style="word-wrap:break-all;word-break:brea-all;overflow:hidden;width:120px;height:120px;"><!--{$cNums}--></td>
	</tr>
</table>
<!--{include file="footer.tpl"}-->
