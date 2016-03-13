<?php /* Smarty version 3.1.27, created on 2016-03-08 17:36:53
         compiled from "/var/www/html/mutasyonc/install/themes/default/step2.html" */ ?>
<?php
/*%%SmartyHeaderCode:180241996656def195904254_88931779%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e4f48213bacb17f0ca51fd9a45f4ccb2e8f35d0' => 
    array (
      0 => '/var/www/html/mutasyonc/install/themes/default/step2.html',
      1 => 1454872722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180241996656def195904254_88931779',
  'variables' => 
  array (
    '_setup_header' => 0,
    'css' => 0,
    'baglanti' => 0,
    '_connect_success' => 0,
    '_for_install' => 0,
    '_for_install_i' => 0,
    '_for_copy_db' => 0,
    '_for_copy_db_i' => 0,
    '_connect_error' => 0,
    '_error' => 0,
    '_error_i' => 0,
    '_for_inf' => 0,
    '_for_inf_i' => 0,
    '_for_password' => 0,
    '_for_password_i' => 0,
    '_start_setup' => 0,
    'servername' => 0,
    'dbname' => 0,
    'username' => 0,
    'dbpasword' => 0,
    '_your_infs' => 0,
    '_email' => 0,
    '_password' => 0,
    '_user_name' => 0,
    '_name_surname' => 0,
    '_city' => 0,
    '_date' => 0,
    '_send_infs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56def19597c960_26198857',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56def19597c960_26198857')) {
function content_56def19597c960_26198857 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '180241996656def195904254_88931779';
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
			      <div class="import">
				    <?php if ($_smarty_tpl->tpl_vars['baglanti']->value == 1) {?>
					  <h2><?php echo $_smarty_tpl->tpl_vars['_connect_success']->value;?>
</h2>
					  <div class="alert alert-info">
						<label><?php echo $_smarty_tpl->tpl_vars['_for_install']->value;?>
</label><p><?php echo $_smarty_tpl->tpl_vars['_for_install_i']->value;?>
</p>
					  </div>
					  <div class="alert alert-danger">
						<label><?php echo $_smarty_tpl->tpl_vars['_for_copy_db']->value;?>
</label><p><?php echo $_smarty_tpl->tpl_vars['_for_copy_db_i']->value;?>
</p>
					  </div>
				    <?php } else { ?>
					  <h2><?php echo $_smarty_tpl->tpl_vars['_connect_error']->value;?>
</h2>
					  <div class="alert alert-danger">
						<label><?php echo $_smarty_tpl->tpl_vars['_error']->value;?>
</label><p><?php echo $_smarty_tpl->tpl_vars['_error_i']->value;?>
</p>
					  </div>
				    <?php }?>
			      </div>
			      <div class="addinfo" style="display:none">
				    <h2><?php echo $_smarty_tpl->tpl_vars['_connect_success']->value;?>
</h2>
				    <div class="alert alert-info">
					  <label><?php echo $_smarty_tpl->tpl_vars['_for_inf']->value;?>
</label><p><?php echo $_smarty_tpl->tpl_vars['_for_inf_i']->value;?>
</p>
				    </div>
				    <div class="alert alert-danger">
					  <label><?php echo $_smarty_tpl->tpl_vars['_for_password']->value;?>
</label><p><?php echo $_smarty_tpl->tpl_vars['_for_password_i']->value;?>
</p>
				    </div>
			      </div>
			  </div>
		      </div>
		</div>
		<div class="col-sm-8 col-xs-12">
			<div class="import">
			      <?php if ($_smarty_tpl->tpl_vars['baglanti']->value == 1) {?>
				    <h1><?php echo $_smarty_tpl->tpl_vars['_start_setup']->value;?>
</h1>
				    <form action="insertdb.php" method="POST" class="noload">
					  <input type="hidden" name="sserver" value="<?php echo $_smarty_tpl->tpl_vars['servername']->value;?>
" />
					  <input type="hidden" name="sdbname" value="<?php echo $_smarty_tpl->tpl_vars['dbname']->value;?>
" />
					  <input type="hidden" name="susername" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" />
					  <input type="hidden" name="spassword" value="<?php echo $_smarty_tpl->tpl_vars['dbpasword']->value;?>
" />
					  <textarea type="hidden" name="config" readonly style="margin: 0px; width: 648px; height: 308px;">
<?php echo '<?php
';?>//  Db Connection
// DB
/** Veritabani Bilgileri **/
define('_DB_SERVER_', '<?php echo $_smarty_tpl->tpl_vars['servername']->value;?>
');
define('_DB_NAME_', '<?php echo $_smarty_tpl->tpl_vars['dbname']->value;?>
');
define('_DB_USER_', '<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
');
define('_DB_PASSWD_', '<?php echo $_smarty_tpl->tpl_vars['dbpasword']->value;?>
');
define('_DB_PREFIX_', '');
define('_MYSQL_ENGINE_', 'InnoDB');
$user = _DB_USER_;
$password = _DB_PASSWD_;
try {
    $db = new PDO('mysql:host='._DB_SERVER_.';dbname='._DB_NAME_.'', $user , $password);
	$db->query("SET CHARACTER SET utf8");
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

// For Login
if(isset($_SESSION['login'])){
		$success = '';
		$login = $_SESSION["username"];
		$admin_inf = $db->query('SELECT * FROM admin Where email = "'.$login.'"');
		foreach ($admin_inf as $row)
		{
		  $admin_id = $row['admin_id'];
		  $admin_email = $row['email'];
		  $admin_name = $row['name_surname'];
		  $admin_username = $row['username'];
		  $admin_city = $row['city'];
		  $admin_old = $row['old'];
		  $admin_password = $row['password'];
		}
		
		$old = date('Y')-$admin_old;

//Connect language for get active language
  $language = $db->query("SELECT * FROM language WHERE language_active = 1");
  $languages = $db->query("SELECT * FROM language");
  
  foreach($language as $langs)
  {
    $lang = $langs["language_name"];
  }

$smarty->assign(array(
	  "admin_city"	 	=> $admin_city,
	  "admin_email" 	=> $admin_email,
	  "admin_id" 		=> $admin_id,
	  "admin_name" 		=> $admin_name,
	  "admin_old" 		=> $admin_old,
	  "admin_password" 	=> $admin_password,
	  "admin_username" 	=> $admin_username,
	  "languages" 		=> $languages,
	  "old" 		=> $old,

));

}
<?php echo '?>';?>
					  
					  </textarea><br /><br />
					  <button type="submit" class="btn btn-success"><?php echo $_smarty_tpl->tpl_vars['_start_setup']->value;?>
</button>
				    </form>
			      <?php }?>
			</div>
			<div class="addinfo" style="display:none">
			      <h1><?php echo $_smarty_tpl->tpl_vars['_your_infs']->value;?>
</h1>
			      <form action="writeinfo.php" method="POST" class="noload">
				    <div class="form-group">
					  <label ><?php echo $_smarty_tpl->tpl_vars['_email']->value;?>
 *</label>
					  <input type="email" class="form-control" name="email" />
				    </div>
				    <div class="form-group">
					  <label ><?php echo $_smarty_tpl->tpl_vars['_password']->value;?>
 *</label>
					  <input type="text" class="form-control" name="password" />
				    </div>
				    <div class="form-group">
					  <label ><?php echo $_smarty_tpl->tpl_vars['_user_name']->value;?>
 *</label>
					  <input type="text" class="form-control" name="username" />
					  <input type="hidden" name="sserver" value="<?php echo $_smarty_tpl->tpl_vars['servername']->value;?>
" />
					  <input type="hidden" name="sdbname" value="<?php echo $_smarty_tpl->tpl_vars['dbname']->value;?>
" />
					  <input type="hidden" name="susername" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" />
					  <input type="hidden" name="spassword" value="<?php echo $_smarty_tpl->tpl_vars['dbpasword']->value;?>
" />
				    </div>
				    <div class="form-group">
					  <label ><?php echo $_smarty_tpl->tpl_vars['_name_surname']->value;?>
 *</label>
					  <input type="text" class="form-control" name="namesurname" />
				    </div>
				    <div class="form-group">
					  <label ><?php echo $_smarty_tpl->tpl_vars['_city']->value;?>
</label>
					  <input type="text" class="form-control" name="city" />
				    </div>
				    <div class="form-group">
					  <label ><?php echo $_smarty_tpl->tpl_vars['_date']->value;?>
</label>
					  <input type="date" class="form-control" name="old" />
				    </div>
				    <button type="submit" name="datebase" class="btn btn-success"><?php echo $_smarty_tpl->tpl_vars['_send_infs']->value;?>
</button>
			      </form>
			</div>
			
		</div>
	  </div>
    </div>
    <div class="work-inf alert alert-info" style="display:none"></div>
  </body>
  <?php echo $_smarty_tpl->getSubTemplate ('themes/default/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</html><?php }
}
?>