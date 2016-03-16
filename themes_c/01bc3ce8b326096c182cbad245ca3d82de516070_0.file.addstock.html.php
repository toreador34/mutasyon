<?php /* Smarty version 3.1.27, created on 2016-03-16 19:56:24
         compiled from "/var/www/html/mutasyon/themes/default/stock/addstock.html" */ ?>
<?php
/*%%SmartyHeaderCode:24994851556e99e48f3baa8_13409444%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01bc3ce8b326096c182cbad245ca3d82de516070' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/stock/addstock.html',
      1 => 1457437273,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24994851556e99e48f3baa8_13409444',
  'variables' => 
  array (
    'page_name' => 0,
    's' => 0,
    '_price_in' => 0,
    '_price_out' => 0,
    '_amount' => 0,
    '_tax' => 0,
    '_add_tax' => 0,
    'tax' => 0,
    't' => 0,
    '_date' => 0,
    '_seller' => 0,
    '_addseller' => 0,
    'seller' => 0,
    'sll' => 0,
    '_virtual_product' => 0,
    '_dont_pay' => 0,
    '_price' => 0,
    '_bank_name' => 0,
    'bank' => 0,
    'bnk' => 0,
    '_payment' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56e99e49076172_58683549',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56e99e49076172_58683549')) {
function content_56e99e49076172_58683549 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/var/www/html/mutasyon/libs/plugins/modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '24994851556e99e48f3baa8_13409444';
?>
<div class="collapse topwind" id="buystock">
      <div class="panel panel-green" style="background:#fff;">
	      <button type="button" class="close" data-toggle="collapse" href="#buystock" style="margin-right: 10px;margin-top: 8px;"><span aria-hidden="true">×</span></button>
	      <div class="panel-heading" id="addstock-heading"><?php if ($_smarty_tpl->tpl_vars['page_name']->value == "productdetail") {
echo $_smarty_tpl->tpl_vars['s']->value['stock_name'];
}?></div>
	      <div class="panel-body pan">
		 <form id="paymentform" action="addbuyinvoice.php" method="POST" class="reload">
			<div class="form-actions pal">
				<div class="row">
					<div class="col-md-12">
					    <div class="form-group">
						<div class="input-icon right">
						    <i class="fa fa-credit-card"></i>
						    <input type="number" name="buyprice[]" class="form-control buyprice" step="0.01" autocomplete="off" placeholder="<?php echo $_smarty_tpl->tpl_vars['_price_in']->value;?>
" />
						    <input type="hidden" name="buyproductname[]" <?php if ($_smarty_tpl->tpl_vars['page_name']->value == "productdetail") {?>value="<?php echo $_smarty_tpl->tpl_vars['s']->value['stock_id'];?>
"<?php }?> class="form-control"/>
						    <input type="hidden" name="invtotal" id="invtotal"/>
					      </div>
					    </div>
					</div>
					<div class="col-md-12">
					    <div class="form-group">
						<div class="input-icon right">
						    <i class="fa fa-credit-card"></i>
						    <input type="number" name="saleprice[]" class="form-control saleprice" step="0.01" autocomplete="off" placeholder="<?php echo $_smarty_tpl->tpl_vars['_price_out']->value;?>
" />
					      </div>
					    </div>
					</div>
					<div class="col-md-12">
					      <div class="form-group">
						  <div class="input-icon right">
							<input type="number" name="buyamount[]" class="form-control buyamount" placeholder="<?php echo $_smarty_tpl->tpl_vars['_amount']->value;?>
" />    
						  </div>
					      </div>
					</div>
					<div class="col-md-12">
					    <div class="form-group">
						<label for="inputWebsite" class="control-label"><?php echo $_smarty_tpl->tpl_vars['_tax']->value;?>
</label>
						<div class="input-group input-group-sm tax">
						      <span class="input-group-addon" id="sizing-addon3"><a data-toggle="collapse" href="#addtax" aria-expanded="false" title="<?php echo $_smarty_tpl->tpl_vars['_add_tax']->value;?>
"><i class="fa fa-plus"></i></a></span>
						      <select name="buytax[]" class="form-control">
							    <?php
$_from = $_smarty_tpl->tpl_vars['tax']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['t']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$foreach_t_Sav = $_smarty_tpl->tpl_vars['t'];
?>
								  <option value="<?php echo $_smarty_tpl->tpl_vars['t']->value['tax_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['t']->value['tax_tax'];?>
</option>
							    <?php
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
?>
						    </select>
						 </div>
					    </div>
					</div>
					<div class="col-md-12">
					      <div class="form-group">
						  <label for="inputWebsite" class="control-label"><?php echo $_smarty_tpl->tpl_vars['_date']->value;?>
</label>
						  <div class="input-icon right">
							<input type="date" class="form-control" name="buydate" value="<?php echo smarty_modifier_date_format(time(),'%Y-%m-%d');?>
" />    
						  </div>
					      </div>
					</div>
					<div class="col-md-12">
					    <div class="form-group">
						<label for="inputWebsite" class="control-label"><?php echo $_smarty_tpl->tpl_vars['_seller']->value;?>
</label>				
						<div class="input-group input-group-sm" id="seller">
						      <span class="input-group-addon" id="sizing-addon3"><a data-toggle="collapse" href="#addseller" aria-expanded="false" title="<?php echo $_smarty_tpl->tpl_vars['_addseller']->value;?>
"><i class="fa fa-plus"></i></a></span>
						      <select class="form-control" name="buyseller">
								<option value="empty"></option>
								<?php
$_from = $_smarty_tpl->tpl_vars['seller']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['sll'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['sll']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['sll']->value) {
$_smarty_tpl->tpl_vars['sll']->_loop = true;
$foreach_sll_Sav = $_smarty_tpl->tpl_vars['sll'];
?>
								      <option value="<?php echo $_smarty_tpl->tpl_vars['sll']->value['seller_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['page_name']->value == "productdetail") {
if ($_smarty_tpl->tpl_vars['sll']->value['seller_id'] == $_smarty_tpl->tpl_vars['s']->value['stock_seller_id']) {?>selected<?php }
}?> ><?php echo $_smarty_tpl->tpl_vars['sll']->value['seller_name'];?>
</option>
								<?php
$_smarty_tpl->tpl_vars['sll'] = $foreach_sll_Sav;
}
?>
						      </select>
						 </div>
					    </div>
					</div>
					<div class="col-md-12">
					      <div class="form-group">
						  <label for="inputWebsite" class="control-label"><?php echo $_smarty_tpl->tpl_vars['_virtual_product']->value;?>
</label>
						  <div class="input-icon right">
							<input class="notvirtual" type="checkbox" name="virtual"/><span class="alert-info"> <?php echo $_smarty_tpl->tpl_vars['_dont_pay']->value;?>
</span>    
						  </div>
					      </div>
					</div>
					<div class="buybank">
					      <div class="col-md-12">
						    <div class="form-group">
							<input type="number" name="buypayment" class="form-control" step="0.01" autocomplete="off" placeholder="<?php echo $_smarty_tpl->tpl_vars['_price']->value;?>
" />
						    </div>
					      </div>
					      <div class="col-md-12">
						  <div class="form-group">
						      <label class="margin-top"><?php echo $_smarty_tpl->tpl_vars['_bank_name']->value;?>
</label>				
						      <div class="input-group input-group-sm bankn">
							    <span class="input-group-addon" id="sizing-addon3"><a data-toggle="collapse" href="#addbank" aria-expanded="false" title="<?php echo $_smarty_tpl->tpl_vars['_addseller']->value;?>
"><i class="fa fa-plus"></i></a></span>
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
" ><?php echo $_smarty_tpl->tpl_vars['bnk']->value['bank_name'];?>
</option>
								  <?php
$_smarty_tpl->tpl_vars['bnk'] = $foreach_bnk_Sav;
}
?>
							    </select>
						      </div>
						  </div>
					      </div>
					</div>
				</div><!--/row-->
				<button type="submit" class="btn btn-info btn-xs margin-top" id="binvsubmit"><?php echo $_smarty_tpl->tpl_vars['_payment']->value;?>
</button>
			</div>
		</form>
	      </div>
      </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('themes/default/seller/addseller.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('themes/default/taxprofit/addtax.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('themes/default/bank/addbank.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>