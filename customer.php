<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
include("config.php");
$u=$_POST['name'];
$p=$_POST['username'];
$x=$_POST['password'];
$y=$_POST['confirmpassword'];
$query="INSERT INTO customer".
       "(name,username,password,confirmpassword) ".
       "VALUES ".
       "('$u','$p','$x','$y')";
$result=mysqli_query($c,$query);
if($result)
{        
$_SESSION['login_user'] = $u;
header("location:customer.php");
}
else {$error="wrong details";
     echo"$error";}
}
?>
 <html>
<body bgcolor="black">
<style>
h1 {
    text-align: left;
}

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
    height:5%;
margin:10px;
left-margin:0px;
 background-color:YELLOW;
}
</style>
<div id="upper"><img src="image2.jpg" height="350px" width="1328px"></div>
<div id="middle"><a href="customerlogin.php"><img id="backgroundimage" src="customerpic.jpg" height="150px" width="" align="right"></a><center>
<form name="" method="post" action="customer.php">
<center>
<h1>NAME: <input type="text" name="name">
USERNAME: <input type="text" name="username" ><br>
    PASSWORD : <input type="password" name="password">
CONFIRM PASSWORD : <input type="password" name="confirmpassword"><br><BR>
<CENTER><input type="submit" value="SIGNUP"></H1></div>
</center></div>
<div id="lower"><marquee><B></I><FONT COLOR="LIGHT BLUE">WELCOME TO THE CUSTOMER PAGE</FONT></I></B></marquee></div>
</body>
</html>