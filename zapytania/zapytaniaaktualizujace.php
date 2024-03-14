<?php

$polaczenie = mysqli_connect('localhost', 'root', '', 'ksiegarnia');
mysqli_select_db($polaczenie, 'ksiegarnia');

//zapytanie usuwajace puste rekordy z tabeli kliena

$z1 = "DELETE FROM klient WHERE Id_klienta = 3 or Id_klienta = 4";
$w1 = mysqli_query($polaczenie, $z1);
echo "Usuieto rekordy w liczbie: ".mysqli_affected_rows($polaczenie)."<br>";
?>