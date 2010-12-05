<!--{include file="header.tpl"}-->
<h3 class="topmenu">售卡订单详情查询</h3>
<div>
<form>
	<label>购卡客户姓名：</label><input type="text" class="text" name="buyname" style="width:120px;" value="<!--{$smarty.get.buyname}-->" />&nbsp;&nbsp;
	<label>卡有效日期：</label><input type="text" class="text" name="exp" style="width:120px;" onFocus="WdatePicker({lang:'zh_cn',skin:'whyGreen'})" value="<!--{$smarty.get.exp}-->" /><br />
	<label>卡价值：</label><input type="text" class="text" name="cvalue" style="width:120px;" value="<!--{$smarty.get.cvalue}-->" />
	<label>卡状态：</label>
	<select name="cstatus">
		<option value="">请选择</option>
		<option <!--{if $smarty.get.cstatus == 1}-->selected="selected"<!--{/if}-->value="1">出卡可用</option>
		<option <!--{if $smarty.get.cstatus === 0}-->selected="selected"<!--{/if}-->value="0">作废</option>
		<option <!--{if $smarty.get.cstatus == 2}-->selected="selected"<!--{/if}-->value="2">回收</option>
	</select>
	<input type="hidden" name="control" value="stat" />
	<input type="hidden" name="action" value="scard" />
	<input type="submit" name="submit" value="统计" />
</form>
</div>
<table class="slist">
	<thead>
		<tr>
			<th>订单号</th>
			<th>卡号</th>
			<th>卡名称</th>
			<th>卡外观</th>
			<th>购卡客户</th>
			<th>出卡日期</th>
			<th>有效期</th>
			<th>状态</th>
		</tr>
	</thead>
	<!--{if $page}-->
	<tfoot>
		<tr>
			<td colspan="8">
				<div class="page">
					<ul>
						<li class="all">总<!--{$page['allPages']}-->页</li>
						<li><a href="index.php?control=stat&action=scard&buyname=<!--{$smarty.get.buyname}-->&exp=<!--{$smarty.get.exp}-->&cvalue=<!--{$smarty.get.cvalue}-->&cstatus=<!--{$smarty.get.cstatus}-->">|<</a></li>
						<li><a href="index.php?control=stat&action=scard&buyname=<!--{$smarty.get.buyname}-->&exp=<!--{$smarty.get.exp}-->&cvalue=<!--{$smarty.get.cvalue}-->&cstatus=<!--{$smarty.get.cstatus}-->&page=<!--{$page['prevPage']}-->"><<</a></li>
						<!--{section name=p loop=$page['max']+$page['min'] start=$page['min'] max=$page['max']}-->
						<li><a href="index.php?control=stat&action=scard&buyname=<!--{$smarty.get.buyname}-->&exp=<!--{$smarty.get.exp}-->&cvalue=<!--{$smarty.get.cvalue}-->&cstatus=<!--{$smarty.get.cstatus}-->&page=<!--{$smarty.section.p.index}-->"><!--{$smarty.section.p.index}--></a></li>
						<!--{/section}-->
						<li><a href="index.php?control=stat&action=scard&buyname=<!--{$smarty.get.buyname}-->&exp=<!--{$smarty.get.exp}-->&cvalue=<!--{$smarty.get.cvalue}-->&cstatus=<!--{$smarty.get.cstatus}-->&page=<!--{$page['nextPage']}-->">>></a></li>
						<li><a href="index.php?control=stat&action=scard&buyname=<!--{$smarty.get.buyname}-->&exp=<!--{$smarty.get.exp}-->&cvalue=<!--{$smarty.get.cvalue}-->&cstatus=<!--{$smarty.get.cstatus}-->&page=<!--{$page['allPages']}-->">>|</a></li>
					
					</ul>
				</div>
			</td>
		</tr>
	</tfoot>
	<!--{/if}-->
	<tbody>
		<!--{section name=l loop=$cardlist}-->
		<tr>
			<td><!--{$cardlist[l].0}--></td>
			<td><!--{$cardlist[l].1}--></td>
			<td><!--{$cardlist[l].2}--></td>
			<td><!--{$cardlist[l].3}--></td>
			<td><!--{$cardlist[l].4}--></td>
			<td><!--{$cardlist[l].5}--></td>
			<td><!--{$cardlist[l].6}--></td>
			<td>
				<!--{if $cardlist[l].7 == 1}-->出卡可用<!--{/if}-->
				<!--{if $cardlist[l].7 == 0}-->作废<!--{/if}-->
				<!--{if $cardlist[l].7 == 2}-->回收<!--{/if}-->
			</td>
		</tr>
		<!--{/section}-->
	</tbody>
</table>
<script type="text/javascript" language="javascript" src="images/datePicker/WdatePicker.js"></script>
<link href="images/datePicker/skin/WdatePicker.css" rel="stylesheet" type="text/css" />
<!--{include file="footer.tpl"}-->
