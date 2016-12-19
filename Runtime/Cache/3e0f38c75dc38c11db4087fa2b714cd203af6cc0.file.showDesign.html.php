<?php /* Smarty version Smarty-3.1.6, created on 2016-12-19 17:37:20
         compiled from "E:/apacheRoot/zxyClothesPlatform/zxy1.02/ZxyClothPat/Home/View\Index\showDesign.html" */ ?>
<?php /*%%SmartyHeaderCode:31825857aa5025fef8-84442398%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e0f38c75dc38c11db4087fa2b714cd203af6cc0' => 
    array (
      0 => 'E:/apacheRoot/zxyClothesPlatform/zxy1.02/ZxyClothPat/Home/View\\Index\\showDesign.html',
      1 => 1480085480,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31825857aa5025fef8-84442398',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'secondfloor' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5857aa5035617',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5857aa5035617')) {function content_5857aa5035617($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		/*公共样式*/
		a{
			font-family:"Verdana", "微软雅黑";
			text-decoration: none;
		}
		/************************************************************
		 * 第一层：分类层 
 	     * 包含二个部分，左边的二级导航，中间最热商品轮播图
 	     */ 
		.firstfloor{
			margin: 0 auto;
			height: 300px;
			width: 1180px;
		}
		/*第一部分*/
		.firstfloor .subnav{
			position: relative;
			margin-top:10px; 
			float: left;
			background: #d6d6d6;
			height: 301px;
			width: 250px;
			/*border: 1px solid black;*/
		}
		/*二级导航样式*/
		.active{
			background: rgba(170,170,171, 0.7);
			box-shadow: 2px 2px 15px rgba(204, 204, 204, 0.35);
			color: rgba(250,1,145, 0.7);
		}
		.subnav li{
			margin-left: 0px;
			margin-top:0px;  
			/*width: 250px;*/
			list-style: none;
			height: 50px;
			line-height: 50px;
		}
		.subnav li a{
			font-family:"Verdana", "微软雅黑";
			color: #fff;
			text-decoration: none;
			margin: 0 auto;
		}
		/*三级导航样式*/
		.morecata{
			position: absolute;
			top:0px;
			left: 250px;
			width: 910px;
			height: 300px;
			z-index: 20;
			display: none;
			border: 1px solid rgba(204, 204, 204, 0.7);
			box-shadow: 2px 2px 15px rgba(204, 204, 204, 0.35);
			/*padding-top: 2px;*/
		}
		.morecata div{
			width: 610px;
			height: 50px;
			background: white;
		}
		.morecata div a{
			display: inline-block;
			line-height: 50px;
			width: 150px;
		}
		.morecata div a{
			font-size: 14px;
			color:  #000;
			opacity: 0.6;
			filter:alpha(opacity=60);
		}
		/*中间轮播图样式*/
		.firstfloor .hotshow{
			width: 900px;
			height: 300px;
			float: left;
			border: 1px solid black;
			margin-top:10px; 
			margin-left: 10px;
			border: 1px solid rgba(204, 204, 204, 0.7);
			box-shadow: 2px 2px 15px rgba(204, 204, 204, 0.35);
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
	<script type="text/javascript">
		/******************************************************************
		 * [tabSwitch 二级导航]
		 * @param  <?php echo array('type');?>
 obj [description]
		 * @return <?php echo array('type');?>
     [description]
		 */
		function tabSwitch(obj){		 			
				var aLi=obj.getElementsByTagName('li');
				var length=aLi.length-1;
				var cata=document.getElementById('morecata');
				for(var i=0;i<aLi.length-1;i++){
				 	aLi[i].onmouseover=function(){
				 		this.className='active';
				 		this.children[0].style.color="#FE008D";
				 	}
				 	aLi[i].onmouseout=function(){
				 		this.className='';
				 		this.children[0].style.color='#fff';
				 	}
				}			
				aLi[length].onmouseover=cata.onmouseover=function(){
					aLi[length].className='active';
				 	aLi[length].children[0].style.color="#FE008D";
					cata.style.display='block';
				}
				aLi[length].onmouseout=cata.onmouseout=function(){
					aLi[length].className='';
				 	aLi[length].children[0].style.color="#fff";
					cata.style.display='none';
				}
				var aDiv1=cata.getElementsByTagName('div');
				for(var i=0;i<aDiv1.length;i++){
					var aDiv2=aDiv1[i].getElementsByTagName('a');
					for(var j=0;j<aDiv2.length;j++){
						aDiv2[j].onmouseover=function(){
							this.style.color='#FE008D';
						}
						aDiv2[j].onmouseout=function(){
							this.style.color='#000';
						}
					}
				}
			}
	</script>
</head>
<body>

 	<!-- 第一层：分类层 -->
 	<!-- 包含三个部分，左边的二级导航，中间最热商品轮播图，右边设计师的rank榜 -->
 	<div class="firstfloor">
		<div class="subnav" id="subnav">
			<li><a href="">上衣</a></li>
			<li><a href="">裤子</a></li>
			<li><a href="">裙子</a></li>
			<li><a href="">鞋子</a></li>
			<li><a href="">套装</a></li>
			<li><a href="">查看更多分类</a></li>
			<div class="morecata" id="morecata">
				<div><a href="">衬衫</a><a href="">T恤</a><a href="">外套</a><a href="">打底衫</a></div>
				<div><a href="">牛仔</a><a href="">休闲裤</a><a href="">短裤</a><a href="">7分裤</a></div>
				<div><a href="">连衣裙</a><a href="">半身裙</a><a href="">百褶裙</a><a href="">超短裙</a></div>
				<div><a href="">跑鞋</a><a href="">马克鞋</a><a href="">休闲鞋</a><a href="">皮鞋</a></div>
				<div><a href="">西装</a><a href="">休闲装</a><a href="">运动装</a><a href="">田园装</a></div>
				<div><a href="">花样少年</a><a href="">花样少年</a><a href="">花样少年</a><a href="">花样少年</a></div>
		    </div>
		</div>
		<div class="hotshow">
		</div>
	</div>

	<!-- 第二层：作品展示层-->
	<?php  $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['key']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['secondfloor']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['key']->key => $_smarty_tpl->tpl_vars['key']->value){
$_smarty_tpl->tpl_vars['key']->_loop = true;
?>	
	<div class="secondfloor">
		<div class="sample_design">
			<a href=""><img src=""></a>
			<div class="love_count"></div>
		</div>
		<div class="sample_design">
			<a href=""><img src=""></a>
			<div class="love_count"></div>
		</div>
		<div class="sample_design">
			<a href=""><img src=""></a>
			<div class="love_count"></div>
		</div>
		<div class="sample_design">
			<a href=""><img src=""></a>
			<div class="love_count"></div>
		</div>
	</div>
	<?php } ?>
</body>
</html><?php }} ?>