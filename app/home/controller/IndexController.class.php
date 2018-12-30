<?php

namespace home\controller;
use \core\Controller;

class IndexController extends Controller{

	#前台主页相关
    public function showIndex(){
        /*echo "<pre>";
        var_dump($_COOKIE);*/
        //脚部的相册照片
        $sql = 'select picture from tour_photo order by id limit 4';
        $fpictures = M('PhotoModel')->getRows($sql);


        
        $this->assign('fpictures',$fpictures);
        $this->getDatas();
        #渲染模板   http://www.tour.com/?p=home&m=index&a=showIndex
		$this->display('index.html');
    }

    public function getDatas(){     //获得数据库信息:标题,日期,简介
       
        $sql = "select  title , intro , pubtime , picture from tour_article where 1 order by pubtime desc limit 4";
        $rows = M('UserModel')->getRows($sql);
        
        foreach ($rows as $key => $value) {
        
	        $a = C('domain.main').'/'.$value['picture'];
	        $re = getimagesize($a);
	        $wh[$key]=[$re[0],$re[1]];
     
        }

        //渲染模板
        $this-> assign('rows',$rows);
        $this-> assign('wh',$wh);

    }

    
    
}