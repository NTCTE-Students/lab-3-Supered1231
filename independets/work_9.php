<?php
$array = [1, 2, 3, 4, 5];
$elementToFind = 3;
$key = array_search($elementToFind, $array);
if ($key !== false) {
    echo "Элемент $elementToFind найден по индексу: $key";
} else {
    echo "Элемент $elementToFind не найден в массиве.";
}
?>