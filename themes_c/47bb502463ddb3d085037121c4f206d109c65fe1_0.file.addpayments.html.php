<?php /* Smarty version 3.1.27, created on 2016-03-26 14:08:40
         compiled from "/var/www/html/mutasyon/themes/default/providers/addpayments.html" */ ?>
<?php
/*%%SmartyHeaderCode:98100072156f67bc86e8ee4_77611335%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47bb502463ddb3d085037121c4f206d109c65fe1' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/providers/addpayments.html',
      1 => 1456852964,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98100072156f67bc86e8ee4_77611335',
  'variables' => 
  array (
    '_payment' => 0,
    '_set_providers_pay' => 0,
    '_currency' => 0,
    'i' => 0,
    '_pay_amount' => 0,
    'page_name' => 0,
    '_bank_name' => 0,
    '_add_paytype' => 0,
    'bank' => 0,
    'bnk' => 0,
    '_date' => 0,
    '_ok' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56f67bc8715785_54854027',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56f67bc8715785_54854027')) {
function content_56f67bc8715785_54854027 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/var/www/html/mutasyon/libs/plugins/modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '98100072156f67bc86e8ee4_77611335';
?>
<!-- Modallar  -->
<div class="collapse topwind" id="paytoproviders">
      <div class="panel panel-red" style="background:#fff;">
	      <button type="button" class="close paytoprovidersm" data-toggle="collapse" href="#paytoproviders" style="margin-right: 10px;margin-top: 8px;"><span aria-hidden="true">×</span></button>
	      <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_payment']->value;?>
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
						      <span style="font-size: 25px;font-weight: bold;"><span><?php echo $_smarty_tpl->tpl_vars['_currency']->value;
echo $_smarty_tpl->tpl_vars['i']->value['invoice_providers_price']-$_smarty_tpl->tpl_vars['i']->value['payouttotal'];?>
</span>
						      <?php if (($_smarty_tpl->tpl_vars['i']->value['invoice_providers_price']-$_smarty_tpl->tpl_vars['i']->value['payouttotal']) != 0) {?>
							    <input type="hidden" name="ptotalpayment2" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['invoice_providers_price']-$_smarty_tpl->tpl_vars['i']->value['payouttotal'];?>
" />
						      <?php } else { ?>
							    <input type="hidden" name="ptotalpayment2" value="zero" />
						      <?php }?>
						</div>
					    </div>
					  </div>
				    
					 <div class="col-md-12">
					    <div class="form-group">
						<label for="inputName" class="control-label"><?php echo $_smarty_tpl->tpl_vars['_pay_amount']->value;?>
</label>
						<div class="input-icon right">
						    <i class="fa fa-credit-card"></i>
						    <input type="number" name="ppayment" class="form-control" step="0.01" autocomplete="off" />
						    <?php if ($_smarty_tpl->tpl_vars['page_name']->value == 'invoicedetail') {?>
							  <input type="hidden" name="ppserviceid" value="<?php echo Check::getValue("seid");?>
" class="form-control" />
							  <input type="hidden" name="providersid" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['invoice_providers'];?>
" class="form-control" />
							  <input type="hidden" name="serviceinvoiceno" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['invoice_no'];?>
" class="form-control" />
							  <input type="hidden" name="ppremain" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['invoice_no'];?>
" class="form-control" />
						    <?php }?>
					      </div>
					    </div>
					  </div>
					  
					 <div class="col-sm-12">
					      <label class="margin-top"><?php echo $_smarty_tpl->tpl_vars['_bank_name']->value;?>
</label>
					      <div class="input-group input-group-sm" id="bankn">
						    <span class="input-group-addon" id="sizing-addon3"><a data-toggle="collapse" href="#addbank" aria-expanded="false" title="<?php echo $_smarty_tpl->tpl_vars['_add_paytype']->value;?>
"><i class="fa fa-plus"></i></a></span>
						    <select class="form-control" name="ppbanklist">
							    <option value="empty"></option>
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
								    <option value="<?php echo $_smarty_tpl->tpl_vars['bnk']->value['bank_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['bnk']->value['bank_name'];?>
</option>
							    <?php
$_smarty_tpl->tpl_vars['bnk'] = $foreach_bnk_Sav;
}
?>
						    </select>
					      </div>
					</div>
					 
					 <div class="col-md-12">
						  <div class="form-group">
						      <label for="inputWebsite" class="control-label"><?php echo $_smarty_tpl->tpl_vars['_date']->value;?>
</label>
						      <div class="input-icon right">
							    <i class="fa fa-calendar"></i>
							    <input type="date" class="form-control" name="ppdate" value="<?php echo smarty_modifier_date_format(time(),'%Y-%m-%d');?>
" style="font-size: 11px;">
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