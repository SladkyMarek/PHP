<!DOCTYPE html>
<html lang="en">
<?php 
    session_start();
    $uname = "admin";
    $password = "admin";
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if($_POST["uname"] == $uname && $_POST["passwd"] == $password){
            header('Location: login.php');
        } else {
            echo "nuh uh";
        }
    }
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <p>Username: <input type="text" name="uname"></p>
        <p>Password: <input type="password" name="passwd" id=""></p>
        <button type="submit">Confirm</button>
    </form>
</body>
</html>