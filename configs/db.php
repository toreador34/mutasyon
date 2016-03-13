<?php
//  Db Connection
// DB
/** Veritabani Bilgileri **/
define('_DB_SERVER_', 'localhost');
define('_DB_NAME_', 'mutasyon');
define('_DB_USER_', 'root');
define('_DB_PASSWD_', 'root');
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
?> 
