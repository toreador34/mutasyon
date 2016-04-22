<?php /* Smarty version 3.1.27, created on 2016-04-21 15:35:03
         compiled from "/var/www/html/mutasyon/themes/default/providers/addproviders.html" */ ?>
<?php
/*%%SmartyHeaderCode:10911434775718c8f7392a85_16078871%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a02287e418939edd87ad462e9377fff0d30a7a7' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/providers/addproviders.html',
      1 => 1456420636,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10911434775718c8f7392a85_16078871',
  'variables' => 
  array (
    '_add_providers' => 0,
    '_providers' => 0,
    '_tel' => 0,
    '_address' => 0,
    '_web' => 0,
    '_email' => 0,
    '_ok' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5718c8f73cb226_53629656',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5718c8f73cb226_53629656')) {
function content_5718c8f73cb226_53629656 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10911434775718c8f7392a85_16078871';
?>
<div class="collapse topwind" id="addproviders">
      <div class="panel panel-red" style="background:#fff;">
	      <button type="button" class="close addproviders" data-toggle="collapse" href="#addproviders" style="margin-right: 10px;margin-top: 8px;"><span aria-hidden="true">×</span></button>
	      <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_add_providers']->value;?>
</div>
	      <div class="panel-body pan">
		      <form class="noload" action="providers.php" method="POST">
			    <div class="form-body pal">
				    <div class="navbar">
					  <!-- Text input-->
					  <h5><?php echo $_smarty_tpl->tpl_vars['_providers']->value;?>
</h5>
					  <div class="form-group">
						<input type="text" class="form-control" name="addproviders"  />
					  </div>
					  
					  <!-- Text input-->
					  <h5><?php echo $_smarty_tpl->tpl_vars['_tel']->value;?>
</h5>
					  <div class="form-group">
						<input type="text" class="form-control" name="addproviderstel"  />
					  </div>
					  
					  <!-- Text input-->
					  <h5><?php echo $_smarty_tpl->tpl_vars['_address']->value;?>
</h5>
					  <div class="form-group">
						<input type="text" class="form-control" name="addprovidersaddress"  />
					  </div>
					  
					  <!-- Text input-->
					  <h5><?php echo $_smarty_tpl->tpl_vars['_web']->value;?>
</h5>
					  <div class="form-group">
						<input type="text" class="form-control" name="addprovidersweb"  />
					  </div>
					  
					  <!-- Text input-->
					  <h5><?php echo $_smarty_tpl->tpl_vars['_email']->value;?>
</h5>
					  <div class="form-group">
						<input type="mail" class="form-control" name="addprovidersmail"  />
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