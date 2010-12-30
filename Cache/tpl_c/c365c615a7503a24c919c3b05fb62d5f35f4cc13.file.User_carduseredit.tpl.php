<?php /* Smarty version Smarty3-b8, created on 2010-12-29 00:18:06
         compiled from "/media/work_study/work/soone/xgm/./Www/template/default/User_carduseredit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20005166564d1a0dbe0e5bc0-03665775%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c365c615a7503a24c919c3b05fb62d5f35f4cc13' => 
    array (
      0 => '/media/work_study/work/soone/xgm/./Www/template/default/User_carduseredit.tpl',
      1 => 1293552929,
    ),
  ),
  'nocache_hash' => '20005166564d1a0dbe0e5bc0-03665775',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<h3 class="topmenu">定卡客户资料详情</h3>
<form method="post">
<table class="slist">
	<tr>
		<td><b>客户姓名</b></td>
		<td><input type="text" style="width:120px;" name="name" value="<?php echo $_smarty_tpl->getVariable('info')->value[1];?>
" /></td>
		<td><b>姓名拼音</b></td>
		<td><input type="text" style="width:120px;" name="py" value="<?php echo $_smarty_tpl->getVariable('info')->value[2];?>
" /></td>
		<td><b>性别</b></td>
		<td>
			<select name="sex">
				<option value="2" <?php if ($_smarty_tpl->getVariable('info')->value[4]==2){?>selected="selected"<?php }?>>女</option>
				<option value="1" <?php if ($_smarty_tpl->getVariable('info')->value[4]==1){?>selected="selected"<?php }?>>男</option>
			</select>
		</td>
		<td><b>职位</b></td>
		<td><input type="text" style="width:120px;" name="job" value="<?php echo $_smarty_tpl->getVariable('info')->value[5];?>
" /></td>
	</tr>
	<tr>
		<td><b>电话1</b></td>
		<td><input type="text" style="width:120px;" name="tel1" value="<?php echo $_smarty_tpl->getVariable('info')->value[6];?>
" /></td>
		<td><b>电话2</b></td>
		<td><input type="text" style="width:120px;" name="tel2" value="<?php echo $_smarty_tpl->getVariable('info')->value[7];?>
" /></td>
		<td><b>邮箱</b></td>
		<td><input type="text" style="width:120px;" name="email" value="<?php echo $_smarty_tpl->getVariable('info')->value[8];?>
" /></td>
		<td><b>网址</b></td>
		<td><input type="text" style="width:120px;" name="website" value="<?php echo $_smarty_tpl->getVariable('info')->value[9];?>
" /></td>
	</tr>
	<tr>
		<td><b>Msn</b></td>
		<td><input type="text" style="width:120px;" name="msn" value="<?php echo $_smarty_tpl->getVariable('info')->value[10];?>
" /></td>
		<td><b>qq</b></td>
		<td><input type="text" style="width:120px;" name="qq" value="<?php echo $_smarty_tpl->getVariable('info')->value[11];?>
" /></td>
		<td><b>淘宝</b></td>
		<td><input type="text" style="width:120px;" name="taobao" value="<?php echo $_smarty_tpl->getVariable('info')->value[12];?>
" /></td>
		<td><b>飞信</b></td>
		<td><input type="text" style="width:120px;" name="fetion" value="<?php echo $_smarty_tpl->getVariable('info')->value[13];?>
" /></td>
	</tr>
	<tr>
		<td><b>公司帐号</b></td>
		<td><input type="text" style="width:120px;" name="bank" value="<?php echo $_smarty_tpl->getVariable('info')->value[14];?>
" /></td>
		<td><b>银行名称</b></td>
		<td><input type="text" style="width:120px;" name="bankname" value="<?php echo $_smarty_tpl->getVariable('info')->value[15];?>
" /></td>
		<td colspan="4"></td>
	</tr>
	</tr>
	<tr>
		<td><b>备注</b></td>
		<td colspan="7"><textarea name="mark"><?php echo $_smarty_tpl->getVariable('info')->value[16];?>
</textarea></td>
	</tr>
	<?php if ($_smarty_tpl->getVariable('t')->value!='v'){?>
	<tr>
		<td colspan="8"><input type="hidden" name="cuid" value="<?php echo $_smarty_tpl->getVariable('info')->value[0];?>
" /><input type="submit" name="submit" value="保存修改" /></td>
	</tr>
	<?php }?>
</table>
</form>
<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

