<?php
class Check
{
	public static function isCleanHtml($html)
	{
		$events = 'onmousedown|onmousemove|onmmouseup|onmouseover|onmouseout|onload|onunload|onfocus|onblur|onchange';
		$events .= '|onsubmit|ondblclick|onclick|onkeydown|onkeyup|onkeypress|onmouseenter|onmouseleave|onerror|onselect|onreset|onabort|ondragdrop|onresize|onactivate|onafterprint|onmoveend';
		$events .= '|onafterupdate|onbeforeactivate|onbeforecopy|onbeforecut|onbeforedeactivate|onbeforeeditfocus|onbeforepaste|onbeforeprint|onbeforeunload|onbeforeupdate|onmove';
		$events .= '|onbounce|oncellchange|oncontextmenu|oncontrolselect|oncopy|oncut|ondataavailable|ondatasetchanged|ondatasetcomplete|ondeactivate|ondrag|ondragend|ondragenter|onmousewheel';
		$events .= '|ondragleave|ondragover|ondragstart|ondrop|onerrorupdate|onfilterchange|onfinish|onfocusin|onfocusout|onhashchange|onhelp|oninput|onlosecapture|onmessage|onmouseup|onmovestart';
		$events .= '|onoffline|ononline|onpaste|onpropertychange|onreadystatechange|onresizeend|onresizestart|onrowenter|onrowexit|onrowsdelete|onrowsinserted|onscroll|onsearch|onselectionchange';
			

		return (!preg_match('/<[ \t\n]*script/ui', $html) && !preg_match('/<.*('.$events.')[ \t\n]*=/ui', $html) && !preg_match('/<[\s]*(i?frame|form|input|embed|object)/ims', $html)  && !preg_match('/.*script\:/ui', $html));
	}
	
// 	Karakter Sayısı
	public static function strlen($str, $encoding = 'UTF-8')
	{
		if (is_array($str))
			return false;
		$str = html_entity_decode($str, ENT_COMPAT, 'UTF-8');
		if (function_exists('mb_strlen'))
			return mb_strlen($str, $encoding);
		return strlen($str);
	}
// 	Clear Tag
	public static function cleartag($yazilan)
	{
		return preg_replace("/[^\p{L}\p{N}.: ]/u", ' ', $yazilan);
	}
	
// 	For User
	public static function username($gelen)
    {
    	return preg_match('/^[_a-z0-9-]+$/ui', $gelen);
    }
    
//     For Password
	public static function password($passwd)
	{
		return preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[0-9]).*$#", $passwd);
	}
	
// 	For Email
	public static function email($email)
	{
		return preg_match('/^[a-z\p{L}0-9!#$%&\'*+\/=?^`{}|~_-]+[.a-z\p{L}0-9!#$%&\'*+\/=?^`{}|~_-]*@[a-z\p{L}0-9]+(?:[.]?[_a-z\p{L}0-9-])*\.[a-z\p{L}0-9]+$/ui', $email);
	}

	public static function isSubmit($submit)
	{
		return (
			isset($_POST[$submit]) || isset($_POST[$submit.'_x']) || isset($_POST[$submit.'_y'])
			|| isset($_GET[$submit]) || isset($_GET[$submit.'_x']) || isset($_GET[$submit.'_y'])
		);
	}
	
	
	public static function getValue($key, $default_value = false)
	{
		if (!isset($key) || empty($key) || !is_string($key))
			return false;
		$ret = (isset($_POST[$key]) ? $_POST[$key] : (isset($_GET[$key]) ? $_GET[$key] : $default_value));

		if (is_string($ret) === true)
			$ret = Check::cleartag(urldecode(preg_replace('/((\%5C0+)|(\%00+))/i', '', urlencode($ret))));
		return !is_string($ret)? $ret : stripslashes($ret);
	}
	
	
	public static function getIsset($key)
	{
		if (!isset($key) || empty($key) || !is_string($key))
			return false;
		return isset($_POST[$key]) ? true : (isset($_GET[$key]) ? true : false);
	}
	
	
// 	For Date
   public static function dateCheck($date)
	{
		return (bool)preg_match('/^([0-9]{4})-((0?[0-9])|(1[0-2]))-((0?[0-9])|([1-2][0-9])|(3[01]))( [0-9]{2}:[0-9]{2}:[0-9]{2})?$/', $date);
	}
	
// 	For Image Type
	public static function imagetype($type)
	{
		return preg_match('/^[a-zA-Z0-9_ -]+$/', $type);
	}
	
//	For include tax
	public static function totalPrice($fiyat, $vergi)
	{
	  $addAll = ($fiyat*$vergi)/100;
	  return $fiyat+$addAll;
	}

//For replace tr
	function replace_tr($text) {
	    $text = trim($text);
	    $search = array('Ç','ç','Ğ','ğ','ı','İ','Ö','ö','Ş','ş','Ü','ü',' ');
	    $replace = array('c','c','g','g','i','i','o','o','s','s','u','u','-');
	    $new_text = str_replace($search,$replace,$text);
	    return $new_text;
	}
	
//For replace tr date
	function datetr($text) {
	    $text = trim($text);
	    $search = array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday', 'January','February','March','April','May','June','July','August','September','October','November','December','01','02','03' ,'04' ,'05' ,'06' ,'07' ,'08' ,'09' ,'10' ,'11' ,'12',' ');
	    $replace = array('Pazartesi','Salı','Çarşamba','Perşembe','Cuma','Cumartesi','Pazar', 'Ocak','Şubat','Mart','Nisan','Mayıs','Haziran','Temmuz','Ağustos','Eylül','Ekim','Kasım','Aralık', 'Ocak','Şubat','Mart','Nisan','Mayıs','Haziran','Temmuz','Ağustos','Eylül','Ekim','Kasım','Aralık',' ');
	    $new_text = str_replace($search,$replace,$text);
	    return $new_text;
	}

//	For find tax
	public static function totalTax($fiyat, $vergi)
	{
	  $tax = $fiyat*$vergi/100;
	  return $tax;
	}

//	Make invoice no
	public static function invoiceno($invoiceid, $faturaadi)
	{
	  $kacharf = strlen($invoiceid);
	  @$kacsifir = 6-$kacharf;
	  for($i = 0; $i <= $kacsifir; $i++)
	  {
	    $faturaadi .= "0";
	  }
	  $faturaadi .= $invoiceid;
	  return $faturaadi;
	}

//	For find total price
	public static function total($fiyat, $vergi, $kar, $miktar)
	{
	  $total = ($fiyat)+($fiyat*$vergi)/(100)+($fiyat*$kar)/(100);
	  return $total*$miktar;
	}
	
	function curPageURL() 
	{
	    $pageURL = 'http';
	    $pageURL .= "://";
	    if ($_SERVER["SERVER_PORT"] != "80") {
	      $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	    } else {
	      $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	    }
	    return $pageURL;
	}

}