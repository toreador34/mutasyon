<?php /* Smarty version 3.1.27, created on 2016-04-02 19:00:42
         compiled from "/var/www/html/mutasyon/themes/default/receipt/receipt.html" */ ?>
<?php
/*%%SmartyHeaderCode:79636259656ffecaae27012_34252130%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '227516957441851ed5795439392f6eef6f75fa85' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/receipt/receipt.html',
      1 => 1459612837,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '79636259656ffecaae27012_34252130',
  'variables' => 
  array (
    '_payment_history' => 0,
    '_receipt' => 0,
    'invoiceid' => 0,
    '_print' => 0,
    'i' => 0,
    '_edit' => 0,
    'main_img' => 0,
    '_company' => 0,
    'compname' => 0,
    '_desc' => 0,
    '_advance' => 0,
    '_credit' => 0,
    '_eft' => 0,
    '_currency' => 0,
    'screen' => 0,
    '_bank' => 0,
    '_branch' => 0,
    '_no' => 0,
    '_check_no' => 0,
    '_expiry' => 0,
    '_price' => 0,
    '_only' => 0,
    '_paying' => 0,
    '_who_charged' => 0,
    'admin_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56ffecaae74038_74842924',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56ffecaae74038_74842924')) {
function content_56ffecaae74038_74842924 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '79636259656ffecaae27012_34252130';
echo $_smarty_tpl->getSubTemplate ('themes/default/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="container body-bg">
<!--Breadcrumb-->
  <ol class="breadcrumb hidden-print">
    <li><a href="index.php"><i class="fa fa-home" style="font-size: 20px;color:#000"></i></a></li>
    <li><a href="payments.php"><?php echo $_smarty_tpl->tpl_vars['_payment_history']->value;?>
</a></li>
    <li class="active"><?php echo $_smarty_tpl->tpl_vars['_receipt']->value;?>
</li>
  </ol>
<!--/Breadcrumb-->
      <div class="col-xs-12 margin-top">
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
	    <div class="col-xs-12" style="background:#fff;">
		  <div class="row">
		  <div class="pull-right hidden-print" style="padding-right:5px;padding-top:5px">
			<a href="javascript:if(window.print)window.print()" class="btn btn-green"><i class="fa fa-print"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['_print']->value;?>
</a>
			<a href="?epid=<?php echo $_smarty_tpl->tpl_vars['i']->value['payment_id'];?>
" class="btn btn-blue"><i class="fa fa-edit"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['_edit']->value;?>
</a>
                  </div>
			<div class="col-sm-8 col-xs-12">
			      <div class="col-sm-6 col-xs-10"><img src="<?php echo $_smarty_tpl->tpl_vars['main_img']->value;?>
/logo.jpg" style="width:100%" /></div>
			</div>
			<div class="col-sm-4 col-xs-12">
				    <h3 class="box-heading"><?php echo $_smarty_tpl->tpl_vars['_receipt']->value;?>
</h3>
				    <span style="font-size:14px"><?php echo $_smarty_tpl->tpl_vars['i']->value['payment_date'];?>
</span>
			</div>
		  </div>
		  <div class="row margin-top">
			<div class="col-sm-8"><span class="compname"><?php echo $_smarty_tpl->tpl_vars['_company']->value;?>
 : </span> <span class="compname1"><?php echo $_smarty_tpl->tpl_vars['compname']->value;?>
</span></div>
			<div class="col-sm-4">
			      <div class="note note-info">
				    <h4 class="box-heading"><?php echo $_smarty_tpl->tpl_vars['_desc']->value;?>
</h4>
				    <?php echo $_smarty_tpl->tpl_vars['i']->value['payment_desc'];?>

			      </div>
			      <table class="table table-hover table-bordered">
				    <tr>
					  <td class="active" style="width:40%">
						<?php if ($_smarty_tpl->tpl_vars['i']->value['payment_type'] == 1) {?>
						      <?php echo $_smarty_tpl->tpl_vars['_advance']->value;?>
 
						<?php } elseif ($_smarty_tpl->tpl_vars['i']->value['payment_type'] == 2) {?>
						      <?php echo $_smarty_tpl->tpl_vars['_credit']->value;?>

						<?php } elseif ($_smarty_tpl->tpl_vars['i']->value['payment_type'] == 3) {?>
						      <?php echo $_smarty_tpl->tpl_vars['_eft']->value;?>

						<?php }?>
					  </td>
					  <td style="width:60%"><span><?php echo $_smarty_tpl->tpl_vars['_currency']->value;?>
</span><?php echo $_smarty_tpl->tpl_vars['i']->value['payment_amount'];?>
</td>
				    </tr>
			      </table>
			</div>
		  </div>
		  <div class="row">
			<div class="col-xs-12"<?php if ($_smarty_tpl->tpl_vars['screen']->value == 'phone') {?> style="overflow:auto" <?php }?>>
			      <table class="table table-bordered">
				    <thead>
					  <tr class="active">
						<th><?php echo $_smarty_tpl->tpl_vars['_bank']->value;?>
</th>
						<th><?php echo $_smarty_tpl->tpl_vars['_branch']->value;?>
</th>
						<th><?php echo $_smarty_tpl->tpl_vars['_no']->value;?>
</th>
						<th><?php echo $_smarty_tpl->tpl_vars['_check_no']->value;?>
</th>
						<th><?php echo $_smarty_tpl->tpl_vars['_expiry']->value;?>
</th>
						<th><?php echo $_smarty_tpl->tpl_vars['_price']->value;?>
</th>
					  </tr>
				    </thead>
				    <tbody>
					  <tr style="height:50px">
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td><span><?php echo $_smarty_tpl->tpl_vars['_currency']->value;?>
</span><?php echo $_smarty_tpl->tpl_vars['i']->value['payment_amount'];?>
</td>
					  </tr>
				    </tbody>
			      </table>
			</div>
		  </div>
		  <div class="row">
			<div class="col-xs-12">
			      <table class="table table-hover table-bordered">
				    <tr style="height:80px">
					  <td style="width:50%">
						<strong><?php echo $_smarty_tpl->tpl_vars['_only']->value;?>
</strong>
						<?php echo sayiyiYaziyaCevir($_smarty_tpl->tpl_vars['i']->value['payment_amount'],2,"TL","Kr","#",null,null,null);?>
 alınmıştır.
					  </td>
					  <?php if ($_smarty_tpl->tpl_vars['i']->value['payment_in_out'] == "in" || $_smarty_tpl->tpl_vars['i']->value['payment_in_out'] == "cin") {?>
						<td style="width:25%;text-align:center">
						      <strong><?php echo $_smarty_tpl->tpl_vars['_paying']->value;?>
</strong><br />
						      <?php echo $_smarty_tpl->tpl_vars['i']->value['cust_name'];?>

						</td>
						<td style="width:25%;text-align:center">
						      <strong><?php echo $_smarty_tpl->tpl_vars['_who_charged']->value;?>
</strong><br />
						      <?php echo $_smarty_tpl->tpl_vars['admin_name']->value;?>

						</td>
					  <?php } else { ?>
						<td style="width:25%;text-align:center">
						      <strong><?php echo $_smarty_tpl->tpl_vars['_paying']->value;?>
</strong><br />
						      <?php echo $_smarty_tpl->tpl_vars['admin_name']->value;?>

						</td>
						<td style="width:25%;text-align:center">
						      <strong><?php echo $_smarty_tpl->tpl_vars['_who_charged']->value;?>
</strong><br />
						      <?php if ($_smarty_tpl->tpl_vars['i']->value['seller_name'] != NULL) {?>
							    <?php echo $_smarty_tpl->tpl_vars['i']->value['seller_name'];?>

						      <?php } elseif ($_smarty_tpl->tpl_vars['i']->value['providers_name'] != NULL) {?>
							    <?php echo $_smarty_tpl->tpl_vars['i']->value['providers_name'];?>

						      <?php } else { ?>
							    <?php echo $_smarty_tpl->tpl_vars['i']->value['cust_name'];?>

						      <?php }?>
						</td>
					  <?php }?>
				    </tr>
			      </table>
			</div>
		  </div>
	    </div>
	    <?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>
      </div>
</div><!--/container-->

<?php echo $_smarty_tpl->getSubTemplate ('themes/default/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>