<?php
require ("config/config.php");

if(isset($_POST["name"])){
    $email = $_POST["email"];
    $name = $_POST["name"];
    $sms = $_POST["message"];
    $pic= $_FILES["image"]["name"];
    $pic_location= $_FILES["image"]["tmp_name"];

    $moveResult = move_uploaded_file($pic_location, "file/".$pic);
    if($moveResult ==true){
        $sql="INSERT INTO messages values(null,'$name','$email','$sms','$pic')";
        mysqli_query($conn,$sql);
        echo '<script type="text/javascript">alert("Message Send Successfully...!");window.location=\'index.html\';</script>';
    }
}else{
    echo "nothing receive";
}



?>