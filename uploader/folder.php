<?php
$foname=$_POST["crfolder"];
if(mkdir($foname)){
    header("Location: index.php");
}else{
    die("folder creation has been faild .");
}
?>