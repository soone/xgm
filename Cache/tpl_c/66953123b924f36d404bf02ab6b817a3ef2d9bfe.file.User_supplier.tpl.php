<?php /* Smarty version Smarty3-b8, created on 2010-06-15 23:20:10
         compiled from "/media/work_study/work/soone/xgm/./Www/template/default/User_supplier.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21234941914c179a2a6d20c1-15346189%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66953123b924f36d404bf02ab6b817a3ef2d9bfe' => 
    array (
      0 => '/media/work_study/work/soone/xgm/./Www/template/default/User_supplier.tpl',
      1 => 1276613337,
    ),
  ),
  'nocache_hash' => '21234941914c179a2a6d20c1-15346189',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<h3 class="topmenu">供应商添加</h3>
<div class="divform">
  <form action="index.php" method="POST">
  	<p>
      	<label>公司名称：</label><input type="text" name="comname" class="text" />
    	</p>
  	<p>
      	<label>联络人1：</label><input type="text" name="cname1" class="text" style="width:120px;" />&nbsp;&nbsp;
          <label>联系电话1：</label><input type="text" name="cname1tel1" class="text" style="width:120px;" />&nbsp;&nbsp;
          <label>联系电话2：</label><input type="text" name="cname1tel2" class="text" style="width:120px;" />
    	</p>
  	<p>
      	<label>联络人2：</label><input type="text" name="cname2" class="text" style="width:120px;" />&nbsp;&nbsp;
          <label>联系电话1：</label><input type="text" name="cname2tel1" class="text" style="width:120px;" />&nbsp;&nbsp;
          <label>联系电话2：</label><input type="text" name="cname2tel2" class="text" style="width:120px;" />
    	</p>
  	<p>
      	<label>供货主管：</label><input type="text" name="manager" class="text" style="width:120px" />&nbsp;&nbsp;
          <label>主管手机：</label><input type="text" name="mtel" class="text" style="width:120px" />
    	</p>
  	<p>
      	<label>MSN：</label><input type="text" name="mmsn" class="text" style="width:120px;" />&nbsp;&nbsp;
          <label>QQ：</label><input type="text" name="mqq" class="text" style="width:120px;" />&nbsp;&nbsp;
          <label>淘宝：</label><input type="text" name="mtaobao" class="text" style="width:120px;" />&nbsp;&nbsp;
          <label>飞信：</label><input type="text" name="mfetion" class="text" style="width:120px;" />
    	</p>
  	<p>
      	<label>办公地址：</label><input type="text" name="address" class="text" />
    	</p>
  	<p>
      	<label>仓库地址：</label><input type="text" name="libaddr" class="text" />
    	</p>
  	<p>
      	<label>网址：</label><input type="text" name="website" class="text" />
    	</p>
  	<p>
          <label>电子邮件：</label><input type="text" name="email" class="text" />
    	</p>
  	<p>
      	<label>银行名称：</label><input type="text" name="bname" class="text" />
    	</p>
  	<p>
      	<label>结算账号：</label><input type="text" name="bno" class="text" />
    	</p>
  	<p>
      	<label>主营产品及备注：</label>
          <br />
          <textarea name="product"></textarea>
    	</p>
      <p>
	  	<input type="hidden" name="control" value="user" />
	  	<input type="hidden" name="action" value="supplier" />
      	<input type="submit" name="submit" value="添加" />
          <input type="reset" value="清空" />
      </p>
  </form>
</div>
<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

