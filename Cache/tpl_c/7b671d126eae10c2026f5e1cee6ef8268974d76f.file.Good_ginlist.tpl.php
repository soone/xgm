<?php /* Smarty version Smarty3-b8, created on 2010-11-29 01:26:39
         compiled from "/media/work_study/work/soone/xgm/./Www/template/default/Good_ginlist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1033694234cf290cfc1bfb4-48211189%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b671d126eae10c2026f5e1cee6ef8268974d76f' => 
    array (
      0 => '/media/work_study/work/soone/xgm/./Www/template/default/Good_ginlist.tpl',
      1 => 1290965187,
    ),
  ),
  'nocache_hash' => '1033694234cf290cfc1bfb4-48211189',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<h3 class="topmenu">对应进货单列表(<?php echo $_smarty_tpl->getVariable('gName')->value;?>
)</h3>
<table class="slist">
	<thead>
		<tr>
			<th>进货单号</th>
			<th>进货单价</th>
			<th>供应商</th>
			<th>生产日期</th>
			<th>厂商建议价</th>
			<th>保质期</th>
			<th>进货总量</th>
			<th>剩余量</th>
			<th>剩余量价值</th>
			<th>进货日期</th>
		</tr>
	</thead>
	<tbody>
		<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['l']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['name'] = 'l';
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('inOrderList')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<td><?php echo $_smarty_tpl->getVariable('inOrderList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][0];?>
</td>
			<td><?php echo $_smarty_tpl->getVariable('inOrderList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][2];?>
</td>
			<td><?php echo $_smarty_tpl->getVariable('inOrderList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][10];?>
</td>
			<td><?php echo $_smarty_tpl->getVariable('inOrderList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][4];?>
</td>
			<td><?php echo $_smarty_tpl->getVariable('inOrderList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][5];?>
</td>
			<td><?php echo $_smarty_tpl->getVariable('inOrderList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][6];?>
</td>
			<td><?php echo $_smarty_tpl->getVariable('inOrderList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][9];?>
</td>
			<td><?php echo $_smarty_tpl->getVariable('inOrderList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][7];?>
</td>
			<td><?php echo $_smarty_tpl->getVariable('inOrderList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][8];?>
</td>
			<td><?php echo $_smarty_tpl->getVariable('inOrderList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][1];?>
</td>
		</tr>
		<?php endfor; endif; ?>
	</tbody>
</table>
<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

