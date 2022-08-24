<?php
session_start();
if(isset($_SESSION['user']) == "zoozehab@gmail.com"){
  header('Location: acc.html');
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>signin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </head>
  <body>

    <div class="container-fluid">


      <nav class="navbar navbar-expand-lg fixed-top" style="background-color:#6a728a;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Welcome</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="welcome.html">Home</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>




    </div>
    <div class="container">
      <div class="mt-4 p-5 bg-dark text-white rounded">
        <p style="color:red;">
        <?php
        if(isset($_SESSION['error'])){
          echo $_SESSION['error'];
        }
        ?>
        </p>
        
          <form class="row g-3" action="check.php" method="post" >
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label" >Email</label>
          <input type="email" class="form-control" name="email" id="inputEmail4" >
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Password</label>
          <input type="password" class="form-control" name="password" id="inputPassword4" >
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Address</label>
          <input type="text" class="form-control" name="address" id="inputAddress" placeholder="1234 Main St" >
        

        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" name="cookie_agree" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Do you agree to save the cookies ? 
            </label>
          </div>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary" >Sign in</button>
        </div>
          </form>

        </div>

      </div>



  </body>
</html>
<?php
if(isset($_SESSION['error'])){
  unset($_SESSION['error']);
}