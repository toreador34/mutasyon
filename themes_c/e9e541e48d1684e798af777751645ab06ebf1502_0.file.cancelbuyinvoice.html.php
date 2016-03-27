<?php /* Smarty version 3.1.27, created on 2016-03-27 22:02:00
         compiled from "/var/www/html/mutasyon/themes/default/invoice/cancelbuyinvoice.html" */ ?>
<?php
/*%%SmartyHeaderCode:128717795356f82e28375492_05141275%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9e541e48d1684e798af777751645ab06ebf1502' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/invoice/cancelbuyinvoice.html',
      1 => 1456687532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '128717795356f82e28375492_05141275',
  'variables' => 
  array (
    '_cancel_invoice' => 0,
    '_refund' => 0,
    '_payment_type' => 0,
    '_add_paytype' => 0,
    'paytype' => 0,
    'typ' => 0,
    '_date' => 0,
    '_cancel_due' => 0,
    '_password' => 0,
    '_why_password_write' => 0,
    '_payment' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56f82e28399390_26608462',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56f82e28399390_26608462')) {
function content_56f82e28399390_26608462 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/var/www/html/mutasyon/libs/plugins/modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '128717795356f82e28375492_05141275';
?>
<div class="collapse topwind" id="cancelinvoice">
      <div class="panel panel-pink" style="background:#fff">
	      <button type="button" class="close" data-toggle="collapse" href="#cancelinvoice" style="margin-right: 10px;margin-top: 8px;"><span aria-hidden="true">×</span></button>
	      <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_cancel_invoice']->value;?>
</div>
	      <div class="panel-body pan">
		   <form id="paymentform" action="cancelinvoice.php" method="POST" class="reload">
			    <div class="form-body pal">
					      <div class="col-md-12">
						    <div class="form-group">
							<label for="inputName" class="control-label"><?php echo $_smarty_tpl->tpl_vars['_refund']->value;?>
</label>
							<div class="input-icon right">
							    <i class="fa fa-credit-card"></i>
							    <input type="number" name="refund" class="form-control refund" step="0.01" autocomplete="off" />
							    <input type="hidden" name="buyid" value="<?php echo Check::getValue("bid");?>
" class="form-control" />
							    <input type="hidden" name="paycancdesc" class="form-control" />
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
							  <label for="inputWebsite" class="control-label"><?php echo $_smarty_tpl->tpl_vars['_date']->value;?>
</label>
							  <div class="input-icon right">
							      <i class="fa fa-calendar"></i>
							      <input type="date" class="form-control margin-top cidate" name="date" value="<?php echo smarty_modifier_date_format(time(),'%Y-%m-%d');?>
" style="font-size: 11px;">
							  </div>
						      </div>
						</div>
						<div class="col-md-12">
						    <div class="form-group">
							<label for="inputEmail" class="control-label"><?php echo $_smarty_tpl->tpl_vars['_cancel_due']->value;?>
</label>
							<div class="input-icon right">
							    <textarea class="form-control cidue" row="3" name="cancdue"></textarea>
							</div>
						    </div>
						</div>
						<div class="col-md-12">
						    <div class="form-group">
							<label for="inputWebsite" class="control-label">
							      <?php echo $_smarty_tpl->tpl_vars['_password']->value;?>
 <i class="fa fa-question-circle" title="<?php echo $_smarty_tpl->tpl_vars['_why_password_write']->value;?>
"></i>
							</label>
							<div class="input-icon right">
							    <input type="password" name="password" class="form-control cipasswd" />
							</div>
						    </div>
						</div>
						<div class="form-actions text-right pal">
						      <button type="submit" class="btn btn-info btn-xs margin-top"><?php echo $_smarty_tpl->tpl_vars['_payment']->value;?>
</button>
						</div>
			    </div>
		    </form>   
	      </div><!--panel-body pan-->
      </div>
</div><?php }
}
?>