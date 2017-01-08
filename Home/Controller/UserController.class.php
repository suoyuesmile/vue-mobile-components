<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {

    /**
     * 控制器控制页面输出
     * 获取session内容，将用户名传入页面
     * 设置页面的编号index和标题title，传入页面，控制页面输出
     * 1.display公共页面header，bottom
     * 2.display用户相关的页面
     * 0.代码重用
     **/
    public function userCenter(){
        $user_name = session('user_name');
        $this->assign('user_name',$user_name);
        $index=6;
        $this->assign('index',$index);
        $this->display('Common:header');
    	$this->display();
    	$this->display('Common:bottom2');
    }
    function myDesign(){
        $user_name = session('user_name');
        $this->assign('user_name',$user_name);
        $index = 6;
        $title = '我的作品';
        $secondfloor = array(
            'fisrt'     =>  array('name' => 'one'),
            'second'    =>  array('name' => 'two'),
            'third'     =>  array('name' => 'three'),
            'forth'     =>  array('name' => 'one'),
            );
        $this->assign('secondfloor',$secondfloor);
        $this->assign('index',$index);
        $this->assign('title',$title);
        $this->display('Common:header');
    	$this->display();
    	$this->display('Common:bottom2');
    }
    function updateUserinfo(){
        $this->display('Common:header');
    	$this->display();
    	$this->display('Common:bottom2');
    }
    function accountCenter(){
        $user_name = session('user_name');
        $this->assign('user_name',$user_name);
        $index=6;
        $this->assign('index',$index);
        $this->display('Common:header');
    	$this->display();
    	$this->display('Common:bottom2');
    }
    function myCircle(){
        $user_name = session('user_name');
        $this->assign('user_name',$user_name);
        $index=6;
        $this->assign('index',$index);
        $this->display('Common:header');
        $this->display();
        $this->display('Common:bottom2');
    }
    function uploadDesign(){
        $user_name = session('user_name');
        $this->assign('user_name',$user_name);
        $index=6;
        $this->assign('index',$index);
        $this->display('Common:header');
        $this->display();
        $this->display('Common:bottom2');  
             
    }
    /**
     * 上传文件功能
     * 1.继承核心方法upload
     * 2.配置上传参数
     * 3.将上传的参数传入上传的页面
     * 4.调用回调函数，打印上传的成功或失败的信息
     * @return [type] [description]
     */
    function upload()
    {
        $upload = new \Think\Upload(); 
        $upload->maxSize = 3145728 ;    
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型    
        $upload->savePath = './Public/Uploads/';  
        $info = $upload->upload();    
        if(!$info) {        
            $this->error($upload->getError());    
        }else{      
            $this->success('上传成功！','User/');    
        } 
    }

    /**
     * 登录验证功能
     * 1.判断验证码的正确错误
     * 2.在数据库中检查用户名和密码是否都存在
     * 3.将匹配成功的用户名和密码存入session，重定向到此页面
     * 0.使用tp框架集成的方法
     **/
    public function login(){
        $login_rule=array(
            array('user_name','require','请输入正确的用户名'),
            array('user_name','/^\S{6,14}$/','请输入正确的用户名'),
            // array('user_name','checkName','此用户名太受欢迎，请换一个',0,'callback'),
            array('password','/^\S{6,14}$/','请输入6-16位密码，区分大小写！'),
            // array('password','checkNamePwd','密码不正确')
        );
        if(!empty($_POST))
        {
            $user = new \Home\Model\UserModel();
            $verify=new \Think\Verify();
            $z = $user ->validate($login_rule)->create();//集成表单验证
            if(!$z){
                $this->ajaxReturn($user->getError());
            }
            elseif(!$verify->check($_POST['captcha'])){
                $error['captcha']="验证码错误";
                $this->ajaxReturn($error);  
            }
            else{    
                $res=$user->checkNamePwd($_POST['user_name'],$_POST['password']);
                if($res['namePwd']!=''){
                    $error['user_name']=$res['namePwd'];
                    $this->ajaxReturn($error);             
                }else{
                    session('user_name',$res['user_name']);
                    session('id',$res['id']);
                    $success['success']='';
                    $this->ajaxReturn($success);
                    $this->redirect('Index/index');   
                }   
            }
        }
    }
    /**
     * 注册功能
	 * 判断是否勾选协议
     * 1.判断验证码是否正确
     * 2.判断用户名符合规范
     * 3.判断密码是否符合规范
     * 4.调用函数，将用户名密码插入到user数据库表中
     * 5.注册成功，存入session并登录
     */
    public function register(){
		$user=new \Home\Model\UserModel();
        if(!empty($_POST)){
            $verify=new \Think\Verify();
            $z = $user -> create();//集成表单验证
            if(!$z){
                $this->ajaxReturn($user->getError());
            }elseif (!$verify->check($_POST['captcha'])) {
                $error['captcha']="验证码错误";
                $this->ajaxReturn($error);  
            }
            else{
                // echo "ok";
                $user->user_name=$_POST['user_name'];
                $user->password=$_POST['password'];
                $success['success']='';

                $rst=$user->add();
                if($rst){
                    $this->ajaxReturn($success);
                }else{
                    $this->ajaxReturn($success);
                }
            }
        }else{
            // $this->display();
        }
    }
	public function checkinput(){
        $user=new \Home\Model\UserModel();
        if(!empty($_POST)){
            $z = $user -> create();
            if (!$z) {
                $this->ajaxReturn($user->getError());
            }else{
                $success['success']='';
                $this->ajaxReturn($success);
            }
        }
    }
    /**
     * 自动生成验证码
     * 1.配置验证码参数
     * 2.构造验证码对象
     * 3.验证码传递到页面
     * 0.tp框架集成的方法
     **/               
    public function verify(){
        ob_clean();
        $config=array(
        'imageH'    =>  30,               
        'fontSize'  =>  12, 
        'fontttf'   =>  '4.ttf',
        'useCurve'  =>  false, 
        'length'    =>  4,  
        );
        $verify = new \Think\Verify($config);
        $verify->entry();
        
    }
    
     /**
     * 登出
     * 1.将session清空
     * 2.重定向到此页，未登录状态
     * 0.
     **/   
    public function logout(){
        session(null);
        $this->redirect('Index/index');
        
    }
   
}