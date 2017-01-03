<?php /* Smarty version Smarty-3.1.6, created on 2016-12-31 23:16:14
         compiled from "E:/apacheRoot/zxyClothesPlatform/zxy1.02/ZxyClothPat/Home/View\User\userCenter.html" */ ?>
<?php /*%%SmartyHeaderCode:18795867cb6ea05145-17057163%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f46be47032efa392c37f736b1a7b54b31986b5d4' => 
    array (
      0 => 'E:/apacheRoot/zxyClothesPlatform/zxy1.02/ZxyClothPat/Home/View\\User\\userCenter.html',
      1 => 1483197371,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18795867cb6ea05145-17057163',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5867cb6ebbc9c',
  'variables' => 
  array (
    'user_name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5867cb6ebbc9c')) {function content_5867cb6ebbc9c($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<style type="text/css">
	.main{
		margin: 0 auto;
		width: 1180px;
		height: 1200px;
		border: 1px solid rgba(204, 204, 204, 0.7);
	}
	.firstfloor{
		margin-top:30px; 
		width: 1180px;
		height: 300px;
		border: 1px solid rgba(204, 204, 204, 0.7);
	}
	.firstfloor .user_base_info{
		float: left;
		width: 300px;
		height: 300px;
		border-right:1px solid rgba(204, 204, 204, 0.7);
	}
	.firstfloor .user_detail_info{
		position: relative;
		float: left;
		width: 879px;
		height: 300px;
	}
	.user_base_info .user_avata{
		width: 100px;
		height: 100px;
		margin-top:40px;
		margin-left: 100px;
		border-radius: 50px;
		background: #eee;
	}
	.nick_name{
		margin-top: 10px;
		height: 20px;
		width: 200px;
		margin-left: 50px;
		color: #fe008d;
	}
	.user_cross_line2{
		margin-top: 10px;
		width: 200px;
		margin-left: 50px;
		border-bottom: 2px solid rgba(204,204,204,0.7);
	}
	.user_degree{
		text-align: left;
		margin-left: 80px;
		margin-top: 20px;
		width: 200px;
	}
	.user_degree_txt{
		color: #d9d09b;
	}
	.focus_count{
		text-align: left;
		margin-left: 80px;
		margin-top: 10px;
		width: 200px;
	}
	.focus_count_txt{
		color: #fe008d;
	}
 	.personal_introduce,.personal_mail,.personal_phone,.personal_school{
		text-align: left;
		margin-left: 50px;
		margin-top: 25px;
		width: 400px;
		opacity: 0.5;
	}
	span{
		margin-left: 10px;
		opacity: 1;
		/*color: #fe008d;*/
	}
	a{
		text-decoration: none;
	}
	a:hover{
		color: #fe008d;
	}
	.introduce_content{
		text-align: left;
		width: 400px;
		margin-left: 130px;
		height: 100px;
		opacity: 0.5;
	}
	.update_detail, .update_password{
		line-height: 30px;
		height: 30px;
		width: 100px;
		border: 1px solid rgba(204,204,204,0.7);
		border-radius: 10px;
		position: absolute; 
		bottom: 20px;
		opacity: 0.5;
	}
	.update_detail{
		right: 250px;	
	}
	.update_password{
		right: 100px;
	}
	.update_detail:hover,.update_password:hover{
		color: #fe008d;
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
</head>
<body>
<div class="main">
	<div class="firstfloor">
		<div class="user_base_info">
			<div class="user_avata"></div>
			<div class="nick_name"><?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
</div>
			<div class="user_cross_line2"></div>
			<div class="user_degree">认证：<span class="user_degree_txt">初级设计师</span></div>
			<div class="focus_count">关注度：<span class="focus_count_txt">100</span></div>
		</div>
		<div class="user_detail_info">
			<div class="personal_introduce">个人简介:</div>
			<div class="introduce_content">我是一个艺术家</div>
			<div class="personal_mail">绑定邮箱:<span><a href="">yue2xy@163.com</a></span></div>
			<div class="personal_phone">手机号码:<span><a href="">13164602219</a></span></div>		
			<div class="update_detail">修改资料</div>
			<div class="update_password"><a href="<?php echo @__MODULE__;?>
/User/accountCenter">修改密码</a></div>
		</div>
	</div>
	<div class="secondfloor"></div>
	<div class="thirdfloor"></div>
</div>

</body>
</html><?php }} ?>