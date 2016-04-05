<?php /* Smarty version 3.1.27, created on 2016-04-01 16:37:29
         compiled from "/var/www/html/mutasyon/themes/default/payments/addpayments.html" */ ?>
<?php
/*%%SmartyHeaderCode:156973804156fe79997c31e4_11631575%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64a8997c03506961092d16990b94a06222366468' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/payments/addpayments.html',
      1 => 1459517771,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156973804156fe79997c31e4_11631575',
  'variables' => 
  array (
    '_payment' => 0,
    'page_name' => 0,
    '_invoice' => 0,
    'invoice' => 0,
    'in' => 0,
    '_pay_amount' => 0,
    'i' => 0,
    '_payment_type' => 0,
    '_advance' => 0,
    '_credit' => 0,
    '_eft' => 0,
    '_date' => 0,
    '_bank_name' => 0,
    '_add_paytype' => 0,
    'bank' => 0,
    'bnk' => 0,
    '_desc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56fe79997faee5_63312537',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56fe79997faee5_63312537')) {
function content_56fe79997faee5_63312537 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/var/www/html/mutasyon/libs/plugins/modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '156973804156fe79997c31e4_11631575';
?>
<div class="collapse topwind" id="payment">
      <div class="panel panel-green" style="background:#fff;">
	      <button type="button" class="close" data-toggle="collapse" href="#payment" style="margin-right: 10px;margin-top: 8px;"><span aria-hidden="true">×</span></button>
	      <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_payment']->value;?>
</div>
	      <div class="panel-body pan">
		      <form id="paymentform" action="payments.php" method="POST" class="reload">
		      <div class="form-body pal">
				<div class="navbar">
				      <?php if ($_smarty_tpl->tpl_vars['page_name']->value != 'invoicedetail') {?>
					      <div class="col-md-12">
						      <div class="form-group">
							    <label for="inputWebsite" class="control-label"><?php echo $_smarty_tpl->tpl_vars['_invoice']->value;?>
</label>
							    <div class="input-icon right">
								<select class="form-control" name="invoiceid1">
								  <option value="empty"></option>
								  <?php
$_from = $_smarty_tpl->tpl_vars['invoice']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['in'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['in']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['in']->value) {
$_smarty_tpl->tpl_vars['in']->_loop = true;
$foreach_in_Sav = $_smarty_tpl->tpl_vars['in'];
?>
									  <option value="<?php echo $_smarty_tpl->tpl_vars['in']->value['invoice_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['in']->value['invoice_no'];?>
 - <?php echo $_smarty_tpl->tpl_vars['in']->value['invoice_customer_id'];?>
 - <?php echo $_smarty_tpl->tpl_vars['in']->value['invtotal']-$_smarty_tpl->tpl_vars['in']->value['paytotal']-$_smarty_tpl->tpl_vars['in']->value['invoice_discount'];?>
</option>
								  <?php
$_smarty_tpl->tpl_vars['in'] = $foreach_in_Sav;
}
?>
								</select>
							    </div>
						      </div>
						</div>
					<?php }?>
					<div class="col-md-12">
					    <div class="form-group">
						<label for="inputName" class="control-label"><?php echo $_smarty_tpl->tpl_vars['_pay_amount']->value;?>
</label>
						<div class="input-icon right">
						    <i class="fa fa-credit-card"></i>
						    <input type="number" name="payment" class="form-control" step="0.01" autocomplete="off"  />
						    <?php if ($_smarty_tpl->tpl_vars['page_name']->value == 'invoicedetail') {?>
							  <input type="hidden" name="invoiceid" value="<?php echo Check::getValue("iid");?>
" class="form-control" />
							  <input type="hidden" name="customerid" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['invoice_customer_id'];?>
" class="form-control" />
							  <input type="hidden" name="invoiceno" class="form-control" />
						    <?php }?>
						</div>
					    </div>
					</div>
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
						<label for="inputEmail" class="control-label"><?php echo $_smarty_tpl->tpl_vars['_date']->value;?>
</label>
						<div class="input-icon right">
						    <i class="fa fa-calendar"></i>
						    <input type="date" class="form-control" name="date" value="<?php echo smarty_modifier_date_format(time(),'%Y-%m-%d');?>
" style="font-size: 11px;" />
						    <input type="hidden" name="getremain" class="form-control getremain" />
						</div>
					    </div>
					</div>
					<div class="col-sm-12">
					      <label class="margin-top"><?php echo $_smarty_tpl->tpl_vars['_bank_name']->value;?>
</label>
					      <div class="input-group input-group-sm bankn">
						    <span class="input-group-addon" id="sizing-addon3"><a data-toggle="collapse" href="#addbank" aria-expanded="false" title="<?php echo $_smarty_tpl->tpl_vars['_add_paytype']->value;?>
"><i class="fa fa-plus"></i></a></span>
						    <select class="form-control" name="banklist">
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
					<?php if ($_smarty_tpl->tpl_vars['page_name']->value != 'invoicedetail') {?>
						      <div class="col-md-12">
							    <div class="form-group">
								  <label for="inputWebsite" class="control-label"><?php echo $_smarty_tpl->tpl_vars['_desc']->value;?>
</label>
								  <div class="input-icon right">
								      <textarea name="desc" class="form-control" row="2"></textarea>
								  </div>
							  </div>
						      </div>
					<?php }?>
					<div class="form-actions text-right pal">
					    <button type="submit" class="btn btn-info btn-xs margin-top"><?php echo $_smarty_tpl->tpl_vars['_payment']->value;?>
</button>
					</div>
				</div><!--/navbar-->
		      </div>
		      </form>
	      </div>
      </div>
</div><?php }
}
?>