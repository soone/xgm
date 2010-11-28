<!--{include file="header.tpl"}-->
<h3 class="topmenu">礼品卡查询</h3>
<div class="divform">
	<form action="index.php" method="GET">
		<p>
			<label>卡号：</label><input type="text" name="cardno" class="text" value="<!--{$info[0]}-->" />&nbsp;&nbsp;
			<input type="submit" name="submit" value="查询" />
			<input type="hidden" name="control" value="card" />
			<input type="hidden" name="action" value="search" />
		</p>
	</form>
	<!--{if $card}-->
	<!--{if $card[9] > 0 && $card[5] == 1}-->
	<h5>点击<a href="index.php?control=good&action=order&clnum=<!--{$card[3]}-->&clid=<!--{$card[1]}-->&balance=<!--{$card[9]}-->&ctype=<!--{$cType[6]}-->">这里</a>开始登记配送单信息</h5>
	<!--{/if}-->
	<table class="slist">
		<tr>
			<td><b>卡号</b></td>
			<td><!--{$card[3]}--></td>
			<td><b>卡面值</b></td>
			<td><!--{$card[8]}--></td>
			<td><b>卡余额</b></td>
			<td><!--{$card[9]}--></td>
			<td><b>卡状态</b></td>
			<td><!--{if $card[5] == 1}-->已出卡可用<!--{/if}--><!--{if $card[5] == 0}-->作废<!--{/if}--><!--{if $card[5] == 2}-->回收<!--{/if}--><!--{if $card[6] == '0000-00-00 00:00:00'}-->(未出卡)<!--{/if}--></td>
			<td><b>卡名称</b></td>
			<td><!--{$cType[1]}--></td>
			<td><b>卡类型</b></td>
			<td><!--{if $cType[6] == 1}-->储物卡<!--{else}-->储值卡<!--{/if}--></td>
		</tr>
		<tr>
			<td><b>有效期</b></td>
			<td><!--{$card[7]}--></td>
			<td><b>卡外观</b></td>
			<td><!--{$cType[4]}--></td>
			<td><b>生成日期</b></td>
			<td><!--{$card[4]}--></td>
			<td><b>售卡订单号</b></td>
			<td colspan="5"><!--{$card[10]}--></td>
		</tr>
		<tr>
			<td><b>订卡客户名称</b></td>
			<td colspan="4"><!--{$cardOrder[10]}--></td>
			<td><b>套餐编号</b></td>
			<td colspan="6"><!--{$card[11]}--></td>
		</tr>
		<tr>
			<td><b>配置信息</b></td>
			<td colspan="11"><!--{$cType[7]}--></td>
		</tr>
		<tr>
			<td><b>以往配送单记录</b></td>
			<td colspan="11">
				<!--{if $orders}-->
				<table width="98%" align="center">
					<thead>
						<tr>
							<td><b>配送单号</b></td>
							<td><b>下单日期</b></td>
							<td><b>配送日期</b></td>
							<td><b>状态</b></td>
						</tr>
					</thead>
					<tbody>
						<!--{section name=o loop=$orders}-->
						<tr>
							<td><a href="index.php?control=good&action=order&goid=<!--{$orders[o].0}-->"><!--{$orders[o].1}--></a></td>
							<td><!--{$orders[o].2}--></td>
							<td><!--{$orders[o].3}--></td>
							<td><!--{if $orders[o].4 == 1}-->未配送<!--{elseif $orders[o].4 == 2}-->配送完成<!--{elseif $orders[o].4 == 3}-->作废<!--{elseif $orders[o].4 == 4}-->退货<!--{elseif $orders[o].4 == 5}-->换货<!--{/if}--></td>
						</tr>
						<!--{/section}-->
					</tbody>
				</table>
				<!--{/if}-->
			</td>
		</tr>
		<tr>
			<td colspan="12">
			<form action="index.php" method="GET">
				<b>套餐编号</b>
				<input type="text" name="cl_flag" value="<!--{$card[11]}-->" />
				<b>卡状态修改</b>
				<select name="cl_state">
					<option value="2">回收</option>
					<option value="0">作废</option>
				</select>
				<input type="hidden" name="cl_id" value="<!--{$card[1]}-->" />
				<input type="hidden" name="control" value="card" />
				<input type="hidden" name="action" value="chstatus" />
				<input type="submit" name="gosubmit" value="提交修改" onclick="return confirm('确定提交？');" />
			</form>
			</td>
		</tr>
	</table>
	<!--{/if}-->
</div>
<!--{include file="footer.tpl"}-->
