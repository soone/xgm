<!--{include file="header.tpl"}-->
<h3 class="topmenu">库存列表(<a href="index.php?control=good&action=getcart">查看购物车</a>)<span></h3>
<div>
<form>
	<label>选择分类：</label>
	<select name="ctype" id="bcate">
		<option value="">请选择</option>
		<!--{section name=t loop=$bigcate}-->
		<option <!--{if $smarty.get.ctype == $bigcate[t].0}-->selected="selected" <!--{/if}-->value="<!--{$bigcate[t].0}-->"><!--{$bigcate[t].1}--></option>
		<!--{/section}-->
	</select>
	<input type="hidden" name="control" value="good" />
	<input type="hidden" name="action" value="liblist" />
	<input type="submit" name="submit" value="查看" />
</form>
</div>
<table class="slist">
	<thead>
		<tr>
			<th>名称</th>
			<th>售价</th>
			<th>剩余量(单位)</th>
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
						<li><a href="index.php?ctype=<!--{$smarty.get.ctype}-->&control=good&action=liblist">|<</a></li>
						<li><a href="index.php?control=good&action=liblist&page=<!--{$page['prevPage']}-->"><<</a></li>
						<!--{section name=p loop=$page['max']+$page['min'] start=$page['min'] max=$page['max']}-->
						<li><a href="index.php?control=good&action=liblist&page=<!--{$smarty.section.p.index}-->"><!--{$smarty.section.p.index}--></a></li>
						<!--{/section}-->
						<li><a href="index.php?control=goodaction=liblist&page=<!--{$page['nextPage']}-->">>></a></li>
						<li><a href="index.php?control=goodaction=liblist&page=<!--{$page['allPages']}-->">>|</a></li>
					
					</ul>
				</div>
			</td>
		</tr>
	</tfoot>
	<!--{/if}-->
	<tbody>
		<!--{section name=l loop=$liblist}-->
		<tr>
			<td><!--{$liblist[l].1}--></td>
			<td><!--{$liblist[l].3}--></td>
			<td><!--{$liblist[l].4}-->(<!--{$liblist[l].2}-->)</td>
			<td><!--{$liblist[l].5}--></td>
			<td><!--{if $pInfo == 1}--><input type="text" class="text" style="width:30px" value="1" id="good<!--{$liblist[l].0}-->"/><a href="javascript:void(0);" onclick="addcart('<!--{$liblist[l].0}-->', '<!--{$liblist[l].1}-->', '<!--{$liblist[l].3}-->', '<!--{$liblist[l].4}-->', '<!--{$liblist[l].6}-->');">添加到购物车</a>&nbsp;|&nbsp;<!--{/if}--><a href="">查看详情</a></td>
		</tr>
		<!--{/section}-->
	</tbody>
</table>
<script type="text/javascript" language="javascript" src="images/json.js"></script>
<script language="javascript" type="text/javascript">
var smallCate = '<!--{$smallcate}-->';
var sCate = smallCate.parseJSON();
var nbCate = '<!--{$smarty.get.ctype}-->';
var nsCate = '<!--{$smarty.get.cstype}-->';
if(typeof(sCate[nbCate]) != "undefined")
{
	$('#bcate').after('<select id="sct" name="cstype"></select>');
	$.each(sCate[$('#bcate').val()], function(i){
		$('#sct').append("<option "+(parseInt(nsCate) == parseInt(sCate[nbCate][i][0]) ? "selected='selected' " : '')+"value='"+sCate[nbCate][i][0]+"'>"+sCate[nbCate][i][1]+"</option>");
	});
}
$('#bcate').bind('change', function(){
	$('#sct').hide();
	if(typeof(sCate[$('#bcate').val()]) != "undefined")
	{
		$('#bcate').after('<select id="sct" name="cstype"></select>');
		$.each(sCate[$('#bcate').val()], function(i){
			$('#sct').append("<option value='"+sCate[$('#bcate').val()][i][0]+"'>"+sCate[$('#bcate').val()][i][1]+"</option>");
		});
	}
});
function addcart(id, name, price, maxNum, isspec)
{
	var n = parseInt($('#good'+id).val());
	if(isNaN(n))
	{
		alert('请填入数字');
		return false;
	}

	var mNum = parseInt(maxNum);
	if(n > mNum)
	{
		alert('输入的数量超过了库存量，请调整');
		return false;
	}

	//放入cookie
	var s = $.cookie('shopCart');
	var shopCart = s ? s.parseJSON() : new Array();
	var scLen = shopCart.length;
    var nAr = new Array(id, name, n, price, mNum, isspec);

	if(scLen > 0)
	{
		var flag = 0;
		for(var i = 0; i < scLen; i++)
		{
			if(shopCart[i][0] == id)
			{
				if(shopCart[i][2] + n > mNum)
				{
					alert('购物车中该物品数量超过了库存，请调整');
					return false;
				}
				else
				{
					shopCart[i][2] += n;
					flag = 1;
					break;
				}
			}   
		}   
		
		if(flag == 0)
		{   
			shopCart.push(nAr);
		}   
	}   
	else
	{   
		shopCart.push(nAr);
	}

	$.cookie('shopCart', shopCart.toJSONString(), 7200);
	alert('添加成功');
}
</script>
<!--{include file="footer.tpl"}-->
