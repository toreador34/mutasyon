<?php /* Smarty version 3.1.27, created on 2016-03-27 17:49:17
         compiled from "/var/www/html/mutasyon/themes/default/addproduct.html" */ ?>
<?php
/*%%SmartyHeaderCode:106650420256f7f2ed2306f9_93281344%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d099e3939e8007494e84ff3920b927990341bc5' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/addproduct.html',
      1 => 1458845148,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '106650420256f7f2ed2306f9_93281344',
  'variables' => 
  array (
    '_add_stock' => 0,
    '_stock_name' => 0,
    '_short_desc' => 0,
    '_desc' => 0,
    '_stock_no' => 0,
    '_category' => 0,
    '_add_category' => 0,
    'category' => 0,
    'ct' => 0,
    '_save' => 0,
    '_upload_images' => 0,
    '_inf_header_addproduct' => 0,
    '_inf_stock_name' => 0,
    '_inf_short_desc' => 0,
    '_inf_stock_no' => 0,
    '_inf_category' => 0,
    '_inf_upload_images' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56f7f2ed275367_42313600',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56f7f2ed275367_42313600')) {
function content_56f7f2ed275367_42313600 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '106650420256f7f2ed2306f9_93281344';
echo $_smarty_tpl->getSubTemplate ('themes/default/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="container body-bg">
    <div class="navbar">  
	    <form action="addproduct.php" method="post" enctype="multipart/form-data" class="addProduct">
		  <div class="well one"><!--add product-->
			<span class="number">1- <?php echo $_smarty_tpl->tpl_vars['_add_stock']->value;?>
</span><br />
			<label class="margin-top"><?php echo $_smarty_tpl->tpl_vars['_stock_name']->value;?>
</label>
			<input type="text" class="form-control name" placeholder="<?php echo $_smarty_tpl->tpl_vars['_add_stock']->value;?>
" name="product_name">
			<label class="margin-top"><?php echo $_smarty_tpl->tpl_vars['_short_desc']->value;?>
</label>
			<input type="text" class="form-control shortdesc" placeholder="<?php echo $_smarty_tpl->tpl_vars['_short_desc']->value;?>
" name="short_desc">
			<label class="margin-top"><?php echo $_smarty_tpl->tpl_vars['_desc']->value;?>
</label>
			<textarea type="text" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['_desc']->value;?>
" id="editor" name="product_detail"></textarea>
			<label class="margin-top"><?php echo $_smarty_tpl->tpl_vars['_stock_no']->value;?>
</label>
			<input type="text" class="form-control no" placeholder="<?php echo $_smarty_tpl->tpl_vars['_stock_no']->value;?>
" name="product_no">
			<div class="row" style="padding:15px;">
				<label><?php echo $_smarty_tpl->tpl_vars['_category']->value;?>
</label>
				<div class="input-group input-group-sm categorylist">
				      <span class="input-group-addon btn btn-yellow" id="sizing-addon3" data-toggle="collapse" href="#addcategory" aria-expanded="false" title="<?php echo $_smarty_tpl->tpl_vars['_add_category']->value;?>
" style="color: #fff;"><i class="fa fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_add_category']->value;?>
</span>
				      <select class="form-control" name="product_category">
					    <option value="empty"></option>
					    <?php
$_from = $_smarty_tpl->tpl_vars['category']->value;
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
			</div>
			<button class="btn btn-success margin-top send" type="submit"><?php echo $_smarty_tpl->tpl_vars['_save']->value;?>
</button>
		  </div><!--/add product-->
	    </form>
	    <div class="well two display-none"><!--add picture-->
		    <span class="number">2- <?php echo $_smarty_tpl->tpl_vars['_upload_images']->value;?>
</span>
		    <div class="form-group margin-top">
		    <div class="form-group">
			  <form action="images.php" method="post" id="addimagesform" enctype="multipart/form-data">
				  <input name="productimage[]" class="file" type="file" multiple />
				  <input name="newproductname[]" class="stname" type="hidden" />
			  </form>
		    </div>
		    </div>
	    </div><!--/add picture-->
	    
		  <div class="col-xs-12 alert alert-info" role="alert">
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
			<div class="col-sm-1">
			      <i class="glyphicon glyphicon-info-sign" style="font-size:40px;margin-left: -36px;margin-top: -13px;"></i>
			</div>
			<div class="col-sm-11 note-info">
			      <h4 class="box-heading"><?php echo $_smarty_tpl->tpl_vars['_inf_header_addproduct']->value;?>
</h4>
			      <strong class="box-heading"><?php echo $_smarty_tpl->tpl_vars['_stock_name']->value;?>
</strong>
			      <p><?php echo $_smarty_tpl->tpl_vars['_inf_stock_name']->value;?>
</p>
			      <strong class="box-heading"><?php echo $_smarty_tpl->tpl_vars['_short_desc']->value;?>
</strong>
			      <p><?php echo $_smarty_tpl->tpl_vars['_inf_short_desc']->value;?>
</p>
			      <strong class="box-heading"><?php echo $_smarty_tpl->tpl_vars['_stock_no']->value;?>
</strong>
			      <p><?php echo $_smarty_tpl->tpl_vars['_inf_stock_no']->value;?>
</p>
			      <strong class="box-heading"><?php echo $_smarty_tpl->tpl_vars['_category']->value;?>
</strong>
			      <p><?php echo $_smarty_tpl->tpl_vars['_inf_category']->value;?>
</p>
			      <strong class="box-heading"><?php echo $_smarty_tpl->tpl_vars['_upload_images']->value;?>
</strong>
			      <p><?php echo $_smarty_tpl->tpl_vars['_inf_upload_images']->value;?>
</p>
			</div>
		  </div>

    </div>
</div><!--/container-->
<?php echo $_smarty_tpl->getSubTemplate ('themes/default/category/addcategory.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('themes/default/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo '<script'; ?>
>
$(function(){
        tinymce.init({
            selector: "#editor"
        });
        
$(".addProduct").on('submit',(function(e) {
	  tinyMCE.triggerSave();
	  e.preventDefault();
	  var formData = new FormData(this);
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
		}
	  });
  }));
  
//Add images
//For add images
$("input[name='product_name']").change(function(){
    var stname = $("input[name='product_name']").val();
    $(".stname").val(stname);
});

$("#addimagesform").on('submit',(function(e) {
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
		  $("div.work-inf").empty(1000);
		  $("div.work-inf").addClass("display-block");
		  $("div.work-inf").html(e);
		  $("div.work-inf").fadeIn();
// 		  setTimeout(function(){ location.reload(); }, 2000);
		}
	  });
  }));


// End of function
});
<?php echo '</script'; ?>
><?php }
}
?>