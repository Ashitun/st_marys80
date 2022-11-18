<?php

   include "connect.php";
       if(isset($_POST['submit']))
        {
           $user=$_POST['email'];
           $pass=$POST['pass'];
           $sql="INSERT into 'login'('userid','password')values('$user','$pass')";
           mysqli_query($con,$sql);
  
        }
?>

<html>
    <head>
        <title>st_mary codes</title>
</head>
<body>
    <form action="connect.php" method="post">
        <input type="email" name="email" placeholder="enter your user id" name><br><br>
        <input type="password" name="pass" placeholder="enter your password"><br><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>
       
