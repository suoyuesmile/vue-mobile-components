<?php /* Smarty version Smarty-3.1.6, created on 2017-02-28 10:54:40
         compiled from "F:/zxyClothPat/Home/View\Common\details.html" */ ?>
<?php /*%%SmartyHeaderCode:2584158b4e670442664-60598806%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49634cfc53b96f08aef941d7e730305aeb8505db' => 
    array (
      0 => 'F:/zxyClothPat/Home/View\\Common\\details.html',
      1 => 1488090948,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2584158b4e670442664-60598806',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'detail' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58b4e6705d90e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b4e6705d90e')) {function content_58b4e6705d90e($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.main{
			width: 1080px;
			margin: 0 auto;
			height: 700px;
		}
		.firstfloor{
			margin-top:25px;
			width: 1080px;
			height: 450px;
		}
		.big_img{
			float: left;
			height: 450px;
			width: 470px;
		}
		.big_img img{
			height: 450px;
			width: 450px;
		}
		.design_detail{
			font-family: 'Arial Normal', 'Arial';
			color: #666;
			text-align: left;
			margin-left: 20px;
			float: left;
			height: 450px;
			width: 350px;
		}
		.design_detail .design_name{
			color: #444;
			font-size: 20px;
			font-weight: 200px;
			margin-left:50px; 
		}
		.design_detail .design_properties,.design_status{
			font-size: 14px;
			margin-left:50px; 
			margin-top: 10px;
		}
		.design_status{
			color: #FE008D;
			opacity: 0.7;
		}
		.line_cross{
			margin-top: 20px;
			margin-left: 50px;
			width: 250px;
			height: 1px;
			border-top: 1px solid rgba(204, 204, 204, 0.7); 
		}
		.designer_info{
			float: left;
			margin-left: 10px;
			 width: 230px;
			 height: 450px;
			 background: #eee;
		}
		.attention{
			margin-top: 20px;
			margin-left: 50px;
		}
		.attention p{
			font-size: 14px; 
		}
		.btm_click{
			margin-top:20px;
			height: 32px;
			width: 300px;
		}
		.btm_click .love,.want,.shop{
			opacity: 0.5;
			float: left;
			margin-left:50px; 
			}
		.love{
			height: 31px;
			width: 40px;
			background: url('<?php echo @IMAGE_URL;?>
love.png') no-repeat;
		}
		.love:hover,.want:hover,.shop:hover{
			opacity: 1;
		}
		.want{
			height: 31px;
			width: 39px;
			background: url('<?php echo @IMAGE_URL;?>
want.png') no-repeat;
		}
		.shop{
			height: 32px;
			width: 43px;
			background: url('<?php echo @IMAGE_URL;?>
cart.png') no-repeat;
		}
		.btm_word{
			height: 20px;
			width: 300px;
		}
		.btm_word span{
			opacity: 0.7;
			font-size: 14px;
			text-align:center;
			width: 40px;
			float: left;
			margin-left:50px;
		}
		.secondfloor{
			margin-top:30px;
			width: 1080px;
			height: 200px;
			border:1px solid rgba(204, 204, 204, 0.7);
		}
		.secondfloor .intro_title{
			background: #eee;
			color: #444;
			font-size: 18px;
			line-height: 50px;
			text-align: left;
			padding: 0px 60px;
			width: 960px;
			height: 50px;
			border-bottom: 1px solid rgba(204, 204, 204, 0.7);
		}
		.activities{
			display: none;
		}
		.wrapper{
			background: #fff;
			border: 0px;
			box-shadow: 0px 0px 0px rgba(204, 204, 204, 0.35);
		}
		.wrapper .nav{
			background: #fff;
			border: 0px;
		}
		.wrapper .nav .tag_list{
			background: #fff;
			border: 0px;
		}
	</style>
	<script type="text/javascript"></script>
</head>
<body>
<div class="main">
	<div class="firstfloor">
		<div class="big_img">
			<img src="<?php echo $_smarty_tpl->tpl_vars['detail']->value[0]['big_url'];?>
">
		</div>
		<div class="design_detail">
			<div class="design_name"><?php echo $_smarty_tpl->tpl_vars['detail']->value[0]['name'];?>
</div>
			<div class="design_properties">作品编号：<?php echo $_smarty_tpl->tpl_vars['detail']->value[0]['code'];?>
</div>
			<div class="design_properties">作品设计师：<?php echo $_smarty_tpl->tpl_vars['detail']->value[0]['relname'];?>
</div>
			<div class="design_properties">风格：<?php echo $_smarty_tpl->tpl_vars['detail']->value[0]['styname'];?>
</div>
			<div class="design_properties">分类：<?php echo $_smarty_tpl->tpl_vars['detail']->value[0]['catname'];?>
</div>
			<div class="design_properties">喜欢：<?php echo $_smarty_tpl->tpl_vars['detail']->value[0]['fans'];?>
</div>
			<div class="design_properties">想买：<?php echo $_smarty_tpl->tpl_vars['detail']->value[0]['fans_order'];?>
</div>
			<div class="design_status">状态：<?php echo $_smarty_tpl->tpl_vars['detail']->value[0]['status'];?>
</div>
			<div class="line_cross"></div>
			<div class="attention">相关说明
				<p> 当作品想买的人数达到一定的数量时，会有厂家联系
				设计师进行下一步合作，如果作品成功生产销售，设
				计师将得到一定提成。</p>
				</div>
			<div class="btm_click">
				<div class="love" id="love"></div>
				<div class="want" id="want"></div>
				<a href="<?php echo @__MODULE__;?>
/Index/zhiyiShop"><div class="shop" id="shop"></div></a>
			</div>
			<div class="btm_word">
				<span>喜欢</span>
				<span>想买</span>
				<span>店铺</span>
			</div>

		</div>
		<div class="designer_info"></div>
	</div>
	<div class="secondfloor">
		<div class="intro_title">作品说明</div>
	</div>
</div>
</body>
</html><?php }} ?>