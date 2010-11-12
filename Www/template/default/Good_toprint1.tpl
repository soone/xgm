<!--{include file="header1.tpl"}-->
<h1>汇总单</h1>
<h3>配送日期：<!--{$smarty.get.date}--></h3>
<table class="slist">
	<thead>
		<tr>
			<th>下单日期</th>
			<th>礼品卡号</th>
			<th>订单内容</th>
			<th>订单类型</th>
			<th>订货人</th>
			<th>收货人</th>
			<th>收货人电话</th>
			<th>收货人地址</th>
			<th>付款方式</th>
			<th>远程费</th>
			<th>代收金额</th>
			<th>送货备注</th>
			<th>其他备注</th>
		</tr>
	</thead>
	<tbody>
		<!--{section name=ao loop=$allOrder}-->
		<tr>
			<td><!--{$allOrder[ao].12}--></td>
			<td><!--{$allOrder[ao].18}--></td>
			<td>订单内容</td>
			<td>
				<!--{if $allOrder[ao].7 == 1}-->储物卡<!--{/if}-->
				<!--{if $allOrder[ao].7 == 2}-->储值卡<!--{/if}-->
				<!--{if $allOrder[ao].7 == 3}-->零散配送单<!--{/if}-->
				<!--{if $allOrder[ao].7 == 4}-->补送配送单<!--{/if}-->
				<!--{if $allOrder[ao].7 == 6}-->异常配送单<!--{/if}-->
				<!--{if $allOrder[ao].7 == 7}-->返厂配送单<!--{/if}-->
			</td>
			<td><!--{$allOrder[ao].8}--></td>
			<td><!--{$allOrder[ao].15}--></td>
			<td><!--{$allOrder[ao].17}--></td>
			<td><!--{$allOrder[ao].16}--></td>
			<td>
				<!--{if $allOrder[ao].4 == 1}-->司机代收<!--{/if}-->
				<!--{if $allOrder[ao].4 == 2}-->支付宝<!--{/if}-->
				<!--{if $allOrder[ao].4 == 3}-->其他<!--{/if}-->
			</td>
			<td><!--{$allOrder[ao].6}--></td>
			<td><!--{$allOrder[ao].13}--></td>
			<td><!--{$allOrder[ao].10}--></td>
			<td><!--{$allOrder[ao].11}--></td>
		</tr>
		<!--{/section}-->
	</tbody>
</table>
<table class="slist">
	<thead>
		<tr>
			<th>名称</th>
			<th>数量</th>
		</tr>
	</thead>
	<tbody>
		<!--{section name=ag loop=$allGood}-->
		<tr>
			<td><!--{$allGood[ag].1}--></td>
			<td><!--{$allGood[ag].0}--></td>
		</tr>
		<!--{/section}-->
	</tbody>
</table>
<h3>分车汇总</h3>
<!--{section name=cc loop=$cars}-->
<h5><!--{$cars[cc]}--></h5>
<table class="slist">
	<thead>
		<tr>
			<th>下单日期</th>
			<th>礼品卡号</th>
			<th>订单内容</th>
			<th>订单类型</th>
			<th>订货人</th>
			<th>收货人</th>
			<th>收货人电话</th>
			<th>收货人地址</th>
			<th>付款方式</th>
			<th>远程费</th>
			<th>代收金额</th>
			<th>送货备注</th>
			<th>其他备注</th>
		</tr>
	</thead>
	<tbody>
		<!--{section name=ao loop=$carOrder[$cars[cc]]}-->
		<tr>
			<td><!--{$carOrder[$cars[cc]][ao].12}--></td>
			<td><!--{$carOrder[$cars[cc]][ao].18}--></td>
			<td>订单内容</td>
			<td>
				<!--{if $carOrder[$cars[cc]][ao].7 == 1}-->储物卡<!--{/if}-->
				<!--{if $carOrder[$cars[cc]][ao].7 == 2}-->储值卡<!--{/if}-->
				<!--{if $carOrder[$cars[cc]][ao].7 == 3}-->零散配送单<!--{/if}-->
				<!--{if $carOrder[$cars[cc]][ao].7 == 4}-->补送配送单<!--{/if}-->
				<!--{if $carOrder[$cars[cc]][ao].7 == 6}-->异常配送单<!--{/if}-->
				<!--{if $carOrder[$cars[cc]][ao].7 == 7}-->返厂配送单<!--{/if}-->
			</td>
			<td><!--{$carOrder[$cars[cc]][ao].8}--></td>
			<td><!--{$carOrder[$cars[cc]][ao].15}--></td>
			<td><!--{$carOrder[$cars[cc]][ao].17}--></td>
			<td><!--{$carOrder[$cars[cc]][ao].16}--></td>
			<td>
				<!--{if $carOrder[$cars[cc]][ao].4 == 1}-->司机代收<!--{/if}-->
				<!--{if $carOrder[$cars[cc]][ao].4 == 2}-->支付宝<!--{/if}-->
				<!--{if $carOrder[$cars[cc]][ao].4 == 3}-->其他<!--{/if}-->
			</td>
			<td><!--{$carOrder[$cars[cc]][ao].6}--></td>
			<td><!--{$carOrder[$cars[cc]][ao].13}--></td>
			<td><!--{$carOrder[$cars[cc]][ao].10}--></td>
			<td><!--{$carOrder[$cars[cc]][ao].11}--></td>
		</tr>
		<!--{/section}-->
	</tbody>
</table>
<table class="slist">
	<thead>
		<tr>
			<th>名称</th>
			<th>数量</th>
		</tr>
	</thead>
	<tbody>
		<!--{section name=ag loop=$allCarGood[$cars[cc]]}-->
		<tr>
			<td><!--{$allCarGood[$cars[cc]][ag].1}--></td>
			<td><!--{$allCarGood[$cars[cc]][ag].0}--></td>
		</tr>
		<!--{/section}-->
	</tbody>
</table>
<!--{/section}-->
<!--{include file="footer.tpl"}-->
