<?php 

namespace admin\controller;//全局空间下的 admin空间下的 controller 空间
use \core\Controller;//全局空间下的  core 空间下的 Controller 类

class PictureController extends Controller {

	public function showList(){

		//调用模型查询数据
		$sql = "select * from tour_photo where 1";
		$pics = M('PhotoModel')-> getRows($sql);

		//分配模板变量
		$this-> assign('pics', $pics);

		//渲染模板
		$this-> display('Photo/pictureList.html');
	}

	#图片删除页相关
	public function del (){

		//接收传递过来的id
		$id = $_GET['id'];

		//根据id删除
		$sql = "delete from tour_photo where id={$id}";
		$re = M('PhotoModel')-> setData($sql);

		//根据结果判断是否删除成功
		if($re ){
			echo '删除成功！';
		}else{
			echo '对不起，您余额不足，请充值！';
		}
		$url = C('domain.main') . '/index.php?p=admin&m=picture&a=showList';
		header('Refresh:2; url=' . $url);
	}

	//批量删除图片相关
	public function delMore (){

		//接收传递过来的id
		$id = $_POST['id'];
		$ids = implode(',', $id);

		//根据id删除
		$sql = "delete from tour_photo where id in ({$ids}) ";
		$re = M('PhotoModel')-> setData($sql);

		//根据结果判断是否删除成功
		if($re ){
			echo '删除成功！';
		}else{
			echo '对不起，您余额不足，请充值！';
		}
		$url = C('domain.main') . '/index.php?p=admin&m=picture&a=showList';
		header('Refresh:2; url=' . $url);
	}
}



?>