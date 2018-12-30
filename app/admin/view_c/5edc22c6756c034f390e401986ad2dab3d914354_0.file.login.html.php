<?php
/* Smarty version 3.1.29, created on 2018-09-14 11:19:12
  from "D:\usr\Study\project\tour\app\admin\view\Privilege\login.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5b9b28b0af7d11_47921956',
  'file_dependency' => 
  array (
    '5edc22c6756c034f390e401986ad2dab3d914354' => 
    array (
      0 => 'D:\\usr\\Study\\project\\tour\\app\\admin\\view\\Privilege\\login.html',
      1 => 1536844892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9b28b0af7d11_47921956 ($_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />

<link href="<?php echo C('domain.main');?>
/public/admin/static/h-ui/css/H-ui.min.css" rel="stylesheet" type="text/css" /> 
<link href="<?php echo C('domain.main');?>
/public/admin/static/h-ui.admin/css/H-ui.login.css" rel="stylesheet" type="text/css" />
<link href="<?php echo C('domain.main');?>
/public/admin/static/h-ui.admin/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo C('domain.main');?>
/public/admin/lib/Hui-iconfont/1.0.8/iconfont.css" rel="stylesheet" type="text/css" />


<title>后台登录 tour</title>

</head>
<body>
<div class="header"></div>
<div class="loginWraper">
  <div id="loginform" class="loginBox">
    <form class="form form-horizontal" action="<?php echo C('domain.main');?>
/index.php?p=admin&m=privilege&a=login" method="post">
      <div class="row cl">
        <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60d;</i></label>
        <div class="formControls col-xs-8">
          <input name="acc" type="text" placeholder="账户" class="input-text size-L">
        </div>
      </div>
      <div class="row cl">
        <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60e;</i></label>
        <div class="formControls col-xs-8">
          <input name="pwd" type="password" placeholder="密码" class="input-text size-L">
        </div>
      </div>
      <div class="row cl">
        <div class="formControls col-xs-8 col-xs-offset-3">
          <input name="captcha" class="input-text size-L" type="text" placeholder="验证码"  style="width:150px;">
          <img src="<?php echo C('domain.main');?>
/index.php?p=admin&m=privilege&a=captcha" width="200" height="40" > <div><a id="kanbuq" href="">看不清，换一张</a></div>
        </div>
      </div>
     
      <div class="row cl">
        <div class="formControls col-xs-8 col-xs-offset-3">
          <label for="online">
            <input type="checkbox" name="online7" id="online" value="yes">
            使我保持登录状态7天</label>
        </div>
      </div>
      <div class="row cl">
        <div class="formControls col-xs-8 col-xs-offset-3">
          <input name="" type="submit" class="btn btn-success radius size-L" value="&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;">
          <input name="" type="reset" class="btn btn-default radius size-L" value="&nbsp;取&nbsp;&nbsp;&nbsp;&nbsp;消&nbsp;">
        </div>
      </div>
    </form>
  </div>
</div>
<div class="footer">Copyright 你的公司名称 by H-ui.admin v3.1</div>

<?php }
}
