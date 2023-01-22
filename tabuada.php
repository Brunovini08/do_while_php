<?php
$num = $_POST['num'];
$count = 0;

do {
    echo $num ." x ". $count. " = ". ($num * $count). "<br/>";
    $count ++;
} while ($count <= 10);

?>