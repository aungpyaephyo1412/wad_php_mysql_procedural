<?php
session_start();
require_once 'core/functions.php';
require_once 'core/connection.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo url('node_modules/bootstrap/dist/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo url('css/app.css') ?>">
    <link rel="stylesheet" href="<?php echo url('node_modules/bootstrap-icons/font/bootstrap-icons.min.css') ?>">
    <title>Main</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo url('index.php') ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo url('about.php') ?>">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        List
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?php echo url('list-create.php') ?>">Create List</a></li>
                        <li><a class="dropdown-item" href="<?php echo url('list-index.php') ?>">List</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
