<?php /* Smarty version Smarty-3.1.6, created on 2016-11-25 19:55:32
         compiled from "E:/apacheRoot/zxyClothesPlatform/zxy1.02/Home/View\User\uploadDesign.html" */ ?>
<?php /*%%SmartyHeaderCode:11835583826b4237201-82613538%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5270bdc109363d006fc4596a19355516074c263' => 
    array (
      0 => 'E:/apacheRoot/zxyClothesPlatform/zxy1.02/Home/View\\User\\uploadDesign.html',
      1 => 1479979301,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11835583826b4237201-82613538',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_583826b425c11',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583826b425c11')) {function content_583826b425c11($_smarty_tpl) {?><!DOCTYPE html>
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