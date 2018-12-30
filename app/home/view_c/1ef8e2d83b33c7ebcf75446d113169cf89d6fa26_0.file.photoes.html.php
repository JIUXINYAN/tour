<?php
/* Smarty version 3.1.29, created on 2018-10-16 16:06:34
  from "D:\PHP\project\tour\app\home\view\Photo\photoes.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5bc59c0a41cde9_36413162',
  'file_dependency' => 
  array (
    '1ef8e2d83b33c7ebcf75446d113169cf89d6fa26' => 
    array (
      0 => 'D:\\PHP\\project\\tour\\app\\home\\view\\Photo\\photoes.html',
      1 => 1537154489,
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
function content_5bc59c0a41cde9_36413162 ($_smarty_tpl) {
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
					<h2>相片</h2>
				</div> 	 
			</div>
		</div>
		<!-- //banner-text --> 
	</div>
	<!-- //banner -->
	<!-- gallery -->
<div class="gallery">
		<div class="container">  
			<h3 class="w3agileits-title">Our Trips</h3> 
			<div class="gallery-grids-top">
				<div class="gallery-grids">

					
					<!-- <?php
$_from = $_smarty_tpl->tpl_vars['row']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_val_0_saved_item = isset($_smarty_tpl->tpl_vars['val']) ? $_smarty_tpl->tpl_vars['val'] : false;
$_smarty_tpl->tpl_vars['val'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['val']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
$__foreach_val_0_saved_local_item = $_smarty_tpl->tpl_vars['val'];
?>
					<div class="col-md-4 col-sm-4 col-xs-6 gallery-grid-img hover ehover14"> 
						<a class="example-image-link" href="<?php echo $_smarty_tpl->tpl_vars['val']->value['picture'];?>
" data-lightbox="example-set" data-title="">
							<img class="example-image img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['val']->value['picture'];?>
"  style="width: 350px;
    height: 233px;" alt=""/> 
							<div class="overlay">
								<h4><?php echo $_smarty_tpl->tpl_vars['val']->value['intro'];?>
</h4>
							</div> 
						</a> 
					</div>  
					<?php
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_0_saved_local_item;
}
if ($__foreach_val_0_saved_item) {
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_0_saved_item;
}
?> -->



					<?php
$_from = $_smarty_tpl->tpl_vars['row']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_val_1_saved_item = isset($_smarty_tpl->tpl_vars['val']) ? $_smarty_tpl->tpl_vars['val'] : false;
$__foreach_val_1_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['val'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['val']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
$__foreach_val_1_saved_local_item = $_smarty_tpl->tpl_vars['val'];
?>
					<?php if ((($_smarty_tpl->tpl_vars['a']->value[$_smarty_tpl->tpl_vars['key']->value]+1)%5 == 1) || (($_smarty_tpl->tpl_vars['a']->value[$_smarty_tpl->tpl_vars['key']->value]+1)%5 == 2) || (($_smarty_tpl->tpl_vars['a']->value[$_smarty_tpl->tpl_vars['key']->value]+1)%5 == 3)) {?>

						<div class="col-md-4 col-sm-4 col-xs-6 gallery-grid-img hover ehover14"  style="width: 350px;height: 233px;"> 
							<a class="example-image-link" href="<?php echo $_smarty_tpl->tpl_vars['val']->value['picture'];?>
" data-lightbox="example-set" data-title="">
								<img class="example-image img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['val']->value['picture'];?>
" style="width: 350px;height: 233px;padding-bottom: 20px;"  alt=""/> 
								<div class="overlay">
									<h4><?php echo $_smarty_tpl->tpl_vars['val']->value['intro'];?>
</h4>
								</div> 
							</a> 
						</div>  
					<?php } elseif ((($_smarty_tpl->tpl_vars['a']->value[$_smarty_tpl->tpl_vars['key']->value]+1)%5 == 4) || (($_smarty_tpl->tpl_vars['a']->value[$_smarty_tpl->tpl_vars['key']->value]+1)%5 == 0)) {?>

						<div class="col-md-4 col-sm-4 col-xs-6 gallery-grid-img hover ehover14" style="width: 540px;height: 360px;" > 
							<a class="example-image-link" href="<?php echo $_smarty_tpl->tpl_vars['val']->value['picture'];?>
" data-lightbox="example-set" data-title="">
								<img class="example-image img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['val']->value['picture'];?>
" style="width: 540px;height: 360px;padding-bottom: 20px;"  alt=""/> 
								<div class="overlay">
									<h4><?php echo $_smarty_tpl->tpl_vars['val']->value['intro'];?>
</h4>
								</div> 
							</a> 
						</div>  
					<?php }?>
					<?php
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_1_saved_local_item;
}
if ($__foreach_val_1_saved_item) {
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_1_saved_item;
}
if ($__foreach_val_1_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_val_1_saved_key;
}
?>


















					<!-- <div class="col-md-4 col-sm-4 col-xs-6 gallery-grid-img hover ehover14">
						<a class="example-image-link" href="<?php echo C('domain.main');?>
/public/home/images/g2.jpg" data-lightbox="example-set" data-title="">
							<img class="example-image img-responsive" src="<?php echo C('domain.main');?>
/public/home/images/g2.jpg" alt=""/> 
							<div class="overlay">
								<h4>Gallery</h4>
							</div> 
						</a> 
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 gallery-grid-img hover ehover14">
						<a class="example-image-link" href="<?php echo C('domain.main');?>
/public/home/images/g3.jpg" data-lightbox="example-set" data-title="">
							<img class="example-image img-responsive" src="<?php echo C('domain.main');?>
/public/home/images/g3.jpg" alt=""/> 
							<div class="overlay">
								<h4>Gallery</h4>
							</div> 
						</a> 
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6 gallery-grid-img gallery-mdl hover ehover14"> 
						<a class="example-image-link" href="<?php echo C('domain.main');?>
/public/home/images/img2.jpg" data-lightbox="example-set" data-title="">
							<img class="example-image img-responsive" src="<?php echo C('domain.main');?>
/public/home/images/img2.jpg" alt=""/> 
							<div class="overlay">
								<h4>Gallery</h4>
							</div> 
						</a>
					</div>  
					<div class="col-md-6 col-sm-6 col-xs-6 gallery-grid-img gallery-mdl hover ehover14">
						<a class="example-image-link" href="<?php echo C('domain.main');?>
/public/home/images/img1.jpg" data-lightbox="example-set" data-title="">
							<img class="example-image img-responsive" src="<?php echo C('domain.main');?>
/public/home/images/img1.jpg" alt=""/>
							<div class="overlay">
								<h4>Gallery</h4>
							</div> 
						</a> 
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 gallery-grid-img hover ehover14"> 
						<a class="example-image-link" href="<?php echo C('domain.main');?>
/public/home/images/img3.jpg" data-lightbox="example-set" data-title="">
						<img class="example-image img-responsive" src="<?php echo C('domain.main');?>
/public/home/images/img3.jpg" alt=""/>
							<div class="overlay">
								<h4>Gallery</h4>
							</div> 
						</a> 
					</div>  
					<div class="col-md-4 col-sm-4 col-xs-6 gallery-grid-img hover ehover14">
						<a class="example-image-link" href="<?php echo C('domain.main');?>
/public/home/images/img4.jpg" data-lightbox="example-set" data-title="">
							<img class="example-image img-responsive" src="<?php echo C('domain.main');?>
/public/home/images/img4.jpg" alt=""/> 
							<div class="overlay">
								<h4>Gallery</h4>
							</div> 
						</a> 
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 gallery-grid-img hover ehover14">
						<a class="example-image-link" href="<?php echo C('domain.main');?>
/public/home/images/g2.jpg" data-lightbox="example-set" data-title="">
							<img class="example-image img-responsive" src="<?php echo C('domain.main');?>
/public/home/images/g2.jpg" alt=""/>
							<div class="overlay">
								<h4>Gallery</h4>
							</div> 
						</a>
					</div> -->	
					<div class="clearfix"> </div>	
				</div> 
			</div> 
		</div>
	</div>
	<!-- //gallery -->   
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
</body>
</html><?php }
}
