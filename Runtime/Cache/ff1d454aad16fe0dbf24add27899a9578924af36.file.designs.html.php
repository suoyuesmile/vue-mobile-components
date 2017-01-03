<?php /* Smarty version Smarty-3.1.6, created on 2016-12-31 21:13:19
         compiled from "E:/apacheRoot/zxyClothesPlatform/zxy1.02/ZxyClothPat/Home/View\Common\designs.html" */ ?>
<?php /*%%SmartyHeaderCode:288365865ff3d5347d4-45527868%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff1d454aad16fe0dbf24add27899a9578924af36' => 
    array (
      0 => 'E:/apacheRoot/zxyClothesPlatform/zxy1.02/ZxyClothPat/Home/View\\Common\\designs.html',
      1 => 1483189996,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '288365865ff3d5347d4-45527868',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5865ff3d57ea8',
  'variables' => 
  array (
    'topTag' => 0,
    'key' => 0,
    'midTag' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5865ff3d57ea8')) {function content_5865ff3d57ea8($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.activities{
			display: none;
		}
		.wrapper{
			display: none;
		}
		/***************************************************/
		.wrapper1{
			height: 50px;
			width: 100%;
			box-shadow: 2px 2px 15px rgba(204, 204, 204, 0.35);
			background: #fff;
			border: 0px;
		}
		.wrapper1 .nav{
			margin: 0 auto;
			height: 50px;
			width: 1180px;
			background: #fff;
		}
		.wrapper1 .nav .page_tag{
			font-family: "微软雅黑";
			font-size: 16px;
			float: left;
			width: 250px;
			height: 50px;
			line-height: 50px	
		}
		.wrapper1 .nav .tag_list{
			float: left;
			width: 927px;
			height: 50px;
			background: #fff;
		}
		.wrapper1 .nav .tag_list ul{
			list-style: none;
		}
		.wrapper1 .nav .tag_list ul li{
			float: left;
			opacity:0.6;
			filter:alpha(opacity=60);		
		}
		.wrapper1 .nav .tag_list ul li a{
			font-family: "Verdana", "微软雅黑",Geneva, Tahoma, sans-serif;
			text-decoration: none;
			color: #000;
			display: block;
			padding: 0px 30px;		
		}

		/*****************************************************/
		.hot_tag{
			margin: 0 auto;
			width: 1080px;
			height: 150px;
			/*border: 1px solid black;*/
		}
		.hot_tag .tag_title,.midfloor{
			line-height: 40px;
			margin-top:20px;
			text-align: left;
			font-size: 18px;
			width:1080px;
			height: 40px;
			/*border: 1px solid black;*/
		}
		.hot_tag .tag_title img,.midfloor img{
			height: 32px;
			width: 32px;
			/*background: url(<?php echo @IMAGE_URL;?>
hot_tag1.png) no-repeat;*/
		}
		.tag_tips{
			margin-left:15px; 
			font-size:12px;
			color: #888;
		}
		.hot_tag .tag_name{
			width: 1080px;
			height: 90px;
			/*border: 1px solid black;*/
		}
		.tag_name ul{
			margin-top:0px; 
			line-height: 35px;
			list-style: none;
		}
		.tag_name ul li{
			float: left;
			cursor:pointer;
		}
		.tag_name ul li span{
			font-size:12px; 
			margin:0px 8px; 
			border: 1px solid rgba(204, 204, 204, 0.7);
			border-radius:20px;
			padding: 5px 10px;  
		}
		.tag_name ul li span:hover{
			border-color:#FE008D;
			color:#FE008D;
		}
		.midfloor{
			margin: 0 auto;
		}
		/****************************************************************
		 * 第二层，作品展示层
		 */
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
		.sample_design img{
			height: 330px;
			width: 220px;
		}
		.sample_design .love_count{
			display: none;
			position: absolute;
			right: 4px;
			bottom: 2px;
			height: 30px;
			width: 30px;
			opacity: 0.3;
			background:url(<?php echo @IMAGE_URL;?>
zan2.png) no-repeat;
		}
		.sample_design:hover{
			box-shadow: 2px 2px 15px rgba(204, 204, 204, 0.35);	
		}
		.sample_design:hover >.love_count{
			display: block;
		}
		.love_count:hover{
			background:url(<?php echo @IMAGE_URL;?>
zan.png) no-repeat;
		}

	</style>
	<script type="text/javascript" src="<?php echo @JS_URL;?>
ajax.js"></script>
	<script type="text/javascript">
		window.onload = function(){
			var oMid_tag = document.getElementById("mid_tag");
			var aLi = oMid_tag.getElementsByTagName("li");
			var j=5;
			aLi[j].style.color = "#FE008D";
			aLi[j].children[0].style.borderColor = "#FE008D";
			for (var i = aLi.length - 1; i >= 0; i--) {
				aLi[i].onclick = function(){
					for (var j = aLi.length - 1; j >= 0; j--) {
						aLi[j].style.color = "#000";
						aLi[j].children[0].style.borderColor = "rgba(204, 204, 204, 0.7)";
					}	
					this.style.color = "#FE008D";
					this.children[0].style.borderColor = "#FE008D";
				}				 	
			}
		}
	</script>
</head>
<body>
<!-- 第一层-一级导航层 -->
<!-- 分为2个部分：左边为此页面标签，右边是导航主页面的标签 -->
<div class="wrapper1">
	<div class="nav">
		<div class="page_tag">服装分类</div>
		<div class="tag_list">
			<ul id="nav_tag">			
				<li><a href="<?php echo @__MODULE__;?>
/Index/index">首页</a></li>
				<li><a href="<?php echo @__MODULE__;?>
/Index/showDesign">全部作品</a></li>
				<?php  $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['key']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['topTag']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['key']->key => $_smarty_tpl->tpl_vars['key']->value){
$_smarty_tpl->tpl_vars['key']->_loop = true;
?>
				<li><a href=""><?php echo $_smarty_tpl->tpl_vars['key']->value['styname'];?>
</a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</div>
<div class="hot_tag">
	<div class="tag_title">
		<img src="<?php echo @IMAGE_URL;?>
hot_tag.png"> </span>
		<span>热门标签</span>
		<span class="tag_tips">点击即可查看分类标签的相关内容</span>
	</div>
	<div class="tag_name">
		<ul id="mid_tag">
			<?php  $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['key']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['midTag']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['key']->key => $_smarty_tpl->tpl_vars['key']->value){
$_smarty_tpl->tpl_vars['key']->_loop = true;
?>
			<li><span><?php echo $_smarty_tpl->tpl_vars['key']->value['styname'];?>
</span></li>
			<?php } ?>
		</ul>
	</div>
</div>
<div class="midfloor">
	<div class="tag_title">
		<img src="<?php echo @IMAGE_URL;?>
show_design.png"> </span>
		<span>作品展示</span>
		<span class="tag_tips">清新学生</span>
	</div>
</div>
<div class="secondfloor">
	<div class="sample_design">
		<a href="">
			<img src="">
		</a>
		<div class="love_count"></div>
	</div>		
	<div class="sample_design">
		<a href="">
			<img src="">
		</a>
		<div class="love_count"></div>
	</div>
	<div class="sample_design">
		<a href="">
			<img src="">
		</a>
		<div class="love_count"></div>
	</div>
	<div class="sample_design">
		<a href="">
			<img src="">
		</a>
		<div class="love_count"></div>
	</div>
</div>
</body>
</html>
<?php }} ?>