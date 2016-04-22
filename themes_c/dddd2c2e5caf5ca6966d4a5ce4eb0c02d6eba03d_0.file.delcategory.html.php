<?php /* Smarty version 3.1.27, created on 2016-04-22 13:38:15
         compiled from "/var/www/html/mutasyon/themes/default/category/delcategory.html" */ ?>
<?php
/*%%SmartyHeaderCode:11199106835719ff17491125_37536174%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dddd2c2e5caf5ca6966d4a5ce4eb0c02d6eba03d' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/category/delcategory.html',
      1 => 1456420601,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11199106835719ff17491125_37536174',
  'variables' => 
  array (
    'sub' => 0,
    '_delete_category' => 0,
    '_delete_category_message' => 0,
    '_delete' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5719ff174a23e3_28028815',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5719ff174a23e3_28028815')) {
function content_5719ff174a23e3_28028815 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '11199106835719ff17491125_37536174';
?>
<div class="collapse topwind" id="delcat-<?php echo $_smarty_tpl->tpl_vars['sub']->value['category_id'];?>
">
      <div class="panel panel-green" style="background:#fff;">
	      <button type="button" class="close delcatm" data-toggle="collapse" href="#delcat-<?php echo $_smarty_tpl->tpl_vars['sub']->value['category_id'];?>
" style="margin-right: 10px;margin-top: 8px;"><span aria-hidden="true">×</span></button>
	      <div class="panel-heading"><span style="color:#d9534f"><?php echo $_smarty_tpl->tpl_vars['sub']->value['subname'];?>
</span> <?php echo $_smarty_tpl->tpl_vars['_delete_category']->value;?>
</div>
	      <div class="panel-body pan">
		      <form class="reload" action="addcategory.php" method="POST">
			    <div class="form-body pal">
				    <div class="navbar">
					<span style="color:red"><?php echo $_smarty_tpl->tpl_vars['_delete_category_message']->value;?>
</span>
					<input type="hidden" name="delcatid" value="<?php echo $_smarty_tpl->tpl_vars['sub']->value['category_id'];?>
" />
					<button type="submit" class="btn btn-red margin-top"><?php echo $_smarty_tpl->tpl_vars['_delete']->value;?>
</button>
				    </div><!--/row-->
			    </div><!--/form-body-->
		      </form>
	      </div><!--/panel-body-->
      </div><!--/panel-->
</div><!--/topwind--> <?php }
}
?>