<?php
$baza = mysqli_connect('localhost','root','','ksiegarnia');
$z1 = "INSERT INTO klient VALUES (null, 'Zolak', 'Garycha', '33-206', 'Tarnow', 'Bogumilowice', '12/4', 12345678910,123456789,'g.solak@zsme.pl')";
$w1 = mysqli_query($baza, $z1);
echo "Dodano dane klientów w liczbie: ".mysqli_affected_rows($baza);

$z2 = "INSERT INTO klient Values (null, 'Szysza', 'Tymon', '33-206', 'Tarnow', 'Husarka', '12/4', 12346778910,123756789,'g.kjsak@zsme.pl'),
(null, 'Sami', 'Adam', '33-206', 'Tarnow', 'Wolnosci', '12/4', 12345671210,129056789,'g.swksak@zsme.pl')";

$w2 = mysqli_query($baza,$z2);
echo mysqli_error($baza);

echo "Dodano dane klientów w liczbie: ".mysqli_affected_rows($baza);

mysqli_close($baza);
?>