<html>


<?php 
session_start();
$email=$_SESSION["email"];
$password=$_SESSION["password"];

$uemail=$_POST["uemailid"];
$upassword=$_POST["upassword"];
$welcome="<h1>welcome</h1> ";

if($email == $uemail and $password == $upassword)
{
 echo $welcome ;
 
}
else{
    echo "incorrect details";
}

?>




</html>
