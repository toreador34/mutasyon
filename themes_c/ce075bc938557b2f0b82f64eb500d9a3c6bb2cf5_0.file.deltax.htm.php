<?php /* Smarty version 3.1.27, created on 2016-03-25 16:12:16
         compiled from "/var/www/html/mutasyon/themes/default/taxprofit/deltax.htm" */ ?>
<?php
/*%%SmartyHeaderCode:10321631856f547409e2812_94321752%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce075bc938557b2f0b82f64eb500d9a3c6bb2cf5' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/taxprofit/deltax.htm',
      1 => 1456420642,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10321631856f547409e2812_94321752',
  'variables' => 
  array (
    't' => 0,
    '_delete_tax' => 0,
    '_delete_tax_message' => 0,
    '_delete' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56f547409f34d1_62287887',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56f547409f34d1_62287887')) {
function content_56f547409f34d1_62287887 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10321631856f547409e2812_94321752';
?>
<div class="collapse topwind" id="deltax-<?php echo $_smarty_tpl->tpl_vars['t']->value['tax_id'];?>
">
      <div class="panel panel-red" style="background:#fff;">
	      <button type="button" class="close deltaxm" data-toggle="collapse" href="#deltax-<?php echo $_smarty_tpl->tpl_vars['t']->value['tax_id'];?>
" style="margin-right:10px;margin-top:8px;"><span aria-hidden="true">×</span></button>
	      <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['t']->value['tax_tax'];?>
 - <?php echo $_smarty_tpl->tpl_vars['_delete_tax']->value;?>
</div>
	      <div class="panel-body pan">
		      <form id="paymentform" action="addtaxprofit.php" method="POST" class="noload">
			      <div class="form-body pal">
					<div class="navbar">
					      <span style="color:red"><?php echo $_smarty_tpl->tpl_vars['_delete_tax_message']->value;?>
</span>
					      <input type="hidden" name="deltaxid" value="<?php echo $_smarty_tpl->tpl_vars['t']->value['tax_id'];?>
" />
					      <button type ="submit" class="btn btn-info btn-sm margin-top"><i class="glyphicon glyphicon-ok"></i><?php echo $_smarty_tpl->tpl_vars['_delete']->value;?>
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