<?php /* Smarty version 3.1.27, created on 2016-04-22 13:38:15
         compiled from "/var/www/html/mutasyon/themes/default/invoiceadj/editadj.html" */ ?>
<?php
/*%%SmartyHeaderCode:16994336705719ff175ee0e0_50255049%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69c6931e6cbe8ff1457bb909a42385cfa84f7796' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/invoiceadj/editadj.html',
      1 => 1457208557,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16994336705719ff175ee0e0_50255049',
  'variables' => 
  array (
    'i' => 0,
    '_edit_invoiceadj' => 0,
    'page_name' => 0,
    '_invoiceadj_name' => 0,
    '_ok' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5719ff17604562_82569139',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5719ff17604562_82569139')) {
function content_5719ff17604562_82569139 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16994336705719ff175ee0e0_50255049';
?>
<div class="collapse topwind" id="editinvoiceadj-<?php echo $_smarty_tpl->tpl_vars['i']->value['invoiceadj_id'];?>
">
      <div class="panel panel-pink" style="background:#fff;">
	      <button type="button" class="close editadjm" data-toggle="collapse" href="#editinvoiceadj-<?php echo $_smarty_tpl->tpl_vars['i']->value['invoiceadj_id'];?>
" style="margin-right:10px;margin-top:8px;"><span aria-hidden="true">×</span></button>
	      <div class="panel-heading"><span style="color:#d9534f"><?php echo $_smarty_tpl->tpl_vars['i']->value['invoiceadj_name'];?>
</span> <?php echo $_smarty_tpl->tpl_vars['_edit_invoiceadj']->value;?>
</div>
	      <div class="panel-body pan">
		      <form id="paymentform" action="invoiceadj.php" method="POST" <?php if ($_smarty_tpl->tpl_vars['page_name']->value != 'settings') {?>class="noload"<?php } else { ?>class="reload"<?php }?>>
			      <div class="form-body pal">
					<div class="navbar">
					      <h5><?php echo $_smarty_tpl->tpl_vars['_invoiceadj_name']->value;?>
</h5>
					      <input type="text" name="editinvoiceadjname" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['invoiceadj_name'];?>
" class="form-control" />
					      <input type="hidden" name="editinvoiceadjid" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['invoiceadj_id'];?>
" />
					      <button type ="submit" class="btn btn-info btn-sm margin-top"><i class="glyphicon glyphicon-ok"></i><?php echo $_smarty_tpl->tpl_vars['_ok']->value;?>
</button>
					</div><!--/row-->
			      </div><!--/form-body-->
		      </form>
	      </div><!--/panel-body-->
      </div><!--/panel-->
</div><!--/topwind--><?php }
}
?>