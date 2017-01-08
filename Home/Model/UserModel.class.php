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
	//一次性获得全部验证错误
	protected $patchValidate = true;
	//实现表单项目验证
	//通过重写父类属性 validate 实现表单验证
	protected $_validate       = array(
		array('user_name','require','请输入用户名'),
		array('user_name','/^\S{6,14}$/','支持中英文,长度为6-14个字符,不允许空格'),
		array('user_name','require','此用户名太受欢迎，请换一个',0,'unique',1),
		array('password','require','请输入密码'),
		array('password','/^\S{6,14}$/','长度为6-14个字符,不允许空格'),
		array('password2','password','与密码不一致,请重新填写',0,'confirm'),
		array('register_term','checkterm','您还未同意条款',0,'callback')
		);
	//自定义方法验证爱好信息
	//$name参数是当前被验证项目的信息
	//$name = $_POST['register_term']
	function checkterm($name){
		//$name是一个数组信息
		// print_r($name);
		if($name[0]==1){
			return true;
		}else{
			return false;
		}
	}
	function checkNamePwd($user_name,$password){
		$info=$this->getByuser_name($user_name);
		$error['namePwd']='';
		if($info!=null)
		{
			if($info['password']!=$password)
			{
				$error['namePwd']='密码错误，请重新输入';
				return $error;
			}
			else
			{
				return $info;
			}
		}
		else
		{
			$error['namePwd']='该用户名还未注册';
			return $error;
		}
	}
}	
	