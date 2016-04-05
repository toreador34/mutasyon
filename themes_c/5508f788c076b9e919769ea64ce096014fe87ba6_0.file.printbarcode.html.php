<?php /* Smarty version 3.1.27, created on 2016-04-04 20:52:01
         compiled from "/var/www/html/mcopy/themes/default/stock/printbarcode.html" */ ?>
<?php
/*%%SmartyHeaderCode:10582731085702a9c1c7f4d6_23115045%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5508f788c076b9e919769ea64ce096014fe87ba6' => 
    array (
      0 => '/var/www/html/mcopy/themes/default/stock/printbarcode.html',
      1 => 1457295325,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10582731085702a9c1c7f4d6_23115045',
  'variables' => 
  array (
    '_print_barcode' => 0,
    '_stock_name' => 0,
    's' => 0,
    '_price' => 0,
    '_currency' => 0,
    '_print' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5702a9c1c8dd66_88367737',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5702a9c1c8dd66_88367737')) {
function content_5702a9c1c8dd66_88367737 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10582731085702a9c1c7f4d6_23115045';
?>
<!--Print stock no-->
<div class="collapse" id="printsn">
      <div class="topwind">
	    <div class="alert" style="overflow:hidden">
		  <button type="button" class="close hidden-print" data-toggle="collapse" href="#printsn"><span aria-hidden="true">x</span></button>
		  <h4 class="hidden-print"><?php echo $_smarty_tpl->tpl_vars['_print_barcode']->value;?>
</h4>
		  <div class="prsnbody">
			<table class="table">
				<tbody>
					<tr>
					      <th><?php echo $_smarty_tpl->tpl_vars['_stock_name']->value;?>
</th>
					      <td><?php echo $_smarty_tpl->tpl_vars['s']->value['stock_name'];?>
</td>
					</tr>
					<tr>
					      <th><?php echo $_smarty_tpl->tpl_vars['_price']->value;?>
</th>
					      <td><?php echo $_smarty_tpl->tpl_vars['_currency']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['s']->value['stock_price_out'];?>
</td>
					</tr>
				</tbody>
			</table>
			<img class="margin-top" alt="<?php echo $_smarty_tpl->tpl_vars['s']->value['stock_no'];?>
" src="configs/barcode.php?size=70&text=<?php echo $_smarty_tpl->tpl_vars['s']->value['stock_no'];?>
" /><br />
			<span id="barcode1"><?php echo $_smarty_tpl->tpl_vars['s']->value['stock_name'];?>
</span>
		  </div>
		  <div class="margin-top hidden-print">
		      <button class="btn btn-default printMe"><i class="fa fa-print"></i> <?php echo $_smarty_tpl->tpl_vars['_print']->value;?>
</button>
		  </div>
	    </div>
      </div><!--topwind-->
</div>
<!--/Print stock no--> 
<?php }
}
?>