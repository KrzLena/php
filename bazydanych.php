<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<style>
    table
    {
        border:solid 5px black;
        border-collapse: collapse;
    }
    th, td
    {
        border:solid 2px pink;
        border-collapse: collapse;
    }

    
</style>

</head>
<body>
<?php
$ksiegarnia = mysqli_connect('localhost', 'root', '', 'ksiegarnia');
if ($ksiegarnia === false)
{
    exit("błąd połączenia");
}
else
{
    echo "Połączono z serwerem i wybrano bazę księgarnnia internetowa <br>";
}

//zad1 pobierz info o nazwiskach klientow
$z1 = "SELECT Nazwisko FROM klient WHERE nazwisko not like ''";
$w1 = mysqli_query($ksiegarnia,$z1);

while ($tab = mysqli_fetch_row($w1))
{
    echo $tab[0]."<br> ";
}

//zad2 ile rekordow  otrzymales przy realizacji z1
echo "Mamy ".mysqli_num_rows($w1)." klientow <br>";

//zad3 
$z2 = "SELECT * FROM klient WHERE Nazwisko not like ''";
$w2 = mysqli_query($ksiegarnia,$z2);
for ($i=1;$i <= mysqli_num_rows($w2); $i++)
{
    $tab2 = mysqli_fetch_array($w2);
    echo "adres klienta $i: ".$tab2['Kod_pocztowy']." ".$tab2['Miejscowosc']." ".$tab2['Ulica']."<br>";
}

// while($tab2 = mysqli_fetch_array($w2))
// {
//     echo "adres klienta $i: ".$tab2['kod_pocztowy']." ".$tab2['Miejscowosc']." ".$tab2['ulica'];
// }

//zad4 pobierz z tabeli klient imiona nazwiska nr tel i email

$z3 = "SELECT * FROM klient WHERE Nazwisko not like ''";
$w3 = mysqli_query($ksiegarnia,$z3);
for ($i = 1; $i <= mysqli_num_rows($w3); $i++)
{
    $tab3 = mysqli_fetch_array($w3);
    echo $tab3['Imie']." ".$tab3['Nazwisko']." ma nr telefonu ".$tab3['Telefon']." i adres email: ".$tab3['AdresEmail']."<br>";
}

//zad5 wyswietl na ekranie upozadkowana liste danych z zadania 4
echo "<ol>";
$z4 = "SELECT * FROM klient WHERE Nazwisko not like ''";
$w4 = mysqli_query($ksiegarnia,$z4);
for ($i = 1; $i <= mysqli_num_rows($w3); $i++)
{
    $tab4 = mysqli_fetch_array($w4);
    echo "<li>".$tab4['Imie']." ".$tab4['Nazwisko']." ma nr telefonu ".$tab4['Telefon']." i adres email: ".$tab4['AdresEmail']."</li>";
}
echo "</ol>";

//zad6 wyswietl na ekranie upozadkowana liste danych z zadania 4
echo "<table style='border:solid 2px black'>";
$z4 = "SELECT * FROM klient WHERE Nazwisko not like ''";
$w4 = mysqli_query($ksiegarnia,$z4);

echo "<tr><th>Imie</th><th>Nazwisko</th><th>Numer Tel</th><th>Adres e-mail</th></tr>";
for ($i = 1; $i <= mysqli_num_rows($w3); $i++)
{
    $tab4 = mysqli_fetch_array($w4);
    echo "<tr><td>".$tab4['Imie']."</td><td>".$tab4['Nazwisko']."</td><td>".$tab4['Telefon']."</td><td>".$tab4['AdresEmail']."</td></tr>";
}
echo "</table>";

?>
</body>
</html>
