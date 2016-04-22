<?php /* Smarty version 3.1.27, created on 2016-04-22 16:56:13
         compiled from "/var/www/html/mutasyon/themes/default/stock.html" */ ?>
<?php
/*%%SmartyHeaderCode:1980078363571a2d7d1f86b6_65731862%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8e24c4c7b1b30a4b12d66351e76e4243d2539b0' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/stock.html',
      1 => 1461333367,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1980078363571a2d7d1f86b6_65731862',
  'variables' => 
  array (
    '_stock_list' => 0,
    '_category' => 0,
    '_add_category' => 0,
    '_all' => 0,
    'categories' => 0,
    'ct' => 0,
    'acategories' => 0,
    'kat' => 0,
    'screen' => 0,
    'stocklist' => 0,
    's' => 0,
    'main_img' => 0,
    '_currency' => 0,
    '_buy' => 0,
    '_sale' => 0,
    'pagetotal' => 0,
    'i' => 0,
    '_confirm_pay_to_seller' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_571a2d7d2ef111_11676861',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571a2d7d2ef111_11676861')) {
function content_571a2d7d2ef111_11676861 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once '/var/www/html/mutasyon/libs/plugins/modifier.truncate.php';

$_smarty_tpl->properties['nocache_hash'] = '1980078363571a2d7d1f86b6_65731862';
echo $_smarty_tpl->getSubTemplate ('themes/default/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 
<div class="container body-bg">
    <!--Breadcrumb-->
      <ol class="breadcrumb hidden-print">
	<li><a href="index.php"><i class="fa fa-home" style="font-size: 20px;color:#000"></i></a></li>
	<?php if (!Check::getValue('cid')) {?>
	      <li class="active"><?php echo $_smarty_tpl->tpl_vars['_stock_list']->value;?>
</li>
	<?php }?>
	<?php if (Check::getValue('cid')) {?>
	      <li><a href="stock.php"><?php echo $_smarty_tpl->tpl_vars['_stock_list']->value;?>
</a></li>
	      <li class="active"><span id="ctname"></span></li>
	<?php }?>
      </ol>
      <div class="col-xs-12">
	  <!--/Breadcrumb-->
	    <div class="col-sm-3 margin-top relative">
		    <h4 class="headers">
			  <?php echo $_smarty_tpl->tpl_vars['_category']->value;?>
<a data-toggle="collapse" href="#addcategory" aria-expanded="false" title="<?php echo $_smarty_tpl->tpl_vars['_add_category']->value;?>
" style="float:right;color:#5cb85c"><i class="fa fa-pencil-square-o"></i></a>
		    </h4>
		    <div class="categorylist">
			  <ul id="accordion" class="accordion">
				<li class="link"><i class="fa fa-home"></i> <a href="stock.php"><?php echo $_smarty_tpl->tpl_vars['_all']->value;?>
</a></li>
				<?php
$_from = $_smarty_tpl->tpl_vars['categories']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ct'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ct']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ct']->value) {
$_smarty_tpl->tpl_vars['ct']->_loop = true;
$foreach_ct_Sav = $_smarty_tpl->tpl_vars['ct'];
?>
				      <li>
					    <div class="link"><i class="fa fa-home"></i> <?php echo $_smarty_tpl->tpl_vars['ct']->value['category_name'];?>
<br /> <span class="catdetail"><?php echo $_smarty_tpl->tpl_vars['ct']->value['category_detail'];?>
</span></div>
					    <ul class="submenu">
						  <?php
$_from = $_smarty_tpl->tpl_vars['acategories']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['kat'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['kat']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['kat']->value) {
$_smarty_tpl->tpl_vars['kat']->_loop = true;
$foreach_kat_Sav = $_smarty_tpl->tpl_vars['kat'];
?>
						  <?php if ($_smarty_tpl->tpl_vars['ct']->value['category_id'] == $_smarty_tpl->tpl_vars['kat']->value['category_sub']) {?>
							<li class="relative"><i class="fa fa-caret-right"></i> <a href="?cid=<?php echo $_smarty_tpl->tpl_vars['kat']->value['category_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['kat']->value['category_name'];?>
</a><span class="catdetail"><?php echo $_smarty_tpl->tpl_vars['kat']->value['category_detail'];?>
</span></li>
						  <?php }?>
						  <?php
$_smarty_tpl->tpl_vars['kat'] = $foreach_kat_Sav;
}
?>
					    </ul>
				      </li>
				<?php
$_smarty_tpl->tpl_vars['ct'] = $foreach_ct_Sav;
}
?>
			  </ul>
		    </div>
	      </div><!--/col-sm-3 margin-top relative-->
	      <div class="col-sm-9 col-xs-12 urunlistesi">
		    <div class="prfilter">
		    <?php if ($_smarty_tpl->tpl_vars['screen']->value == 'phone') {?>
			  <a class="menu-bar" data-toggle="collapse" href="#menu">
			      <span class="bars"></span>            
			  </a>
			  <div class="collapse menu" id="menu">
			      <ul class="list-inline">
				      <li class="<?php if (Check::getValue("stock") == "instock") {?>activeli<?php }?>">
					    <i class="fa fa-check-square-o"></i> <a href="javascript:removeOther('stock=outstock', 'stock=instock');">Stoktakiler</a>
				      </li>
				      <li class="<?php if (Check::getValue("s") == "bestseller") {?>activeli<?php }?>">
					    <i class="fa fa-line-chart"></i> <a href="javascript:removeOther('s=all', 's=bestseller');">Çok St.</a>
				      </li>
				      <li class="<?php if (Check::getValue("stock") == "outstock") {?>activeli<?php }?>">
					    <i class="fa fa-battery-empty"></i> <a href="javascript:removeOther('stock=instock', 'stock=outstock');">Tükenenler</a>
				      </li>
				      <li class="<?php if ($_SESSION['view'] == 'list') {?>activeli<?php }?>">
					    <a class="list"><i class="fa fa-bars"></i> Liste</a>
				      </li>
				      <li class="<?php if ($_SESSION['view'] == 'grid' || !$_SESSION['view']) {?>activeli<?php }?>"> 
					    <a class="grid"><i class="fa fa-th-large"></i> Tablo</a>
				      </li>
			      </ul>   
			  </div>
		    <?php } else { ?>
			  <ul style="padding:0">
				<li class='<?php if (Check::getValue("stock") == "instock") {?>activeli<?php }?> pull-left'><i class="fa fa-check-square-o"></i> <a href="javascript:removeOther('stock=outstock', 'stock=instock');">Stokta Olanlar</a></li>
				  <li class='<?php if (Check::getValue("s") == "bestseller") {?>activeli<?php }?> pull-left'><i class="fa fa-line-chart"></i> <a href="javascript:removeOther('s=all', 's=bestseller');">Çok Satılanlar</a></li>
				  <li class='<?php if (Check::getValue("stock") == "outstock") {?>activeli<?php }?> pull-left'><i class="fa fa-battery-empty"></i> <a href="javascript:removeOther('stock=instock', 'stock=outstock');">Tükenenler</a></li>
				  <li class="<?php if ($_SESSION['view'] == 'list') {?>activeli<?php }?> pull-right"> 
				  <a class="list"><i class="fa fa-bars"></i> Liste</a></li>
				  <li class="<?php if ($_SESSION['view'] == 'grid' || !$_SESSION['view']) {?>activeli<?php }?> pull-right"> <a class="grid"><i class="fa fa-th-large"></i> Tablo</a></li>
			  </ul>
		    <?php }?>
		    </div><!--/prfilter-->
		    <!--prlist-->
		    <?php
$_from = $_smarty_tpl->tpl_vars['stocklist']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['s'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['s']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
$foreach_s_Sav = $_smarty_tpl->tpl_vars['s'];
?>
		    <div class="<?php if ($_SESSION['view'] == 'grid' || !$_SESSION['view']) {?>col-sm-3 col-xs-6 vgrid<?php } else { ?>col-sm-12 vlist<?php }?>">
			  <div class="<?php if ($_smarty_tpl->tpl_vars['screen']->value == 'phone') {?>prboxmobile<?php }?> prbox">
				<div class="first <?php if ($_SESSION['view'] == 'grid' || !$_SESSION['view']) {?>col-sm-12<?php } else { ?>col-sm-3 col-xs-4<?php }?>">
				      <a href="productdetail.php?sid=<?php echo $_smarty_tpl->tpl_vars['s']->value['stock_id'];?>
">
					    <?php if ($_smarty_tpl->tpl_vars['s']->value['total'] > 5) {?>
						  <img class="vbestseller" src="img/crown.png" />
					    <?php }?>
					    <img class="vprimage" src="<?php if ($_smarty_tpl->tpl_vars['s']->value['images_id']) {
echo $_smarty_tpl->tpl_vars['main_img']->value;?>
/products/<?php echo $_smarty_tpl->tpl_vars['s']->value['stock_id'];?>
/large/<?php echo $_smarty_tpl->tpl_vars['s']->value['images_id'];?>
_large.jpg<?php } else {
echo $_smarty_tpl->tpl_vars['main_img']->value;?>
/noimage-large.jpg<?php }?>" alt="<?php echo $_smarty_tpl->tpl_vars['s']->value['images_title'];?>
" />
				      </a>
				</div>
				<div class="second <?php if ($_SESSION['view'] == 'grid' || !$_SESSION['view']) {?>col-sm-12<?php } else { ?>col-sm-9 col-xs-8<?php }?>">
				      <div class="vname">
					    <a href="productdetail.php?sid=<?php echo $_smarty_tpl->tpl_vars['s']->value['stock_id'];?>
">
						  <span class="vprname">
						  <?php if ($_smarty_tpl->tpl_vars['screen']->value == 'phone') {?>
							<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['s']->value['stock_name'],30);?>

						  <?php } else { ?>
							<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['s']->value['stock_name'],50);?>

						  <?php }?>
						  </span>
					    </a>
					    <?php if ($_smarty_tpl->tpl_vars['s']->value['stock_amount'] > 0) {?>
						  <span class="badge badge-success vlabels"><?php echo $_smarty_tpl->tpl_vars['s']->value['stock_amount'];?>
</span>
					    <?php } else { ?>
						  <span class="badge badge-danger vlabels"><?php echo $_smarty_tpl->tpl_vars['s']->value['stock_amount'];?>
</span>
					    <?php }?>
				      </div>
				      <div class="vdetail">
					    <?php if ($_smarty_tpl->tpl_vars['screen']->value == 'phone') {?>
						  <?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['s']->value['stock_detail']),85);?>

					    <?php } else { ?>
						  <?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['s']->value['stock_detail']),120);?>

					    <?php }?>
				      </div>
				      <div class="vpricemobile">
						  <div class="vprice">
							<span><?php echo $_smarty_tpl->tpl_vars['_currency']->value;?>
</span> <?php echo $_smarty_tpl->tpl_vars['s']->value['stock_price_out'];?>

						  </div>
				      </div>
				      <div class="row">
					    <a data-toggle="collapse" href="#buystock" class="btn btn-yellow btn-xs buystock1" stock="<?php echo $_smarty_tpl->tpl_vars['s']->value['stock_name'];?>
" sid="<?php echo $_smarty_tpl->tpl_vars['s']->value['stock_id'];?>
"><i class="fa fa-cart-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_buy']->value;?>
</a>
					    <a data-toggle="collapse" href="#sellstock" class="btn btn-green btn-xs sellstock1" price="<?php echo $_smarty_tpl->tpl_vars['s']->value['stock_price_out'];?>
" stockname="<?php echo $_smarty_tpl->tpl_vars['s']->value['stock_name'];?>
"><i class="fa fa-shopping-cart"></i> <?php echo $_smarty_tpl->tpl_vars['_sale']->value;?>
</a>
				      </div>
				      <input type="hidden" class="ctname" value="<?php echo $_smarty_tpl->tpl_vars['s']->value['category_name'];?>
" />
				</div>
			</div>
		    </div>
		    <?php
$_smarty_tpl->tpl_vars['s'] = $foreach_s_Sav;
}
?>
		    <!--prlist-->		    
	      </div><!--/col-sm-9-->
      </div>
	<?php if ($_smarty_tpl->tpl_vars['screen']->value == 'phone') {?>
	      <?php if ($_smarty_tpl->tpl_vars['pagetotal']->value > 1) {?>
		    <div class="pull-right">
			    <ul class="pagination mtm mbm">
				  <li<?php if (Check::getValue("page") <= 1) {?> class="disabled"<?php }?> ><a <?php if (Check::getValue("page") > 1) {?> href="javascript:removeOther('page=<?php echo Check::getValue("page");?>
', 'page=<?php echo Check::getValue("page")-1;?>
');" <?php }?>><<</a>
					<li><a><?php if (!Check::getValue("page")) {?>1<?php } else {
echo Check::getValue("page");
}?>/<?php echo $_smarty_tpl->tpl_vars['pagetotal']->value;?>
</a></li>
				  <li <?php if (Check::getValue("page") == $_smarty_tpl->tpl_vars['pagetotal']->value) {?> class="disabled" <?php }?>><a <?php if (Check::getValue("page") < $_smarty_tpl->tpl_vars['pagetotal']->value) {?> href="javascript:removeOther('page=<?php echo Check::getValue('page');?>
', 'page=<?php if (!Check::getValue('page')) {
echo Check::getValue('page')+2;
} else {
echo Check::getValue('page')+1;
}?>');" <?php }?>>>></a></li>
			    </ul>
		      </div>
	      <?php }?>
	<?php } else { ?>
	      <?php if ($_smarty_tpl->tpl_vars['pagetotal']->value > 1) {?>
		    <div class="pull-right">
			    <ul class="pagination mtm mbm">
				  <li<?php if (Check::getValue("page") <= 1) {?> class="disabled"<?php }?> ><a <?php if (Check::getValue("page") > 1) {?> href="javascript:removeOther('page=<?php echo Check::getValue("page");?>
', 'page=<?php echo Check::getValue("page")-1;?>
');" <?php }?>><<</a>
				  <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['pagetotal']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['pagetotal']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
					<li <?php if (Check::getValue("page") == $_smarty_tpl->tpl_vars['i']->value) {?> class="active" <?php }?>><a href="javascript:removeOther('page=<?php echo Check::getValue("page");?>
', 'page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
');"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
				  <?php }} ?>
				  <li <?php if (Check::getValue("page") == $_smarty_tpl->tpl_vars['pagetotal']->value) {?> class="disabled" <?php }?>><a <?php if (Check::getValue("page") < $_smarty_tpl->tpl_vars['pagetotal']->value) {?> href="javascript:removeOther('page=<?php echo Check::getValue('page');?>
', 'page=<?php if (!Check::getValue('page')) {
echo Check::getValue('page')+2;
} else {
echo Check::getValue('page')+1;
}?>');" <?php }?>>>></a></li>
			    </ul>
		      </div>
	      <?php }?>
	<?php }?>
	
</div><!--/container body-bg-->

<?php echo $_smarty_tpl->getSubTemplate ('themes/default/category/addcategory.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('themes/default/stock/addstock.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('themes/default/stock/sellstock.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('themes/default/seller/addseller.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('themes/default/taxprofit/addtax.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('themes/default/invoiceadj/addadj.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('themes/default/bank/addbank.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('themes/default/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo '<script'; ?>
>
$(function(){

//Accordion
$(".top").accordion();

//For menu
var Accordion = function(el, multiple) {
		this.el = el || {};
		this.multiple = multiple || false;

		// Variables privadas
		var links = this.el.find('.link');
		// Evento
		links.on('click', { el: this.el, multiple: this.multiple}, this.dropdown)
	}

	Accordion.prototype.dropdown = function(e) {
		var $el = e.data.el;
			$this = $(this),
			$next = $this.next();

		$next.slideToggle();
		$this.parent().toggleClass('open');

		if (!e.data.multiple) {
			$el.find('.submenu').not($next).slideUp().parent().removeClass('open');
		};
	}	

	var accordion = new Accordion($('#accordion'), false);
	
//For add stock
$(".buystock1").click(function(){
  var stock = $(this).attr("stock");
  var stockid = $(this).attr("sid");
  $("#addstock-heading").text(stock);
  $("input[name='buyproductname[]']").val(stockid);
});

// For sell stock (This code write price to #price)
$(".sellstock1").click(function(){
  var price = $(this).attr("price");
  var stockname = $(this).attr("stockname");
  $(".totalinv").text(price);
  $("#price").val(price);
  $("input[name='productname[]']").val(stockname);
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
$(".grid").on("click", function(){
    $.ajax({
	    type:'POST',
	    url: 'load.php',
		data : { 'view':'grid'},
		success:function(t){
		  setTimeout(function(){ location.reload(); }, 100);
		}
	  });
});

$(".list").on("click", function(){
    $.ajax({
	    type:'POST',
	    url: 'load.php',
		data : { 'view':'list'},
		success:function(t){
		  setTimeout(function(){ location.reload(); }, 100);
		}
	  });
});

});

<?php echo '</script'; ?>
><?php }
}
?>