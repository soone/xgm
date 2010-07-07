<?php /* Smarty version Smarty3-b8, created on 2010-07-08 01:51:32
         compiled from "/media/work_study/work/soone/xgm/./Www/template/default/Card_minfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3975850734c34bea4209ca6-39746415%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9aa3db1876c33f34c66469221281cc6a53c4c463' => 
    array (
      0 => '/media/work_study/work/soone/xgm/./Www/template/default/Card_minfo.tpl',
      1 => 1278428252,
    ),
  ),
  'nocache_hash' => '3975850734c34bea4209ca6-39746415',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<h3 class="topmenu">售卡订单详情(点击这里<a href="<?php echo $_smarty_tpl->getVariable('refurl')->value;?>
">返回</a>)</h3>
<table class="slist">
	<tr>
		<td><b>订单ID</b></td>
		<td><?php echo $_smarty_tpl->getVariable('data')->value[0];?>
</td>
		<td><b>订单号</b></td>
		<td><?php echo $_smarty_tpl->getVariable('data')->value[2];?>
</td>
		<td><b>订卡总价</b></td>
		<td><?php echo $_smarty_tpl->getVariable('data')->value[4];?>
</td>
		<td><b>卡均价</b></td>
		<td><?php echo $_smarty_tpl->getVariable('data')->value[5];?>
</td>
	</tr>
	<tr>
		<td><b>客户名称</b></td>
		<td><?php echo $_smarty_tpl->getVariable('data')->value[10];?>
</td>
		<td><b>下单时间</b></td>
		<td><?php echo $_smarty_tpl->getVariable('data')->value[9];?>
</td>
		<td><b>订单状态</b></td>
		<td><?php if ($_smarty_tpl->getVariable('data')->value[11]==1){?>未出卡<?php }elseif($_smarty_tpl->getVariable('data')->value[11]==3){?>出卡完成<?php }elseif($_smarty_tpl->getVariable('data')->value[11]==5){?>作废<?php }?></td>
		<td><b>完成时间</b></td>
		<td><?php echo $_smarty_tpl->getVariable('data')->value[12];?>
</td>
	</tr>
	<tr>
		<td><b>订单详情</b></td>
		<td colspan="7">
			购卡数量：<?php echo $_smarty_tpl->getVariable('data')->value[3];?>
<br />
			卡名称：<?php echo $_smarty_tpl->getVariable('data')->value[6][1];?>
<br />
			卡面值：<?php echo $_smarty_tpl->getVariable('data')->value[6][2];?>
<br />
			卡外观名称：<?php echo $_smarty_tpl->getVariable('data')->value[6][4];?>
<br />
			卡类型：<?php if ($_smarty_tpl->getVariable('data')->value[6][6]==1){?>储值卡<?php }else{ ?>储物卡<?php }?><br />
			卡配置信息：<?php echo $_smarty_tpl->getVariable('data')->value[6][7];?>
<br />
			卡备注：<?php echo $_smarty_tpl->getVariable('data')->value[6][8];?>
<br />
		</td>
	</tr>
	<tr>
		<td><b>发票内容</b></td>
		<td colspan="7"><?php echo $_smarty_tpl->getVariable('data')->value[7];?>
</td>
	</tr>
	<tr>
		<td><b>备注</b></td>
		<td colspan="7"><?php echo $_smarty_tpl->getVariable('data')->value[8];?>
</td>
	</tr>
	<tr>
		<td><b>对应卡号</b></td>
		<td colspan="7" style="word-wrap:break-all;word-break:brea-all;overflow:hidden;width:120px;height:120px;"><?php echo $_smarty_tpl->getVariable('cNums')->value;?>
</td>
	</tr>
</table>
<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

