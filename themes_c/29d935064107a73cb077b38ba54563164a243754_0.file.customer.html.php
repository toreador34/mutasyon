<?php /* Smarty version 3.1.27, created on 2016-04-22 13:37:47
         compiled from "/var/www/html/mutasyon/themes/default/customer.html" */ ?>
<?php
/*%%SmartyHeaderCode:7253295155719fefbbe8460_20084801%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29d935064107a73cb077b38ba54563164a243754' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/customer.html',
      1 => 1458160934,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7253295155719fefbbe8460_20084801',
  'variables' => 
  array (
    '_customers' => 0,
    '_addcustomer' => 0,
    'customer' => 0,
    'row' => 0,
    'main_img' => 0,
    '_active' => 0,
    '_passive' => 0,
    '_add_invoice' => 0,
    '_delete' => 0,
    'page' => 0,
    'i' => 0,
    '_delete_customer_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5719fefbd042d2_41324223',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5719fefbd042d2_41324223')) {
function content_5719fefbd042d2_41324223 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once '/var/www/html/mutasyon/libs/plugins/modifier.truncate.php';

$_smarty_tpl->properties['nocache_hash'] = '7253295155719fefbbe8460_20084801';
echo $_smarty_tpl->getSubTemplate ('themes/default/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="container body-bg">
<!--Breadcrumb-->
  <ol class="breadcrumb hidden-print">
	<li><a href="index.php"><i class="fa fa-home" style="font-size: 20px;color:#000"></i></a></li>
	<li class="active"><?php echo $_smarty_tpl->tpl_vars['_customers']->value;?>
</li>
  </ol>
<!--/Breadcrumb-->
      <div class="col-xs-12">
	    <div class="row panel-heading" style="background:#000">
		  <span class="pull-left">
			<a data-toggle="collapse" href="#addcustomer" aria-expanded="false" title="<?php echo $_smarty_tpl->tpl_vars['_addcustomer']->value;?>
" style="font-weight:bold;color:#fff"><i class="glyphicon glyphicon-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_addcustomer']->value;?>
</a>
		  </span>
	    </div>
	    <div class="customerlist">
	    <?php
$_from = $_smarty_tpl->tpl_vars['customer']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$foreach_row_Sav = $_smarty_tpl->tpl_vars['row'];
?>
	    <div class="col-sm-3 col-xs-11 margin-top">
		  <div class="panel <?php if ($_smarty_tpl->tpl_vars['row']->value['cust_status'] == 1) {?>panel-grey<?php } else { ?>panel-default<?php }?>" style="background:#fff;">
			  <div class="panel-heading"><a href="custdetail.php?cid=<?php echo $_smarty_tpl->tpl_vars['row']->value['cust_id'];?>
" style="color:<?php if ($_smarty_tpl->tpl_vars['row']->value['cust_status'] == 1) {?>#fff<?php } else { ?>#aaa<?php }?>;font-weight:bold"><?php echo $_smarty_tpl->tpl_vars['row']->value['cust_name'];?>
</a></div>
			  <div class="panel-body pan">
					      <div class="custlistimage col-sm-5" style="padding:5px">
						    <img src="<?php echo $_smarty_tpl->tpl_vars['main_img']->value;?>
/customers/<?php echo $_smarty_tpl->tpl_vars['row']->value['cust_id'];?>
.png" alt="" class="img-responsive" onError="this.onerror=null;this.src='img/user.png';" />
					      </div>
					      <div class="col-sm-7" style="padding:3px">
						    <table class="table table-hover">
							  <thead>
							  <tr>
							      <th>Ayrıntılar</th>
							  </tr>
							  </thead>
							  <tbody style="font-size:10px">
								<tr>
								    <td><?php if (($_smarty_tpl->tpl_vars['row']->value['cust_tel'])) {
echo $_smarty_tpl->tpl_vars['row']->value['cust_tel'];
} else { ?>Telefon Yok!<?php }?></td>
								</tr>
								<tr>
								    <td><?php if (($_smarty_tpl->tpl_vars['row']->value['cust_mail'])) {
echo $_smarty_tpl->tpl_vars['row']->value['cust_mail'];
} else { ?>Mail Yok!<?php }?></td>
								</tr>
								<tr>
								    <td><?php if (($_smarty_tpl->tpl_vars['row']->value['cust_web'])) {
echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['row']->value['cust_web'],20);
} else { ?>Web adresi Yok!<?php }?></td>
								</tr>
							  </tbody>
						      </table>
						      <span class="btncustlist">
							  <?php if ($_smarty_tpl->tpl_vars['row']->value['cust_status'] == 1) {?>
								<span class="status" active="<?php echo $_smarty_tpl->tpl_vars['row']->value['cust_id'];?>
" status="0" title="<?php echo $_smarty_tpl->tpl_vars['_active']->value;?>
">
									<i class="fa fa-check-circle-o" style="color:white;font-size: 20px;cursor:pointer"></i>
								</span>
							  <?php } else { ?>
								<span class="status" active="<?php echo $_smarty_tpl->tpl_vars['row']->value['cust_id'];?>
" status="1" title="<?php echo $_smarty_tpl->tpl_vars['_passive']->value;?>
">
									<i class="fa fa-ban" style="color:#aaa;font-size: 15px;cursor:pointer"></i>
								</span>
							  <?php }?>
							  <a class="h5" href="addinvoice.php?cid=<?php echo $_smarty_tpl->tpl_vars['row']->value['cust_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['_add_invoice']->value;?>
">
								<span class="label label-info">
								      <i class="fa fa-files-o"></i>
								</span>
							  </a>
							  <span class="label label-danger delcustomer" style="margin-left:1px" delid="<?php echo $_smarty_tpl->tpl_vars['row']->value['cust_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['_delete']->value;?>
">
								<i class="fa fa-trash-o"></i>
							  </span>
						    </span>
					      </div>
			  </div><!--/panel-body-->
		  </div><!--/panel-->
	    </div>
	    <?php
$_smarty_tpl->tpl_vars['row'] = $foreach_row_Sav;
}
?>
	    </div>
	    <div class="pull-left">
		<ul class="pagination">
		    <?php if ($_smarty_tpl->tpl_vars['page']->value == '') {?>
			    <li class="active" ><a href="customer.php">Tümü</a></li>
			    <?php } else { ?>
			    <li><a href="customer.php">Tümü</a></li>
		    <?php }?>
		      <?php
$_from = range('A','Z');
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?>
			    <?php if ($_smarty_tpl->tpl_vars['page']->value == $_smarty_tpl->tpl_vars['i']->value) {?>
			    <li class="active"><a href="?c=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
			    <?php } else { ?>
			    <li><a href="?c=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
			    <?php }?>
		      <?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>
		</ul>
	    </div>
      </div>
</div><!--container body-bg-->
<?php echo $_smarty_tpl->getSubTemplate ('themes/default/customer/addcustomer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('themes/default/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo '<script'; ?>
>
$(function(){

  // Delete Customer
  $(document).on("click", ".delcustomer", function(event){
    var delid = $(this).attr("delid");
    if(confirm("<?php echo $_smarty_tpl->tpl_vars['_delete_customer_message']->value;?>
")){
	  $.ajax({
	    type:'POST',
	    url: 'customer.php',
		data : { 'delid':delid },
		success:function(t){
		    $("div.work-inf").addClass("display-block");
		    $("div.work-inf").html(t);
		}
	  });
      }
      else{
	  return false;
      }
  });

  // Delete Customer
  $(document).on("click", ".status", function(event){
    var status = $(this).attr("status");
    var active = $(this).attr("active");
    $.ajax({
      type:'POST',
      url: 'customer.php',
	  data : { 'status':status, 'active':active },
	  success:function(t){
	      $("div.work-inf").addClass("display-block");
	      $("div.work-inf").html(t);
	  }
    });
  });

// End of function
});
<?php echo '</script'; ?>
><?php }
}
?>