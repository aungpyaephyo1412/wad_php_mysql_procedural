<?php
session_start();
global $conn;
require_once 'core/connection.php';
require_once 'core/functions.php';

if ($_SERVER['REQUEST_METHOD'] === "POST"){
    $id = $_POST['id'];
    $sql = "DELETE FROM bankers WHERE id = {$id}";
    if (mysqli_query($conn,$sql)){
        $_SESSION['status'] = [
            'message' => 'List deleted'
        ];
        header('Location:list-index.php');
    }
}