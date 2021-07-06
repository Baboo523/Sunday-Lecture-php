<?php
//set timezone
date_default_timezone_set('Asia/Karachi');
$time = time();
echo $time;
echo "<br>";
//echo date('d-m-Y h:i:s',$time);
echo $day = date('D',$time);
?>