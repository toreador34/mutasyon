<?php /* Smarty version 3.1.27, created on 2016-03-08 17:36:53
         compiled from "/var/www/html/mutasyonc/install/themes/default/footer.html" */ ?>
<?php
/*%%SmartyHeaderCode:99669574156def195983f63_62322581%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5687e309ad64605d62f14770bdfaa0fd676c0e9' => 
    array (
      0 => '/var/www/html/mutasyonc/install/themes/default/footer.html',
      1 => 1454827828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '99669574156def195983f63_62322581',
  'variables' => 
  array (
    'js' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56def195989a94_17970899',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56def195989a94_17970899')) {
function content_56def195989a94_17970899 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '99669574156def195983f63_62322581';
?>
<div class="work-inf alert alert-success display-none" style="position:fixed;bottom:0;z-index:9999"></div>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
/bootstrap.min.js"><?php echo '</script'; ?>
>   
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
/style.js"><?php echo '</script'; ?>
>
<?php }
}
?>