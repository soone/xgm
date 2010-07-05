<!--{include file="header.tpl"}-->
<h3 class="topmenu">查看购物车</h3>
<!--{if $fgood}-->
<p style="padding-left:5px;">添加赠品：
<select id="freegood">
	<option value="">请选择</option>
	<!--{section name=fg loop=$fgood}-->
	<option value="<!--{$fgood[fg].0}-->"><!--{$fgood[fg].1}--></option>
	<!--{/section}-->
</select>
</p>
<!--{/if}-->
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
	<!--{if $fgood}-->
	<!--{section name=jfg loop=$fgood}-->
	var fgood = new Array;
	fgood["<!--{$fgood[jfg].0}-->"] = ["<!--{$fgood[jfg].1}-->", "<!--{$fgood[jfg].2}-->", 0];
	<!--{/section}-->
	$('#freegood').bind('change', function(){
		var fgid = parseInt($('#freegood').val());
		if(isNaN(fgid)) return false;
		//放入cookie
        var s = $.cookie('shopCart');
        var shopCart = s ? s.parseJSON() : new Array();
        var scLen = shopCart.length;
        var nAr = new Array(fgid, fgood[fgid][0], 1, 0, fgood[fgid][1]);

        if(scLen > 0)
        {
        	var flag = 0;
        	for(var i = 0; i < scLen; i++)
        	{
        		if(shopCart[i][0] == fgid)
        		{
        			if(shopCart[i][2] + 1 > fgood[fgid][1])
        			{
        				alert('购物车中该物品数量超过了库存，请调整');
        				return false;
        			}
        			else
        			{
        				shopCart[i][2] += 1;
        				flag = 1;
        				break;
        			}
        		}   
        	}   
        	
        	if(flag == 0)
        		shopCart.push(nAr);
        }   
        else
        	shopCart.push(nAr);
 
        $.cookie('shopCart', shopCart.toJSONString(), 7200);
		window.location.reload();
	});
	<!--{/if}-->
	var shopCart = $.cookie('shopCart');
	if(!shopCart)
	{
		tCont = '<tr><td colspan="5">暂无物品</td></tr>';
	}
	else
	{
		shopCart ? shopCart = shopCart.parseJSON() : '';
		var tCont = '';
		var scLen = shopCart.length;
		if(scLen > 0)
        {
        	var flag = 0;
			var allPrice = 0;
        	for(var i = 0; i < scLen; i++)
        	{
				tCont += '<tr id="tr'+shopCart[i][0]+'">';
				var tPrice = 0;
				tPrice = parseInt(shopCart[i][3])*parseInt(shopCart[i][2]);
				tCont += '<td>'+shopCart[i][1]+'</td>';
				tCont += '<td>'+shopCart[i][3]+'</td>';
				tCont += '<td><span style="font-weight:bold;font-size:16px;margin-right:5px;" onclick="cShopCart(\''+shopCart[i][0]+'\', \'-\');">-</span><input type="text" id="g'+shopCart[i][0]+'" value="'+shopCart[i][2]+'" style="width:30px" readonly="readonly" /><span onclick="cShopCart(\''+shopCart[i][0]+'\', \'+\')" style="font-weight:bold;font-size:16px;margin-left:5px;">+</span></td>';
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

	$('#sc').html(tCont);

	var pInfo = $.cookie('pInfo');
	if(pInfo)
	{
		pInfo = pInfo.parseJSON();
		var oType = '未知';
		switch(parseInt(pInfo['otype']))
		{
			case 1:
				oType = '储物卡配送单';
				break;
			case 2:
				oType = '储值卡配送单';
				break;
			case 3:
				oType = '零散配送单';
				break;
			case 4:
				oType = '补送配送单';
				break;
			case 5:
				oType = '投诉补送配送单';
				break;
		}

		var p = '<h3 class="topmenu">订货人信息</h3>';
		p += '<table class="slist">';
		p += '	<tr>';
		p += '		<th>配送单类型：</th>';
		p += '		<td colspan="5">' + oType + '</td>';
		p += '	</tr>';
		p += '	<tr>';
		p += '		<th>订货人姓名：</th>';
		p += '		<td>' + pInfo['ou_truename'] + '</td>';
		p += '		<th>订货人拼音：</th>';
		p += '		<td>' + pInfo['ou_pinyin'] + '</td>';
		p += '		<th>订货人Email：</th>';
		p += '		<td>' + pInfo['ou_email'] + '</td>';
		p += '	</tr>';
		p += '	<tr>';
		p += '		<th>订货人手机：</th>';
		p += '		<td>' + pInfo['ou_phone'] + '</td>';
		p += '		<th>订货人电话：</th>';
		p += '		<td>' + pInfo['ou_tel'] + '</td>';
		p += '		<th>订货人累计消费金额：</th>';
		p += '		<td>' + pInfo['total'] + '</td>';
		p += '	</tr>';
		var cInfo = $.cookie('cardInfo');
		if(cInfo)
		{
			cInfo = cInfo.parseJSON();
			p += '	<tr>';
			p += '		<th>礼品卡号：</th>';
			p += '		<td>' + cInfo['no'] + '</td>';
			p += '		<th>礼品余额：</th>';
			p += '		<td>' + cInfo['balance'] + '</td>';
			p += '		<th></th>';
			p += '		<td></td>';
			p += '	</tr>';
		}

		p += '	<tr>';
		p += '		<th>收款方式：</th>';
		p += '		<td colspan="5"><input type="radio" name="gmtype" value="1" checked="checked" />司机代收款';
		p += '		<input type="radio" name="gmtype" value="2" />支付宝收款<input type="text" class="text" style="width:120px;" />';
		p += '		<input type="radio" name="gmtype" value="1" />其他收款方式<input type="text" class="text" style="width:160px;" /></td>';
		p += '	</tr><tr>';
		p += '		<th>收货信息：</th><td colspan="5">';
		if(pInfo['ou_address'] != null)
		{
			pAdd = pInfo['ou_address'].parseJSON();
			for(var i = 0; i < pAdd.length; i++)
			{
				p += '		<input type="radio" name="oneAddress" value="'+i+'" />收货人：'+pAdd[0]+'&nbsp;&nbsp;收货地址：'+pAdd[1]+'&nbsp;&nbsp;联系手机：'+pAdd[2]+'&nbsp;&nbsp;联系电话：'+pAdd[3]+'<br />';
			}
		}

		p += '		<input type="radio" name="oneAddress" value="new" checked="checked" />收货人：<input type="text" class="text" style="width:50px;" name="addName" />&nbsp;&nbsp;收货地址：<input type="text" class="text" style="width:160px;" name="address" />&nbsp;&nbsp;联系手机：<input type="text" class="text" style="width:50px;" name="addPho" />&nbsp;&nbsp;联系电话：<input type="text" class="text" style="width:50px;" name="addTel" /><br />';

		p += '	</td></tr><tr>';
		p += '		<td colspan="3">运费：<input type="text" class="text" style="width:40px;" value="0" />&nbsp;&nbsp;';
		p += '		折扣率：<input type="text" class="text" style="width:40px;" value="2" />%</td>';
		p += '		<td><a href="index.php?control=good&action=liblist">继续添加物品</a></td>';
		p += '		<td><a href="javascript:void(0)" id="clearShopCart">清空购物车</a></td>';
		p += (allPrice > 0 ? '		<td><a href="">生成配送单</a></td>' : '<td></td>');
		p += '	</tr>';
		p += '</table>';
		$('.slist').after(p);
	}


	$('#clearShopCart').click(function(){
		if(confirm('确定清空购物车？？'))
		{
			$.cookie('shopCart', '');
			location.href="index.php?control=good&action=liblist";
		}
	});
});
function cShopCart(id, type)
{
	var shopCart = $.cookie('shopCart');
	if(!shopCart)
	{
		alert('购物车为空，请先添加物品');
		location.href="index.php?control=good&action=liblist";
	}

	shopCart = shopCart.parseJSON();
	var scLen = shopCart.length;
	for(var i = 0; i < scLen; i++)
	{
		if(shopCart[i][0] == id)
		{
			var tId = shopCart[i][0];
			if(type == '+') 
			{
				shopCart[i][2] += 1 
				var tin = shopCart[i][2];
				if(shopCart[i][2] > shopCart[i][4])
					shopCart[i][2] = shopCart[i][4];
				else
				{
					$('#etp'+shopCart[i][0]).html((parseInt($('#etp'+shopCart[i][0]).html())+parseInt(shopCart[i][3]))*100/100);
					$('#allP').html((parseInt($('#allP').html())+parseInt(shopCart[i][3]))*100/100);
				}
			}
			else
			{
				shopCart[i][2] -= 1;
				var tin = shopCart[i][2];
				if(shopCart[i][2] <= 0)
				{
					$('#allP').html((parseInt($('#allP').html())-parseInt(shopCart[i][3]))*100/100);
					$('#tr'+shopCart[i][0]).remove();
					shopCart.splice(i, 1);
					break;
				}
				else
				{
					$('#etp'+shopCart[i][0]).html((parseInt($('#etp'+shopCart[i][0]).html())-parseInt(shopCart[i][3]))*100/100);
					$('#allP').html((parseInt($('#allP').html())-parseInt(shopCart[i][3]))*100/100);
				}
			}

			$('#g'+tId).val(tin);
		}
	}

	if(shopCart.length == 0)
		window.location.reload();

	$.cookie('shopCart', shopCart.toJSONString());
}
</script>
<script type="text/javascript" language="javascript" src="images/json.js"></script>
<!--{include file="footer.tpl"}-->
