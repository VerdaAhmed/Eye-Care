<?php
include("Database_Connection.php");
?>
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="../Styling/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../Styling/css/style.css">
</head>
<body>

<?php
if(isset($_POST["btn_login"]))
{

	$user_name = $_POST["username"];
	$user_password = $_POST["pass"];
	
	$query = mysqli_query($conn,"select * from user_table where user_name ='".$user_name."'");
	// $pro = mysqli_fetch_array($query);
    $user_id = $_POST["user_id"];
	foreach($query as $row)
	{
	if($row ["user_name"] == $user_name && $row ["user_pass"] == $user_password)
	{
        $_SESSION["id"] = $row ["user_id"];
        $_SESSION["pas"] = $row ["user_pass"];
		$_SESSION["un"] = $row ["user_name"];
		
		if(isset($_POST["chk"]))
		{
			setcookie("user_n",$user_id,time()+50);
			setcookie("user_pass",$user_password,time()+50);
			setcookie("user_id",$user_password,time()+50);
		}
		
		
		
		header("Location:myacc.php");
		
	}
	else
	{
		$result = "Invalid Username and Password";
		
	}
}
}


?>
    <!-- <div class="main"> -->
<section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="../Styling/images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="Register.php" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign In</h2>
                        <form method="POST" class="register-form" id="login-form" action="login.php">
                            <div class="form-group">
                                <label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" Required id="username" placeholder="Username" value="<?php if(isset($_COOKIE["user_n"])) echo $_COOKIE["user_n"]?>" />
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" Required id="pass" placeholder="Password" value="<?php if(isset($_COOKIE["user_pass"])) echo $_COOKIE["user_pass"]?>"/>
                            </div>
                            <!-- <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div> -->
                            <div class="form-group">
						<input class="agree-term" id="chk" type="checkbox" name="chk" <?php if(isset($_COOKIE["user_n"])) echo "checked"?>>
						<label for="chk" class="label-agree-term"><span><span></span></span>Remember me</label>
					</div>
                            <div class="form-group form-button">
                                <input type="submit" name="btn_login" class="form-submit" value="Log in"/>
                            </div>
                            <div class="form-group form-button">
                            <label style="color: black;"></label>
<?php if(isset($_POST["btn_login"])) echo $result?>
                            </div>                       

                        </form>                                

                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <!-- </div> -->

    <!-- JS -->
    <script src="../Styling/vendor/jquery/jquery.min.js"></script>
    <script src="../Styling/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>