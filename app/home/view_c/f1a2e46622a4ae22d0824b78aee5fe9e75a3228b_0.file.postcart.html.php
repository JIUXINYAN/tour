<?php
/* Smarty version 3.1.29, created on 2018-09-17 09:39:14
  from "D:\PHP\project\tour\app\home\view\Postcard\postcart.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5b9f05c2250d56_30361309',
  'file_dependency' => 
  array (
    'f1a2e46622a4ae22d0824b78aee5fe9e75a3228b' => 
    array (
      0 => 'D:\\PHP\\project\\tour\\app\\home\\view\\Postcard\\postcart.html',
      1 => 1537148139,
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
function content_5b9f05c2250d56_30361309 ($_smarty_tpl) {
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
		<!-- <div class="banner-text"> 
			<div class="container"> 
				<div class="banner-w3lstext" >
					<h2>所有明信片</h2>
				</div> 	 
			</div>
		</div> -->
		<!-- //banner-text --> 
	</div>
	<!-- //banner -->
	<div>

	<!-- welcome -->
	 <div class="welcome"> 
	
		<div class="container">
			<div class="col-md-7 welcome-w3lleft">
				<h3>所有明信片</h3>
				<h5>下面是所有旅游爱好者发的旅游明信片，带我们领略这个美丽而神秘的世界</h5>
				<p>
				在什刹海边散步直到天空变成淡紫色。跳上手划船便倚在船尾，徐徐的风带着水的味道，心情立刻松弛下来。必须说的话，必须有的面具，必须挤出的微笑，沉沉压着的顾虑和思念，在这一池春波面前，都可卸掉不理。这一刻，只要做我就好。甩掉鞋子，以清清之水濯我足，听着两人吱呀吱呀的摇橹声，看着粼粼波光和不远处的点点灯火，顿觉时间停止，心情平静得几乎掉泪。我是谁，在哪个朝代，爱什么人，为何人所爱，想去什么样的地方，想过什么样的生活，这一切，我全都忘了，只记得新月如钩，慢慢蓝下去暗下去的天空一点星也无，心中传来杳杳的歌声。
				</p>  
			</div>  
	
			<div class="col-md-5 welcome-w3lright">
				<div class="welcome-grids">
					<div class="service-box">
					<a href="<?php echo C('domain.main');?>
/index.php?p=home&m=feedback&a=showAd" style="display: inline-block;">
						<div class="agileits-wicon">
							<i class="fa fa-envelope"></i>
						</div>
						<h5>意见反馈</h5> 
					</a>
					</div> 
					<div class="clearfix"> </div>
				</div>
				<div class="welcome-grids">
					<div class="col-md-6 col-sm-6 col-xs-6 service-box">
					<a href="<?php echo C('domain.main');?>
/index.php?p=home&m=photo&a=showList" style="display: inline-block;">
						<div class="agileits-wicon">
							<i class="fa fa-picture-o"></i>
						</div>
						<h5>相　册</h5> 
					</a>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6 service-box">
						<div class="agileits-wicon">
							<i class="fa fa-music"></i>
						</div>
						<h5>开启/关闭</h5> 
					</div>
					<div class="clearfix"> </div>
				</div>
			</div> 
			<div class="clearfix"> </div>
		</div> 
	</div>
	<!-- //welcome -->
	
	<!-- postcard -->
	<div class="trips" style="padding-top: 120px;"> 
	<?php
$_from = $_smarty_tpl->tpl_vars['postcards']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_postcard_0_saved_item = isset($_smarty_tpl->tpl_vars['postcard']) ? $_smarty_tpl->tpl_vars['postcard'] : false;
$_smarty_tpl->tpl_vars['postcard'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['postcard']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['postcard']->value) {
$_smarty_tpl->tpl_vars['postcard']->_loop = true;
$__foreach_postcard_0_saved_local_item = $_smarty_tpl->tpl_vars['postcard'];
?>
		<!-- 明信片1 -->
		<div class="container" style="margin-bottom: 100px;"> 
			<div class="trips-agileinfo" > 
				<a href="">
				<!-- 明信片图片 -->
				<div class="col-md-6 trip-agileitsimg" style="background:url(../../../<?php echo $_smarty_tpl->tpl_vars['postcard']->value['picture'];?>
) no-repeat center 0px;"> 
				</div></a>
				<!-- 明信片内容 -->
				<div style="position: relative;" class="col-md-6 trip-agileitstext welcome-w3lleft">
					<a href="" ><h3><?php echo $_smarty_tpl->tpl_vars['postcard']->value['title'];?>
</h3></a>
					<h5><?php echo $_smarty_tpl->tpl_vars['postcard']->value['user_nickname'];?>
</h5>


					<p style="width: 500px;height: 70px;"><?php echo $_smarty_tpl->tpl_vars['postcard']->value['intro'];?>
</p> 
					<div class="owl-demo owl-carousel owl-theme"> <!-- 滑动版 -->
						<?php
$_from = $_smarty_tpl->tpl_vars['postcard']->value['photos'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_photo_1_saved_item = isset($_smarty_tpl->tpl_vars['photo']) ? $_smarty_tpl->tpl_vars['photo'] : false;
$_smarty_tpl->tpl_vars['photo'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['photo']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->value) {
$_smarty_tpl->tpl_vars['photo']->_loop = true;
$__foreach_photo_1_saved_local_item = $_smarty_tpl->tpl_vars['photo'];
?>
						<div class="item agile-item">
							<a href="<?php echo C('domain.main');?>
/index.php?p=home&m=photo&a=showList" style="display: inline-block;">
						 		<img src="<?php echo C('domain.main');?>
/<?php echo $_smarty_tpl->tpl_vars['photo']->value['picture'];?>
" width="100" height="100" class="trip-w3img" alt=""/>  
						 	</a>
						</div> 
						<?php
$_smarty_tpl->tpl_vars['photo'] = $__foreach_photo_1_saved_local_item;
}
if ($__foreach_photo_1_saved_item) {
$_smarty_tpl->tpl_vars['photo'] = $__foreach_photo_1_saved_item;
}
?>
						
					</div> 
					<div class="icon-box col-md-3 col-sm-4" style="width: 100px;height: 50px;float: right; position: relative;top: 26px;left: 10px;"><a class="agile-icon" href="<?php echo C('domain.main');?>
/?p=home&m=postcard&a=showArticle&id=<?php echo $_smarty_tpl->tpl_vars['postcard']->value['id'];?>
" style="font-size: 14px; font-weight: bold;"><i class="fa fa-toggle-right"></i>开 启</a></div>

				</div>
				<div class="clearfix"></div>
			</div>
		</div> 
		<?php
$_smarty_tpl->tpl_vars['postcard'] = $__foreach_postcard_0_saved_local_item;
}
if ($__foreach_postcard_0_saved_item) {
$_smarty_tpl->tpl_vars['postcard'] = $__foreach_postcard_0_saved_item;
}
?>
		<!-- //明信片1 -->

	<!-- 分页 -->
        <div align="center">
			<ul class="pagination pagination-lg">
				<li>
				<?php if ($_smarty_tpl->tpl_vars['now_page']->value == 1) {?>
				<a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a>
				<?php } else { ?>
				<a href="<?php echo C('domain.main');?>
/index.php?p=home&m=postcard&a=showList&id=13&pa=<?php echo $_smarty_tpl->tpl_vars['now_page']->value-1;?>
" aria-label="Previous"><span aria-hidden="true">«</span></a>
				<?php }?>
				</li>
				<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['page']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['page']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
					<li><a href="<?php echo C('domain.main');?>
/index.php?p=home&m=postcard&a=showList&id=13&pa=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
				<?php }
}
?>

				<?php if ($_smarty_tpl->tpl_vars['now_page']->value == $_smarty_tpl->tpl_vars['page']->value) {?>
				<li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
				<?php } else { ?>
				<li><a href="<?php echo C('domain.main');?>
/index.php?p=home&m=postcard&a=showList&id=13&pa=<?php echo $_smarty_tpl->tpl_vars['now_page']->value+1;?>
" aria-label="Next"><span aria-hidden="true">»</span></a></li>
				<?php }?>
			</ul>
		</div>
        <!-- 分页结束 -->
	</div> 
	<!-- //postcard -->
	

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

	<?php echo '<script'; ?>
 src="<?php echo C('domain.main');?>
/public/home/js/owl.carousel.js"><?php echo '</script'; ?>
>
	
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

	<?php echo '<script'; ?>
>
		$(document).ready(function() { 
			$(".owl-demo").owlCarousel({ 
			  autoPlay: 3000, //Set AutoPlay to 3 seconds
		 
			  items : 3,
			  itemsDesktop : [768,3],
			  itemsDesktopSmall : [414,4]
		 
			});
		}); 
	<?php echo '</script'; ?>
>

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
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
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
