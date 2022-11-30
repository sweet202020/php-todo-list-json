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
if (isset($_POST['newTask'])) {
    array_push($ToDo, $_POST['newTask']);

    $jsonTasks = json_encode($ToDo);
    /* var_dump($jsonTasks); */
    file_put_contents('list_tasks.json', $jsonTasks);
}
/* var_dump($_POST['newTask']); */

header('Content-Type: application/JSON');
echo json_encode($ToDo);
