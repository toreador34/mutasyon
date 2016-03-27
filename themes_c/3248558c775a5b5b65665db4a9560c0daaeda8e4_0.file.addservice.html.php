<?php /* Smarty version 3.1.27, created on 2016-03-27 19:01:31
         compiled from "/var/www/html/mutasyon/themes/default/addservice.html" */ ?>
<?php
/*%%SmartyHeaderCode:213931349156f803db8858a9_25351824%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3248558c775a5b5b65665db4a9560c0daaeda8e4' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/addservice.html',
      1 => 1459094371,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213931349156f803db8858a9_25351824',
  'variables' => 
  array (
    '_invoice' => 0,
    '_add_service' => 0,
    '_customer' => 0,
    '_addcustomer' => 0,
    'customer' => 0,
    'cst' => 0,
    '_providers' => 0,
    '_myself' => 0,
    'providers' => 0,
    'p' => 0,
    '_inf_providers' => 0,
    '_date' => 0,
    '_invoiceadj' => 0,
    'invoiceadj' => 0,
    'a' => 0,
    '_invoice_prefix' => 0,
    '_inf_invoice_prefix' => 0,
    '_desc' => 0,
    '_ok' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56f803db8e9638_78573611',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56f803db8e9638_78573611')) {
function content_56f803db8e9638_78573611 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/var/www/html/mutasyon/libs/plugins/modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '213931349156f803db8858a9_25351824';
echo $_smarty_tpl->getSubTemplate ('themes/default/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="container body-bg">
<!--Breadcrumb-->
  <ol class="breadcrumb hidden-print">
    <li><a href="index.php"><i class="fa fa-home" style="font-size: 20px;color:#000"></i></a></li>
    <li><a href="invoice.php"><?php echo $_smarty_tpl->tpl_vars['_invoice']->value;?>
</a></li>
    <li class="active"><?php echo $_smarty_tpl->tpl_vars['_add_service']->value;?>
</li>
  </ol>
<!--/Breadcrumb-->
	<form action="addservice.php" method="post" class="noload">
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
							    <select class="form-control chosen-select" name="customer">
								  <option value="empty"></option>
								  <?php
$_from = $_smarty_tpl->tpl_vars['customer']->value;
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
						<div class="col-sm-12">
						      <label class="margin-top"><?php echo $_smarty_tpl->tpl_vars['_providers']->value;?>
</label>
						      <div class="input-group input-group-sm providers">
							    <span class="input-group-addon" id="sizing-addon3"><a data-toggle="collapse" href="#addproviders" aria-expanded="false" title="<?php echo $_smarty_tpl->tpl_vars['_providers']->value;?>
"><i class="fa fa-plus"></i></a></span>
							    <select class="form-control" name="providers">
								      <option value="empty"></option>
								      <option value="myself"><?php echo $_smarty_tpl->tpl_vars['_myself']->value;?>
</option>
								      <?php
$_from = $_smarty_tpl->tpl_vars['providers']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
?>
									    <option value="<?php echo $_smarty_tpl->tpl_vars['p']->value['providers_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['providers_name'];?>
</option>
								      <?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?>
							    </select>
						      </div>
						      <!-- Infos -->
						      <div class="questions qpro" style="margin-left:252px;margin-top:-47px"><i class="fa fa-question-circle"></i></div>
							    <div class="col-xs-12 alert alert-info answer apro" style="display:none;margin-top:-32px;margin-left:5px">
							    <div class="col-sm-1">
								  <i class="glyphicon glyphicon-info-sign" style="font-size:40px;margin-left:-49px;margin-top:-13px;"></i>
							    </div>
							    <div class="col-sm-11 note-info">
								  <strong class="box-heading"><?php echo $_smarty_tpl->tpl_vars['_providers']->value;?>
</strong>
								  <p><?php echo $_smarty_tpl->tpl_vars['_inf_providers']->value;?>
</p>
							    </div>
						      </div>
						</div>
					</div><!--/row-->	  
				</div><!--/col-sm-3-->
				
				<div class="col-sm-3 col-sm-offset-6">
					<label><?php echo $_smarty_tpl->tpl_vars['_date']->value;?>
</label>
					<input type="date" class="form-control" name="date" value="<?php echo smarty_modifier_date_format(time(),'%Y-%m-%d');?>
">
					<label class="margin-top"><?php echo $_smarty_tpl->tpl_vars['_invoiceadj']->value;?>
</label>
					<div class="input-group input-group-sm invadj">
					      <span class="input-group-addon" id="sizing-addon3"><a data-toggle="collapse" href="#addadj" aria-expanded="false" title="<?php echo $_smarty_tpl->tpl_vars['_invoiceadj']->value;?>
"><i class="fa fa-plus"></i></a></span>
					      <select class="form-control" name="invadj">
							<option value="empty"></option>
							<?php
$_from = $_smarty_tpl->tpl_vars['invoiceadj']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['a'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['a']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
$foreach_a_Sav = $_smarty_tpl->tpl_vars['a'];
?>
							      <option value="<?php echo $_smarty_tpl->tpl_vars['a']->value['invoiceadj_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['a']->value['invoiceadj_name'];?>
</option>
							<?php
$_smarty_tpl->tpl_vars['a'] = $foreach_a_Sav;
}
?>
					      </select>
					</div>
					<div class="questions questanj" style="margin-left:252px;margin-top:-47px"><i class="fa fa-question-circle"></i></div>
					<div class="col-xs-12 alert alert-info answer ansanj" style="display:none;margin-top:-32px;margin-left:5px">
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
			</div><!--/row-->
			<div class="navbar">
				<label class="margin-top"><?php echo $_smarty_tpl->tpl_vars['_desc']->value;?>
</label>
				<textarea rows="4" class="form-control servicedesc" type="textarea" name="servicedesc"></textarea>
			</div>
			<button type="submit" class="pull-right btn btn-red margin-top"><?php echo $_smarty_tpl->tpl_vars['_ok']->value;?>
</button>
		</div><!--navbar-->
	</form>
</div><!--container body-bg-->
<?php echo $_smarty_tpl->getSubTemplate ('themes/default/customer/addcustomer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('themes/default/providers/addproviders.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('themes/default/invoiceadj/addadj.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('themes/default/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo '<script'; ?>
>
$(function(){

$(".chosen-select").chosen();

//end
});

$(document).on("click", ".questanj", function(){
    $(".ansanj").toggle();  
});
$(document).on("click", ".qpro", function(){
    $(".apro").toggle();  
});
<?php echo '</script'; ?>
>
<?php }
}
?>