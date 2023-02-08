


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  


<meta name="viewport" content="width=device-width, initial-scale=1">
<style> 
input[type=text] {
  width: 130px;
  box-sizing: border-box;
  margin-left: 24em;
  margin-top: 3em;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-image: url('searchicon.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
  width: 30%;
}
</style>



</head>
<body>


  
<form>
  <input type="text" name="search" placeholder="Search..">
</form>



<div class="container">
  <h2>MY Data Base</h2>          
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "myproject";

$conn = mysqli_connect($servername, $username, $password, $database);

$sql = "select * from register";

$result = mysqli_query($conn, $sql);

/*$row = mysqli_fetch_assoc($result);

print_r($row);*/

while ($row = mysqli_fetch_assoc($result)) {

	echo '<tr>';
      echo  '<td>'.$row['id'].'</td>';
      echo  '<td>'.$row['name'].'</td>';
      echo  '<td>'.$row['email'].'</td>';
      echo  '<td>'.$row['number'].'</td>';
      echo  '<td>'.$row['date'].'</td>';

      echo '</tr>';
  }
?>


</tbody>
  </table>
</div>

<div style="margin-left: 28em;">
<button>
	<a href="index.php" style="color: black; background-color: grey; font-size: 2em;"> Go to Main Page </a>

</button>
</div>

</body>
</html>