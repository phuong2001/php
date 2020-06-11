<?php
$counter=0;
while ($counter<5){
    $counter++;
    if($counter==3){
        echo "Continues the loop<br>";
        $counter;
    }
    echo "$counter<br>";
}
echo "The loop ends here";
?>
