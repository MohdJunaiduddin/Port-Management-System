<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script>
    function func1(){
      window.location.href="welcome3.php";
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
    <?php
    session_start();
    $con=new mysqli("localhost","root","");
    $df="CREATE DATABASE IF NOT EXISTS PORT";
    $con->query($df);
    $us="USE PORT";
    $con->query($us);
    if($_SESSION['username']==NULL || $_SESSION['type']!='Authority'){
      echo"<script>window.location.href='signin.php'</script>";
    }
    ?>
    <meta charset="utf-8">
    <title>Dock Details</title>
  </head>
    <body class="bg1">
  <center>
  <div class="topnav" align="center">
  <!-- <button onclick="func()"><img src="user.png" /></button> -->
  <button class="but" onclick="func1()"><b>Home</b></button>
  <!-- <h2 align="center" style="display:inline; color:white" >Marley Port</h2> -->
  <button class="but" onclick="func()"><img src="user.png" width="20px" /></button>
  <!-- <form action="welcome1.php" method="POST">
  <input type="image" src="user.png" width="20px" name="but" class="but" >
  </form> -->
</div>
<nav id="floating-menu">
<center>
<img src="office.png" width="60px" />

<?php echo "<h1 style=' font-family:Courier New;' ><b>" .$_SESSION['username']."</b></h1>" ?> <br>
<form action="welcome1.php" method="POST">
<!-- <input type="submit" class="buti" name="let" value="My Profile" -->
<input type="submit" class="buti" name="let1" value="Log out">
</form>
<!-- <button class="buti" onclick="window.location='signin.php'">View Profile</button><br><br> -->
<!-- <button class="buti" onclick="f1()">Log out</button><br><br><br> -->

</nav>
<script>
var x = document.getElementById("floating-menu");
x.style.display = "none";
</script>
<br><br>


    <h1 align='center' class="box2" style="color:AliceBlue ;font-family: 'Courier New', monospace;">Details Of The Docks</h1> <br><br>
      </center>
    <?php
    $f="SELECT * FROM DOCKS";
    $res=$con->query($f);
    if($res->num_rows>0){
      echo"<table><tr><th>Dock No.</th><th>Ship id.</th><th>Size</th><th>Company</th><th>Type</th><th>Entry Date</th></tr>";
      while($row=$res->fetch_assoc()){
        echo"<tr><td>",$row['Dock_No'],"</td><td>",$row['Ship_id'],"</td><td>",$row['Size'],"</td><td>",$row['Company'],"</td><td>",$row['Type'],"</td><td>",$row['Entry_Date'],"</td></tr>";
      }
      echo"</table>";
    }
    else{
      echo"<center><h1 class='box3' style=\"color:yellow ;font-family: 'Courier New', monospace;\" >No Docks are occupied at the moment</h1> </center>";
    }
    // echo $_GET['ID'];
     ?>
  </body>
</html>
