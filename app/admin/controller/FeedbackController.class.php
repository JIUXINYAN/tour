<?php  
namespace admin\controller;
use \core\Controller;

class FeedbackController extends Controller{
	public function showList()
	{
		//显示反馈内容
		$sql = "select id,content,post_date,user_nickname from tour_feedback";
		$feedbacks = M('FeedbackModel')->getRows($sql);
		$tot = count($feedbacks);
		//分配模板变量
		//$content = $feedbacks['content'];
		//$post_date = $feedbacks['post_date'];
		//$user_nickname = $feedbacks['user_nickname'];

		$this->assign('feedbacks',$feedbacks);
		$this->assign('tot',$tot);
		//$this->assign('post_date',$post_date);
		//$this->assign('user_nickname',$user_nickname);

		#渲染模板
		$this->display('FeedBack/feedbackList.html');
	}

	public function del()
	{
		#获取数据
		$id = $_GET['id'];

		$sql = "delete from tour_feedback where id={$id}";
		$re = M('FeedBackModel')->setData($sql);
		if ($re) {
			echo "删除反馈成功！";
		}
		else{
			echo "删除反馈失败";
		}
		$url = C('domain.main').'/index.php?p=admin&m=feedback&a=showList';
		header("Refresh:1;url=".$url);
	}

	public function dels()
	{
		$del = $_POST['del'];
		$str = implode(',', $del);
		//var_dump($str);

		$sql = "delete from tour_feedback where id in ({$str})";
		
		$re = M('FeedBackModel')->setData($sql);
		if ($re) {
			echo "删除反馈成功！";
		}
		else{
			echo "删除反馈失败";
		}
		$url = C('domain.main').'/index.php?p=admin&m=feedback&a=showList';
		header("Refresh:1;url=".$url);
	}

}
?>