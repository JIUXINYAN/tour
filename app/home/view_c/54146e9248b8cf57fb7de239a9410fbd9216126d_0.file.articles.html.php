<?php
/* Smarty version 3.1.29, created on 2018-09-17 20:35:25
  from "D:\PHP\project\tour\app\home\view\Article\articles.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5b9f9f8d030f60_96662507',
  'file_dependency' => 
  array (
    '54146e9248b8cf57fb7de239a9410fbd9216126d' => 
    array (
      0 => 'D:\\PHP\\project\\tour\\app\\home\\view\\Article\\articles.html',
      1 => 1537154939,
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
function content_5b9f9f8d030f60_96662507 ($_smarty_tpl) {
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
					<h2 style="font-size: 50px; position: relative;top: 30px;"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h2>
				</div> 	 
			</div>
		</div>
		<!-- //banner-text --> 
	</div>
	<!-- //banner -->

	<!-- about -->
	<div class="about" style="font-size: 20px;">
		<div class="container"> 
			<div class="about-w3ls-row"> 
				<!-- <div class="col-md-5 about-left">
					<img width="600" height="400" src="<?php echo C('domain.main');?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['picture'];?>
" class="img-responsive" alt=""/>
				</div> -->

				<div class="col-md-7" style="width: 1000px; margin-left: auto;margin-right: auto;float: none;"> 
					<div class="about-agile-row">
						<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
							<ul id="myTab" class=" nav-tabs" style="margin-left: auto;margin-right: auto;text-align: center;" role="tablist">
								<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">简介</a></li>
								<li role="presentation"><a href="#carl" role="tab" id="carl-tab" data-toggle="tab" aria-controls="carl">文章</a></li>
							</ul>
							<div class="clearfix"> </div>
							<div id="myTabContent" class="tab-content">
								<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
									<div class="tabcontent-grids" style="margin-bottom: 50px;">
										<p class="about-right" style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['article']->value['intro'];?>
</p>
									</div>
									<div style="text-align: center;">
										<img src="<?php echo C('domain.main');?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['picture'];?>
" alt=""/>
									</div>
								</div>
								<div role="tabpanel" class="tab-pane fade" id="carl" aria-labelledby="carl-tab">
									<div class="tabcontent-grids" style="text-align: center;">
										<p><?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>
</p>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div> 
				<div class="clearfix"> </div> 
			</div>
		</div>
	</div>
	<!-- //about -->

	<!-- services -->
	<div class="services agileits-bar"> 
		<div class="container">	 
			<h3 class="w3agileits-title">评论</h3> 
			<!-- <div class="services-w3ls-row"> 
				<div class="bar_group"> 
					<div class='bar_group__bar thin' label='Lorem ipsum &nbsp;&nbsp; 80%' value='200'></div>
					<div class='bar_group__bar thin' label='Quis nostrud &nbsp;&nbsp; 100%' value='250'></div>
					<div class='bar_group__bar thin' label='Sed do eiusmod &nbsp;&nbsp; 72%' value='180'></div>
					<div class='bar_group__bar thin' label='Ut enim adnim &nbsp;&nbsp; 88%' value='220'></div>  
				</div> 
				<?php echo '<script'; ?>
 src="js/bars.js"><?php echo '</script'; ?>
>
			</div>	-->
			<div class=" welcome-w3lleft" style="width: 100%;"> 
			<?php if ($_smarty_tpl->tpl_vars['coms']->value == 0) {?>
				<h4 style="color: #aaa;">快来抢沙发~该文章暂时还没有评论哟~</h4>
				
			<?php } else { ?>
				<h4 style="color: #aaa;">共有<?php echo $_smarty_tpl->tpl_vars['coms']->value;?>
条评论</h4>

				<!-- Comment -->
				<?php
$_from = $_smarty_tpl->tpl_vars['comments']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_comment_0_saved_item = isset($_smarty_tpl->tpl_vars['comment']) ? $_smarty_tpl->tpl_vars['comment'] : false;
$_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['comment']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
$__foreach_comment_0_saved_local_item = $_smarty_tpl->tpl_vars['comment'];
?>
	            <div class="well comment"> <!-- 每个用户 -->
	             	<div class="comment-meta" style="height: 30px;margin-bottom: 6px;">
	                	<div class="column"> <!-- 用户信息 -->
	                  		<span class="comment-autor" style="float:left;" ><i class="fa fa-user"></i> <a href="#"><?php echo $_smarty_tpl->tpl_vars['comment']->value['user_nickname'];?>
</a></span>
	                	</div>
	                	<div class="column" style="float: right;"> <!-- 创建时间 -->
	                 		<span class="comment-date"><?php echo date('Y-m-d',$_smarty_tpl->tpl_vars['comment']->value['post_date']);?>
</span>
	               		</div>
	            	</div>
	              	<!-- .comment-meta -->
	              	<div class="comment-body"> <!-- 评论内容 -->
	                	<p><?php echo $_smarty_tpl->tpl_vars['comment']->value['content'];?>
</p>
	              	</div>
	              	<!-- .comment-body -->
	            </div>
	            <?php
$_smarty_tpl->tpl_vars['comment'] = $__foreach_comment_0_saved_local_item;
}
if ($__foreach_comment_0_saved_item) {
$_smarty_tpl->tpl_vars['comment'] = $__foreach_comment_0_saved_item;
}
?>
	            <!-- .comment -->
	        

	            <!-- 分页 -->
	            <div align="center">
					<ul class="pagination pagination-lg">
						<li>
						<?php if ($_smarty_tpl->tpl_vars['now_page']->value == 1) {?>
						<a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a>
						<?php } else { ?>
						<a href="<?php echo C('domain.main');?>
/index.php?p=home&m=postcard&a=showArticle&id=13&pa=<?php echo $_smarty_tpl->tpl_vars['now_page']->value-1;?>
" aria-label="Previous"><span aria-hidden="true">«</span></a>
						<?php }?>
						</li>
						<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['page']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['page']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
							<li><a href="<?php echo C('domain.main');?>
/index.php?p=home&m=postcard&a=showArticle&id=13&pa=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
						<?php }
}
?>

						<?php if ($_smarty_tpl->tpl_vars['now_page']->value == $_smarty_tpl->tpl_vars['page']->value) {?>
						<li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
						<?php } else { ?>
						<li><a href="<?php echo C('domain.main');?>
/index.php?p=home&m=postcard&a=showArticle&id=13&pa=<?php echo $_smarty_tpl->tpl_vars['now_page']->value+1;?>
" aria-label="Next"><span aria-hidden="true">»</span></a></li>
						<?php }?>
					</ul>
				</div>
	            <!-- 分页结束 -->
	        <?php }?>

	            <!-- 发表评论 -->
				<div class="well" style="margin-top: 50px;">
		            <h4 class="comment-reply-title" style="color: #aaa;">发布新评论</h4>
		            <form method="post" id="comment-form" class="comment-form" action="<?php echo C('domain.main');?>
/index.php?p=home&m=postcard&a=pub">
						<input type="hidden" name="article" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
|<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
"/>
		                <div class="form-group">
		                 	<label for="cf_comment" class="sr-only">Comment</label>
		                  	<textarea name="content" id="cf_comment" class="form-control input-alt" rows="7" placeholder="输入您的评论"></textarea>
		                </div>            
		                <p class="form-submit">
		                <?php if (isset($_SESSION['home'])) {?>
						<!-- 如果用户登录后才允许发表 --> 
		                <button type="submit" class="btn btn-default" style="width: 100%;">发　布</button>
		                <?php } else { ?>
		                您尚未登录！
		                <?php }?>
		                </p>
		            </form>
		        </div>
				<!-- 发表评论 --> 
			</div> 		
		</div>	 
	</div>			
	<!-- //services -->

	<!-- team -->
	<div class="team agileits">
		<div class="team-info">
			<div class="container">
				<h3 class="w3agileits-title">Our Team</h3> 
				<div class="team-row">

					<div class="col-md-3 col-sm-6 col-xs-6 team-grids" style="width: 20%;">
						<div class="team-agile-img"> 
							<a href="#"><img src="<?php echo C('domain.main');?>
/public/home/images/xxq.jpg" alt="img"></a>
							<div class="view-caption">
								<div class="w3ls-info">
									<h4>薛贤钦</h4> 
									<p>总负责人</p>
								</div>
							</div>    
						</div>
					</div>

					<div class="col-md-3 col-sm-6 col-xs-6 team-grids" style="width: 20%;">
						<div class="team-agile-img"> 
							<a href="#"><img src="<?php echo C('domain.main');?>
/public/home/images/zsx.png" alt="img"></a>
							<div class="view-caption">
								<div class="w3ls-info">
									<h4>赵善欣</h4> 
									<p>前台</p>
								</div>
							</div>    
						</div>
					</div>	

					<div class="col-md-3 col-sm-6 col-xs-6 team-grids" style="width: 20%;">
						<div class="team-agile-img"> 
							<a href="#"><img src="<?php echo C('domain.main');?>
/public/home/images/dxl.jpg" alt="img"></a>
							<div class="view-caption">
								<div class="w3ls-info">
									<h4>邓旭亮</h4> 
									<p>后台</p>
								</div>
							</div>    
						</div>
					</div>

					<div class="col-md-3 col-sm-6 col-xs-6 team-grids" style="width: 20%;">
						<div class="team-agile-img"> 
							<a href="#"><img src="<?php echo C('domain.main');?>
/public/home/images/zly.jpg" alt="img"></a>
							<div class="view-caption">
								<div class="w3ls-info">
									<h4>朱铃烨</h4> 
									<p>前台</p>
								</div>
							</div>    
						</div>
					</div>	

					<div class="col-md-3 col-sm-6 col-xs-6 team-grids" style="width: 20%;">
						<div class="team-agile-img"> 
							<a href="#"><img src="<?php echo C('domain.main');?>
/public/home/images/ztc.png" alt="img"></a>
							<div class="view-caption">
								<div class="w3ls-info">
									<h4>詹太川</h4> 
									<p>后台</p>
								</div>
							</div>    
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- //team --> 

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
