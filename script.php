<?php
$ToDo = [
    'learn html',
    'learn css',
    'learn boostrap',
    'learn js'
];

header('Content-Type: application/JSON');
echo json_encode($ToDo);
