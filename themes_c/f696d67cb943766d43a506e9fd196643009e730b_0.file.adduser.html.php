<?php /* Smarty version 3.1.27, created on 2016-03-13 19:17:53
         compiled from "/var/www/html/mutasyon/themes/default/customer/adduser.html" */ ?>
<?php
/*%%SmartyHeaderCode:158966964956e5a0c1394803_36728743%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f696d67cb943766d43a506e9fd196643009e730b' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/customer/adduser.html',
      1 => 1456420605,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158966964956e5a0c1394803_36728743',
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
  'unifunc' => 'content_56e5a0c139e226_35902919',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56e5a0c139e226_35902919')) {
function content_56e5a0c139e226_35902919 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '158966964956e5a0c1394803_36728743';
?>
<div class="collapse topwind" id="adduser">
      <div class="panel panel-green" style="background:#fff;">
	      <button type="button" class="close adduser" data-toggle="collapse" href="#adduser" style="margin-right: 10px;margin-top: 8px;"><span aria-hidden="true">×</span></button>
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