<?php /* Smarty version 3.1.27, created on 2016-04-04 20:49:18
         compiled from "/var/www/html/mcopy/themes/default/header.html" */ ?>
<?php
/*%%SmartyHeaderCode:13709587315702a91e812608_21880693%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2bdde15f1ddb11ad3c04a656611543aaccc134d' => 
    array (
      0 => '/var/www/html/mcopy/themes/default/header.html',
      1 => 1457454246,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13709587315702a91e812608_21880693',
  'variables' => 
  array (
    'css' => 0,
    'page_name' => 0,
    'screen' => 0,
    'main_img' => 0,
    'admin_name' => 0,
    '_settings' => 0,
    '_logout' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5702a91e8361b0_29789468',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5702a91e8361b0_29789468')) {
function content_5702a91e8361b0_29789468 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '13709587315702a91e812608_21880693';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Mutasyon</title>

    <!-- Bootstrap -->
   <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
/fileinput.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
/chosen.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
/style.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
/main.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
/jqx.base.css">
    <?php if ($_smarty_tpl->tpl_vars['page_name']->value == 'settings') {?>
      <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
/settings.css">
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['page_name']->value == 'stock') {?>
      <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
/menu.css">
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['screen']->value == 'phone') {?>
      <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
/mobile.css">
    <?php }?>
  </head>
  <body>
<!--   Top Menu -->
    <div class="container top_container hidden-print">
    <div class="nav"><!-- Row Start -->
	 <div class="col-md-1 col-sm-6 padding">
		<?php if ($_smarty_tpl->tpl_vars['screen']->value == 'computer') {?>
		      <a href="index.php"><img src="<?php echo $_smarty_tpl->tpl_vars['main_img']->value;?>
/logo1.png" style="margin-top: -15px;" /></a>
		<?php }?>
	</div>
	 <div class="col-md-6 col-sm-6 headmenu">
		<?php echo $_smarty_tpl->getSubTemplate ('themes/default/header/topmenu.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	 </div>
	 <?php if ($_smarty_tpl->tpl_vars['screen']->value == 'computer') {?>
		<div class="col-md-3 hidden-sm hidden-xs padding">
			  <div class="col-lg-12">
				  <?php echo $_smarty_tpl->getSubTemplate ('themes/default/header/search.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

			  </div>
		</div>
		<div class="col-md-2 hidden-sm hidden-xs padding">
			<div class="col-md-4"><img class="user-img" src="img/1-user.jpg" onError="this.onerror=null;this.src='img/user.png';" /></div>
			<div class="col-md-8">
				<div class="dropdown user-name">
					<button class="btn btn-link dropdown-toggle" type="button" id="settingmenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><?php echo $_smarty_tpl->tpl_vars['admin_name']->value;?>
<span class="caret"></span></button>
					<ul class="dropdown-menu" aria-labelledby="settingmenu">
						<li><a href="settings.php"><?php echo $_smarty_tpl->tpl_vars['_settings']->value;?>
</a></li>
						<li><a href="logout.php"><?php echo $_smarty_tpl->tpl_vars['_logout']->value;?>
</a></li>
					</ul>
				</div>
			</div>
		</div>
	 <?php }?>
     </div><!-- Row Finish -->
    </div>
    <div  <?php if ($_smarty_tpl->tpl_vars['screen']->value == 'phone') {?>style="margin-top:50px"<?php }?>></div><?php }
}
?>