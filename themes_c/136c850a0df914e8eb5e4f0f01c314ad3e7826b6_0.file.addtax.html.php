<?php /* Smarty version 3.1.27, created on 2016-03-25 14:47:24
         compiled from "/var/www/html/mutasyon/themes/default/taxprofit/addtax.html" */ ?>
<?php
/*%%SmartyHeaderCode:152078249856f5335c149662_43934058%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '136c850a0df914e8eb5e4f0f01c314ad3e7826b6' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/taxprofit/addtax.html',
      1 => 1456420642,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152078249856f5335c149662_43934058',
  'variables' => 
  array (
    '_add_tax' => 0,
    'page_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56f5335c155787_67042125',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56f5335c155787_67042125')) {
function content_56f5335c155787_67042125 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '152078249856f5335c149662_43934058';
?>
<div class="collapse topwind" id="addtax">
      <div class="panel panel-pink" style="background:#fff;">
	      <button type="button" class="close addtaxm" data-toggle="collapse" href="#addtax" style="margin-right:10px;margin-top:8px;"><span aria-hidden="true">×</span></button>
	      <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_add_tax']->value;?>
</div>
	      <div class="panel-body pan">
		      <form id="paymentform" action="addtaxprofit.php" method="POST" <?php if ($_smarty_tpl->tpl_vars['page_name']->value != 'settings') {?>class="noload"<?php } else { ?>class="reload"<?php }?>>
			      <div class="form-body pal">
					<div class="navbar">
					      <h5><?php echo $_smarty_tpl->tpl_vars['_add_tax']->value;?>
</h5>
					      <input type="text" name="taxname" class="form-control" />
					      <button type ="submit" class="btn btn-info btn-sm margin-top"><i class="glyphicon glyphicon-ok"></i><?php echo $_smarty_tpl->tpl_vars['_add_tax']->value;?>
</button>
					</div><!--/row-->
			      </div><!--/form-body-->
		      </form>
	      </div><!--/panel-body-->
      </div><!--/panel-->
</div><!--/topwind-->
<?php }
}
?>