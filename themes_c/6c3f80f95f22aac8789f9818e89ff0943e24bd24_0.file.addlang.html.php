<?php /* Smarty version 3.1.27, created on 2016-04-22 13:38:15
         compiled from "/var/www/html/mutasyon/themes/default/language/addlang.html" */ ?>
<?php
/*%%SmartyHeaderCode:11112906495719ff176230a1_45592295%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c3f80f95f22aac8789f9818e89ff0943e24bd24' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/language/addlang.html',
      1 => 1456420635,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11112906495719ff176230a1_45592295',
  'variables' => 
  array (
    '_language_name' => 0,
    'page_name' => 0,
    '_ok' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5719ff1762e5a2_92344587',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5719ff1762e5a2_92344587')) {
function content_5719ff1762e5a2_92344587 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '11112906495719ff176230a1_45592295';
?>
<div class="collapse topwind" id="addlang">
      <div class="panel panel-pink" style="background:#fff;">
	      <button type="button" class="close addprofitm" data-toggle="collapse" href="#addlang" style="margin-right:10px;margin-top:8px;"><span aria-hidden="true">×</span></button>
	      <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_language_name']->value;?>
</div>
	      <div class="panel-body pan">
		      <form id="paymentform" action="language.php" method="POST" <?php if ($_smarty_tpl->tpl_vars['page_name']->value != 'settings') {?>class="noload"<?php } else { ?>class="reload"<?php }?>>
			      <div class="form-body pal">
					<div class="navbar">
					      <h5><?php echo $_smarty_tpl->tpl_vars['_language_name']->value;?>
</h5>
					      <input type="text" name="language" class="form-control addlanguage" />
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