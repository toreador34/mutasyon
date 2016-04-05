<?php /* Smarty version 3.1.27, created on 2016-04-01 17:44:06
         compiled from "/var/www/html/mutasyon/themes/default/invoicedetail.html" */ ?>
<?php
/*%%SmartyHeaderCode:75508427556fe8936e4ebd2_30880205%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74ab20906d76cc9b57b1cbdd579ee5ae7b25a867' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/invoicedetail.html',
      1 => 1459518119,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75508427556fe8936e4ebd2_30880205',
  'variables' => 
  array (
    'invoiceid' => 0,
    '_invoice' => 0,
    'i' => 0,
    'screen' => 0,
    '_payment' => 0,
    '_edit' => 0,
    '_email' => 0,
    '_download' => 0,
    '_invoice_cancel' => 0,
    '_date' => 0,
    '_invoice_no' => 0,
    'company' => 0,
    'c' => 0,
    '_detail' => 0,
    '_amount' => 0,
    '_unit_price' => 0,
    '_tax' => 0,
    '_total' => 0,
    'invoicedpr' => 0,
    'ip' => 0,
    '_currency' => 0,
    '_discount' => 0,
    '_pay' => 0,
    '_remain' => 0,
    '_payment_ok' => 0,
    '_invoice_cancelled' => 0,
    '_invpaydesc' => 0,
    '_paycancdesc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56fe8936eceeb7_72615768',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56fe8936eceeb7_72615768')) {
function content_56fe8936eceeb7_72615768 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '75508427556fe8936e4ebd2_30880205';
echo $_smarty_tpl->getSubTemplate ('themes/default/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php
$_from = $_smarty_tpl->tpl_vars['invoiceid']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?>
<div class="container body-bg">
<!--Breadcrumb-->
  <ol class="breadcrumb hidden-print">
    <li><a href="index.php"><i class="fa fa-home" style="font-size: 20px;color:#000"></i></a></li>
    <li><a href="invoice.php"><?php echo $_smarty_tpl->tpl_vars['_invoice']->value;?>
</a></li>
    <li class="active"><?php echo $_smarty_tpl->tpl_vars['i']->value['invoice_no'];?>
</li>
  </ol>
<!--/Breadcrumb-->
  <div class="col-xs-12 col-sm-2 margin-top hidden-print"><!--left side-->
	    <div class="text-center mbl">
		  <a data-toggle="collapse" href="#payment" class="btn <?php if ($_smarty_tpl->tpl_vars['screen']->value == 'phone') {?>btn-xs<?php }?> btn-green" style="min-width: 60%;"><i class="fa fa-money"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['_payment']->value;?>
</a>
	    </div>
	    <div class="text-center mbl">
		  <a class="btn <?php if ($_smarty_tpl->tpl_vars['screen']->value == 'phone') {?>btn-xs<?php }?> btn-blue" style="min-width: 60%;"><i class="fa fa-pencil-square-o"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['_edit']->value;?>
</a>
	    </div>
	    <div class="text-center mbl">
		  <a class="btn <?php if ($_smarty_tpl->tpl_vars['screen']->value == 'phone') {?>btn-xs<?php }?> btn-yellow" style="min-width: 60%;"><i class="fa fa-envelope"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['_email']->value;?>
</a>
	    </div>
	    <div class="text-center mbl">
		  <a class="btn <?php if ($_smarty_tpl->tpl_vars['screen']->value == 'phone') {?>btn-xs<?php }?> btn-orange" style="min-width: 60%;"><i class="fa fa-download"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['_download']->value;?>
</a>
	    </div>
	    <div class="text-center mbl">
		  <a data-toggle="collapse" href="#cancelinvoice" class="btn <?php if ($_smarty_tpl->tpl_vars['screen']->value == 'phone') {?>btn-xs<?php }?> btn-red" style="min-width: 60%;"><i class="fa fa-retweet"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['_invoice_cancel']->value;?>
</a>
	    </div>
    </div><!--/left side-->
  
<!--invoice details-->
  <div class="col-xs-12 col-sm-10" style="padding-bottom: 100px;"><!--invoice info-->
	    <h1><?php echo $_smarty_tpl->tpl_vars['_invoice']->value;?>
</h1><!--invoice header-->
	    <div class="container-fluid">
		    <div class="col-sm-3"><!--invoiced-->
			  <h4><?php echo $_smarty_tpl->tpl_vars['i']->value['cust_name'];?>
</h4>
			  <small><cite title="<?php echo $_smarty_tpl->tpl_vars['i']->value['cust_address'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['cust_address'];?>
</cite></small>
			  <p>
			      <?php echo $_smarty_tpl->tpl_vars['i']->value['cust_mail'];?>

			      <br />
			      <a href="http://<?php echo $_smarty_tpl->tpl_vars['i']->value['cust_web'];?>
" target="blank"><?php echo $_smarty_tpl->tpl_vars['i']->value['cust_web'];?>
</a>
			      <br />
			      <?php echo $_smarty_tpl->tpl_vars['i']->value['cust_tel'];?>

			  </p>
			
		    </div><!--/invoiced-->
		    <div class="col-sm-3" style="border-right: 1px solid #aaa;"><!--invoice date-->
			  <h5><b><?php echo $_smarty_tpl->tpl_vars['_date']->value;?>
:</b></h5>
			  <?php echo $_smarty_tpl->tpl_vars['i']->value['invoice_date'];?>

			  <br />
			  <h5><b><?php echo $_smarty_tpl->tpl_vars['_invoice_no']->value;?>
:</b></h5>
			  <span id="invoiceno"><?php echo $_smarty_tpl->tpl_vars['i']->value['invoice_no'];?>
</span>
		    </div><!--/invoice date-->
		    <?php
$_from = $_smarty_tpl->tpl_vars['company']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['c'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['c']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
$foreach_c_Sav = $_smarty_tpl->tpl_vars['c'];
?>
		    <div class="col-sm-6"><!--firm address-->
			  <h4><?php echo $_smarty_tpl->tpl_vars['c']->value['company_name'];?>
</h4>
			  <small><cite title="<?php echo $_smarty_tpl->tpl_vars['c']->value['company_address'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['company_address'];?>
</cite></small>
			  <p>
			      <?php echo $_smarty_tpl->tpl_vars['c']->value['company_mail'];?>

			      <br />
			      <a href="http://<?php echo $_smarty_tpl->tpl_vars['c']->value['company_web'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['company_web'];?>
</a>
			      <br />
			      <?php echo $_smarty_tpl->tpl_vars['c']->value['company_tel'];?>

			  </p>
		    </div><!--/firm address-->
		    <?php
$_smarty_tpl->tpl_vars['c'] = $foreach_c_Sav;
}
?>
	  </div><!--/invoice info-->
	  <div class="container-fluid"><!--invoice detail-->
	      <table class="table table-hover" id="dev-table" style="border-bottom: 1px solid #aaa;">
		      <thead>
			    <tr>
				<th>#</th>
				<th><?php echo $_smarty_tpl->tpl_vars['_detail']->value;?>
</th>
				<th><?php echo $_smarty_tpl->tpl_vars['_amount']->value;?>
</th>
				<th><?php echo $_smarty_tpl->tpl_vars['_unit_price']->value;?>
</th>
				<th><?php echo $_smarty_tpl->tpl_vars['_tax']->value;?>
</th>
				<th><?php echo $_smarty_tpl->tpl_vars['_total']->value;?>
</th>
			    </tr>
		      </thead>
		      <tbody>
			  <?php
$_from = $_smarty_tpl->tpl_vars['invoicedpr']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ip'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ip']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ip']->value) {
$_smarty_tpl->tpl_vars['ip']->_loop = true;
$foreach_ip_Sav = $_smarty_tpl->tpl_vars['ip'];
?>
			      <tr>
				      <td><?php echo $_smarty_tpl->tpl_vars['ip']->value['ip_id'];?>
</td>
				      <td><?php echo $_smarty_tpl->tpl_vars['ip']->value['ip_name'];?>
</td>
				      <td><?php echo $_smarty_tpl->tpl_vars['ip']->value['ip_amount'];?>
</td>
				      <td><span><?php echo $_smarty_tpl->tpl_vars['_currency']->value;?>
</span><?php echo $_smarty_tpl->tpl_vars['ip']->value['ip_price'];?>
</td>
				      <td><span><?php echo $_smarty_tpl->tpl_vars['_currency']->value;?>
</span><span class="taxs"><?php echo $_smarty_tpl->tpl_vars['ip']->value['ip_price']*$_smarty_tpl->tpl_vars['ip']->value['ip_tax']/100;?>
</span></td>
				      <td><span><?php echo $_smarty_tpl->tpl_vars['_currency']->value;?>
</span><span class="prices"><?php echo $_smarty_tpl->tpl_vars['ip']->value['ip_total'];?>
</span></td>
			      </tr>
			  <?php
$_smarty_tpl->tpl_vars['ip'] = $foreach_ip_Sav;
}
?>
		      </tbody>
	      </table>
	  </div><!--/invoice detail-->
	  <div class="col-sm-6 well"><?php echo $_smarty_tpl->tpl_vars['ip']->value['invoice_description'];?>
</div>
	  <div class="col-sm-offset-8 container-fluid">
		<div class="col-sm-12">
		      <div style="width:50%;float:left;border-bottom: 1px solid #aaa;"><?php echo $_smarty_tpl->tpl_vars['_total']->value;?>
</div>
		      <div style="width:50%;float: left;border-bottom: 1px solid #aaa;text-align: right;"><span><?php echo $_smarty_tpl->tpl_vars['_currency']->value;?>
</span><span id="totalprice"></span></div>
		</div>
		<div class="col-sm-12">
		      <div style="width:50%;float:left;border-bottom: 1px solid #aaa;"><?php echo $_smarty_tpl->tpl_vars['_tax']->value;?>
</div>
		      <div style="width:50%;float: left;border-bottom: 1px solid #aaa;text-align: right;"><span><?php echo $_smarty_tpl->tpl_vars['_currency']->value;?>
</span><span id="tax"></span></div>
		</div>
		<div class="col-sm-12">
		      <div style="width:50%;float:left;border-bottom: 1px solid #aaa;"><?php echo $_smarty_tpl->tpl_vars['_discount']->value;?>
</div>
		      <div style="width:50%;float: left;border-bottom: 1px solid #aaa;text-align: right;"><span><?php echo $_smarty_tpl->tpl_vars['_currency']->value;?>
</span><span id="discount"><?php echo $_smarty_tpl->tpl_vars['i']->value['invoice_discount'];?>
</span></div>
		</div>
		<div class="col-sm-12">
		      <div style="width:50%;float:left;border-bottom: 1px solid #aaa;"><?php echo $_smarty_tpl->tpl_vars['_pay']->value;?>
</div>
		      <div style="width:50%;float: left;border-bottom: 1px solid #aaa;text-align: right;"><span><?php echo $_smarty_tpl->tpl_vars['_currency']->value;?>
</span><span id="paytotal"><?php if ($_smarty_tpl->tpl_vars['i']->value['paytotal'] == '') {?>0<?php } else {
echo $_smarty_tpl->tpl_vars['i']->value['paytotal'];
}?></span></div>
		</div>
		<div class="col-sm-12">
		      <div style="width:50%;float:left;border-bottom: 1px solid #aaa;font-size:16px;font-weight:bold"><?php echo $_smarty_tpl->tpl_vars['_remain']->value;?>
</div>
		      <div style="width:50%;float: left;border-bottom: 1px solid #aaa;text-align: right;font-size:16px;font-weight:bold"><span><?php echo $_smarty_tpl->tpl_vars['_currency']->value;?>
</span><span id="remain"></span></div>
		</div>
	  </div><!--col-sm-offset-9-->
	  <div class="paid col-sm-3 btn-succes hidden-xs" style="display:none"><?php echo $_smarty_tpl->tpl_vars['_payment_ok']->value;?>
</div>
	  <?php if ($_smarty_tpl->tpl_vars['i']->value['invoice_cancelled'] == 1) {?>
		<div class="rotate cancel col-sm-3 hidden-xs"><?php echo $_smarty_tpl->tpl_vars['_invoice_cancelled']->value;?>
</div>
	  <?php }?>
  </div><!--/invoice info-->
<!--/invoice details-->
<?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>
</div><!--/container-->
<?php echo $_smarty_tpl->getSubTemplate ('themes/default/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('themes/default/payments/addpayments.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('themes/default/invoice/cancelinvoice.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('themes/default/bank/addbank.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo '<script'; ?>
>
$(function(){

//For total tax and total price
var sumtax = 0;
$('.taxs').each(function() {     
          sumtax += parseInt($(this).text()); 
	  $("#tax").text(sumtax);
    });
var sumprice = 0;
$('.prices').each(function() {     
          sumprice += parseInt($(this).text()); 
	  $("#totalprice").text(sumprice.toFixed(2));
    });
var totalprice = parseInt($("#totalprice").text());
var discount = parseInt($("#discount").text());
var paytotal = parseInt($("#paytotal").text());
var invoiceno = $("#invoiceno").text();
$("#remain").text((totalprice - (discount + paytotal)).toFixed(2));
$(".getremain").val((totalprice - (discount + paytotal)).toFixed(2));
$("input[name='payment']").val((totalprice - (discount + paytotal)).toFixed(2));
$("input[name='invoiceno']").val(invoiceno + " <?php echo $_smarty_tpl->tpl_vars['_invpaydesc']->value;?>
");
$("input[name='paycancdesc']").val(invoiceno + " <?php echo $_smarty_tpl->tpl_vars['_paycancdesc']->value;?>
");

// For show payment ok or not
if($("#remain").text() == 0)
{
  $(".paid").show();
}
$(".refund").val(paytotal);


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