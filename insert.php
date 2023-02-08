<?php

$firstname = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$date = $_POST['date'];

$servername = "localhost";
$username = "root";
$password = "";
$database = "myproject";

$conn = mysqli_connect($servername, $username, $password, $database);

$sql = "INSERT INTO `register`(`name`, `email`, `number`, `date`) VALUES ('$firstname','$email','$number','$date')";

$insert = mysqli_query($conn,$sql);
/*if ($insert) {
	echo "OK";
}else{
	echo "error";
}*/
if($insert){
      $message[] = 'appointment made successfully!';
      echo "OK You made it...!!!";
   }else{
      $message[] = 'appointment failed';
      echo "Oopsss Failed";
   }

?>