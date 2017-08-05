<?php
$account = array(
    
    
    'rapidgator.net' => array(
        'accounts' => array(
            'mrcub1@yahoo.com:coolman01',
            'stephane.pointin@free.fr:esteban',
            'pharoa44@hotmail.com:azerty'
        )
    )
);
list($user, $pass) = explode(':', $account['rapidgator.net']['accounts'][rand(0, count($account['rapidgator.net']['accounts']) - 2)]);

$data  = file_get_contents("https://rapidgator.net/api/user/login?username=" . $user . "&password=" . $pass);
$page  = @json_decode($data, true);
$data1 = "sid=" . $page['response']['session_id'];
$data2 = base64_encode($data1);

$password = 'happy';
$encode   = array(
    'c2lkPTk3MXJnZzFvNWtzY2RjNHA2YmVhcGpkam0y',
    $data2
);
$encode   = $encode[rand(0, count($encode) - 1)];

$file_not_download = array(
    'bot.php',
    'index.php',
    'config.php',
    'functions.php',
    'get.php',
    'download.php',
    'xml/info.xml',
    'xml/hostlist.xml',
    'xml/adminlist.xml',
    'xml/managerlist.xml',
    'xml/viplist.xml'
);
if ((isset($_GET['apikey']) && $_GET['apikey'] == $password) && (isset($_GET['file']) && $_GET['file'] != '')) {
    if (!in_array($_GET['apikey'], $file_not_download)) {
        if (file_exists($_GET['file'])) {
            $file = fopen($_GET['file'], 'r');
            while (!feof($file)) {
                
                $line_of_text = fgets($file);
                
                echo <<<PAGE
            <!DOCTYPE HTML>
            <html>
            <head>
            	<meta http-equiv="content-type" content="text/html" />
            	<meta name="author" content="Happy" />
				<meta http-equiv='refresh' content='10;URL=http://vnz-leech.com'>
            
            	<title>VNZ-LEECH.COM - Downloading....</title>
                <style type="text/css">
                    body{
                        font-family: Arial;
                    }
                    #Happy_img{
                        margin-top: 10%;
                    }
                    #Happy_status{
                        font-size: 30px;
                        margin-top: 20px;
                    }
                </style>
                <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
            </head>
            
            <body>
                <div style="text-align: center;">
    				<div id="Happy_img"><img src="http://i.imgur.com/yukOz6S.png" /></div>
    				<div id="Happy_status">Generate download link. Please wait...</div>
    			</div>
                
                <script type="text/javascript">
                    var keyStr = "ABCDEFGHIJKLMNOP" +
                       "QRSTUVWXYZabcdef" +
                       "ghijklmnopqrstuv" +
                       "wxyz0123456789+/" +
                       "=";
                    function VNZLEECHHashDecode(input) {
                         var output = "";
                         var chr1, chr2, chr3 = "";
                         var enc1, enc2, enc3, enc4 = "";
                         var i = 0;
                         input = input.replace(/[^A-Za-z0-9\+\/\=]/g, "");
                         do {
                            enc1 = keyStr.indexOf(input.charAt(i++));
                            enc2 = keyStr.indexOf(input.charAt(i++));
                            enc3 = keyStr.indexOf(input.charAt(i++));
                            enc4 = keyStr.indexOf(input.charAt(i++));
                    
                            chr1 = (enc1 << 2) | (enc2 >> 4);
                            chr2 = ((enc2 & 15) << 4) | (enc3 >> 2);
                            chr3 = ((enc3 & 3) << 6) | enc4;
                    
                            output = output + String.fromCharCode(chr1);
                    
                            if (enc3 != 64) {
                               output = output + String.fromCharCode(chr2);
                            }
                            if (enc4 != 64) {
                               output = output + String.fromCharCode(chr3);
                            }
                    
                            chr1 = chr2 = chr3 = "";
                            enc1 = enc2 = enc3 = enc4 = "";
                    
                         } while (i < input.length);
                         return unescape(output);
                    }
                    $(document).ready(function(){
                        $.get('http://rapidgator.net/api/file/download?url=$line_of_text&'+VNZLEECHHashDecode('$encode'), function(res){
                            console.log('Oops! stop....');
                            if (res.response_status == 200) {
    							$('#Happy_img img').attr('src', 'http://i.imgur.com/slOSs4M.png');
                                $('#Happy_status').text('Completed. Starting downloads...');
    							window.location.href = res.response.url;
    						}else{
                                $('#Happy_img img').attr('src', 'http://i.imgur.com/1uBVxKs.png');
                                $('#Happy_status').html('Can\'t get download link please try F5 again <br />Thank you!').css('color', 'red');
    						}
                        }, 'json').fail(function(e){
                            $('#Happy_img img').attr('src', 'http://i.imgur.com/1uBVxKs.png');
                            $('#Happy_status').html('Can\'t get download link please try F5 again<br />Thank you!').css('color', 'red');    
                        });
                    });
                    
                    
                </script>
            </body>
            </html>
            
PAGE;
                
                
                
                
                
            }
            fclose($file);
            
        } else {
            echo <<<PAGE
            <!--
Author: Happy
Author URL: http://ccmnr.net
-->
<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=windows-1252">
<meta http-equiv='refresh' content='5;URL=http://vnz-leech.com'>
		<title>VNZ-Team | Home :: VNZ-LEECH.COM</title>
		<meta name="keywords" content="enerator Premium Link Uploaded, Rapidgator, Netload, Filepost, Filefastory, Novafile, Fshare, 4shared.....">
		<link href="hitpro/style.css" rel="stylesheet" type="text/css" media="all">
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
				<img src="hitpro/error-img.png" title="error">
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

            
PAGE;
            exit();
        }
    } else {
        echo <<<PAGE
            <!--
Author: Happy
Author URL: http://ccmnr.net
-->
<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=windows-1252">
<meta http-equiv='refresh' content='5;URL=http://vnz-leech.com'>
		<title>VNZ-Team | Home :: VNZ-LEECH.COM</title>
		<meta name="keywords" content="enerator Premium Link Uploaded, Rapidgator, Netload, Filepost, Filefastory, Novafile, Fshare, 4shared.....">
		<link href="hitpro/style.css" rel="stylesheet" type="text/css" media="all">
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
				<img src="hitpro/error-img.png" title="error">
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

            
PAGE;
        exit();
    }
} else {
    echo <<<PAGE
            <!--
Author: Happy
Author URL: http://ccmnr.net
-->
<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=windows-1252">
<meta http-equiv='refresh' content='5;URL=http://vnz-leech.com'>
		<title>VNZ-Team | Home :: VNZ-LEECH.COM</title>
		<meta name="keywords" content="enerator Premium Link Uploaded, Rapidgator, Netload, Filepost, Filefastory, Novafile, Fshare, 4shared.....">
		<link href="hitpro/style.css" rel="stylesheet" type="text/css" media="all">
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
				<img src="hitpro/error-img.png" title="error">
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

            
PAGE;
}
?>