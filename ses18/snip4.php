<?php
$connect_mysql = mysqli_connect("localhost",'root',"");
$rwsult = mysqli_query($connect_mysql,"SELECT * FROM Employees");
$rows = $result->num_rows;
echo "The table contains $rows rows.<br>";
mysqli_close($connect_mysql);
echo "the connection to the database has been closed.";
?>
