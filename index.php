<?php
  $insert=false;
  if(isset($_POST['name']))
  {
    $server ="localhost";
    $username= "root";
    $password ="";
    $database ="";
    $con = mysqli_connect($server,$username,$password,$database);

    if(!$con){
        die("connection to database failed ,reason".mysqli_connect_error());
    }

    $name=$_POST['name'];
    $email=$_POST['email'];
    $credit=$_POST['credit'];

    $sql= "INSERT INTO students ( name, email, credit) VALUES ('$name','$email','$credit')";
    if($con ->query(($sql))== true)
    {
     $insert=true;
    }
    else
    {
     echo 'Error :'. $sql .'<br>'. $con ->error;
    }
    $con->close();
}
?>

<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
</head>
<body>
<div id="navbar">
    <h2 class="nav"> Credit management System</h2>
</div>    
<div class="container">
        <div class="button" >
          <a class="text" href="getdetail.php">View Users</p>
        </div>
        <br><br><br>
        <div class="button" >
          <a class="text" href="selectuser.php">Credit Transfer</a>
        </div>
  </div>
  <div class="middle">
     <h1>Made by Akash Kumar Singh</h1>
     <a class="btn" href="https://twitter.com/Akashku45066941">
        <i class="fab fa-twitter"></i>
     </a>
     <a class="btn" href="https://www.instagram.com/a.kash.raj.put/?hl=en">
        <i class="fab fa-instagram"></i>
     </a>
     <a class="btn" href="https://www.github.com/akashrajput25">
        <i class="fab fa-github"></i>
     </a>
     <a class="btn" href="linkedin.com/in/akash-rajput-3813801a1">
       <i class="fab fa-linkedin"></i>
     </a>
  </div>
</body>
</html>

