<?php
$info = [
    [
        'ip' => '192.0.0.0',
        'masce' => 17,
    ],
    [
        'ip' => '192.0.0.1',
        'masce' => 17,
    ],
    [
        'ip' => '192.0.0.2',
        'masce' => 17,
    ],
];
$translate = [
    'ip' => 'айпи',
    'masce' => 'маска',
];
echo '<table border="1" cellspacing="0" cellpadding="10">';
echo '<tr>';
foreach ($translate as $header) {
    echo "<th>{$header}</th>";
}
echo '</tr>';
foreach ($info as $info) {
    echo '<tr>';
    foreach ($info as $key => $value) {
        echo "<td>{$value}</td>";
    }
    echo '</tr>';
}
echo '</table>';
?>