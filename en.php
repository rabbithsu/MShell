<?php
// get contents of a file into a string
$filename = "nc_w.exe";
$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename));
fclose($handle);

//$f = readfile('nc_w.exe', 'r');
echo '<br><br><br><br><br>';
$compressed   = base64_encode(gzdeflate($contents));
echo $compressed;
?>