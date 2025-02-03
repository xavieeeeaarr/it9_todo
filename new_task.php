<?php 
    session_start();

    $method = $_SERVER['REQUEST_METHOD'];

    if($method = 'POST'){
        $task = $_POST['Task'];

        echo $task;
    }





