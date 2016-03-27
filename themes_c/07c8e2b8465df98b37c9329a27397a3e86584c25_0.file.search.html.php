<?php /* Smarty version 3.1.27, created on 2016-03-27 22:16:48
         compiled from "/var/www/html/mutasyon/themes/default/search.html" */ ?>
<?php
/*%%SmartyHeaderCode:112048871156f831a091b3e6_19231266%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07c8e2b8465df98b37c9329a27397a3e86584c25' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/search.html',
      1 => 1457205628,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112048871156f831a091b3e6_19231266',
  'variables' => 
  array (
    '_search' => 0,
    '_stock_list' => 0,
    'countstock' => 0,
    'screen' => 0,
    'stock' => 0,
    'st' => 0,
    'main_img' => 0,
    '_currency' => 0,
    '_customer' => 0,
    'countcust' => 0,
    'customer' => 0,
    'row' => 0,
    '_buyinvoice' => 0,
    'countbinv' => 0,
    '_no' => 0,
    '_seller' => 0,
    '_user' => 0,
    '_bank' => 0,
    '_pay' => 0,
    '_remain' => 0,
    '_date' => 0,
    '_detail' => 0,
    'buyinvoice' => 0,
    'binv' => 0,
    '_invoice' => 0,
    'countinv' => 0,
    '_desc' => 0,
    'invoice' => 0,
    'inv' => 0,
    '_sales_list_payment' => 0,
    'countpi' => 0,
    '_amount' => 0,
    'paymentlist' => 0,
    'p' => 0,
    '_buy_list_payment' => 0,
    'countpo' => 0,
    'payoutlist' => 0,
    'po' => 0,
    'topsearch' => 0,
    'sc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56f831a0b63439_65883462',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56f831a0b63439_65883462')) {
function content_56f831a0b63439_65883462 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once '/var/www/html/mutasyon/libs/plugins/modifier.truncate.php';

$_smarty_tpl->properties['nocache_hash'] = '112048871156f831a091b3e6_19231266';
echo $_smarty_tpl->getSubTemplate ('themes/default/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 
<div class="container body-bg">
	<!--Breadcrumb-->
	  <ol class="breadcrumb hidden-print">
	    <li><a href="index.php"><i class="fa fa-home" style="font-size: 20px;color:#000"></i></a></li>
	    <li class="active"><?php echo $_smarty_tpl->tpl_vars['_search']->value;?>
</li>
	  </ol>
	<!--/Breadcrumb-->
	<div class="col-xs-12">
		<div class="row">
		      <div class="col-xs-12">
			    <div class="well">
				  <?php echo $_smarty_tpl->getSubTemplate ('themes/default/header/search.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

			    </div>
		      </div>
		</div>
		<div class="row">
			<div class="col-xs-12">
			    <div class="panel-group" id="accordion"><!--Stock-->
				 <div class="panel panel-default">
					<div class="panel-heading">
					    <h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#stock"><span class="fa fa-file-text">
						</span> <?php echo $_smarty_tpl->tpl_vars['_stock_list']->value;?>
</a><span id="stocktc" class="badge badge-orange"><?php echo $_smarty_tpl->tpl_vars['countstock']->value;?>
</span>
					    </h4>
					</div>
					<div id="stock" class="panel-collapse collapse">
						<div class="panel-body" <?php if ($_smarty_tpl->tpl_vars['screen']->value == 'phone') {?> style="overflow:auto" <?php }?>>
						      <?php
$_from = $_smarty_tpl->tpl_vars['stock']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['st'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['st']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['st']->value) {
$_smarty_tpl->tpl_vars['st']->_loop = true;
$foreach_st_Sav = $_smarty_tpl->tpl_vars['st'];
?>
							    <div class="col-sm-2">
								  <div class="prbox <?php if ($_smarty_tpl->tpl_vars['st']->value['stock_amount'] == 0) {?>alert-danger<?php } else { ?>alert-success<?php }?>">
									<div class="productlist">
									      <a href="productdetail.php?sid=<?php echo $_smarty_tpl->tpl_vars['st']->value['stock_id'];?>
">
										    <img src="<?php if ($_smarty_tpl->tpl_vars['st']->value['images_id']) {
echo $_smarty_tpl->tpl_vars['main_img']->value;?>
/products/<?php echo $_smarty_tpl->tpl_vars['st']->value['stock_id'];?>
/large/<?php echo $_smarty_tpl->tpl_vars['st']->value['images_id'];?>
-large.jpg<?php } else {
echo $_smarty_tpl->tpl_vars['main_img']->value;?>
/noimage-large.jpg<?php }?>" alt="<?php echo $_smarty_tpl->tpl_vars['st']->value['images_title'];?>
" />
									      </a>
									</div>
									<div class="prname">
									      <span><a href="productdetail.php?sid=<?php echo $_smarty_tpl->tpl_vars['st']->value['stock_id'];?>
"><span class="names"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['st']->value['stock_name'],30);?>
</span></a></span>
									      <input type="hidden" class="ctname" value="<?php echo $_smarty_tpl->tpl_vars['st']->value['category_name'];?>
" />
									</div>
									<div class="prdetail">
									      <?php if ($_smarty_tpl->tpl_vars['st']->value['stock_detail'] == '') {?>Açıklama Bulunamadı!<?php } else {
echo smarty_modifier_truncate(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['st']->value['stock_detail'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'),40);
}?>
									</div>
									<div class="pramount">
									      <?php if ($_smarty_tpl->tpl_vars['st']->value['stock_amount'] == 0) {?>Stokta Kalmadı!<?php } else { ?><span>Stok Miktarı :</span><?php echo $_smarty_tpl->tpl_vars['st']->value['stock_amount'];
}?>
									</div>
									<div class="prtotal">
									      <span>Satış Fiyatı :</span><span><?php echo $_smarty_tpl->tpl_vars['_currency']->value;?>
</span><?php echo $_smarty_tpl->tpl_vars['st']->value['stock_price_out'];?>

									</div>
								  </div>
							    </div>
						      <?php
$_smarty_tpl->tpl_vars['st'] = $foreach_st_Sav;
}
?>
						</div><!--/panel-body-->
					</div><!--/panel-collapse collapse-->
				 </div><!--/panel panel-default-->
			    </div><!--/panel-group-->
			    
			    <div class="panel-group" id="accordion"><!--Customer-->
				 <div class="panel panel-default">
					<div class="panel-heading">
					    <h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#customer"><span class="fa fa-users">
						</span> <?php echo $_smarty_tpl->tpl_vars['_customer']->value;?>
</a><span id="custtc" class="badge badge-blue"><?php echo $_smarty_tpl->tpl_vars['countcust']->value;?>
</span>
					    </h4>
					</div>
					<div id="customer" class="panel-collapse collapse">
						<div class="panel-body" <?php if ($_smarty_tpl->tpl_vars['screen']->value == 'phone') {?> style="overflow:auto" <?php }?>>
							<table class="table table-hover table-bordered table-striped">
								<thead>
								    <tr>
									  <th>ID</th>
									  <th><?php echo $_smarty_tpl->tpl_vars['_customer']->value;?>
</th>
									  <th>Mail</th>
									  <th>Web</th>
									  <th>Telefon</th>
									  <th>Adres</th>
								    </tr>
								</thead>
								<tbody>
								  <?php
$_from = $_smarty_tpl->tpl_vars['customer']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$foreach_row_Sav = $_smarty_tpl->tpl_vars['row'];
?>
								    <tr>
									<td><?php echo $_smarty_tpl->tpl_vars['row']->value['cust_id'];?>
</td>
									<td> 
									    <a class="h5" href="custdetail.php?cid=<?php echo $_smarty_tpl->tpl_vars['row']->value['cust_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['cust_name'];?>
</a>
									</td>
									<td><?php echo $_smarty_tpl->tpl_vars['row']->value['cust_mail'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['row']->value['cust_web'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['row']->value['cust_tel'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['row']->value['cust_address'];?>
</td>
								    </tr>
								  <?php
$_smarty_tpl->tpl_vars['row'] = $foreach_row_Sav;
}
?>
								</tbody>
							</table>
						</div><!--/panel-body-->
					</div><!--/panel-collapse collapse-->
				 </div><!--/panel panel-default-->
			    </div><!--/panel-group-->
			    
			    
			    <div class="panel-group" id="accordion"><!--Buyinvoice-->
				 <div class="panel panel-default">
					<div class="panel-heading">
					    <h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#buyinvoice"><span class="fa fa-plus-square-o">
						</span> <?php echo $_smarty_tpl->tpl_vars['_buyinvoice']->value;?>
</a><span id="buyinvtc" class="badge badge-red"><?php echo $_smarty_tpl->tpl_vars['countbinv']->value;?>
</span>
					    </h4>
					</div>
					<div id="buyinvoice" class="panel-collapse collapse">
						<div class="panel-body" <?php if ($_smarty_tpl->tpl_vars['screen']->value == 'phone') {?> style="overflow:auto" <?php }?>>
							<table class="table">
							    <thead>
								<tr class="filters">
								    <th style="width:16%"><?php echo $_smarty_tpl->tpl_vars['_no']->value;?>
</th>
								    <th style="width:10%">Açıklama</th>
								    <th style="width:10%"><?php echo $_smarty_tpl->tpl_vars['_seller']->value;?>
</th>
								    <th style="width:12%"><?php echo $_smarty_tpl->tpl_vars['_user']->value;?>
</th>
								    <th style="width:11%"><?php echo $_smarty_tpl->tpl_vars['_bank']->value;?>
</th>
								    <th style="width:8%"><?php echo $_smarty_tpl->tpl_vars['_pay']->value;?>
</th>
								    <th style="width:8%"><?php echo $_smarty_tpl->tpl_vars['_remain']->value;?>
</th>
								    <th style="width:9%"><?php echo $_smarty_tpl->tpl_vars['_date']->value;?>
</th>
								    <th style="width:10%"><?php echo $_smarty_tpl->tpl_vars['_detail']->value;?>
</th>
								</tr>
							    </thead>
							    <tbody>
							      <?php
$_from = $_smarty_tpl->tpl_vars['buyinvoice']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['binv'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['binv']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['binv']->value) {
$_smarty_tpl->tpl_vars['binv']->_loop = true;
$foreach_binv_Sav = $_smarty_tpl->tpl_vars['binv'];
?>
								  <tr>
									<td>
									<a href="invoicedetail.php?bid=<?php echo $_smarty_tpl->tpl_vars['binv']->value['bi_id'];?>
" class="<?php if ($_smarty_tpl->tpl_vars['binv']->value['pay_total'] < $_smarty_tpl->tpl_vars['binv']->value['invoice_total']) {?>btn-warning<?php } else { ?>btn-success<?php }?> invoice-status"><?php echo $_smarty_tpl->tpl_vars['binv']->value['bi_no'];?>
</a>
									</td>
									<td style="font-size:11px"><?php echo $_smarty_tpl->tpl_vars['binv']->value['bi_desc'];?>
</td>
									<td><a href="custdetail.php"><?php echo $_smarty_tpl->tpl_vars['binv']->value['seller_name'];?>
</a></td>
									<td><a href="settings.php"><?php echo $_smarty_tpl->tpl_vars['binv']->value['name_surname'];?>
</a></td>
									<td><a href="settings.php"><?php echo $_smarty_tpl->tpl_vars['binv']->value['bank_name'];?>
</a></td>
									<td><?php if ($_smarty_tpl->tpl_vars['binv']->value['pay_total'] == '') {?><span><?php echo $_smarty_tpl->tpl_vars['_currency']->value;?>
</span>0<?php } else { ?><span><?php echo $_smarty_tpl->tpl_vars['_currency']->value;?>
</span><?php echo $_smarty_tpl->tpl_vars['binv']->value['pay_total'];
}?></td>
									<td><span><?php echo $_smarty_tpl->tpl_vars['_currency']->value;?>
</span><?php echo $_smarty_tpl->tpl_vars['binv']->value['invoice_total']-$_smarty_tpl->tpl_vars['binv']->value['pay_total'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['binv']->value['bi_date'];?>
</td>
									<td>
									    <i class="glyphicon glyphicon-envelope" style="margin-right: 5px;font-size: 17px;" title="E-posta olarak yolla"></i>
									    <i class="glyphicon glyphicon-file" style="margin-right: 5px;font-size: 17px;color: #d9534f" title="PDF olarak göster"></i>
									    <i class="glyphicon glyphicon-save" alt="E-posta olarak yolla" title="Bilgisayarıma indir"></i>
									</td>
								    </tr>
							      <?php
$_smarty_tpl->tpl_vars['binv'] = $foreach_binv_Sav;
}
?>
							    </tbody>
							</table>
						</div><!--/panel-body-->
					</div><!--/panel-collapse collapse-->
				 </div><!--/panel panel-default-->
			    </div><!--/panel-group-->
			    
			    
			    <div class="panel-group" id="accordion"><!--Invoice-->
				 <div class="panel panel-default">
					<div class="panel-heading">
					    <h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#invoice"><span class="fa fa-minus-square-o">
						</span> <?php echo $_smarty_tpl->tpl_vars['_invoice']->value;?>
</a><span id="invtc" class="badge badge-green"><?php echo $_smarty_tpl->tpl_vars['countinv']->value;?>
</span>
					    </h4>
					</div>
					<div id="invoice" class="panel-collapse collapse">
						<div class="panel-body" <?php if ($_smarty_tpl->tpl_vars['screen']->value == 'phone') {?> style="overflow:auto" <?php }?>>
							<table class="table">
							      <thead>
								  <tr class="filters">
								      <th style="width:5%">#</th>
								      <th style="width:16%"><?php echo $_smarty_tpl->tpl_vars['_no']->value;?>
</th>
								      <th style="width:10%"><?php echo $_smarty_tpl->tpl_vars['_desc']->value;?>
</th>
								      <th style="width:10%"><?php echo $_smarty_tpl->tpl_vars['_customer']->value;?>
</th>
								      <th style="width:12%"><?php echo $_smarty_tpl->tpl_vars['_user']->value;?>
</th>
								      <th style="width:11%"><?php echo $_smarty_tpl->tpl_vars['_bank']->value;?>
</th>
								      <th style="width:8%"><?php echo $_smarty_tpl->tpl_vars['_pay']->value;?>
</th>
								      <th style="width:8%"><?php echo $_smarty_tpl->tpl_vars['_remain']->value;?>
</th>
								      <th style="width:9%"><?php echo $_smarty_tpl->tpl_vars['_date']->value;?>
</th>
								      <th style="width:10%"><?php echo $_smarty_tpl->tpl_vars['_detail']->value;?>
</th>
								  </tr>
							      </thead>
							      <tbody>
								<?php
$_from = $_smarty_tpl->tpl_vars['invoice']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['inv'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['inv']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['inv']->value) {
$_smarty_tpl->tpl_vars['inv']->_loop = true;
$foreach_inv_Sav = $_smarty_tpl->tpl_vars['inv'];
?>
								    <tr <?php if ($_smarty_tpl->tpl_vars['inv']->value['invoice_cancelled'] == 1) {?> style="text-decoration: line-through;color:gray" <?php }?>>
									  <td><?php echo $_smarty_tpl->tpl_vars['inv']->value['invoice_id'];?>
</td>
									  <td>
									  <a class="label <?php if (($_smarty_tpl->tpl_vars['inv']->value['paytotal']) < ($_smarty_tpl->tpl_vars['inv']->value['invtotal']-$_smarty_tpl->tpl_vars['inv']->value['invoice_discount'])) {?>label-warning<?php } elseif ($_smarty_tpl->tpl_vars['inv']->value['invoice_cancelled'] == 1) {?>label-danger<?php } elseif ($_smarty_tpl->tpl_vars['inv']->value['invoice_providers'] != 0 && $_smarty_tpl->tpl_vars['inv']->value['insertedservice_price'] == NULL) {?>label-violet<?php } else { ?>label-success<?php }?> invoice-status" href="invoicedetail.php?<?php if ($_smarty_tpl->tpl_vars['inv']->value['invoice_providers'] != 0) {?>seid<?php } else { ?>iid<?php }?>=<?php echo $_smarty_tpl->tpl_vars['inv']->value['invoice_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['inv']->value['invoice_no'];?>
</a>
									  </td>
									  <td style="font-size:11px"><?php echo $_smarty_tpl->tpl_vars['inv']->value['invoice_description'];?>
</td>
									  <td><a href="custdetail.php?cid=<?php echo $_smarty_tpl->tpl_vars['inv']->value['invoice_customer_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['inv']->value['cust_name'];?>
</a></td>
									  <td><a href="settings.php"><?php echo $_smarty_tpl->tpl_vars['inv']->value['name_surname'];?>
</a></td>
									  <td>
										<?php if ($_smarty_tpl->tpl_vars['inv']->value['bank_name'] != NULL) {?>
										      <a href="settings.php"><?php echo $_smarty_tpl->tpl_vars['inv']->value['bank_name'];?>
</a>
										<?php } else { ?>
										      <a href="#"><?php echo $_smarty_tpl->tpl_vars['inv']->value['providers_name'];?>
</a>
										<?php }?>
									  </td>
									  <td>
										<a href="payments.php">
										      <span><?php echo $_smarty_tpl->tpl_vars['_currency']->value;?>
</span>
										      <?php if ($_smarty_tpl->tpl_vars['inv']->value['invoice_providers'] == 0) {?>
											    <?php if ($_smarty_tpl->tpl_vars['inv']->value['paytotal'] == '') {?>
												  0
											    <?php } else { ?>
												  <?php echo $_smarty_tpl->tpl_vars['inv']->value['paytotal'];?>

											    <?php }?>
										      <?php } else { ?>
											    <?php if ($_smarty_tpl->tpl_vars['inv']->value['payservtotal'] == '') {?>
												  0
											    <?php } else { ?>
												  <?php echo $_smarty_tpl->tpl_vars['inv']->value['payservtotal'];?>

											    <?php }?>
										      <?php }?>
										</a>
									  </td>
									  <td>
										<span><?php echo $_smarty_tpl->tpl_vars['_currency']->value;?>
</span>
										<?php if ($_smarty_tpl->tpl_vars['inv']->value['invoice_providers'] == 0) {?>
										      <?php echo number_format(($_smarty_tpl->tpl_vars['inv']->value['invtotal']-$_smarty_tpl->tpl_vars['inv']->value['invoice_discount']-$_smarty_tpl->tpl_vars['inv']->value['paytotal']),2,".",'');?>

										<?php } else { ?>
										    <?php echo number_format(($_smarty_tpl->tpl_vars['inv']->value['servtotal']-$_smarty_tpl->tpl_vars['inv']->value['invoice_discount']-$_smarty_tpl->tpl_vars['inv']->value['payservtotal']),2,".",'');?>

										<?php }?>
									  </td>
									  <td><?php echo $_smarty_tpl->tpl_vars['inv']->value['invoice_date'];?>
</td>
									  <td>
									      <i class="glyphicon glyphicon-envelope" style="margin-right: 5px;font-size: 17px;" title="E-posta olarak yolla"></i>
									      <i class="glyphicon glyphicon-file" style="margin-right: 5px;font-size: 17px;color: #d9534f" title="PDF olarak göster"></i>
									      <i class="glyphicon glyphicon-save" alt="E-posta olarak yolla" title="Bilgisayarıma indir"></i>
									  </td>
								      </tr>
								<?php
$_smarty_tpl->tpl_vars['inv'] = $foreach_inv_Sav;
}
?>
							      </tbody>
							 </table>
						</div><!--/panel-body-->
					</div><!--/panel-collapse collapse-->
				 </div><!--/panel panel-default-->
			    </div><!--/panel-group-->
			    
			    
			    <div class="panel-group" id="accordion"><!--Payments-->
				 <div class="panel panel-default">
					<div class="panel-heading">
					    <h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#payments"><span class="fa fa-money">
						</span> <?php echo $_smarty_tpl->tpl_vars['_sales_list_payment']->value;?>
</a><span id="payintc" class="badge badge-orange"><?php echo $_smarty_tpl->tpl_vars['countpi']->value;?>
</span>
					    </h4>
					</div>
					<div id="payments" class="panel-collapse collapse">
						<div class="panel-body" <?php if ($_smarty_tpl->tpl_vars['screen']->value == 'phone') {?> style="overflow:auto" <?php }?>>
								<table class="table table-hover table-bordered table-striped">
									<thead>
									    <tr class="filters">
										<th style="width:4%">#</th>
										<th style="width:18%"><?php echo $_smarty_tpl->tpl_vars['_desc']->value;?>
</th>
										<th style="width:14%"><?php echo $_smarty_tpl->tpl_vars['_customer']->value;?>
</th>
										<th style="width:13%">Tür</th>
										<th style="width:17%"><?php echo $_smarty_tpl->tpl_vars['_bank']->value;?>
</th>
										<th style="width:14%"><?php echo $_smarty_tpl->tpl_vars['_user']->value;?>
</th>
										<th style="width:8%"><?php echo $_smarty_tpl->tpl_vars['_amount']->value;?>
</th>
										<th style="width:10%"><?php echo $_smarty_tpl->tpl_vars['_date']->value;?>
</th>
									    </tr>
									</thead>
									<tbody>
									  <?php
$_from = $_smarty_tpl->tpl_vars['paymentlist']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
?>
									    <tr>
										<td><a href="receipt.php?pid=<?php echo $_smarty_tpl->tpl_vars['p']->value['payment_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['payment_id'];?>
</a></td>
										<td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['payment_desc'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
										<td><a href="<?php if ($_smarty_tpl->tpl_vars['p']->value['cust_id'] != '') {?>custdetail.php?cid=<?php echo $_smarty_tpl->tpl_vars['p']->value['cust_id'];
} else { ?>#<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['cust_name'], ENT_QUOTES, 'UTF-8', true);?>
</a></td>
										<td>
										      <a href="invoicedetail.php?iid=<?php echo $_smarty_tpl->tpl_vars['p']->value['invoice_id'];?>
" style="padding:2px">
											    <span>
												  <?php if ($_smarty_tpl->tpl_vars['p']->value['payment_in_out'] == "out") {?>
													<i class="fa fa-sign-out" style="color:#bf4346"></i>
												  <?php } else { ?>
													<i class="fa fa-sign-in" style="color:darkgreen"></i>
												  <?php }?>
											    </span> 
											    <?php echo $_smarty_tpl->tpl_vars['p']->value['paytype_name'];?>

										      </a>
										</td>
										<td><a href="#"><?php echo $_smarty_tpl->tpl_vars['p']->value['bank_name'];?>
</a></td>
										<td><?php echo $_smarty_tpl->tpl_vars['p']->value['name_surname'];?>
</td>
										<td><span><?php echo $_smarty_tpl->tpl_vars['_currency']->value;?>
</span><span class="pays"><?php echo $_smarty_tpl->tpl_vars['p']->value['payment_amount'];?>
</span></td>
										<td><?php echo $_smarty_tpl->tpl_vars['p']->value['payment_date'];?>
</td>
									    </tr>
									  <?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?>
									</tbody>
								</table>
						</div><!--/panel-body-->
					</div><!--/panel-collapse collapse-->
				 </div><!--/panel panel-default-->
			    </div><!--/panel-group-->
			    
			    
			    <div class="panel-group" id="accordion"><!--Payments Out-->
				 <div class="panel panel-default">
					<div class="panel-heading">
					    <h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#payout"><span class="fa fa-money">
						</span> <?php echo $_smarty_tpl->tpl_vars['_buy_list_payment']->value;?>
</a><span id="payouttc" class="badge badge-red"><?php echo $_smarty_tpl->tpl_vars['countpo']->value;?>
</span>
					    </h4>
					</div>
					<div id="payout" class="panel-collapse collapse">
						<div class="panel-body" <?php if ($_smarty_tpl->tpl_vars['screen']->value == 'phone') {?> style="overflow:auto" <?php }?>>
						      <table class="table table-bordered table-striped">
							    <thead>
								<tr class="filters">
								    <th style="width:4%">#</th>
								    <th style="width:24%"><?php echo $_smarty_tpl->tpl_vars['_seller']->value;?>
</th>
								    <th style="width:25%"><?php echo $_smarty_tpl->tpl_vars['_desc']->value;?>
</th>
								    <th style="width:15%"><?php echo $_smarty_tpl->tpl_vars['_bank']->value;?>
</th>
								    <th style="width:12%"><?php echo $_smarty_tpl->tpl_vars['_user']->value;?>
</th>
								    <th style="width:8%"><?php echo $_smarty_tpl->tpl_vars['_amount']->value;?>
</th>
								    <th style="width:10%"><?php echo $_smarty_tpl->tpl_vars['_date']->value;?>
</th>
								</tr>
							    </thead>
							    <tbody>
							      <?php
$_from = $_smarty_tpl->tpl_vars['payoutlist']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['po'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['po']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['po']->value) {
$_smarty_tpl->tpl_vars['po']->_loop = true;
$foreach_po_Sav = $_smarty_tpl->tpl_vars['po'];
?>
								<tr>
								    <td><?php echo $_smarty_tpl->tpl_vars['po']->value['bpayments_id'];?>
</td>
								    <td><a href="custdetail.php?seid=<?php echo $_smarty_tpl->tpl_vars['po']->value['seller_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['po']->value['seller_name'];?>
</a></td>
								    <td><a href="invoicedetail.php?bid=<?php echo $_smarty_tpl->tpl_vars['po']->value['bi_id'];?>
" class="invoice-status"><i class="fa fa-sign-out" style="color:#bf4346"></i> <?php echo $_smarty_tpl->tpl_vars['po']->value['payment_desc'];?>
</a></td>
								    <td><a href="#"><?php echo $_smarty_tpl->tpl_vars['po']->value['bank_name'];?>
</a></td>
								    <td><?php echo $_smarty_tpl->tpl_vars['po']->value['name_surname'];?>
</td>
								    <td><span><?php echo $_smarty_tpl->tpl_vars['_currency']->value;?>
</span><span class="pays"><?php echo $_smarty_tpl->tpl_vars['po']->value['payment_amount'];?>
</span></td>
								    <td><?php echo $_smarty_tpl->tpl_vars['po']->value['payment_date'];?>
</td>
								</tr>
							      <?php
$_smarty_tpl->tpl_vars['po'] = $foreach_po_Sav;
}
?>
							    </tbody>
							</table>
						</div><!--/panel-body-->
					</div><!--/panel-collapse collapse-->
				 </div><!--/panel panel-default-->
			    </div><!--/panel-group-->
			    
			    
			</div>
		</div>	    
	</div><!--/col-xs-12-->
</div>
<?php
$_from = $_smarty_tpl->tpl_vars['topsearch']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['sc'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['sc']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['sc']->value) {
$_smarty_tpl->tpl_vars['sc']->_loop = true;
$foreach_sc_Sav = $_smarty_tpl->tpl_vars['sc'];
?>
      <span id="sc" style="display:none"><?php echo $_smarty_tpl->tpl_vars['sc']->value;?>
</span>
<?php
$_smarty_tpl->tpl_vars['sc'] = $foreach_sc_Sav;
}
?>
<?php echo $_smarty_tpl->getSubTemplate ('themes/default/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo '<script'; ?>
>
  var text = $("#sc").text();
  $('div.collapse').highlight(text);  
<?php echo '</script'; ?>
><?php }
}
?>