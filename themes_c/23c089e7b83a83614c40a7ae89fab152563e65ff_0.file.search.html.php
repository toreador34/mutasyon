<?php /* Smarty version 3.1.27, created on 2016-03-25 14:47:14
         compiled from "/var/www/html/mutasyon/themes/default/header/search.html" */ ?>
<?php
/*%%SmartyHeaderCode:27754983256f533524ecda1_74385321%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23c089e7b83a83614c40a7ae89fab152563e65ff' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/header/search.html',
      1 => 1456420611,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27754983256f533524ecda1_74385321',
  'variables' => 
  array (
    '_search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56f533524f1287_47902949',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56f533524f1287_47902949')) {
function content_56f533524f1287_47902949 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '27754983256f533524ecda1_74385321';
?>
<form id="topbar-search" action="search.php" method="POST" class="hidden-sm" style="margin-top:-5px;">
         <div class="input-icon right text-white">
	      <i class="fa fa-search" style="cursor: pointer;"></i><input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['_search']->value;?>
" class="form-control text-black" name="topsearch">
         </div>
</form> 
<?php }
}
?>