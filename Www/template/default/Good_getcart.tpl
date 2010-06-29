<!--{include file="header.tpl"}-->
<h3 class="topmenu">查看购物车</h3>
<table class="slist">
	<thead>
		<tr>
			<th>名称</th>
			<th>售价</th>
			<th>数量</th>
			<th>可购买最大数量</th>
			<th>总价</th>
		</tr>
	</thead>
	<tbody id='sc'></tbody>
</table>
<script language="javascript" type="text/javascript">
$(document).ready(function(){
	var shopCart = $.cookie('shopCart');
	if(shopCart)
	{
		var tCont = '';
		shopCart = shopCart.parseJSON();
		var scLen = shopCart.length;
		if(scLen > 0)
        {
        	var flag = 0;
			var allPrice = 0;
        	for(var i = 0; i < scLen; i++)
        	{
				tCont += '<tr>';
				var tPrice = 0;
				tPrice = parseInt(shopCart[i][3])*parseInt(shopCart[i][2]);
				tCont += '<td>'+shopCart[i][1]+'</td>';
				tCont += '<td>'+shopCart[i][3]+'</td>';
				tCont += '<td><span style="font-weight:bold;font-size:16px;margin-right:5px;" onclick="cShopCart(\''+shopCart[i][0]+'\', \'-\')">-</span><input type="text" id="g'+shopCart[i][0]+'" value="'+shopCart[i][2]+'" style="width:30px" readonly="readonly" /><span onclick="cShopCart(\''+shopCart[i][0]+'\', \'+\')" style="font-weight:bold;font-size:16px;margin-left:5px;">+</span></td>';
				tCont += '<td>'+shopCart[i][4]+'</td>';
				tCont += '<td id="etp'+shopCart[i][0]+'">'+tPrice+'</td>';
				tCont += '</tr>';

				allPrice += tPrice;
        	}

			tCont += '<tr><td colspan="4"><b>汇总</b><td id="allP">'+allPrice+'</td></tr>';
        }   
		else
			tCont = '<tr><td colspan="5">暂无物品</td></tr>';
	}
	else
		tCont = '<tr><td colspan="5">暂无物品</td></tr>';

	$('#sc').html(tCont);

	var tfoot = '';
	tfoot += '<tfoot>';
	tfoot += '	<tr>';
	tfoot += '		<td><a href="index.php?control=good&action=liblist">继续添加物品</a></td>';
	tfoot += '		<td><a href="javascript:void(0)" id="clearShopCart">清空购物车</a></td>';
	tfoot += allPrice > 0 ? '		<td colspan="3">生成配送单</td>' : '<td colspan="3"></td>';
	tfoot += '	</tr>';
	tfoot += '</tfoot>';
	$('#sc').after(tfoot);

	$('#clearShopCart').click(function(){
		if(confirm('确定清空购物车？？'))
		{
			$.cookie('shopCart', '');
			location.href="index.php?control=good&action=liblist";
		}
	});

	function cShopCart(id, type)
	{
		var shopCart = $.cookie('shopCart');
		if(!shopCart)
		{
			alter('购物车为空，请先添加物品');
			location.href="index.php?control=good&action=liblist";
		}
		var scLen = shopCart.length;
		for(var i = 0; i < scLen; i++)
		{
			if(shopCart[i][0] == id)
			{
				//if(type == '+') 
				//{
				//	shopCart[i][2] += 1 
				//	if(shopCart[i][2] > shopCart[i][4])
				//		shopCart[i][2] = shopCart[i][4];
				//}
				//else
				//{
				//	shopCart[i] -= 1;
				//	if(shopCart[i][2] < 0)
				//		shopCart[i][2] = 0;
				//}
			}
		}
	}
});
</script>
<!--{include file="footer.tpl"}-->
