<?php
//A)
class ksiazka
{
    public $tytul, $autor, $rok_wydania, $wydawnictwo, $gatunek, $identyfikator;


//B1)
    function wtytul($tyt)
    {
        $this -> tytul = $tyt;
    }

    function wautor($aut)
    {
        $this -> autor = $aut;
    }

    function wrokw($rok)
    {
        $this -> rok_wydania = $rok;
    }
    function wwydawnictwo($wyd)
    {
        $this -> wydawnictwo = $wyd;
    }
    function wgatunek($gat)
    {
        $this -> gatunek = $gat;
    }
    function wid($id)
    {
        $this -> identyfikator = $id;
    }

//B2)

    function ptytul($tyt)
    {
        return $this -> tytul;
    }

    function pautor($aut)
    {
        return $this -> autor;
    }

    function prokw($rok)
    {
        return $this -> rok_wydania;
    }
    function pwydawnictwo($wyd)
    {
        return $this -> wydawnictwo;
    }
    function pgatunek($gat)
    {
        return $this -> gatunek;
    }
    function pid($id)
    {
        return $this -> identyfikator;
    }
//C)
    function __construct()
    {
        $this -> tytul = 'Pan Tadeusz';
        $this -> autor = 'Adam Mickiewicz';
        $this -> rok_wydania = 1834;
        $this -> wydawnictwo = 'Ibis';
        $this -> gatunek= 'poezja epicka';
        $this -> identyfikator = 1;
    }


}

$ksiazka1 = new ksiazka();
$ksiazka2 = new ksiazka();
$ksiazka3 = new ksiazka();

$ksiazka2 -> tytul = 'Komputer świat 6/2022';
$ksiazka2 -> autor = 'Robert Graczyk';
$ksiazka2 -> rok_wydania = '2022';
$ksiazka2 -> wydawnictwo = 'Ringier Axel Springer Polska';
$ksiazka2 -> gatunek = 'Czasopismo';
$ksiazka2 -> identyfikator = 2;

$ksiazka3 -> tytul = 'Hobbit';
$ksiazka3 -> autor = 'J.R.R.Tolkien';
$ksiazka3 -> rok_wydania = '2022';
$ksiazka3 -> wydawnictwo = 'Zysk i S-ka';
$ksiazka3 -> gatunek = 'Fantasy';
$ksiazka3 -> identyfikator = 3;

class czasopismo extends ksiazka
{
    public $nr;
    function wnr($num)
    {
        $this -> $nr = $num;
    }
    function pnr($num)
    {
        return $this -> $nr;
    }

}

$czasopismo1 = new czasopismo();

$czasopismo1 -> tytul = 'Komputer świat 6/2022';
$czasopismo1 -> autor = 'Robert Graczyk';
$czasopismo1 -> rok_wydania = '2022';
$czasopismo1 -> wydawnictwo = 'Ringier Axel Springer Polska';
$czasopismo1 -> gatunek = 'Czasopismo';
$czasopismo1 -> identyfikator = 4;
$czasopismo1 -> nr = 4;
?>
