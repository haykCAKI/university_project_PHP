<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Signup</title>
</head>

<body>
    <h1>Signup</h1>
    <form action="login_process.php" method="post" id="signup" novalidate>
        <div>
            <label for="name">Name: </label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="email">email:</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="passoword">password:</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <label for="confirm-password">Confirm password:</label>
            <input type="password" name="confirm-password" id="confirm-password">
        </div>
        <button type="submit">Sign Up</button>

    </form>
</body>

</html>