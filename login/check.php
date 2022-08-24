
<?php
session_start();
require_once 'helpers.php';

$eemail="zoozehab@gmail.com";
$ppasword="12345678";

if((post('email')==$eemail)&&(post('password')==$ppasword)){
  $_SESSION['user'] = post('email');
  if(post("agree")=="on"){

  $cookie_name = "mmail";
  $cookie_value = post("email");
  setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
  }
  header('Location: acc.html');
}
else{
  setError('Username or Password is not correct!');
  header('Location: login.php');
}








?>
