<?php
error_reporting(E_ALL);
ini_set('display_errors', "1");

$name=$_POST["fname"];
$family = $_POST['lname'];
$myfile=fopen("myfile.txt","w+");
$content = $name . "\r\n". $family;
if(fwrite($myfile,$content)){
    echo 'File has been wrote!';
}
$file = $_FILES["upf"];
$target_dir = "fileupload/";
$target_file = $target_dir .basename($file["name"]);
$uploadOk =1;
if(move_uploaded_file($file["tmp_name"],$target_file)){
    echo "the file has been uploaded";
}
else{
    echo "the file hasnt been uploaded ";
}

?>

