<?php /* Smarty version 3.1.27, created on 2016-04-01 16:02:04
         compiled from "/var/www/html/mutasyon/themes/default/payments.html" */ ?>
<?php
/*%%SmartyHeaderCode:163802182356fe714c4cdd48_86223615%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2532fb4dfb3125d38b2fa4f1e932c1c544f9beb8' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/payments.html',
      1 => 1459515697,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163802182356fe714c4cdd48_86223615',
  'variables' => 
  array (
    '_invoice' => 0,
    '_payment_history' => 0,
    '_receipt' => 0,
    '_transfer' => 0,
    '_pay_out' => 0,
    '_filter' => 0,
    'screen' => 0,
    '_desc' => 0,
    '_customer' => 0,
    '_bank' => 0,
    '_user' => 0,
    '_amount' => 0,
    '_date' => 0,
    'paymentlist' => 0,
    'p' => 0,
    '_advance' => 0,
    '_credit' => 0,
    '_eft' => 0,
    '_currency' => 0,
    'pagetotal' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56fe714c563510_71267460',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56fe714c563510_71267460')) {
function content_56fe714c563510_71267460 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '163802182356fe714c4cdd48_86223615';
echo $_smarty_tpl->getSubTemplate ('themes/default/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="container body-bg">
<!--Breadcrumb-->
  <ol class="breadcrumb hidden-print">
    <li><a href="index.php"><i class="fa fa-home" style="font-size: 20px;color:#000"></i></a></li>
    <li><a href="invoice.php"><?php echo $_smarty_tpl->tpl_vars['_invoice']->value;?>
</a></li>
    <li class="active"><?php echo $_smarty_tpl->tpl_vars['_payment_history']->value;?>
</li>
  </ol>
<!--/Breadcrumb-->
      <div class="navbar" style="padding-top:10px">
	      <button data-toggle="collapse" href="#payment" class="btn btn-green btn-xs"><i class="fa fa-sign-in"></i> <?php echo $_smarty_tpl->tpl_vars['_receipt']->value;?>
</button>
	      <button data-toggle="collapse" href="#transfer" class="btn btn-yellow btn-xs"><i class="fa fa-refresh"></i> <?php echo $_smarty_tpl->tpl_vars['_transfer']->value;?>
</button>
	      <button class="btn btn-red btn-xs"><i class="fa fa-sign-out"></i> <?php echo $_smarty_tpl->tpl_vars['_pay_out']->value;?>
</button>
	      <div class="panel panel-blue filterable" style="background:#fff">
		      <div class="panel-heading">
			    <h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['_payment_history']->value;?>
</h3>
			    <div class="pull-right">
				  <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> <?php echo $_smarty_tpl->tpl_vars['_filter']->value;?>
</button>
			    </div>
		      </div>
		      <div class="panel-body">
				<div <?php if ($_smarty_tpl->tpl_vars['screen']->value == 'phone') {?> style="overflow:auto" <?php }?>>
				<table class="table table-hover table-bordered table-striped">
					<thead>
					    <tr class="filters">
						<th style="width:4%"><input type="text" class="form-control" placeholder="#" disabled></th>
						<th style="width:18%"><input type="text" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['_desc']->value;?>
" disabled></th>
						<th style="width:14%"><input type="text" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['_customer']->value;?>
" disabled></th>
						<th style="width:13%"><input type="text" class="form-control" placeholder="Tür" disabled></th>
						<th style="width:17%"><input type="text" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['_bank']->value;?>
" disabled></th>
						<th style="width:14%"><input type="text" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['_user']->value;?>
" disabled></th>
						<th style="width:8%"><input type="text" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['_amount']->value;?>
" disabled></th>
						<th style="width:10%"><input type="text" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['_date']->value;?>
" disabled></th>
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
						<td><?php echo $_smarty_tpl->tpl_vars['p']->value['payment_desc'];?>
</td>
						<td>
						      <?php if ($_smarty_tpl->tpl_vars['p']->value['cust_id']) {?>
							    <a href="custdetail.php?cid=<?php echo $_smarty_tpl->tpl_vars['p']->value['cust_id'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['cust_name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
						      <?php } elseif ($_smarty_tpl->tpl_vars['p']->value['payment_seller_id']) {?>
							    <a href="#"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['seller_name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
						      <?php } elseif ($_smarty_tpl->tpl_vars['p']->value['providers_id']) {?>
							    <a href="#"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['providers_name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
						      <?php } else { ?>
							    <a href="#"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['bankto'], ENT_QUOTES, 'UTF-8', true);?>
</a>
						      <?php }?>
						</td>
						<td>
						      <?php if ($_smarty_tpl->tpl_vars['p']->value['invoice_id'] != null) {?>
							    <a href="invoicedetail.php?iid=<?php echo $_smarty_tpl->tpl_vars['p']->value['invoice_id'];?>
" style="padding:2px">
						      <?php } elseif ($_smarty_tpl->tpl_vars['p']->value['payment_service_id'] != 0) {?>
							    <a href="invoicedetail.php?seid=<?php echo $_smarty_tpl->tpl_vars['p']->value['payment_service_id'];?>
" style="padding:2px">
						      <?php }?>
							    <span>
								  <?php if ($_smarty_tpl->tpl_vars['p']->value['payment_in_out'] == "out") {?>
									<i class="fa fa-sign-out" style="color:#bf4346"></i>
								  <?php } elseif ($_smarty_tpl->tpl_vars['p']->value['payment_in_out'] == "cou") {?>
									<i class="fa fa-retweet" style="color:red"></i>
								  <?php } elseif ($_smarty_tpl->tpl_vars['p']->value['payment_in_out'] == "cin") {?>
									<i class="fa fa-retweet" style="color:#688A08"></i>
								  <?php } elseif ($_smarty_tpl->tpl_vars['p']->value['payment_in_out'] == "trs") {?>
									<i class="fa fa-retweet" style="color:#f2994b"></i>
								  <?php } else { ?>
									<i class="fa fa-sign-in" style="color:darkgreen"></i>
								  <?php }?>
							    </span> 
							    <?php if (($_smarty_tpl->tpl_vars['p']->value['payment_type'] == 1)) {?>
								  <?php echo $_smarty_tpl->tpl_vars['_advance']->value;?>

							    <?php } elseif (($_smarty_tpl->tpl_vars['p']->value['payment_type'] == 2)) {?>
								  <?php echo $_smarty_tpl->tpl_vars['_credit']->value;?>

							    <?php } elseif (($_smarty_tpl->tpl_vars['p']->value['payment_type'] == 3)) {?>
								  <?php echo $_smarty_tpl->tpl_vars['_eft']->value;?>

							    <?php }?>
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
				</div>
		      </div>
		</div>
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
</div><!--/container-->
<?php echo $_smarty_tpl->getSubTemplate ('themes/default/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('themes/default/payments/addpayments.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('themes/default/payments/transfer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo '<script'; ?>
>
$(function(){
    
    $("select[name=invoiceid1]").on("change", function(){
	  var remain = $(this).val();
	  $(".getremain").val(remain);
    });
    
// Paaytype
$('.radioBtn a').on('click', function(){
    var sel = $(this).data('title');
    var tog = $(this).data('toggle');
    $('.'+tog).prop('value', sel);
    
    $('a[data-toggle="'+tog+'"]').not('[data-title="'+sel+'"]').removeClass('active').addClass('notActive');
    $('a[data-toggle="'+tog+'"][data-title="'+sel+'"]').removeClass('notActive').addClass('active');
})
// End of function
});
<?php echo '</script'; ?>
><?php }
}
?>