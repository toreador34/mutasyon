<?php /* Smarty version 3.1.27, created on 2016-04-01 16:44:12
         compiled from "/var/www/html/mutasyon/themes/default/addbuyinvoice.html" */ ?>
<?php
/*%%SmartyHeaderCode:189657654856fe7b2c8bb643_59889173%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b217ea45a1d085ded666193255f879c3198ac7f6' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/addbuyinvoice.html',
      1 => 1457439700,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189657654856fe7b2c8bb643_59889173',
  'variables' => 
  array (
    '_buyinvoice' => 0,
    '_add_invoice' => 0,
    '_seller' => 0,
    '_addseller' => 0,
    'seller' => 0,
    'sl' => 0,
    '_desc' => 0,
    '_date' => 0,
    '_virtual_product' => 0,
    '_dont_pay' => 0,
    '_pay_amount' => 0,
    '_price' => 0,
    '_bank_name' => 0,
    'bank' => 0,
    'bnk' => 0,
    'screen' => 0,
    '_stock_name' => 0,
    '_price_in' => 0,
    '_price_out' => 0,
    '_tax' => 0,
    '_amount' => 0,
    '_subtotal' => 0,
    'stock' => 0,
    's' => 0,
    'taxs' => 0,
    't' => 0,
    '_currency' => 0,
    '_ok' => 0,
    '_add_row' => 0,
    '_product_var' => 0,
    '_total' => 0,
    '_confirm_pay_to_seller' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56fe7b2c92fda3_14425733',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56fe7b2c92fda3_14425733')) {
function content_56fe7b2c92fda3_14425733 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/var/www/html/mutasyon/libs/plugins/modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '189657654856fe7b2c8bb643_59889173';
echo $_smarty_tpl->getSubTemplate ('themes/default/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="container body-bg">
<!--Breadcrumb-->
  <ol class="breadcrumb hidden-print">
    <li><a href="index.php"><i class="fa fa-home" style="font-size: 20px;color:#000"></i></a></li>
    <li><a href="buyinvoice.php"><?php echo $_smarty_tpl->tpl_vars['_buyinvoice']->value;?>
</a></li>
    <li class="active"><?php echo $_smarty_tpl->tpl_vars['_add_invoice']->value;?>
</li>
  </ol>
<!--/Breadcrumb-->
    <div class=	"navbar container-fluid">
	<form action="addbuyinvoice.php" method="post" class="addinvoiceform reload">
		<div class="row">
			<div class="col-sm-3">
			    <div class="row">
				<div class="col-sm-12">
				  <label class="margin-top"><?php echo $_smarty_tpl->tpl_vars['_seller']->value;?>
</label>
				  <div class="input-group input-group-sm" id="seller">
				    <span class="input-group-addon" id="sizing-addon3"><a data-toggle="collapse" href="#addseller" aria-expanded="false" title="<?php echo $_smarty_tpl->tpl_vars['_addseller']->value;?>
"><i class="fa fa-plus"></i></a></span>
				    <select class="btn btn-default  chosen-select" id="custlist" style="width:100%;border-radius:0" name="buyseller">
				      <option value="empty"></option>
				      <?php
$_from = $_smarty_tpl->tpl_vars['seller']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['sl'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['sl']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['sl']->value) {
$_smarty_tpl->tpl_vars['sl']->_loop = true;
$foreach_sl_Sav = $_smarty_tpl->tpl_vars['sl'];
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['sl']->value['seller_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['sl']->value['seller_name'];?>
</option>
				      <?php
$_smarty_tpl->tpl_vars['sl'] = $foreach_sl_Sav;
}
?>
				    </select>
				  </div>
				  
				</div>
			    </div><!--/row-->
			    <div class="row" style="padding:15px;">
				<label class="margin-top"><?php echo $_smarty_tpl->tpl_vars['_desc']->value;?>
</label>
				<textarea class="form-control" type="text" name="buyinvoicedesc"></textarea>
			    </div><!--/row-->
			</div><!--/col-sm-3-->
			<div class="col-sm-3 col-sm-offset-5">
			    <label class="margin-top"><?php echo $_smarty_tpl->tpl_vars['_date']->value;?>
</label>
			    <input type="date" class="form-control" name="buydate" value="<?php echo smarty_modifier_date_format(time(),'%Y-%m-%d');?>
">
			    <label class="margin-top"><?php echo $_smarty_tpl->tpl_vars['_virtual_product']->value;?>
</label>
			    <input class="notvirtual margin-top" type="checkbox" name="virtual"/><span class="alert-info"> <?php echo $_smarty_tpl->tpl_vars['_dont_pay']->value;?>
</span> <br />
			    <div class="buybank">
			      <label class="margin-top"><?php echo $_smarty_tpl->tpl_vars['_pay_amount']->value;?>
</label>
			      <input type="number" name="buypayment" class="form-control payprice" step="0.01" autocomplete="off" placeholder="<?php echo $_smarty_tpl->tpl_vars['_price']->value;?>
" />
			      <label class="margin-top"><?php echo $_smarty_tpl->tpl_vars['_bank_name']->value;?>
</label>
			      <select class="form-control" name="buybank">
				<option value="empty" ></option>
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
		<div class="row margin-top">
		  <div <?php if ($_smarty_tpl->tpl_vars['screen']->value == 'phone') {?> style="overflow:auto" <?php }?>>
		      <table class="table table-bordered table-hover" id="tab_logic">
				<thead class="btn-primary">
					<tr >
					    <th class="text-center" style="width:1%">#</th>
					    <th class="text-center" style="width:50%"><?php echo $_smarty_tpl->tpl_vars['_stock_name']->value;?>
</th>
					    <th class="text-center" style="width:10%"><?php echo $_smarty_tpl->tpl_vars['_price_in']->value;?>
</th>
					    <th class="text-center" style="width:8%"><?php echo $_smarty_tpl->tpl_vars['_price_out']->value;?>
</th>
					    <th class="text-center" style="width:8%"><?php echo $_smarty_tpl->tpl_vars['_tax']->value;?>
</th>
					    <th class="text-center" style="width:13%"><?php echo $_smarty_tpl->tpl_vars['_amount']->value;?>
</th>
					    <th class="text-center" style="width:10%"><?php echo $_smarty_tpl->tpl_vars['_subtotal']->value;?>
</th>
					</tr>
				</thead>
				<tbody>
					<tr id="satir0" class="data-wrapper satir">
					    <td class=""><i class="delrow fa fa-times-circle"></i></td>
					    <td>
					      <select class="name" name="buyproductname[]">
					      <option value="0"></option>
					      <?php
$_from = $_smarty_tpl->tpl_vars['stock']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['s'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['s']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
$foreach_s_Sav = $_smarty_tpl->tpl_vars['s'];
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['s']->value['stock_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['s']->value['stock_name'];?>
</option>
					      <?php
$_smarty_tpl->tpl_vars['s'] = $foreach_s_Sav;
}
?>
					      </select>
					    </td>
					    <td>
						  <input type="text" name='buyprice[]'  placeholder='<?php echo $_smarty_tpl->tpl_vars['_price']->value;?>
' class="form-control buyprice" ></input>
					    </td>
					    <td>
						  <input type="text" name='saleprice[]'  placeholder='<?php echo $_smarty_tpl->tpl_vars['_price']->value;?>
' class="form-control saleprice" ></input>
					    </td>
					    <td>
					      <select class="btn btn-default form-control tax" name="buytax[]">
					      <?php
$_from = $_smarty_tpl->tpl_vars['taxs']->value;
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
					    </td>
					    <td><input type="number" name='buyamount[]'  placeholder='<?php echo $_smarty_tpl->tpl_vars['_amount']->value;?>
' class="form-control buyamount" value="0" /></td>
					    <td style="padding-top:15px;font-weight:bold;text-align: right;"><span><?php echo $_smarty_tpl->tpl_vars['_currency']->value;?>
</span><span class="subtotal">0</span></td>
					</tr>
				</tbody>
			</table>
		  </div>
		  <button class="btn btn-success margin-top" id="binvsubmit"><?php echo $_smarty_tpl->tpl_vars['_ok']->value;?>
</button>
		  <a id="add_row" class="btn btn-default margin-top"><?php echo $_smarty_tpl->tpl_vars['_add_row']->value;?>
</a>
		  </form>
		      <div class="row pull-right margin-top">
			      <div class="col-sm-6"><?php echo $_smarty_tpl->tpl_vars['_product_var']->value;?>
</div><div class="col-sm-6" id="totalamount">1</div>
			      <div class="col-sm-6"><?php echo $_smarty_tpl->tpl_vars['_total']->value;?>
</div><div class="col-sm-6"><span><?php echo $_smarty_tpl->tpl_vars['_currency']->value;?>
</span><span id="invtotal">0</span></div>
			      <input type="hidden" name="invtotal" />
		      </div>
		</div>
    </div><!--navbar-->
</div><!--container body-bg-->

<?php echo $_smarty_tpl->getSubTemplate ('themes/default/seller/addseller.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('themes/default/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo '<script'; ?>
>
$(function(){

$(".chosen-select").chosen();
$(".buybank-select").chosen();

//Search product 
$("select.name").on("change", function(){
    var idm = $(this).val();
    var idsi = $(this).closest("tr").attr('id');
    $.ajax({
	    type:'POST',
	    url: 'addinvoice.php',
		data : { 'id':idm, 'idsi':idsi},
		success:function(t){
		  
		}
	  });
});

//For add row
var newrow =1;
var clone = $("table tr.data-wrapper:first").clone(true);
$('select.name').chosen();
$('body').on('click', '#add_row', function() {
    var ParentRow = $("table tr.data-wrapper").last();
    clone.clone(true).insertAfter(ParentRow);
    $('tr.data-wrapper:last select.name').chosen();
    $("table tr.data-wrapper").last().attr('id', 'satir'+newrow++);
});

// For remove row
$(document).on('click', '.delrow', function () {
     $(this).closest('tr').remove();
     var redamount = parseInt($("#totalamount").text());
     redamount--;
     $("#totalamount").text(redamount);
     return false;
 });

//Count products
var sumamount = 1;
$(document).on('click', '#add_row', function () {    
          sumamount++; 
	  $("#totalamount").text(sumamount);
 });
 
//Get discount amount
$(".payprice").on("input", function(){
    var dis = $(".payprice").val();
    $("#totaldiscount").text(dis);
});

 
 //For sub total
$(document).on('change', '.buyamount', sumsubtotal);
function sumsubtotal(){
	var gprice = parseInt($(this).closest("tr").find(".buyprice").val());
	var gamount = parseInt($(this).closest("tr").find(".buyamount").val());
	var st = parseInt(gprice*gamount);
	$(this).closest("tr").find(".subtotal").text(st.toFixed(2));
	return sumsubtotal;
}

// For invoice total price
$(document).on('change', '.buyamount', calculateSum);
 
function calculateSum() {
 
        var sum = 0;
        $(".subtotal").each(function() {
                sum += parseInt($(this).text());
                });
        $("#invtotal").html(sum.toFixed(2));
        $("input[name='invtotal']").val(sum.toFixed(2));
        $(".payprice").val(sum.toFixed(2));
}
//This for confirm pay to seller on addstockhtml and addbuyinvoice.html
$("#binvsubmit").click(function(){
    if($(".notvirtual").is(':checked'))
    {
      $("#binvsubmit").attr("type", "submit");
    }
    else
    {
      var tinv = $("input[name='buypayment']").val();
      if(confirm(tinv + " <?php echo $_smarty_tpl->tpl_vars['_confirm_pay_to_seller']->value;?>
")){
	  $("#binvsubmit").attr("type", "submit");
      }
      else{
	  return false;
      }
    }
});

//end
});
<?php echo '</script'; ?>
><?php }
}
?>