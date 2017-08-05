<Title>Bot Cleanning...</Title>
<!-- xml version="1.0" encoding="utf-8" --> 
Đã dọn dẹp sạch sẽ. Clean finished
<?php 
error_reporting(0);

$time_now = time() - 360*60;

###### FUNCTION DELETE ALL FILES AND SUBFOLDERS IN USER #######
$files = glob('download/*'); // get all file names
foreach($files as $file){ // iterate files
  if(is_file($file))
    if (filemtime($file) <= $time_now) unlink($file); // delete file
}
###### FUNCTION DELETE ALL FILES AND SUBFOLDERS IN USER #######

?>