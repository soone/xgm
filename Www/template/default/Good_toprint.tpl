<!--{include file="header.tpl"}-->
<h3 class="topmenu">售卡订单列表</h3>
<table class="slist">
	<thead>
		<tr>
			<th>订单号</th>
			<th>总价</th>
			<th>数量</th>
			<th>均价</th>
			<th>卡名称</th>
			<th>发票内容</th>
			<th>定卡人</th>
			<th>下单日期</th>
			<th>状态</th>
			<th>操作</th>
		</tr>
	</thead>
	<!--{if $page}-->
	<tfoot>
		<tr>
			<td colspan="10">
				<div class="page">
					<ul>
						<li class="all">总<!--{$page['allPages']}-->页</li>
						<li><a href="index.php?control=card&action=colist">|<</a></li>
						<li><a href="index.php?control=card&action=colist&page=<!--{$page['prevPage']}-->"><<</a></li>
						<!--{section name=p loop=$page['max']+$page['min'] start=$page['min'] max=$page['max']}-->
						<li><a href="index.php?control=card&action=colist&page=<!--{$smarty.section.p.index}-->"><!--{$smarty.section.p.index}--></a></li>
						<!--{/section}-->
						<li><a href="index.php?control=card&action=colist&page=<!--{$page['nextPage']}-->">>></a></li>
						<li><a href="index.php?control=card&action=colist&page=<!--{$page['allPages']}-->">>|</a></li>
					
					</ul>
				</div>
			</td>
		</tr>
	</tfoot>
	<!--{/if}-->
	<tbody>
		<!--{section name=l loop=$data}-->
		<tr>
			<td><!--{$data[l].1}--></td>
			<td><!--{$data[l].2}--></td>
			<td><!--{$data[l].3}--></td>
			<td><!--{$data[l].4}--></td>
			<td><!--{$data[l].5}--></td>
			<td><!--{$data[l].6}--></td>
			<td><!--{$data[l].8}--></td>
			<td><!--{$data[l].7}--></td>
			<td><!--{if $data[l].10 == 1}-->未出卡<!--{elseif $data[l].10 == 3}-->出卡完成<!--{elseif $data[l].10 == 5}-->作废<!--{/if}--></td>
			<td>
				<!--{if $data[l].10 == 1}-->
				<select onchange="javascript:setthis(this);">
					<option value="">选择操作</option>
					<option value="3">出卡完成</option>
					<option value="5">作废</option>
				</select><br />
				<input type="hidden" id="coid" value="<!--{$data[l].0}-->" />
				<!--{/if}-->
				<a href="index.php?control=card&action=minfo&coid=<!--{$data[l].0}-->">详情</a>
			</td>
		</tr>
		<!--{/section}-->
	</tbody>
</table>
<script language="javascript" type="text/javascript">
function setthis(obj)
{
	var s = parseInt($(obj).val());
	if(!isNaN(s) && (s == 3 || s == 5))
	{
		if(s == 5 && !confirm('确定将该订单作废？？'))
			return false;

		location.href="index.php?control=card&action=cstatus&s="+s+"&coid="+$('#coid').val();
	}
}
</script>
<!--{include file="footer.tpl"}-->
