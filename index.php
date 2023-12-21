<?php

session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <header class="p-4 bg-dark text-center">
        <h1><a href="index.php" class="text-light text-decoration-none">Wiki Article for Thinks</a></h1>
    </header>
    <div class="post-list mt-5">
        <div class="mt-5">
            <p class="text-center p-4 mt-5">Hello!! My name is Caki, I created this website for students to publicate thinks about your field, I hope you accept the Idea and enjoy in this communit!!
                <br>
                For more information, <a href="about.php">click here</a>
            </p>
        </div>
        <div class="conteiner">
            <?php
            include("connect.php");
            $sqlSelect = "SELECT * FROM posts";
            $result = mysqli_query($conn, $sqlSelect);
            while ($data = mysqli_fetch_array($result)) {
            ?>

                <div class="row mb-4 p-5 bg-light">
                    <div class="col-sm-2">
                        <?php echo $data["date"]; ?>
                    </div>
                    <div class="col-sm-3">
                        <h2> <?php echo $data["title"] ?></h2>
                    </div>
                    <div class="col-sm-5">
                        <?php echo $data["summary"] ?>
                    </div>
                    <div class="col-sm-2">
                        <a href="view.php?id=<?php echo $data['id']; ?>;" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <div class="footer bg-dark p-4 mt-4">
        <p class="text-light"><a href="admin/login.php" class="text-light">click here </a>to show me your "Thinks" :D</p>
    </div>
</body>

</html>