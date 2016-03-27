<?php /* Smarty version 3.1.27, created on 2016-03-25 14:47:14
         compiled from "/var/www/html/mutasyon/themes/default/bank/addbank.html" */ ?>
<?php
/*%%SmartyHeaderCode:180570475756f5335261f4d9_43388499%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b4e10ffe4df95f5ab214bd9e7780af7bc7561e2' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/bank/addbank.html',
      1 => 1456420601,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180570475756f5335261f4d9_43388499',
  'variables' => 
  array (
    '_addbank' => 0,
    '_bank_name' => 0,
    '_no' => 0,
    '_tel' => 0,
    '_address' => 0,
    '_is_active' => 0,
    '_ok' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56f5335262e834_21757175',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56f5335262e834_21757175')) {
function content_56f5335262e834_21757175 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '180570475756f5335261f4d9_43388499';
?>
<div class="collapse topwind" id="addbank">
      <div class="panel panel-blue" style="background:#fff;">
	      <button type="button" class="close addbankm" data-toggle="collapse" href="#addbank" style="margin-right: 10px;margin-top: 8px;"><span aria-hidden="true">×</span></button>
	      <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_addbank']->value;?>
</div>
	      <div class="panel-body pan">
		      <form class="noload" action="bank.php" method="POST">
			    <div class="form-body pal">
				    <div class="navbar">
					  <!-- Text input-->
					  <div class="form-group">
						<div class="col-sm-12">
						      <input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['_bank_name']->value;?>
" class="form-control" name="bankName">
						</div>
					  </div>
					  
					  <!-- Text input-->
					  <div class="form-group">
						<div class="col-sm-12">
						      <input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['_no']->value;?>
" class="form-control" name="bankNo">
						</div>
					  </div>
					  
					  <!-- Text input-->
					  <div class="form-group">
						<div class="col-sm-12">
						      <input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['_tel']->value;?>
" class="form-control" name="bankTel">
						</div>
					  </div>
							  
					  <!-- Text input-->
					  <div class="form-group">
						<div class="col-sm-12">
						      <input type="textarea" placeholder="<?php echo $_smarty_tpl->tpl_vars['_address']->value;?>
" class="form-control" name="bankAddress">
						</div>
					  </div>
							  
					  <!-- Text input-->
					  <div class="form-group">
						<div class="col-sm-12">
						      <input type="checkbox"  name="bankActive"> <?php echo $_smarty_tpl->tpl_vars['_is_active']->value;?>

						</div>
					  </div>
					  <div class="pull-right">
						<button type="submit" class="btn btn-primary btn-xs"><?php echo $_smarty_tpl->tpl_vars['_ok']->value;?>
</button>
					  </div>
				    </div><!--/navbar-->
			    </div><!--/form-body-->
		      </form>
	      </div><!--/panel-body-->
      </div><!--/panel-->
</div><!--/topwind--><?php }
}
?>