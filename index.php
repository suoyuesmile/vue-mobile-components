<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);
function show_bug($array){
	echo "<pre>";
	var_dump($array);
	echo "</pre>";

}
//定义网站入口
define("WEB_ROOT","http://localhost:8080/");
//定义css js image路径的常量
define("CSS_URL",WEB_ROOT."Public/Home/css/");
define("IMAGE_URL",WEB_ROOT."Public/Home/images/");
define("JS_URL",WEB_ROOT."Public/Home/js/");
define("DESIGN_IMG",WEB_ROOT."Clothesimages/");
// 引入ThinkPHP入口文件
require './System/ThinkPHP/ThinkPHP.php';

// 亲^_^ 后面不需要任何代码了 就是如此简单

//数组格式化，调试代码用，写完后删除
