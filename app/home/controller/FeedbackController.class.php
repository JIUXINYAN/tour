<?php

namespace home\controller;
use \core\Controller;

class FeedbackController extends Controller{
    public function showAd()
    {
        //脚部的相册照片
        $sql = 'select picture from tour_photo order by id limit 4';
        $fpictures = M('PhotoModel')->getRows($sql);


        
        $this->assign('fpictures',$fpictures);
        #渲染模板
		$this->display('FeedBack/Feedback.html');
    }
    public function updh()
    {
    	#获取信息
    	$content = $_POST['content']; 
    	$post_date = time();
    	@session_start();
    	$user_nickname = $_SESSION['home']['nickname'];
    	$user_id = $_SESSION['home']['id'];

    	$sql = "insert into tour_feedback values(null,'{$content}',{$post_date},{$user_id},'{$user_nickname}')";

    	$re = M('FeedBackModel')->setData($sql);
		if ($re) {
			echo "反馈成功！";
		}
		else{
			echo "反馈失败";
		}
		$url = C('domain.main').'/index.php?p=home&m=feedback&a=showAd';
		header("Refresh:1;url=".$url);
    	//var_dump($content);
    }
    
}