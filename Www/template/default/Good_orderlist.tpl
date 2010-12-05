<!--{include file="header.tpl"}-->
<h3 class="topmenu">配送单列表</h3>
<div>
<form>
	<label>客户电话：</label><input type="text" class="text" name="cphone" style="width:120px;" value="<!--{$smarty.get.cphone}-->" />&nbsp;&nbsp;
	<label>客户姓名：</label><input type="text" class="text" name="cname" style="width:120px;" value="<!--{$smarty.get.cname}-->" />&nbsp;&nbsp;
	<label>配送日期：</label><input type="text" class="text" name="sdate" style="width:120px;" onFocus="WdatePicker({lang:'zh_cn',skin:'whyGreen'})" value="<!--{$smarty.get.sdate}-->" /><br />
	<label>下单日期：</label><input type="text" class="text" name="cdate" style="width:120px;" onFocus="WdatePicker({lang:'zh_cn',skin:'whyGreen'})" value="<!--{$smarty.get.cdate}-->" />
	<label>配送单号：</label><input type="text" class="text" name="ono" style="width:120px;" value="<!--{$smarty.get.ono}-->" />
	<label>分车号：</label>
	<select name="carno">
		<option value="">请选择</option>
		<!--{section name=cn loop=$cNo}-->
		<option <!--{if $smarty.get.carno == $cNo[cn].0}-->selected="selected" <!--{/if}-->value="<!--{$cNo[cn].0}-->"><!--{$cNo[cn].0}--></option>
		<!--{/section}-->
	</select>
	<br />
	<label>配送单类型：</label>
	<select name="otype">
		<option value="">请选择</option>
		<option <!--{if $smarty.get.otype == 1}-->selected="selected" <!--{/if}-->value="1">储物卡配送单</option>
		<option <!--{if $smarty.get.otype == 2}-->selected="selected" <!--{/if}-->value="2">储值卡配送单</option>
		<option <!--{if $smarty.get.otype == 3}-->selected="selected" <!--{/if}-->value="3">零散配送单</option>
		<option <!--{if $smarty.get.otype == 4}-->selected="selected" <!--{/if}-->value="4">补送配送单</option>
		<option <!--{if $smarty.get.otype == 5}-->selected="selected" <!--{/if}-->value="5">投诉补送配送单</option>
		<option <!--{if $smarty.get.otype == 6}-->selected="selected" <!--{/if}-->value="6">报损配送单</option>
		<option <!--{if $smarty.get.otype == 7}-->selected="selected" <!--{/if}-->value="7">返厂配送单</option>
	</select>
	<label>订单状态：</label>
	<select name="cstatus">
		<option value="">请选择</option>
		<option <!--{if $smarty.get.cstatus == 100}-->selected="selected" <!--{/if}-->value="100">全部</option>
		<option <!--{if $smarty.get.cstatus == 1}-->selected="selected" <!--{/if}-->value="1">未配送</option>
		<option <!--{if $smarty.get.cstatus == 2}-->selected="selected" <!--{/if}-->value="2">配送完成</option>
		<option <!--{if $smarty.get.cstatus == 3}-->selected="selected" <!--{/if}-->value="3">作废</option>
		<option <!--{if $smarty.get.cstatus == 6}-->selected="selected" <!--{/if}-->value="6">正在配送</option>
	</select>
	<input type="hidden" name="control" value="good" />
	<input type="hidden" name="action" value="orderlist" />
	<input type="submit" name="submit" value="查看" />
</form>
</div>
<table class="slist">
	<thead>
		<tr>
			<th>单号</th>
			<th>总价</th>
			<th>类型</th>
			<th>下单人</th>
			<th>状态</th>
			<th>预定配送时间</th>
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
						<li><a href="index.php?control=good&action=orderlist&cphone=<!--{$smarty.get.cphone}-->&cname=<!--{$smarty.get.cname}-->&sdate=<!--{$smarty.get.sdate}-->&cdate=<!--{$smarty.get.cdate}-->&ono=<!--{$smarty.get.ono}-->&carno=<!--{$smarty.get.carno}-->&otype=<!--{$smarty.get.otype}-->&cstatus=<!--{$smarty.get.cstatus}-->">|<</a></li>
						<li><a href="index.php?control=good&action=orderlist&cphone=<!--{$smarty.get.cphone}-->&cname=<!--{$smarty.get.cname}-->&sdate=<!--{$smarty.get.sdate}-->&cdate=<!--{$smarty.get.cdate}-->&ono=<!--{$smarty.get.ono}-->&carno=<!--{$smarty.get.carno}-->&otype=<!--{$smarty.get.otype}-->&cstatus=<!--{$smarty.get.cstatus}-->&page=<!--{$page['prevPage']}-->"><<</a></li>
						<!--{section name=p loop=$page['max']+$page['min'] start=$page['min'] max=$page['max']}-->
						<li><a href="index.php?control=good&action=orderlist&cphone=<!--{$smarty.get.cphone}-->&cname=<!--{$smarty.get.cname}-->&sdate=<!--{$smarty.get.sdate}-->&cdate=<!--{$smarty.get.cdate}-->&ono=<!--{$smarty.get.ono}-->&carno=<!--{$smarty.get.carno}-->&otype=<!--{$smarty.get.otype}-->&cstatus=<!--{$smarty.get.cstatus}-->&page=<!--{$smarty.section.p.index}-->"><!--{$smarty.section.p.index}--></a></li>
						<!--{/section}-->
						<li><a href="index.php?control=good&action=orderlist&cphone=<!--{$smarty.get.cphone}-->&cname=<!--{$smarty.get.cname}-->&sdate=<!--{$smarty.get.sdate}-->&cdate=<!--{$smarty.get.cdate}-->&ono=<!--{$smarty.get.ono}-->&carno=<!--{$smarty.get.carno}-->&otype=<!--{$smarty.get.otype}-->&cstatus=<!--{$smarty.get.cstatus}-->&page=<!--{$page['nextPage']}-->">>></a></li>
						<li><a href="index.php?control=good&action=orderlist&cphone=<!--{$smarty.get.cphone}-->&cname=<!--{$smarty.get.cname}-->&sdate=<!--{$smarty.get.sdate}-->&cdate=<!--{$smarty.get.cdate}-->&ono=<!--{$smarty.get.ono}-->&carno=<!--{$smarty.get.carno}-->&otype=<!--{$smarty.get.otype}-->&cstatus=<!--{$smarty.get.cstatus}-->&page=<!--{$page['allPages']}-->">>|</a></li>
					
					</ul>
				</div>
			</td>
		</tr>
	</tfoot>
	<!--{/if}-->
	<tbody>
		<!--{section name=l loop=$golist}-->
		<tr>
			<td><!--{if $golist[l].8}-->卡号：<!--{$golist[l].8}--><!--{else}--><!--{$golist[l].1}--><!--{/if}--></td>
			<td><!--{$golist[l].6}--></td>
			<td><!--{if $golist[l].4 == 1}-->储物卡配送单<!--{else if $golist[l].4 == 2}-->储值卡配送单<!--{else if $golist[l].4 == 3}-->零散配送单<!--{else if $golist[l].4 == 4}-->补送配送单<!--{else if $golist[l].4 == 5}-->投诉补送配送单<!--{else if $golist[l].4 == 7}-->返厂配送单<!--{/if}--></td>
			<td><!--{$golist[l].2}--></td>
			<td><!--{if $golist[l].3 == 1}-->未配送<!--{else if $golist[l].3 == 2}-->配送完成<!--{else if $golist[l].3 == 3}-->作废<!--{else if $golist[l].3 == 4}-->退货<!--{else if $golist[l].3 == 5}-->换货<!--{else if $golist[l].3 == 6}-->配送中<!--{/if}--></td>
			<td><!--{$golist[l].5}--></td>
			<td>
				<!--{if $golist[l].3 != 2}-->
				<select onchange="javascript:setthis(<!--{$golist[l].0}-->);" id="aType_<!--{$golist[l].0}-->" name="aType">
					<option value="">选择操作</option>
					<option value="2">配送完成</option>
					<option value="3">作废</option>
				</select><br />
				<input type="hidden" id="coid" value="<!--{$data[l].0}-->" />
				<!--{/if}-->
				<!--{if $golist[l].3 == 1}--><a href="index.php?control=good&action=gout&go=<!--{$golist[l].1}-->">出库配送</a><br /><!--{/if}--><a href="index.php?control=good&action=orderinfo&go=<!--{$golist[l].1}-->">查看详情</a><br /><!--{if $golist[l].3 == 6}--><a href="index.php?control=good&action=changecar&oid=<!--{$golist[l].1}-->">修改分车</a><!--{/if}-->
			</td>
		</tr>
		<!--{/section}-->
	</tbody>
</table>
<script language="javascript" type="text/javascript">
function setthis(id)
{
	var aType = $('#aType_'+id).val();
	if(aType == '2')
		var url = 'index.php?control=good&action=gochange';
	else
		var url = 'index.php?control=good&action=backchange';

	url += '&id='+id;

	if(aType)
	{
		url += '&t='+aType;
		location.href=url;
	}
	else
		alert('请选择相应的操作');
}
</script>
<script type="text/javascript" language="javascript" src="images/datePicker/WdatePicker.js"></script>
<link href="images/datePicker/skin/WdatePicker.css" rel="stylesheet" type="text/css" />
<!--{include file="footer.tpl"}-->
