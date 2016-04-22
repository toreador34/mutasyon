<?php /* Smarty version 3.1.27, created on 2016-04-22 13:38:15
         compiled from "/var/www/html/mutasyon/themes/default/admin/addpicture.html" */ ?>
<?php
/*%%SmartyHeaderCode:15719713855719ff1734a9b2_74964463%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2dcd37be8dd1ab99e81453c2efe4121ab627d877' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/admin/addpicture.html',
      1 => 1456420601,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15719713855719ff1734a9b2_74964463',
  'variables' => 
  array (
    '_change_picture' => 0,
    '_choose_file' => 0,
    'admin_id' => 0,
    '_file_type' => 0,
    '_ok' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5719ff17371e32_79703144',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5719ff17371e32_79703144')) {
function content_5719ff17371e32_79703144 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '15719713855719ff1734a9b2_74964463';
?>
<!-- Modallar  -->
<div class="collapse topwind" id="addadminpicture">
      <div class="panel panel-green" style="background:#fff;">
	      <button type="button" class="close paymentm" data-toggle="collapse" href="#addadminpicture" style="margin-right: 10px;margin-top: 8px;"><span aria-hidden="true">×</span></button>
	      <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_change_picture']->value;?>
</div>
	      <div class="panel-body pan">
		      <form id="adminPicture" action="edit.php" method="POST" enctype="multipart/form-data">
			    <div class="form-body pal">
				    <div class="navbar">
					<label for="pic"><?php echo $_smarty_tpl->tpl_vars['_choose_file']->value;?>
</label>
					<input type="file" id="pic" name="admin_pic">
					<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['admin_id']->value;?>
" name="id">
					<p class="help-block">JPEG <?php echo $_smarty_tpl->tpl_vars['_file_type']->value;?>
</p>
					<button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_ok']->value;?>
</button>
				    </div><!--/row-->
			    </div><!--/form-body-->
		      </form>
	      </div><!--/panel-body-->
      </div><!--/panel-->
</div><!--/topwind--><?php }
}
?>