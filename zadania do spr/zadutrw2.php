<?php

echo "zadania<br>";

echo"1.<br>";
$tab = [230,5,-89,3,12,123,45,-67,456,12];

rsort($tab);
$l = sizeof($tab);

for ($i=0;$i<$l;$i++)
{
    echo $tab[$i].", ";
}


echo"<br><br>2.<br>";

$text = "Gdyby kuzka kwiecien plecien to w marcu jak w garncu";

echo 'Tekst sprawdzany "'.$text.'"<br>';

if(strstr($text,"kto"))
{
    echo 'ma slowo "kto"<br>';
}
elseif(strstr($text,"Kto"))
{
    echo 'ma slowo "Kto"<br>';
}
else
{
    echo 'nie ma slowa "kto"<br>';
}

$tekst = "Kto dolki kopie ten sam w nie wpada";

echo 'Tekst sprawdzany "'.$tekst.'"<br>';
if(strstr($tekst,"kto"))
{
    echo 'ma slowo "kto"<br>';
}
elseif(strstr($tekst,"Kto"))
{
    echo 'ma slowo "Kto"<br>';
}
else
{
    echo 'nie ma slowa "kto"<br>';
}

echo"<br>3.<br>";

$x = mb_strlen($text);
echo "text ma dlugosc $x liter<br>";

echo"<br>4.<br>";

$II = mktime(0,0,0,9,1,1939);
echo "znacznik rozpoczęcia II wojny swiatowej = $II<br>";
$dzis = time();
$r = $dzis-$II;
$r/=2592000;
echo "Od rozpoczęcia 2 wojny siwatowej minelo ".round($r)." miesiecy<br>";

echo"<br>5.<br>";

$deb = array("Gabriela" => "Solak", "Zofia" => "Sadowska", "Mateusz" => "Solak", "Szczepan" => "Kusiak", "Piotrek" => "Noga" );

arsort($deb);

print_r($deb) ;
echo"<br>";

krsort($deb);

print_r($deb) ;
echo"<br>";


echo"<br>6.<br>";

function srednia($x, $y, $z)
{
    $srednia = ($x + $y + $z)/3;

    return $srednia;
}

echo srednia(2,1,4)."<br>";

echo"<br>7.<br>";
function szklanka($h)
{
    $pod = 3.14 * 9 * 9 * $h;
    return $pod;
}

echo szklanka(4)."ml <br>";

echo"<br>8.<br>";

function figury($odp)
{
    echo  "<img src='$odp.jpg'>";
}

echo figury("kwadrat");
echo figury("kolo");
?>