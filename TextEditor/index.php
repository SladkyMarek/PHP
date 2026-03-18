<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="post">
        <input type="text" name="text">
        <button type="submit" name="write">Write</button>
        <br>
        <button type="submit" name="read">Read</button>
    </form>

    <?php 
    if(isset($_POST["write"])) {
        $fw = fopen("text.txt", "a");
        fwrite("text.txt");
        echo "neco";
        fclose($fw);
    }
    if(isset($_POST["read"])) {
        fread("text.txt", 'r');
        echo "neco222222";
    }
    ?>
</body>
</html>