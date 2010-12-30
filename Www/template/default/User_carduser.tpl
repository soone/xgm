<!--{include file="header.tpl"}-->
<h3 class="topmenu">定卡用户资料列表</h3>
<table class="slist">
	<thead>
		<tr>
			<th>姓名</th>
			<th>拼音</th>
			<th>性别</th>
			<th>公司</th>
			<th>职位</th>
			<th>银行名称</th>
			<th>帐号</th>
			<th>电话1</th>
			<th>电话2</th>
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
						<li><a href="index.php?action=carduser">|<</a></li>
						<li><a href="index.php?action=carduser&page=<!--{$page['curPage']-1}-->"><<</a></li>
						<!--{section name=p loop=$page['max']+$page['min'] start=$page['min'] max=$page['max']}-->
						<li><a href="index.php?action=carduser&page=<!--{$smarty.section.p.index}-->"><!--{$smarty.section.p.index}--></a></li>
						<!--{/section}-->
						<li><a href="index.php?action=carduser&page=<!--{$page['curPage']+1}-->">>></a></li>
						<li><a href="index.php?action=carduser&page=<!--{$page['allPages']}-->">>|</a></li>
					
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
			<td><!--{if $data[l].4 == 2}-->女<!--{else}-->男<!--{/if}--></td>
			<td><!--{$data[l].3}--></td>
			<td><!--{$data[l].5}--></td>
			<td><!--{$data[l].15}--></td>
			<td><!--{$data[l].14}--></td>
			<td><!--{$data[l].6}--></td>
			<td><!--{$data[l].7}--></td>
			<td><!--{$data[l].17}--></td>
			<td>
				<a href="index.php?control=user&action=carduseredit&cuid=<!--{$data[l].0}-->">修改</a>
				<a href="index.php?control=user&action=carduseredit&cuid=<!--{$data[l].0}-->&t=v">详情</a>
			</td>
		</tr>
		<!--{/section}-->
	</tbody>
</table>
<!--{include file="footer.tpl"}-->
