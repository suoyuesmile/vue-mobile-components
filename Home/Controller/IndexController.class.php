<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

     /**
     * 控制器控制页面输出
     * 获取session内容，将用户名传入页面
     * 设置页面的编号index和标题title，传入页面，控制页面输出
     * 1.display公共页面header，bottom
     * 2.display用户相关的页面
     * 0.代码重用
     **/
    public function index(){
        $user_name = session('user_name');
        $this->assign('user_name',$user_name);
        $index = 0;
        $title = '织心衣';
        $secondfloor = array(
            'fisrt'     =>  array('name' => 'one'),
            'second'    =>  array('name' => 'two'),
            'third'     =>  array('name' => 'three')
            );
        $this->assign('secondfloor',$secondfloor);
        $this->assign('index',$index);
        $this->assign('title',$title);
      	$this->display('common:header'); 
      	$this->display();
      	$this->display('common:bottom');
    }
    
    public function showDesign(){
        $user_name = session('user_name');
        $this->assign('user_name',$user_name);
        $index = 1;
        $title = '全部作品';
        $secondfloor = array(
            'fisrt'     =>  array('name' => 'one'),
            'second'    =>  array('name' => 'two'),
            'third'     =>  array('name' => 'three'),
            'forth'     =>  array('name' => 'one'),
            'fifth'    =>  array('name' => 'two'),
            'sexth'     =>  array('name' => 'three')
            );
        $this->assign('secondfloor',$secondfloor);
        $this->assign('index',$index);
        $this->assign('title',$title);
      	$this->display('common:header');
      	$this->display();
      	$this->display('common:bottom');
    }

    public function goodDesigner(){
        $user_name = session('user_name');
        $this->assign('user_name',$user_name);
        $index = 2;
        $title = '设计达人';
        $designerfloor = array(
            'fisrt'     =>  array('name' => 'one'),
            'second'    =>  array('name' => 'two'),
            'third'     =>  array('name' => 'three')
            );
        $this->assign('designerfloor',$designerfloor);
        $this->assign('index',$index);
        $this->assign('title',$title);
        $this->display('common:header'); 
        $this->display();
        $this->display('common:bottom');
    }

    public function schoolDesign(){
        $user_name = session('user_name');
        $this->assign('user_name',$user_name);
        $index = 3;
        $this->assign('index',$index);
        $title = '美在校园';
         $schoolfloor = array(
            'fisrt'     =>  array('name' => 'one'),
            'second'    =>  array('name' => 'two'),
            'third'     =>  array('name' => 'three'),
            'forth'     =>  array('name' => 'one')
            );
        $this->assign('schoolfloor',$schoolfloor);
        $this->assign('title',$title);
        $this->display('common:header');
        $this->display();
        $this->display('common:bottom');
    }

    public function zhiyiCircle(){
        $user_name = session('user_name');
        $this->assign('user_name',$user_name);
        $index = 4;
        $this->assign('index',$index);
        $title = '织衣圈';
        $secondfloor = array(
            'fisrt'     =>  array('name' => 'one'),
            'second'    =>  array('name' => 'two'),
            'third'     =>  array('name' => 'three'),
            'forth'     =>  array('name' => 'one'),
            'fifth'    =>  array('name' => 'two'),
            'sexth'     =>  array('name' => 'three')
            );
        $this->assign('secondfloor',$secondfloor);
        $this->assign('title',$title);
        $this->display('common:header');
        $this->display();
        $this->display('common:bottom');
    }
    public function zhiyiShop(){
        $user_name = session('user_name');
        $this->assign('user_name',$user_name);
        $index = 5;
        $this->assign('index',$index);
        $title = '织衣店';
        $this->assign('title',$title);
        $this->display('common:header');
        $this->display();
        $this->display('common:bottom');
    }
    public function becomeDesigner(){
        $user_name = session('user_name');
        $this->assign('user_name',$user_name);
        $index = 6;
        $this->assign('index',$index);
        $title = '成为设计师';
        $this->assign('title',$title);
        $this->display('common:header');
        $this->display();
        $this->display('common:bottom');
    }
}