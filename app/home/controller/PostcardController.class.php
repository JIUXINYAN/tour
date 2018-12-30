<?php

namespace home\controller;
use \core\Controller;

class PostcardController extends Controller{
    public function showList()
    {
        //分页
            #当前页
        $now_page = isset($_GET['pa'])?$_GET['pa']:1;
            #每页条数
        $numPerPage = 5;
        //进行查询
        
            #查询出的文章的总数
        $sql = "select count(*) from tour_article";
        //echo $sql."<br>";
        $coms =intval(M('ArticleModel')->getRow($sql)['count(*)']);
            #查询出的文章的总页数
        $page = intval(ceil($coms/$numPerPage));
            #计算每页头一条的序号
        $p_val = ($now_page-1)*$numPerPage;
        

        #查询文章
        $sql = "select * from tour_article order by pubtime desc limit {$p_val},{$numPerPage}";
        $postcards = M('ArticleModel')->getRows($sql); 

        
        #查询图片    
        /*echo "<pre>";
        print_r($postcards);echo "<br>";
        print_r($photos);echo "<hr>";*/
        foreach ($postcards as $k => &$v) {
            $sql_p = "select * from tour_photo where user_id={$v['user_id']}";
            $v['photos'] = M('PhotoModel')->getRows($sql_p); 
            /*echo "<pre>";
            print_r($v);*/
        }
        //脚部的相册照片
        $sql = 'select picture from tour_photo order by id limit 4';
        $fpictures = M('PhotoModel')->getRows($sql);


        
        $this->assign('fpictures',$fpictures);
        $this->assign('page',$page);
        $this->assign('coms',$coms);
        $this->assign('p_val',$p_val);
        $this->assign('now_page',$now_page);
        $this->assign('postcards',$postcards);
        #渲染模板
		$this->display('Postcard/postcart.html');
    }

    public function showArticle()
    {
        $id = $_GET['id'];
        //分页
            #当前页
        $now_page = isset($_GET['pa'])?$_GET['pa']:1;
            #每页条数
        $numPerPage = 3;
        //进行查询
        
            #查询出的文章的总数
        $sql = "select count(*) from tour_comment where article_id={$id}";
        //echo $sql."<br>";
        $coms =intval(M('CommentModel')->getRow($sql)['count(*)']);
            #查询出的文章的总页数
        $page = intval(ceil($coms/$numPerPage));
            #计算每页头一条的序号
        $p_val = ($now_page-1)*$numPerPage;
        
        #查询文章
        $sql_a = "select * from tour_article where id={$id}";
        $article = M('ArticleModel')->getRow($sql_a);

        #查询评论
        $sql_c = "select * from tour_comment where article_id={$id} order by post_date desc limit {$p_val},{$numPerPage}";

        $comments = M('CommentModel')->getRows($sql_c); 
        //脚部的相册照片
        $sql = 'select picture from tour_photo order by id limit 4';
        $fpictures = M('PhotoModel')->getRows($sql);


        
        $this->assign('fpictures',$fpictures);

        $this->assign('article',$article);
        $this->assign('comments',$comments);
        $this->assign('page',$page);
        $this->assign('coms',$coms);
        $this->assign('p_val',$p_val);
        $this->assign('now_page',$now_page);
        #渲染模板
        $this->display('Article/articles.html');
    }

    public function pub()
    {
        $content = $_POST['content'];
        $post_date = time();
        $article = explode('|',$_POST['article']);
        $article_id = $article[0];
        $article_title = $article[1];
        $user_id = $_SESSION['home']['id'];
        $user_nickname = $_SESSION['home']['nickname'];

        $sql = "insert into tour_comment values(null,'{$content}',{$post_date},{$article_id},'{$article_title}',{$user_id},'{$user_nickname}')";
        $re = M('CommentModel')->setData($sql);
        if ($re) {
            echo "添加成功";
        }
        else{
            echo "服务器繁忙请稍后再试";
        }
        $url = C('domain.main') . "/index.php?p=home&m=postcard&a=showArticle&id={$article_id}";
        header('Refresh:1; url='.$url);
        exit;
    }
}