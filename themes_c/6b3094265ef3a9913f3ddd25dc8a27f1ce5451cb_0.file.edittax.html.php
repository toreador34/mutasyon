<?php /* Smarty version 3.1.27, created on 2016-04-22 13:38:15
         compiled from "/var/www/html/mutasyon/themes/default/taxprofit/edittax.html" */ ?>
<?php
/*%%SmartyHeaderCode:3162139845719ff174d6683_86424666%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b3094265ef3a9913f3ddd25dc8a27f1ce5451cb' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/taxprofit/edittax.html',
      1 => 1456420641,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3162139845719ff174d6683_86424666',
  'variables' => 
  array (
    't' => 0,
    '_edit_tax' => 0,
    '_tax_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5719ff174fa039_31363683',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5719ff174fa039_31363683')) {
function content_5719ff174fa039_31363683 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3162139845719ff174d6683_86424666';
?>
<div class="collapse topwind" id="edittax-<?php echo $_smarty_tpl->tpl_vars['t']->value['tax_id'];?>
">
      <div class="panel panel-blue" style="background:#fff;">
	      <button type="button" class="close edittaxm" data-toggle="collapse" href="#edittax-<?php echo $_smarty_tpl->tpl_vars['t']->value['tax_id'];?>
" style="margin-right:10px;margin-top:8px;"><span aria-hidden="true">×</span></button>
	      <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_edit_tax']->value;?>
</div>
	      <div class="panel-body pan">
		      <form id="paymentform" action="addtaxprofit.php" method="POST" class="reload">
			      <div class="form-body pal">
					<div class="navbar">
					      <h5><?php echo $_smarty_tpl->tpl_vars['_tax_name']->value;?>
</h5>
					      <input type="text" name="edittaxname" value="<?php echo $_smarty_tpl->tpl_vars['t']->value['tax_tax'];?>
" class="form-control" />
					      <input type="hidden" name="edittaxid" value="<?php echo $_smarty_tpl->tpl_vars['t']->value['tax_id'];?>
" />
					      <button type ="submit" class="btn btn-info btn-sm margin-top"><i class="glyphicon glyphicon-ok"></i><?php echo $_smarty_tpl->tpl_vars['_edit_tax']->value;?>
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