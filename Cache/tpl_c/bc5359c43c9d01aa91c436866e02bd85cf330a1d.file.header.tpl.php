<?php /* Smarty version Smarty3-b8, created on 2010-12-29 01:26:25
         compiled from "/media/work_study/work/soone/xgm/./Www/template/default/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16958731444d1a1dc16fd3c3-42113502%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc5359c43c9d01aa91c436866e02bd85cf330a1d' => 
    array (
      0 => '/media/work_study/work/soone/xgm/./Www/template/default/header.tpl',
      1 => 1293453561,
    ),
  ),
  'nocache_hash' => '16958731444d1a1dc16fd3c3-42113502',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/media/work_study/work/soone/N8/View/Smarty/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/xhtml1-transitional.dtd">
<html>
<head>
<title>西瓜猫管理系统</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('tplDir')->value;?>
images/screen.css" type="text/css" media="screen, projection">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('tplDir')->value;?>
images/print.css" type="text/css" media="print">
<!--[if lt IE 8]><link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('tplDir')->value;?>
images/ie.css" type="text/css" media="screen, projection"><![endif]-->
<style type="text/css" media="screen">
  p, table, hr, .box { margin-bottom:25px; }
  .box p { margin-bottom:10px; }
</style>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('tplDir')->value;?>
images/style.css" type="text/css" media="screen, projection">
<script type="text/javascript" language="javascript" src="images/jquery.js"></script>
</head>
<body>
<div id="top" class="container">
   <h1>西瓜猫管理系统</h1>
   <div class="rMenuInfo">你好，西瓜猫！密码修改|登出</div>
    <div id="menu">
        <div>
            <h4>供货商管理</h4>
            <ul>
                <li><a href="index.php?action=supplier">供货商添加</a></li>
                <li><a href="index.php?action=suplist">供货商列表</a></li>
            </ul>
        </div>
        <div>
            <h4>礼品卡管理</h4>
            <ul>
                <li><a href="index.php?action=cardface">卡外观定义</a></li>
                <li><a href="index.php?action=gcarddef">礼品卡定义</a></li>
                <li><a href="index.php?action=gcardlist">礼品卡列表</a></li>
            </ul>
        </div>
        <div>
            <h4>销售管理</h4>
            <ul>
                <li><a href="index.php?control=card&action=order">售卡订单登记</a></li>
                <li><a href="index.php?control=card&action=colist">订单列表</a></li>
                <li><a href="index.php?control=card&action=search">礼品卡查询</a></li>
                <li><a href="index.php?control=good&action=getcart">查看购物车</a></li>
                <li><a href="index.php?control=good&action=order">配送单登记</a></li>
                <li><a href="index.php?control=good&action=orderlist">配送单查询</a></li>
            </ul>
        </div>
        <div>
            <h4>库存管理</h4>
            <ul>
                <li><a href="index.php?control=good&action=cate">物品分类管理</a></li>
                <li><a href="index.php?control=good&action=goodin">入库操作</a></li>
                <li><a href="index.php?control=good&action=inlist">进货单列表</a></li>
                <li><a href="index.php?control=good&action=liblist">库存列表</a></li>
                <li><a href="index.php?control=good&action=toprint&date=<?php echo smarty_modifier_date_format((time()+86400),'%Y-%m-%d');?>
">出货汇总单</a></li>
                <li><a href="index.php?control=good&action=wrongin">异常配送单物品入库操作</a></li>
                <li><a href="index.php?control=good&action=expgood">过期物品提示(<span><?php echo $_smarty_tpl->getVariable('expnums')->value;?>
</span>)</a></li>
                <li><a href="index.php?control=other&action=scman">司机和车牌管理</a></li>
            </ul>
        </div>
        <div>
            <h4>客户资料管理</h4>
            <ul>
                <li><a href="index.php?control=user&action=carduser">订单客户资料</a></li>
                <li><a href="index.php?control=user&action=orderuser">配送单客户资料</a></li>
            </ul>
        </div>
		<div>
			<h4>数据统计</h4>
			<ul>
				<li><a href="index.php?control=stat&action=scard">售卡订单统计</a></li>
				<li><a href="index.php?control=stat&action=tc">套餐选择统计</a></li>
			</ul>
		</div>
    </div>
    <div id="content">
