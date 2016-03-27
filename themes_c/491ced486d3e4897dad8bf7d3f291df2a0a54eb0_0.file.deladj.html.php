<?php /* Smarty version 3.1.27, created on 2016-03-25 16:12:16
         compiled from "/var/www/html/mutasyon/themes/default/invoiceadj/deladj.html" */ ?>
<?php
/*%%SmartyHeaderCode:213724569456f54740b12551_46388198%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '491ced486d3e4897dad8bf7d3f291df2a0a54eb0' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/invoiceadj/deladj.html',
      1 => 1457208561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213724569456f54740b12551_46388198',
  'variables' => 
  array (
    'i' => 0,
    '_delete_invoiceadj' => 0,
    'page_name' => 0,
    '_delete_invoiceadj_message' => 0,
    '_delete' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56f54740b330e4_77627032',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56f54740b330e4_77627032')) {
function content_56f54740b330e4_77627032 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '213724569456f54740b12551_46388198';
?>
<div class="collapse topwind" id="delinvoiceadj-<?php echo $_smarty_tpl->tpl_vars['i']->value['invoiceadj_id'];?>
">
      <div class="panel panel-pink" style="background:#fff;">
	      <button type="button" class="close deladjm" data-toggle="collapse" href="#delinvoiceadj-<?php echo $_smarty_tpl->tpl_vars['i']->value['invoiceadj_id'];?>
" style="margin-right:10px;margin-top:8px;"><span aria-hidden="true">×</span></button>
	      <div class="panel-heading"><span style="color:#fff;font-weight:bold"><?php echo $_smarty_tpl->tpl_vars['i']->value['invoiceadj_name'];?>
</span> <?php echo $_smarty_tpl->tpl_vars['_delete_invoiceadj']->value;?>
</div>
	      <div class="panel-body pan">
		      <form id="paymentform" action="invoiceadj.php" method="POST" <?php if ($_smarty_tpl->tpl_vars['page_name']->value != 'settings') {?>class="noload"<?php } else { ?>class="reload"<?php }?>>
			      <div class="form-body pal">
					<div class="navbar">
					      <span style="color:red"><?php echo $_smarty_tpl->tpl_vars['_delete_invoiceadj_message']->value;?>
</span><br />
					      <input type="hidden" name="delinvoiceadjid" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['invoiceadj_id'];?>
" />
					      <button type ="submit" class="btn btn-info btn-sm margin-top"><i class="glyphicon glyphicon-ok"></i><?php echo $_smarty_tpl->tpl_vars['_delete']->value;?>
</button>
					</div><!--/row-->
			      </div><!--/form-body-->
		      </form>
	      </div><!--/panel-body-->
      </div><!--/panel-->
</div><!--/topwind--><?php }
}
?>