<?php /* Smarty version Smarty3-b8, created on 2010-07-01 23:12:21
         compiled from "/media/work_study/work/soone/xgm/./Www/template/default/User_supplier.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7182074794c2cb05595d542-12157152%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66953123b924f36d404bf02ab6b817a3ef2d9bfe' => 
    array (
      0 => '/media/work_study/work/soone/xgm/./Www/template/default/User_supplier.tpl',
      1 => 1277603725,
    ),
  ),
  'nocache_hash' => '7182074794c2cb05595d542-12157152',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<h3 class="topmenu"><?php if ($_smarty_tpl->getVariable('edit')->value==1){?>修改供应商资料<?php }else{ ?>供应商添加<?php }?></h3>
<div class="divform">
  <form action="index.php" method="POST">
  	<p>
      	<label>公司名称：</label><input type="text" name="comname" class="text" value="<?php echo $_smarty_tpl->getVariable('info')->value[0];?>
" />
    	</p>
  	<p>
      	<label>联络人1：</label><input value="<?php echo $_smarty_tpl->getVariable('info')->value[1];?>
" type="text" name="cname1" class="text" style="width:120px;" />&nbsp;&nbsp;
          <label>联系电话1：</label><input value="<?php echo $_smarty_tpl->getVariable('info')->value[3];?>
" type="text" name="cname1tel1" class="text" style="width:120px;" />&nbsp;&nbsp;
          <label>联系电话2：</label><input value="<?php echo $_smarty_tpl->getVariable('info')->value[4];?>
" type="text" name="cname1tel2" class="text" style="width:120px;" />
    	</p>
  	<p>
      	<label>联络人2：</label><input value="<?php echo $_smarty_tpl->getVariable('info')->value[2];?>
" type="text" name="cname2" class="text" style="width:120px;" />&nbsp;&nbsp;
          <label>联系电话1：</label><input value="<?php echo $_smarty_tpl->getVariable('info')->value[5];?>
" type="text" name="cname2tel1" class="text" style="width:120px;" />&nbsp;&nbsp;
          <label>联系电话2：</label><input value="<?php echo $_smarty_tpl->getVariable('info')->value[6];?>
" type="text" name="cname2tel2" class="text" style="width:120px;" />
    	</p>
  	<p>
      	<label>供货主管：</label><input value="<?php echo $_smarty_tpl->getVariable('info')->value[7];?>
" type="text" name="manager" class="text" style="width:120px" />&nbsp;&nbsp;
          <label>主管手机：</label><input value="<?php echo $_smarty_tpl->getVariable('info')->value[8];?>
" type="text" name="mtel" class="text" style="width:120px" />
    	</p>
  	<p>
      	<label>MSN：</label><input value="<?php echo $_smarty_tpl->getVariable('info')->value[9];?>
" type="text" name="mmsn" class="text" style="width:120px;" />&nbsp;&nbsp;
          <label>QQ：</label><input value="<?php echo $_smarty_tpl->getVariable('info')->value[10];?>
" type="text" name="mqq" class="text" style="width:120px;" />&nbsp;&nbsp;
          <label>淘宝：</label><input value="<?php echo $_smarty_tpl->getVariable('info')->value[11];?>
" type="text" name="mtaobao" class="text" style="width:120px;" />&nbsp;&nbsp;
    	</p>
  	<p>
      	<label>办公地址：</label><input value="<?php echo $_smarty_tpl->getVariable('info')->value[12];?>
" type="text" name="address" class="text" />
    	</p>
  	<p>
      	<label>仓库地址：</label><input value="<?php echo $_smarty_tpl->getVariable('info')->value[13];?>
" type="text" name="libaddr" class="text" />
    	</p>
  	<p>
      	<label>网址：</label><input value="<?php echo $_smarty_tpl->getVariable('info')->value[14];?>
" type="text" name="website" class="text" />
    	</p>
  	<p>
          <label>电子邮件：</label><input value="<?php echo $_smarty_tpl->getVariable('info')->value[15];?>
" type="text" name="email" class="text" />
    	</p>
  	<p>
      	<label>银行名称：</label><input value="<?php echo $_smarty_tpl->getVariable('info')->value[17];?>
" type="text" name="bname" class="text" />
    	</p>
  	<p>
      	<label>结算账号：</label><input value="<?php echo $_smarty_tpl->getVariable('info')->value[16];?>
" type="text" name="bno" class="text" />
    	</p>
  	<p>
      	<label>主营产品及备注：</label>
          <br />
          <textarea name="product"><?php echo $_smarty_tpl->getVariable('info')->value[18];?>
</textarea>
    	</p>
      <p>
	  <?php if ($_smarty_tpl->getVariable('edit')->value==1){?>
	  	<input type="hidden" name="spid" value="<?php echo $_smarty_tpl->getVariable('spid')->value;?>
" />
	  	<input type="hidden" name="action" value="supdoedit" />
      	<input type="submit" name="submit" value="修改" />
	  <?php }else{ ?>
	  	<input type="hidden" name="action" value="supplier" />
      	<input type="submit" name="submit" value="添加" />
        <input type="reset" value="清空" />
	  <?php }?>
	  	<input type="hidden" name="control" value="user" />
      </p>
  </form>
</div>
<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

