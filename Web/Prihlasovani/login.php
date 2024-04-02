<?php
session_start();
// Připojení k databázi
$conn = mysqli_connect("localhost", "uzivatel", "heslo", "databaze");
// Získání hodnot z formuláře
$username = $_POST['username'];
$password = $_POST['password'];
// Ochrana před SQL Injection
$username = mysqli_real_escape_string($conn, $username);
// Heslo by mělo být v databázi uloženo v hashované podobě (např. pomocí funkce password_hash())
// Získání uloženého hesla z databáze
$query = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row['password'])) {
        // Přihlášení uživatele
        $_SESSION['username'] = $username;
        header("Location: welcome.php");
        exit();
    } else {
        echo "Nesprávné heslo";
    }
} else {
    echo "Uživatel neexistuje";
}
mysqli_close($conn);
?>
