<?php
/* Smarty version 3.1.29, created on 2018-09-17 09:41:17
  from "D:\PHP\project\tour\app\home\view\Privilege\signIn.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5b9f063d80ce92_12916660',
  'file_dependency' => 
  array (
    '347d93066712d3bb1875b2396953b9ecd22e7af0' => 
    array (
      0 => 'D:\\PHP\\project\\tour\\app\\home\\view\\Privilege\\signIn.html',
      1 => 1537148338,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Common/head.html' => 1,
    'file:Common/header.html' => 1,
    'file:Common/footer.html' => 1,
  ),
),false)) {
function content_5b9f063d80ce92_12916660 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Common/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
	<!-- banner -->
	<div class="banner w3about">

		<!-- header -->
		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<!-- //header --> 

		<!-- banner-text -->
		<div class="banner-text"> 
			<div class="container"> 
				<div class="banner-w3lstext">
					<h2>登录</h2>
				</div> 	 
			</div>
		</div>
		<!-- //banner-text --> 
	</div>
	<!-- //banner -->
	<!-- signIn -->
	<div class="about">
		<div class="container"> 
			<div class="login-form">
				<form action="<?php echo C('domain.main');?>
/?p=home&m=privilege&a=login" method="post">
					<div class="styled-input">
						<input type="text" name="acc" required=""/>
						<label>账户</label>
						<span></span>
					</div>
					<div class="styled-input">
						<input type="password" name="pwd" required=""> 
						<label>密码</label>
						<span></span>
					</div> 
					<div class="wthree-text"> 
						<ul> 
							<li>
								<input type="checkbox" id="brand" name="has7" value="yes">
								<label for="brand"><span></span>7天免登陆</label>  
							</li>
							
						</ul>
						<div class="clear"> </div>
					</div> 
					<input type="submit" value="登　录">		
				</form>
				<p>没有账号?<a href="<?php echo C('domain.main');?>
/?p=home&m=privilege&a=showSignUp" class="sign-in popup-top-anim"> 立即注册</a></p>
			</div>  
		</div>
	</div>
	<!-- //signIn -->   
	<!-- footer -->
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<!-- //footer --> 
	<!-- menu js -->
	<?php echo '<script'; ?>
>
		$('.toggle').on('click', function() {
			$('.menu').toggleClass('open');  
			$('.w3nav').toggleClass('show-w3nav');  
			$('.w3nav a').toggleClass('show-w3nav-link');  
			$('.toggle').toggleClass('close');  
		});
	<?php echo '</script'; ?>
>
	<!-- //menu js -->
	<!-- start-smooth-scrolling -->
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo C('domain.main');?>
/public/home/js/move-top.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo C('domain.main');?>
/public/home/js/easing.js"><?php echo '</script'; ?>
>	
	<?php echo '<script'; ?>
 type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({
				scrollTop:$(this.hash).offset().top
			},1000);
				});
			});
	<?php echo '</script'; ?>
>
	<!-- //end-smooth-scrolling -->
	<!-- smooth-scrolling-of-move-up -->
	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({
			 easingType: 'easeOutQuart' 
			});
			
		});
	<?php echo '</script'; ?>
>
	<!-- //smooth-scrolling-of-move-up --> 
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php echo '<script'; ?>
 src="<?php echo C('domain.main');?>
/public/home/js/bootstrap.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
