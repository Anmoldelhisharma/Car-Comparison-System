<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
include("config.php");
$u=$_POST['username'];
$p=$_POST['password'];
$query="SELECT username, password FROM customer where username ='$u' and password='$p' ";
$result=mysqli_query($c,$query);
$num=mysqli_num_rows($result);
if($num>0)
{        
$_SESSION['login_user'] = $u;
header("location:compare.php");
}
else {$error="wrong details";
     echo"$error";}
}
?>
<html>
<body bgcolor="black">
<style>
#upper{border:1px solid black;
    height:60%;
margin:10px;
left-margin:0px;
 background-color:white;
}
#middle{border:1px solid red;
    height:30%;
margin:10px;
left-margin:0px;
background-color:VIOLET;
}
#lower{border:1px solid green;
    height:10%;
margin:10px;
padding:5px;
left-margin:0px;
 background-color:YELLOW;
}
</style>
<div id="upper"><img id="backgroundimage" src="image2.jpg" height="350px" width="1328px"></div>
<div id="middle">
<form name="login" method="post" action="">
<center>
<h1>USERNAME: <input type="text" name="username" ><br>
    PASSWORD : <input type="password" name="password"><br><br>
<input type="submit" value="LOGIN"></H1>
<center>
</form>

<div id="lower"><marquee><B></I><FONT COLOR="LIGHT GREY">WELCOME TO THE CUSTOMER LOGIN PAGE</FONT></I></B></marquee></div>

</body>
</html>