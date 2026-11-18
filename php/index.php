<?php
include "polaczenie.php";

// po kliknieciu przycisku dodajemy wpis do bazy
if (isset($_POST["dodaj"])) {
    $polaczenie->query("INSERT INTO wpisy (imie, nazwisko) VALUES ('Jan', 'Dworzyński')");
}

$wynik = $polaczenie->query("SELECT * FROM wpisy ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Jan Dworzyński - PHP</title>
  <link rel="stylesheet" href="../styl.css">
</head>
<body>
  <header>
    <h1>Jan Dworzyński</h1>
    <p>Imię: Jan | Nazwisko: Dworzyński</p>
  </header>

  <main>
    <div class="karta">
      <p>Przycisk uruchamia skrypt PHP, który dodaje wpis do bazy danych. Poniżej log z tabeli <b>wpisy</b>.</p>
      <form method="post">
        <button type="submit" name="dodaj">Zapisz w bazie</button>
      </form>
      <div class="log">
        <?php while ($w = $wynik->fetch_assoc()) { ?>
          <p>&gt; [<?php echo $w["data"]; ?>] wpis nr <?php echo $w["id"]; ?>: <?php echo $w["imie"] . " " . $w["nazwisko"]; ?></p>
        <?php } ?>
      </div>
    </div>
  </main>

  <footer>Jan Dworzyński 2026</footer>
</body>
</html>
