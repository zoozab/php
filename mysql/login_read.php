<?php


$connection = mysqli_connect("localhost", "root", "", "loginapp");
if ($connection) {
    echo "data base connected";
} else {
    die("connection failed!");
}

$querry = "SELECT * FROM users";
$result = mysqli_query($connection, $querry);

if (!$result) {
    die('quary faild' . mysqli_error($connection));
}





?>

<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p> </p>
    <div class="container">
        <div class="col-sm-6">



            <?php

            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <pre>
                <?php
                print_r($row);
                ?>
            </pre>
            <?php
            }
            ?>


        </div>





    </div>

</body>

</html>