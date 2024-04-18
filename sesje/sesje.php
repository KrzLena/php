<?php
session_start();

if (!isSet($_SESSION['log']))
{
    header('location: loguj.php');
    exit;
}
else if (isSet ($_POST['nazwa']) && isSet($_POST['haslo']))
{
    if($_POST['nazwa'] == 'janek' && $_POST['haslo'] = 'jan23')
    {
        $_SESSION['log'] = 'nazwa';
        header('location: strona.php');
        exit();
    }
}
else{
    echo "Nieprawidlowe dane";
}
?>