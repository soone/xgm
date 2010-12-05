<!--{include file="header.tpl"}-->
<h3 class="topmenu">进货单列表<span><a href="index.php?control=good&action=ioadd">(添加)</a></span></h3>
<form>
	<label>供应商名称：</label>
	<select name="sp_id">
		<!--{section name=s loop=$sp}-->
		<option value="<!--{$sp[s].0}-->"><!--{$sp[s].1}--></option>
		<!--{/section}-->
	</select>&nbsp;&nbsp;
	<label>开始日期：</label><input type="text" class="text" name="sdate" style="width:120px;" onFocus="WdatePicker({lang:'zh_cn',skin:'whyGreen'})" value="<!--{$smarty.get.sdate}-->" />&nbsp;&nbsp;
	<label>结束日期：</label><input type="text" class="text" name="edate" style="width:120px;" onFocus="WdatePicker({lang:'zh_cn',skin:'whyGreen'})" value="<!--{$smarty.get.edate}-->" />
	<input type="hidden" name="control" value="good" />
	<input type="hidden" name="action" value="inlist" />
	<input type="submit" name="submit" value="查看" />
</form>
<table class="slist">
	<thead>
		<tr>
			<th>单号</th>
			<th>总价</th>
			<th>进货时间</th>
			<th>付款状态</th>
			<th>付款时间</th>
			<th>备注</th>
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
						<li><a href="index.php?control=good&action=ioadd">|<</a></li>
						<li><a href="index.php?control=good&action=ioadd&page=<!--{$page['prevPage']}-->"><<</a></li>
						<!--{section name=p loop=$page['max']+$page['min'] start=$page['min'] max=$page['max']}-->
						<li><a href="index.php?control=good&action=ioadd&page=<!--{$smarty.section.p.index}-->"><!--{$smarty.section.p.index}--></a></li>
						<!--{/section}-->
						<li><a href="index.php?control=good&action=ioadd&page=<!--{$page['nextPage']}-->">>></a></li>
						<li><a href="index.php?control=good&action=ioadd&page=<!--{$page['allPages']}-->">>|</a></li>
					
					</ul>
				</div>
			</td>
		</tr>
	</tfoot>
	<!--{/if}-->
	<tbody>
		<!--{section name=l loop=$iolist}-->
		<tr>
			<td><!--{$iolist[l].1}--></td>
			<td><!--{$iolist[l].3}--></td>
			<td><!--{$iolist[l].2}--></td>
			<td><!--{if $iolist[l].5 == '0000-00-00 00:00:00'}-->未付款<!--{else}-->已付款<!--{/if}--></td>
			<td><!--{if $iolist[l].5 !== '0000-00-00 00:00:00'}--><!--{$iolist[l].5}--><!--{/if}--></td>
			<td><!--{$iolist[l].4}--></td>
			<td><a href="index.php?control=good&action=ioadd&ioid=<!--{$iolist[l].0}-->">修改</a>&nbsp;&nbsp;<a href="index.php?control=good&action=ininfo&order=<!--{$iolist[l].1}-->">详情</a></td>
		</tr>
		<!--{/section}-->
	</tbody>
</table>
<script type="text/javascript" language="javascript" src="images/datePicker/WdatePicker.js"></script>
<link href="images/datePicker/skin/WdatePicker.css" rel="stylesheet" type="text/css" />
<!--{include file="footer.tpl"}-->
