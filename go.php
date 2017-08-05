<?php
error_reporting(0);
if (isset($_GET['go'])) {
    $link = base64_decode($_GET['go']);
	header("Location: ".$link);
die();
}
?>