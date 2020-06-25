<?php
error_reporting(0);
$logcookie=$_COOKIE['fullname'];
setcookie('fullname');
echo "<html>";
echo "<body>";
echo "Welcome $logcookie";
echo "</body>";
echo "</html>";
?>