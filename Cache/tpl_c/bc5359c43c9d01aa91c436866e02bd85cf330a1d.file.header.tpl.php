<?php /* Smarty version Smarty3-b8, created on 2010-06-19 02:32:59
         compiled from "/media/work_study/work/soone/xgm/./Www/template/default/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6092197314c1bbbdb43b447-45695585%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc5359c43c9d01aa91c436866e02bd85cf330a1d' => 
    array (
      0 => '/media/work_study/work/soone/xgm/./Www/template/default/header.tpl',
      1 => 1276874346,
    ),
  ),
  'nocache_hash' => '6092197314c1bbbdb43b447-45695585',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/xhtml1-loose.dtd">
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
                <li><a href="index.php?action=gcarddef">礼品卡定义</a></li>
                <li><a href="index.php?action=gcardlist">礼品卡列表</a></li>
                <li><a href="index.php?action=cardface">卡外观定义</a></li>
            </ul>
        </div>
        <div>
            <h4>销售管理</h4>
            <ul>
                <li><a href="index.php?control=card&action=order">售卡订单登记</a></li>
                <li><a href="">订单列表</a></li>
                <li><a href="">出卡操作</a></li>
                <li><a href="">礼品卡查询</a></li>
                <li><a href="">配送单登记</a></li>
                <li><a href="">配送单查询</a></li>
            </ul>
        </div>
        <div>
            <h4>库存管理</h4>
            <ul>
                <li><a href="">入库操作</a></li>
                <li><a href="">出库操作</a></li>
                <li><a href="">出卡操作</a></li>
                <li><a href="">物品列表</a></li>
                <li><a href="">物品分类添加</a></li>
                <li><a href="">物品分类列表</a></li>
            </ul>
        </div>
    </div>
    <div id="content">