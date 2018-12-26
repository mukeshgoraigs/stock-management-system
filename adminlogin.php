<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign in</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<form action="adminlogin.php" method="post">
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
            <h1 style="margin: auto;padding: 10px;width: 50%;">Admin Login</h1>
            <div class="form-group">
                <label>Name</label>
                <input type="text"class="form-control" name="name" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="pass" required>
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
if(isset($_POST['submit']))
{
    include 'connection.php';
    $name=$_POST['name'];
    $pass=$_POST['pass'];
    $sql="SELECT * FROM login WHERE name ='$name' AND pass='$pass'";
    $result=$conn->query($sql);
    if ($row=$result->fetch_assoc())
    //if(!$result)
    {
//        $_SESSION['username']=$username;
//        header("Location: http://localhost/sms/admin/admindash.php");
        echo "login sucessfully";
    }
    else
    {
        //header("http://localhost/sms/user/login.php");
        echo "failed";
    }
}
?>