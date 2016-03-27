<?php /* Smarty version 3.1.27, created on 2016-03-25 16:12:16
         compiled from "/var/www/html/mutasyon/themes/default/settings/language.html" */ ?>
<?php
/*%%SmartyHeaderCode:122917942256f54740a72663_86319797%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27c3cd79ca4bebdf058778d4a716ad0aae62f029' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/settings/language.html',
      1 => 1456420639,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122917942256f54740a72663_86319797',
  'variables' => 
  array (
    '_add_language' => 0,
    '_languages' => 0,
    '_language_name' => 0,
    '_detail' => 0,
    '_default_lang' => 0,
    '_click_for_active' => 0,
    'languagelist' => 0,
    't' => 0,
    '_add_invoiceadj' => 0,
    'invoiceadj' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56f54740adf4e0_93301320',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56f54740adf4e0_93301320')) {
function content_56f54740adf4e0_93301320 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '122917942256f54740a72663_86319797';
?>
<div class="addtaxprofitright col-sm-12"><!--Right Side-->
    	<div class="row"><!--Tax-->
	      <button class="btn btn-yellow btn-xs" data-toggle="collapse" href="#addlang" aria-expanded="false" title="<?php echo $_smarty_tpl->tpl_vars['_add_language']->value;?>
"><i class="fa fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_add_language']->value;?>
</button>
	      <div class="well panel panel-default">
		      <h4 class="panel-heading headers"><?php echo $_smarty_tpl->tpl_vars['_languages']->value;?>
</h4>
		      <table class="table table-hover" id="dev-table">
			      <thead>
				<tr>
					<th>#</th>
					<th><?php echo $_smarty_tpl->tpl_vars['_language_name']->value;?>
</th>
					<th style="text-align:right"><?php echo $_smarty_tpl->tpl_vars['_detail']->value;?>
</th>
				</tr>
			      </thead>
			      <tbody>
				<tr>
					<td>0</td>
					<td><?php echo $_smarty_tpl->tpl_vars['_default_lang']->value;?>
</td>
					<td style="text-align:right">
					  <button class="btn langchange btn-default btn-xs" alt="default" title="<?php echo $_smarty_tpl->tpl_vars['_click_for_active']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['_click_for_active']->value;?>
</button>
					</td>
				  </tr>
				<?php
$_from = $_smarty_tpl->tpl_vars['languagelist']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['t']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$foreach_t_Sav = $_smarty_tpl->tpl_vars['t'];
?>
				  <tr>
					<td><?php echo $_smarty_tpl->tpl_vars['t']->value['language_id'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['t']->value['language_name'];?>
</td>
					<td style="text-align:right">
					  <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#dellanguage-<?php echo $_smarty_tpl->tpl_vars['t']->value['language_id'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['t']->value['language_id'];?>
"><i class="fa fa-trash"></i></button>
					  <button class="btn btn-info btn-xs" data-toggle="modal" data-target="#editlanguage-<?php echo $_smarty_tpl->tpl_vars['t']->value['language_id'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['t']->value['language_id'];?>
"><i class="fa fa-pencil-square-o"></i></button>
					  <button class="btn langchange <?php if ($_smarty_tpl->tpl_vars['t']->value['language_active'] == 1) {?>alert-success<?php } else { ?>alert-danger<?php }?> btn-xs" alt="<?php echo $_smarty_tpl->tpl_vars['t']->value['language_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['_click_for_active']->value;?>
"><i class="fa <?php if ($_smarty_tpl->tpl_vars['t']->value['language_active'] == 1) {?>fa-check-circle<?php } else { ?>fa-times-circle<?php }?>"></i></i></button>
					</td>
				  </tr>
				  <?php echo $_smarty_tpl->getSubTemplate ('themes/default/language/editlang.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

				  <?php echo $_smarty_tpl->getSubTemplate ('themes/default/language/dellang.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

				<?php
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
?>
			      </tbody>
		      </table>
	      </div>
<!--invoiceadj-->
	      <button class="btn btn-blue btn-xs" data-toggle="collapse" href="#addadj" aria-expanded="false" title="<?php echo $_smarty_tpl->tpl_vars['_add_invoiceadj']->value;?>
"><i class="fa fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_add_invoiceadj']->value;?>
</button>
	      <div class="well panel panel-default">
		<h4 class="panel-heading headers">Fatura Öneki</h4>
		      <table class="table table-hover" id="dev-table">
			      <thead>
				<tr>
					<th>#</th>
					<th>Önek</th>
					<th style="text-align:right"><?php echo $_smarty_tpl->tpl_vars['_detail']->value;?>
</th>
				</tr>
			      </thead>
			      <tbody>
				<?php
$_from = $_smarty_tpl->tpl_vars['invoiceadj']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?>
				  <tr>
					<td><?php echo $_smarty_tpl->tpl_vars['i']->value['invoiceadj_id'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['i']->value['invoiceadj_name'];?>
</td>
					<td style="text-align:right">
					  <button class="btn btn-danger btn-xs" data-toggle="collapse" data-target="#delinvoiceadj-<?php echo $_smarty_tpl->tpl_vars['i']->value['invoiceadj_id'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['i']->value['invoiceadj_id'];?>
"><i class="fa fa-trash"></i></button>
					  <button class="btn btn-info btn-xs" data-toggle="collapse" data-target="#editinvoiceadj-<?php echo $_smarty_tpl->tpl_vars['i']->value['invoiceadj_id'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['i']->value['invoiceadj_id'];?>
"><i class="fa fa-pencil-square-o"></i></button>
					</td>
				  </tr>
				  <?php echo $_smarty_tpl->getSubTemplate ('themes/default/invoiceadj/editadj.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

				  <?php echo $_smarty_tpl->getSubTemplate ('themes/default/invoiceadj/deladj.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

				<?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>
			      </tbody>
		      </table>
	      </div>
	</div>
<!--invoiceadj finish-->
</div><!--/Right Side -->
<?php echo $_smarty_tpl->getSubTemplate ('themes/default/language/addlang.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('themes/default/invoiceadj/addadj.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>