<?php

namespace plugins;

//实现多文件上传
    /*使用方法
        例：
        使用实例化工具实现对象调用uploadfile()方法
        M('UploadFileTool')->uploadfile($path，$allowExt，$maxSize，$imgFlag);
        
    // $path="F:/home/sy/day20/asd/mg";             //文件存放路径
    // $allowExt = array('png','jpg','jpeg','gif'); //可被存放的文件后缀名
    // $maxSize=1048576;                            //设置文件上传的大小，1048576为1m
    // $imgFlag=true;                               //判断是否真为一张图片，可为true，也可为false

    
        <input type="file" name="imgs[]" multiple="multiple" />    
        文件上传 ,name值需要是一个数组, 多选需要添加一个属性multiple
    */	



class UploadFileTool{
    //获取传来图片文件的信息
    private function buildInfo(){       
        // $i = 0;
        // echo "<pre>";
        // print_r($_FILES['pictures']);
        // echo '<hr>';
        // exit;

            foreach ($_FILES['pictures'] as $key=>$value){     //2维数组转换成1维数组
                    //取出一维数组的值，然后形成另一个数组
                    //新的数组的结构为：info=>i=>('name','size'.....)
                foreach ($value as $k => $v) {

                    $info[$k][$key]= $v;

                }    
                    // print_r($v);
                    // echo '<br>';
                     // $info[$i][$key]= $v[$i];
                    //$info[$i]['size'] = $v[$i];
                    // $info[$i]['type'] = $v['type'][$key];
                    // $info[$i]['tmp_name'] = $v['tmp_name'][$key];
                    // $info[$i]['error'] = $v['error'][$key];
                    // $i++;
            }

            return $info;
              

                /*
        foreach ($_FILES['pictures'] as $v){            //3维数组转换成2维数组
            if(is_string($v['name'])){ //单文件上传
                $info[$i] = $v;
                $i++;
            }else{ // 多文件上传
                foreach ($v['name'] as $key=>$val){     //2维数组转换成1维数组
                    //取出一维数组的值，然后形成另一个数组
                    //新的数组的结构为：info=>i=>('name','size'.....)
                    $info[$i]['name'] = $v['name'][$key];
                    $info[$i]['size'] = $v['size'][$key];
                    $info[$i]['type'] = $v['type'][$key];
                    $info[$i]['tmp_name'] = $v['tmp_name'][$key];
                    $info[$i]['error'] = $v['error'][$key];
                    $i++;
                }
            }
        }
        return $info;
        */
    }

    //获取文件的后缀名
    private function getExt($fileName) {        
        return strrchr($fileName, '.');
    }



    public function uploadfile($path="F:/home/sy/day20/asd/mg",$allowExt = array('png','jpg','jpeg','gif'),$maxSize=1048576,$imgFlag=true){

        //判断保存图片的路径是否存在,不存在自动新建
        if (!file_exists($path)) {      
            mkdir($path,0777,true);
        }
        
        //获得buildInfo()已整理好的图片数据数组
        $infoArr = $this->buildInfo();    
        $h = 0;     


        foreach ($infoArr as $key=>$val) {

            if ($val['error'] === UPLOAD_ERR_OK) {      //判断是否有错误
                //获取文件后缀名
                $ext = $this->getExt($val['name']);           
                for($j=0;$j<count($allowExt);$j++){

                    //判断是否为图片后缀名的文件
                    if($ext == '.'.$allowExt[$j]){           
                        $m = "此文件适合上传标准";
                        $h = $m;
                    }else {
                        $m = "此文件不可以被上传";
                    }
                }
                if ($h) {
                    $mes = "文件格式正确";
                }else{
                    $mes = "文件格式错误";
                    exit;
                }

                //获取图片的大小如果无法获取,表示上传的并非图片
                if($imgFlag){               
                    $result = getimagesize($val['tmp_name']);
                    if(!$result){
                        $mes = "您上传的不是一个真正图片";
                        exit;
                    }
                }

                //判断文件是否超过设置大小
                if($val['size']>$maxSize){
                    $mes = "文件太大了";
                    exit;
                }

                $realName = date('YmdHis') . '_' . mt_rand(0, 10000).$ext;  //构建不重复文件名
                $destination = $path."/".$realName;                         //拼接全路径     
                if(move_uploaded_file($val['tmp_name'], $destination)){
                    $val['name'] = $realName;
                    unset($val['error'],$val['tmp_name'],$val['size'],$val['type']);

                    // $uploadedFiles[$j]=$val;
                    $uploadedFiles[$key]=$destination;
                    // $re='上传的'.$uploadedFiles[$j]['name'].'图片成功';
                    // echo $re;
                    // echo '</br>';
                }
        
        
            }else {         //上传错误,提示码值
                switch ($val['error']) {
                    case 1:   // UPLOAD_ERR_INI_SIZE
                        $mes = "超过配置文件中上传文件的大小";
                        break;
                    case 2:   // UPLOAD_ERR_FORM_SIZE
                        $mes = "超过表单中配置文件的大小";
                        break;
                    case 3:   // UPLOAD_ERR_PARTIAL
                        $mes = "文件没有完全上传完";
                        break;
                    case 4:   // UPLOAD_ERR_NO_FILE
                        $mes = "未选择文件上传";
                        break;
                    case 6:   // UPLOAD_ERR_NO_TMP_DIR
                        $mes = "服务器繁忙,请稍后再试";
                        break;
                    case 7:   // UPLOAD_ERR_CANT_WRITE
                        $mes = "服务器繁忙,请稍后再试";
                        break;
                }
                echo $mes;
            }
        }

        return $uploadedFiles;
    }
}





