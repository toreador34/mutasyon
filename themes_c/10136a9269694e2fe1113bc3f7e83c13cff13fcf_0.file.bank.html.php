<?php /* Smarty version 3.1.27, created on 2016-03-25 16:12:16
         compiled from "/var/www/html/mutasyon/themes/default/settings/bank.html" */ ?>
<?php
/*%%SmartyHeaderCode:7233338356f547408a2909_00856517%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10136a9269694e2fe1113bc3f7e83c13cff13fcf' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/settings/bank.html',
      1 => 1456420639,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7233338356f547408a2909_00856517',
  'variables' => 
  array (
    '_addbank' => 0,
    '_bank_name' => 0,
    '_no' => 0,
    '_tel' => 0,
    '_address' => 0,
    '_is_active' => 0,
    '_ok' => 0,
    'bank' => 0,
    'screen' => 0,
    'bnk' => 0,
    '_bank_number' => 0,
    '_bank_in' => 0,
    '_bank_out' => 0,
    '_bank_inf_edit' => 0,
    '_form_sent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56f547409019c6_58028456',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56f547409019c6_58028456')) {
function content_56f547409019c6_58028456 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '7233338356f547408a2909_00856517';
?>
<div class="btn btn-primary" data-toggle="collapse" href="#addbank" aria-expanded="false"><?php echo $_smarty_tpl->tpl_vars['_addbank']->value;?>
</div>
 <div class="collapse" id="addbank" style="position:relative">
	<table class="table table-striped" id="dev-table">
	      <fieldset class="addbankField">
		<form  class="addbankform reload" action="bank.php" method="POST">
		    <!-- Text input-->
		    <div class="form-group">
		      <label class="col-sm-4 control-label" for="textinput"><?php echo $_smarty_tpl->tpl_vars['_bank_name']->value;?>
</label>
		      <div class="col-sm-8">
			<input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['_bank_name']->value;?>
" class="form-control" name="bankName">
		      </div>
		    </div>
		    
		    <!-- Text input-->
		    <div class="form-group">
		      <label class="col-sm-4 control-label" for="textinput"><?php echo $_smarty_tpl->tpl_vars['_no']->value;?>
</label>
		      <div class="col-sm-8">
			<input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['_no']->value;?>
" class="form-control" name="bankNo">
		      </div>
		    </div>
		    
		    <!-- Text input-->
		    <div class="form-group">
		      <label class="col-sm-4 control-label" for="textinput"><?php echo $_smarty_tpl->tpl_vars['_tel']->value;?>
</label>
		      <div class="col-sm-8">
			<input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['_tel']->value;?>
" class="form-control" name="bankTel">
		      </div>
		    </div>
		    		    
		    <!-- Text input-->
		    <div class="form-group">
		      <label class="col-sm-4 control-label" for="textinput"><?php echo $_smarty_tpl->tpl_vars['_address']->value;?>
</label>
		      <div class="col-sm-8">
			<input type="textarea" placeholder="<?php echo $_smarty_tpl->tpl_vars['_address']->value;?>
" class="form-control" name="bankAddress">
		      </div>
		    </div>
		    		    
		    <!-- Text input-->
		    <div class="form-group">
		      <label class="col-sm-4 control-label" for="textinput"><?php echo $_smarty_tpl->tpl_vars['_is_active']->value;?>
</label>
		      <div class="col-sm-8">
			<input type="checkbox"  name="bankActive">
		      </div>
		    </div>

		    <div class="form-group">
		      <div class="col-sm-offset-2 col-sm-10">
			<div class="pull-right">
			  <button type="submit" class="btn btn-primary" id="submit"><?php echo $_smarty_tpl->tpl_vars['_ok']->value;?>
</button>
			</div>
		      </div>
		    </div>
		</form>
	      </fieldset>
	</table>
</div>
<?php
$_from = $_smarty_tpl->tpl_vars['bank']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['bnk'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['bnk']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['bnk']->value) {
$_smarty_tpl->tpl_vars['bnk']->_loop = true;
$foreach_bnk_Sav = $_smarty_tpl->tpl_vars['bnk'];
?>
<div <?php if ($_smarty_tpl->tpl_vars['screen']->value == 'phone') {?> style="overflow:auto" <?php }?>>
<table class="table table-striped margin-top">
	<tr>
	  <td>
		<a class="btn btn-info" role="button" data-toggle="collapse" href="#bank-<?php echo $_smarty_tpl->tpl_vars['bnk']->value['bank_id'];?>
" aria-expanded="false" aria-controls="bank" style="width:100%">
		  <?php echo $_smarty_tpl->tpl_vars['bnk']->value['bank_name'];?>

		</a>
		<div class="collapse" id="bank-<?php echo $_smarty_tpl->tpl_vars['bnk']->value['bank_id'];?>
" style="position:relative">
			<table class="table table-striped" id="dev-table">
			
				<thead>
					<tr>
						<th>#</th>
						<th><?php echo $_smarty_tpl->tpl_vars['_bank_number']->value;?>
</th>
						<th><?php echo $_smarty_tpl->tpl_vars['_bank_in']->value;?>
</th>
						<th><?php echo $_smarty_tpl->tpl_vars['_bank_out']->value;?>
</th>
					</tr>
				</thead>
				<tbody>
				      
					<tr>
						<td><a href=# style="color:#000;font-weight:bold"><?php echo $_smarty_tpl->tpl_vars['bnk']->value['bank_id'];?>
</a></td>
						<td><a href=# style="color:#000;font-weight:bold"><?php echo $_smarty_tpl->tpl_vars['bnk']->value['bank_no'];?>
</a></td>
						<td class="btn-success"><a href=# style="color:#fff;font-weight:bold">
						      Varlık
						</a></td>
						<td class="btn-danger"><a href=# style="color:#fff;font-weight:bold">
							Harcama
						</a></td>
					</tr>
					
				</tbody>
				
			</table>
			<span class="edit-bank"><a class="glyphicon glyphicon-edit" data-toggle="modal" data-target="#bankInf-<?php echo $_smarty_tpl->tpl_vars['bnk']->value['bank_id'];?>
"></a></span>
		</div>
	  </td>
	</tr>
</table> 
</div>

 <!-- Modal -->
      <div class="modal fade" id="bankInf-<?php echo $_smarty_tpl->tpl_vars['bnk']->value['bank_id'];?>
" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
	    <div class="modal-header">
	      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	      <h4 class="modal-title" id="myModalLabel"><?php echo $_smarty_tpl->tpl_vars['_bank_inf_edit']->value;?>
</h4>
	    </div>
	    <form action="bank.php" method="post" class="bankeditform">
		  <div class="modal-body">
				    <fieldset>
				      <!-- Text input-->
				      <div class="form-group">
					<label class="col-sm-3 control-label" for="textinput"><?php echo $_smarty_tpl->tpl_vars['_bank_name']->value;?>
</label>
					<div class="col-sm-9">
					  <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['bnk']->value['bank_name'];?>
" class="form-control" name="bank_name">
					  <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['bnk']->value['bank_id'];?>
" class="form-control" name="bank_id" style="display:none">
					</div>
				      </div>
				      <!-- Text input-->
				      <div class="form-group">
					<label class="col-sm-3 control-label" for="textinput"><?php echo $_smarty_tpl->tpl_vars['_bank_number']->value;?>
</label>
					<div class="col-sm-9">
					  <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['bnk']->value['bank_no'];?>
" class="form-control" name="bank_no">
					</div>
				      </div>
				      <!-- Text input-->
				      <div class="form-group">
					<label class="col-sm-3 control-label" for="textinput"><?php echo $_smarty_tpl->tpl_vars['_address']->value;?>
</label>
					<div class="col-sm-9">
					  <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['bnk']->value['bank_address'];?>
" class="form-control" name="bank_address">
					</div>
				      </div>
				      <!-- Text input-->
				      <div class="form-group">
					<label class="col-sm-3 control-label" for="textinput"><?php echo $_smarty_tpl->tpl_vars['_tel']->value;?>
</label>
					<div class="col-sm-9">
					  <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['bnk']->value['bank_tel'];?>
" class="form-control" name="bank_tel">
					</div>
				      </div>
				      
				      <!-- Text input-->
					<div class="form-group">
					  <label class="col-sm-3 control-label" for="textinput"><?php echo $_smarty_tpl->tpl_vars['_is_active']->value;?>
</label>
					  <div class="col-sm-8">
					    <input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['bnk']->value['bank_active'] == 1) {?>checked="checked"<?php }?> name="bank_active">
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
<?php
$_smarty_tpl->tpl_vars['bnk'] = $foreach_bnk_Sav;
}

}
}
?>