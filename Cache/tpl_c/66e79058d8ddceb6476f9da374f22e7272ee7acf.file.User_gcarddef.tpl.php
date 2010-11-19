<?php /* Smarty version Smarty3-b8, created on 2010-11-20 01:27:58
         compiled from "/media/work_study/work/soone/xgm/./Www/template/default/User_gcarddef.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11346611214ce6b39e3cebc7-05907238%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66e79058d8ddceb6476f9da374f22e7272ee7acf' => 
    array (
      0 => '/media/work_study/work/soone/xgm/./Www/template/default/User_gcarddef.tpl',
      1 => 1290187633,
    ),
  ),
  'nocache_hash' => '11346611214ce6b39e3cebc7-05907238',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<h3 class="topmenu">礼品卡定义</h3>
<div class="divform">
  <form action="index.php" method="POST">
  	<p>
      	<label>礼品卡名称：</label><input type="text" name="ciname" class="text" value="<?php echo $_smarty_tpl->getVariable('data')->value[1];?>
" />
    	</p>
  	<p>
      	<label>礼品卡面值：</label><input value="<?php echo $_smarty_tpl->getVariable('data')->value[2];?>
" type="text" name="cimoney" class="text" style="width:120px;" />
    	</p>
  	<p>
          <label>分类：</label>
		  <select name="citype">
		  	<option <?php if ($_smarty_tpl->getVariable('data')->value[5]==2){?>selected="selected" <?php }?>value="2">储值卡</option>
		  	<option <?php if ($_smarty_tpl->getVariable('data')->value[5]==1){?>selected="selected" <?php }?>value="1">储物卡</option>
		  </select>
    	</p>
  	<p>
          <label>配置信息：</label><br /><textarea name="cidesc"><?php echo $_smarty_tpl->getVariable('data')->value[6];?>
</textarea>
    	</p>
  	<p>
      	<label>备注：</label><br /><textarea name="cimark"><?php echo $_smarty_tpl->getVariable('data')->value[7];?>
</textarea>
    	</p>
      <p>
	  	<input type="hidden" name="action" value="gcarddef" />
	  <?php if ($_smarty_tpl->getVariable('edit')->value==1){?>
	  	<input type="hidden" name="ciid" value="<?php echo $_smarty_tpl->getVariable('data')->value[0];?>
" />
      	<input type="submit" name="submit" value="修改" />
	  <?php }else{ ?>
      	<input type="submit" name="submit" value="添加" />
        <input type="reset" value="清空" />
	  <?php }?>
      </p>
  </form>
</div>
<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

