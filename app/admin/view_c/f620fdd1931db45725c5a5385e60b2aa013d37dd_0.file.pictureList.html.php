<?php
/* Smarty version 3.1.29, created on 2018-09-17 10:20:12
  from "D:\PHP\project\tour\app\admin\view\Photo\pictureList.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5b9f0f5c5dfe30_54970941',
  'file_dependency' => 
  array (
    'f620fdd1931db45725c5a5385e60b2aa013d37dd' => 
    array (
      0 => 'D:\\PHP\\project\\tour\\app\\admin\\view\\Photo\\pictureList.html',
      1 => 1537150677,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9f0f5c5dfe30_54970941 ($_smarty_tpl) {
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
<title>图片列表</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 图片管理 <span class="c-gray en">&gt;</span> 图片列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	
<form method="post" action="<?php echo C('domain.main');?>
/index.php?p=admin&m=picture&a=delMore">
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l">
		<span class="l">
			<button type="submit" class="btn btn-danger radius">
				<i class="Hui-iconfont">&#xe6e2;</i> 批量删除
			</button> 
		</span> 
		<!-- <a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a>  --><!-- <a class="btn btn-primary radius" onclick="picture_add('添加图片','picture-add.html')" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加图片</a> --></span> <span class="r">共有数据：<strong><?php echo count($_smarty_tpl->tpl_vars['pics']->value);?>
</strong> 条</span> </div>
	<div class="mt-20">
		<table class="table table-border table-bordered table-bg table-hover table-sort">
			<thead>
				<tr class="text-c">
					<th width="40"><input name="" type="checkbox" value=""></th>
					<th width="80">ID</th>
					<th width="100">图片描述</th>
					<th width="150">图片路径</th>
					<th width="150">发图者</th>
					<th width="100">操作</th>
				</tr>
			</thead>
			<tbody>
				<?php
$_from = $_smarty_tpl->tpl_vars['pics']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_pic_0_saved_item = isset($_smarty_tpl->tpl_vars['pic']) ? $_smarty_tpl->tpl_vars['pic'] : false;
$_smarty_tpl->tpl_vars['pic'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['pic']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['pic']->value) {
$_smarty_tpl->tpl_vars['pic']->_loop = true;
$__foreach_pic_0_saved_local_item = $_smarty_tpl->tpl_vars['pic'];
?>
				<tr class="text-c">
					<td><input name="id[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['pic']->value['id'];?>
"></td>
					<td><?php echo $_smarty_tpl->tpl_vars['pic']->value['id'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['pic']->value['intro'];?>
</td>
					<td class="text-c"><img width="100" height="50" src="<?php echo C('domain.main');?>
/<?php echo $_smarty_tpl->tpl_vars['pic']->value['picture'];?>
" alt=""></td>
					<td class="text-c"><?php echo $_smarty_tpl->tpl_vars['pic']->value['user_nickname'];?>
</td>
					<td class="td-manage"><a style="text-decoration:none" class="ml-5" href="<?php echo C('domain.main');?>
/index.php?p=admin&m=picture&a=del&id=<?php echo $_smarty_tpl->tpl_vars['pic']->value['id'];?>
" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
				</tr>
				<?php
$_smarty_tpl->tpl_vars['pic'] = $__foreach_pic_0_saved_local_item;
}
if ($__foreach_pic_0_saved_item) {
$_smarty_tpl->tpl_vars['pic'] = $__foreach_pic_0_saved_item;
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
> <!--/_footer 作为公共模版分离出去-->

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
$('.table-sort').dataTable({
	"aaSorting": [[ 1, "desc" ]],//默认第几个排序
	"bStateSave": true,//状态保存
	"aoColumnDefs": [
	  //{
	  //"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
	  {
	  "orderable":false,"aTargets":[0,5]}// 制定列不参与排序
	]
});


/*图片-删除*/
function picture_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		$.ajax({
			type: 'POST',
			url: '',
			dataType: 'json',
			success: function(data){
				$(obj).parents("tr").remove();
				layer.msg('已删除!',{
					icon:1,time:1000});
			},
			error:function(data) {
				console.log(data.msg);
			},
		});		
	});
}
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
