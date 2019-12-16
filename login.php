<!DOCTYPE HTML>
<html>
<head>
<title>Bootstrap Login</title>

<!-- bootstrap-3.3.7 -->
<link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">
<script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>

<!-- JQUERY -->
<script type="text/javascript" language="javascript" src="jquery/jquery.js"></script>

<link href="style/style.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" language="javascript" src="style/style.js"></script>

</head>
<body>

<div class="container">
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="3.png" />
            <p id="profile-name" class="profile-name-card">login</p>
            <form class="form-signin" action="" method="POST">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="email" required autofocus>
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                <br>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit"  name="login">Sign in</button>
                


            </form>
            <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit"  name="signup"><a href="signup.php" >Sign up</button>
            
        </div>
</div>

</body>
</html>
<?php
include "db_con.php";
IF(ISSET($_POST['login'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$cek = mysqli_num_rows(mysqli_query($con,"SELECT * FROM user_login WHERE email='$email' AND password='$password'"));
	$data = mysqli_fetch_array(mysqli_query($con,"SELECT * FROM user_login WHERE email='$email' AND password='$password'"));
	IF($cek > 0)
	{
		
		session_start();
		$_SESSION['email'] = $data['email'];
		$_SESSION['name'] = $data['name'];
		echo "<script language=\"javascript\">alert(\"welcome \");document.location.href='tried.html';</script>";
	}else{
		echo "<script language=\"javascript\">alert(\"Invalid username or password\");document.location.href='login.php';</script>";
	}
}
?>