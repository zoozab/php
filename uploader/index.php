<?php
$di = dirname(__FILE__);
$myfiles=scandir($di);
foreach($myfiles as $item ){
    if(is_file($item)){

    echo '<a href="view.php?file='.$item.'">';
    echo $item;
    echo '</a><br/>';
    }else{
        echo '<a href="'.$item.'">';
    echo $item;
    echo '</a><br/>';
    }
}
echo "<br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="folder.php" method="post">
        <label for="crfolder">create new folder , enter your folder name </label>
        <input type="text" name="crfolder">
        <input type="submit" value="create">
    </form>
    <p> <p>
    <form action="file.php" method="post">
        <label for="crfolder">create new file , enter your file name </label>
        <input type="text" name="crfile">
        <input type="submit" value="create">
    </form>
</body>
</html>