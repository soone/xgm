<!--{include file="header.tpl"}-->
<h3 class="topmenu">礼品卡列表</h3>
<table class="slist">
	<thead>
		<tr>
			<th>名称</th>
			<th>面值</th>
			<th>卡外观</th>
			<th>类型</th>
			<th>配置</th>
			<th>备注</th>
			<th>添加时间</th>
			<th>操作</th>
		</tr>
	</thead>
	<!--{if $page}-->
	<tfoot>
		<tr>
			<td colspan="8">
				<div class="page">
					<ul>
						<li class="all">总<!--{$page['allPages']}-->页</li>
						<li><a href="index.php?action=gcardlist">|<</a></li>
						<li><a href="index.php?action=gcardlist&page=<!--{$page['curPage']-1}-->"><<</a></li>
						<!--{section name=p loop=$page['max']+$page['min'] start=$page['min'] max=$page['max']}-->
						<li><a href="index.php?action=gcardlist&page=<!--{$smarty.section.p.index}-->"><!--{$smarty.section.p.index}--></a></li>
						<!--{/section}-->
						<li><a href="index.php?action=gcardlist&page=<!--{$page['curPage']+1}-->">>></a></li>
						<li><a href="index.php?action=gcardlist&page=<!--{$page['allPages']}-->">>|</a></li>
					
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
			<td><!--{if $data[l].5 == 2}-->储值卡<!--{else}-->储物卡<!--{/if}--></td>
			<td><!--{$data[l].6}--></td>
			<td><!--{$data[l].7}--></td>
			<td><!--{$data[l].4}--></td>
			<td><a href="index.php?action=gcarddef&ciid=<!--{$data[l].0}-->">修改</a></td>
		</tr>
		<!--{/section}-->
	</tbody>
</table>
<!--{include file="footer.tpl"}-->
