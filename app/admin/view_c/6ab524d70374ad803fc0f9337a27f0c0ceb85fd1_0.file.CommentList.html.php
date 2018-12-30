<?php
/* Smarty version 3.1.29, created on 2018-09-16 18:51:22
  from "D:\usr\Study\project\tour\app\admin\view\Comment\CommentList.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5b9e35aa526d39_86786633',
  'file_dependency' => 
  array (
    '6ab524d70374ad803fc0f9337a27f0c0ceb85fd1' => 
    array (
      0 => 'D:\\usr\\Study\\project\\tour\\app\\admin\\view\\Comment\\CommentList.html',
      1 => 1537095077,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9e35aa526d39_86786633 ($_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo C('domain.main');?>
/public/admin/lib/html5shiv.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo C('domain.main');?>
/public/admin/lib/respond.min.js"><?php echo '</script'; ?>
>
<![endif]-->
<link rel="stylesheet" type="text/css" href="<?php echo C('domain.main');?>
/public/admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo C('domain.main');?>
/public/admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="<?php echo C('domain.main');?>
/public/admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="<?php echo C('domain.main');?>
/public/admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="<?php echo C('domain.main');?>
/public/admin/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo C('domain.main');?>
/public/admin/lib/DD_belatedPNG_0.0.8a-min.js" ><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>DD_belatedPNG.fix('*');<?php echo '</script'; ?>
>
<![endif]-->

<title>用户评论</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> <span class=""><b>评论管理</b> </div> <span class="c-gray en">&gt;</span> <span class=""><a style="text-decoration: none;" href="<?php echo C('domain.main');?>
/index.php?p=admin&m=feedback&a=showList">意见反馈</a></span><a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<form method="post" action="<?php echo C('domain.main');?>
/index.php?p=admin&m=comment&a=dels">	
	<div class="cl pd-5 bg-1 bk-gray mt-20"> 
		<span class="l">
			<button type="submit" class="btn btn-danger radius">
				<i class="Hui-iconfont">&#xe6e2;</i> 批量删除
			</button> 
		</span> 
		<span class="r">共有数据：<strong><?php echo $_smarty_tpl->tpl_vars['tot']->value;?>
</strong> 条</span> 
	</div> 
	
	<div class="mt-20">
		<table class="table table-border table-bordered table-hover table-bg table-sort">
			<thead>
				<tr class="text-c">
					<th width="25">全选&nbsp;<input type="checkbox"></th>
					<th width="25">评论ID</th>
					<th width="60">用户名</th>
					<th width="60">文章题目</th>
					<th width="60">评论内容</th>
					<th width="100">操作</th>
				</tr>
			</thead>
			<tbody>
			<?php
$_from = $_smarty_tpl->tpl_vars['comments']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_comment_0_saved_item = isset($_smarty_tpl->tpl_vars['comment']) ? $_smarty_tpl->tpl_vars['comment'] : false;
$_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['comment']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
$__foreach_comment_0_saved_local_item = $_smarty_tpl->tpl_vars['comment'];
?>
				<tr class="text-c">
					<td><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['comment']->value['id'];?>
" name="del[]"></td>
					<td><?php echo $_smarty_tpl->tpl_vars['comment']->value['id'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['comment']->value['user_nickname'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['comment']->value['article_title'];?>
</td>
					<td class="text-l">
						<div class="c-999 f-12">
							<span class="ml-20" style="float: right;"><?php echo date('Y-m-d',$_smarty_tpl->tpl_vars['comment']->value['post_date']);?>
<br></span> 
						</div>
						<div><?php echo $_smarty_tpl->tpl_vars['comment']->value['content'];?>
</div></td>
					<td class="td-manage"><a title="删除" href="<?php echo C('domain.main');?>
/index.php?p=admin&m=comment&a=del&id=<?php echo $_smarty_tpl->tpl_vars['comment']->value['id'];?>
"class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
				</tr>
			<?php
$_smarty_tpl->tpl_vars['comment'] = $__foreach_comment_0_saved_local_item;
}
if ($__foreach_comment_0_saved_item) {
$_smarty_tpl->tpl_vars['comment'] = $__foreach_comment_0_saved_item;
}
?>
			</tbody>
		</table>
	</div>
</div>
</form>

<!--_footer 作为公共模版分离出去-->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo C('domain.main');?>
/public/admin/lib/jquery/1.9.1/jquery.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo C('domain.main');?>
/public/admin/lib/layer/2.4/layer.js"><?php echo '</script'; ?>
>  
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo C('domain.main');?>
/public/admin/static/h-ui/js/H-ui.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo C('domain.main');?>
/public/admin/static/h-ui.admin/js/H-ui.admin.js"><?php echo '</script'; ?>
> <!--/_footer /作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo C('domain.main');?>
/public/admin/lib/My97DatePicker/4.8/WdatePicker.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo C('domain.main');?>
/public/admin/lib/datatables/1.10.0/jquery.dataTables.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo C('domain.main');?>
/public/admin/lib/laypage/1.2/laypage.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
$(function(){
	$('.table-sort').dataTable({
		"aaSorting": [[ 1, "desc" ]],//默认第几个排序
		"bStateSave": true,//状态保存
		"aoColumnDefs": [
		  //{
		  //"bVisible": false, "aTargets": [ 3 ]
		  //} //控制列的隐藏显示
		  {
		  	"orderable":false,"aTargets":[0,2,4]
		  }// 制定列不参与排序
		]
	});

});
/*用户-添加*/
function member_add(title,url,w,h){
	layer_show(title,url,w,h);
}
/*用户-查看*/
function member_show(title,url,id,w,h){
	layer_show(title,url,w,h);
}

<?php echo '</script'; ?>
>
</body>
</html><?php }
}
