<?php 

namespace admin\controller ;  //创建一个全局空间下的 admin空间 Controller空间

use \core\Controller ; //引入 全局空间下的 core空间下的 Controller类

class UserController extends Controller {

	#用户展示列表
	public function userShow(){

		//渲染模板
		$this-> display('User/userShow.html');
	}

	#添加页相关
	public function showAd(){

		#渲染模板
		$this->display('User/userAdd.html');
	}

	#添加处理页
	public function adh(){
		//接收表单提交的数据
		$acc=addslashes(trim($_POST['acc'])); //账号
		$nickname=addslashes(trim($_POST['nickname'])); //昵称
		$pwd=addslashes(trim($_POST['pwd'])); //密码
		$sex=addslashes(trim($_POST['sex'])); //性别
		$own_intro=addslashes(trim($_POST['own_intro'])); //个人简介
		$type=addslashes(trim($_POST['type']));  //用户类型
		$regtime=time();  //添加用户的时间

		//检查数据
		if (empty($acc)) {
			 echo "账号不能为空";
			 $url = C('domain.main') . '/index.php?p=admin&m=user&a=showAd';
		     header("Refresh:3; url={$url}");
		     exit;
		}
		if (empty($pwd)) {
			 echo "密码不能为空";
			 $url = C('domain.main') . '/index.php?p=admin&m=user&a=showAd';
		     header("Refresh:3; url={$url}");
		     exit;
		}
		$pwd=md5($pwd); //密码无误 进行加密
		if (empty($nickname)) {
			 echo "昵称不能为空";
			 $url = C('domain.main') . '/index.php?p=admin&m=user&a=showAd';
		     header("Refresh:3; url={$url}");
		     exit;
		}
		// if (empty($own_intro)) {
		// 	 echo "个人简介不能为空";
		// 	 $url = C('domain.main') . '/index.php?p=admin&m=user&a=showAd';
		//      header("Refresh:3; url={$url}");
		//      exit;
		// }
			$img=upFile($_FILES['headimg']);
			if(!$img){
				$url = C('domain.main') . '/index.php?p=admin&m=user&a=showAd';
				header("Refresh:3; url={$url}");
				exit;
			}
		

		//调用模型新增SQL语句
		$sql="insert into tour_user (acc,sex,nickname,pwd,headimg,regtime,own_intro,type) values ('{$acc}',{$sex},'{$nickname}','{$pwd}','{$img}',{$regtime},'{$own_intro}',{$type} )";

		// $sql="insert into tour_user (acc,nickname,sex,pwd,regtime,own_intro,type,headimg) values ('{$acc}','{$nickname}',{$sex},'{$pwd}',{$regtime},'{$own_intro}',{$type},'{$img}') ";
		$re=M('UserModel')->setData($sql);


		//判断添加的结果
		if ($re) {
			echo "添加用户成功";
			$url = C('domain.main') . '/index.php?p=admin&m=user&a=showList';
			header("Refresh:3; url={$url}");
			exit;
		}else{
			echo "服务器繁忙,请稍后再试";
		}
		$url = C('domain.main') . '/index.php?p=admin&m=user&a=showAd';
		header("Refresh:3; url={$url}");
		exit;


	}

	#列表页相关
	public function showList(){
		//计算分页所需参数
		$nowPage=isset($_GET['page'])?$_GET['page']:1;  //当前页码
		$numPerpage=5; //表示每页显示的记录条数

		$sql='select count(*) as num from tour_user where 1';
		$row=M('UserModel')->getRow($sql);
		$totalPage=(int)ceil($row['num']/$numPerpage); //计算总页数

		$x=($nowPage-1)*$numPerpage; //计算偏移量

		$url=C('domain.main').'/index.php?p=admin&m=user&a=showList&page';

		$pageHtml=pageHtml($nowPage,$totalPage,$url);

		//调用模型查询列表页数据
		// $sql='select * from tour_user where 1 order by regtime desc limit 5';
		$sql="select * from tour_user where 1 order by regtime desc ";

		$rows=M('UserModel')->getRows($sql);

		//分配模板
		$this->assign('rows',$rows);
		$this->assign('pageHtml',$pageHtml);

		//渲染模板
		$this->display('User/userList.html'); 
	}

	public function showUpd(){

		//接收GET方式传递的数据
		$id=$_GET['id'];

		//调用模型查询需要回显的数据
		$sql="select * from tour_user where id={$id}";
		$row=M('UserModel')->getRow($sql);
		//分配模板
		$this->assign('row',$row);

		//渲染模板
		$this->display('User/userEdit.html');
	}
	
	#编辑处理页
	public function updh(){

		//接收GET方式传递的值
		$id=$_GET['id'];
		
		//接收表单提交的数据
		$acc=addslashes(trim($_POST['acc'])); //账号
		$pwd=addslashes(trim($_POST['pwd'])); //密码
		$sex=addslashes(trim($_POST['sex'])); //性别
		$nickname=addslashes(trim($_POST['nickname'])); //昵称
		$own_intro=addslashes(trim($_POST['own_intro'])); //个人简介
		$type=addslashes(trim($_POST['type'])); //用户类型

		//检查数据
		if (empty($acc)) {
			echo "账号不能为空,请重新输入";
			$url = C('domain.main') . '/index.php?p=admin&m=user&a=showUpd&id='.$id;
			header("Refresh:3; url={$url}");
			exit;
		}


		//调用模型更新数据
		if (empty($pwd)) { //如果没有修改密码
			$sql="update tour_user set acc='{$acc}',sex={$sex},nickname='{$nickname}',own_intro='{$own_intro}',type={$type} where id={$id}";
		}else{ //否则修改了密码
			$pwd=md5($pwd);
			$sql="update tour_user set acc='{$acc}',pwd='{$pwd}',sex={$sex},nickname='{$nickname}',own_intro='{$own_intro}',type={$type} where id={$id}";
		}
		$re=M('UserModel')->setData($sql);

		//判断结果
		if ($re) {
			echo "更新成功";

		}else{
			echo "更新失败";
		}
		$url = C('domain.main') . '/index.php?p=admin&m=user&a=showUpd&id='.$id;
		header("Refresh:3; url={$url}");
		exit;
	}
	
	#删除功能
	public function del(){
		//接收GET方式传递的参数
		$id=$_GET['id'];

		//调用模型操作数据 (删除)
		$sql="delete from tour_user where id={$id}";
		$re=M('UserModel')->setData($sql);

		//判断结果
		if ($re) {
			echo "删除成功";
		}else{
			echo "想删我,你还嫩了点~";
		}
		$url = C('domain.main') . '/index.php?p=admin&m=user&a=showList';
		header("Refresh:3; url={$url}");
		exit;
	}

}

































 ?>