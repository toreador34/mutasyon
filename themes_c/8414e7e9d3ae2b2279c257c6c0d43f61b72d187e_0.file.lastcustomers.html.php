<?php /* Smarty version 3.1.27, created on 2016-04-04 20:49:18
         compiled from "/var/www/html/mcopy/themes/default/widget/lastcustomers.html" */ ?>
<?php
/*%%SmartyHeaderCode:16759480585702a91e94d7d8_72586376%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8414e7e9d3ae2b2279c257c6c0d43f61b72d187e' => 
    array (
      0 => '/var/www/html/mcopy/themes/default/widget/lastcustomers.html',
      1 => 1457984854,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16759480585702a91e94d7d8_72586376',
  'variables' => 
  array (
    '_customer_list' => 0,
    '_customer_name' => 0,
    '_tel' => 0,
    '_status' => 0,
    'customerlist' => 0,
    'cust' => 0,
    '_active' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5702a91e961ba0_00452504',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5702a91e961ba0_00452504')) {
function content_5702a91e961ba0_00452504 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16759480585702a91e94d7d8_72586376';
?>
<!-- Last customers -->
<div class="panel">
	<div class="portlet-header box border-bottom invoice-icon">
		    <span class="pull-right addevent" style="margin-right:10px;" data-toggle="collapse" href="#addcustomer"><i class="fa fa-plus-square"></i></span>
		    <i class="glyphicon glyphicon-user" style="font-size: 20px"></i>
		    <span class="invoice-header"><?php echo $_smarty_tpl->tpl_vars['_customer_list']->value;?>
</span>
	</div>
	<div class="last-customer-list customer" style="padding-left:15px;overflow-x:hidden">
	      <table class="table table-condensed">
                  <thead>
                  <tr>
                      <th><?php echo $_smarty_tpl->tpl_vars['_customer_name']->value;?>
</th>
                      <th><?php echo $_smarty_tpl->tpl_vars['_tel']->value;?>
</th>
                      <th><?php echo $_smarty_tpl->tpl_vars['_status']->value;?>
</th>                                          
                  </tr>
              </thead>   
              <tbody>
                <?php
$_from = $_smarty_tpl->tpl_vars['customerlist']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['cust'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['cust']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cust']->value) {
$_smarty_tpl->tpl_vars['cust']->_loop = true;
$foreach_cust_Sav = $_smarty_tpl->tpl_vars['cust'];
?>
                <tr>
                    <td><a href="custdetail.php?cid=<?php echo $_smarty_tpl->tpl_vars['cust']->value['cust_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cust']->value['cust_name'];?>
</a></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['cust']->value['cust_tel'];?>
</td>
                    <td><span class="label <?php if ($_smarty_tpl->tpl_vars['cust']->value['cust_status'] == 1) {?>label-success<?php } else { ?>label-danger<?php }?>"><?php if ($_smarty_tpl->tpl_vars['cust']->value['cust_status'] == 1) {
echo $_smarty_tpl->tpl_vars['_active']->value;
} else { ?>Pasif<?php }?></span>
                    </td> 
                </tr>  
                <?php
$_smarty_tpl->tpl_vars['cust'] = $foreach_cust_Sav;
}
?>
              </tbody>
            </table>  
	</div>
 </div>
<!-- /Last customers -->
<?php echo $_smarty_tpl->getSubTemplate ('themes/default/customer/addcustomer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>