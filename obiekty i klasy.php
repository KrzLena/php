<?php
class osoba
{
    public $imie, $nazwisko, $id;


    //wpisywanie nazwiska, imienia, id
    function wn($an)
    {
        $this -> nazwisko = $an;
    }

    function wi($ai)
    {
        $this -> imie = $ai;
    }

    function wid($aid)
    {
        $this -> id = $aid;
    }

    //pobieranie nazwiska, imienia, id
    function pn()
    {
        return $this -> nazwisko;
    }

    function pi()
    {
        return $this -> imie;
    }

    function pid()
    {
        return $this -> id;
    }
}


//twoarzenie obiektow o nazwie 'uczen1' i 'uczen2'
$uczen1 = new osoba();
$uczen2 = new osoba();
 
//przypisanie wartosci do obiektu 'uczen1'
$uczen1 -> nazwisko = 'Lato';
$uczen1 -> imie = 'Janek';
$uczen1 -> id = 1;

//przypisanie wartosci przez metode klasy osoba do obiektu 'uczen2'
$uczen2 -> wn('Zima');
$uczen2 -> wi('Zoska');
$uczen2 -> wid(2);

//wypisywanie na ekran własciwociu obiektu uczen1 przez metody tego obiektu
echo "obiekt uczen1 ma nastepujace wartosci cech: ".$uczen1 -> pi().", ".$uczen1 -> pn().", ".$uczen1 -> pid()."<br>";
//wypisywanie na ekran własciwociu obiektu uczen1 przez instrukcje
echo "obiekt uczen2 ma nastepujace wartosci cech: ".$uczen2 -> imie.", ".$uczen2 -> nazwisko.", ".$uczen2 -> id;

?>