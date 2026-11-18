<?php
$polaczenie = new mysqli("127.0.0.1", "student", "student", "strona");

if ($polaczenie->connect_error) {
    die("Błąd połączenia: " . $polaczenie->connect_error);
}
$polaczenie->set_charset("utf8mb4");
