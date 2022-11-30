<?php
/* $ToDo = [
    'learn html',
    'learn css',
    'learn boostrap',
    'learn js'
]; */

$ToDo_string = file_get_contents('list_tasks.json');
/* var_dump($ToDo_string); */
$ToDo = json_decode($ToDo_string);
/* var_dump($ToDo); */
header('Content-Type: application/JSON');
echo json_encode($ToDo);
