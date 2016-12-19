<?php 
namespace Home\Model;
use Think\Model;
class UserModel extends Model{
	/**
	 * 验证用户名和密码
	 * 当用户名和密码同时正确时，返回真，否则假
	 * @param  [type] $user_name [用户名]
	 * @param  [type] $password  [密码]
	 * @return [type]            [真假]
	 */
	function checkNamePwd($user_name,$password){
		$info=$this->getBymg_name($user_name);
				if($info!=null)
		{
			if($info['password']!=$password)
			{
				return false;
			}
			else
			{
				return $info;
			}
		}
		else
		{
			return false;
		}
	}
}	
	