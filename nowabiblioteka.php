<?php 
$polaczenie = new mysqli('localhost', 'root', '', 'wypozyczalnia');

if(!$polaczenie -> connect_error)
{
    echo "Nawiazanio polaczenie";
}
else
{
    echo "ERROR".connect_ernro($polaczenie);
}

$z1 = 'SELECT *FROM klienci';

$wynik = $polaczenie -> query($z1);

if($wynik ->num_rows > 0)
{
    while ($w = $wynik->fetch_assoc())
    {
        echo
    }
}
else
{
    echo "w" ;
}

$polaczenie -> close();
?>