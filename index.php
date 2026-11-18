<?php
$baza = new mysqli("127.0.0.1", "student", "Kalafior_Rower_57x", "strona");
$baza->set_charset("utf8mb4");

$info = "";
if (isset($_POST["zapisz"])) {
    $zapytanie = $baza->prepare("INSERT INTO wpisy (imie, nazwisko) VALUES (?, ?)");
    $zapytanie->bind_param("ss", $_POST["imie"], $_POST["nazwisko"]);
    $zapytanie->execute();
    $info = "Zapisano w bazie";
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <title>Moja strona</title>
</head>
<body>
  <header>
    <h1>Moja strona</h1>
  </header>

  <form method="post">
    <p>Imię: <input type="text" name="imie" required></p>
    <p>Nazwisko: <input type="text" name="nazwisko" required></p>
    <button name="zapisz">Zapisz</button>
  </form>
  <p><?php echo $info; ?></p>

  <footer>
    <p>Stopka strony</p>
  </footer>
</body>
</html>
