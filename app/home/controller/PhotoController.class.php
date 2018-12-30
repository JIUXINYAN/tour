<?php
namespace home\controller;
use \core\controller;

class PhotoController extends Controller{
	public function showList()
	{
		//调用模型操作数据
		$sql="select id,intro,picture from tour_photo  order by id desc limit 10";
		$row=M('PhotoModel')->getRows($sql);
		foreach ($row as $key => $value) {
			$a[]= $key;
		}
		//脚部的相册照片
        $sql = 'select picture from tour_photo order by id limit 4';
        $fpictures = M('PhotoModel')->getRows($sql);


        
        $this->assign('fpictures',$fpictures);

		//分配模板变量
		$this->assign('row',$row);
		$this->assign('a',$a);
		

		
		#渲染模板
		$this->display('Photo/photoes.html');
	}
}