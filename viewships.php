<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script>
    function func1(){
      window.location.href="welcome1.php";
    }
    function func() {
      var x = document.getElementById("floating-menu");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }
    </script>
    <link rel="stylesheet" href="style9.css">
    <?php session_start();
    $con=new mysqli("localhost","root","");
    $df="CREATE DATABASE IF NOT EXISTS PORT";
    $con->query($df);
    $us="USE PORT";
    $con->query($us);
    if($_SESSION['username']==NULL || $_SESSION['type']!='Company'){
      echo"<script>window.location.href='signin.php'</script>";
    } ?>
    <meta charset="utf-8">
    <title>Ships Details</title>
  </head>
  <body class="bg1">
    <div class="topnav" align="center">
    <!-- <button onclick="func()"><img src="user.png" /></button> -->
    <!-- <a href="welcome1.php">Home</a> -->
    <button class="but" onclick="func1()"><b>Home</b></button>
    <!-- <h2 align="center" style="display:inline; color:white" >Marley Port</h2> -->
    <button class="but" onclick="func()"><img src="user.png" width="20px" /></button>
    <!-- <form action="welcome1.php" method="POST">
    <input type="image" src="user.png" width="20px" name="but" class="but" >
    </form> -->
  </div><center>
    <nav id="floating-menu">
    <center>
    <img src="office.png" width="60px" />

    <?php echo "<h1 style=' font-family:Courier New;' ><b>" .$_SESSION['username']."</b></h1>" ?> <br>
    <form action="welcome1.php" method="POST">
    <!-- <input type="submit" class="buti" name="let" value="My Profile"> -->
    <input type="submit" class="buti" name="let1" value="Log out">
    </form>
    </nav>
    <script>
    var x = document.getElementById("floating-menu");
    x.style.display = "none";
    </script>
<br><br>
    <h1 align='center' class="box2" style="color:white;">Details Of Your Ships</h1> <br><br>
      </center>
    <?php
    $x=$_SESSION['username'];
    $f="SELECT * FROM ships WHERE(Company='$x')";
    $res=$con->query($f);
    if($res->num_rows>0){
      echo"<table><tr><th>Ship id.</th><th>Size</th><th>Company</th><th>Type</th></tr><b>";
      while($row=$res->fetch_assoc()){
        echo"<tr><td>",$row['Ship_id'],"</td><td>",$row['Size'],"</td><td>",$row['Company'],"</td><td>",$row['Type'],"</td></tr>";
      }
      echo"<\b></table>";
    }
    else{
      echo"<center><h1 class='box3' style=\"color:yellow ;font-family: 'Courier New', monospace;\" >You have no ships registered</h1> </center>";
    }
     ?>
  </body>
</html>
