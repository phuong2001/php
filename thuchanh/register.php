<?php
$hn = '127.0.0.1';
$un = 'root';
$pw = '';
$db = 'phuong';

$conn = new mysqli($hn,$un,$pw,$db);
if($conn->connect_errno)
     die("Fatal Error");
echo "<html>";
echo "<body>";
echo "<form  method='post' action='register.php''>";
echo "<pre>";
echo "name<br>";
echo "<input name='fullname' type='text'> <br>";
echo "username<br>";
echo "<input name='username' type='text'><br> ";
echo "email<br>";
echo "<input name='email' type='text'><br> ";
echo "password<br>";
echo "<input name='password' type='password'><br><br> ";
echo "<input type='submit' value='submit'><br>";
echo "</pre>";
echo "</form>";
echo "</body>";
echo "</html>";

if(isset($_POST['submit'])) {
    $fn = mysqli_real_escape_string($conn,$_POST['fullname']);
    $em = mysqli_real_escape_string($conn,$_POST['email']);
    $un = mysqli_real_escape_string($conn,$_POST['username']);
    $pw= hash('123' ,$_POST['password']);
    $query = "INSERT INTO user (fullname,email,username,password) VALUE " . " ('fn','em','un','pw')";
     $result = $conn->query($query);
     setcookie('user',$un,$fn);
}


?>
