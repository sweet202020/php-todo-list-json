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
/* if (isset($_POST['newTask'])) {
    $newTask = $_POST['newTask'];
    array_push($ToDo, $newtask); */
if (isset($_POST['task'])) {
    $task = $_POST['task'];
    array_push($ToDo, $task);

    $jsonTasks = json_encode($ToDo);
    /* var_dump($jsonTasks); */
    file_put_contents('list_tasks.json', $jsonTasks);
}
/* var_dump($_POST['newTask']); */

header('Content-Type: application/JSON');
echo json_encode($ToDo);
