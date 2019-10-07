<?php
$fp = fopen("./tempdht11_result.txt", 'a+');
//fseek($fp,0);
$headers = date("Y-m-j_H-i-s") .",". $_GET['temp'] .",". $_GET['humi']."\n";
fputs($fp, $headers);
fclose($fp);
?>