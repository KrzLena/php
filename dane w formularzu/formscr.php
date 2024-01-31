<?php //you can use get
echo "You've send following information: <br><br>";

//----------------------------------------------------------------------------------name nad surname:
if(empty($_POST['name']) || empty($_POST['surname']))
{
    echo "<p style = 'color:red'>you have not entered basic information</p>";
}
else
{
    echo "Name:      ".$_POST['name']."<br>";
    echo "Surname:   ".$_POST['surname']."<br>";
}

//----------------------------------------------------------------------------------age:


//check if their underage
if($_POST['age']<18)
{
    echo "<p style = 'color:red'>!You are underage!</p>";
}
else
{
    echo "Age:       ".$_POST['age']."<br>";
}

//----------------------------------------------------------------------------------email:
if(empty($_POST['mail']))
{
    echo "<p style = 'color:red'>!You didn't provide your e-mail!</p>";
}
else
{
    echo "E-mail: ".$_POST['mail']."<br>";
}


//----------------------------------------------------------------------------------education:
//echo "Education: ".$_POST['e']."<br>";
if(isSet($_POST['e'])) //if edu isnt choosen it will return the message 
{
    echo "Education - ".$_POST['e']."<br>";
}
else
{
    echo "<p style = 'color:red'>!You haven't chosen your education level!</p>";
}

//----------------------------------------------------------------------------------consnet:
if(empty($_POST['agree']))
{
    echo "<p style = 'color:red'>!You haven't consent to the processing of my personal data!</p>";
}
else
{
    echo "Consent:   ".$_POST['agree']."<br>";
}


//case 0 will whrite only one lang
//echo "Language:  ".$_POST['lang']."<br>"; 

//case 1 not that good
//echo "Language:  ".$_POST['lang'][1].",".$_POST['lang'][2]."<br>"; 

//----------------------------------------------------------------------------------language:
if(empty($_POST['lang'])) //if the lan is empty then the message is shown
{
    echo"<p style = 'color:red'>!You haven't chosen a language!</p>";
}
else
{
    echo "Language: "; //case 2 is pretty good
    echo "<ul>";
    foreach($_POST['lang'] as $j)
    {
        echo "<li>".$j."</li>";
    }
    echo "</ul>";
}

//----------------------------------------------------------------------------------file1:

echo "File data:<br>";
echo "File name: ".$_FILES['file1']['name'];
echo "Temporary location: ".$_FILES['file1']['tmp_name'];
echo "File size: ".$_FILES['file1']['size'];
echo "file type: ".$_FILES['file1']['type'];
?>
