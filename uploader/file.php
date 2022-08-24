<?php
$finame=$_POST["crfile"];
if(fopen($finame,"w")){
    header('Location: index.php');
}else{
    die('File creation failed.');
}
?>