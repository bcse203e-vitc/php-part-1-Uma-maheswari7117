<?php
$color = array('white', 'green', 'red');

echo implode(", ", $color) . ",<br>";
$rotated = array_slice($color, 1);
$rotated[] = $color[0];
foreach ($rotated as $c) {
    echo "• $c<br>";
}
?>
