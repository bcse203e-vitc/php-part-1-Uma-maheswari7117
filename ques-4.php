<?php
$x = array(1, 2, 3, 4, 5);
print_r($x);
unset($x[3]);
$x = array_values($x);
print_r($x);
?>
