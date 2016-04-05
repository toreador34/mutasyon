<?php /* Smarty version 3.1.27, created on 2016-04-04 20:50:01
         compiled from "/var/www/html/mcopy/themes/default/seller/addseller.html" */ ?>
<?php
/*%%SmartyHeaderCode:9672206255702a9493c1fa5_60183391%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45e70c46506f887b27fd61873cfb61e276466fce' => 
    array (
      0 => '/var/www/html/mcopy/themes/default/seller/addseller.html',
      1 => 1456420637,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9672206255702a9493c1fa5_60183391',
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
  'unifunc' => 'content_5702a9493d49d3_44157966',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5702a9493d49d3_44157966')) {
function content_5702a9493d49d3_44157966 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '9672206255702a9493c1fa5_60183391';
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