<?php /* Smarty version 3.1.27, created on 2016-04-22 13:37:20
         compiled from "/var/www/html/mutasyon/themes/default/addinvoice.html" */ ?>
<?php
/*%%SmartyHeaderCode:7076654175719fee0db81f1_66054910%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a58654ff7c11d192666fcce3a95542370cba4c2d' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/addinvoice.html',
      1 => 1460287469,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7076654175719fee0db81f1_66054910',
  'variables' => 
  array (
    '_invoice' => 0,
    '_add_invoice' => 0,
    '_customer' => 0,
    '_addcustomer' => 0,
    'customers' => 0,
    'cst' => 0,
    '_desc' => 0,
    '_invoice_prefix' => 0,
    'invoiceadj' => 0,
    'adj' => 0,
    '_inf_invoice_prefix' => 0,
    '_date' => 0,
    '_discount' => 0,
    '_productname_or_serial_number' => 0,
    '_cart' => 0,
    '_no' => 0,
    '_stock_name' => 0,
    '_amount' => 0,
    '_price' => 0,
    '_delete' => 0,
    '_buy_all' => 0,
    '_currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5719fee0e46395_92707781',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5719fee0e46395_92707781')) {
function content_5719fee0e46395_92707781 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/var/www/html/mutasyon/libs/plugins/modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '7076654175719fee0db81f1_66054910';
echo $_smarty_tpl->getSubTemplate ('themes/default/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="container body-bg">
<!--Breadcrumb-->
  <ol class="breadcrumb hidden-print">
    <li><a href="index.php"><i class="fa fa-home" style="font-size: 20px;color:#000"></i></a></li>
    <li><a href="invoice.php"><?php echo $_smarty_tpl->tpl_vars['_invoice']->value;?>
</a></li>
    <li class="active"><?php echo $_smarty_tpl->tpl_vars['_add_invoice']->value;?>
</li>
  </ol>
<!--/Breadcrumb-->
	<div class="navbar container-fluid">
		<div class="row">
			<div class="col-sm-3">
			    <div class="row">
				<div class="col-sm-12">
				  <label class="margin-top"><?php echo $_smarty_tpl->tpl_vars['_customer']->value;?>
</label>
				  <div class="input-group input-group-sm customer">
					<span class="input-group-addon" id="sizing-addon3"><a data-toggle="collapse" href="#addcustomer" aria-expanded="false" title="<?php echo $_smarty_tpl->tpl_vars['_addcustomer']->value;?>
"><i class="fa fa-plus"></i></a></span>
					<select class="form-control custid" id="custlist" name="customer">
					      <option value="empty"></option>
					      <?php
$_from = $_smarty_tpl->tpl_vars['customers']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['cst'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['cst']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cst']->value) {
$_smarty_tpl->tpl_vars['cst']->_loop = true;
$foreach_cst_Sav = $_smarty_tpl->tpl_vars['cst'];
?>
						    <option value="<?php echo $_smarty_tpl->tpl_vars['cst']->value['cust_id'];?>
" <?php ob_start();
echo $_smarty_tpl->tpl_vars['cst']->value['cust_id'];
$_tmp1=ob_get_clean();
if (Check::getValue("cid") == $_tmp1) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['cst']->value['cust_name'];?>
</option>
					      <?php
$_smarty_tpl->tpl_vars['cst'] = $foreach_cst_Sav;
}
?>
					</select>
				  </div>
				  
				</div>
			    </div><!--/row-->
			    <div class="navbar">
				<label class="margin-top"><?php echo $_smarty_tpl->tpl_vars['_desc']->value;?>
</label>
				<textarea rows="4" class="form-control invdesc" type="textarea" name="invoicedesc"></textarea>
			    </div><!--/row-->
			</div><!--/col-sm-3-->
			<div class="col-sm-3 col-sm-offset-5">
			      <label class="margin-top"><?php echo $_smarty_tpl->tpl_vars['_invoice_prefix']->value;?>
</label><br />
			      <div class="form-group" style="position:relative">
				  <select class="form-control invoiceadj" style="width:100%" name="invoiceadjp">
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
				  <div class="questions" style="right:-13px;margin-top:-47px"><i class="fa fa-question-circle"></i></div>
				  <div class="col-xs-12 alert alert-info answer" style="display:none;margin-top:-32px;margin-left:5px">
					<div class="col-sm-1">
					      <i class="glyphicon glyphicon-info-sign" style="font-size:40px;margin-left:-49px;margin-top:-13px;"></i>
					</div>
					<div class="col-sm-11 note-info">
					      <strong class="box-heading"><?php echo $_smarty_tpl->tpl_vars['_invoice_prefix']->value;?>
</strong>
					      <p><?php echo $_smarty_tpl->tpl_vars['_inf_invoice_prefix']->value;?>
</p>
					</div>
				  </div>
			      </div>
			      <label class="margin-top"><?php echo $_smarty_tpl->tpl_vars['_date']->value;?>
</label>
			      <input type="date" class="form-control" name="date" value="<?php echo smarty_modifier_date_format(time(),'%Y-%m-%d');?>
">
			      <label><?php echo $_smarty_tpl->tpl_vars['_discount']->value;?>
</label>
			      <input id="discountamount" type="number" class="form-control" name="discount" step="0.01" autocomplete="off" /><br />
			</div>
		</div><!--/row-->
		<div class="navbar basket">
		<!-- Search product -->
		<div class="row">
		    <div class="col-sm-12 ustkisimlar">
			  <div class="col-md-7 col-md-offset-2 col-sm-12 bosluksuz">
			    <div class="col-sm-12">
			      <input type="text" class="basketinp spr" name="term" placeholder="<?php echo $_smarty_tpl->tpl_vars['_productname_or_serial_number']->value;?>
" />
			      <input type="hidden" class="basketinp sprh" />
			      <button type="button" class="btn btn-default btn-sm" style="position:absolute" data-toggle="collapse" href="#stocklist" aria-expanded="false" title="<?php echo $_smarty_tpl->tpl_vars['_addcustomer']->value;?>
"><i class="glyphicon glyphicon-th-list"></i></button>
			    </div>
			  </div>

			      <input type="hidden" class="basketinp basketprice" />
			      <input type="hidden" class="basketinp basketamount" value="1"/>
		    </div>
		</div>
		<!-- /serach product	     -->
		
		<!-- Basket -->
		<h4><?php echo $_smarty_tpl->tpl_vars['_cart']->value;?>
</h4>
		<div style="border:1px solid #aaa;background-color:#ddd;clear:both;margin-top: -10px;padding-top: 15px;height:250px;overflow-y:auto;overflow-x:hidden">
			<div id="urunler"  class="urunler row">
				<ul class="baslik">
					<li class="col-sm-1"><?php echo $_smarty_tpl->tpl_vars['_no']->value;?>
</li><li class="col-sm-6"><?php echo $_smarty_tpl->tpl_vars['_stock_name']->value;?>
</li><li class="col-sm-1"><?php echo $_smarty_tpl->tpl_vars['_amount']->value;?>
</li><li class="col-sm-2"><?php echo $_smarty_tpl->tpl_vars['_price']->value;?>
</li><li class="col-sm-1"><?php echo $_smarty_tpl->tpl_vars['_delete']->value;?>
</li>
				</ul>
				  <form id="odemeyapin" method="POST" name="odemealin">
					  <input type="hidden" name="custid1" />
					  <input type="hidden" name="adjp1" />
					  <input type="hidden" name="date1" />
					  <input type="hidden" name="discount1" />
					  <input type="hidden" name="desc1" />
					  <input type="hidden" name="totalinv" />
					  <ul id="sepet" class="icerik">
						  
					  </ul>
				  </form>
			</div>
			<div class="clearBosluk"></div>
		</div>
		<!-- /Basket -->
		<div class="urunler noBorder dar">
			    <button id="sendinv" class="btn btn-warning pull-left margin-top"> &nbsp;&nbsp;&nbsp;&nbsp; <?php echo $_smarty_tpl->tpl_vars['_buy_all']->value;?>
&nbsp;&nbsp;&nbsp;&nbsp; </button>
			    <div id="toplam" class="pull-right margin-top"><span><?php echo $_smarty_tpl->tpl_vars['_currency']->value;?>
</span><span id="tplm" class="fiyat">0.00</span></div>
		</div>
		<div class="clearBosluk"></div>
	</div><!--navbar-->
</div><!--container body-bg-->
<?php echo $_smarty_tpl->getSubTemplate ('themes/default/customer/addcustomer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('themes/default/invoice/stocklist.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('themes/default/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo '<script'; ?>
>
$(function(){

$("#custlist").chosen();

//Add invoice
var options = {
    source: "search.php",
    minLength: 2,
};
var selector = 'input.spr';
$(document).on('keydown.autocomplete', selector, function() {
    $(this).autocomplete(options);
});

//Search product 
$(".spr").on("keyup", function(){
    var idm = $(this).val();
    $.ajax({
	    type:'POST',
	    url: 'addinvoice.php',
		data : { 'id':idm,},
		success:function(t){
		  $("div.work-inf").addClass("display-block");
		  $("div.work-inf").html(t);
		}
	  });
});

$(document).keypress(function(e) {
    if(e.which == 13) {
        addBasket();
        var maxdis = parseInt($("#tplm").text());
	$("#discountamount").attr({
		"max" : (maxdis.toFixed(2)),        // substitute your own
	  });
        return false
    }
});

//Focus to search products
$(".spr").focus();

//Click to pr list
$(".cfsp").click(function(){
    var idm = $(this).text();
    $.ajax({
	    type:'POST',
	    url: 'addinvoice.php',
		data : { 'id':idm,},
		success:function(t){
		  $("div.work-inf").html(t);
		  addBasket();
		  var maxdis = parseInt($("#tplm").text());
		  $("#discountamount").attr({
			  "max" : (maxdis.toFixed(2)),        // substitute your own
		    });
		}
	  });
    $("button#closestl").click();
    
});

//For post values
//Search product 
$('document').ready(function() {
$(document).on("click", "#sendinv", function(){
    var custid = $("#custlist").val();
    var desc = $(".invdesc").val();
    var jp = $(".invoiceadj").val();
    var totalinv = $("#tplm").text();
    var date = $("input[name='date']").val();
    var discount = $("input[name='discount']").val();
    $("input[name='discount1']").val(discount);
    $("input[name='date1']").val(date);
    $("input[name='adjp1']").val(jp);
    $("input[name='desc1']").val(desc);
    $("input[name='custid1']").val(custid);
    $("input[name='totalinv']").val(totalinv);
    
    $.ajax({
	    type:'POST',
	    url: 'addinvoice.php',
		data : $('form#odemeyapin').serialize(),
		success:function(t){
		  $("div.work-inf").addClass("display-block");
		  $("div.work-inf").html(t);
		}
	  });
});
});

// For invoice total price
$(document).on('click', '.invamount', calculateSum);

    function calculateSum() {
	var sum = 0;
        $(".invamount").each(function() {
                var amount = $(this).val();
                var price = $(this).closest("div").find(".invprice").val();
                sum += parseInt((amount*price));
		$("#discountamount").attr({
			"max" : (sum.toFixed(2)),        // substitute your own
		  });
 
        });
        $("#tplm").html(sum.toFixed(2));
    }
   
$(document).on("click", ".questions", function(){
    $(".answer").toggle();  
});

//end
});
<?php echo '</script'; ?>
>
<?php }
}
?>