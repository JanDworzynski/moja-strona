<?php
$polaczenie = new mysqli("127.0.0.1", "student", "Kalafior_Rower_57x", "strona");

if ($polaczenie->connect_error) {
    die(d czenia: " . $polaczenie->connect_error);
}
$polaczenie->set_charset("utf8mb4");
