<?php /* Smarty version Smarty3-b8, created on 2010-07-19 01:32:26
         compiled from "/media/work_study/work/soone/xgm/./Www/template/default/Good_getcart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7977501374c433aaae50ee0-27136191%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c771600f8b79e844a8f877d68ddc6e66fa63d68a' => 
    array (
      0 => '/media/work_study/work/soone/xgm/./Www/template/default/Good_getcart.tpl',
      1 => 1279045538,
    ),
  ),
  'nocache_hash' => '7977501374c433aaae50ee0-27136191',
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
<input type="hidden" name="sn" value="<?php echo time();?>
" />
<input type="hidden" name="control" value="good" />
<input type="hidden" name="action" value="corder" />
</form>
<script type="text/javascript" language="javascript" src="images/json.js"></script>
<script language="javascript" type="text/javascript">
var cuttax = 0;
var allPrice = 0;
var tax = 0;
var shopCart = pInfo = '';
var cInfo = new Array();
$(document).ready(function(){
	shopCart = $.cookie('shopCart');
	pInfo = $.cookie('pInfo');
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
				cuttax = parseInt(pInfo['total']);
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
        p += '<tr><th>配送单类型：</th><td colspan="5">' + oType + '</td></tr>';
        p += '<tr><th>订货人姓名：</th><td>' + pInfo['ou_truename'] + '</td>';
        p += '<th>订货人拼音：</th><td>' + pInfo['ou_pinyin'] + '</td>';
        p += '<th>订货人Email：</th><td>' + pInfo['ou_email'] + '</td></tr>';
        p += '<tr><th>订货人手机：</th><td>' + pInfo['ou_phone'] + '</td>';
        p += '<th>订货人电话：</th><td>' + pInfo['ou_tel'] + '</td>';
        p += '<th>订货人累计消费金额：</th><td>' + pInfo['total'] + '</td></tr>';

        cInfo = $.cookie('cardInfo');
        if(cInfo)
        {
        	cInfo = cInfo.parseJSON();
        	p += '<tr><th>礼品卡号：</th><td>' + cInfo['no'] + '</td>';
        	p += '<th>礼品卡余额：</th><td>' + cInfo['balance'] + '</td>';
        	p += '<th>当前礼品卡余额</th><td id="leftMoney">' + cInfo['balance'] + '</td>';
			p += '</tr>';
        }
 
        p += '<tr><th>额外收款金额：</th><td><input type="text" class="text" name="extmoney" id="extmoney" value="0" style="width:40px;" /></td>';
        p += parseInt(pInfo['otype']) == 3 ? '<th>折扣率：</th><td><input type="text" class="text" style="width:40px;" id="cuttax" value="'+pInfo['total']+'" name="cuttax" />%</td><td colspan="3"></td>' : '<td colspan="5"></td>';
        p += '</tr><tr><th>收货人信息：</th><td colspan="5">';
        if(pInfo['gadr'] != null)
        {
        	pAdd = pInfo['gadr'];
        	for(var i = 0; i < pAdd.length; i++)
        	{
        		p += '<input type="radio" name="oneAddress" value="'+pAdd[i][0]+'" />收货人：'+pAdd[i][2]+'&nbsp;&nbsp;收货地址：'+pAdd[i][3]+'&nbsp;&nbsp;联系手机：'+pAdd[i][4]+'&nbsp;&nbsp;联系电话：'+pAdd[i][5]+'<br />';
        	}
        }

        p += '<input type="radio" name="oneAddress" value="new" checked="checked" />收货人：<input type="text" class="text" style="width:50px;" name="addName" />&nbsp;&nbsp;收货地址：<input type="text" class="text" style="width:160px;" name="address" />&nbsp;&nbsp;联系手机：<input type="text" class="text" style="width:50px;" name="addPho" />&nbsp;&nbsp;联系电话：<input type="text" class="text" style="width:50px;" name="addTel" /></td></tr>';
        p += '<tr><th>送货备注：</th><td colspan="2"><textarea name="smark" style="width:200px;height:150px;"></textarea></td>';
        p += '<th>远程备注：</th><td colspan="2"><textarea name="fmark" style="width:200px;height:150px;"></textarea></td></tr>';
        p += '<tr><th>收费备注：</th><td colspan="2"><select name="gtype"><option value="0">请选择收款方式</option><option value="1">司机代收</option><option value="2">支付宝收款</option><option value="3">其他方式</option></select><br /><textarea name="gmark" style="width:200px;height:150px;"></textarea></td>';
        p += '<th>其他备注：</th><td colspan="2"><textarea name="omark" style="width:200px;height:150px;"></textarea></td></tr>';
        p += '<tr><td colspan="4"><a href="index.php?control=good&action=liblist">继续添加物品</a></td>';
        p += '<td><a href="javascript:void(0)" id="clearShopCart">清空购物车</a></td>';
        p += '<td><a href="javascript:void(0);" onclick="javascript:$(\'#orderform\').submit();">生成配送单</a></td></tr></table>';

        $('.slist').after(p);
	}

	if(!shopCart)
	{
		$('#sc').html('<tr><td colspan="5">暂无物品，点击<a href="index.php?control=good&action=liblist">这里</a>选择物品</td></tr>');
	}
	else
	{
		var tCont = '';
		tax = 100-cuttax;
		shopCart = shopCart.parseJSON();
		for(var i = 0; i < shopCart.length; i++)
		{
			var tAllText = '';
			var tPrice = 0;

			if(tax > 0 && tax < 100 && shopCart[i][2] > 0 && shopCart[i][5] == 0)
			{
				tPrice = (parseInt(shopCart[i][3])*parseInt(shopCart[i][2])*tax/100)*100/100;
				tAllText = '('+shopCart[i][3]+'*'+(tax/100)+')*'+shopCart[i][2]+'='+tPrice;
			}
			else
			{
				tPrice = parseInt(shopCart[i][3])*parseInt(shopCart[i][2]);
				tAllText = shopCart[i][3]+'*'+shopCart[i][2]+'='+tPrice;
			}

			tCont += '<tr id="tr'+shopCart[i][0]+'"><td>'+shopCart[i][1]+'</td><td>'+shopCart[i][3]+'</td>';
			tCont += '<td><span style="font-weight:bold;font-size:16px;margin-right:5px;" onclick="cShopCart(\''+shopCart[i][0]+'\', \'-\');">-</span><input type="text" id="g'+shopCart[i][0]+'" value="'+shopCart[i][2]+'" style="width:30px" readonly="readonly" /><span onclick="cShopCart(\''+shopCart[i][0]+'\', \'+\')" style="font-weight:bold;font-size:16px;margin-left:5px;">+</span></td>';
			tCont += '<td>'+shopCart[i][4]+'</td><td id="etp'+shopCart[i][0]+'">'+tAllText+'</td></tr>';
			allPrice += tPrice;
		}

		if(allPrice > 0)
		{
			tCont += '<tr><td colspan="4"><b>汇总</b><td id="allP">'+allPrice+'</td></tr>';
			$('#sc').html(tCont);
			var lMoney = cInfo ? cInfo['balance'] - allPrice : -allPrice;
			$('#leftMoney').html(lMoney);
			if(lMoney < 0)
				$('#extmoney').val(Math.abs(lMoney));
		}
	}

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
	<?php }?>

	$('#clearShopCart').click(function(){
		if(confirm('确定清空购物车？？'))
		{
			$.cookie('shopCart', '');
			location.href="index.php?control=good&action=liblist";
		}
	});

	$('#freegood').bind('change', function(){
    	var fgid = parseInt($('#freegood').val());
    	if(isNaN(fgid)) return false;
    	//放入cookie
        shopCart ? '' : shopCart = new Array();
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

	$('#cuttax').bind('change', function(){
		pInfo['total'] = parseInt($('#cuttax').val());
		$.cookie('pInfo', pInfo.toJSONString(), 7200);
		window.location.reload();
	});
});

function cShopCart(id, type)
{
	if(!shopCart)
	{
		alert('购物车为空，请先添加物品');
		location.href="index.php?control=good&action=liblist";
	}

	var scLen = shopCart.length;
	for(var i = 0; i < scLen; i++)
	{
		if(shopCart[i][0] == id)
		{
			var tId = shopCart[i][0];
			if(type == '+') 
			{
				shopCart[i][2] += 1;
				if(shopCart[i][2] > shopCart[i][4])
					break;
			}
			else
			{
				shopCart[i][2] -= 1;
				if(shopCart[i][2] < 0)
				{
					$('#tr'+id).remove();
					shopCart.splice(i, 1);
					break;
				}
			}

			var tempPrice = 0;
			var tempText = '';
			var sprice = parseInt(shopCart[i][2]);
			var sp3 = parseInt(shopCart[i][3]);
			var aP = 0;
			var aOldP = parseInt($('#allP').html());
			if(tax > 0 && tax < 100 && sprice > 0 && shopCart[i][5] == 0)
			{
				tempPrice = (sp3*sprice*tax/100)*100/100;
				tempText = '('+sp3+'*'+(tax/100)+')*'+sprice+'='+tempPrice;
				aP = sp3*tax/100;
			}
			else
			{
				tempPrice = (sp3*sprice)*100/100;
				tempText = sp3+'*'+sprice+'='+tempPrice;
				aP = sp3;
			}
			
			var alp = aOldP;
			alp = type == '+' ? aOldP+aP : aOldP-aP;
			var lMoney = cInfo ? cInfo['balance'] - alp : -alp;
			$('#leftMoney').html(lMoney);
			if(lMoney < 0)
				$('#extmoney').val(Math.abs(lMoney));

			$('#etp'+shopCart[i][0]).html(tempText);
			$('#allP').html(alp*100/100);

			$('#g'+tId).val(sprice);
			if(shopCart[i][2] == 0)
			{
				$('#tr'+id).remove();
				shopCart.splice(i, 1);
			}
		}
	}

	if(shopCart.length == 0)
		window.location.reload();

	$.cookie('shopCart', shopCart.toJSONString());
}
</script>
<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

