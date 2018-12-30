<?php 

namespace admin\controller;//全局空间下的 admin空间下的 controller 空间
use \core\Controller;//全局空间下的  core 空间下的 Controller 类

class ArticleController extends Controller {

	#文章列表页相关
	public function showList (){

		//调用模板操作数据
		$sql = "select * from tour_article where 1 ";
		$articles = M('ArticleModel')-> getRows($sql);

		//分配模板变量
		$this-> assign('articles', $articles);

		//渲染模板
		$this-> display('Article/articleList.html');
	}

	#文章编辑页相关
	public function showUpd(){

		//接收传递过来的id
		$id = $_GET['id'];

		//调用模型查询数据
		$sql = "select * from tour_article where id={$id} ";
		$article = M('ArticleModel')-> getRow($sql);

		//分配模板变量
		$this-> assign('article',$article);

		//渲染模板
		$this-> display('Article/articleUpd.html');
	}
	#编辑功能
	public function upd(){

		//接收传递过来的id
		$id = $_GET['id'];
		//接收传递过来的数据
		$title = addslashes(trim($_POST['title']));//标题
		$intro = addslashes(trim($_POST['intro']));//摘要
		$desc = addslashes(trim($_POST['desc']));//图片描述
		$content = addslashes(trim($_POST['content']));//内容


		//检查数据
		if( empty($title) ){
			echo '请填写标题！';
			$url = C('domain.main') . '/index.php?p=admin&m=article&a=showUpd&id='.$id;
			header('Refresh:2; url=' . $url);
		}
		if( empty($intro) ){
			echo '请填写文章摘要！';
			$url = C('domain.main') . '/index.php?p=admin&m=article&a=showUpd&id='.$id;
			header('Refresh:2; url=' . $url);
		}
		if( empty($content) ){
			echo '请填写内容！';
			$url = C('domain.main') . '/index.php?p=admin&m=article&a=showUpd&id='.$id;
			header('Refresh:2; url=' . $url);
		}

		//调用模型查询数据
		$sql = "update tour_article set title='{$title}',intro='{$intro}',content='{$content}' where id={$id} ";
		$re = M('ArticleModel')-> setData($sql);

		//根据结果判断
		if($re ){
			echo '编辑成功！';
		}else{
			echo '编辑失败，请联系管理员！';
		}
		$url = C('domain.main') . '/index.php?p=admin&m=article&a=showUpd&id='.$id;
		header('Refresh:2; url=' . $url);
	}

	#文章添加页相关
	public function showAd(){

		//渲染模板
		$this-> display('Article/articleAdd.html');
	}

	#文章添加功能
	public function adh (){

		@session_start();//开启会话机制
		//接收传递过来的数据
		$title = addslashes(trim($_POST['title']));//标题
		$intro = addslashes(trim($_POST['intro']));//摘要
		$desc = addslashes(trim($_POST['desc']));//图片描述
		$content = addslashes(trim($_POST['content']));//内容
		$pubtime = time();//发布时间
		// $articlePic = $_FILES['picture'];//图片
		$user_id = $_SESSION['admin']['id'];//登录者id
		$user_nickname = $_SESSION['admin']['nickname'];//登录者的昵称

		//文章配图
		$file = $_FILES['picture'];
		$filepath = upFile($file);//文章配图

		//多图片上传相关
		$path = 'public/images';//图片上传的路径

		$re = count($_FILES['pictures']['name']);
		if( $re>3 ){//判断如果删除的图片多与3张则不允许上传
			echo '对不起，您每次只能上传3张图片';
			$url = C('domain.main') . '/index.php?p=admin&m=article&a=showAd';
			header('Refresh:2; url=' . $url);
			exit;
		}else{//如果小于3张图片则允许上传
			$uploadFilePath = M('UploadFileTool')->uploadfile($path);//接收返回图片的路径
		}

		//判断数据
		if( empty($title) ){
			echo '请填写标题！';
			$url = C('domain.main') . '/index.php?p=admin&m=article&a=showAd';
			header('Refresh:2; url=' . $url);
		}
		if( empty($intro) ){
			echo '请填写文章摘要！';
			$url = C('domain.main') . '/index.php?p=admin&m=article&a=showAd';
			header('Refresh:2; url=' . $url);
		}

		if( empty($content) ){
			echo '请填写内容！';
			$url = C('domain.main') . '/index.php?p=admin&m=article&a=showAd';
			header('Refresh:2; url=' . $url);
		}


		//调用模型操作文章数据
		// $sql = "insert into tour_article (title,intro,content,pubtime,) values ('{$title}','{$intro}','{$content}','{$pubtime}' ) ";
		$sql = "insert into tour_article (id,title,intro,content,pubtime,user_id,user_nickname,picture) values (null,'{$title}','{$intro}','{$content}','{$pubtime}',{$user_id},'{$user_nickname}','{$filepath}') ";
		$re = M('ArticleModel')-> setData($sql);

		//调用模型操作图片数据
		foreach ($uploadFilePath as $key => $value) {

			$sql = "insert into tour_photo values (null,'{$intro}','{$value}',{$user_id},'{$user_nickname}' )";
			$r = M('PhotoModel')-> setData($sql);		
		}


		//根据结果判断时间是否添加成功
		if($re && $r){
			echo '添加成功！';
			$url = C('domain.main') . '/index.php?p=admin&m=article&a=showAd';
			header('Refresh:2; url=' . $url);
		}else{
			echo '添加失败，服务器繁忙！';
			$url = C('domain.main') . '/index.php?p=admin&m=article&a=showAd';
			header('Refresh:2; url=' . $url);
		}
	}

	#文章删除页相关
	public function del (){

		//接收传递过来的id
		$id = $_GET['id'];

		//根据id删除
		$sql = "delete from tour_article where id={$id}";
		$re = M('ArticleModel')-> setData($sql);

		//根据结果判断是否删除成功
		if($re ){
			echo '删除成功！';
		}else{
			echo '对不起，您余额不足，请充值！';
		}
		$url = C('domain.main') . '/index.php?p=admin&m=article&a=showList';
		header('Refresh:2; url=' . $url);
	}

	//批量删除相关
	public function delMore (){

		//接收传递过来的id
		$id = $_POST['id'];
		$ids = implode(',', $id);

		//根据id删除
		$sql = "delete from tour_article where id in ({$ids}) ";
		$re = M('ArticleModel')-> setData($sql);

		//根据结果判断是否删除成功
		if($re ){
			echo '删除成功！';
		}else{
			echo '对不起，您余额不足，请充值！';
		}
		$url = C('domain.main') . '/index.php?p=admin&m=article&a=showList';
		header('Refresh:2; url=' . $url);
	}
}


?>