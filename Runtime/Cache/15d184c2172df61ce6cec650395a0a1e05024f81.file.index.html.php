<?php /* Smarty version Smarty-3.1.6, created on 2016-11-25 23:58:32
         compiled from "E:/apacheRoot/zxyClothesPlatform/zxy1.02/Home/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1811458381303f178d3-65495921%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15d184c2172df61ce6cec650395a0a1e05024f81' => 
    array (
      0 => 'E:/apacheRoot/zxyClothesPlatform/zxy1.02/Home/View\\Index\\index.html',
      1 => 1480089074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1811458381303f178d3-65495921',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_583813040eeee',
  'variables' => 
  array (
    'secondfloor' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583813040eeee')) {function content_583813040eeee($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
	<style type="text/css">
		/*公共样式*/
		.main{
			margin: 0 auto;
			height: 1384px;	
			width: 1180px;
		}
		a{
			font-family:"Verdana", "微软雅黑";
			text-decoration: none;
		}
		.active{
			background: rgba(170,170,171, 0.7);
			box-shadow: 2px 2px 15px rgba(204, 204, 204, 0.35);
			color: rgba(250,1,145, 0.7);
		}
		/***************************************************************************
		 * 第一层-多级导航层
		 * 分为4个部分
		 * 1.左边2级导航
		 * 2.隐藏的3级导航
		 * 3.中间的热门作品轮播图，展示5张最热门作品
		 * 4.右边的设计师rank榜
		 */
		.firstfloor{
			height: 302px;
			width: 1182px
		}
		.firstfloor .subnav{
			/*margin-top:10px; */
			position: relative;
			float: left;
			background: #d6d6d6;
			height: 301px;
			width: 250px;
			/*border: 1px solid black;*/
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
		.morecata{
			position: absolute;
			top:0px;
			left: 250px;
			width: 610px;
			height: 300px;
			z-index: 20;
			display: none;
			border: 1px solid rgba(204, 204, 204, 0.7);
			box-shadow: 2px 2px 15px rgba(204, 204, 204, 0.35);
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
		.firstfloor .hotshow{
			width: 600px;
			height: 290px;
			float: left;
			border: 1px solid black;
			margin-top:10px; 
			margin-left: 10px;
			border: 1px solid rgba(204, 204, 204, 0.7);
			box-shadow: 2px 2px 15px rgba(204, 204, 204, 0.35);
		}
		.hotshow .big_image{
			margin: 0px;
			width: 600px;
			height: 290px;
			position: relative;
			overflow: hidden;
		}
		.hotshow .big_image li{	
			float: left;
			list-style: none;
			left: 0px;
			top: 0px;
			overflow: hidden;
			position: absolute;
			z-index: 0;
		}
		.firstfloor .designershow{
			float: left;
			width:308px;
			height: 290px;
			margin-top:10px; 
			margin-left: 10px;
			border: 1px solid rgba(204, 204, 204, 0.7);
			box-shadow: 2px 2px 15px rgba(204, 204, 204, 0.35);
		}
		
		/*****************************************************************************
		 * 第二层-板块展示层
		 * 分为3块：1.优秀作品2.校园作品3.名气作品
		 * 每块含有1个模块图区，还有4个作品展示区，点击模块图去按钮可以进模块页面
		 */
		.secondfloor{
            /*border: 1px solid black;*/
            margin-top: 30px;
			height: 330px; 
			width: 1180px;
		}
		.secondfloor .fine_design{
			width: 1180px;
			height: 330px;
			/*background: #eee;*/
			border: 1px solid rgba(204, 204, 204, 0.7);
			box-shadow: 2px 2px 20px rgba(204, 204, 204, 0.35);	
		}
		.fine_design .more_fine_design{
			float: left;
			width: 295px;
			height: 328px;
			border-right: 1px solid rgba(204, 204, 204, 0.7);
		}

		/*.fine_design .more_fine_design img{
			width: 290px;
			height: 328px;
		}*/
		.fine_design .design_sample{
			position: relative;
			float: left;
			width: 220px;
			height: 328px;
			border-left: 1px solid rgba(204, 204, 204, 0.7);
		}
		.design_sample .love_count{
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
		.design_sample:hover{
			box-shadow: 2px 2px 15px rgba(204, 204, 204, 0.35);	
		}
		.design_sample:hover > .love_count{
			display: block;
		}
		.love_count:hover{
			background:url(<?php echo @IMAGE_URL;?>
zan.png) no-repeat;
		}
		.fine_design .design_sample img{
			width: 220px;
			height: 328px;
		}


	</style>
	<script type="text/javascript">
			/********************************************************************
			 *1.分类层样式
			 * 鼠标移入时显出样式
			 * 最后一个标签移入时显示二级分类
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

			/**********************************************************************
		 	 *2.轮播图
		 	 *  图片大小：宽度600px 高度290px
		 	 *  五张图片自动播放，鼠标移动到轮播图上时停止播放，移出重新开始
		 	 *  移到左右区域出现左右键，移出则左右键消失
		 	 *  点击左右键改变图片轮播方向
		 	 *  可以根据图片下方的按钮来选择当前显示的图片
		 	 */
		 	function slidePlay(obj){

		 	}
		 		 	
	</script>
</head>
<body>
<div class="main">

 	<!-- 第一层：分类层 -->
 	<!-- 包含3部分，左边的二级导航，中间最热商品轮播图，右边设计师的rank榜 -->
 	<div class="firstfloor">
		<div class="subnav" id="subnav">
			<li><a href="">清新学生</a></li>
			<li><a href="">花样少年</a></li>
			<li><a href="">商务白领</a></li>
			<li><a href="">魅丽女士</a></li>
			<li><a href="">成熟男士</a></li>
			<li><a href="">查看更多分类</a></li>
			<div class="morecata" id="morecata">
				<div><a href="">正装学生</a><a href="">欧美学院</a><a href="">休闲学弟</a><a href="">清纯学妹</a></div>
				<div><a href="">小正太</a><a href="">个性帅哥</a><a href="">高傲男神</a><a href="">冷傲少女</a></div>
				<div><a href="">初入职场</a><a href="">小有名气</a><a href="">职场达人</a><a href="">老总服饰</a></div>
				<div><a href="">花样少年</a><a href="">花样少年</a><a href="">花样少年</a><a href="">花样少年</a></div>
				<div><a href="">花样少年</a><a href="">花样少年</a><a href="">花样少年</a><a href="">花样少年</a></div>
				<div><a href="">花样少年</a><a href="">花样少年</a><a href="">花样少年</a><a href="">花样少年</a></div>
		    </div>
		</div>
		<div class="hotshow">
			<ul class="big_image">		
					<li><img src="<?php echo @IMAGE_URL;?>
clothesimage/hot_001.jpg"></li>
					<li><img src="<?php echo @IMAGE_URL;?>
clothesimage/hot_002.jpg"></li>
					<li><img src="<?php echo @IMAGE_URL;?>
clothesimage/hot_003.jpg"></li>
					<li><img src="<?php echo @IMAGE_URL;?>
clothesimage/hot_004.jpg"></li>
					<li><img src="<?php echo @IMAGE_URL;?>
clothesimage/hot_005.jpg"></li>			
			</ul>
		</div>
		<div class="designershow"></div>
	</div>
	
	<!-- 第二层：板块层-->
	<!-- 共3层 1.精品作品，2.学校作品，3.大咖作品 -->
	<?php  $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['key']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['secondfloor']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['key']->key => $_smarty_tpl->tpl_vars['key']->value){
$_smarty_tpl->tpl_vars['key']->_loop = true;
?>
	<div class="secondfloor">
		<div class="fine_design" id="fine_design">
			<div class="more_fine_design">
				<a href=""><img src=""></a>
				<div class="float_title"></div>
			</div>
			<div class="design_sample" >
				<!-- <a href=""><img src="<?php echo @IMAGE_URL;?>
clothesimage/105.jpg"></a> -->
				<div class="love_count"></div>
			</div>
			<div class="design_sample">
				<!-- <a href=""><img src="<?php echo @IMAGE_URL;?>
clothesimage/106.jpg"></a> -->
				<div class="love_count"></div>
			</div>	
			<div class="design_sample">
				<!-- <a href=""><img src="<?php echo @IMAGE_URL;?>
clothesimage/107.jpg"></a> -->
				<div class="love_count"></div>
			</div>
			<div class="design_sample">
				<!-- <a href=""><img src="<?php echo @IMAGE_URL;?>
clothesimage/108.jpg"></a> -->
				<div class="love_count"></div>
			</div>
		</div>							
	</div>
	<?php } ?>
</div>
</body>
</html><?php }} ?>