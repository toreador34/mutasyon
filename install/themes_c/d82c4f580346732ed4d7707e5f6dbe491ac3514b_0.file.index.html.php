<?php /* Smarty version 3.1.27, created on 2016-03-08 17:36:17
         compiled from "/var/www/html/mutasyonc/install/themes/default/index.html" */ ?>
<?php
/*%%SmartyHeaderCode:26590338356def1717bc396_23693166%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd82c4f580346732ed4d7707e5f6dbe491ac3514b' => 
    array (
      0 => '/var/www/html/mutasyonc/install/themes/default/index.html',
      1 => 1454872043,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26590338356def1717bc396_23693166',
  'variables' => 
  array (
    '_setup_header' => 0,
    'css' => 0,
    '_for_inf' => 0,
    '_lserver' => 0,
    '_lserveri' => 0,
    '_ldbname' => 0,
    '_ldbnamei' => 0,
    '_ldbuser' => 0,
    '_ldbuseri' => 0,
    '_lpassword' => 0,
    '_lpasswordi' => 0,
    '_test_connection' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56def1718877b9_04387206',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56def1718877b9_04387206')) {
function content_56def1718877b9_04387206 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '26590338356def1717bc396_23693166';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $_smarty_tpl->tpl_vars['_setup_header']->value;?>
</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
/style.css">
  </head>
  <body>
    <div class="container top_container hidden-print">
	    <nav class="navbar navbar-default navbar-fixed-top custom-navbar">
		  <div class="container">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
		      </button>
		      <div class="navbar-header">
		      <a class="navbar-brand" href="#"><?php echo $_smarty_tpl->tpl_vars['_setup_header']->value;?>
</a>
		  </div>
		  <div class="pull-right" style="margin-top:10px;">
			<span><a href="lang.php?lang=tr">Türkçe</a></span>
			<span style="margin-left:10px;"><a href="lang.php?lang=en">English</a></span>
		  </div>
	    </nav>
    <div class="container" style="margin-top:52px;">
	  <div class="col-xs-12">
		<div class="col-sm-4 hidden-xs">
		      <div class="box">
			  <div class="box-content">
				  <div class="step1">
					<h1 class="tag-title"><?php echo $_smarty_tpl->tpl_vars['_for_inf']->value;?>
</h1>
					<div class="alert alert-info">
					      <label><?php echo $_smarty_tpl->tpl_vars['_lserver']->value;?>
</label><p><?php echo $_smarty_tpl->tpl_vars['_lserveri']->value;?>
</p>
					      <label><?php echo $_smarty_tpl->tpl_vars['_ldbname']->value;?>
</label><p><?php echo $_smarty_tpl->tpl_vars['_ldbnamei']->value;?>
</p>
					      <label><?php echo $_smarty_tpl->tpl_vars['_ldbuser']->value;?>
</label><p><?php echo $_smarty_tpl->tpl_vars['_ldbuseri']->value;?>
</p>
					      <label><?php echo $_smarty_tpl->tpl_vars['_lpassword']->value;?>
</label><p><?php echo $_smarty_tpl->tpl_vars['_lpasswordi']->value;?>
</p>
					
					</div>
				  </div>
			  </div>
		      </div>
		</div>
		<div class="col-sm-8 col-xs-12">
			<div class="step1">
			      <h1><?php echo $_smarty_tpl->tpl_vars['_test_connection']->value;?>
</h1>
			      <form method="POST">
				    <div class="form-group">
					  <label for="exampleInputEmail1"><?php echo $_smarty_tpl->tpl_vars['_lserver']->value;?>
</label>
					  <input type="text" class="form-control" name="server" value="localhost">
				    </div>
				    <div class="form-group">
					  <label for="exampleInputEmail1"><?php echo $_smarty_tpl->tpl_vars['_ldbname']->value;?>
</label>
					  <input type="text" class="form-control" name="db">
				    </div>
				    <div class="form-group">
					  <label for="exampleInputEmail1"><?php echo $_smarty_tpl->tpl_vars['_ldbuser']->value;?>
</label>
					  <input type="text" class="form-control" name="user" >
				    </div>
				    <div class="form-group">
					  <label for="exampleInputEmail1"><?php echo $_smarty_tpl->tpl_vars['_lpassword']->value;?>
</label>
					  <input type="password" class="form-control" name="password">
				    </div>
				    <button type="submit" name="datebase" class="btn btn-success"><?php echo $_smarty_tpl->tpl_vars['_test_connection']->value;?>
</button>
			      </form>
			</div>
		</div>
	  </div>
    </div>
  </body>
</html><?php }
}
?>