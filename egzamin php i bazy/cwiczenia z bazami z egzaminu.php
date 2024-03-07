<?php
$egzamin = mysqli_connect('localhost', 'root', '','egzamin');
$z1 = "SELECT nazwaPliku, podpis FROM zdjecia";
$w1 = mysqli_query($egzamin, $z1);
while($tab1 = mysqli_fetch_array($w1))
{
    echo "<img src = '".$tab1['nazwaPliku'].".jpg' alt='".$tab1['podpis']."'>";
}

?>