<?php


$con= mysqli_connect('localhost','root', '');
mysqli_select_db($con, 'portfolio');


$user =$_POST['username'];
$passw =$_POST['password'];
$cpassw =$_POST['cpassword'];

$sat= "SELECT * FROM userd WHERE usern = '$user'";

$result =mysqli_query($con, $sat);

$mada = mysqli_num_rows($result);


if($mada==1){
    echo"Username Already Exist";
}
else{
    $red= "INSERT INTO userd VALUES (null, '$user', '$passw', '$cpassw')";

    mysqli_query($con, $red);

    echo '<script type="text/javascript">alert("Message Send Successfully...!");window.location=\'login.php\';</script>';
    // header('location:login.php'); 
}





?>