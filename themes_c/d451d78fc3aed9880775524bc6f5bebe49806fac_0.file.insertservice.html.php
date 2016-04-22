<?php /* Smarty version 3.1.27, created on 2016-04-22 13:42:55
         compiled from "/var/www/html/mutasyon/themes/default/service/insertservice.html" */ ?>
<?php
/*%%SmartyHeaderCode:1782301655571a002fa19f11_55124894%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd451d78fc3aed9880775524bc6f5bebe49806fac' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/service/insertservice.html',
      1 => 1456420637,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1782301655571a002fa19f11_55124894',
  'variables' => 
  array (
    '_add_service_type' => 0,
    '_service_type' => 0,
    '_tax' => 0,
    'tax' => 0,
    't' => 0,
    '_total' => 0,
    '_ok' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_571a002fa2eae3_99171567',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571a002fa2eae3_99171567')) {
function content_571a002fa2eae3_99171567 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1782301655571a002fa19f11_55124894';
?>
<div class="collapse topwind" id="insertservice">
      <div class="panel panel-green" style="background:#fff;">
	      <button type="button" class="close" data-toggle="collapse" href="#insertservice" style="margin-right: 10px;margin-top: 8px;"><span aria-hidden="true">×</span></button>
	      <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_add_service_type']->value;?>
</div>
	      <div class="panel-body pan">
		      <form id="insertserviceform" action="addservice.php" method="POST" class="reload">
		      <div class="form-body pal">
				<div class="navbar">
				      <!-- Text input-->
				      <h5><?php echo $_smarty_tpl->tpl_vars['_service_type']->value;?>
</h5>
				      <div class="form-group">
					    <textarea row="2" name ="insertservicetype" class="form-control"></textarea>
				      </div>
				      
				      <!-- Text input-->
				      <h5><?php echo $_smarty_tpl->tpl_vars['_tax']->value;?>
</h5>
				      <div class="form-group">
					    <select class="form-control" name="inserttax">
						  <option value="empty"></option>
						  <?php
$_from = $_smarty_tpl->tpl_vars['tax']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['t']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$foreach_t_Sav = $_smarty_tpl->tpl_vars['t'];
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['t']->value['tax_tax'];?>
"><?php echo $_smarty_tpl->tpl_vars['t']->value['tax_tax'];?>
</option>
						  <?php
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
?>
					    </select>
				      </div>
				      
				      <!-- Text input-->
				      <h5><?php echo $_smarty_tpl->tpl_vars['_total']->value;?>
</h5>
				      <div class="form-group">
					    <input type="number" class="form-control" name="inserttotal"  />
					    <input type="hidden" value="<?php echo Check::getValue('seid');?>
" class="form-control" name="insertid"  />
				      </div>

				</div>
				<button type="submit" class="btn btn-info btn-xs margin-top"><?php echo $_smarty_tpl->tpl_vars['_ok']->value;?>
</button>
		      </div>
		      </form>
	      </div>
      </div>
</div>
<?php }
}
?>