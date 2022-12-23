<?php
$tasks = file_get_contents("../tasks.json");

$tasks = json_decode($tasks, true);

$newtask = [
    "text" => $_POST["text"],
    "done" => "false"
];

$tasks[] = $newtask;

$tasks_json = json_encode($tasks, JSON_PRETTY_PRINT);

file_put_contents("../tasks.json", $tasks_json);

header("Content-Type: application/json");

echo json_encode($newtask);

?>