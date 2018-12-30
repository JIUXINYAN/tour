<?php
/* Smarty version 3.1.29, created on 2018-09-17 09:27:33
  from "D:\PHP\project\tour\app\home\view\Common\header.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5b9f030508ec69_94402743',
  'file_dependency' => 
  array (
    '9194aff2c6fcbb12a1b8d0e1b66f7af29f4062c9' => 
    array (
      0 => 'D:\\PHP\\project\\tour\\app\\home\\view\\Common\\header.html',
      1 => 1537147647,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9f030508ec69_94402743 ($_smarty_tpl) {
?>

<!-- header -->
	<div class="header">
			<div class="container">
				<div class="header-w3lsrow"> 
					<div class="menu"> 
						<div class="toggle"></div> 
						<ul class="w3nav">
							<li><a href="<?php echo C('domain.main');?>
/?p=home&m=index&a=showIndex">主页</a></li>
							<li><a href="<?php echo C('domain.main');?>
/?p=home&m=postcard&a=showList">明信片</a>
							</li> 
							<li><a href="<?php echo C('domain.main');?>
/?p=home&m=photo&a=showList">相片</a></li> 
							<li><a href="<?php echo C('domain.main');?>
/?p=home&m=feedback&a=showAd">意见反馈</a></li>
						</ul>
						<div class="clearfix"> </div>
					</div> 
					<div class="logo">
						<h1><a href="<?php echo C('domain.main');?>
/?p=home&m=index&a=showIndex">home</a></h1>
					</div> 

					<?php if (isset($_COOKIE['user_id'])) {?>
					<div class="header-right" >
						<p style="display: inline-block;color: #fff; font-size: 18px;">
						欢迎 <?php echo $_COOKIE['user_nickname'];?>
登陆旅游博客系统</p>&nbsp;
						<!-- <div style="display: inline-block; background-color: #fff; width: 200px;height: 72px;">
							<a href="#" class="w3layouts-more" style="" data-toggle="modal" data-target="#myModal">Read More</a>
						</div> -->
						<a href="<?php echo C('domain.main');?>
/?p=home&m=privilege&a=logout" name="logout" class="btn btn-default">退出登录</a> 
					</div>

					<?php } else { ?>
					<div class="header-right">   
						<ul>
							<li><a href="<?php echo C('domain.main');?>
/?p=home&m=privilege&a=showLogin">登录</a></li>
							<li><a href="<?php echo C('domain.main');?>
/?p=home&m=privilege&a=showSignUp">注册</a></li> 
						</ul>
						<div class="clearfix"> </div> 
					</div>
					<div class="clearfix"> </div>
					<?php }?>

				</div>
			</div>

		</div>
<!-- //header --> <?php }
}
