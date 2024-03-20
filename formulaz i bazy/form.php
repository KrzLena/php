<?php
$baza = mysqli_connect('localhost', 'root', '', 'ksiegarnia');
$nazwisko = $_POST['nazwisko'];
$imie = $_POST['imie'];
$kodp = $_POST['kodp'];
$miejscowosc = $_POST['miejscowosc'];
$ulica = $_POST['ulica'];
$dom = $_POST['dom'];
$pesel = $_POST['pesel'];
$telefon = $_POST['telefon'];
$mail = $_POST['mail'];

$z1 = "INSERT INTO klient VALUES (null, '$nazwisko', '$imie', '$kodp','$miejscowosc'
, '$ulica', '$dom', '$pesel', '$telefon','$telefon','$mail')";

$z2 = "UPDATE klient SET pesel = $pesel WHERE PESEL = 0";
$r = mysqli_query($baza,$z2);
echo "zaaktualizowano ".mysqli_affected_rows($baza);
?>