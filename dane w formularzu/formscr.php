<?php //you can use get
echo "You've send following information:<br>";
echo "Name:      ".$_POST['name']."<br>";
echo "Surname:   ".$_POST['surname']."<br>";
echo "Age:       ".$_POST['age']."<br>";
echo "E-mail:    ".$_POST['mail']."<br>";
echo "Education: ".$_POST['e']."<br>";
echo "Consent:   ".$_POST['agree']."<br>";
//case 0 will whrite only one lang
//echo "Language:  ".$_POST['lang']."<br>"; 

//case 1 not that good
//echo "Language:  ".$_POST['lang'][1].",".$_POST['lang'][2]."<br>"; 

//case 2 is pretty good
echo "Language: ";
echo "<ul>";
foreach($_POST['lang'] as $j)
{
    echo "<li>".$j."</li>";
}
echo "</ul>";
?>
