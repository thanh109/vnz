<?php
$localdir = 'http://'.$_SERVER['HTTP_HOST'];
if (isset($_GET['file']) && isset($_GET['apikey'])){
?>
<!DOCTYPE html>
<html lang="en" style="height:100%;">
				<head>
				<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
				<meta name="googlebot" content="noindex">
				<script type="text/javascript" src="<?php echo $localdir ?>/lib/jquery.min.js"></script>
				<script type="text/javascript" src="<?php echo $localdir ?>/lib/jquery.tipsy.js"></script>
				
				<link rel="stylesheet" href="<?php echo $localdir ?>/lib/bootstrap.min.css">
				<link rel="stylesheet" href="<?php echo $localdir ?>/lib/bootstrap-glyphicons.css">
				<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
				<link rel="icon" href="/favicon.ico" type="image/x-icon">
				<link href="<?php echo $localdir ?>/lib/css-family=Lato.css" rel='stylesheet' type='text/css'>
				<link href="<?php echo $localdir ?>/lib/style.css" rel='stylesheet' type='text/css'>
				<title>Download Multilink - Folder</title>
							</head>
			<body id="the_body" style="margin:0; height:100%; font-family: 'Lato', sans-serif;">
				<div class="container">
	<div class="main">
		<div class="header">
			
<span class="top_head_text"><img src="<?php echo $localdir ?>/lib/logo1.png" alt='VNZ-LEECH.COM'/></span>
		</div>

		<div class="jumbotron">
			<div class="jumbotron-left">
				<p class="file-hero">
					<div style="text-align: center; line-height:30px;"><font style="font-size: 30px; font-weight: bold; color: rgb(255, 255, 255);"><img src="<?php echo $localdir ?>/lib/logo-complete2.png" alt='download-logo'/> Download Your File</font></div>
				</p>
				<div class="file">
					<div class="file-img">
						<img src="<?php echo $localdir ?>/lib/file.png" alt='file'/>
					</div>
					<div id="linksdown" class="file-text">
						
								
								<?php
$password = 'happy';
$file_not_download = array('bot.php', 'index.php', 'config.php', 'functions.php', 'get.php', 'download.php', 'xml/info.xml', 'xml/hostlist.xml', 'xml/adminlist.xml', 'xml/managerlist.xml', 'xml/viplist.xml');
if ((isset($_GET['apikey']) && $_GET['apikey'] == $password) && (isset($_GET['file']) && $_GET['file'] != '')) {
	if (!in_array($_GET['apikey'], $file_not_download)) {	
		if (file_exists($_GET['file'])) {
			$file = fopen($_GET['file'], 'r');
			while (!feof($file)) {
				
				echo $line_of_text = fgets($file);
				
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
						
						<p class="file-value">
							Bạn đang download file từ cbox vnz-leech.com - Bot : VNZ.Team
						</p>
					</div>
					<div class="clearfix"></div>
				</div>
				
								<center>
					
				</center>
				
<p class="services">

					
					</p>
			</div>
							<div id="showlistlink" align="center"><div id="listlinks" align="center" style="display: none;"></div></div>
			<div class="jumbotron-right">
				<img src="<?php echo $localdir ?>/lib/plane.png" alt='plan'/>
				
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="steps">
			<p class="steps-hero">
				How's it work?
			</p>
			<div class="step-section">
				<div class="section-img">
					<img src="<?php echo $localdir ?>/lib/surveu.png" alt='cick link'/>
				</div>
				<div class="section-text">
					<p class="section-text-hero">
						1
					</p>
					<p class="section-text-zero">
						Click Link Download!
					</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="step-section">
				<div class="section-img">
					<img src="<?php echo $localdir ?>/lib/unlock.png" alt='save'/>
				</div>
				<div class="section-text">
					<p class="section-text-hero">
						2
					</p>
					<p class="section-text-zero">
						Click yes/save on IDM or browser
					</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="step-section" style="margin-right:0;">
				<div class="section-img">
					<img src="<?php echo $localdir ?>/lib/start.png" alt='start'/>
				</div>
				<div class="section-text">
					<p class="section-text-hero">
						3
					</p>
					<p class="section-text-zero">
						Your download will then start!
					</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="footer">
			<div class="footer-left">
				<p>
					Copyright 2015
				</p>
			</div>
			<div class="footer-right">
				<ul class="footer-nav">
					<li>
						<a href="http://ccmnr.net/" onclick="$('#link_terms').show('fast');">Happy</a>
					</li>
					<li>
						|
					</li>
					<li>
					<a href="http://vnz-leech.com/" onclick="$('#link_privacy').show('fast');">VNZ-LEECH</a>
					</li>
					
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>	
</body>
		</html>
<?
}else echo <<<hit
<!--
Author: Happy
Author URL: http://ccmnr.net
-->
<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=windows-1252">
<meta http-equiv="refresh" content="5;URL=http://vnz-leech.com">
		<title>VNZ-LEECH Team | Home :: VNZ-LEECH.COM</title>
		<meta name="keywords" content="enerator Premium Link Uploaded, Rapidgator, Netload, Filepost, Filefastory, Novafile, Fshare, 4shared.....">
		<link href="$localdir/hitpro/style.css" rel="stylesheet" type="text/css" media="all">
	</head>
	<body>



		<!--start-wrap--->
		<div class="wrap">
			<!---start-header---->
				<div class="header">
					<div class="logo">
						<h1><a href="#">VNZ-LEECH</a></h1>
					</div>
				</div>
				<div class="ad728x90" style="text-align:center">
				
		   </div>
			<!---End-header---->
			<!--start-content------>
			<div class="content">
				<img src="$localdir/hitpro/error-img.png" title="error">
				<p><span><label>O</label>pps.....</span>You Requested the page that is no longer There.</p>
				<div class="ad728x90" style="text-align:center">
				
		   </div>
				<a href="http://vnz-leech.com">Back To Home</a>
				<div class="copy-right">
					<p>© All rights Reserved | Designed by <a href="http://ccmnr.net/">Happy</a></p>
				</div>
   			</div>
			<!--End-Cotent------>
		</div>
		<!--End-wrap--->
	


</body></html>
hit;
?>