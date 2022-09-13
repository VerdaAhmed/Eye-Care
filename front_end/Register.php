<?php
include("Database_Connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="../Styling/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../Styling/css/style.css">
</head>
<body>
<?php
if(isset($_POST["btn_sign"]))
{
	
$user_name = $_POST["name"];
$user_phone = $_POST["phone"];
$user_email = $_POST["email"];
$user_pass = $_POST["pass"];
$user_cpass = $_POST["cpass"];

if ($_POST["pass"] === $_POST["cpass"]) {

$query = "insert into user_table(user_name,user_phone,user_email,user_pass,user_c_pass) values('".$user_name."','".$user_phone."','".$user_email."','".$user_pass."','".$user_cpass."')";

$exe = mysqli_query($conn,$query);
if($exe)
{
	$print = "Registration Successfull";
}

else
{
	$print = "Record Not Inserted";;
}
}
else
{
	$print = "Password Not Matched";;
}
}
?>
    <!-- <div class="main"> -->

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form" action="Register.php">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" Required placeholder="Your Name"/>
                            </div>
							<div class="form-group" data-validate = "Phone is required">
                                <label for="phone"><i class="zmdi zmdi-phone"></i></label>
                                <input type="phone" name="phone" id="phone" Required placeholder="Your Phone"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" Required placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" Required placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="cpass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="cpass" id="cpass" Required placeholder="Confirm your password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="btn_sign" id="btn_sign" class="form-submit" value="Register"/>
                            </div>
							<div class="text-center w-full p-t-42 p-b-22">
						<span class="txt1" style="color:crimson; font-weight:bold;">
					<?php if(isset($_POST["btn_sign"])) echo $print ?>
						</span>
						</div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="../Styling/images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="login.php" class="signup-image-link">I am already member</a>
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