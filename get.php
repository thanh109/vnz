<html><head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>File Download | VNZ-Leech</title>

	<link rel="stylesheet" href="style.css" />
</head><body><center><div id="form-container">
<font color="green" size="5">List Link Download<sub> vnz-leech.com</sub></font></br></br></br>
<?php
$password = 'vnz-team';
$file_not_download = array('bot.php', 'index.php', 'config.php', 'functions.php', 'get.php', 'download.php', 'xml/info.xml', 'xml/hostlist.xml', 'xml/adminlist.xml', 'xml/managerlist.xml', 'xml/viplist.xml');
if ((isset($_GET['apikey']) && $_GET['apikey'] == $password) && (isset($_GET['file']) && $_GET['file'] != '')) {
	if (!in_array($_GET['apikey'], $file_not_download)) {	
		if (file_exists($_GET['file'])) {
			$file = fopen($_GET['file'], 'r');
			while (!feof($file)) {
				
				echo $line_of_text = fgets($file). '<br>';
				
			}
			fclose($file);

		}
		else {
			echo 'File Not Found';
			exit();
		}
	}
	else {
		echo 'File Not Read';
		exit();
	}
}
?>
</div></center></body></html>