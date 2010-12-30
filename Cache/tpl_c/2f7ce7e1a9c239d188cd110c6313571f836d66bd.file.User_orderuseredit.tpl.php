<?php /* Smarty version Smarty3-b8, created on 2010-12-29 00:55:03
         compiled from "/media/work_study/work/soone/xgm/./Www/template/default/User_orderuseredit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1436016644d1a16670fd524-41821816%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f7ce7e1a9c239d188cd110c6313571f836d66bd' => 
    array (
      0 => '/media/work_study/work/soone/xgm/./Www/template/default/User_orderuseredit.tpl',
      1 => 1293555235,
    ),
  ),
  'nocache_hash' => '1436016644d1a16670fd524-41821816',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<h3 class="topmenu">下单客户资料详情</h3>
<form method="post">
<table class="slist">
	<tr>
		<td><b>用户名</b></td>
		<td><input type="text" style="width:120px;" name="name" value="<?php echo $_smarty_tpl->getVariable('info')->value[1];?>
" /></td>
		<td><b>姓名</b></td>
		<td><input type="text" style="width:120px;" name="truename" value="<?php echo $_smarty_tpl->getVariable('info')->value[2];?>
" /></td>
		<td><b>姓名拼音</b></td>
		<td><input type="text" style="width:120px;" name="py" value="<?php echo $_smarty_tpl->getVariable('info')->value[3];?>
" /></td>
		<td><b>手机</b></td>
		<td><input type="text" style="width:120px;" name="phone" value="<?php echo $_smarty_tpl->getVariable('info')->value[4];?>
" /></td>
	</tr>
	<tr>
		<td><b>电话</b></td>
		<td><input type="text" style="width:120px;" name="tel" value="<?php echo $_smarty_tpl->getVariable('info')->value[5];?>
" /></td>
		<td><b>总消费金额</b></td>
		<td><input type="text" style="width:120px;" name="total" value="<?php echo $_smarty_tpl->getVariable('info')->value[6];?>
" /></td>
		<td><b>邮箱</b></td>
		<td><input type="text" style="width:120px;" name="email" value="<?php echo $_smarty_tpl->getVariable('info')->value[9];?>
" /></td>
		<td><b></b></td>
		<td></td>
	</tr>
	<tr>
		<td colspan="8"><input type="hidden" name="ouid" value="<?php echo $_smarty_tpl->getVariable('info')->value[0];?>
" /><input type="submit" name="submit" value="保存修改" /></td>
	</tr>
</table>
</form>
<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

