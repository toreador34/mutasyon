<?php /* Smarty version 3.1.27, created on 2016-04-03 16:29:51
         compiled from "/var/www/html/mutasyon/themes/default/stock/delstock.html" */ ?>
<?php
/*%%SmartyHeaderCode:114700137757011acf5b3da7_89422263%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a93e5eff293fa392001e2138e81c03c6b59d679' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/stock/delstock.html',
      1 => 1456420640,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114700137757011acf5b3da7_89422263',
  'variables' => 
  array (
    's' => 0,
    '_inf_stock_del' => 0,
    '_delete' => 0,
    '_close' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57011acf5bb283_57056036',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57011acf5bb283_57056036')) {
function content_57011acf5bb283_57056036 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '114700137757011acf5b3da7_89422263';
?>
<div class="collapse" id="delproduct">
	<form action="delproduct.php" method="post" class="delproductform">
	  <div class="topwind">
	    <div class="alert alert-danger">
	      <div class="alert-danger alert">
		<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['s']->value['stock_id'];?>
" name="product-id">
		<span><?php echo $_smarty_tpl->tpl_vars['s']->value['stock_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['_inf_stock_del']->value;?>
</span>
	      </div>
	      <div class="margin-top">
		<button type="submit" class="btn btn-danger"><?php echo $_smarty_tpl->tpl_vars['_delete']->value;?>
</button>
		<button type="button" class="btn btn-success pull-right" data-toggle="collapse" href="#delproduct"><?php echo $_smarty_tpl->tpl_vars['_close']->value;?>
</button>
	      </div>
	    </div>
	  </div><!--topwind-->
	</form>
</div> 
<?php }
}
?>