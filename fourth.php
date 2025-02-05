<?php
$colors = ['Красный', 'Зеленый', 'Синий'];
array_push($colors, 'Желтый');
var_dump($colors);
$lastColor = array_pop($colors);
var_dump($colors);
?>