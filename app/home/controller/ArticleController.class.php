<?php
namespace home\controller;
use \core\controller;

class ArticleController extends Controller{
	public function showList()
	{
		//脚部的相册照片
        $sql = 'select picture from tour_photo order by id limit 4';
        $fpictures = M('PhotoModel')->getRows($sql);


        
        $this->assign('fpictures',$fpictures);
		#渲染模板
		$this->display('Article/articles.html');
	}
}