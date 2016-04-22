<?php /* Smarty version 3.1.27, created on 2016-04-20 22:08:01
         compiled from "/var/www/html/mutasyon/themes/default/stock/sellstock.html" */ ?>
<?php
/*%%SmartyHeaderCode:17277959865717d391ebfc05_54456946%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c837134b1f4642dc567b671822085bd4919f3efe' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/stock/sellstock.html',
      1 => 1458992929,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17277959865717d391ebfc05_54456946',
  'variables' => 
  array (
    '_sale' => 0,
    '_total' => 0,
    '_currency' => 0,
    'page_name' => 0,
    's' => 0,
    '_amount' => 0,
    '_discount' => 0,
    '_desc' => 0,
    '_customer' => 0,
    '_addcustomer' => 0,
    'customers' => 0,
    'c' => 0,
    '_invoiceadj' => 0,
    '_add_invoiceadj' => 0,
    'invoiceadj' => 0,
    'adj' => 0,
    '_date' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5717d391eeefb5_55593025',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5717d391eeefb5_55593025')) {
function content_5717d391eeefb5_55593025 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/var/www/html/mutasyon/libs/plugins/modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '17277959865717d391ebfc05_54456946';
?>
<!-- Modallar  -->
<div class="collapse topwind" id="sellstock">
      <div class="panel panel-green" style="background:#fff;">
	      <button type="button" class="close sellstockm" data-toggle="collapse" href="#sellstock" style="margin-right: 10px;margin-top: 8px;"><span aria-hidden="true">×</span></button>
	      <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_sale']->value;?>
</div>
	      <div class="panel-body pan">
		      <form class="reload" action="addinvoice.php" method="POST">
			    <div class="form-body pal">
				    <div class="navbar">
					 <div class="col-md-12">
					      <div class="form-group">
						  <div class="input-icon right">
						      <span style="font-size:20px;font-weight:bold"><?php echo $_smarty_tpl->tpl_vars['_total']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['_currency']->value;?>
<span class="totalinv"><?php if ($_smarty_tpl->tpl_vars['page_name']->value == "productdetail") {
echo $_smarty_tpl->tpl_vars['s']->value['stock_price_out'];
}?></span></span>
						      <input type="hidden" name="price[]" id="price" <?php if ($_smarty_tpl->tpl_vars['page_name']->value == "productdetail") {?>value="<?php echo $_smarty_tpl->tpl_vars['s']->value['stock_price_out'];?>
"<?php }?> />
						      <input type="hidden" name="totalinv" <?php if ($_smarty_tpl->tpl_vars['page_name']->value == "productdetail") {?>value="<?php echo $_smarty_tpl->tpl_vars['s']->value['stock_price_out'];?>
"<?php }?> />
						      <input type="hidden" name="productname[]" <?php if ($_smarty_tpl->tpl_vars['page_name']->value == "productdetail") {?>value="<?php echo $_smarty_tpl->tpl_vars['s']->value['stock_name'];?>
"<?php }?> />
						</div>
					      </div>
					  </div> 
					 <div class="col-md-12">
					      <div class="form-group">
						  <div class="input-icon right">
						      <i class="fa fa-credit-card"></i>
						      <input type="number" name="amount[]" class="form-control amount" autocomplete="off" placeholder="<?php echo $_smarty_tpl->tpl_vars['_amount']->value;?>
" value="1" />
						</div>
					      </div>
					  </div> 
					 <div class="col-md-12">
					      <div class="form-group">
						  <div class="input-icon right">
						      <i class="fa fa-credit-card"></i>
							  <input id="discount" type="number" class="form-control" name="discount1" step="0.01" autocomplete="off" placeholder="<?php echo $_smarty_tpl->tpl_vars['_discount']->value;?>
" value="0" />
						  </div>
					      </div>
					  </div> 
					 <div class="col-md-12">
					      <div class="form-group">
						  <label class="margin-top"><?php echo $_smarty_tpl->tpl_vars['_desc']->value;?>
</label>
						  <div class="input-icon right">
						      <i class="fa fa-credit-card"></i>
							  <textarea rows="4" class="form-control invdesc" type="textarea" name="desc1"></textarea>
						</div>
					      </div>
					  </div> 
					  <div class="col-md-12">
						<div class="form-group">
						    <label for="inputWebsite" class="control-label"><?php echo $_smarty_tpl->tpl_vars['_customer']->value;?>
</label>
						    <div class="input-group input-group-sm customer">
							  <span class="input-group-addon"><a data-toggle="collapse" href="#addcustomer" aria-expanded="false" title="<?php echo $_smarty_tpl->tpl_vars['_addcustomer']->value;?>
"><i class="fa fa-plus"></i></a></span>
							  <select class="form-control custid" name="custid1">
								<option value="empty"></option>
							      <?php
$_from = $_smarty_tpl->tpl_vars['customers']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['c'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['c']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
$foreach_c_Sav = $_smarty_tpl->tpl_vars['c'];
?>
								  <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['cust_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['cust_name'];?>
</option>
							      <?php
$_smarty_tpl->tpl_vars['c'] = $foreach_c_Sav;
}
?>
							  </select>
						    </div>
						</div>
					  </div>
					  <div class="col-md-12">
					      <div class="form-group">
						  <label for="inputWebsite" class="control-label"><?php echo $_smarty_tpl->tpl_vars['_invoiceadj']->value;?>
</label>
						  <div class="input-group input-group-sm invadj">
							<span class="input-group-addon"><a data-toggle="collapse" href="#addadj" aria-expanded="false" title="<?php echo $_smarty_tpl->tpl_vars['_add_invoiceadj']->value;?>
"><i class="fa fa-plus"></i></a></span>
							<select class="form-control invoiceadj" style="width:100%" name="adjp1">
							      <option value="empty"></option>
							    <?php
$_from = $_smarty_tpl->tpl_vars['invoiceadj']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['adj'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['adj']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['adj']->value) {
$_smarty_tpl->tpl_vars['adj']->_loop = true;
$foreach_adj_Sav = $_smarty_tpl->tpl_vars['adj'];
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['adj']->value['invoiceadj_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['adj']->value['invoiceadj_name'];?>
</option>
							    <?php
$_smarty_tpl->tpl_vars['adj'] = $foreach_adj_Sav;
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
							  <input type="date" class="form-control" name="date1" value="<?php echo smarty_modifier_date_format(time(),'%Y-%m-%d');?>
" />    
						    </div>
						</div>
					  </div>
				    </div><!--/row-->
				    <button type="submit" class="btn btn-info btn-xs margin-top"><?php echo $_smarty_tpl->tpl_vars['_sale']->value;?>
</button>
			    </div><!--/form-body-->
		      </form>
	      </div><!--/panel-body-->
      </div><!--/panel-->
</div><!--/topwind--><?php }
}
?>