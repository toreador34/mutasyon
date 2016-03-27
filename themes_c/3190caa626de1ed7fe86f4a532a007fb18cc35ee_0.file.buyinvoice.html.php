<?php /* Smarty version 3.1.27, created on 2016-03-27 22:01:13
         compiled from "/var/www/html/mutasyon/themes/default/buyinvoice.html" */ ?>
<?php
/*%%SmartyHeaderCode:115630909056f82df9ba1ab5_86897251%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3190caa626de1ed7fe86f4a532a007fb18cc35ee' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/buyinvoice.html',
      1 => 1456684397,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115630909056f82df9ba1ab5_86897251',
  'variables' => 
  array (
    '_buyinvoice' => 0,
    '_add_invoice' => 0,
    '_invoice' => 0,
    '_filter' => 0,
    'screen' => 0,
    '_no' => 0,
    '_seller' => 0,
    '_user' => 0,
    '_bank' => 0,
    '_pay' => 0,
    '_remain' => 0,
    '_date' => 0,
    '_detail' => 0,
    'invoice' => 0,
    'inv' => 0,
    '_currency' => 0,
    '_invoice_not_paid' => 0,
    '_invoice_paid' => 0,
    'pagetotal' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56f82df9c331d9_41649670',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56f82df9c331d9_41649670')) {
function content_56f82df9c331d9_41649670 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '115630909056f82df9ba1ab5_86897251';
echo $_smarty_tpl->getSubTemplate ('themes/default/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="container body-bg">
<!--Breadcrumb-->
  <ol class="breadcrumb hidden-print">
    <li><a href="index.php"><i class="fa fa-home" style="font-size: 20px;color:#000"></i></a></li>
    <li class="active"><?php echo $_smarty_tpl->tpl_vars['_buyinvoice']->value;?>
</li>
  </ol>
<!--/Breadcrumb-->
    <div class="container-fluid padding"><a href="addbuyinvoice.php" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_add_invoice']->value;?>
</a></div>
    <div class="container-fluid">
	  <div class="panel panel-default filterable">
			  <div class="panel-heading">
			      <h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['_invoice']->value;?>
</h3>
			      <div class="pull-right">
				  <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> <?php echo $_smarty_tpl->tpl_vars['_filter']->value;?>
</button>
			      </div>
			  </div>
			  <div <?php if ($_smarty_tpl->tpl_vars['screen']->value == 'phone') {?> style="overflow:auto" <?php }?>>
			  <table class="table">
			      <thead>
				  <tr class="filters">
				      <th style="width:16%"><input type="text" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['_no']->value;?>
" disabled></th>
				      <th style="width:10%"><input type="text" class="form-control" placeholder="Açıklama" disabled></th>
				      <th style="width:10%"><input type="text" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['_seller']->value;?>
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
				    <tr <?php if ($_smarty_tpl->tpl_vars['inv']->value['bi_cancel'] == 1) {?> style="text-decoration: line-through;color:gray" <?php }?>>
					  <td>
					  <a href="invoicedetail.php?bid=<?php echo $_smarty_tpl->tpl_vars['inv']->value['bi_id'];?>
" class="label <?php if ($_smarty_tpl->tpl_vars['inv']->value['pay_total'] < $_smarty_tpl->tpl_vars['inv']->value['invoice_total']) {?>label-yellow<?php } else { ?>label-green<?php }?> invoice-status"><?php echo $_smarty_tpl->tpl_vars['inv']->value['bi_no'];?>
</a>
					  </td>
					  <td style="font-size:11px"><?php echo $_smarty_tpl->tpl_vars['inv']->value['bi_desc'];?>
</td>
					  <td><a href="custdetail.php"><?php echo $_smarty_tpl->tpl_vars['inv']->value['seller_name'];?>
</a></td>
					  <td><a href="settings.php"><?php echo $_smarty_tpl->tpl_vars['inv']->value['name_surname'];?>
</a></td>
					  <td><a href="settings.php"><?php echo $_smarty_tpl->tpl_vars['inv']->value['bank_name'];?>
</a></td>
					  <td><?php if ($_smarty_tpl->tpl_vars['inv']->value['pay_total'] == '') {?><span><?php echo $_smarty_tpl->tpl_vars['_currency']->value;?>
</span>0<?php } else { ?><span><?php echo $_smarty_tpl->tpl_vars['_currency']->value;?>
</span><?php echo $_smarty_tpl->tpl_vars['inv']->value['pay_total'];
}?></td>
					  <td><span><?php echo $_smarty_tpl->tpl_vars['_currency']->value;?>
</span><?php echo $_smarty_tpl->tpl_vars['inv']->value['invoice_total']-$_smarty_tpl->tpl_vars['inv']->value['pay_total'];?>
</td>
					  <td><?php echo $_smarty_tpl->tpl_vars['inv']->value['bi_date'];?>
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
 
<?php }
}
?>