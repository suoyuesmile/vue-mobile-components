<?php 
namespace Home\Model;
use Think\Model;
class IndexModel extends Model{
	function getItems(){
		$design = M("design");
		$result = where('')->select();
	}

}