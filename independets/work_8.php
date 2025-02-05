<?php
$array = [5, 3, 8, 1, 4];
sort($array);
echo "Отсортированный массив по возрастанию: " . implode(", ", $array) . "\n";
rsort($array);
echo "Отсортированный массив по убыванию: " . implode(", ", $array);
?>