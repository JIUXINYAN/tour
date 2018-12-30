<?php
/* Smarty version 3.1.29, created on 2018-09-17 10:26:03
  from "D:\usr\Study\project\tour\app\admin\view\User\userList.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5b9f10bb86e563_74198896',
  'file_dependency' => 
  array (
    '86c5f0a61796f172242db64b64eaff19af40ae9b' => 
    array (
      0 => 'D:\\usr\\Study\\project\\tour\\app\\admin\\view\\User\\userList.html',
      1 => 1537151155,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9f10bb86e563_74198896 ($_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<style type="text/css">
.pagination{
  text-align:center;
  padding:20px 0px;}

  .pagination li{
  display:inline;
  text-align:center;
  font-size:12px;
  color:#3E7CAC;
  padding-right:3px;
  font-weight:bold;}
</style>
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
<title>用户管理</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 管理员管理 <span class="c-gray en">&gt;</span> 用户列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="pd-20">

 <form method="post" action="<?php echo C('domain.main');?>
/index.php?p=admin&m=user&a=delMore">
  <div class="cl pd-5 bg-1 bk-gray mt-20">
    <span class="l">
      <!-- <a href="javascript:;" class="btn btn-danger radius"> -->
        <!-- <button type="submit" class="btn btn-danger radius">
        <i class="icon-trash">&#xe6e2;</i> 批量删除
      </button> -->
      <!-- <i class="icon-trash"></i> 批量删除 --><!-- </a> -->
      <!-- onclick="member_add('添加用户','member-add.html','','510')" -->
      <a href="javascript:;" onclick="member_add('添加用户','http://www.tour.com/index.php?p=admin&m=user&a=showAd','','510')" class="btn btn-primary radius"><i class="icon-plus"></i> 添加用户</a>
<!--       <a href="<?php echo C('domain.main');?>
/index.php?p=admin&m=user&a=showAd" onclick="user_add('550','800','添加用户','www.tour.com/index.php?p=admin&m=user&a=showAd')" class="btn btn-primary radius"><i class="icon-plus"></i> 添加用户</a>
 -->    </span>
    <span class="r">共有数据：<strong><?php echo count($_smarty_tpl->tpl_vars['rows']->value);?>
</strong> 条</span>
  </div>
  <table class="table table-border table-bordered table-hover table-bg table-sort">
    <thead>
      <tr class="text-c">
        <!-- <th width="25"><input type="checkbox" name="" value=""></th> -->
        <th width="80">ID</th>
        <th width="100">用户名</th>
        <th width="40">性别</th>
        
        <th width="150">昵称</th>
          <th width="70">个人简介</th>
        <th width="130">加入时间</th>
        <th width="100">是否为管理员</th>
        <th width="100">操作</th>
      </tr>
    </thead>
    <tbody>
      <?php
$_from = $_smarty_tpl->tpl_vars['rows']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_row_0_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$__foreach_row_0_saved_local_item = $_smarty_tpl->tpl_vars['row'];
?>
      <tr class="text-c">
        <!-- <td><input type="checkbox" value="" name=""></td> -->
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</td>
       
        <td><u style="cursor:pointer" class="text-primary" onclick="user_show('10001','360','','张三','user-show.html')"><?php echo $_smarty_tpl->tpl_vars['row']->value['acc'];?>
</u></td>
        <td><?php if ($_smarty_tpl->tpl_vars['row']->value['sex'] == 0) {?>女<?php } else { ?>男<?php }?></td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['nickname'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['own_intro'];?>
</td>
        <td><?php echo date('Y-m-d H:i',$_smarty_tpl->tpl_vars['row']->value['regtime']);?>
</td>
        <td><?php if ($_smarty_tpl->tpl_vars['row']->value['type'] == 0) {?>普通用户<?php } else { ?><span style="color:red">管理员用户</span><?php }?></td>
       <td>
        <a title="编辑" href="javascript:;" onclick="admin_edit('管理员编辑','http://www.tour.com/index.php?p=admin&m=user&a=showUpd&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
','','800','500')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> 
         <!-- <a href="<?php echo C('domain.main');?>
/index.php?p=admin&m=user&a=showUpd&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">编辑</a>&nbsp;&nbsp; -->
         <a href="<?php echo C('domain.main');?>
/index.php?p=admin&m=user&a=del&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">删除</a>
          <!-- <a title="删除" href="javascript:;" onclick="admin_del(this,'<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a> -->
       </td>
      </tr>
      <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_local_item;
}
if ($__foreach_row_0_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_item;
}
?>

    </tbody>
  </table>

    <ul class="pagination">
                        <!-- li><a href="#">上一页</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">6</a></li>
                        <li><a href="#">7</a></li>
                        <li><a href="#">8</a></li>
                        <li><a href="#">9</a></li>
                        <li><a href="#">下一页</a></li> -->
                  <!-- <?php echo $_smarty_tpl->tpl_vars['pageHtml']->value;?>
 -->
           </ul>


  <div id="pageNav" class="pageNav"></div>
</div>
</form>

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
<!-- <?php echo '<script'; ?>
 type="text/javascript"> -->
<?php echo '<script'; ?>
 type="text/javascript">

/*管理员-删除*/
function admin_del(obj,id){
  layer.confirm('确认要删除吗？',function(index){
    $.ajax({
      type: 'POST',
      url: 'http://www.tour.com/index.php?p=admin&m=user&a=del',
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

/*用户-编辑*/
function admin_edit(title,url,id,w,h){
  layer_show(title,url,w,h);
}

/*用户-添加*/
function member_add(title,url,w,h){
  layer_show(title,url,w,h);
}



<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
