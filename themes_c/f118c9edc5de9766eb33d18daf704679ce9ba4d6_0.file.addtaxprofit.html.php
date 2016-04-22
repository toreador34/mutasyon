<?php /* Smarty version 3.1.27, created on 2016-04-22 13:38:15
         compiled from "/var/www/html/mutasyon/themes/default/settings/addtaxprofit.html" */ ?>
<?php
/*%%SmartyHeaderCode:10643104305719ff174ae175_15473454%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f118c9edc5de9766eb33d18daf704679ce9ba4d6' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/settings/addtaxprofit.html',
      1 => 1457207500,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10643104305719ff174ae175_15473454',
  'variables' => 
  array (
    '_add_tax' => 0,
    '_tax' => 0,
    '_tax_name' => 0,
    '_detail' => 0,
    'taxlist' => 0,
    't' => 0,
    '_delete' => 0,
    '_edit_tax' => 0,
    '_edit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5719ff174cf5c3_52782893',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5719ff174cf5c3_52782893')) {
function content_5719ff174cf5c3_52782893 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10643104305719ff174ae175_15473454';
?>
<div class="addtaxprofitright col-sm-12"><!--Right Side-->
    	<div class="row"><!--Tax-->
	      <button class="btn btn-yellow btn-xs" data-toggle="collapse" href="#addtax" aria-expanded="false" title="<?php echo $_smarty_tpl->tpl_vars['_add_tax']->value;?>
"><i class="fa fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_add_tax']->value;?>
</button>
	      <div class="well panel panel-default">
		      <h4 class="panel-heading headers"><?php echo $_smarty_tpl->tpl_vars['_tax']->value;?>
</h4>
			<div class="taxdiv">
			      <table class="table table-hover" id="dev-table">
					<thead>
					      <tr>
						  <th>#</th>
						  <th><?php echo $_smarty_tpl->tpl_vars['_tax_name']->value;?>
</th>
						  <th><?php echo $_smarty_tpl->tpl_vars['_detail']->value;?>
</th>
					      </tr>
					</thead>
					<tbody>
					<?php
$_from = $_smarty_tpl->tpl_vars['taxlist']->value;
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
					      <td><?php echo $_smarty_tpl->tpl_vars['t']->value['tax_id'];?>
</td>
					      <td><?php echo $_smarty_tpl->tpl_vars['t']->value['tax_tax'];?>
</td>
					      <td>
						<button class="btn btn-danger btn-xs" data-toggle="collapse" data-target="#deltax-<?php echo $_smarty_tpl->tpl_vars['t']->value['tax_id'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['t']->value['tax_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_delete']->value;?>
</button>
						<button class="btn btn-info btn-xs" data-toggle="collapse" href="#edittax-<?php echo $_smarty_tpl->tpl_vars['t']->value['tax_id'];?>
" aria-expanded="false" title="<?php echo $_smarty_tpl->tpl_vars['_edit_tax']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['_edit']->value;?>
</button>
					      </td>
					</tr>
					<?php echo $_smarty_tpl->getSubTemplate ('themes/default/taxprofit/edittax.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

					<?php echo $_smarty_tpl->getSubTemplate ('themes/default/taxprofit/deltax.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

					<?php
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
?>
					</tbody>
			      </table>
			</div>
	      </div>
	</div><!--/Tax-->
</div><!--/Right Side -->
<?php echo $_smarty_tpl->getSubTemplate ('themes/default/taxprofit/addtax.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>