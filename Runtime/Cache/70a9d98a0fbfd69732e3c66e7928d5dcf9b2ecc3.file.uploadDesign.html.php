<?php /* Smarty version Smarty-3.1.6, created on 2016-12-31 23:16:50
         compiled from "E:/apacheRoot/zxyClothesPlatform/zxy1.02/ZxyClothPat/Home/View\User\uploadDesign.html" */ ?>
<?php /*%%SmartyHeaderCode:268385867cb64c63282-79358994%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70a9d98a0fbfd69732e3c66e7928d5dcf9b2ecc3' => 
    array (
      0 => 'E:/apacheRoot/zxyClothesPlatform/zxy1.02/ZxyClothPat/Home/View\\User\\uploadDesign.html',
      1 => 1483197405,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '268385867cb64c63282-79358994',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5867cb64d8179',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5867cb64d8179')) {function content_5867cb64d8179($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
	</script>
	<style type="text/css">
		.firstfloor{
			width: 1180px;
			margin: 0 auto;
			height: 350px;
			border: 1px solid rgba(204, 204, 204, 0.7);
		}
		/*.firstfloor .upload_button{
			width: 128px;
			height: 128px;
			margin-left: 526px;
			margin-top: 30px;
			background: url(<?php echo @IMAGE_URL;?>
upload.png) no-repeat;
			filter: alpha('opacity=50');
			opacity: 0.5;
		}*/
		
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
<div class="firstfloor">
	<form class="upload_form" action="<?php echo @__MODULE__;?>
/User/upload">
		作品名字<input type="txt" name="title">
		作品风格

		<input type="file" name="photo" value="选择图片">
		<input type="submit" name="upload_button" value="上传">
	</form>
</div>
</body>
</html><?php }} ?>