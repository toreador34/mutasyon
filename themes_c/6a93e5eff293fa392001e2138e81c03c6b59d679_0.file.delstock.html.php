<?php /* Smarty version 3.1.27, created on 2016-03-26 13:50:34
         compiled from "/var/www/html/mutasyon/themes/default/stock/delstock.html" */ ?>
<?php
/*%%SmartyHeaderCode:47114670556f6778a2e4d23_30397730%%*/
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
  'nocache_hash' => '47114670556f6778a2e4d23_30397730',
  'variables' => 
  array (
    's' => 0,
    '_inf_stock_del' => 0,
    '_delete' => 0,
    '_close' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56f6778a2eb5a5_01568101',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56f6778a2eb5a5_01568101')) {
function content_56f6778a2eb5a5_01568101 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '47114670556f6778a2e4d23_30397730';
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