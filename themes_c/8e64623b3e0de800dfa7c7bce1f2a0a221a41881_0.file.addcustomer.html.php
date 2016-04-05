<?php /* Smarty version 3.1.27, created on 2016-04-04 20:49:18
         compiled from "/var/www/html/mcopy/themes/default/customer/addcustomer.html" */ ?>
<?php
/*%%SmartyHeaderCode:15153796815702a91e964bd6_38958438%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e64623b3e0de800dfa7c7bce1f2a0a221a41881' => 
    array (
      0 => '/var/www/html/mcopy/themes/default/customer/addcustomer.html',
      1 => 1457977135,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15153796815702a91e964bd6_38958438',
  'variables' => 
  array (
    '_addcustomer' => 0,
    '_customer_name' => 0,
    '_tel' => 0,
    '_email' => 0,
    '_web' => 0,
    '_address' => 0,
    '_active_it' => 0,
    '_ok' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5702a91e96f658_75936963',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5702a91e96f658_75936963')) {
function content_5702a91e96f658_75936963 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '15153796815702a91e964bd6_38958438';
?>
<div class="collapse topwind" id="addcustomer">
      <div class="panel panel-green" style="background:#fff;">
	      <button type="button" class="close addcustomerm" data-toggle="collapse" href="#addcustomer" style="margin-right: 10px;margin-top: 8px;"><span aria-hidden="true">×</span></button>
	      <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_addcustomer']->value;?>
</div>
	      <div class="panel-body pan">
		      <form class="noload" action="addcustomer.php" method="POST">
			    <div class="form-body pal">
				    <div class="navbar">
					  <!-- Text input-->
					  <div class="form-group">
						  <input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['_customer_name']->value;?>
" class="form-control" name="custName" id="custName" />
					  </div>
					  
					  <!-- Text input-->
					  <div class="form-group">
						  <input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['_tel']->value;?>
" class="form-control" name="custTel" />
					  </div>
					  
					  <!-- Text input-->
					  <div class="form-group">
						  <input type="email" placeholder="<?php echo $_smarty_tpl->tpl_vars['_email']->value;?>
" class="form-control" name="custMail" />
					  </div>
					  
					  <!-- Text input-->
					  <div class="form-group">
						  <input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['_web']->value;?>
" class="form-control" name="custWeb" />
					  </div>

					  <!-- Text input-->
					  <div style="clear:both;margin-top:20px">
						  <textarea type="textarea" placeholder="<?php echo $_smarty_tpl->tpl_vars['_address']->value;?>
" class="form-control" name="custAddress"></textarea>
					  </div>
					  
					  <!-- Text input-->
					  <div style="clear:both;margin-top:20px">
						  <label><?php echo $_smarty_tpl->tpl_vars['_active_it']->value;?>
 </label>
						  <input type="checkbox" name="active" checked />
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