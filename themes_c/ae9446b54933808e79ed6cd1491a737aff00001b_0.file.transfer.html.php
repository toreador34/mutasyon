<?php /* Smarty version 3.1.27, created on 2016-04-01 16:57:21
         compiled from "/var/www/html/mutasyon/themes/default/payments/transfer.html" */ ?>
<?php
/*%%SmartyHeaderCode:142181510156fe7e41d3f9c2_96925748%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae9446b54933808e79ed6cd1491a737aff00001b' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/payments/transfer.html',
      1 => 1459518700,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142181510156fe7e41d3f9c2_96925748',
  'variables' => 
  array (
    '_transfer' => 0,
    '_pay_amount' => 0,
    '_payment_type' => 0,
    '_advance' => 0,
    '_credit' => 0,
    '_eft' => 0,
    '_date' => 0,
    '_from' => 0,
    'bank' => 0,
    'bnk' => 0,
    '_to' => 0,
    '_desc' => 0,
    '_payment' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56fe7e41f09762_19951357',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56fe7e41f09762_19951357')) {
function content_56fe7e41f09762_19951357 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/var/www/html/mutasyon/libs/plugins/modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '142181510156fe7e41d3f9c2_96925748';
?>
<div class="collapse topwind" id="transfer">
      <div class="panel panel-green" style="background:#fff;">
	      <button type="button" class="close" data-toggle="collapse" href="#transfer" style="margin-right: 10px;margin-top: 8px;"><span aria-hidden="true">×</span></button>
	      <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_transfer']->value;?>
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
						    <input type="number" name="tpayment" class="form-control" step="0.01" autocomplete="off" />
					      </div>
					  </div>
				    </div>
				    <div class="col-md-12">
					  <div class="form-group">
					      <label for="inputWebsite" class="control-label"><?php echo $_smarty_tpl->tpl_vars['_payment_type']->value;?>
</label>
					      <div class="input-icon right">
						      <div class="input-group">
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
					    </div>
					</div>
				    </div>
				    <div class="col-md-12">
					<div class="form-group">
					    <label for="inputWebsite" class="control-label"><?php echo $_smarty_tpl->tpl_vars['_from']->value;?>
</label>
					    <div class="input-icon right">
						<i class="fa fa-university"></i>
						<select class="form-control" name="bankfrom">
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
				    </div>
				    <div class="col-md-12">
					    <div class="form-group">
						    <label for="inputWebsite" class="control-label"><?php echo $_smarty_tpl->tpl_vars['_to']->value;?>
</label>
						    <div class="input-icon right">
							    <i class="fa fa-university"></i>
							    <select class="form-control" name="bankto">
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
				    </div>
				    <div class="col-md-12">
					  <div class="form-group">
						  <label for="inputWebsite" class="control-label"><?php echo $_smarty_tpl->tpl_vars['_desc']->value;?>
</label>
						  <div class="input-icon right">
						      <textarea name="desc" class="form-control" row="2"></textarea>
						  </div>
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
</div><?php }
}
?>