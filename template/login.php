<?php
session_start();
$conn = mysqli_connect('localhost','root','','medi_claim');
if (!$conn) 
{
   die("Connection failed: " . mysqli_connect_error());
}


?>



<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="assets/css/login.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body style="padding-top:150px;">
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Sign In</h5>
            <form action="login.php" class="form-signin" method="post">
              <div class="form-label-group">
                <input name="username" type="text" id="inputUsername" class="form-control emailInput" placeholder="Username" required autofocus>
                <label for="inputUsername">Username</label>
              </div>

              <div class="form-label-group">
                <input name="password" type="password" id="inputPassword" class="form-control passwordInput" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
              <?php
                if(isset($_POST["username"]))
                {
                    if($_POST["username"]!="" and $_POST["password"]!="")
                    {
                        $username = $_POST["username"];
                        $pwd = $_POST["password"];
                        $sql = "SELECT * FROM users WHERE username='$username' AND pwd='$pwd'";
                        $result=mysqli_query($conn,$sql);
                        $count = mysqli_num_rows($result);
                        if($count>0)
                        {
                            echo "<script> location.href='http://localhost/medical_claim/template/newdash.php'; </script>";
                            exit;
                        }
                        else if($count==0)
                        {
                            echo "<br><h6 style='color:red;'>Wrong Credentials</h6>";
                        }
                        unset($_POST['username']);
                        unset($_POST['pwd']);

                    }
                    else
                    {
                        if($_POST["email"]!="")
                        {
                            echo "<h3>Please Enter Your Email Id</h3>";
                        }
                        if($_POST["password"]!="")
                        {
                            echo "<h3>Please Enter Your Password</h3>";
                        }
                        
                    }

                    
                }
              ?>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>