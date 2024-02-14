<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="rejestracja.php" method="post">
                <label for="imie">Imię:</label><br>
                <input type="text" id="imie" name="imie" required><br>
                <label for="nazwisko">Nazwisko:</label><br>
                <input type="text" id="nazwisko" name="nazwisko" required><br>
                <label for="login">Login:</label><br>
                <input type="text" id="login" name="login" required><br>
                <label for="haslo">Hasło:</label><br>
                <input type="password" id="haslo" name="haslo" required><br><br>
                <div class="przy">
                <input type="submit" value="Zarejestruj">
                <p><a href="index.php">Powrot</a></p>
                </div>
            </form>
    
</body>
</html>