<?php
/* Smarty version 3.1.29, created on 2018-09-17 10:44:06
  from "D:\usr\Study\project\tour\app\home\view\FeedBack\Feedback.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5b9f14f63b3ea1_93822881',
  'file_dependency' => 
  array (
    '0fc2ea3763158df492a814dc23b11c9c4be835c2' => 
    array (
      0 => 'D:\\usr\\Study\\project\\tour\\app\\home\\view\\FeedBack\\Feedback.html',
      1 => 1537148296,
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
function content_5b9f14f63b3ea1_93822881 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Common/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</head>
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
					<h2>意见反馈</h2>
				</div> 	 
			</div>
		</div>
		<!-- //banner-text --> 

	</div>
	<!-- //banner -->

	<!-- contact -->
	<!-- <div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158857.72810619872!2d-0.2416818539001213!3d51.528771841011256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2sin!4v1448548788199" allowfullscreen></iframe>
	</div> -->
	<div class="contact">
		<div class="container">
			<h3 class="w3agileits-title">写信给我</h3> 
			<div class="contact-info">	
				<div class="col-md-4 contact-grids">
					<div class="cnt-address">
						<h3 class="title1">地址</h3> 
						<p>xxxxxxxxx
						</p> 
						<p>
							E-mail: <a href="#">www.xxx.@163.com</a>
						</p>
					</div>
				</div>
				<div class="col-md-8 contact-grids">
					<h5>对于此网站的意见</h5>
					<p>好好说！已经是这么优秀的网站了还想提啥要求！好好说！已经是这么优秀的网站了还想提啥要求！好好说！已经是这么优秀的网站了还想提啥要求！好好说！已经是这么优秀的网站了还想提啥要求！</p>		
					<div class="contact-form">
						<form action="<?php echo C('domain.main');?>
/index.php?p=home&m=feedback&a=updh" method="post">
							<textarea name="content" placeholder="意见内容" required=""></textarea> <br> 
							<p class="form-submit">
							<!-- 如果用户登录后才允许发表  -->
							<?php if (isset($_SESSION['home'])) {?>
		                	<button type="submit" class="btn btn-default" style="width: 100%;">发　布</button>
		                	<?php } else { ?>
		                	您尚未登录！
		                	<?php }?>
		                	</p>
						</form> 
					</div>
				</div> 
				<div class="clearfix"> </div>
			</div>
		</div>
	</div> 
	<!-- //contact --> 
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
