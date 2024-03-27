<?php

$baza = mysqli_connect('localhost','root','');

$utwozbaze = "CREATE DATABASE if not exists wiezienie";

$w1 = mysqli_query($baza,$utwozbaze);

if(mysqli_select_db($baza, 'wiezienie'))
{
    echo "Zostales skazany!!! Idziesz do wiezienia!<br>";
}
else
{
    echo "nie jestes skazany :(";
}

$tWiezien = "CREATE TABLE if not exists Wiezien(IdWieznia int AUTO_INCREMENT primary key, IdCeli int, Imie varchar(20), Nazwisko varchar(30), Adres varchar(100))";
$tCela = "CREATE TABLE if not exists Cela(IdCeli int AUTO_INCREMENT primary key, Symbol varchar(4))";
$wWiezien = mysqli_query($baza, $tWiezien);
$wCela = mysqli_query($baza, $tCela);

$insertCela = "INSERT INTO Cela Values(Null, 'A1'),(Null, 'B1'),(Null, 'C1'),(Null, 'A2'),(Null, 'B2'),(Null, 'C2')";
$insertWiezien = "INSERT INTO Wiezien VALUES(null, 1, 'Gabriela', 'Zolak', '2137'),(null, 2, 'Lena', 'Tzcok', '1414'),(null, 3, 'Zofja', 'Zadowska', '6666')";

//$wiCela = mysqli_query($baza, $insertCela);
//$wiWiezien = mysqli_query($baza, $insertWiezien);
echo "Dodano ".mysqli_affected_rows($baza)." wiezniow.<br>";

$wysW = "SELECT *FROM Wiezien";
$w = mysqli_query($baza,$wysW);
$wyswietl = mysqli_fetch_array($w);
//echo var_dump($wyswietl);
for ($i = 0; $i<20; $i++)
{
    echo $wyswietl[$i]."<br>";
}
