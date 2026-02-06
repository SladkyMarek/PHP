

<?php 
    if(isset($_POST["uname"]) && $_POST["uname"]!== "admin" && isset($_POST["psw"]) && $_POST["psw"] !== "Heslo")
    {
        echo "smh";
    }
    else if(isset($_POST["uname"]) && $_POST["uname"] == "admin" && isset($_POST["psw"]) && $_POST["psw"] == "Heslo")
    {
        session_start();
        $_SESSION["psw"] = $_POST["psw"];
        $_SESSION["uname"] = $_POST["uname"];
        $pass = $_POST["psw"];
        $user = $_POST["uname"];
    
    
        echo "Jmeno: $user <br>Heslo: $pass";
    }

    echo "<a href="logout.php"></a>";

    /*
    if(isset($_SESSION["uname"]))
    {
    }
    else
    {
        echo "nuh uh";
    }
    */

?>