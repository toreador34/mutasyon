<?php /* Smarty version 3.1.27, created on 2016-04-20 22:08:01
         compiled from "/var/www/html/mutasyon/themes/default/footer.html" */ ?>
<?php
/*%%SmartyHeaderCode:9949772135717d391f3ec56_18917451%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e6df7f5b25fa2c933ded50730940e6da2f6523e' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/footer.html',
      1 => 1458501063,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9949772135717d391f3ec56_18917451',
  'variables' => 
  array (
    'js' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5717d39200ac66_01914048',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5717d39200ac66_01914048')) {
function content_5717d39200ac66_01914048 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '9949772135717d391f3ec56_18917451';
?>
<div class="work-inf alert alert-success display-none" style="position:fixed;bottom:0;z-index:9999"></div>
</body>
</html>
<div class="container footer hidden-print">
    <div class="nav">
		  <a href="http://www.gozdesm.com" target="_blank"><i class="fa fa-copyright"></i> Mutasyon Beta 1</a>
      </div>
</div>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
      <!--<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"><?php echo '</script'; ?>
>-->
      <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
/jquery.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
/jquery-ui.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
/bootstrap.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
/chosen.jquery.min.js"><?php echo '</script'; ?>
>      
      <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
/highcharts.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
/tinymce/tinymce.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
/filter.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
/style.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
/fileinput.min.js" type="text/javascript"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
/jquery.highlight-5.closure.js"><?php echo '</script'; ?>
>
      <style>.highlight { background-color: yellow }</style>
<style>
.footer_container {
  background-color: #fff;
  border-radius: 0 0 10px 10px;
}
</style>
<?php echo '<script'; ?>
>
$(function(){
//For active or deactive customer
$(".langchange").on("click", function(){
  var activelang = $(this).attr("alt");
  $.post("language.php", {
                        active: activelang,
                    }, function (e) {
                        $("div.work-inf").addClass("display-block");
			$("div.work-inf").html(e);
			setTimeout(function(){ location.reload(); }, 2000);
                    });
});

//Uyarı
$('.fa-search').on('click', function(event) {        
         jQuery('#topbar-search').submit();
    });

// End of function
});
<?php echo '</script'; ?>
><?php }
}
?>