<?php /* Smarty version 3.1.27, created on 2016-04-04 22:36:11
         compiled from "/var/www/html/mcopy/themes/default/editproduct.html" */ ?>
<?php
/*%%SmartyHeaderCode:20283119585702c22bd7b625_36832148%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '218d47084bd706f0bbad02cd768c82470c779163' => 
    array (
      0 => '/var/www/html/mcopy/themes/default/editproduct.html',
      1 => 1459798566,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20283119585702c22bd7b625_36832148',
  'variables' => 
  array (
    'stock' => 0,
    '_stock_list' => 0,
    'stk' => 0,
    '_edit' => 0,
    '_stock_name' => 0,
    '_short_desc' => 0,
    '_detail' => 0,
    '_stock_no' => 0,
    '_category' => 0,
    'category' => 0,
    'ct' => 0,
    '_ok' => 0,
    '_upload_images' => 0,
    '_click_del_images' => 0,
    'images' => 0,
    'main_img' => 0,
    'image' => 0,
    '_confirm_delete' => 0,
    '_delete' => 0,
    '_cancel' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5702c22bde91c4_81903787',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5702c22bde91c4_81903787')) {
function content_5702c22bde91c4_81903787 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '20283119585702c22bd7b625_36832148';
echo $_smarty_tpl->getSubTemplate ('themes/default/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="container body-bg">
<?php
$_from = $_smarty_tpl->tpl_vars['stock']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['stk'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['stk']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['stk']->value) {
$_smarty_tpl->tpl_vars['stk']->_loop = true;
$foreach_stk_Sav = $_smarty_tpl->tpl_vars['stk'];
?>
<!--Breadcrumb-->
  <ol class="breadcrumb hidden-print">
    <li><a href="index.php"><i class="fa fa-home" style="font-size: 20px;color:#000"></i></a></li>
    <li><a href="stock.php"><?php echo $_smarty_tpl->tpl_vars['_stock_list']->value;?>
</a></li>
    <li><a href="stock.php?cid=<?php echo $_smarty_tpl->tpl_vars['stk']->value['category_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['stk']->value['category_name'];?>
</a></li>
    <li><a href="productdetail.php?sid=<?php echo $_smarty_tpl->tpl_vars['stk']->value['stock_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['stk']->value['stock_name'];?>
</a></li>
    <li class="active"><?php echo $_smarty_tpl->tpl_vars['_edit']->value;?>
</li>
  </ol>
<!--/Breadcrumb-->
    <div class="navbar well">
	  <div class="col-sm-6"><!--add product-->
		<form action="editproduct.php" method="post" id="editProductform">
			<span class="number">1- <?php echo $_smarty_tpl->tpl_vars['_edit']->value;?>
</span><br />
			<label class="margin-top"><?php echo $_smarty_tpl->tpl_vars['_stock_name']->value;?>
</label>
			<input type="text" class="form-control epname" value="<?php echo $_smarty_tpl->tpl_vars['stk']->value['stock_name'];?>
" name="product_name" />
			<input type="hidden" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['stk']->value['stock_id'];?>
" name="product_id" />
			<label class="margin-top"><?php echo $_smarty_tpl->tpl_vars['_short_desc']->value;?>
</label>
			<input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['stk']->value['stock_short_detail'];?>
" name="short_desc" />
			<label class="margin-top"><?php echo $_smarty_tpl->tpl_vars['_detail']->value;?>
</label>
			<textarea type="text" class="form-control" id="editorpredit" name="product_detail"><?php echo $_smarty_tpl->tpl_vars['stk']->value['stock_detail'];?>
</textarea>
			<label class="margin-top"><?php echo $_smarty_tpl->tpl_vars['_stock_no']->value;?>
</label>
			<input type="text" class="form-control epno" value="<?php echo $_smarty_tpl->tpl_vars['stk']->value['stock_no'];?>
" name="product_no" />
			<div class="navbar">
			      <label class="margin-top"><?php echo $_smarty_tpl->tpl_vars['_category']->value;?>
</label>
			      <select class="btn btn-default" style="width:100%" name="product_category">
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
" <?php if ($_smarty_tpl->tpl_vars['stk']->value['stock_category_id'] == $_smarty_tpl->tpl_vars['ct']->value['category_id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['ct']->value['category_name'];?>
</option>
				    <?php
$_smarty_tpl->tpl_vars['ct'] = $foreach_ct_Sav;
}
?>
			      </select>
			</div>
			<button class="btn btn-success margin-top" type="submit"><?php echo $_smarty_tpl->tpl_vars['_ok']->value;?>
</button>
		</form>      
	  </div><!--/add product-->
	<?php
$_smarty_tpl->tpl_vars['stk'] = $foreach_stk_Sav;
}
?>
	<div class="col-sm-6"><!--add picture-->
		<span class="number">2- <?php echo $_smarty_tpl->tpl_vars['_upload_images']->value;?>
</span><br />
		<small><?php echo $_smarty_tpl->tpl_vars['_click_del_images']->value;?>
<br />
		<!--Thumb-->
			<div class="navbar margin-top">
			    <?php
$_from = $_smarty_tpl->tpl_vars['images']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['image'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['image']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
$foreach_image_Sav = $_smarty_tpl->tpl_vars['image'];
?>
				<div id="thumbimage">
					<img src="<?php echo $_smarty_tpl->tpl_vars['main_img']->value;?>
/products/<?php echo $_smarty_tpl->tpl_vars['image']->value['images_stock_id'];?>
/small/<?php echo $_smarty_tpl->tpl_vars['image']->value['images_id'];?>
_small.jpg"  alt="" class="img-thumbnail" style="float:left;margin-left:10px" data-toggle="modal" data-target="#imagedel-<?php echo $_smarty_tpl->tpl_vars['image']->value['images_id'];?>
" />
				</div>
<!-- Modal -->
				  <div class="modal fade" id="imagedel-<?php echo $_smarty_tpl->tpl_vars['image']->value['images_id'];?>
" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				    <div class="modal-dialog" role="document">
				      <div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					  <h4 class="modal-title" id="myModalLabel">Silme Onayı</h4>
					</div>
					<form id="delimage" action="images.php" method="post">
					  <div class="modal-body">
						<label><?php echo $_smarty_tpl->tpl_vars['_confirm_delete']->value;?>
</label>
						<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['image']->value['images_id'];?>
" />
					  </div>
					  <div class="modal-footer">
					    <button type="submit" class="btn pull-left"><?php echo $_smarty_tpl->tpl_vars['_delete']->value;?>
</button>
					    <button type="button" class="btn btn-success pull-right" data-dismiss="modal" aria-label="Close"><?php echo $_smarty_tpl->tpl_vars['_cancel']->value;?>
</button>
					  </div>
					</form>
				      </div>
				    </div>
				  </div>
<!-- /Modal -->
			    <?php
$_smarty_tpl->tpl_vars['image'] = $foreach_image_Sav;
}
?>
                        </div>
		<!--/Thumb-->
                <div class="form-group margin-top">
		<div class="form-group">
		      <form action="images.php" method="post" id="addimagesform" enctype="multipart/form-data">
			    <input name="productimage[]" class="file" type="file" multiple />
			    <input class="id"  type="hidden" name="addimagesid[]" multiple />
		      </form>
                </div>
                </div>
	</div><!--/add picture-->
    </div>
</div><!--/container-->
<?php echo $_smarty_tpl->getSubTemplate ('themes/default/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo '<script'; ?>
>
$(function(){
        tinymce.init({
            selector: "#editorpredit"
        });

var id = $("input[name=product_id]").val();
$(".id").val(id);

//For edit product
$("#editProductform").on('submit',(function(e) {
	  tinyMCE.triggerSave();
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
		  $("div.work-inf").fadeIn();
		  setTimeout(function(){ location.reload(); }, 2000);
		}
	  });
  }));

//For add images
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
		  setTimeout(function(){ location.reload(); }, 2000);
		}
	  });
  }));
  
//For delete image
$("#delimage").on('submit',(function(e) {
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
		  $(".close").click();
		  setTimeout(function(){ location.reload(); }, 2000);
		}
	  });
  }));

// End of function
});
<?php echo '</script'; ?>
><?php }
}
?>