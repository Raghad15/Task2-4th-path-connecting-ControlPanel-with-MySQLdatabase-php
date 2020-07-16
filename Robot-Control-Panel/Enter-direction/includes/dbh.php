<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "control_panel";

$conn= mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if(!$conn){echo 'Connection error' . mysqli_connect_error();}

if(isset($_POST['Forwards'])){
 $sql = "INSERT INTO directions (direction) VALUES('F');";
 if ($conn->query($sql) === TRUE) {
echo "F, New record created successfully";
header("Location:../Last-record/index.php");
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
}

 if(isset($_POST['Left'])){
   $sql = "INSERT INTO directions (direction) VALUES('L');";
   if ($conn->query($sql) === TRUE) {
 echo "L, New record created successfully";
 header("Location:../Last-record/index.php");
} else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}}

  if(isset($_POST['Stop'])){
    $sql = "INSERT INTO directions (direction) VALUES('S');";
    if ($conn->query($sql) === TRUE) {
  echo "S, New record created successfully";
  header("Location:../Last-record/index.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}}

  if(isset($_POST['Right'])){
    $sql = "INSERT INTO directions (direction) VALUES('R');";
    if ($conn->query($sql) === TRUE) {
  echo "R, New record created successfully";
    header("Location:../Last-record/index.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}}

  if(isset($_POST['Backwards'])){
    $sql = "INSERT INTO directions (direction) VALUES('B');";
    if ($conn->query($sql) === TRUE) {
  echo "B, New record created successfully";
    header("Location:../Last-record/index.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}}
