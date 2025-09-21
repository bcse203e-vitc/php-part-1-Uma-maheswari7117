<?php
$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');

function changeCase($arr) {
    $lower = array_map('strtolower', $arr);
    echo "Values are in lower case.\n";
    print_r($lower);
    echo "\n";

    $upper = array_map('strtoupper', $arr);
    echo "Values are in upper case.\n";
    print_r($upper);
    echo "\n";
}

changeCase($Color);
?>
