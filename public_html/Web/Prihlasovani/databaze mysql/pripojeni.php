<<?php 
$servername = "localhost";
$username = "uzivatel";
$password = "heslo";
$database = "my_database";

// pripojeni k mysql databazi
$conn = new mysqli($servername, $username, $password, $database);

// kontrola
if ($conn ->connect_error){
	die("chyba připojeník databázi: " . $conn->connect_error);
 }
echo "Připojení k databázi proběhlo úspěsně";




 ?>