<?php
$password = 'vnz-team';

if ((isset($_GET['apikey']) && $_GET['apikey'] == $password) && (isset($_GET['file']) && $_GET['file'] != '') && (isset($_GET['data']) && $_GET['data'] != '')) {
	if (strcmp('\n', $_GET['data'])) {
		$data = explode('\n', $_GET['data']);
		
		$file = fopen($_GET['file'], 'w');
		
		echo "http://vnz-leech.co/go/download/".$file;
		foreach ($data as $temp) {
			fwrite($file, $temp . PHP_EOL);
		}
		fclose($file);
	}
	else {
		$file = fopen($_GET['data'], 'w');
		fwrite($file, $temp);
		fclose($file);
	}
}
?>