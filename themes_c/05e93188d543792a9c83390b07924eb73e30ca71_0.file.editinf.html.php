<?php /* Smarty version 3.1.27, created on 2016-03-25 16:12:16
         compiled from "/var/www/html/mutasyon/themes/default/admin/editinf.html" */ ?>
<?php
/*%%SmartyHeaderCode:29069765756f54740883f80_39957398%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05e93188d543792a9c83390b07924eb73e30ca71' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/admin/editinf.html',
      1 => 1456420601,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29069765756f54740883f80_39957398',
  'variables' => 
  array (
    '_change_admin_inf' => 0,
    '_username' => 0,
    'admin_username' => 0,
    '_name_surname' => 0,
    'admin_name' => 0,
    '_email' => 0,
    'admin_email' => 0,
    '_city' => 0,
    'admin_city' => 0,
    '_old' => 0,
    'admin_old' => 0,
    '_password' => 0,
    '_again' => 0,
    '_ok' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56f5474089d7c3_20300285',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56f5474089d7c3_20300285')) {
function content_56f5474089d7c3_20300285 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '29069765756f54740883f80_39957398';
?>
<!-- Modallar  -->
<div class="collapse topwind" id="adminInf">
      <div class="panel panel-green" style="background:#fff;">
	      <button type="button" class="close paymentm" data-toggle="collapse" href="#adminInf" style="margin-right: 10px;margin-top: 8px;"><span aria-hidden="true">×</span></button>
	      <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_change_admin_inf']->value;?>
</div>
	      <div class="panel-body pan">
		      <form class="reload" action="edit.php" method="POST" enctype="multipart/form-data">
			    <div class="form-body pal">
				    <div class="navbar">
					    
					    <div class="col-md-12">
						<div class="form-group">
						    <label class="control-label" style="font-weight:bold"><?php echo $_smarty_tpl->tpl_vars['_username']->value;?>
</label>
						    <div class="input-icon right">
							<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['admin_username']->value;?>
" class="form-control" name="admin_username" />
						    </div>
						</div>
					    </div>
					    
					    <div class="col-md-12">
						<div class="form-group">
						    <label class="control-label" style="font-weight:bold"><?php echo $_smarty_tpl->tpl_vars['_name_surname']->value;?>
</label>
						    <div class="input-icon right">
							<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['admin_name']->value;?>
" class="form-control" name="admin_name" />
						    </div>
						</div>
					    </div>
					    
					    <div class="col-md-12">
						<div class="form-group">
						    <label class="control-label" style="font-weight:bold"><?php echo $_smarty_tpl->tpl_vars['_email']->value;?>
</label>
						    <div class="input-icon right">
							<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['admin_email']->value;?>
" class="form-control" name="admin_email" />
						    </div>
						</div>
					    </div>
					    
					    <div class="col-md-12">
						<div class="form-group">
						    <label class="control-label" style="font-weight:bold"><?php echo $_smarty_tpl->tpl_vars['_city']->value;?>
</label>
						    <div class="input-icon right">
							<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['admin_city']->value;?>
" class="form-control" name="admin_city" />
						    </div>
						</div>
					    </div>
					    
					    <div class="col-md-12">
						<div class="form-group">
						    <label class="control-label" style="font-weight:bold"><?php echo $_smarty_tpl->tpl_vars['_old']->value;?>
</label>
						    <div class="input-icon right">
							<input type="date" value="<?php echo $_smarty_tpl->tpl_vars['admin_old']->value;?>
" class="form-control" name="admin_old" />
						    </div>
						</div>
					    </div>
					    
					    <div class="col-md-12">
						<div class="form-group">
						    <label class="control-label" style="font-weight:bold"><?php echo $_smarty_tpl->tpl_vars['_password']->value;?>
</label>
						    <div class="input-icon right">
							<input type="password" id="password1" class="form-control" name="admin_password" />
							<label class="control-label margin-top" style="font-weight:bold"><?php echo $_smarty_tpl->tpl_vars['_again']->value;?>
</label>
							<input type="password" id="password2" class="form-control" name="password_again" />
						    </div>
						</div>
					    </div>
					    <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_ok']->value;?>
</button>
				    </div><!--/navbar-->
			    </div><!--/form-body-->
		      </form>
	      </div><!--/panel-body-->
      </div><!--/panel-->
</div><!--/topwind--><?php }
}
?>