<?php
$cookieval = $_COOKIE['uname'];
?>
<html>
<body>
<?php
if (isset($cookieval))
{
    echo "Welcome $cookieval";
}
else
{
    echo "you need to log in";
}
?>
</body>
</html>
