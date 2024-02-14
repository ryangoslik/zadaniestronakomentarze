<?php 



$servername = "localhost";
$username = "root"; 
$password = "";
$dbname = "databased";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$login = $_POST['login'];
$haslo = $_POST['haslo'];


$sql = "INSERT INTO uczen (imie, nazwisko) VALUES ('$imie', '$nazwisko')";
if ($conn->query($sql) === TRUE) {
    $sql_rejestracja = "INSERT INTO rejestracja (login, haslo) VALUES ('$login', '$haslo')";
    if ($conn->query($sql_rejestracja) === TRUE) {
        echo "Uczeń zarejestrowany pomyślnie!";
    } else {
        echo "Błąd: " . $sql_rejestracja . "<br>" . $conn->error;
    }
} else {
    echo "Błąd: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<p><a href="index.php">Powrot</a></p>
</body>
</html>
