<?php /* Smarty version 3.1.27, created on 2016-04-20 22:08:01
         compiled from "/var/www/html/mutasyon/themes/default/header/topmenu.html" */ ?>
<?php
/*%%SmartyHeaderCode:19853301395717d391e306a1_44415301%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '552f5f391216c66604be223301116cece38e1de8' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/header/topmenu.html',
      1 => 1456838922,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19853301395717d391e306a1_44415301',
  'variables' => 
  array (
    'screen' => 0,
    '_home_page' => 0,
    '_invoice' => 0,
    '_add_sales_invoice' => 0,
    '_add_service' => 0,
    '_sales_invoices' => 0,
    '_add_buy_invoices' => 0,
    '_buy_invoices' => 0,
    '_sales_list_payment' => 0,
    '_customer' => 0,
    '_customer_list' => 0,
    '_addcustomer' => 0,
    '_stocks' => 0,
    '_stock_list' => 0,
    '_add_stock' => 0,
    'admin_name' => 0,
    '_settings' => 0,
    '_logout' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5717d391e5aa69_92613301',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5717d391e5aa69_92613301')) {
function content_5717d391e5aa69_92613301 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '19853301395717d391e306a1_44415301';
if ($_smarty_tpl->tpl_vars['screen']->value == 'computer' || $_smarty_tpl->tpl_vars['screen']->value == 'tablet') {?>
<ul class="nav navbar-nav hidden-xs">
	<li class="active"><a href="index.php"><i class="fa fa-home"></i> <?php echo $_smarty_tpl->tpl_vars['_home_page']->value;?>
</a></li>
	<li>
	    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-file-text"></i> <?php echo $_smarty_tpl->tpl_vars['_invoice']->value;?>
 <b class="caret"></b></a>
	    <ul class="dropdown-menu multi-level">
		    
		    <li class="divider"></li>
		    <li><a href="addinvoice.php"><i class="fa fa-cart-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_add_sales_invoice']->value;?>
</a></li>
		    <li><a href="addservice.php"><i class="fa fa-cog"></i> <?php echo $_smarty_tpl->tpl_vars['_add_service']->value;?>
</a></li>
		    <li><a href="invoice.php"><i class="fa fa-shopping-cart"></i> <?php echo $_smarty_tpl->tpl_vars['_sales_invoices']->value;?>
</a></li>		    
		    
		    <li class="divider"></li>
		    <li><a href="addbuyinvoice.php"><i class="fa fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_add_buy_invoices']->value;?>
</a></li>
		    <li><a href="buyinvoice.php"><i class="fa fa-plus-square-o"></i> <?php echo $_smarty_tpl->tpl_vars['_buy_invoices']->value;?>
</a></li>
		    
		    <li class="divider"></li>
		    <li><a href="payments.php"><i class="fa fa-money"></i> <?php echo $_smarty_tpl->tpl_vars['_sales_list_payment']->value;?>
</a></li>
	    </ul>
	</li>
	<li>
	    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users"></i> <?php echo $_smarty_tpl->tpl_vars['_customer']->value;?>
 <b class="caret"></b></a>
	    <ul class="dropdown-menu">
		<li role="separator" class="divider"></li>
		<li><a href="customer.php"><i class="fa fa-users"></i> <?php echo $_smarty_tpl->tpl_vars['_customer_list']->value;?>
</a></li>
		<li><a href="addcustomer.php"><i class="fa fa-user-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_addcustomer']->value;?>
</a></li>
	    </ul>
	</li>
	<li>
	    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-shopping-cart"></i> <?php echo $_smarty_tpl->tpl_vars['_stocks']->value;?>
 <b class="caret"></b></a>
	    <ul class="dropdown-menu">
		<li role="separator" class="divider"></li>
		<li><a href="stock.php"><i class="fa fa-shopping-cart"></i> <?php echo $_smarty_tpl->tpl_vars['_stock_list']->value;?>
</a></li>
		<li><a href="addproduct.php"><i class="fa fa-cart-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_add_stock']->value;?>
</a></li>
	    </ul>
	</li>
</ul>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['screen']->value == 'phone') {?>
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <li><a href="index.php"><i class="fa fa-home" style="font-size:28px;margin-top:15px;color:#bf4346"></i></a></li>
        </div>
        <div class="collapse navbar-collapse">
		<ul class="nav navbar-nav">
		<li class="active"><a href="index.php"><i class="fa fa-home"></i> <?php echo $_smarty_tpl->tpl_vars['_home_page']->value;?>
</a></li>
		<li>
		    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-file-text"></i> <?php echo $_smarty_tpl->tpl_vars['_invoice']->value;?>
 <b class="caret"></b></a>
		    <ul class="dropdown-menu multi-level">
			    <li class="divider"></li>
			    <li><a href="addinvoice.php"><i class="fa fa-cart-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_add_sales_invoice']->value;?>
</a></li>
			    <li><a href="addservice.php"><i class="fa fa-cog"></i> <?php echo $_smarty_tpl->tpl_vars['_add_service']->value;?>
</a></li>
			    <li><a href="invoice.php"><i class="fa fa-shopping-cart"></i> <?php echo $_smarty_tpl->tpl_vars['_sales_invoices']->value;?>
</a></li>		    
			    
			    <li class="divider"></li>
			    <li><a href="addbuyinvoice.php"><i class="fa fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_add_buy_invoices']->value;?>
</a></li>
			    <li><a href="buyinvoice.php"><i class="fa fa-plus-square-o"></i> <?php echo $_smarty_tpl->tpl_vars['_buy_invoices']->value;?>
</a></li>
			    
			    <li class="divider"></li>
			    <li><a href="payments.php"><i class="fa fa-money"></i> <?php echo $_smarty_tpl->tpl_vars['_sales_list_payment']->value;?>
</a></li>
		    </ul>
		</li>
		<li>
		    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users"></i> <?php echo $_smarty_tpl->tpl_vars['_customer']->value;?>
 <b class="caret"></b></a>
		    <ul class="dropdown-menu">
			<li role="separator" class="divider"></li>
			<li><a href="customer.php"><i class="fa fa-users"></i> <?php echo $_smarty_tpl->tpl_vars['_customer_list']->value;?>
</a></li>
			<li><a href="addcustomer.php"><i class="fa fa-user-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_addcustomer']->value;?>
</a></li>
		    </ul>
		</li>
		<li>
		    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-shopping-cart"></i> <?php echo $_smarty_tpl->tpl_vars['_stocks']->value;?>
 <b class="caret"></b></a>
		    <ul class="dropdown-menu">
			<li role="separator" class="divider"></li>
			<li><a href="stock.php"><i class="fa fa-shopping-cart"></i> <?php echo $_smarty_tpl->tpl_vars['_stock_list']->value;?>
</a></li>
			<li><a href="addproduct.php"><i class="fa fa-cart-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_add_stock']->value;?>
</a></li>
		    </ul>
		</li>
		<li>
		    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-lock"></i> <?php echo $_smarty_tpl->tpl_vars['admin_name']->value;?>
 <b class="caret"></b></a>
		    <ul class="dropdown-menu" aria-labelledby="settingmenu">
			    <li><a href="settings.php"><i class="fa fa-cog"></i> <?php echo $_smarty_tpl->tpl_vars['_settings']->value;?>
</a></li>
			    <li><a href="logout.php"><i class="fa fa-sign-out"></i> <?php echo $_smarty_tpl->tpl_vars['_logout']->value;?>
</a></li>
		    </ul>
		</li>
		<li>
		    <?php echo $_smarty_tpl->getSubTemplate ('themes/default/header/search.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		</li>
	</ul>
        </div><!--/.nav-collapse -->
</div>
<?php }

}
}
?>