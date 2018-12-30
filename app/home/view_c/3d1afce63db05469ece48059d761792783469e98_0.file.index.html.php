<?php
/* Smarty version 3.1.29, created on 2018-09-17 10:40:21
  from "D:\usr\Study\project\tour\app\home\view\index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5b9f14151bdc32_77386796',
  'file_dependency' => 
  array (
    '3d1afce63db05469ece48059d761792783469e98' => 
    array (
      0 => 'D:\\usr\\Study\\project\\tour\\app\\home\\view\\index.html',
      1 => 1537147955,
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
function content_5b9f14151bdc32_77386796 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Common/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body> 
	<!-- banner -->
	<div class="banner">
		<!-- header -->
		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<!-- //header --> 

		<!-- banner-text -->
		<div class="banner-text"> 
			<div class="container">
				<div class="flexslider">
					<ul class="slides" >
						<li>
							<div class="banner-w3lstext">
								<h2>Welcome</h2>
								<p>背上行囊去远方，那个梦寐以求的目的地。<br>分享你的的旅途</p>
							</div>
						</li>
						<li>
							<div class="banner-w3lstext">
								<h3>Perspiciatis</h3>
								<p>一个背包，几本书,所有喜欢的歌,一张单程车票,一颗潇洒的心。<br>一个人的旅行，在路上遇见最真实的自己。</p>
							</div>
						</li>
						<li>
							<div class="banner-w3lstext">
								<h3>Enimipsam</h3>
								<p>旅游不在乎终点，而是在意途中的人和事还有那些完美的记忆和景色。</p>
							</div>
						</li>
					</ul> 
				</div> 	
				<!-- FlexSlider --> 
				<?php echo '<script'; ?>
 defer src="<?php echo C('domain.main');?>
/public/home/js/jquery.flexslider.js"><?php echo '</script'; ?>
>
				<?php echo '<script'; ?>
 type="text/javascript">
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				<?php echo '</script'; ?>
>
				<!-- End-slider-script -->
			</div>
		</div>
		<!-- //banner-text --> 
	</div>
	<!-- //banner -->
	<div>

	<!-- modal-about -->
	<div class="modal bnr-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div> 
				<div class="modal-body modal-spa">
					<h4>Blanditiis deleniti</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rutrum iaculis enim, non convallis felis mattis at. Donec fringilla lacus eu pretium rutrum. Cras aliquet congue ullamcorper. Etiam mattis eros eu ullamcorper volutpat. Proin ut dui a urna efficitur varius. uisque molestie cursus mi et congue consectetur adipiscing elit cras rutrum iaculis enim, Lorem ipsum dolor sit amet, non convallis felis mattis at. Maecenas sodales tortor ac ligula ultrices dictum et quis urna. Etiam pulvinar metus neque, eget porttitor massa vulputate in. Fusce lacus purus, pulvinar ut lacinia id, sagittis eu mi. Vestibulum eleifend massa sem, eget dapibus turpis efficitur at. Aliquam viverra quis leo et efficitur. Nullam arcu risus, scelerisque quis interdum eget, fermentum viverra turpis. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut At vero eos </p>
				</div> 
			</div>
		</div>
	</div>
	<!-- //modal-about --> 

	<!-- news -->
	<div class="news"> 
		<div class="container">
			<h3 class="w3agileits-title">推荐旅游日志</h3>
			<div class="new-agileinfo">
				<div class="col-md-4 news-left">
					<ul id="demo1_thumbs" class="list-inline"> 
					<!-- 推荐日志1 -->
					<?php
$_from = $_smarty_tpl->tpl_vars['rows']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_row_0_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$__foreach_row_0_saved_key = isset($_smarty_tpl->tpl_vars['rows_key']) ? $_smarty_tpl->tpl_vars['rows_key'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['rows_key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['rows_key']->value => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$__foreach_row_0_saved_local_item = $_smarty_tpl->tpl_vars['row'];
?>
						<li style="width:355px;height: 100px;"><a href="<?php echo C('domain.main');?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['picture'];?>
">
							
							<img src="<?php echo C('domain.main');?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['picture'];?>
" 
						<?php if ($_smarty_tpl->tpl_vars['wh']->value[$_smarty_tpl->tpl_vars['rows_key']->value][0] > $_smarty_tpl->tpl_vars['wh']->value[$_smarty_tpl->tpl_vars['rows_key']->value][1]) {?>
						style="width: 100px;"
						<?php } else { ?>
						style="height: 100px;"
						<?php }?>
							
							alt="" data-desoslide-caption="<h3><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</h3> <?php echo $_smarty_tpl->tpl_vars['row']->value['intro'];?>
 ">
							<div class="news-w3text">
								<h4 style="width:150px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</h4>
								<h6><i class="fa fa-calendar" aria-hidden="true"></i><?php echo date('d / m / Y',$_smarty_tpl->tpl_vars['row']->value['pubtime']);?>
</h6>	
								<p style="width:230px;height: 40px;overflow:hidden;text-overflow:ellipsis;white-space:normal;"><?php echo $_smarty_tpl->tpl_vars['row']->value['intro'];?>
</p>
							</div> 
						</a></li>
					<?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_local_item;
}
if ($__foreach_row_0_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_item;
}
if ($__foreach_row_0_saved_key) {
$_smarty_tpl->tpl_vars['rows_key'] = $__foreach_row_0_saved_key;
}
?>
					<!-- //推荐日志1 -->
					</ul>
				</div>
				<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo C('domain.main');?>
/public/admin/lib/jquery/1.9.1/jquery.min.js"><?php echo '</script'; ?>
> 

				<div id="demo1_main_image" class="col-md-8  news-right"></div>
			</div>    
			<link rel="stylesheet" href="<?php echo C('domain.main');?>
/public/home/css/jquery.desoslide.css">
			<?php echo '<script'; ?>
 src="<?php echo C('domain.main');?>
/public/home/js/jquery.desoslide.js"><?php echo '</script'; ?>
> 
			<?php echo '<script'; ?>
>
			$('#demo1_thumbs').desoSlide({
				main: {
					container: '#demo1_main_image',
					cssClass: 'img-responsive'
				},
				 effect: 'sideFade',
				caption: true
			});
			<?php echo '</script'; ?>
> 
		</div>
	</div>
	<!-- //news --> 

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
