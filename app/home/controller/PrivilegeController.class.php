<?php

namespace home\controller;
use \core\Controller;

class PrivilegeController extends Controller{
	public function showSignUp()
	{
        //脚部的相册照片
        $sql = 'select picture from tour_photo order by id limit 4';
        $fpictures = M('PhotoModel')->getRows($sql);


        
        $this->assign('fpictures',$fpictures);
		#渲染模板
		$this->display('Privilege/signUp.html');
	}

	public function reg()
	{
		/*echo "<pre>";
        var_dump($_POST);*/
        //获取数据
        $acc =addslashes(trim($_POST['acc']));
        $pwd =addslashes(trim($_POST['pwd']));
        $nickname =addslashes(trim($_POST['nickname']));
        $regtime = time();
        $sex = $_POST['sex'];
        $accept = isset($_POST['accept'])?$_POST['accept']:0;
        
        //检查数据
        if (!$acc) {
            echo "请输入账号";
            $url = C('domain.main')."/index.php?p=home&m=privilege&a=showSignUp";
            header("Refresh:2;url={$url}");
            exit;      
        }

        if (!$pwd) {
            echo "请输入密码";
            $url = C('domain.main')."/index.php?p=home&m=privilege&a=showSignUp";
            header("Refresh:2;url={$url}");
            exit;
        }
        if (!$nickname) {
            echo "请输入昵称";
            $url = C('domain.main')."/index.php?p=home&m=privilege&a=showSignUp";
            header("Refresh:2;url={$url}");
            exit;
        }
        if (!$accept) {
            echo "您没有接受使用条款";
            $url = C('domain.main')."/index.php?p=home&m=privilege&a=showSignUp";
            header("Refresh:2;url={$url}");
            exit;
        }

        $pwd = md5($pwd);

        //登录验证
        $sql = "insert into tour_user (acc,sex,nickname,pwd,regtime) values ('{$acc}',{$sex},'{$nickname}','{$pwd}',{$regtime})";
        $re = M('UserModel')-> setData($sql);
        if ($re) {
            echo "添加成功";
            $url = C('domain.main') . '/index.php?p=home&m=index&a=showIndex';

        }
        else{
            echo "服务器繁忙请稍后再试";
            $url = C('domain.main') . '/index.php?p=home&m=privilege&a=showSignUp';
        }
        header('Refresh:3; url='.$url);
        exit;
	}
    public function showLogin()
    {
        //脚部的相册照片
        $sql = 'select picture from tour_photo order by id limit 4';
        $fpictures = M('PhotoModel')->getRows($sql);


        
        $this->assign('fpictures',$fpictures);
        #渲染模板
        $this->display('Privilege/signIn.html');
    }
    public function login()
    {
        //获取数据
        $acc = addslashes(trim($_POST['acc']));
        $pwd = addslashes(trim($_POST['pwd']));
        $has7 = isset($_POST['has7'])?$_POST['has7']:0;
        
        //检查数据
        @session_start();
        if (empty($acc)) {
            echo "请输入您的账号";
            $url = C('domain.main').'/index.php?p=home&p=privilege&a=showLogin';
            header("Refresh:2;url={$url}");
            exit;
        }
        if (empty($pwd)) {
            echo "请输入您的密码";
            $url = C('domain.main').'/index.php?p=home&p=privilege&a=showLogin';
            header("Refresh:2;url={$url}");
            exit;
        }
        $pwd = md5($pwd);

        //登录验证
        $sql = "select * from tour_user where acc='{$acc}' and pwd='{$pwd}'";
        $user = M('UserModel')->getRow($sql);

        if ($user) {
            $_SESSION['home'] = $user;

            if ($has7=='yes') {
                setcookie('user_id',$user['id'],time()+7*24*3600);
                setcookie('user_nickname',$user['nickname'],time()+7*24*3600);
            }

            echo "欢迎您的到来";
            $url = C('domain.main').'?p=home&m=index&a=showIndex';
        }
        else{
            echo "登录失败请重试";
            $url = C('domain.main').'?p=home&m=privilege&a=showLogin';
        }
        header("Refresh:2;url={$url}");
    }

    public function logout()
    {
        @session_start();
        unset($_SESSION['home']);

        //还需要删除7天免登陆用户的数据
        setcookie('user_id','');
        setcookie('user_nickname','');
        
        //给出提示信息，然后跳回到登陆页面
        echo '客官您别走呀！～';
        $url = C('domain.main') . '/index.php?p=home&m=index&a=showIndex';
        header('Refresh:1; url='.$url);
        exit;
    }
}
?>