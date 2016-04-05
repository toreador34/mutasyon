<?php /* Smarty version 3.1.27, created on 2016-04-04 20:49:18
         compiled from "/var/www/html/mcopy/themes/default/bank/addbank.html" */ ?>
<?php
/*%%SmartyHeaderCode:16919213695702a91e900127_76010900%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2bce67a187be04477208e42c31c55bc1d5b2d886' => 
    array (
      0 => '/var/www/html/mcopy/themes/default/bank/addbank.html',
      1 => 1459347781,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16919213695702a91e900127_76010900',
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
  'unifunc' => 'content_5702a91e909de8_83709923',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5702a91e909de8_83709923')) {
function content_5702a91e909de8_83709923 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16919213695702a91e900127_76010900';
?>
<div class="collapse topwind" id="addbank" style="z-index:4">
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