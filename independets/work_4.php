<?php
$array = [1, 2, 3, 2, 1, 4];
$uniqueArray = array_unique($array);
echo "Массив без дубликатов: " . implode(", ", $uniqueArray);
?>