<?php


$con= mysqli_connect('localhost','root', '');
mysqli_select_db($con, 'portfolio');


$user =$_POST['username'];
$passw =$_POST['password'];
$cpassw =$_POST['cpassword'];

$sat= "SELECT * FROM userd WHERE usern = '$user' && pass= '$passw'";

$result =mysqli_query($con, $sat);

$mada = mysqli_num_rows($result);


if($mada==1){
    session_start();
    $_SESSION[]
   header('location:../index.html');
}
else{
  

    echo '<script type="text/javascript">alert("invalid username or password...!");window.location=\'login.php\';</script>';
    // header('location:login.php'); 
}





?>