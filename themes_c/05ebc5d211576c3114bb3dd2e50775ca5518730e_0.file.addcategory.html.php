<?php /* Smarty version 3.1.27, created on 2016-03-25 16:12:16
         compiled from "/var/www/html/mutasyon/themes/default/settings/addcategory.html" */ ?>
<?php
/*%%SmartyHeaderCode:146461650256f5474090ba06_98377246%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05ebc5d211576c3114bb3dd2e50775ca5518730e' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/settings/addcategory.html',
      1 => 1456420640,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '146461650256f5474090ba06_98377246',
  'variables' => 
  array (
    '_add_category' => 0,
    '_category_name' => 0,
    '_category_detail' => 0,
    '_main_category' => 0,
    'categories' => 0,
    'ct' => 0,
    '_all' => 0,
    'mng' => 0,
    '_detail' => 0,
    'subcategory' => 0,
    'sub' => 0,
    '_delete' => 0,
    '_edit' => 0,
    '_edit_category' => 0,
    '_close' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56f54740970775_66730187',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56f54740970775_66730187')) {
function content_56f54740970775_66730187 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '146461650256f5474090ba06_98377246';
?>
<div class="addcatleft col-sm-3"><!--Left Side -->
  <h4 class="headers" style=""><?php echo $_smarty_tpl->tpl_vars['_add_category']->value;?>
</h4>
  <form action="addcategory.php" type="post" class="addcategoryform noload">
      <input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['_category_name']->value;?>
" name="catname" class="form-control" />
      <input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['_category_detail']->value;?>
" name="catdetail" class="form-control margin-top" />
      <div class="rfcatl">
      <select name="subcat" class="margin-top form-control">
	<option value="0"><?php echo $_smarty_tpl->tpl_vars['_main_category']->value;?>
</option>
	<?php
$_from = $_smarty_tpl->tpl_vars['categories']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ct'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ct']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ct']->value) {
$_smarty_tpl->tpl_vars['ct']->_loop = true;
$foreach_ct_Sav = $_smarty_tpl->tpl_vars['ct'];
?>
	    <option value="<?php echo $_smarty_tpl->tpl_vars['ct']->value['category_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ct']->value['category_name'];?>
</option>
	<?php
$_smarty_tpl->tpl_vars['ct'] = $foreach_ct_Sav;
}
?>
      </select>
      </div>
      <button type ="submit" class="btn btn-info btn-sm margin-top"><i class="glyphicon glyphicon-ok"></i><?php echo $_smarty_tpl->tpl_vars['_add_category']->value;?>
</button>
  </form>
</div><!--/Left Side -->
<div class="addcatright col-sm-9"><!--Right Side-->
    	<div class="row">
	      <div class="well panel panel-default">
			<h4 class="panel-heading headers">Kategoriler</h4>
			<select id="catlist" name="catlist" class="margin-top form-control">
			  <option value="all"><?php echo $_smarty_tpl->tpl_vars['_all']->value;?>
</option>
			  <?php
$_from = $_smarty_tpl->tpl_vars['categories']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['mng'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['mng']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['mng']->value) {
$_smarty_tpl->tpl_vars['mng']->_loop = true;
$foreach_mng_Sav = $_smarty_tpl->tpl_vars['mng'];
?>
			      <option value="<?php echo $_smarty_tpl->tpl_vars['mng']->value['category_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['mng']->value['category_name'];?>
</option>
			  <?php
$_smarty_tpl->tpl_vars['mng'] = $foreach_mng_Sav;
}
?>
			</select>
			<div class="rfcat">
				<table class="table table-hover" id="dev-table">
					<thead>
					  <tr>
						  <th>#</th>
						  <th><?php echo $_smarty_tpl->tpl_vars['_category_name']->value;?>
</th>
						  <th><?php echo $_smarty_tpl->tpl_vars['_detail']->value;?>
</th>
					  </tr>
					</thead>
					<tbody id="list">
					  <?php
$_from = $_smarty_tpl->tpl_vars['subcategory']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['sub'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['sub']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['sub']->value) {
$_smarty_tpl->tpl_vars['sub']->_loop = true;
$foreach_sub_Sav = $_smarty_tpl->tpl_vars['sub'];
?>
					    <tr>
						  <td><?php echo $_smarty_tpl->tpl_vars['sub']->value['category_id'];?>
</td>
						  <td><span><?php if ($_smarty_tpl->tpl_vars['sub']->value['category_sub'] > 0) {
echo $_smarty_tpl->tpl_vars['sub']->value['mainname'];?>
 >><?php } else {
}?></span> <?php echo $_smarty_tpl->tpl_vars['sub']->value['subname'];?>
</td>
						  <td>
						    <button class="btn btn-danger btn-xs" data-toggle="collapse" data-target="#delcat-<?php echo $_smarty_tpl->tpl_vars['sub']->value['category_id'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['sub']->value['category_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_delete']->value;?>
</button>
						    <button class="btn btn-info btn-xs" data-toggle="modal" data-target="#editcat-<?php echo $_smarty_tpl->tpl_vars['sub']->value['category_id'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['sub']->value['category_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_edit']->value;?>
</button>
						  </td>
					    </tr>
					  <!-- Category Delete Modal -->
					      <?php echo $_smarty_tpl->getSubTemplate ('themes/default/category/delcategory.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

					  <!-- Modal --> 
					  <!-- Category Edit Modal -->
					      <div class="modal fade" id="editcat-<?php echo $_smarty_tpl->tpl_vars['sub']->value['category_id'];?>
" tabindex="-1" role="dialog" aria-labelledby="editcategory">
						<div class="modal-dialog" role="document">
						  <div class="modal-content">
						    <div class="modal-header">
						      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						      <h4 class="modal-title"><span style="color:#d9534f"><?php echo $_smarty_tpl->tpl_vars['sub']->value['category_name'];?>
</span> <?php echo $_smarty_tpl->tpl_vars['_edit_category']->value;?>
</h4>
						    </div>
						    <div class="modal-body">
						      <form  class="editcatform reload" action="addcategory.php" method="POST">
							<label><?php echo $_smarty_tpl->tpl_vars['_category_name']->value;?>
</label>
							<input type="text" name="editcatname" value="<?php echo $_smarty_tpl->tpl_vars['sub']->value['category_name'];?>
" class="form-control" />
							<select name="editcatlist" class="margin-top form-control">
							  <option value="0"><?php echo $_smarty_tpl->tpl_vars['_main_category']->value;?>
</option>
							  <?php
$_from = $_smarty_tpl->tpl_vars['categories']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['mng'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['mng']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['mng']->value) {
$_smarty_tpl->tpl_vars['mng']->_loop = true;
$foreach_mng_Sav = $_smarty_tpl->tpl_vars['mng'];
?>
							      <option value="<?php echo $_smarty_tpl->tpl_vars['mng']->value['category_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['sub']->value['category_sub'] == $_smarty_tpl->tpl_vars['mng']->value['category_id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['mng']->value['category_name'];?>
</option>
							  <?php
$_smarty_tpl->tpl_vars['mng'] = $foreach_mng_Sav;
}
?>
							</select>
							<input type="hidden" name="editcatid" value="<?php echo $_smarty_tpl->tpl_vars['sub']->value['category_id'];?>
" />
						      </div>
						      <div class="modal-footer" style="position: relative;">
							<button type="submit" class="btn" style="position: absolute;left:10px"><?php echo $_smarty_tpl->tpl_vars['_edit']->value;?>
</button>
							<button type="button" class="btn btn-primary" id="close" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['_close']->value;?>
</button>
						      </form>
						    </div>
						  </div>
						</div>
					      </div>
					  <!-- Modal --> 
					  <?php
$_smarty_tpl->tpl_vars['sub'] = $foreach_sub_Sav;
}
?>
					  <tr id="sonuc">
					  </tr>
					</tbody>
				</table>
			</div>
	      </div>
	</div>
</div><!--/Right Side --><?php }
}
?>