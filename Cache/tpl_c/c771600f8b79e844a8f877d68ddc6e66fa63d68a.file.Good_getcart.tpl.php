<?php /* Smarty version Smarty3-b8, created on 2010-07-06 23:26:01
         compiled from "/media/work_study/work/soone/xgm/./Www/template/default/Good_getcart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11004123184c334b09400726-73883883%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c771600f8b79e844a8f877d68ddc6e66fa63d68a' => 
    array (
      0 => '/media/work_study/work/soone/xgm/./Www/template/default/Good_getcart.tpl',
      1 => 1278349876,
    ),
  ),
  'nocache_hash' => '11004123184c334b09400726-73883883',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<h3 class="topmenu">查看购物车</h3>
<?php if ($_smarty_tpl->getVariable('fgood')->value){?>
<p style="padding-left:5px;">添加赠品：
<select id="freegood">
	<option value="">请选择</option>
	<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['fg']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['fg']['name'] = 'fg';
$_smarty_tpl->tpl_vars['smarty']->value['section']['fg']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('fgood')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['fg']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['fg']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fg']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['fg']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['fg']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fg']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['fg']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['fg']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['fg']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fg']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['fg']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['fg']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['fg']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['fg']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['fg']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fg']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['fg']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['fg']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['fg']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['fg']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['fg']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['fg']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['fg']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fg']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['fg']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fg']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['fg']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['fg']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fg']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['fg']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['fg']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['fg']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['fg']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['fg']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['fg']['total']);
?>
	<option value="<?php echo $_smarty_tpl->getVariable('fgood')->value[$_smarty_tpl->getVariable('smarty')->value['section']['fg']['index']][0];?>
"><?php echo $_smarty_tpl->getVariable('fgood')->value[$_smarty_tpl->getVariable('smarty')->value['section']['fg']['index']][1];?>
</option>
	<?php endfor; endif; ?>
</select>
</p>
<?php }?>
<form id="orderform" name="orderform" action="index.php" method="post">
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
<input type="hidden" name="control" value="good" />
<input type="hidden" name="action" value="corder" />
</form>
<script language="javascript" type="text/javascript">
var cuttax = 0;
$(document).ready(function(){
	<?php if ($_smarty_tpl->getVariable('fgood')->value){?>
	<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['jfg']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['jfg']['name'] = 'jfg';
$_smarty_tpl->tpl_vars['smarty']->value['section']['jfg']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('fgood')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['jfg']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['jfg']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['jfg']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['jfg']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['jfg']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['jfg']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['jfg']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['jfg']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['jfg']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['jfg']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['jfg']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['jfg']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['jfg']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['jfg']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['jfg']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['jfg']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['jfg']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['jfg']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['jfg']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['jfg']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['jfg']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['jfg']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['jfg']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['jfg']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['jfg']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['jfg']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['jfg']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['jfg']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['jfg']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['jfg']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['jfg']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['jfg']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['jfg']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['jfg']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['jfg']['total']);
?>
	var fgood = new Array;
	fgood["<?php echo $_smarty_tpl->getVariable('fgood')->value[$_smarty_tpl->getVariable('smarty')->value['section']['jfg']['index']][0];?>
"] = ["<?php echo $_smarty_tpl->getVariable('fgood')->value[$_smarty_tpl->getVariable('smarty')->value['section']['jfg']['index']][1];?>
", "<?php echo $_smarty_tpl->getVariable('fgood')->value[$_smarty_tpl->getVariable('smarty')->value['section']['jfg']['index']][2];?>
", 0];
	<?php endfor; endif; ?>
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
	<?php }?>
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
		cuttax = parseInt(pInfo['total']);
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
			p += '		<th>礼品卡余额：</th>';
			p += '		<td>' + cInfo['balance'] + '</td>';
			p += '		<th></th>';
			p += '		<td></td>';
			p += '	</tr>';
		}

		p += '	<tr>';
		p += '		<th>额外收款金额：</th>';
		p += '		<td><input type="text" class="text" name="extmoney" id="extmoney" value="0" style="width:40px;" /></td>';
		p += '		<th>折扣率：</th>';
		p += '		<td><input type="text" class="text" style="width:40px;" id="cuttax" value="'+pInfo['total']+'" />%</td><td colspan="3"></td>';
		p += '	</tr>';
		p += '	<tr><th>收货人信息：</th><td colspan="5">';
		if(pInfo['ou_address'] != null)
		{
			pAdd = pInfo['ou_address'].parseJSON();
			for(var i = 0; i < pAdd.length; i++)
			{
				p += '		<input type="radio" name="oneAddress" value="'+i+'" />收货人：'+pAdd[0]+'&nbsp;&nbsp;收货地址：'+pAdd[1]+'&nbsp;&nbsp;联系手机：'+pAdd[2]+'&nbsp;&nbsp;联系电话：'+pAdd[3]+'<br />';
			}
		}

		p += '		<input type="radio" name="oneAddress" value="new" checked="checked" />收货人：<input type="text" class="text" style="width:50px;" name="addName" />&nbsp;&nbsp;收货地址：<input type="text" class="text" style="width:160px;" name="address" />&nbsp;&nbsp;联系手机：<input type="text" class="text" style="width:50px;" name="addPho" />&nbsp;&nbsp;联系电话：<input type="text" class="text" style="width:50px;" name="addTel" /><br />';

		p += '	</td></tr>';
		p += '	<tr>';
		p += '		<th>送货备注：</th><td colspan="2"><textarea name="smark" style="width:200px;height:150px;"></textarea></td>';
		p += '		<th>远程备注：</th><td colspan="2"><textarea name="fmark" style="width:200px;height:150px;"></textarea></td>';
		p += '	</tr>';
		p += '	<tr>';
		p += '		<th>收费备注：</th><td colspan="2"><textarea name="gmark" style="width:200px;height:150px;"></textarea></td>';
		p += '		<th>其他备注：</th><td colspan="2"><textarea name="omark" style="width:200px;height:150px;"></textarea></td>';
		p += '	</tr>';
		p += '	<tr>';
		p += '		<td colspan="4"><a href="index.php?control=good&action=liblist">继续添加物品</a></td>';
		p += '		<td><a href="javascript:void(0)" id="clearShopCart">清空购物车</a></td>';
		p += (allPrice > 0 ? '		<td><a href="javascript:void(0);" onclick="javascript:$(\'#orderform\').submit();">生成配送单</a></td>' : '<td></td>');
		p += '	</tr>';
		p += '</table>';
		$('.slist').after(p);
		
		$('#allP').innerHTML = (allPrice*(100-parseInt(pInfo['total'])/100));
	}


	$('#clearShopCart').click(function(){
		if(confirm('确定清空购物车？？'))
		{
			$.cookie('shopCart', '');
			location.href="index.php?control=good&action=liblist";
		}
	});

	$('#cuttax').bind('change', function(){
		var tCut = cuttax;
		cuttax  = parseInt($('#cuttax').val());
		$('#allP').html((parseInt($('#allP').html())*100/(100-tCut)*(100-cuttax)/100));
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
					$('#allP').html(((parseInt($('#allP').html())*100/(100-cuttax)+parseInt(shopCart[i][3]))*100/100)*(100-cuttax)/100);
				}
			}
			else
			{
				shopCart[i][2] -= 1;
				var tin = shopCart[i][2];
				if(shopCart[i][2] <= 0)
				{
					$('#allP').html(((parseInt($('#allP').html())*100/(100-cuttax)-parseInt(shopCart[i][3]))*100/100)*(100-cuttax)/100);
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
<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

