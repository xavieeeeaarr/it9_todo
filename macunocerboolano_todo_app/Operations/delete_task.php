<?php
session_start();

$method = $_SERVER['REQUEST_METHOD'];

if ($method == 'POST') {
    $id = $_POST['id'];

    if (isset($_SESSION['Task'][$id])) {
        unset($_SESSION['Task'][$id]);
    }

    header("Location: ../index.php");
    exit();
}
