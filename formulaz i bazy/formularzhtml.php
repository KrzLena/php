<html>
    <head>
        <title>Rejestracja</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form action = "form.php" method = "post" enctype="multipart/form-data"> <!--You can use get-->
        <?php
            $i = 1;
            $baza = mysqli_connect('localhost', 'root', '', 'ksiegarnia');
            $z3 = "SELECT *FROM klient WHERE Id_klienta = $i";
            $w3 = mysqli_query($baza, $z3);
            $dane = mysqli_fetch_array($w3);
        ?>
        
            <fieldset>
                <legend>Rejestracja</legend>
                Nazwisko:<br>
                <input type="text" name = "nazwisko" value="<?php echo $dane['Nazwisko']; ?>"><br>
                Imie:<br>
                <input type="text" name = "imie" value="<?php echo $dane['Imie']; ?>"><br>
                Kod pocztowy:<br>
                <input type="text" name = "kodp" value="<?php echo $dane['Kod_pocztowy']; ?>"><br>
                Miejscowosc:<br>
                <input type="text" name = "miejscowosc" value="<?php echo $dane['Miejscowosc']; ?>"><br>
                Ulica:<br>
                <input type="text" name = "ulica" value="<?php echo $dane['Ulica']; ?>"><br>
                Nr domu:<br>
                <input type="text" name = "dom" value="<?php echo $dane['Nr_domu']; ?>"><br>
                Pesel:<br>
                <input type="text" name = "pesel" value="<?php echo $dane['PESEL']; ?>"><br>
                Nr telefonu:<br>
                <input type="text" name = "telefon" value="<?php echo $dane['Telefon']; ?>"><br>
                E-mail:<br>
                <input type="email" name = "mail" value="<?php echo $dane['AdresEmail']; ?>"><br>
                <br>
                <button type="submit">Rejestruj</button>
                <button type="reset">Wyczysc</button>

            </fieldset>
        </form>
    </body>
</html>