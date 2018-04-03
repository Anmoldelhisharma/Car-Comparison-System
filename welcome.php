<?php
 session_start();
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>
<html>
<head><style type"text/css">
p { 
    word-spacing: 30px;
}
body
{background:url(lexington.png) no-repeat;
background-size:100%;    
background-attachment: fixed;
}
h1{ -ms-transform: rotate(-15deg);
-webkit-transform: rotate(-15deg);
transform: rotate(-15deg);
text-align:CENTER;
font-size:125px;}
a:link {
    background-color: yellow;
    color: red;
}

a:visited {
    background-color: cyan;
    color: green;
}

a:hover {
    background-color: lightgreen;
     color: pink;
}

a:active {
    background-color: hotpink;
     color: yellow;
} 

</style>
<title>RESTRO</title>

</head>
<body>
<form>
<br><br>
<P><A HREF="add.php">Add_Car</A>
<font color="red">
<br><br><br><br>
<h1><B><h1><FONT COLOR="dirty">WELCOME</FONT></B></H1></MARQUEE>
</form>
</body>
</html>