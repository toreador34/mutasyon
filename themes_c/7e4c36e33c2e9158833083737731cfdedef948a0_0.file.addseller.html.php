<?php /* Smarty version 3.1.27, created on 2016-03-16 19:56:25
         compiled from "/var/www/html/mutasyon/themes/default/seller/addseller.html" */ ?>
<?php
/*%%SmartyHeaderCode:36330307756e99e4909f9d2_89508601%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e4c36e33c2e9158833083737731cfdedef948a0' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/seller/addseller.html',
      1 => 1456420637,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36330307756e99e4909f9d2_89508601',
  'variables' => 
  array (
    '_addseller' => 0,
    '_seller_name' => 0,
    '_no' => 0,
    '_tel' => 0,
    '_address' => 0,
    '_web' => 0,
    '_email' => 0,
    '_ok' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56e99e490bc1c5_25408045',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56e99e490bc1c5_25408045')) {
function content_56e99e490bc1c5_25408045 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '36330307756e99e4909f9d2_89508601';
?>
<!--Add Seller Modal-->
<div class="collapse topwind" id="addseller">
      <div class="panel panel-green" style="background:#fff;">
	      <button type="button" class="close addsellerm" data-toggle="collapse" href="#addseller" style="margin-right: 10px;margin-top: 8px;"><span aria-hidden="true">×</span></button>
	      <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_addseller']->value;?>
</div>
	      <div class="panel-body pan">
		      <form class="noload" action="seller.php" method="POST">
			    <div class="navbar">
				  <div class="form-body pal">
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-sm-4 control-label" for="textinput"><?php echo $_smarty_tpl->tpl_vars['_seller_name']->value;?>
</label>
					  <div class="col-sm-8">
					    <input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['_seller_name']->value;?>
" class="form-control" name="sellerName">
					  </div>
					</div>
					
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-sm-4 control-label" for="textinput"><?php echo $_smarty_tpl->tpl_vars['_no']->value;?>
</label>
					  <div class="col-sm-8">
					    <input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['_no']->value;?>
" class="form-control" name="selleriban">
					  </div>
					</div>
					
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-sm-4 control-label" for="textinput"><?php echo $_smarty_tpl->tpl_vars['_tel']->value;?>
</label>
					  <div class="col-sm-8">
					    <input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['_tel']->value;?>
" class="form-control" name="sellerTel">
					  </div>
					</div>
							
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-sm-4 control-label" for="textinput"><?php echo $_smarty_tpl->tpl_vars['_address']->value;?>
</label>
					  <div class="col-sm-8">
					    <input type="textarea" placeholder="<?php echo $_smarty_tpl->tpl_vars['_address']->value;?>
" class="form-control" name="sellerAddress">
					  </div>
					</div>
							
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-sm-4 control-label" for="textinput"><?php echo $_smarty_tpl->tpl_vars['_web']->value;?>
</label>
					  <div class="col-sm-8">
					    <input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['_web']->value;?>
" class="form-control" name="sellerweb">
					  </div>
					</div>
							
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-sm-4 control-label" for="textinput"><?php echo $_smarty_tpl->tpl_vars['_email']->value;?>
</label>
					  <div class="col-sm-8">
					    <input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['_email']->value;?>
" class="form-control" name="sellermail">
					  </div>
					</div>
							
					<div class="form-group">
					  <div class="col-sm-offset-2 col-sm-10">
					    <div class="pull-right">
					      <button type="submit" class="btn btn-primary margin-top" id="submit"><?php echo $_smarty_tpl->tpl_vars['_ok']->value;?>
</button>
					    </div>
					  </div>
					</div>
				  </div>
			    </div><!--/pal-->
		      </form>
	      </div><!--/panel-body-->
      </div><!--/panel-->
</div><!--/topwind-->
<!--/Add Seller Modal--> 
<?php }
}
?>