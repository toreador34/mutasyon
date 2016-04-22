<?php /* Smarty version 3.1.27, created on 2016-04-22 13:38:15
         compiled from "/var/www/html/mutasyon/themes/default/settings/seller.html" */ ?>
<?php
/*%%SmartyHeaderCode:9799618125719ff17524b46_57246853%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc2afcd791d4f8873fdf687993e0efa22bfe567e' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/settings/seller.html',
      1 => 1456420638,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9799618125719ff17524b46_57246853',
  'variables' => 
  array (
    '_addseller' => 0,
    '_seller_name' => 0,
    '_no' => 0,
    '_tel' => 0,
    '_address' => 0,
    '_web' => 0,
    '_email' => 0,
    '_ok' => 0,
    'seller' => 0,
    'slr' => 0,
    '_seller_inf_edit' => 0,
    '_iban' => 0,
    '_form_sent' => 0,
    '_delete' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5719ff1758c3f2_25796154',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5719ff1758c3f2_25796154')) {
function content_5719ff1758c3f2_25796154 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '9799618125719ff17524b46_57246853';
?>
<div class="btn btn-primary" data-toggle="collapse" href="#addseller" aria-expanded="false"><?php echo $_smarty_tpl->tpl_vars['_addseller']->value;?>
</div>
 <div class="collapse" id="addseller" style="position:relative">
	<table class="table table-striped" id="dev-table">
	      <fieldset class="addsellerField">
		<form  class="reload" action="seller.php" method="POST">
		    <!-- Text input-->
		    <div class="form-group">
		      <label class="col-sm-4 control-label" for="textinput"><?php echo $_smarty_tpl->tpl_vars['_seller_name']->value;?>
</label>
		      <div class="col-sm-8">
			<input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['_seller_name']->value;?>
" class="form-control" name="sellerName">
		      </div>
		    </div>
		    
		    <!-- Text input-->
		    <div class="form-group">
		      <label class="col-sm-4 control-label" for="textinput"><?php echo $_smarty_tpl->tpl_vars['_no']->value;?>
</label>
		      <div class="col-sm-8">
			<input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['_no']->value;?>
" class="form-control" name="selleriban">
		      </div>
		    </div>
		    
		    <!-- Text input-->
		    <div class="form-group">
		      <label class="col-sm-4 control-label" for="textinput"><?php echo $_smarty_tpl->tpl_vars['_tel']->value;?>
</label>
		      <div class="col-sm-8">
			<input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['_tel']->value;?>
" class="form-control" name="sellerTel">
		      </div>
		    </div>
		    		    
		    <!-- Text input-->
		    <div class="form-group">
		      <label class="col-sm-4 control-label" for="textinput"><?php echo $_smarty_tpl->tpl_vars['_address']->value;?>
</label>
		      <div class="col-sm-8">
			<input type="textarea" placeholder="<?php echo $_smarty_tpl->tpl_vars['_address']->value;?>
" class="form-control" name="sellerAddress">
		      </div>
		    </div>
		    		    
		    <!-- Text input-->
		    <div class="form-group">
		      <label class="col-sm-4 control-label" for="textinput"><?php echo $_smarty_tpl->tpl_vars['_web']->value;?>
</label>
		      <div class="col-sm-8">
			<input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['_web']->value;?>
" class="form-control" name="sellerweb">
		      </div>
		    </div>
		    		    
		    <!-- Text input-->
		    <div class="form-group">
		      <label class="col-sm-4 control-label" for="textinput"><?php echo $_smarty_tpl->tpl_vars['_email']->value;?>
</label>
		      <div class="col-sm-8">
			<input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['_email']->value;?>
" class="form-control" name="sellermail">
		      </div>
		    </div>
		    		    
		    <div class="form-group">
		      <div class="col-sm-offset-2 col-sm-10">
			<div class="pull-right">
			  <button type="submit" class="btn btn-primary margin-top" id="submit"><?php echo $_smarty_tpl->tpl_vars['_ok']->value;?>
</button>
			</div>
		      </div>
		    </div>
		</form>
	      </fieldset>
	</table>
</div>
<?php
$_from = $_smarty_tpl->tpl_vars['seller']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['slr'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['slr']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['slr']->value) {
$_smarty_tpl->tpl_vars['slr']->_loop = true;
$foreach_slr_Sav = $_smarty_tpl->tpl_vars['slr'];
?>
<table class="table table-striped margin-top">
	<tr>
	  <td style="width:30%"><?php echo $_smarty_tpl->tpl_vars['_seller_name']->value;?>
</td>
	  <td>
		<a class="btn btn-info" role="button" data-toggle="collapse" href="#seller-<?php echo $_smarty_tpl->tpl_vars['slr']->value['seller_id'];?>
" aria-expanded="false" aria-controls="seller" style="width:100%">
		  <?php echo $_smarty_tpl->tpl_vars['slr']->value['seller_name'];?>

		</a>
		<div class="collapse" id="seller-<?php echo $_smarty_tpl->tpl_vars['slr']->value['seller_id'];?>
" style="position:relative">
			<table class="table table-striped" id="dev-table">
			
				<thead>
					<tr>
						<th>#</th>
						<th>Satıcı Adı</th>
						<th>IBAN</th>
						<th>Adres</th>
						<th>Telefon</th>
					</tr>
				</thead>
				<tbody>
				      
					<tr>
						<td><a href=#><?php echo $_smarty_tpl->tpl_vars['slr']->value['seller_id'];?>
</a></td>
						<td><a href=#><?php echo $_smarty_tpl->tpl_vars['slr']->value['seller_name'];?>
</a></td>
						<td><a href=#><?php echo $_smarty_tpl->tpl_vars['slr']->value['seller_iban'];?>
</a></td>
						<td><a href=#><?php echo $_smarty_tpl->tpl_vars['slr']->value['seller_address'];?>
</a></td>
						<td><a href=#><?php echo $_smarty_tpl->tpl_vars['slr']->value['seller_tel'];?>
</a></td>
					</tr>
					
				</tbody>
				
			</table>
			<span class="edit-bank"><button class="btn btn-default btn-xs" data-toggle="modal" data-target="#sellerInf-<?php echo $_smarty_tpl->tpl_vars['slr']->value['seller_id'];?>
">Düzenle</button></span>
			<span class="edit-bank"><button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#sellerdel-<?php echo $_smarty_tpl->tpl_vars['slr']->value['seller_id'];?>
" style="margin-left: -89px">Sil</button></span>
		</div>
	  </td>
	</tr>
</table> 


 <!-- Edit Modal -->
      <div class="modal fade" id="sellerInf-<?php echo $_smarty_tpl->tpl_vars['slr']->value['seller_id'];?>
" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
	    <div class="modal-header">
	      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	      <h4 class="modal-title" id="myModalLabel"><?php echo $_smarty_tpl->tpl_vars['_seller_inf_edit']->value;?>
</h4>
	    </div>
	    <form action="seller.php" method="post" class="reload">
		  <div class="modal-body">
				    <fieldset>
				      <!-- Text input-->
				      <div class="form-group">
					<label class="col-sm-3 control-label" for="textinput"><?php echo $_smarty_tpl->tpl_vars['_seller_name']->value;?>
</label>
					<div class="col-sm-9">
					  <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['slr']->value['seller_name'];?>
" class="form-control" name="seller_name">
					  <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['slr']->value['seller_id'];?>
" class="form-control" name="seller_id" style="display:none">
					</div>
				      </div>
				      <!-- Text input-->
				      <div class="form-group">
					<label class="col-sm-3 control-label" for="textinput"><?php echo $_smarty_tpl->tpl_vars['_iban']->value;?>
</label>
					<div class="col-sm-9">
					  <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['slr']->value['seller_iban'];?>
" class="form-control" name="seller_iban">
					</div>
				      </div>
				      <!-- Text input-->
				      <div class="form-group">
					<label class="col-sm-3 control-label" for="textinput"><?php echo $_smarty_tpl->tpl_vars['_address']->value;?>
</label>
					<div class="col-sm-9">
					  <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['slr']->value['seller_address'];?>
" class="form-control" name="seller_address">
					</div>
				      </div>
				      <!-- Text input-->
				      <div class="form-group">
					<label class="col-sm-3 control-label" for="textinput"><?php echo $_smarty_tpl->tpl_vars['_tel']->value;?>
</label>
					<div class="col-sm-9">
					  <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['slr']->value['seller_tel'];?>
" class="form-control" name="seller_tel">
					</div>
				      </div>
				      <!-- Text input-->
				      <div class="form-group">
					<label class="col-sm-3 control-label" for="textinput"><?php echo $_smarty_tpl->tpl_vars['_email']->value;?>
</label>
					<div class="col-sm-9">
					  <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['slr']->value['seller_mail'];?>
" class="form-control" name="seller_mail">
					</div>
				      </div>
				      <!-- Text input-->
				      <div class="form-group">
					<label class="col-sm-3 control-label" for="textinput"><?php echo $_smarty_tpl->tpl_vars['_web']->value;?>
</label>
					<div class="col-sm-9">
					  <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['slr']->value['seller_web'];?>
" class="form-control" name="seller_web">
					</div>
				      </div>
				      
				      <div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
					  <div class="pull-right">
					    <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_form_sent']->value;?>
</button>
				          </div>
				        </div>
				      </div>
		  </div><!--/modal-body -->
	    </form>
	  </div>
	</div>
      </div>
  <!-- Modal -->
  
 <!-- Delete Modal -->
      <div class="modal fade" id="sellerdel-<?php echo $_smarty_tpl->tpl_vars['slr']->value['seller_id'];?>
" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
	    <div class="modal-header">
	      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	      <h4 class="modal-title" id="myModalLabel"><?php echo $_smarty_tpl->tpl_vars['_seller_inf_edit']->value;?>
</h4>
	    </div>
	    <form action="seller.php" method="post" class="reload">
		  <div class="modal-body">
		  <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['slr']->value['seller_name'];?>
 isimli satıcıyı silmek istediğinize emin misiniz?</div>
		  <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['slr']->value['seller_id'];?>
" name="delsellerid"></input>
		  <button type="submit" class="btn btn-danger"><?php echo $_smarty_tpl->tpl_vars['_delete']->value;?>
</button>
		  </div><!--/modal-body -->
	    </form>
	  </div>
	</div>
      </div>
  <!-- Modal -->
<?php
$_smarty_tpl->tpl_vars['slr'] = $foreach_slr_Sav;
}

}
}
?>