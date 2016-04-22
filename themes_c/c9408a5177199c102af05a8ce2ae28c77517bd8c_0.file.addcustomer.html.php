<?php /* Smarty version 3.1.27, created on 2016-04-22 13:38:07
         compiled from "/var/www/html/mutasyon/themes/default/addcustomer.html" */ ?>
<?php
/*%%SmartyHeaderCode:12774950045719ff0f887248_81439257%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9408a5177199c102af05a8ce2ae28c77517bd8c' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/addcustomer.html',
      1 => 1456420600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12774950045719ff0f887248_81439257',
  'variables' => 
  array (
    '_addcustomer' => 0,
    '_customer_name' => 0,
    '_tel' => 0,
    '_email' => 0,
    '_web' => 0,
    '_address' => 0,
    '_active_it' => 0,
    '_ok' => 0,
    'screen' => 0,
    '_preview' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5719ff0f8b76d7_56863269',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5719ff0f8b76d7_56863269')) {
function content_5719ff0f8b76d7_56863269 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12774950045719ff0f887248_81439257';
echo $_smarty_tpl->getSubTemplate ('themes/default/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="container body-bg">
    <div class=	"col-sm-7 col-xs-12">
		<h4 style="color:#aaa;text-transform"><?php echo $_smarty_tpl->tpl_vars['_addcustomer']->value;?>
</h4>
		<table class="table table-striped" id="dev-table">
	      <fieldset class="addcustField">
		<form class="reload" action="addcustomer.php" method="POST">
		    <!-- Text input-->
		    <div class="form-group">
		      <label class="col-sm-4 control-label" for="textinput"><?php echo $_smarty_tpl->tpl_vars['_customer_name']->value;?>
</label>
		      <div class="col-sm-8">
			<input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['_customer_name']->value;?>
" class="form-control custName" name="custName" />
		      </div>
		    </div>
		    
		    <!-- Text input-->
		    <div class="form-group">
		      <label class="col-sm-4 control-label" for="textinput"><?php echo $_smarty_tpl->tpl_vars['_tel']->value;?>
</label>
		      <div class="col-sm-8">
			<input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['_tel']->value;?>
" class="form-control" name="custTel">
		      </div>
		    </div>
		    
		    <!-- Text input-->
		    <div class="form-group">
		      <label class="col-sm-4 control-label" for="textinput"><?php echo $_smarty_tpl->tpl_vars['_email']->value;?>
</label>
		      <div class="col-sm-8">
			<input type="email" placeholder="<?php echo $_smarty_tpl->tpl_vars['_email']->value;?>
" class="form-control" name="custMail">
		      </div>
		    </div>
		    
		    <!-- Text input-->
		    <div class="form-group">
		      <label class="col-sm-4 control-label" for="textinput"><?php echo $_smarty_tpl->tpl_vars['_web']->value;?>
</label>
		      <div class="col-sm-8">
			<input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['_web']->value;?>
" class="form-control" name="custWeb">
		      </div>
		    </div>
		    
		    <!-- Text input-->
		    <div class="form-group">
		      <label class="col-sm-4 control-label" for="textinput"><?php echo $_smarty_tpl->tpl_vars['_address']->value;?>
</label>
		      <div class="col-sm-8">
			<input type="textarea" placeholder="<?php echo $_smarty_tpl->tpl_vars['_address']->value;?>
" class="form-control" name="custAddress">
		      </div>
		    </div>
		    
		    <!-- Text input-->
		    <div style="clear:both;text-align: right;margin-right: 12px;">
			    <label><?php echo $_smarty_tpl->tpl_vars['_active_it']->value;?>
 </label>
			    <input type="checkbox" name="active" />
		    </div>

		    <div class="form-group">
		      <div class="col-sm-offset-2 col-sm-10">
			<div class="pull-right">
			  <button type="submit" class="btn btn-primary btn-xs" disabled><?php echo $_smarty_tpl->tpl_vars['_ok']->value;?>
</button>
			</div>
		      </div>
		    </div>
		</form>
	      </fieldset>
	</table>
    </div><!--col-sm-7-->
   <?php if ($_smarty_tpl->tpl_vars['screen']->value == 'computer') {?>
   <div class="col-sm-5 hidden-xs">
	<h4 style="color:#aaa;text-transform;margin-bottom:20px"><?php echo $_smarty_tpl->tpl_vars['_preview']->value;?>
</h4>
	<div class="well margin-top">
	    <h3 class="name"></h3>
	    <small><cite><span class="address"></span><i class="glyphicon glyphicon-map-marker">
	    </i></cite></small>
	    <p>
		<i class="glyphicon glyphicon-envelope"></i><span class="mail"></span>
		<br />
		<i class="glyphicon glyphicon-globe"></i><a href="#"><span class="web"></span></a>
		<br />
		<i class="glyphicon glyphicon-earphone"></i><span class="tel"></span>
	    </p>
	</div>
    </div><!--col-sm-5 finish -->
    <?php }?>
</div><!--container body-bg-->
<?php echo $_smarty_tpl->getSubTemplate ('themes/default/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo '<script'; ?>
>
$(function(){
  
  $("input[name=custName]").on("change", function(){
    var name = $("input[name='custName']").val();
    $(".name").text(name);
    if($("input[name='custName']").val().lenght == 0)
    {
      $(".btn-primary").prop("disabled", true);
    }
    else
    $(".btn-primary").prop("disabled", false);
  });
  $("input[name=custTel]").on("change", function(){
    var name = $("input[name='custTel']").val();
    $(".tel").text(name);
  });
  $("input[name=custMail]").on("change", function(){
    var name = $("input[name='custMail']").val();
    $(".mail").text(name);
  });
  $("input[name=custWeb]").on("change", function(){
    var name = $("input[name='custWeb']").val();
    $(".web").text(name);
  });
  $("input[name=custAddress]").on("change", function(){
    var name = $("input[name='custAddress']").val();
    $(".address").text(name);
  });
  
//end
});
<?php echo '</script'; ?>
>
<?php }
}
?>