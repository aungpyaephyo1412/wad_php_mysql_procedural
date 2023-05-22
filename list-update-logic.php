<?php

require_once 'core/connection.php';
require_once 'core/functions.php';

if ($_SERVER['REQUEST_METHOD'] === "POST"){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $money = $_POST['money'];
    $sql = "UPDATE bankers SET name='$name',money=$money WHERE id = $id ";
    if (mysqli_query($conn,$sql)){
        header("Location:list-index.php");
    }

}