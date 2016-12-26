<?php /* Smarty version Smarty-3.1.6, created on 2016-12-26 17:32:40
         compiled from "E:/apacheRoot/zxyClothesPlatform/zxy1.02/ZxyClothPat/Home/View\Index\goodDesigner.html" */ ?>
<?php /*%%SmartyHeaderCode:142295860e3b8455327-64208554%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17515cb66261a1227498d6bde52ff4e8173bb22a' => 
    array (
      0 => 'E:/apacheRoot/zxyClothesPlatform/zxy1.02/ZxyClothPat/Home/View\\Index\\goodDesigner.html',
      1 => 1479865571,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142295860e3b8455327-64208554',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'designerfloor' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5860e3b84c4e7',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5860e3b84c4e7')) {function content_5860e3b84c4e7($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		.designerfloor{
			margin: 0px auto;
			width: 1083px;
			height: 360px;
			border-bottom:1px solid rgba(204, 204, 204, 0.7);
			border-right:1px solid rgba(204, 204, 204, 0.7);
		}
		.designerfloor .designer_plate{
			float: left;
			height: 360px;
			width: 269px;
			border-left: 1px solid rgba(204, 204, 204, 0.7);
		}
		.designer_plate:hover{
			box-shadow: 2px 2px 15px rgba(204, 204, 204, 0.35);
		}
	</style>
	<script type="text/javascript"></script>
</head>
<body>
	<?php  $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['key']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['designerfloor']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['key']->key => $_smarty_tpl->tpl_vars['key']->value){
$_smarty_tpl->tpl_vars['key']->_loop = true;
?>
	<div class="designerfloor">
		<div class="designer_plate">
		</div>
		<div class="designer_plate">
		</div>
		<div class="designer_plate">		
		</div>
		<div class="designer_plate">		
		</div>
	</div>
	<?php } ?>
</body>
</html><?php }} ?>