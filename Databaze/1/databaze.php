<?php 
//databaze je v C:\xampp\mysql\data

$dsn = "mysql:host=localhost;dbname=uzivatele";
$username = "root2";
$password = "password";

try{

    $db = new PDO($dsn, $username, $password);
    echo "you have connected!";
} catch(PDOexception $e) {
    echo "nejde nic:" .$e->getMessage();
    exit();
}

$sql = "INSERT INTO plp (name, email)
VALUES ('LukasLuvFemboys', 'luki@semf.com')";

if($db->query($sql) == TRUE){
    echo "<br>new record.";
} else {
    echo "ERROR" .$sql."<br>";
}

?>