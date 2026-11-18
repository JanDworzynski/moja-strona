<?php
include "polaczenie.php";

$info = "";

// po kliknieciu przycisku dodajemy wpis do bazy
if (isset($_POST["dodaj"])) {
    $polaczenie->query("INSERT INTO wpisy (imie, nazwisko) VALUES ('Jan', 'Dworzyński')");
    $info = "Dodano wpis do bazy";
}

if (isset($_POST["usun"])) {
    $polaczenie->query("DELETE FROM wpisy");
    $info = "Usunięto wszystkie wpisy";
}

$wynik = $polaczenie->query("SELECT * FROM wpisy ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <title>Moja strona - PHP</title>
  <link rel="stylesheet" href="../styl.css">
</head>
<body>
  <header>
    <h1>Moja strona (PHP + MySQL)</h1>
  </header>

  <main>
    <h2>Jan Dworzyński</h2>

    <form method="post">
      <button type="submit" name="dodaj">Dodaj wpis do bazy</button>
      <button type="submit" name="usun">Usuń wpisy</button>
    </form>

    <p><?php echo $info; ?></p>

    <p>Liczba wpisów: <?php echo $wynik->num_rows; ?></p>

    <table>
      <tr>
        <th>ID</th>
        <th>Imię</th>
        <th>Nazwisko</th>
        <th>Data</th>
      </tr>
      <?php while ($w = $wynik->fetch_assoc()) { ?>
      <tr>
        <td><?php echo $w["id"]; ?></td>
        <td><?php echo $w["imie"]; ?></td>
        <td><?php echo $w["nazwisko"]; ?></td>
        <td><?php echo $w["data"]; ?></td>
      </tr>
      <?php } ?>
    </table>
  </main>

  <footer>
    <p>Jan Dworzyński 2026</p>
  </footer>
</body>
</html>
