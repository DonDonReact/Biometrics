<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require 'Connect.php';
    createCharacter();
}

function createCharacter()
{
    global $connect;
    $q1 = $_POST['q1'];
    if ($_POST['submit']== 'Save') {
    $query = ("INSERT INTO test(value) VALUES ('$q1');");
    mysql_query($query) or die(mysql_error($connect));
        
    mysql_close($connect);


}
}

?>