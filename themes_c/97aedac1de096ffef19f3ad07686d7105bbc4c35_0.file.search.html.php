<?php /* Smarty version 3.1.27, created on 2016-04-04 20:49:18
         compiled from "/var/www/html/mcopy/themes/default/header/search.html" */ ?>
<?php
/*%%SmartyHeaderCode:6148995115702a91e86ccb3_91410114%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97aedac1de096ffef19f3ad07686d7105bbc4c35' => 
    array (
      0 => '/var/www/html/mcopy/themes/default/header/search.html',
      1 => 1456420611,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6148995115702a91e86ccb3_91410114',
  'variables' => 
  array (
    '_search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5702a91e86f147_98926621',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5702a91e86f147_98926621')) {
function content_5702a91e86f147_98926621 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '6148995115702a91e86ccb3_91410114';
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