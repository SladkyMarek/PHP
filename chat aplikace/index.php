<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Username: <input type="text" name="name" id="name"><br>
        Message: <input type="text" name="msg" id="msg" ><br>
        <button type="submit" name="submit">Send</button>
    </form>
    <hr>
    <?php 
    /* 
    */
    if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $msg = $_POST["msg"];
        
        echo "$name: ". date("d-m-Y H:i"). "<br> $msg <br><br>";
    }    
    ?>
    <script src="script.js">
        
        event.preventDefault();
    </script>
</body>
</html>