<?php /* Smarty version 3.1.27, created on 2016-03-15 22:17:59
         compiled from "/var/www/html/mutasyon/themes/default/body.html" */ ?>
<?php
/*%%SmartyHeaderCode:134080045856e86df74c7821_18826877%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5fbb860ff1a3bd3ca0cc193b7d52341c3554a2f' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/body.html',
      1 => 1457205551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134080045856e86df74c7821_18826877',
  'variables' => 
  array (
    'screen' => 0,
    'inmonth' => 0,
    'm' => 0,
    'outmonth' => 0,
    'o' => 0,
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
    'stlist' => 0,
    'st' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56e86df75a1131_57589800',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56e86df75a1131_57589800')) {
function content_56e86df75a1131_57589800 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '134080045856e86df74c7821_18826877';
echo $_smarty_tpl->getSubTemplate ('themes/default/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="container body-bg">
    <div class ="row body-row">
	  <div class="container">
		  <div class="col-sm-12">
			  <div class="col-md-4 col-sm-6">
				    <?php echo $_smarty_tpl->getSubTemplate ('themes/default/admin/profile.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

				    <?php echo $_smarty_tpl->getSubTemplate ('themes/default/widget/eventlists.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

				    <?php echo $_smarty_tpl->getSubTemplate ('themes/default/widget/banklists.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

				    <?php echo $_smarty_tpl->getSubTemplate ('themes/default/widget/providerslist.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

				    <?php echo $_smarty_tpl->getSubTemplate ('themes/default/widget/lastcustomers.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

			
			  </div>
			  <div class="col-md-8 col-sm-6">
				    <?php if ($_smarty_tpl->tpl_vars['screen']->value == 'computer') {?>
				    <div id="invoiceio" style="width:100%; height:400px;"></div><br />
				    <?php }?>
				    <?php echo $_smarty_tpl->getSubTemplate ('themes/default/widget/lastinvoice.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

			  </div>
		  </div>
	  </div>  
	  <?php
$_from = $_smarty_tpl->tpl_vars['inmonth']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['m'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['m']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
$foreach_m_Sav = $_smarty_tpl->tpl_vars['m'];
?>
	  <input class="i<?php echo $_smarty_tpl->tpl_vars['m']->value['pm'];?>
" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['m']->value['intotal'];?>
" />
	  <input class="oa<?php echo $_smarty_tpl->tpl_vars['m']->value['pm'];?>
" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['m']->value['outtotal'];?>
" />
	  <?php
$_smarty_tpl->tpl_vars['m'] = $foreach_m_Sav;
}
?>
	  <?php
$_from = $_smarty_tpl->tpl_vars['outmonth']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['o'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['o']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->_loop = true;
$foreach_o_Sav = $_smarty_tpl->tpl_vars['o'];
?>
	  <input class="o<?php echo $_smarty_tpl->tpl_vars['o']->value['pm'];?>
" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['o']->value['total'];?>
" />
	  <?php
$_smarty_tpl->tpl_vars['o'] = $foreach_o_Sav;
}
?>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('themes/default/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo '<script'; ?>
>
//For complete event
$('.eventcomp').on('click', function(){
  if($(this).is(':checked'))
  {
    $(this).parent().addClass("event-complete");
    var id = $(this).parent().attr("title");
    var status = '1';
  }
  else
  {
    $(this).parent().removeClass("event-complete");
    var id = $(this).parent().attr("title");
    var status = '0';
  }
  $.post("events.php", {
                        status: status,
                        id: id
                    }, function (t) {
                        $("div.work-inf").addClass("display-block");
			$("div.work-inf").html(t);
                    });
});

//For delete event
$('.eventdel').on('click', function(){
  var delid = $(this).parent().attr("title");
  $(this).parent().parent().slideUp(250);
  $.post("events.php", {
                        delid: delid
                    }, function (t) {
                        $("div.work-inf").addClass("display-block");
			$("div.work-inf").html(t);
			
                    });
});

$('.togg').button('toggle').addClass('fat');

var totalinv = $(".totalinv").text();

if(totalinv > 0 && totalinv < 101)
{
      $("#rating p").html('<a href="#"><span class="fa fa-star"></span></a><a href="#"><span class="fa fa-star-o"></span></a><a href="#"><span class="fa fa-star-o"></span></a><a href="#"><span class="fa fa-star-o"></span></a><a href="#"><span class="fa fa-star-o"></span></a>');
}
else if(totalinv > 100 && totalinv < 201)
{
      $("#rating p").html('<a href="#"><span class="fa fa-star"></span></a><a href="#"><span class="fa fa-star"></span></a><a href="#"><span class="fa fa-star-o"></span></a><a href="#"><span class="fa fa-star-o"></span></a><a href="#"><span class="fa fa-star-o"></span></a>');
}
else if(totalinv > 200 && totalinv < 301)
{
      $("#rating p").html('<a href="#"><span class="fa fa-star"></span></a><a href="#"><span class="fa fa-star"></span></a><a href="#"><span class="fa fa-star"></span></a><a href="#"><span class="fa fa-star-o"></span></a><a href="#"><span class="fa fa-star-o"></span></a>');
}
else if(totalinv > 300 && totalinv < 401)
{
      $("#rating p").html('<a href="#"><span class="fa fa-star"></span></a><a href="#"><span class="fa fa-star"></span></a><a href="#"><span class="fa fa-star"></span></a><a href="#"><span class="fa fa-star"></span></a><a href="#"><span class="fa fa-star-o"></span></a>');
}
else if(totalinv > 400)
{
      $("#rating p").html('<a href="#"><span class="fa fa-star"></span></a><a href="#"><span class="fa fa-star"></span></a><a href="#"><span class="fa fa-star"></span></a><a href="#"><span class="fa fa-star"></span></a><a href="#"><span class="fa fa-star"></span></a>');
}

//For charts
	var ocak = parseInt($(".i1").val());
	var subat = parseInt($(".i2").val());
	var mart = parseInt($(".i3").val());
	var nisan = parseInt($(".i4").val());
	var mayis = parseInt($(".i5").val());
	var haziran = parseInt($(".i6").val());
	var temmuz = parseInt($(".i7").val());
	var agustos = parseInt($(".i8").val());
	var eylul = parseInt($(".i9").val());
	var ekim = parseInt($(".i10").val());
	var kasim = parseInt($(".i11").val());
	var aralik = parseInt($(".i12").val());
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
	
	var ocako = parseInt($(".o1").val());
	var subato = parseInt($(".o2").val());
	var marto = parseInt($(".o3").val());
	var nisano = parseInt($(".o4").val());
	var mayiso = parseInt($(".o5").val());
	var hazirano = parseInt($(".o6").val());
	var temmuzo = parseInt($(".o7").val());
	var agustoso = parseInt($(".o8").val());
	var eylulo = parseInt($(".o9").val());
	var ekimo = parseInt($(".o10").val());
	var kasimo = parseInt($(".o11").val());
	var araliko = parseInt($(".o12").val());
	if(isNaN(ocako)){ var ocako = 0 }
	if(isNaN(subato)){ var subato = 0 }
	if(isNaN(marto)){ var marto = 0 }
	if(isNaN(nisano)){ var nisano = 0 }
	if(isNaN(mayiso)){ var mayiso = 0 }
	if(isNaN(hazirano)){ var hazirano = 0 }
	if(isNaN(temmuzo)){ var temmuzo = 0 }
	if(isNaN(agustoso)){ var agustoso = 0 }
	if(isNaN(eylulo)){ var eylulo = 0 }
	if(isNaN(ekimo)){ var ekimo = 0 }
	if(isNaN(kasimo)){ var kasimo = 0 }
	if(isNaN(araliko)){ var araliko = 0 }
	
	var ocakoa = parseInt($(".oa1").val());
	var subatoa = parseInt($(".oa2").val());
	var martoa = parseInt($(".oa3").val());
	var nisanoa = parseInt($(".oa4").val());
	var mayisoa = parseInt($(".oa5").val());
	var haziranoa = parseInt($(".oa6").val());
	var temmuzoa = parseInt($(".oa7").val());
	var agustosoa = parseInt($(".oa8").val());
	var eyluloa = parseInt($(".oa9").val());
	var ekimoa = parseInt($(".oa10").val());
	var kasimoa = parseInt($(".oa11").val());
	var aralikoa = parseInt($(".oa12").val());
	if(isNaN(ocakoa)){ var ocakoa = 0 }
	if(isNaN(subatoa)){ var subatoa = 0 }
	if(isNaN(martoa)){ var martoa = 0 }
	if(isNaN(nisanoa)){ var nisanoa = 0 }
	if(isNaN(mayisoa)){ var mayisoa = 0 }
	if(isNaN(haziranoa)){ var haziranoa = 0 }
	if(isNaN(temmuzoa)){ var temmuzoa = 0 }
	if(isNaN(agustosoa)){ var agustosoa = 0 }
	if(isNaN(eyluloa)){ var eyluloa = 0 }
	if(isNaN(ekimoa)){ var ekimoa = 0 }
	if(isNaN(kasimoa)){ var kasimoa = 0 }
	if(isNaN(aralikoa)){ var aralikoa = 0 }
	
	 $('#invoiceio').highcharts({
        chart: {
            type: 'areaspline'
        },
        title: {
            text: 'Ödemeler'
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
            name: 'Girişler',
            data: [ocak, subat, mart, nisan, mayis, haziran, temmuz, agustos, eylul, ekim, kasim, aralik ]
        }, {
            name: 'Çıkışlar',
            data: [ocako+ocakoa, subato+subatoa, marto+martoa, nisano+nisanoa, mayiso+mayisoa, hazirano+haziranoa, temmuzo+temmuzoa, agustoso+agustosoa, eylulo+eyluloa, ekimo+ekimoa, kasimo+kasimoa, araliko+aralikoa ]
        }]
    });
    
 
$(function () { 
    $('#instocks').highcharts({
        chart: {
            type: 'pie'
        },
        title: {
            text: 'Stok Ürünleri'
        },
        series: [{
            name: "Brands",
            colorByPoint: true,
            data: [
            <?php
$_from = $_smarty_tpl->tpl_vars['stlist']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['st'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['st']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['st']->value) {
$_smarty_tpl->tpl_vars['st']->_loop = true;
$foreach_st_Sav = $_smarty_tpl->tpl_vars['st'];
?>
            {
                name: "<?php echo $_smarty_tpl->tpl_vars['st']->value['stock_name'];?>
",
                y: <?php echo $_smarty_tpl->tpl_vars['st']->value['stock_amount'];?>

            }, 
            <?php
$_smarty_tpl->tpl_vars['st'] = $foreach_st_Sav;
}
?>
            ]
        }]
    });
});
<?php echo '</script'; ?>
><?php }
}
?>