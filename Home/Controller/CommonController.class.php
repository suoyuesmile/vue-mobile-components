<?php
// 公共的代码区包含页面的头部，底部等其他公共部分，被其他控制器调用
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
	public function header(){
		$this->display();
	}

	function bottom(){
		$this->display();
	}
	function commands(){}
	function designs(){	
		$user_name = session('user_name');
        $this->assign('user_name',$user_name);
        $designId = $_GET['id'];
        $index = 6;
        $title = '作品分类';
        $item = new \Home\Model\CommonModel(); 
        $tagArray = $item->findStyTag();
        $topTag = array_slice($tagArray, 0, 5);
        $midTag = array_slice($tagArray, 5);
        $this->assign('topTag',$topTag);
        $this->assign('midTag',$midTag);
        $this->assign('index',$index);
        $this->assign('title',$title);
      	$this->display('header'); 
      	$this->display();
      	$this->display('bottom2');
	}
	function details(){
		    $user_name = session('user_name');
        $this->assign('user_name',$user_name);
        $designId = $_GET['id'];
        $index = 6;
        $title = '作品详情';
        $item = new \Home\Model\CommonModel(); 
        $result = $item->findDetails($designId);
        $this->assign('detail',$result);
        $this->assign('index',$index);
        $this->assign('title',$title);
      	$this->display('header'); 
      	$this->display();
      	$this->display('bottom2');
      }
	function activities(){}
	function test(){
		$item = new \Home\Model\CommonModel(); 
        $result = $item->findDetails();
	}
}