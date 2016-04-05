<?php /* Smarty version 3.1.27, created on 2016-04-03 16:29:51
         compiled from "/var/www/html/mutasyon/themes/default/productdetail.html" */ ?>
<?php
/*%%SmartyHeaderCode:168659679257011acf508b06_05002296%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60bb8af32e9c65d49eb48cac4f951a6ffdbaf87a' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/productdetail.html',
      1 => 1459517581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168659679257011acf508b06_05002296',
  'variables' => 
  array (
    'stock' => 0,
    '_stock_list' => 0,
    's' => 0,
    'total' => 0,
    'main_img' => 0,
    'start' => 0,
    'images' => 0,
    'image' => 0,
    '_stock_amount' => 0,
    '_stock_last' => 0,
    '_no_stock' => 0,
    '_tax_name' => 0,
    '_buy' => 0,
    '_sale' => 0,
    '_delete' => 0,
    '_edit' => 0,
    '_currency' => 0,
    'ph' => 0,
    'm' => 0,
    'buyinvoice' => 0,
    'o' => 0,
    '_total_buy' => 0,
    '_piece' => 0,
    '_total_payment' => 0,
    '_total_sale' => 0,
    '_total_income' => 0,
    '_acts' => 0,
    '_jan' => 0,
    '_feb' => 0,
    '_mar' => 0,
    '_apr' => 0,
    '_may' => 0,
    '_jun' => 0,
    '_jul' => 0,
    '_aug' => 0,
    '_sep' => 0,
    '_oct' => 0,
    '_nov' => 0,
    '_dec' => 0,
    '_sales_history' => 0,
    '_pay' => 0,
    '_income' => 0,
    '_buy_proccess' => 0,
    '_confirm_pay_to_seller' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57011acf5a8a69_26140609',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57011acf5a8a69_26140609')) {
function content_57011acf5a8a69_26140609 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '168659679257011acf508b06_05002296';
echo $_smarty_tpl->getSubTemplate ('themes/default/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="container body-bg">
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
	    <!--Breadcrumb-->
	    <ol class="breadcrumb hidden-print">
	      <li><a href="index.php"><i class="fa fa-home" style="font-size: 20px;color:#000"></i></a></li>
	      <li><a href="stock.php"><?php echo $_smarty_tpl->tpl_vars['_stock_list']->value;?>
</a></li>
	      <li><a href="stock.php?cid=<?php echo $_smarty_tpl->tpl_vars['s']->value['category_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['s']->value['category_name'];?>
</a></li>
	      <li class="active"><?php echo $_smarty_tpl->tpl_vars['s']->value['stock_name'];?>
</li>
	    </ol>
	    <!--/Breadcrumb-->
	      <div class="col-xs-12 hidden-print padding well">
				<div class="row relative">
					      <div class="col-sm-6 col-md-5">
						      <?php if ($_smarty_tpl->tpl_vars['total']->value == 0) {?>
							    <img src="<?php echo $_smarty_tpl->tpl_vars['main_img']->value;?>
/noimage-large.jpg" alt="" class="img-thumbnail" />
						      <?php } else { ?>
							<div id="thumb-large">
								<img src="<?php echo $_smarty_tpl->tpl_vars['main_img']->value;?>
/products/<?php echo $_smarty_tpl->tpl_vars['s']->value['stock_id'];?>
/large/<?php echo $_smarty_tpl->tpl_vars['start']->value;?>
-large.jpg" alt="" class="img-thumbnail" />
							</div>
						      <?php }?>
						      <div class="col-lg-12 hidden-xs hidden-sm">
							  <div class="col-lg-12 margin-top">
							      <?php if ($_smarty_tpl->tpl_vars['total']->value == 0) {?>
								    <img src="<?php echo $_smarty_tpl->tpl_vars['main_img']->value;?>
/noimage-small.jpg" alt="" class="img-thumbnail" />
							      <?php } else { ?>
								    <?php
$_from = $_smarty_tpl->tpl_vars['images']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['image'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['image']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
$foreach_image_Sav = $_smarty_tpl->tpl_vars['image'];
?>
									  <div class="col-lg-2" id="thumb-small">
									    <img src="<?php echo $_smarty_tpl->tpl_vars['main_img']->value;?>
/products/<?php echo $_smarty_tpl->tpl_vars['image']->value['images_stock_id'];?>
/small/<?php echo $_smarty_tpl->tpl_vars['image']->value['images_id'];?>
-small.jpg" alt="" class="img-thumbnail" value="<?php echo $_smarty_tpl->tpl_vars['image']->value['images_id'];?>
" />
									  </div>
								    <?php
$_smarty_tpl->tpl_vars['image'] = $foreach_image_Sav;
}
?>
							      <?php }?>
							  </div>
						      </div>
					      </div>
					      <div class="col-sm-6 col-md-7 hidden-print">
						    <h4><?php echo $_smarty_tpl->tpl_vars['s']->value['stock_name'];?>
</h4>
						    <div class="col-sm-6">
							    <small><cite>
								  <?php echo $_smarty_tpl->tpl_vars['s']->value['stock_short_detail'];?>

							    </cite></small>
							    <div style="margin-top:15px">
								  <span><b><?php echo $_smarty_tpl->tpl_vars['_stock_amount']->value;?>
 :</b></span><span> <?php echo $_smarty_tpl->tpl_vars['s']->value['stock_amount'];?>
 </span><?php if ($_smarty_tpl->tpl_vars['s']->value['stock_amount'] == 1) {?><span class="btn-danger"><?php echo $_smarty_tpl->tpl_vars['_stock_last']->value;?>
</span><?php } elseif ($_smarty_tpl->tpl_vars['s']->value['stock_amount'] == 0) {?><span class="btn-danger"><?php echo $_smarty_tpl->tpl_vars['_no_stock']->value;?>
</span><?php }?>
							    </div>
							    <div style="margin-top:15px">
								  <?php if (!$_smarty_tpl->tpl_vars['s']->value['tax_tax'] == '') {?><span><b><?php echo $_smarty_tpl->tpl_vars['_tax_name']->value;?>
 :</b></span><span>% </span><span> <?php echo $_smarty_tpl->tpl_vars['s']->value['tax_tax'];?>
 </span><?php }?>
							    </div>
							    <div style="margin-top:15px">
								  <button data-toggle="collapse" href="#buystock" class="btn btn-green btn-xs"><?php echo $_smarty_tpl->tpl_vars['_buy']->value;?>
</button>
								  <button data-toggle="collapse" href="#sellstock" class="btn btn-blue btn-xs"><?php echo $_smarty_tpl->tpl_vars['_sale']->value;?>
</button>
								  <button class="btn btn-red btn-xs" role="button" data-toggle="collapse" href="#delproduct" aria-expanded="false"><?php echo $_smarty_tpl->tpl_vars['_delete']->value;?>
</button>
								  <a href="editproduct.php?sid=<?php echo $_smarty_tpl->tpl_vars['s']->value['stock_id'];?>
" class="btn btn-yellow btn-xs"><?php echo $_smarty_tpl->tpl_vars['_edit']->value;?>
</a>
							    </div>
						      </div>
						      <div class="col-sm-6">
							      <div class="row stprice"><h1><span><?php echo $_smarty_tpl->tpl_vars['_currency']->value;?>
</span><span class="tprice"><?php echo $_smarty_tpl->tpl_vars['s']->value['stock_price_out'];?>
</span></h1></div>
							      <div class="row padding col-sm-offset-4" style="margin-top:25px;text-align: center;">
								<a role="button" data-toggle="collapse" href="#printsn" aria-expanded="false"><img alt="<?php echo $_smarty_tpl->tpl_vars['s']->value['stock_no'];?>
" src="configs/barcode.php?size=60&text=<?php echo $_smarty_tpl->tpl_vars['s']->value['stock_no'];?>
" /></a><br />
								<span style="font-size:25px"><?php echo $_smarty_tpl->tpl_vars['s']->value['stock_no'];?>
</span>
							      </div>
						      </div>
					      </div>
			      </div>
	      </div>
	      <div class="hidden-print" style="padding: 0 10px;background:#fff"><?php echo $_smarty_tpl->tpl_vars['s']->value['stock_detail'];?>
</div>
	<?php
$_smarty_tpl->tpl_vars['s'] = $foreach_s_Sav;
}
?>
	      <div class="col-xs-12 well hidden-print">
		    <div id="pract" style="width:100%; height:400px;"></div>
		    <div style="display:none">
			  <?php
$_from = $_smarty_tpl->tpl_vars['ph']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['m'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['m']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
$foreach_m_Sav = $_smarty_tpl->tpl_vars['m'];
?>
				<span class="sale<?php echo $_smarty_tpl->tpl_vars['m']->value['pm'];?>
 sale"><?php echo $_smarty_tpl->tpl_vars['m']->value['total'];?>
</span>
				<span class="income<?php echo $_smarty_tpl->tpl_vars['m']->value['pm'];?>
 income" type="text"><?php echo $_smarty_tpl->tpl_vars['m']->value['totalprice'];?>
</span>
			  <?php
$_smarty_tpl->tpl_vars['m'] = $foreach_m_Sav;
}
?>
			  <?php
$_from = $_smarty_tpl->tpl_vars['buyinvoice']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['o'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['o']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->_loop = true;
$foreach_o_Sav = $_smarty_tpl->tpl_vars['o'];
?>
				<span class="buy<?php echo $_smarty_tpl->tpl_vars['o']->value['pm'];?>
 buy" type="text"><?php echo $_smarty_tpl->tpl_vars['o']->value['total'];?>
</span>
				<span class="op<?php echo $_smarty_tpl->tpl_vars['o']->value['pm'];?>
 outpayment" type="text"><?php echo $_smarty_tpl->tpl_vars['o']->value['totalprice'];?>
</span>
			  <?php
$_smarty_tpl->tpl_vars['o'] = $foreach_o_Sav;
}
?>
		    </div>
		    <strong><?php echo $_smarty_tpl->tpl_vars['_total_buy']->value;?>
: </strong><span id="totalbuy">0</span> <?php echo $_smarty_tpl->tpl_vars['_piece']->value;?>
<br />
		    <strong><?php echo $_smarty_tpl->tpl_vars['_total_payment']->value;?>
: </strong><?php echo $_smarty_tpl->tpl_vars['_currency']->value;?>
<span id="outpayment">0</span><br />
		    <strong><?php echo $_smarty_tpl->tpl_vars['_total_sale']->value;?>
: </strong><span id="totalsale">0</span> <?php echo $_smarty_tpl->tpl_vars['_piece']->value;?>
<br />
		    <strong><?php echo $_smarty_tpl->tpl_vars['_total_income']->value;?>
: </strong><?php echo $_smarty_tpl->tpl_vars['_currency']->value;?>
<span id="income">0</span>
	      </div>
</div><!-- container body-bg-->
<?php echo $_smarty_tpl->getSubTemplate ('themes/default/stock/delstock.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('themes/default/stock/sellstock.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('themes/default/stock/printbarcode.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('themes/default/stock/addstock.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('themes/default/seller/addseller.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('themes/default/taxprofit/addtax.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('themes/default/invoiceadj/addadj.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('themes/default/bank/addbank.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('themes/default/customer/addcustomer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('themes/default/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo '<script'; ?>
>
$(function(){
     
	var ocak = parseInt($(".sale1").text());
	var subat = parseInt($(".sale2").text());
	var mart = parseInt($(".sale3").text());
	var nisan = parseInt($(".sale4").text());
	var mayis = parseInt($(".sale5").text());
	var haziran = parseInt($(".sale6").text());
	var temmuz = parseInt($(".sale7").text());
	var agustos = parseInt($(".sale8").text());
	var eylul = parseInt($(".sale9").text());
	var ekim = parseInt($(".sale10").text());
	var kasim = parseInt($(".sale11").text());
	var aralik = parseInt($(".sale12").text());
	if(isNaN(ocak)){ var ocak = 0 }
	if(isNaN(subat)){ var subat = 0 }
	if(isNaN(mart)){ var mart = 0 }
	if(isNaN(nisan)){ var nisan = 0 }
	if(isNaN(mayis)){ var mayis = 0 }
	if(isNaN(haziran)){ var haziran = 0 }
	if(isNaN(temmuz)){ var temmuz = 0 }
	if(isNaN(agustos)){ var agustos = 0 }
	if(isNaN(eylul)){ var eylul = 0 }
	if(isNaN(ekim)){ var ekim = 0 }
	if(isNaN(kasim)){ var kasim = 0 }
	if(isNaN(aralik)){ var aralik = 0 }
	
	var ocakbuy = parseInt($(".buy1").text());
	var subatbuy = parseInt($(".buy2").text());
	var martbuy = parseInt($(".buy3").text());
	var nisanbuy = parseInt($(".buy4").text());
	var mayisbuy = parseInt($(".buy5").text());
	var haziranbuy = parseInt($(".buy6").text());
	var temmuzbuy = parseInt($(".buy7").text());
	var agustosbuy = parseInt($(".buy8").text());
	var eylulbuy = parseInt($(".buy9").text());
	var ekimbuy = parseInt($(".buy10").text());
	var kasimbuy = parseInt($(".buy11").text());
	var aralikbuy = parseInt($(".buy12").text());
	if(isNaN(ocakbuy)){ var ocakbuy = 0 }
	if(isNaN(subatbuy)){ var subatbuy = 0 }
	if(isNaN(martbuy)){ var martbuy = 0 }
	if(isNaN(nisanbuy)){ var nisanbuy = 0 }
	if(isNaN(mayisbuy)){ var mayisbuy = 0 }
	if(isNaN(haziranbuy)){ var haziranbuy = 0 }
	if(isNaN(temmuzbuy)){ var temmuzbuy = 0 }
	if(isNaN(agustosbuy)){ var agustosbuy = 0 }
	if(isNaN(eylulbuy)){ var eylulbuy = 0 }
	if(isNaN(ekimbuy)){ var ekimbuy = 0 }
	if(isNaN(kasimbuy)){ var kasimbuy = 0 }
	if(isNaN(aralikbuy)){ var aralikbuy = 0 }
	
	var ocakop = parseInt($(".op1").text());
	var subatop = parseInt($(".op2").text());
	var martop = parseInt($(".op3").text());
	var nisanop = parseInt($(".op4").text());
	var mayisop = parseInt($(".op5").text());
	var haziranop = parseInt($(".op6").text());
	var temmuzop = parseInt($(".op7").text());
	var agustosop = parseInt($(".op8").text());
	var eylulop = parseInt($(".op9").text());
	var ekimop = parseInt($(".op10").text());
	var kasimop = parseInt($(".op11").text());
	var aralikop = parseInt($(".op12").text());
	if(isNaN(ocakop)){ var ocakop = 0 }
	if(isNaN(subatop)){ var subatop = 0 }
	if(isNaN(martop)){ var martop = 0 }
	if(isNaN(nisanop)){ var nisanop = 0 }
	if(isNaN(mayisop)){ var mayisop = 0 }
	if(isNaN(haziranop)){ var haziranop = 0 }
	if(isNaN(temmuzop)){ var temmuzop = 0 }
	if(isNaN(agustosop)){ var agustosop = 0 }
	if(isNaN(eylulop)){ var eylulop = 0 }
	if(isNaN(ekimop)){ var ekimop = 0 }
	if(isNaN(kasimop)){ var kasimop = 0 }
	if(isNaN(aralikop)){ var aralikop = 0 }
	
	var ocakincome = parseInt($(".income1").text());
	var subatincome = parseInt($(".income2").text());
	var martincome = parseInt($(".income3").text());
	var nisanincome = parseInt($(".income4").text());
	var mayisincome = parseInt($(".income5").text());
	var haziranincome = parseInt($(".income6").text());
	var temmuzincome = parseInt($(".income7").text());
	var agustosincome = parseInt($(".income8").text());
	var eylulincome = parseInt($(".income9").text());
	var ekimincome = parseInt($(".income10").text());
	var kasimincome = parseInt($(".income11").text());
	var aralikincome = parseInt($(".income12").text());
	if(isNaN(ocakincome)){ var ocakincome = 0 }
	if(isNaN(subatincome)){ var subatincome = 0 }
	if(isNaN(martincome)){ var martincome = 0 }
	if(isNaN(nisanincome)){ var nisanincome = 0 }
	if(isNaN(mayisincome)){ var mayisincome = 0 }
	if(isNaN(haziranincome)){ var haziranincome = 0 }
	if(isNaN(temmuzincome)){ var temmuzincome = 0 }
	if(isNaN(agustosincome)){ var agustosincome = 0 }
	if(isNaN(eylulincome)){ var eylulincome = 0 }
	if(isNaN(ekimincome)){ var ekimincome = 0 }
	if(isNaN(kasimincome)){ var kasimincome = 0 }
	if(isNaN(aralikincome)){ var aralikincome = 0 }

     
     
     $('#pract').highcharts({
        chart: {
            type: 'areaspline'
        },
        title: {
            text: '<?php echo $_smarty_tpl->tpl_vars['_acts']->value;?>
'
        },
        xAxis: {
            categories: ["<?php echo $_smarty_tpl->tpl_vars['_jan']->value;?>
","<?php echo $_smarty_tpl->tpl_vars['_feb']->value;?>
","<?php echo $_smarty_tpl->tpl_vars['_mar']->value;?>
","<?php echo $_smarty_tpl->tpl_vars['_apr']->value;?>
","<?php echo $_smarty_tpl->tpl_vars['_may']->value;?>
","<?php echo $_smarty_tpl->tpl_vars['_jun']->value;?>
","<?php echo $_smarty_tpl->tpl_vars['_jul']->value;?>
","<?php echo $_smarty_tpl->tpl_vars['_aug']->value;?>
","<?php echo $_smarty_tpl->tpl_vars['_sep']->value;?>
","<?php echo $_smarty_tpl->tpl_vars['_oct']->value;?>
","<?php echo $_smarty_tpl->tpl_vars['_nov']->value;?>
","<?php echo $_smarty_tpl->tpl_vars['_dec']->value;?>
"]
        },
        yAxis: {
            title: {
                text: ''
            }
        },
        series: [{
            name: '<?php echo $_smarty_tpl->tpl_vars['_sales_history']->value;?>
',
            data: [ocak, subat, mart, nisan, mayis, haziran, temmuz, agustos, eylul, ekim, kasim, aralik ]
        }, 
        {
            name: '<?php echo $_smarty_tpl->tpl_vars['_pay']->value;?>
',
            data: [ocakop, subatop, martop, nisanop, mayisop, haziranop, temmuzop, agustosop, eylulop, ekimop, kasimop, aralikop]
        },
        {
            name: '<?php echo $_smarty_tpl->tpl_vars['_income']->value;?>
',
            data: [ocakincome, subatincome, martincome, nisanincome, mayisincome, haziranincome, temmuzincome, agustosincome, eylulincome, ekimincome, kasimincome, aralikincome]
        },
        {
            name: '<?php echo $_smarty_tpl->tpl_vars['_buy_proccess']->value;?>
',
            data: [ocakbuy, subatbuy, martbuy, nisanbuy, mayisbuy, haziranbuy, temmuzbuy, agustosbuy, eylulbuy, ekimbuy, kasimbuy, aralikbuy ]
        }]
    });   

    
    //Total in
    var buy = 0;
    var sale = 0;
    var outpayment = 0;
    var income = 0;
    $(".sale").each(function() {
	    sale += parseInt($(this).text());
    });
    $(".buy").each(function() {
	    buy += parseInt($(this).text());
    });
    $(".outpayment").each(function() {
	    outpayment += parseInt($(this).text());
    });
    $(".income").each(function() {
	    income += parseInt($(this).text());
    });
    $("#totalsale").html(sale);
    $("#totalbuy").html(buy);
    $("#outpayment").html(outpayment);
    $("#income").html(income);
    
    
$("div#thumb-small img").on("click", function(){
  var d = $(this).attr("value");
  $("div#thumb-large").html('<img src="<?php echo $_smarty_tpl->tpl_vars['main_img']->value;?>
/products/<?php echo $_smarty_tpl->tpl_vars['s']->value['stock_id'];?>
/large/'+d+'-large.jpg" alt="" class="img-thumbnail" />');
});

//Print stock no
$('.printMe').click(function(){
     window.print();
});

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


// End of function
});
<?php echo '</script'; ?>
><?php }
}
?>