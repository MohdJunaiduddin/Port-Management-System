<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="style9.css">

  <?php
  session_start();
  $con=new mysqli("localhost","root","");
  $df="CREATE DATABASE IF NOT EXISTS PORT";
  $con->query($df);
  $us="USE PORT";
  $con->query($us);
  $cr="CREATE TABLE IF NOT EXISTS Authority(Username varchar(255) PRIMARY KEY,Password varchar(16) NOT NULL,Email varchar(50) NOT NULL)";
  $con->query($cr);
  $cs="CREATE TABLE IF NOT EXISTS Shipping(Username varchar(255) PRIMARY KEY,Password varchar(16) NOT NULL,Email varchar(50) NOT NULL)";
  $con->query($cs);
  $ct="CREATE TABLE IF NOT EXISTS Admin(Username varchar(255) PRIMARY KEY,Password varchar(16) NOT NULL)";
  $con->query($ct);
  $bv="CREATE TABLE IF NOT EXISTS Avadocks(Dock_no int PRIMARY KEY,Availability varchar(10))";
  $con->query($bv);
  $lk="SELECT *FROM Admin";
  $req=$con->query($lk);
  if($req->num_rows<=0){
    $f="INSERT INTO ADMIN VALUES ('admin',1234)";
    $con->query($f);
  }$lk="SELECT *FROM Avadocks";
  $req=$con->query($lk);
  if($req->num_rows<=0){
    for($i=1;$i<100;$i=$i+1){
      $lka="INSERT INTO Avadocks VALUES('$i','Yes')";
      $con->query($lka);
    }
  }

   ?>
    <meta charset="utf-8">
    <title>Sign in</title>
  </head>
  <body class="bg1">
    <center>
      <br><br><br><br>
      <div class="box1">
    <h1 class="box2" style="color:AliceBlue ;font-family: 'Courier New', monospace;">Sign In</h1><br>
    <form action="signin.php" method="POST">
      <input type="text" name="User" placeholder="Username" required><br>
      <input type="password" name="pass" placeholder="Password" required>
      <br>
      <div class="rad">
  <label for="Authority" class="container"><b>Port Authority</b>
  <input type="radio" id="Authority" name="Category" value="Authority" checked="checked">
  <span class="checkmark"></span>
  </label>
<label for="Company" class="container"><b>Company</b>
  <input type="radio" id="Company" name="Category" value="Company">
<span class="checkmark"></span>
  </label>
<label for="Admin" class="container"><b>Administration</b>
  <input type="radio" id="Admin" name="Category" value="Admin">
<span class="checkmark"></span>
  </label>
</div>
  <input type="submit" value="Sign In" name="sign">
</form>
<!-- <br> -->
<hr>
<form action="signup.php" method="post">
  <div class="pok">
    Don't Have An Account ?
  </div>
  <input type="submit" value="Sign Up">
</form>
</div>
<?php
  if(isset($_POST["sign"])){
    $x=$_POST["Category"];
    $u=$_POST["User"];
    $p=$_POST["pass"];
    // echo "e ".$x." s";
    if($x=="Admin"){
      $sp="SELECT *FROM Admin WHERE (Username='$u') ";
      if($res=$con->query($sp)){
        // echo "OK";
      }
      else{
        // echo"NOT OK";
      }
      if($res->num_rows>0){
        while($row=$res->fetch_assoc()){
          if($row['Username']==$u && $row['Password']==$p){
            $_SESSION["username"]=$u;
            $_SESSION["type"]=$x;
            echo"<script>window.location.href='welcome2.php'</script>";
          }
          else{
            echo"<script>alert('Incorrect password')</script>";
          }
        }
      }
      else{
        echo"<script>alert('Username incorrect')</script>";
      }
    }
    if($x=="Company"){
      $sp="SELECT *FROM Shipping WHERE (Username='$u') ";
      if($res=$con->query($sp)){
        // echo "OK";
      }
      else{
        // echo"NOT OK";
      }
      if($res->num_rows>0){
        while($row=$res->fetch_assoc()){
          if($row['Username']==$u && $row['Password']==$p){
            $_SESSION["username"]=$u;
            $_SESSION["type"]=$x;
            echo"<script>window.location.href='welcome1.php'</script>";
          }
          else{
            echo"<script>alert('Incorrect password')</script>";
          }
        }
      }
      else{
        echo"<script>alert('Username incorrect')</script>";
      }
    }
    if($x=="Authority"){
      $sp="SELECT *FROM Authority WHERE (Username='$u') ";
      if($res=$con->query($sp)){
        // echo "OK";
      }
      else{
        // echo"NOT OK";
      }
      if($res->num_rows>0){
        while($row=$res->fetch_assoc()){
          if($row['Username']==$u && $row['Password']==$p){
            $_SESSION["username"]=$u;
            $_SESSION["type"]=$x;
            echo"<script>window.location.href='welcome3.php'</script>";
          }
          else{
            echo"<script>alert('Incorrect password')</script>";
          }
        }
      }
      else{
        echo"<script>alert('Username incorrect')</script>";
      }
    }
  }

 ?>

  </body>
</html>
