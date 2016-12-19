<?php /* Smarty version Smarty-3.1.6, created on 2016-11-25 19:55:34
         compiled from "E:/apacheRoot/zxyClothesPlatform/zxy1.02/Home/View\User\myDesign.html" */ ?>
<?php /*%%SmartyHeaderCode:2737583826b6c9f681-71834623%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '687a2271294b8d0f927df5a31106510c1fc96cd8' => 
    array (
      0 => 'E:/apacheRoot/zxyClothesPlatform/zxy1.02/Home/View\\User\\myDesign.html',
      1 => 1479901547,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2737583826b6c9f681-71834623',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'secondfloor' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_583826b6d0f87',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583826b6d0f87')) {function content_583826b6d0f87($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.firstfloor{
			position: relative;
			margin: 0 auto;
			height: 260px;
			width: 1180px;
			border: 1px solid rgba(204, 204, 204, 0.7);
			background: #eee; 
		}
		.firstfloor .upload_img{
			position: absolute;
			height: 30px;
			width: 100px;
			right: 80px;
			bottom: 30px;
			border: 1px solid rgba(204, 204, 204, 0.7);
			border-radius: 5px;
			background: #fff;

		}
		.upload_img a{
			line-height: 30px;
			text-decoration: none;
			color: #000;
		}
		.secondfloor{
			margin: 0 auto;
			margin-top: 40px; 
			width:1180px;
			height: 330px;
		}
		.sample_design{
			position: relative;
			margin-left:60px; 
			float:left;
			width: 220px;
			height: 330px;
			border: 1px solid rgba(204, 204, 204, 0.7);
		} 
	</style>
</head>
<body>
<div class="firstfloor">
	<div class="upload_img"><a href="">上传作品</a></div>
</div>
<?php  $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['key']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['secondfloor']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['key']->key => $_smarty_tpl->tpl_vars['key']->value){
$_smarty_tpl->tpl_vars['key']->_loop = true;
?> 
<div class="secondfloor">
	<div class="sample_design"></div>
	<div class="sample_design"></div>
	<div class="sample_design"></div>
	<div class="sample_design"></div>
</div>
<?php } ?>
</body>
</html><?php }} ?>