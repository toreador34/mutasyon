<?php /* Smarty version 3.1.27, created on 2016-04-03 16:29:09
         compiled from "/var/www/html/mutasyon/themes/default/category/addcategory.html" */ ?>
<?php
/*%%SmartyHeaderCode:181879672157011aa6018298_40211573%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e6400139391253c22a45f872cefabce6ba626d6' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/category/addcategory.html',
      1 => 1456420602,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181879672157011aa6018298_40211573',
  'variables' => 
  array (
    '_add_category' => 0,
    '_category_name' => 0,
    '_category_detail' => 0,
    '_main_category' => 0,
    'categories' => 0,
    'ss' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57011aa6023861_49013770',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57011aa6023861_49013770')) {
function content_57011aa6023861_49013770 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '181879672157011aa6018298_40211573';
?>
<div class="collapse topwind" id="addcategory">
      <div class="panel panel-green" style="background:#fff;">
	      <button type="button" class="close" data-toggle="collapse" href="#addcategory" style="margin-right: 10px;margin-top: 8px;"><span aria-hidden="true">×</span></button>
	      <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_add_category']->value;?>
</div>
	      <div class="panel-body pan">
		      <form action="addcategory.php" type="post" class="addcategoryform reload">
			    <div class="form-body pal">
				    <div class="row">
					  <!--       Add category collapse -->
					  <input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['_category_name']->value;?>
" name="catname" class="form-control" />
					  <input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['_category_detail']->value;?>
" name="catdetail" class="form-control margin-top" />
					  <select name="subcat" class="margin-top form-control">
						<option value="0"><?php echo $_smarty_tpl->tpl_vars['_main_category']->value;?>
</option>
						<?php
$_from = $_smarty_tpl->tpl_vars['categories']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ss'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ss']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ss']->value) {
$_smarty_tpl->tpl_vars['ss']->_loop = true;
$foreach_ss_Sav = $_smarty_tpl->tpl_vars['ss'];
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['ss']->value['category_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ss']->value['category_name'];?>
</option>
						<?php
$_smarty_tpl->tpl_vars['ss'] = $foreach_ss_Sav;
}
?>
					  </select>
					  <button type ="submit" class="btn btn-info btn-sm margin-top"><i class="glyphicon glyphicon-ok"></i><?php echo $_smarty_tpl->tpl_vars['_add_category']->value;?>
</button>
					  <!--       Add category collapse -->
				    </div><!--/row-->
			    </div><!--/form-body-->
		      </form>
	      </div><!--/panel-body-->
      </div><!--/panel-->
</div><!--/topwind-->
<?php }
}
?>