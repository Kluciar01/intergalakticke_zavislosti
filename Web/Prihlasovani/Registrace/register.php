<?php
//pripojeni k mysql
$conn = new mysqli("localhost", "uzivatel", "heslo", "databaze");

//zpracovani dat z formulare
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

//ochrana
$username = mysqli_real_escape_string($conn, $username);
$email = mysqli_real_escape_string($conn, $email);

//hashovani
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

//vlozeni uzivatele do databaze
$query = "INSERT INTO users (username, password, email) VALUES ('$username', 'hashed_password', '$email')";
if ($conn->query($query) === TRUE) {
	echo "Registrace proběhla úspěšně";
} else {
	echo "Chyba při registraci: " . $conn->error;
}

//Uzavreni spojeni
$conn->close();
?>