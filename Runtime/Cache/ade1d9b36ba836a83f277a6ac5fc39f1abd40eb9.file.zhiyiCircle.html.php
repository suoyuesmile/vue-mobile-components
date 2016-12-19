<?php /* Smarty version Smarty-3.1.6, created on 2016-12-19 17:37:31
         compiled from "E:/apacheRoot/zxyClothesPlatform/zxy1.02/ZxyClothPat/Home/View\Index\zhiyiCircle.html" */ ?>
<?php /*%%SmartyHeaderCode:234525857aa5b2c6b95-13615652%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ade1d9b36ba836a83f277a6ac5fc39f1abd40eb9' => 
    array (
      0 => 'E:/apacheRoot/zxyClothesPlatform/zxy1.02/ZxyClothPat/Home/View\\Index\\zhiyiCircle.html',
      1 => 1480086355,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '234525857aa5b2c6b95-13615652',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'secondfloor' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5857aa5b3e70d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5857aa5b3e70d')) {function content_5857aa5b3e70d($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		/***********************************************************
		 * 第一层：话题发表
		 * 话题发表表单，发表人状态
		 */
		.firstfloor{
			margin:0 auto; 
			width: 1180px;
			height: 300px;
		}
		.firstfloor .talk_box{
			float: left;
			margin-top: 30px;
			width: 777px;
			height: 240px;
			border: 1px solid rgba(204, 204, 204, 0.7);
		}
		.firstfloor .talker_status{
			float: left;
			margin-left: 39px;
			margin-top:30px;
			width: 360px;
			height: 240px;
			border: 1px solid rgba(204, 204, 204, 0.7);
		}
		.talk_star{
			position: absolute;
		}
		.talk_con{
			width: 660px;
			height: 180px;
			position: relative;
			margin-left: 80px;
			margin-top:30px; 
			border: 1px solid rgba(204, 204, 204, 0.7);
		}
		.talk_con form{
			margin-left:0px;
		}
		.talk_con form textarea{
			font-size: 16px;
			float: left;
			margin-left:0px;
			height: 130px;
			width: 501px;
			border: 1px solid rgba(204, 204, 204, 0.7); 
		}
		.talk_con .upload_img{
			float: left;
			height: 132px;
			width: 151px;
			border: 1px solid rgba(204, 204, 204, 0.7);
			/*background: url(<?php echo @IMAGE_URL;?>
cam.png) no-repeat;*/
		}
		.talk_con input{
		    font-family: "微软雅黑";
			position: absolute;
			right: 30px;
			bottom: 10px;
			height: 30px;
			width: 94px;
			color: #777;
			background: #eee;
			border-radius: 6px;
			border: 1px solid rgba(204, 204, 204, 0.7);
		}
		input:hover{
			color: #FE008D;
		}
		textarea:hover{
			color: #FE008D;
		}
		.talk_con .talk_face{
			height: 16px;
			width: 16px;
			position: absolute;
			left: 20px;
			bottom: 20px;
			opacity: 0.5;
			background:url(<?php echo @IMAGE_URL;?>
face.png) no-repeat;
		}
		.talk_face:hover{
			opacity: 1;
		}
		.qq_share{
			height: 24px;
			width: 24px;
			position: absolute;
			right: 220px;
			bottom: 13px;
			opacity: 0.3;
			background:url(<?php echo @IMAGE_URL;?>
qqzone.png) no-repeat;
		}
		.qq_share:hover{
			opacity: 1;
		}
		.weibo_share{
			height: 24px;
			width: 24px;
			position: absolute;
			right: 160px;
			bottom: 13px;
			opacity: 0.3;
			background:url(<?php echo @IMAGE_URL;?>
weibo.png) no-repeat;
		}	
		.weibo_share:hover{
			opacity: 1;
		}
		/**********************************************************************
		 * 第二层消息列表（待）
		 * 分为3个部分
		 * 1.发表者的昵称，性别，等级
		 * 2.发表的内容
		 * 3.点赞，评论
		 */
		.secondfloor{
			margin:0 auto;
			width: 1180px;
			height: 200px;
			border: 1px solid rgba(204, 204, 204, 0.7);
		}
		.secondfloor:hover{
			box-shadow: 2px 2px 15px rgba(204, 204, 204, 0.35);
		}
	</style>
</head>
<body>
<!-- 第一层-话题发表盒子 -->
<!-- 分为2个部分：消息发送是表单和个人的状态 -->
<div class="firstfloor">
	<div class="talk_box">
		<div class="talk_star"></div>
		<div class="talk_con">
			<form>
			<textarea  name="talkContent" ></textarea>
			<div class="upload_img"></div>
			<input type="submit" value="提交">
			</form>
			<div class="talk_face"></div>
			<div class="qq_share"></div>
			<div class="weibo_share"></div>
		</div>
	</div>
	<div class="talker_status"></div>
</div>
<!-- 第二层-消息列表 -->
<?php  $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['key']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['secondfloor']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['key']->key => $_smarty_tpl->tpl_vars['key']->value){
$_smarty_tpl->tpl_vars['key']->_loop = true;
?>
<div class="secondfloor">
	<div class="talk_content">
	</div>
</div>
<?php } ?>
</body>
</html><?php }} ?>