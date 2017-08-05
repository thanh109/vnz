<?php
error_reporting(0);
include_once('account.php');
    $obj->acc["rapidgator.net"]['accounts'][] = $_POST['acc'];
    if(isset($_POST['btn-submit']) && is_array($obj->acc) && count($obj->acc) > 0){
		
        $str = "<?php";
		$str .= "\n";
		$str .= "\n\$account = array(";
		$str .= "\n";
		$str .= "# Example: 'accounts'	=> array('user:pass','cookie'),\n";
		$str .= "# Example with letitbit.net: 'accounts'    => array('user:pass','cookie','prekey=xxxx'),\n";
		$str .= "\n";
		foreach ($obj->acc as $host => $accounts) {
			$str .= "\n	'".$host."'		=> array(";
			
			$str .= "\n								'accounts'	=> array(";
			foreach ($accounts['accounts'] as $acc) {
				$str .= "'".$acc."',";
			}
			$str .= "),";
			$str .= "\n							),";
			$str .= "\n";
		}
		$str .= "\n);";
		
		$str .= "\n";
		$str .= "\n?>";
		$accountPath = "account.php";
		$CF = fopen ($accountPath, "w")
		or die('<CENTER><font color=red size=3>could not open file! Try to chmod the file "<B>account.php</B>" to 666</font></CENTER>');
		fwrite ($CF, $str)
		or die('<CENTER><font color=red size=3>could not write file! Try to chmod the file "<B>account.php</B>" to 666</font></CENTER>');
		fclose ($CF); 
		@chmod($accountPath, 0666);

		echo "<SCRIPT language='Javascript'>alert(\"Changed Account Succesful !\");</SCRIPT><SCRIPT language='Javascript'> history.go(-1)</SCRIPT>";   
		header("location:./add.php");
    }


 //    
//list($user, $pass) = explode(':', $account['rapidgator.net']['accounts'][rand(0, count($account['rapidgator.net']['accounts']) - 2)]);
		foreach ($account as $host => $accounts) {
			
			foreach ($accounts['accounts'] as $acc) {
				$str1 .= $acc.' ';
			}
			
		}
		list($user, $pass) = explode(':', $acc);
			$data  = file_get_contents("https://rapidgator.net/api/user/login?username=" . $user . "&password=" . $pass);
			$page  = @json_decode($data, true);
			//$data1 = $page['response']['session_id'];
			$data2  = file_get_contents("http://rapidgator.net/api/user/info?sid=" .$page['response']['session_id']);
			$page2  = @json_decode($data2, true);
			$info = array(
				'exp' => gmdate('d/m/Y',$page['response']['expire_date']),
				'bw' => $page['response']['traffic_left'],
				'rs' => $page['response']['reset_in'],
			);
			
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
	<title>VNZ-LEECH.COM</title>
<meta charset="UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
	<body>
 <div id="form-container" align="center">
         <center>   
		 
            <form action="" method="POST">
			<center>
               
                   
                        <h2><strong>Change Account RG get DLINK </strong></h2>
                 
        				 <td width="78">acc:pass :</td>
						 <td width="450"><input style="width:250px;" name="acc" type="text" id="acc" required></td>
                       
						<input style="width:100px;" class="green" type="submit" name="btn-submit" size=10 onClick="this.value='Waiting...';" value="Change">
        			<br>
        			<br>
					acc rg hiện tại có trên host:<br><br>
					<tr>
					<td><a href="#" class="myButton1"><?php echo $str1;?></a></td></tr>
					<tr><td><br><br><?php    printf('<a  class="myButton">Expire: <font color=yellow>%s</font> Bandwith left: <font color=yellow>%s</font></a>', $info['exp'],round($info['bw'] / (1024 * 1024 * 1024), 2) . ' GB'   ); ?></a><br><?php if (isset($info['rs'])) echo '<a  class="myButton">BW Reset in : '.  floor($info['rs'] / 3600).' h</a>';?></td></tr>
                
					</center>
                   
              
            </form>
			</div>
        </body>
    </html>
