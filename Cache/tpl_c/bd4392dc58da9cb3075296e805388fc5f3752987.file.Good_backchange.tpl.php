<?php /* Smarty version Smarty3-b8, created on 2010-09-01 00:14:26
         compiled from "/media/work_study/work/soone/xgm/./Www/template/default/Good_backchange.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14148092974c7d2a62a663b5-51666710%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd4392dc58da9cb3075296e805388fc5f3752987' => 
    array (
      0 => '/media/work_study/work/soone/xgm/./Www/template/default/Good_backchange.tpl',
      1 => 1279824821,
    ),
  ),
  'nocache_hash' => '14148092974c7d2a62a663b5-51666710',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<h3 class="topmenu">配送单作废操作(订单号<?php echo $_smarty_tpl->getVariable('orderNo')->value;?>
)</h3>
<form action="index.php?control=good&action=backchange&go=<?php echo $_smarty_tpl->getVariable('orderNo')->value;?>
&id=<?php echo $_smarty_tpl->getVariable('id')->value;?>
" method="post">
<table class="slist">
	<tr>
		<th><label>作废类型：</label></th><td colspan="2"><input type="radio" name="t" value="1" />部分送达&nbsp;&nbsp;<input type="radio" name="t" value="2" checked="checked" />全部退货</td>
	</tr>
	<tr>
		<th>物品</th>
		<th>原数量</th>
		<th>送达数量</th>
	</tr>
	<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['s']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['name'] = 's';
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('gInfo')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
		<td><?php echo $_smarty_tpl->getVariable('gInfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']][2];?>
</td>
		<td><?php echo $_smarty_tpl->getVariable('gInfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']][1];?>
</td>
		<td><input type="text" class="text" value="0" style="width:120px;" name="oknum[<?php echo $_smarty_tpl->getVariable('gInfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']][0];?>
]" /></td>
	</tr>
	<?php endfor; endif; ?>
	<tr>
		<td colspan="3"><input type="submit" name="submit" value="作废配送单并通知库管回收物品" /></td>
	</tr>
</table>
</form>
<script language="javascript" type="text/javascript">
$('input[name="t"]').bind('change', function(){
	if($('input[name="t"]').attr('checked') === true)
		$('input[name="submit"]').val('作废配送单并生成异常配送单同时通知库管回收物品');
	else
		$('input[name="submit"]').val('作废配送单并通知库管回收物品');
});
</script>
<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

