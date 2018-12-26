<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First linux page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        .form {
            background-color: #f1f1f1;
            text-align: center;
        }
    </style>
</head>
<body>
<form method="get" action="registration.php" >
    <div class="col-md-4 col-md-offset-4">
<h1 style="margin: auto;padding: 10px;width: 50%;">Sign Up</h1>
<div class="form-group">
    Name:<br>
    <input type="text" class="form-control" name = "name"required>
</div>
<div class="form-group">
    Email id:<br>
    <input type="text" class="form-control" name = "email"required>
</div>
        <div class="form-group">
            Mobile:<br>
            <input type="text" class="form-control" name = "mobile"required>
        </div>
        <div class="form-group">
            Password:<br>
            <input type="password" class="form-control" name = "pas"required>
        </div>
        <div class="form">
            <p>Already registered? <a href="http://localhost/test/login.php">Sign in</a>.</p>
        </div>
<input type="submit" class="btn btn-info" name = "submit" value="Registration">

    </div>
</form>
</body>
</html>

<?php
if(isset($_GET['submit']))
{
$servername="localhost";
$username="root";
$password="";
$dbname="testing";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//include 'connection.php';
$name=$_GET['name'];
    $email=$_GET['email'];
    $mobile=$_GET['mobile'];
$pas=$_GET['pas'];
$sql = "INSERT INTO example (name,email,mobile,pas)VALUES ('$name','$email','$mobile','$pas')";
$query=mysqli_query($conn,$sql);
if($query){
//header("Location: http://localhost/php-project/");
echo 'Successfully registration';
}
else {
echo  'Error:';
}
$conn->close();
}
?>