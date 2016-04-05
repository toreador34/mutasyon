<?php /* Smarty version 3.1.27, created on 2016-04-01 16:57:20
         compiled from "/var/www/html/mutasyon/themes/default/payments/addbuypayments.html" */ ?>
<?php
/*%%SmartyHeaderCode:52374341056fe7e40208dc1_16833633%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab0eb1ea6d764a5c9365a3dce88ed07d6a94a3b5' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/payments/addbuypayments.html',
      1 => 1459518688,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52374341056fe7e40208dc1_16833633',
  'variables' => 
  array (
    '_payment' => 0,
    'page_name' => 0,
    '_pay_amount' => 0,
    'i' => 0,
    '_invoice' => 0,
    'buyinvoice' => 0,
    'inv' => 0,
    '_currency' => 0,
    '_payment_type' => 0,
    '_advance' => 0,
    '_credit' => 0,
    '_eft' => 0,
    '_date' => 0,
    '_bank' => 0,
    'bank' => 0,
    'bnk' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56fe7e41359716_03229705',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56fe7e41359716_03229705')) {
function content_56fe7e41359716_03229705 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/var/www/html/mutasyon/libs/plugins/modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '52374341056fe7e40208dc1_16833633';
?>
<div class="collapse topwind" id="payment">
      <div class="panel panel-green" style="background:#fff;">
	      <button type="button" class="close" data-toggle="collapse" href="#payment" style="margin-right: 10px;margin-top: 8px;"><span aria-hidden="true">×</span></button>
	      <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_payment']->value;?>
</div>
	      <div class="panel-body pan">
		      <form class="reload" action="payments.php" method="POST">
			    <div class="form-body pal">
				    <div class="row">
					  <?php if ($_smarty_tpl->tpl_vars['page_name']->value == 'invoicedetail') {?>
					  <div class="col-md-12">
						<div class="form-group">
						    <label for="inputWebsite" class="control-label"><?php echo $_smarty_tpl->tpl_vars['_pay_amount']->value;?>
</label>
						    <div class="input-icon right">
							  <i class="fa fa-credit-card"></i>
							  <input type="number" name="buypayment" class="form-control buypayment" step="0.01" autocomplete="off" />
							  <input type="hidden" name="buyinvoiceid" value="<?php echo Check::getValue("bid");?>
" class="form-control" />
							  <input type="hidden" name="buyseller" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['seller_id'];?>
" class="form-control" />
							  <input type="hidden" name="buyremain" class="form-control" id="buyremain" value="" />
						    </div>
						</div>
					    </div>
					    <?php }?>
					    <?php if ($_smarty_tpl->tpl_vars['page_name']->value != 'invoicedetail') {?>
					      <div class="col-md-12">
						    <div class="form-group">
							  <label for="inputWebsite" class="control-label"><?php echo $_smarty_tpl->tpl_vars['_pay_amount']->value;?>
</label>
							  <div class="input-icon right">
							      <i class="fa fa-credit-card"></i>
							      <input type="number" name="buypayment" class="form-control buypayment" step="0.01" autocomplete="off" />
							      <input type="hidden" name="buyremain" class="form-control" id="buyremain" value="" />
							  </div>
						  </div>
					      </div>
					      <div class="col-md-12">
						    <div class="form-group">
							  <label for="inputWebsite" class="control-label"><?php echo $_smarty_tpl->tpl_vars['_invoice']->value;?>
</label>
							  <div class="input-icon right">
							      <select class="form-control buyinvoiceid" name="buyinvoiceid">
								  <option value="empty"></option>
								  <?php
$_from = $_smarty_tpl->tpl_vars['buyinvoice']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['inv'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['inv']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['inv']->value) {
$_smarty_tpl->tpl_vars['inv']->_loop = true;
$foreach_inv_Sav = $_smarty_tpl->tpl_vars['inv'];
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['inv']->value['bi_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['inv']->value['bi_no'];?>
 - <?php echo $_smarty_tpl->tpl_vars['inv']->value['seller_name'];?>
 - <?php echo $_smarty_tpl->tpl_vars['_currency']->value;
echo $_smarty_tpl->tpl_vars['inv']->value['total']-$_smarty_tpl->tpl_vars['inv']->value['pay'];?>
</option>
								  <?php
$_smarty_tpl->tpl_vars['inv'] = $foreach_inv_Sav;
}
?>
							    </select>
							  </div>
						  </div>
					      </div>
					     <?php }?>
					     <div class="col-sm-12">
						  <label class="margin-top"><?php echo $_smarty_tpl->tpl_vars['_payment_type']->value;?>
</label>
						  <div class="input-group input-group-sm">
							<div class="btn-group radioBtn">
								<a class="btn btn-green btn-xs" data-toggle="fun" data-title="1"><?php echo $_smarty_tpl->tpl_vars['_advance']->value;?>
</a>
								<a class="btn btn-orange btn-xs" data-toggle="fun" data-title="2"><?php echo $_smarty_tpl->tpl_vars['_credit']->value;?>
</a>
								<a class="btn btn-success btn-xs" data-toggle="fun" data-title="3"><?php echo $_smarty_tpl->tpl_vars['_eft']->value;?>
</a>
							</div>
							<input type="hidden" name="paytype" class="fun" />
						  </div>
					    </div>
					    <div class="col-md-12">
						  <div class="form-group">
						      <label for="inputWebsite" class="control-label"><?php echo $_smarty_tpl->tpl_vars['_date']->value;?>
</label>
						      <div class="input-icon right">
							    <i class="fa fa-calendar"></i>
							    <input type="date" class="form-control" name="buydate" value="<?php echo smarty_modifier_date_format(time(),'%Y-%m-%d');?>
" style="font-size: 11px;">
						      </div>
						  </div>
					    </div>
					    <div class="col-md-12">
						  <div class="form-group">
						      <label for="inputWebsite" class="control-label"><?php echo $_smarty_tpl->tpl_vars['_bank']->value;?>
</label>
						      <div class="input-icon right">
						      <i class="fa fa-university"></i>
							    <select class="form-control" name="buybank">
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
					    </div>
					    <div class="col-md-12">
						  <div class="form-group">
							<button type="submit" class="btn btn-info btn-xs margin-top">Ödeme Yap</button>
						  </div>
					    </div>
				    </div><!--/row-->
			    </div><!--/form-body-->
		      </form>
	      </div><!--/panel-body-->
      </div><!--/panel-->
</div><!--/topwind--><?php }
}
?>