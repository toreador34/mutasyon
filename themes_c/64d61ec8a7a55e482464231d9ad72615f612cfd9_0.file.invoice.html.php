<?php /* Smarty version 3.1.27, created on 2016-04-22 13:42:10
         compiled from "/var/www/html/mutasyon/themes/default/invoice.html" */ ?>
<?php
/*%%SmartyHeaderCode:169310322571a0002a6c569_20006053%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64d61ec8a7a55e482464231d9ad72615f612cfd9' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/invoice.html',
      1 => 1461321724,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169310322571a0002a6c569_20006053',
  'variables' => 
  array (
    '_invoice' => 0,
    '_add_invoice' => 0,
    '_inf_add_invoice' => 0,
    '_add_service' => 0,
    '_inf_add_service' => 0,
    '_filter' => 0,
    'screen' => 0,
    '_no' => 0,
    '_desc' => 0,
    '_customer' => 0,
    '_user' => 0,
    '_bank' => 0,
    '_pay' => 0,
    '_remain' => 0,
    '_date' => 0,
    '_detail' => 0,
    'invoice' => 0,
    'inv' => 0,
    'company_name' => 0,
    '_currency' => 0,
    '_invoice_not_paid' => 0,
    '_invoice_paid' => 0,
    '_invoice_wait' => 0,
    'pagetotal' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_571a0002b4f145_52952532',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571a0002b4f145_52952532')) {
function content_571a0002b4f145_52952532 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '169310322571a0002a6c569_20006053';
echo $_smarty_tpl->getSubTemplate ('themes/default/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="container body-bg">
<!--Breadcrumb-->
  <ol class="breadcrumb hidden-print">
    <li><a href="index.php"><i class="fa fa-home" style="font-size: 20px;color:#000"></i></a></li>
    <li class="active"><?php echo $_smarty_tpl->tpl_vars['_invoice']->value;?>
</li>
  </ol>
<!--/Breadcrumb-->
    <div class="container-fluid" style="position:relative">
	  <a href="addinvoice.php" class="btn btn-primary pull-left"><i class="glyphicon glyphicon-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_add_invoice']->value;?>
</a>
<!-- 	  Infos -->
	  <div class="questions invoiceq" style="margin-top:-17px;margin-left:106px"><i class="fa fa-question-circle"></i></div>
		<div class="alert alert-info answer invoicea" style="display:none;margin-top:1px;margin-left:5px">
		<div class="col-sm-1">
		      <i class="glyphicon glyphicon-info-sign" style="font-size:40px;margin-left:-49px;margin-top:-13px;"></i>
		</div>
		<div class="col-sm-11 note-info">
		      <strong class="box-heading"><?php echo $_smarty_tpl->tpl_vars['_add_invoice']->value;?>
</strong>
		      <p><?php echo $_smarty_tpl->tpl_vars['_inf_add_invoice']->value;?>
</p>
		</div>
	  </div>
	  <a href="addservice.php" class="btn btn-green pull-left" style="margin-left:10px"><i class="glyphicon glyphicon-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_add_service']->value;?>
</a>
<!-- 	  Infos -->
	  <div class="questions serviceq" style="margin-top:-17px;margin-left:290px"><i class="fa fa-question-circle"></i></div>
		<div class="alert alert-info answer servicea" style="display:none;margin-top:1px;margin-left:43px">
		<div class="col-sm-1">
		      <i class="glyphicon glyphicon-info-sign" style="font-size:40px;margin-left:-49px;margin-top:-13px;"></i>
		</div>
		<div class="col-sm-11 note-info">
		      <strong class="box-heading"><?php echo $_smarty_tpl->tpl_vars['_add_service']->value;?>
</strong>
		      <p><?php echo $_smarty_tpl->tpl_vars['_inf_add_service']->value;?>
</p>
		</div>
	  </div>
    </div>
    <div class="container-fluid col-xs-12">
	  <div class="panel panel-default filterable">
			  <div class="panel-heading">
			      <h3 class="panel-title">Faturalar</h3>
			      <div class="pull-right">
				  <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> <?php echo $_smarty_tpl->tpl_vars['_filter']->value;?>
</button>
			      </div>
			  </div>
			  <div <?php if ($_smarty_tpl->tpl_vars['screen']->value == 'phone') {?> style="overflow:auto" <?php }?>>
				<table class="table">
				    <thead>
					<tr class="filters">
					    <th style="width:5%"><input type="text" class="form-control" placeholder="#" disabled></th>
					    <th style="width:16%"><input type="text" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['_no']->value;?>
" disabled></th>
					    <th style="width:10%"><input type="text" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['_desc']->value;?>
" disabled></th>
					    <th style="width:10%"><input type="text" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['_customer']->value;?>
" disabled></th>
					    <th style="width:12%"><input type="text" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['_user']->value;?>
" disabled></th>
					    <th style="width:11%"><input type="text" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['_bank']->value;?>
" disabled></th>
					    <th style="width:8%"><input type="text" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['_pay']->value;?>
" disabled></th>
					    <th style="width:8%"><input type="text" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['_remain']->value;?>
" disabled></th>
					    <th style="width:9%"><input type="text" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['_date']->value;?>
" disabled></th>
					    <th style="width:10%"><input type="text" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['_detail']->value;?>
" disabled></th>
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
						<a class="label 
						      <?php if ($_smarty_tpl->tpl_vars['inv']->value['invtotal'] != NULL) {?>
							    <?php if ($_smarty_tpl->tpl_vars['inv']->value['invoice_providers'] != 0 && $_smarty_tpl->tpl_vars['inv']->value['insertedservice_price'] == NULL) {?>
								  label-violet
							    <?php } elseif (($_smarty_tpl->tpl_vars['inv']->value['paytotal']+$_smarty_tpl->tpl_vars['inv']->value['invoice_discount']-$_smarty_tpl->tpl_vars['inv']->value['invtotal']) == 0) {?>
								  label-green
							    <?php } else { ?>
								  label-warning
							    <?php }?>
						      <?php } elseif ($_smarty_tpl->tpl_vars['inv']->value['servtotal'] != NULL) {?>
							    <?php if ($_smarty_tpl->tpl_vars['inv']->value['invoice_providers'] != 0 && $_smarty_tpl->tpl_vars['inv']->value['insertedservice_price'] == NULL) {?>
								  label-violet
							    <?php } elseif (($_smarty_tpl->tpl_vars['inv']->value['payservtotal']+$_smarty_tpl->tpl_vars['inv']->value['invoice_discount']-$_smarty_tpl->tpl_vars['inv']->value['servtotal']) == 0) {?>
								  label-green
							    <?php } else { ?>
								  label-warning
							    <?php }?>
						      <?php }?>
						" href="invoicedetail.php?<?php if ($_smarty_tpl->tpl_vars['inv']->value['invoice_providers'] != 0) {?>seid<?php } else { ?>iid<?php }?>=<?php echo $_smarty_tpl->tpl_vars['inv']->value['invoice_id'];?>
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
						      <?php } elseif ($_smarty_tpl->tpl_vars['inv']->value['providers_name'] != NULL) {?>
							    <a href="#"><?php echo $_smarty_tpl->tpl_vars['inv']->value['providers_name'];?>
</a>
						      <?php } else { ?>
							    <a href="#"><?php echo $_smarty_tpl->tpl_vars['company_name']->value;?>
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
			  </div>
		      </div>
		      <div>
		      <span class="label label-warning invoice-status"><?php echo $_smarty_tpl->tpl_vars['_invoice_not_paid']->value;?>
</span>
		      <span class="label label-green invoice-status"><?php echo $_smarty_tpl->tpl_vars['_invoice_paid']->value;?>
</span>
		      <span class="label label-violet invoice-status"><?php echo $_smarty_tpl->tpl_vars['_invoice_wait']->value;?>
</span>
		      <div style="padding-left:15px">
			  <ul class="pagination">
				<?php if (Check::getValue("page") > 1) {?>
				  <li><a href="?page=<?php echo Check::getValue("page")-1;?>
"><<</a></li>
				<?php } else { ?>
				  <li><a><<</a></li>
				<?php }?>
				<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['pagetotal']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['pagetotal']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
				  <li <?php if (Check::getValue("page") == $_smarty_tpl->tpl_vars['i']->value) {?> class="active" <?php }?>><a href="?page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
				<?php }} ?>
				<?php if (Check::getValue("page") < $_smarty_tpl->tpl_vars['pagetotal']->value) {?>
				  <li><a href="?page=<?php echo Check::getValue("page")+1;?>
">>></a></li>
				<?php } else { ?>
				  <li><a>>></a></li>
				<?php }?>
			  </ul>
		      </div>
	  </div>
     </div><!--/container-fluid-->
</div><!--/container-->
<?php echo $_smarty_tpl->getSubTemplate ('themes/default/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 
<?php echo '<script'; ?>
>
$(document).on("click", ".serviceq", function(){
    $(".servicea").toggle();  
});
$(document).on("click", ".invoiceq", function(){
    $(".invoicea").toggle();  
});
<?php echo '</script'; ?>
>
<?php }
}
?>