<?php /* Smarty version 3.1.27, created on 2016-03-31 21:16:48
         compiled from "/var/www/html/mutasyon/themes/default/paytype/addpaytype.html" */ ?>
<?php
/*%%SmartyHeaderCode:126385181656fd699034c104_86537857%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71f538b26f511040418b5f15db9629d09151a28e' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/paytype/addpaytype.html',
      1 => 1456861360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126385181656fd699034c104_86537857',
  'variables' => 
  array (
    '_add_paytype' => 0,
    '_payment_type_name' => 0,
    '_active_it' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56fd699040c033_04678991',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56fd699040c033_04678991')) {
function content_56fd699040c033_04678991 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '126385181656fd699034c104_86537857';
?>
<div class="collapse topwind" id="addpaytype" style="z-index:1001">
      <div class="panel panel-pink" style="background:#fff;">
	      <button type="button" class="close addpaytypem" data-toggle="collapse" href="#addpaytype" style="margin-right:10px;margin-top:8px;"><span aria-hidden="true">×</span></button>
	      <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_add_paytype']->value;?>
</div>
	      <div class="panel-body pan">
		      <form id="paymentform" action="paytype.php" method="POST" class="noload">
			      <div class="form-body pal">
					<div class="navbar">
					      <h5><?php echo $_smarty_tpl->tpl_vars['_payment_type_name']->value;?>
</h5>
					      <input type="text" name="addpaytypename" class="form-control" />
					      <label><?php echo $_smarty_tpl->tpl_vars['_active_it']->value;?>
</label>
					      <input type="checkbox" name="active" checked /><br />
					      <button type ="submit" class="btn btn-info btn-sm margin-top"><i class="glyphicon glyphicon-ok"></i><?php echo $_smarty_tpl->tpl_vars['_add_paytype']->value;?>
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