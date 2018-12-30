<?php
/* Smarty version 3.1.29, created on 2018-09-17 10:14:16
  from "D:\PHP\project\tour\app\admin\view\Photo\photoes.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5b9f0df859ad79_27342597',
  'file_dependency' => 
  array (
    '466d9c96944d568aba1630a1368d64460f5114e9' => 
    array (
      0 => 'D:\\PHP\\project\\tour\\app\\admin\\view\\Photo\\photoes.html',
      1 => 1537146446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Common/head.html' => 1,
    'file:Common/header.html' => 1,
  ),
),false)) {
function content_5b9f0df859ad79_27342597 ($_smarty_tpl) {
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

					
					<?php
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
					<?php echo '<script'; ?>
 src="<?php echo C('domain.main');?>
/public/home/<?php echo C('domain.main');?>
/public/home/js/lightbox-plus-jquery.min.js"><?php echo '</script'; ?>
>	
				</div> 
			</div> 
		</div>
	</div>
	<!-- //gallery -->   
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="col-md-4 footer-grids">
				<h3>Review</h3>
				<p>Sed ut turpis elit ullamcorper in auctor non, accumsan vel lacus nulla auctor cursus nunc. Maecenas ultricies dolor in urna tempus, id egestas erat finibus  interdum lectus eget scelerisque.</p>
			</div>
			<div class="col-md-3 footer-grids">
				<h3>Contact Us</h3>
				<p>123 NewYork City USA.<br>
					<span>Office: 908-0000</span>
				</p>
				<div class="footer-bottom">
					<a href="#"><i class="fa fa-facebook"> </i><span>Facebook</span></a>
					<a href="#"><i class="fa fa-twitter"> </i><span>Twitter</span></a>
					<a href="#"><i class="fa fa-google-plus"> </i><span>Google +</span></a>
					<a href="#"><i class="fa fa-dribbble"> </i><span>Dribbble</span></a>
				</div>
			</div>
			<div class="col-md-5 footer-grids">
				<h3>Flickr</h3>
				<a  class="footer-img" href=""><img src="<?php echo C('domain.main');?>
/public/home/images/i4.jpg" alt=""></a>
				<a class="footer-img" href=""><img src="<?php echo C('domain.main');?>
/public/home/images/i2.jpg" alt=""></a>
				<a class="footer-img" href=""><img src="<?php echo C('domain.main');?>
/public/home/images/i3.jpg" alt=""></a>
			</div>
			<div class="clearfix"> </div>
			<div class="footer-copy">
				<p>Copyright &copy; 2017.Company name All rights reserved.<a target="_blank" href="http://www.17sucai.com/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
			</div>
		</div>
	</div>
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
/public/home/<?php echo C('domain.main');?>
/public/home/js/move-top.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo C('domain.main');?>
/public/home/<?php echo C('domain.main');?>
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
/public/home/<?php echo C('domain.main');?>
/public/home/js/bootstrap.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
