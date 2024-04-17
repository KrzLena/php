<?php

echo"<body style='text-align:center; background-color:palevioletred; color:pink;'>";

setcookie ('wizyta', date('F d, h:i a'), time()+2592000);

if (isset($_COOKIE['wizyta']) && $_POST['p'] == "k")
{
    echo "Witamy ponownie!".$_POST['imie']." ".$_POST['nazwisko']." statni raz odwiedziłas nas: ".$_COOKIE['wizyta'];
}
elseif (isset($_COOKIE['wizyta']) && $_POST['p'] == "m")
{
    echo "Witamy ponownie!".$_POST['imie']." ".$_POST['nazwisko']." statni raz odwiedziłes nas: ".$_COOKIE['wizyta'];
}
elseif (isset($_COOKIE['wizyta']) && $_POST['p'] == "o")
{
    echo "Witamy ponownie!".$_POST['imie']." ".$_POST['nazwisko']." statni raz odwiedziłos nas: ".$_COOKIE['wizyta'];
}
elseif (isset($_COOKIE['wizyta']) && $_POST['p'] == "t")
{
    echo "Witamy ponownie Zosia!".$_POST['imie']." ".$_POST['nazwisko']." statni raz odwiedził nas toster: ".$_COOKIE['wizyta'];
}
else
{
    echo "witaj na naszej stronie<br>";
}
echo "<img src='kokardka.png'>";
echo"</body>";
?>
