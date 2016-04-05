<?php /* Smarty version 3.1.27, created on 2016-04-01 16:02:34
         compiled from "/var/www/html/mutasyon/themes/default/providers/setpayments.html" */ ?>
<?php
/*%%SmartyHeaderCode:120954084956fe716aacdd49_55158739%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e30f03a56f971100a18899ea038e7bb7b1a9c66' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/providers/setpayments.html',
      1 => 1459457317,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120954084956fe716aacdd49_55158739',
  'variables' => 
  array (
    '_set_providers_pay' => 0,
    'page_name' => 0,
    '_ok' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56fe716aae7548_91112356',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56fe716aae7548_91112356')) {
function content_56fe716aae7548_91112356 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '120954084956fe716aacdd49_55158739';
?>
<!-- Modallar  -->
<div class="collapse topwind" id="setpayproviders">
      <div class="panel panel-red" style="background:#fff;">
	      <button type="button" class="close paytoprovidersm" data-toggle="collapse" href="#setpayproviders" style="margin-right: 10px;margin-top: 8px;"><span aria-hidden="true">×</span></button>
	      <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_set_providers_pay']->value;?>
</div>
	      <div class="panel-body pan">
		      <form class="reload" action="payments.php" method="POST">
			    <div class="form-body pal">
				    <div class="navbar">
				    
					<div class="col-md-12">
					    <div class="form-group">
						<label for="inputName" class="control-label"><?php echo $_smarty_tpl->tpl_vars['_set_providers_pay']->value;?>
</label>
						<div class="input-icon right">
						      <i class="fa fa-credit-card"></i>
						      <input type="number" name="ptotalpayment" class="form-control" step="0.01" autocomplete="off" />
						      <?php if ($_smarty_tpl->tpl_vars['page_name']->value == 'invoicedetail') {?>
							  <input type="hidden" name="ppserviceid" value="<?php echo Check::getValue("seid");?>
" class="form-control" />
						      <?php }?>
						</div>
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
</div><!--/topwind-->
<?php }
}
?>