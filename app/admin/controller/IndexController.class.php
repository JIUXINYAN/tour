<?php 

namespace admin\controller;//全局空间下的 admin 空间下的 controller 空间
use \core\Controller; // 全局空间下的 core 空间下的 Controller 类

class IndexController extends Controller{

	public function showIndex(){
	
	
		//渲染模板
		$this-> display('index.html');
	}

	public function showWelcome(){

		//渲染模板
		$this-> display('welcome.html');
	}
}




?>