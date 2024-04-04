<?php
try
{
    $pdo = new PDO('mysql:host=localhost; dbname=ksiegania','root');
    echo "nawiazane"."<br>";
    $z1 = $pdo->query('SELECT nazwisko,imie,telefon FROM klient');

    foreach($z1 as $w)
    {
        echo $w['nazwisko'].' '.$w['imie']."<br>";
    }
    $pdo = null;
}



catch(PDOException $e)
{
    echo"blad".$e->getMessage();
    exit;
}

?>