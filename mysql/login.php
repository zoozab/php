<?php

if(isset($_POST["submit"])){
    //echo "connect";
    $username=$_POST["username"];
    $password=$_POST["password"];
   /* if($username&&$password){
        echo $username."<br>";
        echo $password;*/
$connection=mysqli_connect("localhost","root","","loginapp");
if($connection){
    echo "data base connected";
}else{
    die("connection failed!");
}




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
    <p>  </p>
    <div class="container">
        <div class="col-sm-6">

            <form action="login_create.php" method="post">

                <div class="form-group">
                    <label for="username">Username</label>
                    <input id="username" name="username" type="text" class="form-control">
                </div>


                <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" name="password" type="password" class="form-control">
                </div>

                 <p>  </p>
                 <div class="form-group">
                    
                    <input class="btn btn-primary" name="submit" type="submit" class="form-control" >
                </div>
            </form>




        </div>





    </div>
    
</body>
</html>