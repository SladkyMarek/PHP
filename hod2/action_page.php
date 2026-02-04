<?php 
    if(isset($_POST["uname"]) && $_POST["uname"] == "admin" && isset($_POST["psw"]) && $_POST["psw"] == "Heslo")
    {
        session_start();
        $_SESSION["psw"] = $_POST["psw"];
        $_SESSION["uname"] = $_POST["uname"];
    }
    if(isset($_SESSION["uname"]))
    {
        $pass = $_POST["psw"];
        $user = $_POST["uname"];
    
    
        echo "Jmeno: $user <br>Heslo: $pass";
    }
    else
    {
        echo "nuh uh";
    }

?>