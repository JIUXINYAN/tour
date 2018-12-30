<?php
namespace admin\controller;
use \core\controller;

class PrivilegeController extends Controller{

    //调用函数获得验证码
    public function captcha(){          
    
        $obj = M('CaptchaTool');        //获得验证码工具类对象
        $str = $obj->writeStr();        //获得验证码生成的文字信息

        @session_start();               //开启session机制
        $_SESSION['captchaStr']=$str;   //保存验证码信息
     
        // $obj->setPoint();               //控制验证码干扰点
        // $obj->setLine();                //控制验证码干扰线
        $obj->output();                 //输出验证码画布
    }

    //登陆功能方法
    public function login(){

         //接收表单数据
        $acc=trim($_POST['acc']);       //接收表单post传来的账号数据
        $pwd=trim($_POST['pwd']);       //接收表单post传来的密码数据
        $captcha=$_POST['captcha'];     //接收表单post传来的验证码数据
        $online7=isset($_POST['online7'])?$_POST['online7']:'no';     //是否勾选7天免登陆
        
        //检查数据
        @session_start();
        if (strtolower($captcha) != strtolower($_SESSION['captchaStr'])) {      //判断验证码是否正确
            echo "验证码错误";
            $url = C('domain.main')."/index.php?p=admin&m=privilege&a=showLogin";
            header("Refresh:3;$url");
             exit;
        }
       
        if (empty($acc)) {      //判断账号是否为空
           echo '未输入账号,请重新输入';
           $url = C('domain.main')."/index.php?p=admin&m=privilege&a=showLogin";
           header("Refresh:3;$url");
            exit;
        }

        if (empty($pwd)) {      //判断密码是否为空
            echo '未填写密码,请重新输入';
            $url = C('domain.main')."/index.php?p=admin&m=privilege&a=showLogin";
            header("Refresh:3;$url");
             exit;
        }
         $pwd = MD5($pwd); 

        //登陆验证
        $sql = "select * from tour_user where acc='{$acc}' and pwd='{$pwd}'";
        $user = M('UserModel')->getRow($sql);
    
        //根据验证的结果进行判断处理
        if ($user) {        //信息匹配得上  登陆成功
            $_SESSION['admin']=$user;       //记录登陆者账号信息

            //7天免登功能
            if ($online7=='yes') {
                setcookie('user_id',$user['id'],time()+7*24*60*60);     //保存一个账号id的cookie数据,有效期7天
            }
            
            echo '欢迎登陆成功';
            $url= C('domain.main') . '/index.php?p=admin&m=index&a=showIndex';
            // $url = C('domain.main') . '/index.php?p=admin&m=user&a=showList';//跳回后台用户管理系统列表页    
        }else{      //信息匹配不上  登陆失败
            echo '账号密码有误,请重新输入';
            $url = C('domain.main')."/index.php?p=admin&m=privilege&a=showLogin";      //错误返回登陆界面

        }
        header("Refresh:3;$url");       
        exit;
    }


     //后台登录界面      http://www.tour.com/index.php?p=admin&m=Privilege&a=showLogin
     public function showLogin(){
        $this->display('Privilege/login.html');         //渲染模板
    }

    //退出功能         退出调用函数连接: 
    public function logout(){
        @session_start();
        unset($_SESSION['admin']);
        setcookie('user_id',"");
        echo '退出成功,欢迎下次再来';
        $url = C('domain.main')."/index.php?p=admin&m=privilege&a=showLogin";
        header("Refresh:3;$url");       
        exit;
    }


}

