<?php
error_reporting(0);
$A = $_GET['n1'];
if($A >25 and $A < 60){
    echo "truong thanh";
}else if($A >60){
    echo "cao nien";
}else if($A > 20 and $A < 25){
    echo " thanh nien";
}else if($A > 10 and $A <20){
    echo "tre vi thanh nien";
}
?>
