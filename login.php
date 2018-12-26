<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign in</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .form {
            background-color: #f1f1f1;
            text-align: center;
        }
    </style>
</head>
<body>
<form action="login.php" method="GET">
    <div class="container-fluid">

        <div class="row border">
            <div class="col-md-6 ">
                <h6 >mukeshgorai21@gmail.com</h6>
            </div>
            <div class="col-md-6">

                <h6 class="text-right">9742844504</h6>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h1 style="margin: auto;padding: 10px;width: 50%;">Login</h1>
            <div class="form-group">
                <label>Name</label>
                <input type="text"class="form-control" name="name" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="pas" required>
            </div>
            <div class="form">
                <p>Already have an account? <a href="http://localhost/test/registration.php">Sign in</a>.</p>
            </div>
            <div class="form-group">
                <button class="btn btn-primary" name="submit">Sign in</button>
            </div>
        </div>
    </div>
</form>
</body>
</html>
<?php
if(isset($_GET['submit']))
{
    include 'connection.php';
    $name=$_GET['name'];
    $pas=$_GET['pas'];
    $sql="SELECT * FROM example WHERE name ='$name' AND pas=$pas";
    $result=$conn->query($sql);
    if ($row=$result->fetch_assoc())
    //if(!$result)
    {
//        $_SESSION['username']=$username;
       header("Location: home.html");
        //echo "login sucessfully";
    }
    else
    {
        //header("http://localhost/sms/user/login.php");
        echo "failed";
    }
}
?>