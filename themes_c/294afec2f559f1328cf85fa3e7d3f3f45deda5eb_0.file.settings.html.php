<?php /* Smarty version 3.1.27, created on 2016-03-25 16:12:16
         compiled from "/var/www/html/mutasyon/themes/default/settings.html" */ ?>
<?php
/*%%SmartyHeaderCode:80785780456f5474080b715_85288016%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '294afec2f559f1328cf85fa3e7d3f3f45deda5eb' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/settings.html',
      1 => 1457208493,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80785780456f5474080b715_85288016',
  'variables' => 
  array (
    '_admin_settings_page_title' => 0,
    '_bank_page' => 0,
    '_category' => 0,
    '_tax' => 0,
    '_company' => 0,
    '_seller' => 0,
    '_language' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56f54740854827_29169895',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56f54740854827_29169895')) {
function content_56f54740854827_29169895 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '80785780456f5474080b715_85288016';
echo $_smarty_tpl->getSubTemplate ('themes/default/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 
<div class="container body-bg">
  <div class="row">
       <div class="board">
		<div class="board-inner">
		  <ul class="nav nav-tabs" id="myTab">
		      <div class="liner"></div>
		      <li class="active">
			  <a href="#admin" data-toggle="tab" title="<?php echo $_smarty_tpl->tpl_vars['_admin_settings_page_title']->value;?>
">
			    <span class="round-tabs one">
				    <i class="glyphicon glyphicon-user glyphicon-topmargin"></i><b><?php echo $_smarty_tpl->tpl_vars['_admin_settings_page_title']->value;?>
</b>
			    </span> 
			  </a>
		      </li><!--/active-->

		      <li>
			  <a href="#bank" data-toggle="tab" title="<?php echo $_smarty_tpl->tpl_vars['_bank_page']->value;?>
">
			  <span class="round-tabs two">
			      <i class="glyphicon glyphicon-usd glyphicon-topmargin"></i><b><?php echo $_smarty_tpl->tpl_vars['_bank_page']->value;?>
</b>
			  </span> 
			  </a>
		      </li>
		      
		      <li>
			<a href="#category" data-toggle="tab" title="<?php echo $_smarty_tpl->tpl_vars['_category']->value;?>
">
			  <span class="round-tabs three">
				<i class="glyphicon glyphicon-th-list glyphicon-topmargin"></i><b><?php echo $_smarty_tpl->tpl_vars['_category']->value;?>
</b>
			  </span> 
			</a>
		      </li>

		      <li>
			  <a href="#addtaxprofit" data-toggle="tab" title="<?php echo $_smarty_tpl->tpl_vars['_tax']->value;?>
">
			      <span class="round-tabs four">
				    <i class="glyphicon glyphicon-thumbs-up glyphicon-topmargin"></i><b><?php echo $_smarty_tpl->tpl_vars['_tax']->value;?>
</b>
			      </span> 
			  </a>
		      </li>

		      <li>
			  <a href="#company" data-toggle="tab" title="<?php echo $_smarty_tpl->tpl_vars['_company']->value;?>
">
			      <span class="round-tabs five">
				    <i class="glyphicon glyphicon-phone-alt glyphicon-topmargin"></i><b><?php echo $_smarty_tpl->tpl_vars['_company']->value;?>
</b>
			      </span> 
			  </a>
		      </li>

		      <li>
			  <a href="#seller" data-toggle="tab" title="<?php echo $_smarty_tpl->tpl_vars['_seller']->value;?>
">
			      <span class="round-tabs six">
				    <i class="glyphicon glyphicon-plane glyphicon-topmargin"></i><b><?php echo $_smarty_tpl->tpl_vars['_seller']->value;?>
</b>
			      </span> 
			  </a>
		      </li>

		      <li>
			  <a href="#language" data-toggle="tab" title="<?php echo $_smarty_tpl->tpl_vars['_language']->value;?>
">
			      <span class="round-tabs seven">
				    <i class="glyphicon fa fa-language glyphicon-topmargin"></i><b><?php echo $_smarty_tpl->tpl_vars['_language']->value;?>
</b>
			      </span> 
			  </a>
		      </li>
		  </ul><!--/nav nav-tabs-->
		</div><!--/board-inners-->

                <div class="tab-content">
                      <div class="tab-pane fade in active" id="admin"><?php echo $_smarty_tpl->getSubTemplate ('themes/default/settings/profile.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
</div>

                      <!-- Bank Account Start -->
                      <div class="tab-pane fade" id="bank">                         
			  <div class="col-sm-12"><?php echo $_smarty_tpl->getSubTemplate ('themes/default/settings/bank.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
</div>    
                      </div>
                      <!-- Bank Account Finish -->
                      
                       <!-- Category Start -->
                      <div class="tab-pane fade" id="category">                         
			  <div class="col-sm-12"><?php echo $_smarty_tpl->getSubTemplate ('themes/default/settings/addcategory.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
</div>    
                      </div>
                      <!-- Category Finish -->
                      
                      <!-- Add Tax Start -->
                      <div class="tab-pane fade" id="addtaxprofit">                         
			  <div class="col-sm-12"><?php echo $_smarty_tpl->getSubTemplate ('themes/default/settings/addtaxprofit.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
</div>    
                      </div>
                      <!-- Add Tax Finish -->
                      
                      <!-- Seller Start -->
                      <div class="tab-pane fade" id="seller">                         
			  <div class="col-sm-12"><?php echo $_smarty_tpl->getSubTemplate ('themes/default/settings/seller.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
</div>    
                      </div>
                      <!-- Seller Finish -->
                      
                       <!-- Language Start -->
                      <div class="tab-pane fade" id="language">                         
			  <div class="col-sm-12"><?php echo $_smarty_tpl->getSubTemplate ('themes/default/settings/language.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
</div>    
                      </div>
                      <!-- Language Finish -->
                      
                       <!-- Edit Company Start -->
                      <div class="tab-pane fade" id="company">                         
			  <div class="col-sm-12"><?php echo $_smarty_tpl->getSubTemplate ('themes/default/settings/editcompany.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
</div>    
                      </div>
                      <!-- Edit Company  Finish -->

		      <div class="clearfix"></div>
		</div><!--/tab-content-->
      </div><!--/board-->
  </div><!--/row-->
</div><!--/container body-bg-->
<?php echo $_smarty_tpl->getSubTemplate ('themes/default/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 

<?php echo '<script'; ?>
>
$(function(){

$('a[title]').tooltip();

$("#adminPicture").on('submit',(function(e) {
	  e.preventDefault();
	  var formData = new FormData(this);
	  $("div.work-inf").addClass("display-block");
	  $("div.work-inf").html("<img src='img/load.gif' />");
	  $.ajax({
	    type:'POST',
	    url: $(this).attr('action'),
		data:formData,
		cache:false,
		contentType: false,
		processData: false,
		success:function(e){
		  $("div.work-inf").addClass("display-block");
		  $("div.work-inf").html(e);
 		  setTimeout(function(){ location.reload(); }, 2000);
		}
	  });
  }));
  
// End of function
});
<?php echo '</script'; ?>
>

<?php }
}
?>