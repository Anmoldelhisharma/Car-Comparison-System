<?php
session_start();
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   } 
if($_SERVER["REQUEST_METHOD"]=="POST")
{
include("config.php");
$u=$_POST['car'];
$p=$_POST['mileage'];
$x=$_POST['price'];
$query="INSERT INTO addcar".
       "(car,mileage,price) ".
       "VALUES ".
       "('$u','$p','$x')";
$result=mysqli_query($c,$query);
if($result)
{        
echo '<font color="#FF00FF" size="50"><center>Data Entered Successfully</center></font>';
}
else {$error="wrong details";
     echo"$error";}
}
?>
<html><head><title>CAR COMPARISON</title>
<style>div {
    background-color:pink;
    width: 600px;
    border: 12px solid blue;
    padding: 25px;
    margin: 25px;
}</style></head><body>
<form name="login" method="post" action="">
<center><div>
<h1>CAR: <input type="text" name="car" ><br>
    MILEAGE: <input type="text" name="mileage"><br>
PRICE: <input type="text" name="price" ><br><br>
<input type="submit" value="LOGIN"></H1><br><br></div>
<center>
</form>
</body>
</html>