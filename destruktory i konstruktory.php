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

    //uzywajac konstruktora przypisuje do klasy osoba domyslne wartosci
    function __construct()
    {
        $this -> nazwisko = 'Tzcok';
        $this -> imie = 'Lena';
        $this -> id = 11;
    }
}

//tworzenie obiektu uczen1
$uczen1 = new osoba();

//wypisywanie wartosci obiektu uczen1
echo "obiekt uczen1 ma nastepujace wartosci: ".$uczen1 -> pi().", ".$uczen1 -> pn().", ".$uczen1 -> pid().".<br>";


//tworzenie klasy potomnej (klasa klient dziedziczy wartosci klasy osoba)
class klient extends osoba 
{
    public $adres;
    public function wa($aa)
    {
        $this -> adres = $aa;
    }
    public function pa()
    {
        return $this -> adres;
    }
}

//tworzenie obiektu klient1
$klient1 = new klient();

//przypisywanie wartosci do obiektu klient1
$klient1 -> wn('Wiosna');
$klient1 -> wi('Alek');
$klient1 -> wid(3);
$klient1 -> wa('ul.Wolnosci 14 Kraków');


//wypisywanie na ekran własciwociu obiektu klient1 przez metody tego obiektu
echo "Wartosci wlasciwosci obiektu klient1: ".$klient1 -> pi().", ".$klient1 -> pn().", ".$klient1 -> pid().", ".$klient1 -> pa().".<br> ";

//tworzenie klasy potomnej
class odbiorca extends klient
{
    public $idOdbiorcy, $nazwaFirmy;

    function __construct()
    {
        $this -> $adres = 'Londyn Dworska 14';
        $this -> $nazwaFirmy = 'Akustyczni :3';
    }

}

?>