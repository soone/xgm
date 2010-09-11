<?php /* Smarty version Smarty3-b8, created on 2010-09-06 01:06:11
         compiled from "/media/work_study/work/soone/xgm/./Www/template/default/Good_ioadd.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15112623974c83ce030cb856-24981315%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '992c499670d5419337b0838712bdd85e35711037' => 
    array (
      0 => '/media/work_study/work/soone/xgm/./Www/template/default/Good_ioadd.tpl',
      1 => 1283706369,
    ),
  ),
  'nocache_hash' => '15112623974c83ce030cb856-24981315',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<h3>添加进货单</h3>
<div class="divform">
  <form action="index.php" method="POST">
  	<p>
      	<label>进货单号：</label><input type="text" name="io_no" class="text" value="<?php echo $_smarty_tpl->getVariable('info')->value[1];?>
" style="width:120px;" />&nbsp;&nbsp;
		<label>总价：</label><input value="<?php echo $_smarty_tpl->getVariable('info')->value[4];?>
" type="text" name="io_total" class="text" style="width:120px;" />&nbsp;&nbsp;
        <label>进货时间：</label><input value="<?php echo $_smarty_tpl->getVariable('info')->value[3];?>
" type="text" name="io_date" class="text" style="width:120px;" onFocus="WdatePicker({lang:'zh_cn',skin:'whyGreen'})" />
		  </p>
	<p>
        <label>付款时间：</label><input value="<?php if ($_smarty_tpl->getVariable('info')->value[6]!='0000-00-00 00:00:00'){?><?php echo $_smarty_tpl->getVariable('info')->value[6];?>
<?php }?>" type="text" name="io_paytime" class="text" style="width:120px;" onFocus="WdatePicker({lang:'zh_cn',skin:'whyGreen'})" />
	</p>
	<p>
          <label>备注：</label><br />
		  <textarea name="io_mark"><?php echo $_smarty_tpl->getVariable('info')->value[5];?>
</textarea>
    	</p>
      <p>
		<input type="hidden" name="action" value="ioadd" />
	  <?php if ($_smarty_tpl->getVariable('info')->value[0]){?>
	  	<input type="hidden" name="ioid" value="<?php echo $_smarty_tpl->getVariable('info')->value[0];?>
" />
      	<input type="submit" name="submit" value="修改" />
	  <?php }else{ ?>
      	<input type="submit" name="submit" value="添加" />
        <input type="reset" value="清空" />
	  <?php }?>
	  	<input type="hidden" name="control" value="good" />
      </p>
	</form>
</div>
<script type="text/javascript" language="javascript" src="images/datePicker/WdatePicker.js"></script>
<link href="images/datePicker/skin/WdatePicker.css" rel="stylesheet" type="text/css" />
<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

