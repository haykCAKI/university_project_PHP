<?php
session_start();
if (isset($_POST['user_id'])) {

    $mysqli = require __DIR__ . "../login_database.php";

    $sql = "SELECT * FROM user WHERE id ={$_SESSION['user_id']}";

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>DashBoard</title>
</head>

<body>
    <div class="dashoboard d-flex justify-content-between">
        <div class="sidebar bg-dark vh-100">
            <h1 class="bg-primary p-4">
                <a href="../index.php" class="text-light text-decoration-none">
                    DashBoard
                </a>
            </h1>
            
            <div class="menues p-4 mt-5">
                <div class="menu">
                    <a href="create.php" class="text-light text-decoration-none"> <strong>Add New Post</strong></a>
                </div>
                <div class="menu mt-5">
                    <a href="../index.php" class="text-light text-decoration-none"><Strong>View Webiste</Strong></a>
                </div>
                <div class="menu mt-5">
                    <a href="logout.php" class="btn btn-info">Logout</a>
                </div>
        
            </div>
        </div>