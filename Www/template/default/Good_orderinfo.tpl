<!--{include file="header.tpl"}-->
<h3 class="topmenu">配送单详情(<!--{$smarty.get.go}-->)</h3>
<div class="divform">
	<table class="slist">
		<tr>
			<td><b>下单时间</b></td>
			<td><!--{$orderInfo[3]}--></td>
			<td><b>订单状态</b></td>
			<td>
				<!--{if $orderInfo[5] == 1}-->未配送<!--{/if}-->
				<!--{if $orderInfo[5] == 2}-->配送完成<!--{/if}-->
				<!--{if $orderInfo[5] == 3}-->作废<!--{/if}-->
				<!--{if $orderInfo[5] == 6}-->正在配送<!--{/if}-->
			</td>
			<td><b>卡号</b></td>
			<td><!--{$cardNo}--></td>
			<td><b>配送单类型</b></td>
			<td>
				<!--{if $orderInfo[15] == 1}-->储物卡配送单<!--{/if}-->
				<!--{if $orderInfo[15] == 2}-->储值卡配送单<!--{/if}-->
				<!--{if $orderInfo[15] == 3}-->零散配送单<!--{/if}-->
				<!--{if $orderInfo[15] == 4}-->补送配送单<!--{/if}-->
				<!--{if $orderInfo[15] == 5}-->投诉补送配送单<!--{/if}-->
				<!--{if $orderInfo[15] == 6}-->报损配送单<!--{/if}-->
				<!--{if $orderInfo[15] == 7}-->返厂配送单<!--{/if}-->
			</td>
			<td><b>配送日期</b></td>
			<td><!--{$orderInfo[7]}--></td>
			<td><b>订单总金额</b></td>
			<td><!--{$orderInfo[18]}--></td>
		</tr>
		<tr>
			<td><b>代收金额</b></td>
			<td><!--{$orderInfo[19]}--></td>
			<td><b>折扣率</b></td>
			<td><!--{$orderInfo[20]}--></td>
			<td><b>远程费</b></td>
			<td><!--{$orderInfo[14]}--></td>
			<td><b>远程备注</b></td>
			<td colspan="5"><!--{$orderInfo[22]}--></td>
		</tr>
		<tr>
			<td><b>收款方式</b></td>
			<td>
				<!--{if $orderInfo[8] == 1}-->司机代收<!--{/if}-->
				<!--{if $orderInfo[8] == 2}-->支付宝<!--{/if}-->
				<!--{if $orderInfo[8] == 3}-->其他<!--{/if}-->
			</td>
			<td><b>收费备注</b></td>
			<td colspan="9"><!--{$orderInfo[9]}--></td>
		</tr>
		<tr>
			<td><b>客户姓名</b></td>
			<td><!--{$orderInfo[16]}--></td>
			<td><b>客户手机</b></td>
			<td><!--{$orderInfo[4]}--></td>
			<td><b>收货人信息</b></td>
			<td colspan="7">姓名：<!--{$orderInfo[17].2}--><br />地址：<!--{$orderInfo[17].3}--><br />手机：<!--{$orderInfo[17].4}--></td>
		</tr>
		<tr>
			<td><b>配送车号</b></td>
			<td><!--{$orderInfo[12]}--></td>
			<td><b>送货备注</b></td>
			<td colspan="4"><!--{$orderInfo[21]}--></td>
			<td><b>其他备注</b></td>
			<td colspan="4"><!--{$orderInfo[23]}--></td>
		</tr>
		<tr>
			<td><b>配送单物品详情</b></td>
			<td colspan="11">
				<table>
					<tr>
						<th>名称</th>
						<th>数量</th>
					</tr>
					<!--{section name=t loop=$goInfo}-->
					<tr>
						<td><!--{$goInfo[t].2}--></td>
						<td><!--{$goInfo[t].1}--></td>
					</tr>
					<!--{/section}-->
				</table>
			</td>
		</tr>
	</table>
</div>
<!--{include file="footer.tpl"}-->
