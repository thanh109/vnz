<?php
ob_start("ob_gzhandler");
error_reporting (E_ALL);
error_reporting(0); 
date_default_timezone_set('Asia/Ho_Chi_Minh');
if(isset($_POST['logout']) && $_POST['logout'] == "Logout")	  setcookie('PHEPSSID',null, 1);
elseif(isset($_POST['user']) && isset($_POST['pass']))
{
	if(login($_POST['user'],$_POST['pass'])) {
		$username = $_POST['user'];
		$username_encode = urlencode($_POST['user']);
		$password_encode = urlencode($_POST['pass']);
		$ch = @curl_init();
		curl_setopt($ch, CURLOPT_URL, "http://www.cbox.ws/admin.php?preproc=login");
		curl_setopt($ch, CURLOPT_HEADER, FALSE);
		curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 5.1; rv:12.0) Gecko/20100101 Firefox/12.0');
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, "uname=getvn-zoom&pword=quansky456789");
		curl_setopt ($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
		curl_setopt ($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_exec($ch);
		curl_setopt($ch, CURLOPT_URL, "http://www.cbox.ws/admin_l_users.php?srch=".$username_encode."&srchin=nme&find=%20Find%20");
		curl_setopt ($ch, CURLOPT_TIMEOUT, 20);
		curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 10);
		$data = curl_exec($ch);
		preg_match_all("/<tr(.*?)<\/tr>/s",$data, $matches, PREG_PATTERN_ORDER);
		$listmem = array_slice($matches, 0, count($matches));

		$login_success = false;
		for ($i=1; $i<count($listmem[0]); $i++) {
			preg_match('/value="(.*)" /',$listmem[0][$i], $match);
			if (urlencode($match[1])==$username_encode) {
				if (preg_match('/<font color="red">admin<\/font>/',$listmem[0][$i])) {
					setcookie("INFO",$username,time() + 3600 * 24 * 7);
					setcookie("PHEPSSID",md5($password_encode),time() + 3600 * 24 * 7);
					setcookie("Rank",md5($password_encode."1"),time() + 3600 * 24 * 7);
					$login_success = true;
					break;
				}
			}
		}
	
		if ($login_success == false) {
			$content = curl("http://vnz-leech.com/vip/group.php?r=".mt_rand(),"","",0);
			preg_match_all("/var(.*?)=(.*?)\[(|(.*?))];/s", $content, $matches, PREG_SET_ORDER);

			foreach ($matches as $key => $value) {
				if (stristr(trim($value[1]),"gvip1")) { // VIP MEMBER
					$string = strtolower(trim($value[4]));
					$array = substr($string, 1, strlen($string)-2);
					$gvip1 = multiexplode( array('","',"','","\",'","',\""), $array );
					if (in_array(strtolower($username),$gvip1)) {
						setcookie("INFO",$username,time() + 3600 * 24 * 7);
						setcookie("PHEPSSID",md5($password_encode),time() + 3600 * 24 * 7);
						$login_success = true;
						break;
					}
				}
				elseif (stristr(trim($value[1]),"ggold")) { // GGOLD
					$string = strtolower(trim($value[4]));
					$array = substr($string, 1, strlen($string)-2);
					$ggold = multiexplode( array('","',"','","\",'","',\""), $array );
					if (in_array(strtolower($username),$ggold)) {
						setcookie("INFO",$username,time() + 3600 * 24 * 7);
						setcookie("PHEPSSID",md5($password_encode),time() + 3600 * 24 * 7);
						$login_success = true;
						break;
					}
				}
			}
		}
		if (!$login_success) die("<SCRIPT language='Javascript'>alert(\"This Service Only For VIP Only. Please donate to use this service !\");</SCRIPT><SCRIPT language='Javascript'> history.go(-1)</SCRIPT>");	
	}
    else
		die("<SCRIPT language='Javascript'>alert(\"Wrong username, password ! Please try again.\");</SCRIPT><SCRIPT language='Javascript'> history.go(-1)</SCRIPT>");
}

function login($username,$password)
{
   $data  = curl("http://www4.cbox.ws/box/?boxid=4240872&boxtag=soigia&sec=profile&n=".$username."&k=0000000000000000000000000000000000000000","","logpword=".$password."&sublog=+Log+in+");
   if(stristr($data,"You are logged in as")) 
   return TRUE;
   else return FALSE;
}
function curl($url, $cookies, $post, $header = 1)
{
    $ch = @curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HEADER, $header);
    if($cookies) curl_setopt($ch, CURLOPT_COOKIE, $cookies);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; rv:5.0) Gecko/20100101 Firefox/5.0');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_REFERER,$url);
    if($post)
    {
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    }
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 20);
    $page = curl_exec($ch);
    curl_close($ch);
    return $page;
}

function multiexplode($delimiters, $string) {
	$ready = str_replace($delimiters, $delimiters[0], $string);
	$launch = explode($delimiters[0], $ready);
	return  $launch;
}
echo "<SCRIPT language='Javascript'> history.go(-1)</SCRIPT>";	
//header("<SCRIPT language='Javascript'> history.go(-1)</SCRIPT>");
ob_end_flush();
?>