<?php
$polaczenie = mysqli_connect('localhost', 'root', '', 'ksiegarnia');
mysqli_select_db($polaczenie, 'ksiegarnia');
$z1 = "INSERT INTO klient VALUES (null, 'Osa', 'Ewa', '13-124', 'Polna', '45a', 12345678910, 123456789, 'ewa@osa.pl'),(null, 'Ossa', 'Ewwa', '13-114', 'Polnaa', '43a', 12345678110, 123456289, 'ewaa@osaa.pl')";
$w = mysqli_query($polaczenie, $z1);
echo "Dodano ".mysqli_affected_rows($polaczenie)." nowe osoby";
$nazwisko = $_POST['nazwisko'];
$imie = $_POST['imie'];
$kod = $_POST['Kod'];
$miejscowosc = $_POST['miejscowosc'];
$ulica = $_POST['ulica'];
$nr_domu = $_POST['nr_domu'];
$pesel = $_POST['pesel'];
$nr_telefonu = ['nr_telefonu'];
$mail = $_POST['mail'];

$zapyt = "INSERT INTO klient VALUES (null,'$nazwisko','$imie','$kod','$miejscowosc','$ulica',
'$nr_domu',$pesel,$nr_telefonu,'$mail')";
$wynik = mysqli_query($polaczenie,$zapyt);
echo "wstawiono ".mysqli_affected_rows($polaczenie)."rekordów.";
?>