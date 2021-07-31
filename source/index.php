<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>  
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<?php

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
// echo "HELLO WORLD!";
// echo "<script>alert('SELAMUN ALEYKUM')</script>";
// echo "<script>var numberpositive = [25,33,31,52,65,99];</script>";

// $myvar = "This is my variable";
// $number = 5;
// $number2 = 3;
// $sum = $number + $number2;
// echo $myvar;
// echo "<br>";
// echo $number;
// echo "<br>";
// echo $sum;

// $name = "Bob James";

// echo "Hello, " . $name;

// echo "<br>";
// echo "<br>";

// $number = 5;
// $number2 = 6;

// $sum = $number . $number2;

// echo $sum;

// $x = 5;
// $y = 3;

// echo ($x == $y);
// echo "<br>";
// echo ($x === $y);

// 0 false 

// 1 true 



// $loggedIn = true;

// if ($loggedIn) {
//     echo "You are logged in";
// } else {
//     echo "Please log in";
// }

// if(isset($_POST['firstname'])) {
// if ($_POST['firstname'] != "") {
// if (isset($_POST['submit_variables'])) {
//     echo ucwords(strtolower($_POST['firstname'])) . " " . $_POST['lastname'];
    
// }


?>

<div class='container'style='max-width: 600px;'>
    <div class='row'>
        <div class='col'>
            <div class='col-sm-12 col-12'>
        
                <form method="POST" action="user.php" >
                    <input class='form-control' type="text" name="firstname" id="name" placeholder="Name">
                    <input class='form-control' type="text" name="lastname" id="lastname" placeholder="Last Name">
                    <input class='form-control' type="email" name="email" id="email" placeholder="Email">
                    <br>
                    <input class='col-sm-12 col-12 btn btn-primary' type="submit" value="Submit" name="submit_variables">

                </form>
            </div>
        </div>
    </div>
</div>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>