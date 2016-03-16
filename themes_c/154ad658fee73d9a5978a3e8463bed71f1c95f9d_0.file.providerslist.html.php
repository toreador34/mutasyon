<?php /* Smarty version 3.1.27, created on 2016-03-15 22:17:59
         compiled from "/var/www/html/mutasyon/themes/default/widget/providerslist.html" */ ?>
<?php
/*%%SmartyHeaderCode:210161280456e86df7855008_86922468%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '154ad658fee73d9a5978a3e8463bed71f1c95f9d' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/widget/providerslist.html',
      1 => 1456845422,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '210161280456e86df7855008_86922468',
  'variables' => 
  array (
    '_providers' => 0,
    'screen' => 0,
    '_total' => 0,
    '_paid' => 0,
    'providerslist' => 0,
    'pl' => 0,
    '_currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56e86df7892222_62788566',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56e86df7892222_62788566')) {
function content_56e86df7892222_62788566 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '210161280456e86df7855008_86922468';
?>
<!-- Bank Lists -->
<div class="margin-top panel">
	<div class="portlet-header border-bottom invoice-icon">
	     <span class="pull-right addevent" style="margin-right:10px;" data-toggle="collapse" href="#addproviders"><i class="fa fa-plus-square"></i></span>
	    <i class="glyphicon glyphicon-home" style="font-size: 20px"></i>
	    <span class="invoice-header"><?php echo $_smarty_tpl->tpl_vars['_providers']->value;?>
</span>
	</div>
	<div id="bank" class="row1 last-customer-list" <?php if ($_smarty_tpl->tpl_vars['screen']->value == 'phone') {?> style="overflow:auto" <?php }?>>
		<div class="providers">
		      <table class="table table-hover" id="dev-table">
			    <thead>
				  <th><?php echo $_smarty_tpl->tpl_vars['_providers']->value;?>
</td>
				  <th><i class="fa fa-money"></i> <?php echo $_smarty_tpl->tpl_vars['_total']->value;?>
</td>
				  <th><i class="fa fa-credit-card"></i> <?php echo $_smarty_tpl->tpl_vars['_paid']->value;?>
</td>
				  <td></td>
			    </thead>
			    <?php
$_from = $_smarty_tpl->tpl_vars['providerslist']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['pl'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['pl']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['pl']->value) {
$_smarty_tpl->tpl_vars['pl']->_loop = true;
$foreach_pl_Sav = $_smarty_tpl->tpl_vars['pl'];
?>
			    <tbody>
				    <tr><!-- List Start -->
					    <td><a href="#"><?php echo $_smarty_tpl->tpl_vars['pl']->value['providers_name'];?>
</a></td>
					    <td>
						<a href="payments.php">
						    <span><?php echo $_smarty_tpl->tpl_vars['_currency']->value;?>
</span>
						    <?php if ($_smarty_tpl->tpl_vars['pl']->value['total'] == NULL) {?>
							<span>0</span>
						    <?php } else { ?>
							<span><?php echo number_format(($_smarty_tpl->tpl_vars['pl']->value['total']),2,".",'');?>
</span>
						    <?php }?>
						</a>
					    </td>
					    <td>
						<a href="payments.php">
						    <span><?php echo $_smarty_tpl->tpl_vars['_currency']->value;?>
</span>
						    <?php if (round(($_smarty_tpl->tpl_vars['pl']->value['pp_price']),2) == NULL) {?>
							<span>0</span>
						    <?php } else { ?>
							<span><?php echo number_format(($_smarty_tpl->tpl_vars['pl']->value['paytotal']),2,".",'');?>
</span>
						    <?php }?>
						</a>
					    </td>
					    <td>
						  <?php if ((number_format(($_smarty_tpl->tpl_vars['pl']->value['paytotal']),2,".",'')) == (number_format(($_smarty_tpl->tpl_vars['pl']->value['total']),2,".",''))) {?>
						      <span><i class="fa fa-check-square colorGreen"></i></span>
						  <?php } else { ?>
						      <span><i class="fa fa-exclamation-triangle colorRed"></i></span>
						  <?php }?>
					    </td>
				    </tr><!-- List Finish -->
			    </tbody>
			    <?php
$_smarty_tpl->tpl_vars['pl'] = $foreach_pl_Sav;
}
?>
		      </table>
		</div>
	</div><!-- /row1 -->
</div>
<!-- /Bank Lists --> 

<?php echo $_smarty_tpl->getSubTemplate ('themes/default/providers/addproviders.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>