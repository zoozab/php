<?php
$names=array("jackfon","zacfon","maxin");
    $min=5;
    $max=10;

if (isset($_POST["submit"])) {
    //echo "submit is active <br>";

    $username = $_POST["username"];
    $password = $_POST["password"];

    if (!(($min<=strlen($username))&&(strlen($username)<=$max))) {
        echo "username must be between 5 to 10 char";
    } else {
        if (in_array($username, $names)) {
            echo "welcome";
        } else {
            echo "you are not allowd to enter";
        }
    }
}



?>