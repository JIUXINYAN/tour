<?php
/* Smarty version 3.1.29, created on 2018-09-17 10:31:22
  from "D:\usr\Study\project\tour\app\admin\view\User\userShow.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5b9f11fa8142d6_73836098',
  'file_dependency' => 
  array (
    '5109d0da53dcdb95cb97849caccfe76acced1ac9' => 
    array (
      0 => 'D:\\usr\\Study\\project\\tour\\app\\admin\\view\\User\\userShow.html',
      1 => 1537151476,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9f11fa8142d6_73836098 ($_smarty_tpl) {
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
<title>用户查看</title>
</head>
<body>
<div class="cl pd-20" style=" background-color:#5bacb6">
	<?php if ($_SESSION['admin']['headimg'] == '') {?>
	<img class="avatar size-XL l" src="<?php echo C('domain.main');?>
/public/admin/static/h-ui/images/ucnter/avatar-default.jpg">
	<?php } else { ?>
	<img class="avatar size-XL l" src="<?php echo C('domain.main');?>
/<?php echo $_SESSION['admin']['headimg'];?>
">
	<?php }?>	
	<dl style="margin-left:80px; color:#fff">
		<dt>
			<span class="f-18"><?php echo $_SESSION['admin']['nickname'];?>
</span>
			<!-- <span class="pl-10 f-12">余额：40</span> -->
		</dt>
		<?php if ($_SESSION['admin']['own_intro'] == '') {?>
		<dd class="pt-10 f-12" style="margin-left:0">这家伙很懒，什么也没有留下</dd>
		<?php } else { ?>
		<dd class="pt-10 f-12" style="margin-left:0"><?php echo $_SESSION['admin']['own_intro'];?>
</dd>
		<?php }?>
	</dl>
</div>
<div class="pd-20">
	<table class="table">
		<tbody>
			<tr>
				<th class="text-r">账号：</th>
				<td><?php echo $_SESSION['admin']['acc'];?>
</td>
			</tr>
			<tr>
				<th class="text-r">昵称：</th>
				<td><?php echo $_SESSION['admin']['nickname'];?>
</td>
			</tr>
			<tr>
				<th class="text-r" width="80">性别：</th>
				<?php if ('sex' == 1) {?>
				<td>男</td>
				<?php } else { ?>
				<td>女</td>
				<?php }?>				
			</tr>
			
			<!-- <tr>
				<th class="text-r">邮箱：</th>
				<td>admin@mail.com</td>
			</tr>
			<tr>
				<th class="text-r">地址：</th>
				<td>北京市 海淀区</td>
			</tr> -->
			<tr>
				<th class="text-r">注册时间：</th>
				<td><?php echo date('Y-m-d',$_SESSION['admin']['regtime']);?>
</td>
			</tr>
			<!-- <tr>
				<th class="text-r">积分：</th>
				<td>330</td>
			</tr> -->
		</tbody>
	</table>
</div>
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
> 
<!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
</body>
</html><?php }
}
