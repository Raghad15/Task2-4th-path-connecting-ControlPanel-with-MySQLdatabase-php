
<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "control_panel";

$conn= mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if(!$conn){echo 'Connection error' . mysqli_connect_error();}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <?php
 $sql ="SELECT direction FROM directions ORDER BY id DESC LIMIT 1;";
 $result= $conn->query($sql);
 if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "Last direction: " . $row["direction"]. "<br>";
   }
 } else {
   echo "0 results";
 }
  ?>
</body>
</html>
