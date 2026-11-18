<?php
$baza = new mysqli("127.0.0.1", "student", "Kalafior_Rower_57x", "strona");
$baza->set_charset("utf8mb4");

$info = "";
if (isset($_POST["dodaj"])) {
    $baza->query("INSERT INTO wpisy (imie, nazwisko) VALUES ('Jan', 'Dworzyński')");
    $info = "Dodano wpis do bazy";
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

  <p>Imię: Jan</p>
  <p>Nazwisko: Dworzyński</p>

  <form method="post">
    <button name="dodaj">Dodaj do bazy</button>
  </form>
  <p><?php echo $info; ?></p>

  <footer>
    <p>Jan Dworzyński 2026</p>
  </footer>
</body>
</html>
