<?php /* Smarty version 3.1.27, created on 2016-04-22 13:38:15
         compiled from "/var/www/html/mutasyon/themes/default/settings/editcompany.html" */ ?>
<?php
/*%%SmartyHeaderCode:1613314405719ff17633973_44762734%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82a5f48fb68597bef7c42a838af9286581e5c0c6' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/settings/editcompany.html',
      1 => 1456420639,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1613314405719ff17633973_44762734',
  'variables' => 
  array (
    'company' => 0,
    'c' => 0,
    '_name' => 0,
    '_address' => 0,
    '_web' => 0,
    '_email' => 0,
    '_tel' => 0,
    '_ok' => 0,
    '_edit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5719ff17663f95_05075610',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5719ff17663f95_05075610')) {
function content_5719ff17663f95_05075610 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1613314405719ff17633973_44762734';
$_from = $_smarty_tpl->tpl_vars['company']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['c'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['c']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
$foreach_c_Sav = $_smarty_tpl->tpl_vars['c'];
?>
<?php if ($_smarty_tpl->tpl_vars['c']->value['company_total'] == 0) {?>
<div class="row" style="margin-top: -35px;">
<button class="btn btn-primary" data-toggle="collapse" href="#addcompany" aria-expanded="false" aria-controls="custInf">Şirket Bilgisi Ekle</button>
    <div class="collapse" id="addcompany" style="position:relative">
      <form  class="reload" action="editcompany.php" method="POST">
	  <div class="form-group margin-top">
	    <label class="col-sm-3 control-label" for="textinput"><?php echo $_smarty_tpl->tpl_vars['_name']->value;?>
</label>
	    <div class="col-sm-9">
	      <input type="text" placeholder="Şirket Adı" class="form-control" name="companyname">
	    </div>
	  </div>

	  <!-- Text input-->
	  <div class="form-group">
	    <label class="col-sm-3 control-label" for="textinput"><?php echo $_smarty_tpl->tpl_vars['_address']->value;?>
</label>
	    <div class="col-sm-9">
	      <input type="text" placeholder="Adres" class="form-control" name="companyaddress">
	    </div>
	  </div>
	  
	    <!-- Text input-->
	  <div class="form-group">
	    <label class="col-sm-3 control-label" for="textinput"><?php echo $_smarty_tpl->tpl_vars['_web']->value;?>
</label>
	    <div class="col-sm-9">
	      <input type="text" placeholder="Web Adresi" class="form-control" name="companyweb">
	    </div>
	  </div>

	  <!-- Text input-->
	  <div class="form-group">
	    <label class="col-sm-3 control-label" for="textinput"><?php echo $_smarty_tpl->tpl_vars['_email']->value;?>
</label>
	    <div class="col-sm-9">
	      <input type="text" placeholder="E-Posta" class="form-control" name="companymail">
	    </div>
	  </div>
	  
	  <!-- Text input-->
	  <div class="form-group">
	    <label class="col-sm-3 control-label" for="textinput"><?php echo $_smarty_tpl->tpl_vars['_tel']->value;?>
</label>
	    <div class="col-sm-9">
	      <input type="text" placeholder="Telefon" class="form-control" name="companytel">
	    </div>
	  </div>
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <div class="pull-right">
		<button type="submit" class="btn btn-info margin-top"><?php echo $_smarty_tpl->tpl_vars['_ok']->value;?>
</button>
	      </div>
	    </div>
	  </div>
      </form>
    </div>
</div>
<?php } else { ?>
<div class="row margin-top">
				<form  class="reload" action="editcompany.php" method="POST">
				      <!-- Text input-->
				      <span class="alert-info col-sm-offset-4">Bilgileri değiştirmek için kutucuklardaki bilgileri düzelttikten sonra "Düzenle" butonuna basınız.</span>
				      <div class="form-group margin-top">
					<label class="col-sm-3 control-label" for="textinput"><?php echo $_smarty_tpl->tpl_vars['_name']->value;?>
</label>
					<div class="col-sm-9">
					  <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['c']->value['company_name'];?>
" class="form-control" name="company_name">
					  <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['c']->value['company_id'];?>
" class="form-control" name="companyid">
					</div>
				      </div>

				      <!-- Text input-->
				      <div class="form-group">
					<label class="col-sm-3 control-label" for="textinput"><?php echo $_smarty_tpl->tpl_vars['_address']->value;?>
</label>
					<div class="col-sm-9">
					  <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['c']->value['company_address'];?>
" class="form-control" name="company_address">
					</div>
				      </div>
				      
				       <!-- Text input-->
				      <div class="form-group">
					<label class="col-sm-3 control-label" for="textinput"><?php echo $_smarty_tpl->tpl_vars['_web']->value;?>
</label>
					<div class="col-sm-9">
					  <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['c']->value['company_web'];?>
" class="form-control" name="company_web">
					</div>
				      </div>

				      <!-- Text input-->
				      <div class="form-group">
					<label class="col-sm-3 control-label" for="textinput"><?php echo $_smarty_tpl->tpl_vars['_email']->value;?>
</label>
					<div class="col-sm-9">
					  <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['c']->value['company_mail'];?>
" class="form-control" name="company_mail">
					</div>
				      </div>
				      
				      <!-- Text input-->
				      <div class="form-group">
					<label class="col-sm-3 control-label" for="textinput"><?php echo $_smarty_tpl->tpl_vars['_tel']->value;?>
</label>
					<div class="col-sm-9">
					  <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['c']->value['company_tel'];?>
" class="form-control" name="company_tel">
					</div>
				      </div>
				      <div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
					  <div class="pull-right">
					    <button type="submit" class="btn btn-info margin-top"><?php echo $_smarty_tpl->tpl_vars['_edit']->value;?>
</button>
				          </div>
				        </div>
				      </div>
				</form>
<?php }?>				      
<?php
$_smarty_tpl->tpl_vars['c'] = $foreach_c_Sav;
}
?> 
</div><?php }
}
?>