<?php
/* Smarty version 3.1.29, created on 2018-09-16 18:52:10
  from "D:\usr\Study\project\tour\app\admin\view\FeedBack\feedbackList.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5b9e35da595411_84520925',
  'file_dependency' => 
  array (
    '73d63bd5128f8993b616cf0a3c2441fb6f96370d' => 
    array (
      0 => 'D:\\usr\\Study\\project\\tour\\app\\admin\\view\\FeedBack\\feedbackList.html',
      1 => 1537095126,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9e35da595411_84520925 ($_smarty_tpl) {
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

<title>意见反馈</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> <a href="<?php echo C('domain.main');?>
/index.php?p=admin&m=comment&a=showList" style="text-decoration: none;">评论管理</a> <span class="c-gray en">&gt;</span> <span class=""><b>意见反馈</b></span> <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<form method="post" action="<?php echo C('domain.main');?>
/index.php?p=admin&m=feedback&a=dels">	
	
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
					<th width="50">全选&nbsp;<input type="checkbox"></th>
					<th width="60">ID</th>
					<th width="60">用户名</th>
					<th>留言内容</th>
					<th width="100">操作</th>
				</tr>
			</thead>
			<tbody>
			<?php
$_from = $_smarty_tpl->tpl_vars['feedbacks']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_feedback_0_saved_item = isset($_smarty_tpl->tpl_vars['feedback']) ? $_smarty_tpl->tpl_vars['feedback'] : false;
$_smarty_tpl->tpl_vars['feedback'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['feedback']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['feedback']->value) {
$_smarty_tpl->tpl_vars['feedback']->_loop = true;
$__foreach_feedback_0_saved_local_item = $_smarty_tpl->tpl_vars['feedback'];
?>
				<tr class="text-c">
					<td><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['feedback']->value['id'];?>
" name="del[]"></td>
					<td><?php echo $_smarty_tpl->tpl_vars['feedback']->value['id'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['feedback']->value['user_nickname'];?>
</td>
					<td class="text-l">
						<div class="c-999 f-12">
							<u style="cursor:pointer" class="text-primary" onclick="member_show('<?php echo $_smarty_tpl->tpl_vars['feedback']->value['user_nickname'];?>
','member-show.html','10001','360','400')"><?php echo $_smarty_tpl->tpl_vars['feedback']->value['user_nickname'];?>
</u> <span class="ml-20" style="float: right;"><?php echo date('Y-m-d',$_smarty_tpl->tpl_vars['feedback']->value['post_date']);?>
<br></span> 
						</div>
						<div><?php echo $_smarty_tpl->tpl_vars['feedback']->value['content'];?>
</div></td>
					<td class="td-manage"><a title="删除" href="<?php echo C('domain.main');?>
/index.php?p=admin&m=feedback&a=del&id=<?php echo $_smarty_tpl->tpl_vars['feedback']->value['id'];?>
"class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
				</tr>
			<?php
$_smarty_tpl->tpl_vars['feedback'] = $__foreach_feedback_0_saved_local_item;
}
if ($__foreach_feedback_0_saved_item) {
$_smarty_tpl->tpl_vars['feedback'] = $__foreach_feedback_0_saved_item;
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

<?php echo '</script'; ?>
>
</body>
</html><?php }
}
