
<?php
session_start();
require_once 'helpers.php';

$eemail="zoozehab@gmail.com";
$ppasword="12345678";

if(post('email') == $eemail && post('password') == $ppasword){
  // correct credentials
  $_SESSION['user'] = $eemail;
  if(post('agree')="on"){

    $cookie_name = "mmail";
    $cookie_value = post("email");
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
  }
}else{
  // incorrect credentials
  header('Location: login.php');
}


/*echo "email is : ".$_SESSION["mail"];
echo "<br>";
echo "pass is : ".$_SESSION["pas"];*/





/*echo ($_COOKIE["mmail"]);
echo "<br>";
echo ($_COOKIE["passs"]);*/



?>
