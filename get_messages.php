<?php
require ("config/config.php");
$sql="SELECT * FROM messages ";
$qurey = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($qurey)){
    $email = $row["email"];
    $name = $row["name"];
    $sms = $row["message"];
    $pic= $row["filename"];

   echo "<img src='./file/$pic' width='200 alt=''><br> $name <br>$email<br>$sms<br><br><br><br>";
}
?>