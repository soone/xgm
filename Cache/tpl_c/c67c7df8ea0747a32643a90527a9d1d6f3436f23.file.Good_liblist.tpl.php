<?php /* Smarty version Smarty3-b8, created on 2010-07-14 01:51:34
         compiled from "/media/work_study/work/soone/xgm/./Www/template/default/Good_liblist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12156852494c3ca7a6c5d074-97806404%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c67c7df8ea0747a32643a90527a9d1d6f3436f23' => 
    array (
      0 => '/media/work_study/work/soone/xgm/./Www/template/default/Good_liblist.tpl',
      1 => 1278696585,
    ),
  ),
  'nocache_hash' => '12156852494c3ca7a6c5d074-97806404',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<h3 class="topmenu">库存列表(<a href="index.php?control=good&action=getcart">查看购物车</a>)<span></h3>
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
	<?php if ($_smarty_tpl->getVariable('page')->value){?>
	<tfoot>
		<tr>
			<td colspan="8">
				<div class="page">
					<ul>
						<li class="all">总<?php echo $_smarty_tpl->getVariable('page')->value['allPages'];?>
页</li>
						<li><a href="index.php?control=good&action=liblist">|<</a></li>
						<li><a href="index.php?control=good&action=liblist&page=<?php echo $_smarty_tpl->getVariable('page')->value['prevPage'];?>
"><<</a></li>
						<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['p']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['name'] = 'p';
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('page')->value['max']+$_smarty_tpl->getVariable('page')->value['min']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['start'] = (int)$_smarty_tpl->getVariable('page')->value['min'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['max'] = (int)$_smarty_tpl->getVariable('page')->value['max'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total']);
?>
						<li><a href="index.php?control=good&action=liblist&page=<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['p']['index'];?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['p']['index'];?>
</a></li>
						<?php endfor; endif; ?>
						<li><a href="index.php?control=goodaction=liblist&page=<?php echo $_smarty_tpl->getVariable('page')->value['nextPage'];?>
">>></a></li>
						<li><a href="index.php?control=goodaction=liblist&page=<?php echo $_smarty_tpl->getVariable('page')->value['allPages'];?>
">>|</a></li>
					
					</ul>
				</div>
			</td>
		</tr>
	</tfoot>
	<?php }?>
	<tbody>
		<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['l']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['name'] = 'l';
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('liblist')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total']);
?>
		<tr>
			<td><?php echo $_smarty_tpl->getVariable('liblist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][1];?>
</td>
			<td><?php echo $_smarty_tpl->getVariable('liblist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][3];?>
</td>
			<td><?php echo $_smarty_tpl->getVariable('liblist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][4];?>
(<?php echo $_smarty_tpl->getVariable('liblist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][2];?>
)</td>
			<td><?php echo $_smarty_tpl->getVariable('liblist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][5];?>
</td>
			<td><?php if ($_smarty_tpl->getVariable('pInfo')->value==1){?><input type="text" class="text" style="width:30px" value="1" id="good<?php echo $_smarty_tpl->getVariable('liblist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][0];?>
"/><a href="javascript:void(0);" onclick="addcart('<?php echo $_smarty_tpl->getVariable('liblist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][0];?>
', '<?php echo $_smarty_tpl->getVariable('liblist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][1];?>
', '<?php echo $_smarty_tpl->getVariable('liblist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][3];?>
', '<?php echo $_smarty_tpl->getVariable('liblist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][4];?>
', '<?php echo $_smarty_tpl->getVariable('liblist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][6];?>
');">添加到购物车</a>&nbsp;|&nbsp;<?php }?><a href="">查看详情</a></td>
		</tr>
		<?php endfor; endif; ?>
	</tbody>
</table>
<script language="javascript" type="text/javascript">
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
<script type="text/javascript" language="javascript" src="images/json.js"></script>
<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

