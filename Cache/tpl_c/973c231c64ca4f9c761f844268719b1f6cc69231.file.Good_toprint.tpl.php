<?php /* Smarty version Smarty3-b8, created on 2010-12-05 21:17:24
         compiled from "/media/work_study/work/soone/xgm/./Www/template/default/Good_toprint.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9513540784cfb90e4d5b963-78581157%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '973c231c64ca4f9c761f844268719b1f6cc69231' => 
    array (
      0 => '/media/work_study/work/soone/xgm/./Www/template/default/Good_toprint.tpl',
      1 => 1289541282,
    ),
  ),
  'nocache_hash' => '9513540784cfb90e4d5b963-78581157',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<form>
<label>配送日期：</label><input type="text" name="date" onFocus="WdatePicker({lang:'zh_cn',skin:'whyGreen'})" class="text" /><input type="hidden" name="control" value="good" /><input type="hidden" name="action" value="toprint1" /><input type="submit" name="submit" value="搜索" />
</form>
<script type="text/javascript" language="javascript" src="images/datePicker/WdatePicker.js"></script>
<link href="images/datePicker/skin/WdatePicker.css" rel="stylesheet" type="text/css" />
<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

