<!DOCTYPE HTML>
<html>
<head>
<title>SignUp</title>

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
            <img id="profile-img" class="profile-img-card" src="2.png" />
            <p id="profile-name" class="profile-name-card">Sign Up</p>
            <form class="form-signin" action="sign.php" method="POST">
            <input type="text"  name="name" class="form-control" placeholder="name" required autofocus>

                <span id="reauth-email" class="reauth-email"></span>
               
                <input type="email"  name="email" class="form-control" placeholder="Email address" required autofocus>
                <input type="password"  name="password" class="form-control" placeholder="Password" required>

                <br>
                <button class="btn btn-lg btn-primary btn-block btn-signup" type="submit"  name="signup">Sign up</button>
            </form>
            <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit"  name="signin"><a href="login.php">Sign in</button>
            
        </div>
</div>

</body>
</html>



