<?php /* Smarty version 3.1.27, created on 2016-04-03 16:29:10
         compiled from "/var/www/html/mutasyon/themes/default/taxprofit/addtax.html" */ ?>
<?php
/*%%SmartyHeaderCode:82873714457011aa60ba366_44092455%%*/
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
  'nocache_hash' => '82873714457011aa60ba366_44092455',
  'variables' => 
  array (
    '_add_tax' => 0,
    'page_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57011aa60c1f22_78719882',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57011aa60c1f22_78719882')) {
function content_57011aa60c1f22_78719882 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '82873714457011aa60ba366_44092455';
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