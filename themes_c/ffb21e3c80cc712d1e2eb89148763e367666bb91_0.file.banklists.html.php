<?php /* Smarty version 3.1.27, created on 2016-04-04 20:49:18
         compiled from "/var/www/html/mcopy/themes/default/widget/banklists.html" */ ?>
<?php
/*%%SmartyHeaderCode:5091769645702a91e8d2145_22564146%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ffb21e3c80cc712d1e2eb89148763e367666bb91' => 
    array (
      0 => '/var/www/html/mcopy/themes/default/widget/banklists.html',
      1 => 1459524052,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5091769645702a91e8d2145_22564146',
  'variables' => 
  array (
    '_bank_name' => 0,
    'screen' => 0,
    '_payout' => 0,
    '_payin' => 0,
    '_paybalance' => 0,
    'bank' => 0,
    'bnk' => 0,
    '_currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5702a91e8faf20_89424932',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5702a91e8faf20_89424932')) {
function content_5702a91e8faf20_89424932 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '5091769645702a91e8d2145_22564146';
?>
<!-- Bank Lists -->
<div class="margin-top panel">
	<div class="portlet-header border-bottom invoice-icon">
	     <span class="pull-right addevent" style="margin-right:10px;" data-toggle="collapse" href="#addbank"><i class="fa fa-plus-square"></i></span>
	    <i class="glyphicon glyphicon-home" style="font-size: 20px"></i>
	    <span class="invoice-header"><?php echo $_smarty_tpl->tpl_vars['_bank_name']->value;?>
</span>
	</div>
	<div id="bank" class="row1 last-customer-list" <?php if ($_smarty_tpl->tpl_vars['screen']->value == 'phone') {?> style="overflow:auto" <?php }?>>
		<table class="table table-hover" id="dev-table">
		      <thead>
			    <th><?php echo $_smarty_tpl->tpl_vars['_bank_name']->value;?>
</td>
			    <th><i class="fa fa-arrow-up colorRed"></i>  <?php echo $_smarty_tpl->tpl_vars['_payout']->value;?>
</td>
			    <th><i class="fa fa-arrow-down colorGreen"></i>  <?php echo $_smarty_tpl->tpl_vars['_payin']->value;?>
</td>
			    <th><?php echo $_smarty_tpl->tpl_vars['_paybalance']->value;?>
</td>
		      </thead>
		      <?php
$_from = $_smarty_tpl->tpl_vars['bank']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['bnk'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['bnk']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['bnk']->value) {
$_smarty_tpl->tpl_vars['bnk']->_loop = true;
$foreach_bnk_Sav = $_smarty_tpl->tpl_vars['bnk'];
?>
		      <tbody>
			      <tr><!-- List Start -->
				      <td><a href="settings.php"><?php echo $_smarty_tpl->tpl_vars['bnk']->value['bank_name'];?>
</a></td>
				      <td>
					  <a href="buypayments.php">
					      <span><?php echo $_smarty_tpl->tpl_vars['_currency']->value;?>
</span>
					      <?php if (round(($_smarty_tpl->tpl_vars['bnk']->value['out_total']),2) == NULL) {?>
						  <span>0</span>
					      <?php } else { ?>
						  <span><?php echo number_format(($_smarty_tpl->tpl_vars['bnk']->value['out_total']),2,".",'');?>
</span>
					      <?php }?>
					  </a>
				      </td>
				      <td><a href="payments.php"><span><?php echo $_smarty_tpl->tpl_vars['_currency']->value;?>
</span><?php echo number_format(($_smarty_tpl->tpl_vars['bnk']->value['in_total']+$_smarty_tpl->tpl_vars['bnk']->value['transferin']),2,".",'');?>
</a></td>
				      <td>
					  <span><?php echo $_smarty_tpl->tpl_vars['_currency']->value;?>
</span>
					  <a href="payments.php">
						<?php if ($_smarty_tpl->tpl_vars['bnk']->value['in_total'] == NULL) {?>
						      <span>0</span>
						<?php } else { ?>
						      <span><?php echo number_format((($_smarty_tpl->tpl_vars['bnk']->value['in_total']+$_smarty_tpl->tpl_vars['bnk']->value['transferin'])-$_smarty_tpl->tpl_vars['bnk']->value['out_total']-$_smarty_tpl->tpl_vars['bnk']->value['transferout']),2,".",'');?>
</span>
						<?php }?>
					  </a>
				      </td>
			      </tr><!-- List Finish -->
		      </tbody>
		      <?php
$_smarty_tpl->tpl_vars['bnk'] = $foreach_bnk_Sav;
}
?>
		</table>
	</div><!-- /row1 -->
</div>
<!-- /Bank Lists --> 

<?php echo $_smarty_tpl->getSubTemplate ('themes/default/bank/addbank.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>