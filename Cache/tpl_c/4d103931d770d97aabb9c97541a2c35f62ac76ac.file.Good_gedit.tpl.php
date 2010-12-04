<?php /* Smarty version Smarty3-b8, created on 2010-12-04 16:41:45
         compiled from "/media/work_study/work/soone/xgm/./Www/template/default/Good_gedit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2721676844cf9fec91a5650-73720543%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d103931d770d97aabb9c97541a2c35f62ac76ac' => 
    array (
      0 => '/media/work_study/work/soone/xgm/./Www/template/default/Good_gedit.tpl',
      1 => 1291451941,
    ),
  ),
  'nocache_hash' => '2721676844cf9fec91a5650-73720543',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/media/work_study/work/soone/N8/View/Smarty/plugins/modifier.escape.php';
?><?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<h3 class="topmenu">物品详细信息</h3>
<div class="divform">
  	<p>
      	<label>物品名称：</label><?php echo $_smarty_tpl->getVariable('gName')->value;?>
&nbsp;&nbsp;<a href="index.php?control=good&action=ginlist&name=<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('gName')->value,'url');?>
">(查看进货信息)</a>
    	</p>
		<p>
			<label>物品简称：</label><?php echo $_smarty_tpl->getVariable('libInfo')->value[2];?>

		</p>
		<p>
			<label>品牌：</label><?php echo $_smarty_tpl->getVariable('libInfo')->value[4];?>

			<label>产地：</label><?php echo $_smarty_tpl->getVariable('libInfo')->value[5];?>

		</p>
		<p>
			<label>毛重：</label><?php echo $_smarty_tpl->getVariable('libInfo')->value[13];?>

			<label>净重：</label><?php echo $_smarty_tpl->getVariable('libInfo')->value[14];?>

		</p>
		<p>
			<label>单位：</label><?php echo $_smarty_tpl->getVariable('libInfo')->value[7];?>

			<label>库存数量：</label><?php echo $_smarty_tpl->getVariable('libInfo')->value[15];?>

		</p>
		<p>
			<label>包装：</label><?php echo $_smarty_tpl->getVariable('libInfo')->value[6];?>

		</p>
		<p>
			<label>猫零售价：</label><?php echo $_smarty_tpl->getVariable('libInfo')->value[8];?>

			<label>是否特价：</label><?php if ($_smarty_tpl->getVariable('libInfo')->value[16]==1){?>是<?php }else{ ?>否<?php }?>
			<label>库存报警(<?php if ($_smarty_tpl->getVariable('libInfo')->value[10]==1){?>按数量<?php }else{ ?>按重量<?php }?>)：</label><?php echo $_smarty_tpl->getVariable('libInfo')->value[9];?>

		</p>
		<p>
			<label>备注：</label><?php echo $_smarty_tpl->getVariable('libInfo')->value[11];?>

		</p>
</div>
<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

