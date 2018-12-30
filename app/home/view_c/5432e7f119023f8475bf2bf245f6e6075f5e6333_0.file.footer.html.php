<?php
/* Smarty version 3.1.29, created on 2018-09-17 10:40:21
  from "D:\usr\Study\project\tour\app\home\view\Common\footer.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5b9f14151f4cb8_69997637',
  'file_dependency' => 
  array (
    '5432e7f119023f8475bf2bf245f6e6075f5e6333' => 
    array (
      0 => 'D:\\usr\\Study\\project\\tour\\app\\home\\view\\Common\\footer.html',
      1 => 1537148020,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9f14151f4cb8_69997637 ($_smarty_tpl) {
?>
<div class="footer">
		<div class="container">
			<div class="col-md-4 footer-grids">
				<h3>帅过吴彦祖组</h3>
				<p>
				<span style="text-indent:2em;">
				我们是帅过吴彦祖组，个个都是集美貌与才华于一身的人才！！！<br/>
				</span>
				<span style="text-indent:2em;">
				我们是帅过吴彦祖组，个个都是集美貌与才华于一身的人才！！！<br/>
				</span>
				<span style="text-indent:2em;">
				我们是帅过吴彦祖组，个个都是集美貌与才华于一身的人才！！！<br/>
				</span>
				</p>
			</div>
			<div class="col-md-3 footer-grids">
				<h3 style="margin-bottom: 15px;">Contact Us</h3>
				<p>这是我们帅气的薛大佬</p>
				<p>
				<img src="<?php echo C('domain.main');?>
/public/home/images/xxq.jpg" alt="" style="width: 110px;margin-top: 5px;">
				</p>
				<div class="footer-bottom" style="margin-top: 10px;">
					<a href="#"><i class="fa fa-facebook"> </i><span>Facebook</span></a>
					<a href="#"><i class="fa fa-twitter"> </i><span>Twitter</span></a>
					<a href="#"><i class="fa fa-google-plus"> </i><span>Google +</span></a>
					<a href="#"><i class="fa fa-dribbble"> </i><span>Dribbble</span></a>
				</div>
			</div>
			<div class="col-md-5 footer-grids">
				<h3>相册</h3>
				<?php
$_from = $_smarty_tpl->tpl_vars['fpictures']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_fpicture_0_saved_item = isset($_smarty_tpl->tpl_vars['fpicture']) ? $_smarty_tpl->tpl_vars['fpicture'] : false;
$_smarty_tpl->tpl_vars['fpicture'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['fpicture']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['fpicture']->value) {
$_smarty_tpl->tpl_vars['fpicture']->_loop = true;
$__foreach_fpicture_0_saved_local_item = $_smarty_tpl->tpl_vars['fpicture'];
?>
				<a  class="footer-img" href="<?php echo C('domain.main');?>
/index.php?p=home&m=photo&a=showList"><img src="<?php echo C('domain.main');?>
/<?php echo $_smarty_tpl->tpl_vars['fpicture']->value['picture'];?>
" alt="" style="width: 140px;height: 100px;margin-right: 10px;margin-bottom: 5px;"></a>
				<?php
$_smarty_tpl->tpl_vars['fpicture'] = $__foreach_fpicture_0_saved_local_item;
}
if ($__foreach_fpicture_0_saved_item) {
$_smarty_tpl->tpl_vars['fpicture'] = $__foreach_fpicture_0_saved_item;
}
?>
			</div>
			<div class="clearfix"> </div>
			<div class="footer-copy" style="margin-top: 15px;">
				<p>Copyright &copy; 2017.Company name All rights reserved.<a target="_blank" href="http://www.17sucai.com/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
			</div>
		</div>
	</div><?php }
}
