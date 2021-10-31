<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require 'Connect.php';
    createCharacter();
}

function createCharacter()
{
    global $connect;
    $choix = $_POST['choix'];
    if ($_POST['submit']== 'Save') {
    $query = ("INSERT INTO age1(value) VALUES ('$choix');");
    mysql_query($query) or die(mysql_error($connect));
        
    mysql_close($connect);


}
}

?>