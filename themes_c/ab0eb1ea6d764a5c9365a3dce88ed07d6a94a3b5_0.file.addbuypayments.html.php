<?php /* Smarty version 3.1.27, created on 2016-03-27 22:02:00
         compiled from "/var/www/html/mutasyon/themes/default/payments/addbuypayments.html" */ ?>
<?php
/*%%SmartyHeaderCode:179398295256f82e28310145_66509561%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab0eb1ea6d764a5c9365a3dce88ed07d6a94a3b5' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/payments/addbuypayments.html',
      1 => 1456843118,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179398295256f82e28310145_66509561',
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
    '_add_paytype' => 0,
    'paytype' => 0,
    'typ' => 0,
    '_date' => 0,
    '_bank' => 0,
    'bank' => 0,
    'bnk' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56f82e2836db60_29376626',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56f82e2836db60_29376626')) {
function content_56f82e2836db60_29376626 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/var/www/html/mutasyon/libs/plugins/modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '179398295256f82e28310145_66509561';
?>
<div class="collapse topwind" id="payment">
      <div class="panel panel-green" style="background:#fff;">
	      <button type="button" class="close" data-toggle="collapse" href="#payment" style="margin-right: 10px;margin-top: 8px;"><span aria-hidden="true">×</span></button>
	      <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_payment']->value;?>
</div>
	      <div class="panel-body pan">
		      <form class="noload" action="payments.php" method="POST">
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
						  <div class="input-group input-group-sm servicetype">
							<span class="input-group-addon" id="sizing-addon3"><a data-toggle="collapse" href="#addpaytype" aria-expanded="false" title="<?php echo $_smarty_tpl->tpl_vars['_add_paytype']->value;?>
"><i class="fa fa-plus"></i></a></span>
							<select class="form-control" name="paytype">
							      <option value="empty"></option>
							      <?php
$_from = $_smarty_tpl->tpl_vars['paytype']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['typ'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['typ']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['typ']->value) {
$_smarty_tpl->tpl_vars['typ']->_loop = true;
$foreach_typ_Sav = $_smarty_tpl->tpl_vars['typ'];
?>
								      <option value="<?php echo $_smarty_tpl->tpl_vars['typ']->value['paytype_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['typ']->value['paytype_name'];?>
</option>
							      <?php
$_smarty_tpl->tpl_vars['typ'] = $foreach_typ_Sav;
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