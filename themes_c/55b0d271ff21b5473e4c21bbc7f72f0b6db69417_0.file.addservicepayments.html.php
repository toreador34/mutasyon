<?php /* Smarty version 3.1.27, created on 2016-03-26 14:08:40
         compiled from "/var/www/html/mutasyon/themes/default/service/addservicepayments.html" */ ?>
<?php
/*%%SmartyHeaderCode:117971075056f67bc86abcf5_49336786%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55b0d271ff21b5473e4c21bbc7f72f0b6db69417' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/service/addservicepayments.html',
      1 => 1456420638,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117971075056f67bc86abcf5_49336786',
  'variables' => 
  array (
    '_payment' => 0,
    '_pay_amount' => 0,
    'page_name' => 0,
    'i' => 0,
    '_payment_type' => 0,
    '_add_paytype' => 0,
    'paytype' => 0,
    'typ' => 0,
    '_date' => 0,
    '_bank_name' => 0,
    'bank' => 0,
    'bnk' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56f67bc86d0060_72636222',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56f67bc86d0060_72636222')) {
function content_56f67bc86d0060_72636222 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/var/www/html/mutasyon/libs/plugins/modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '117971075056f67bc86abcf5_49336786';
?>
<div class="collapse topwind" id="payment">
      <div class="panel panel-green" style="background:#fff;">
	      <button type="button" class="close" data-toggle="collapse" href="#payment" style="margin-right: 10px;margin-top: 8px;"><span aria-hidden="true">×</span></button>
	      <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_payment']->value;?>
</div>
	      <div class="panel-body pan">
		      <form id="paymentform" action="payments.php" method="POST" class="reload">
		      <div class="form-body pal">
				<div class="row">
					<div class="col-md-12">
					    <div class="form-group">
						<label for="inputName" class="control-label"><?php echo $_smarty_tpl->tpl_vars['_pay_amount']->value;?>
</label>
						<div class="input-icon right">
						      <i class="fa fa-credit-card"></i>
						      <input type="number" name="payment" class="form-control" step="0.01" autocomplete="off" />
						      <?php if ($_smarty_tpl->tpl_vars['page_name']->value == 'invoicedetail') {?>
							    <input type="hidden" name="serviceid" value="<?php echo Check::getValue("seid");?>
"/>
							    <input type="hidden" name="custid" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['invoice_customer_id'];?>
"/>
							    <input type="hidden" class="getremain" name="getremain" value=""/>
							    <input type="hidden" class="invoiceno" name="invoiceno" value=""/>
						      <?php }?>
						</div>
					    </div>
					</div>
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
					    <label for="inputEmail" class="control-label"><?php echo $_smarty_tpl->tpl_vars['_date']->value;?>
</label>
					    <div class="input-icon right">
						<i class="fa fa-calendar"></i>
						<input type="date" class="form-control" name="date" value="<?php echo smarty_modifier_date_format(time(),'%Y-%m-%d');?>
" style="font-size: 11px;">
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
				    <div class="form-actions text-right pal">
					<button type="submit" class="btn btn-info btn-xs margin-top"><?php echo $_smarty_tpl->tpl_vars['_payment']->value;?>
</button>
				    </div>
				</div>
			</div>
			</form>
	      </div>
      </div>
</div>
<?php }
}
?>