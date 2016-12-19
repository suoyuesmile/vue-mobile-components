<?php /* Smarty version Smarty-3.1.6, created on 2016-12-19 17:37:25
         compiled from "E:/apacheRoot/zxyClothesPlatform/zxy1.02/ZxyClothPat/Home/View\Index\schoolDesign.html" */ ?>
<?php /*%%SmartyHeaderCode:325275857aa554b74c1-11945321%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2ca4acd23d3c004808e136b2bf698caa92e3fc9' => 
    array (
      0 => 'E:/apacheRoot/zxyClothesPlatform/zxy1.02/ZxyClothPat/Home/View\\Index\\schoolDesign.html',
      1 => 1480130692,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '325275857aa554b74c1-11945321',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'schoolfloor' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5857aa5554b32',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5857aa5554b32')) {function content_5857aa5554b32($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		.main{
			margin: 0 auto;
			width: 1180px;
			height: 1420px;
		}
		/***********************************************************************
		 * 第一层-学校列表
		 * 每一层包含两个部分，左边学校信息，右边学校活动图
		 */
		.schoolfloor{
			margin-top:30px;
			margin-left:30px;
			height: 300px;
			width: 1120px;
			border: 1px solid rgba(204, 204, 204, 0.7);
			box-shadow: 2px 2px 15px rgba(204, 204, 204, 0.35);
		}
		.school_info{
			float: left;
			position: relative;
			height: 300px;
			width: 360px;
			border-right: 1px solid rgba(204, 204, 204, 0.7); 
		}
		.school_info .school_title{
			position: absolute;
			text-align: center;
			top:30px;
			left: 40px;
			height: 50px;
			width: 280px;
			font-size: 40px;
			opacity: 0.3;  
		}
		.cross_line1,.cross_line2{
			position: absolute;
			border-top: 1px dashed rgba(204, 204, 204, 0.7); 
			height:0px;
			width: 200px;
			left: 80px;
		}
		.cross_line1{
			top:100px;
		}
		.cross_line2{
			top:200px;
		}
		.school_info .designer_count,.focus_count{
			position: absolute;
			text-align: center;
			height: 20px;
			line-height: 20px;
			width: 200px;
			font-size: 14px;
			left: 80px;
			opacity: 0.5;
		}
		.designer_count{
			top:130px;
		}
		.focus_count{
			top:160px;
		}
		.focus_count span{
			color:#FE008D;
		}
		
		.school_info .join_button{
			text-align: center;
			line-height: 36px;
			position: absolute;
			bottom: 30px;
			left: 90px;
			height: 36px;
			width: 180px;
			border: 1px solid rgba(204, 204, 204, 0.7);
			border-radius: 15px;
			background: #aaa;
			color: #fff;
			opacity: 0.7;  
		}
		.school_info:hover > .join_button{
			box-shadow: 2px 2px 15px rgba(204, 204, 204, 0.35);
			color: #FE008D;
			background: #fff; 
		}
		.school_show{
			height: 300px;
			width: 758px;
			float: left;
		}

		/***********************************************************************
		 * 第二层-分页效果层
		 * 设置页面的跳转和翻页
		 */
		.page_devide{

		}
	</style>
</head>
<body>
	<!-- 第一层-学校列表 -->
	<!-- 包含2个部分 -->
	<!-- 1.左边的学校的信息，受关注度，加入学校的按钮等 -->
	<!-- 2.右边展示一张大图，有关学校活动的，点进去可以看到跳转到学校的主页 -->
	<div class="main">
		<?php  $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['key']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['schoolfloor']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['key']->key => $_smarty_tpl->tpl_vars['key']->value){
$_smarty_tpl->tpl_vars['key']->_loop = true;
?>
		<div class="schoolfloor">
			<div class="school_info">
				<div class="school_title">武汉纺织大学</div>
				<div class="cross_line1"> </div>
				<div class="designer_count">设计师人数：30</div>
				<div class="focus_count">受关注度：<span>40</span></div>
				<div class="cross_line2"></div>
				<div class="join_button">加入组织</div>
			</div>
			<div class="school_show"><a><img src=""></a></div>
		</div>
		<?php } ?>
	</div>
	<!-- 第二层-给学校的列表分页 -->
	<!-- 每次展示4个学校的板块，总数为4*页数 -->
	<div class="page_devide"></div>
</body>
</html><?php }} ?>