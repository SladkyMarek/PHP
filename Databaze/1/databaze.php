<?php 

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
VALUES = ('jmeno', 'mail@mail.com')";

if($db->query($sql) === TRUE){
    echo "new record.";
} else {
    echo "ERROR" .$sql."<br>".$db->error;
}

$db->close();

?>