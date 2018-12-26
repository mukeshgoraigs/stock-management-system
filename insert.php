<?php

//$servername="localhost";
//$username="root";
//$password="";
//$dbname="testing";
//$conn = new mysqli($servername, $username, $password, $dbname);
//// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}

include 'connection.php';
$name=$_GET['name'];
$pas=$_GET['pas'];
$sql = "INSERT INTO example (name,pas)VALUES ('$name','$pas')";
$query=mysqli_query($conn,$sql);
if($query){
 //header("Location: http://localhost/php-project/");
 echo 'Successfully';
 }
 else {
 echo  'Error:';
}
$conn->close();
?>