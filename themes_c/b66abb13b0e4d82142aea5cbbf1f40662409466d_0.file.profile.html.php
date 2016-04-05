<?php /* Smarty version 3.1.27, created on 2016-03-31 17:47:32
         compiled from "/var/www/html/mutasyon/themes/default/admin/profile.html" */ ?>
<?php
/*%%SmartyHeaderCode:176318028756fd38846073d3_69782358%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b66abb13b0e4d82142aea5cbbf1f40662409466d' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/admin/profile.html',
      1 => 1457454180,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '176318028756fd38846073d3_69782358',
  'variables' => 
  array (
    'admin_name' => 0,
    '_old' => 0,
    'old' => 0,
    '_city' => 0,
    'admin_city' => 0,
    'countinv' => 0,
    '_invoice' => 0,
    'stock' => 0,
    's' => 0,
    '_stocks' => 0,
    '_user' => 0,
    '_settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56fd388461e250_90814321',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56fd388461e250_90814321')) {
function content_56fd388461e250_90814321 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '176318028756fd38846073d3_69782358';
?>
<div class="panel">
      <div class="panel-body">
	  <div class="profile">
	      <div style="margin-bottom: 15px" class="row">
		  <div class="col-xs-12 col-sm-4 text-center">
		      <figure>
			    <img src="img/1-user.jpg" onError="this.onerror=null;this.src='img/user.png';" alt="" style="display: inline-block" class="img-responsive img-circle">
			    <figcaption class="ratings">
				  <span id="rating">
					<p>
					      
					</p>
				  </span>
			    </figcaption>
		      </figure>
		  </div>
		  <div class="col-xs-12 col-sm-8" style="text-align:center">
		      <h2><?php echo $_smarty_tpl->tpl_vars['admin_name']->value;?>
</h2>
		      <strong><?php echo $_smarty_tpl->tpl_vars['_old']->value;?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['old']->value;?>

		      <strong><?php echo $_smarty_tpl->tpl_vars['_city']->value;?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['admin_city']->value;?>

		  </div>
	      </div>
	      <div class="row text-center divider">
		  <div class="col-xs-12 emphasis">
		      <div class="col-sm-6 col-xs-12">
			    <h2><strong><span class="totalinv"><?php echo $_smarty_tpl->tpl_vars['countinv']->value;?>
</span></strong></h2>
			    <small><?php echo $_smarty_tpl->tpl_vars['_invoice']->value;?>
</small>
		      </div>
		      <div class="col-sm-6 col-xs-12">
			    <h2><strong><?php
$_from = $_smarty_tpl->tpl_vars['stock']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['s'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['s']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
$foreach_s_Sav = $_smarty_tpl->tpl_vars['s'];
echo $_smarty_tpl->tpl_vars['s']->value['product'];?>
/<?php echo $_smarty_tpl->tpl_vars['s']->value['in_stock'];
$_smarty_tpl->tpl_vars['s'] = $foreach_s_Sav;
}
?></strong></h2>
			    <small><?php echo $_smarty_tpl->tpl_vars['_stocks']->value;?>
</small>
		      </div>
		  </div>
		  <div class="col-xs-12 margin-top">
		      <div class="col-sm-6 col-xs-12">
			    <a href="settings.php" class="btn btn-yellow btn-block">
				<span class="fa fa-user"></span>&nbsp; <?php echo $_smarty_tpl->tpl_vars['_user']->value;?>

			    </a>
		      </div>
		      <div class="col-sm-6 col-xs-12">
			    <a href="settings.php" class="btn btn-blue btn-block">
				<span class="fa fa-gear"></span>&nbsp; <?php echo $_smarty_tpl->tpl_vars['_settings']->value;?>

			    </a>
		      </div>
		  </div>
	      </div>
	  </div>
      </div>
</div> 
<?php }
}
?>