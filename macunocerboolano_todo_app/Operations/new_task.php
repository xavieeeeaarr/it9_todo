<?php
session_start();

$method = $_SERVER['REQUEST_METHOD'];

if ($method = 'POST') {

    $task = $_POST['Task'];

    $data = [
        'name' => $task,
        'status' => 'Pending'
    ];
    array_push($_SESSION['tasks'], $data);



    header("location: ../index.php");
}
