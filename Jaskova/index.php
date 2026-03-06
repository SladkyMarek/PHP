<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Number: <input type="number" name="num" id=""> <br>
        Text: <input type="text" name="text"> <br>
        Text 2: <input type="text" name="text2"> <br>
        Color: <input type="color" name="color" id="">

        <br>
        <button type="submit">Submit</button>

        <?php 
        /*
        $a = 22;
        $b = "22";
        $c = 10.35;
        
        echo var_dump($a);
        echo var_dump($b);
        echo var_dump($c);
        */        

        
        echo "<br><hr>";

        $a = $_POST["text"];


        if(is_numeric($_POST["text"]) == true){
            $a = $a + 1;
            echo "$a";
        }
        else{
            echo "Error";
        }

        echo "<br><hr>";

        $cislo = filter_var($_POST["text2"], FILTER_VALIDATE_INT);

        if ($cislo !== false){
            echo "Mas cislo";
        } else {
            echo "nemas cislo";
        }
        
        
        
        echo "<br><hr>";

        echo var_dump($_POST["num"]);
        echo var_dump($_POST["text"]);
        echo var_dump($_POST["color"]);
        echo var_dump($_POST["text2"]);

        echo "<br><hr>";

        $num = (int)$_POST["num"];

        $text = (int)$_POST["text"];
        echo var_dump($num);
        echo var_dump($text);
        ?>
    </form>
</body>
</html>