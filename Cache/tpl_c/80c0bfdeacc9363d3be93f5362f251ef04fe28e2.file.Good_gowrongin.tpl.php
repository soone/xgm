<?php /* Smarty version Smarty3-b8, created on 2010-09-01 00:14:47
         compiled from "/media/work_study/work/soone/xgm/./Www/template/default/Good_gowrongin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18759522424c7d2a7796ebc5-58681500%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80c0bfdeacc9363d3be93f5362f251ef04fe28e2' => 
    array (
      0 => '/media/work_study/work/soone/xgm/./Www/template/default/Good_gowrongin.tpl',
      1 => 1283267765,
    ),
  ),
  'nocache_hash' => '18759522424c7d2a7796ebc5-58681500',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<h3 class="topmenu">异常配送回库操作(<?php echo $_smarty_tpl->getVariable('order')->value;?>
)</h3>
<form action="index.php?control=good&action=gowrongin&order=<?php echo $_smarty_tpl->getVariable('order')->value;?>
" method="post">
<table class="slist">
	<tr>
		<th width="20%" style="text-align:center">物品</th>
		<th width="10%" style="text-align:center">需求量</th>
		<th width="20%" style="text-align:center">生产日期</th>
		<th width="50%" style="text-align:center">回收数量</th>
	</tr>
	<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['s']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['name'] = 's';
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('orderInfo')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total']);
?>
	<tr>
		<td><?php echo $_smarty_tpl->getVariable('orderInfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']][1];?>
</td>
		<td><?php echo $_smarty_tpl->getVariable('orderInfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']][3];?>
</td>
		<td><?php echo $_smarty_tpl->getVariable('orderInfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']][2];?>
</td>
		<td>
			<input type="text" name="yl[<?php echo $_smarty_tpl->getVariable('orderInfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']][0];?>
]" value="<?php echo $_smarty_tpl->getVariable('orderInfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']][3];?>
" class="text" style="width:50px;" />
		</td>
	</tr>
	<?php endfor; endif; ?>
	<tr>
		<td colspan="4"><input type="submit" name="submit" value="提交物品回库" /></td>
	</tr>
</table>
</form>
<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

