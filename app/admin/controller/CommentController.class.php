<?php  
namespace admin\controller;
use \core\Controller;

class CommentController extends Controller{
	public function showList()
	{
		//显示反馈内容
		$sql = "select * from tour_comment";
		$comments = M('CommentModel')->getRows($sql);
		$tot = count($comments);
		//分配模板变量
		//$content = $comments['content'];
		//$post_date = $comments['post_date'];
		//$user_nickname = $comments['user_nickname'];

		$this->assign('comments',$comments);
		$this->assign('tot',$tot);
		//$this->assign('post_date',$post_date);
		//$this->assign('user_nickname',$user_nickname);

		#渲染模板
		$this->display('Comment/CommentList.html');
	}

	public function del()
	{
		#获取数据
		$id = $_GET['id'];

		$sql = "delete from tour_comment where id={$id}";
		$re = M('CommentModel')->setData($sql);
		if ($re) {
			echo "删除评论成功！";
		}
		else{
			echo "删除评论失败";
		}
		$url = C('domain.main').'/index.php?p=admin&m=comment&a=showList';
		header("Refresh:1;url=".$url);
	}

	public function dels()
	{
		$del = $_POST['del'];
		$str = implode(',', $del);
		//var_dump($str);

		$sql = "delete from tour_comment where id in ({$str})";
		
		$re = M('CommentModel')->setData($sql);
		if ($re) {
			echo "删除评论成功！";
		}
		else{
			echo "删除评论失败";
		}
		$url = C('domain.main').'/index.php?p=admin&m=comment&a=showList';
		header("Refresh:1;url=".$url);
	}

}
?>