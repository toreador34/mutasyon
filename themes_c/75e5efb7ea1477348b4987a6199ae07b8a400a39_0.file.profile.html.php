<?php /* Smarty version 3.1.27, created on 2016-04-22 13:38:15
         compiled from "/var/www/html/mutasyon/themes/default/settings/profile.html" */ ?>
<?php
/*%%SmartyHeaderCode:8638104265719ff1730aec2_18602921%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75e5efb7ea1477348b4987a6199ae07b8a400a39' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/settings/profile.html',
      1 => 1457454232,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8638104265719ff1730aec2_18602921',
  'variables' => 
  array (
    'admin_username' => 0,
    '_name_surname' => 0,
    'admin_name' => 0,
    '_email' => 0,
    'admin_email' => 0,
    '_city' => 0,
    'admin_city' => 0,
    '_old' => 0,
    'admin_old' => 0,
    '_inf_edit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5719ff173432f4_28157680',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5719ff173432f4_28157680')) {
function content_5719ff173432f4_28157680 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8638104265719ff1730aec2_18602921';
?>
<!-- Profile Start -->
<div class="col-xs-12" style="margin-top:-50px">
<div class="col-sm-3 col-xs-12">
      <a data-toggle="collapse" href="#addadminpicture" aria-expanded="false"><img src="img/1-user.jpg" onError="this.onerror=null;this.src='img/user.png';" style="width:200px;border: 3px solid #ddd;" /></a>

</div><!-- /col-sm-3 col-xs-9-->
<div class="col-sm-8 col-sm-offset-1 col-xs-12">
      <h3><?php echo $_smarty_tpl->tpl_vars['admin_username']->value;?>
</h3>
      <h6><span class="admin-span"><?php echo $_smarty_tpl->tpl_vars['_name_surname']->value;?>
</span><?php echo $_smarty_tpl->tpl_vars['admin_name']->value;?>
</h6>
      <h6><span class="admin-span"><?php echo $_smarty_tpl->tpl_vars['_email']->value;?>
</span><?php echo $_smarty_tpl->tpl_vars['admin_email']->value;?>
</h6>
      <h6><span class="admin-span"><?php echo $_smarty_tpl->tpl_vars['_city']->value;?>
</span> <?php echo $_smarty_tpl->tpl_vars['admin_city']->value;?>
</h6>
      <h6><span class="admin-span"><?php echo $_smarty_tpl->tpl_vars['_old']->value;?>
</span><?php echo $_smarty_tpl->tpl_vars['admin_old']->value;?>
</h6>
      <a class="btn btn-blue" data-toggle="collapse" href="#adminInf" aria-expanded="false"><?php echo $_smarty_tpl->tpl_vars['_inf_edit']->value;?>
</a> 
</div><!-- /col-sm-5 col-xs-9-->
</div>
<!-- Profile Finish -->
<?php echo $_smarty_tpl->getSubTemplate ('themes/default/admin/addpicture.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('themes/default/admin/editinf.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>