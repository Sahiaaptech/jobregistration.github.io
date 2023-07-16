<?php
session_start();
include 'connection.php';
$msg = NULL;
$msg2 = NULL;
if(isset($_POST['signin'])){

$e =mysqli_real_escape_string($con,$_POST['email']) ;
$p =mysqli_real_escape_string($con,$_POST['pass']) ;


$emailquery = "select * from signup where email = '$e'";
$query = mysqli_query($con,$emailquery);
$emailcount = mysqli_num_rows($query);
if($emailcount)
{
    $email_pass= mysqli_fetch_assoc($query);
    $db_pass=$email_pass['password'];
    $_SESSION['name']=$email_pass['name'];
    $pass_decode=password_verify($p,$db_pass);
    if($pass_decode)
    {
        if(isset($_POST['remember-me']))
        {
            setcookie('emailcookie',$e,time()+86400);
            setcookie('passcookie',$p,time()+86400);
            header('location:index.php');

        }
        else
        {
            header('location:index.php');

        }
    }
    else
    {
        $msg= "incorrect password";
    }

}
else
{
    $msg2= "Invalid email";
}
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">


        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="signup.php" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign In</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="email" id="your_name" placeholder="Your Email" value="<?php if(isset($_COOKIE['emailcookie'])){
                                    echo $_COOKIE['emailcookie'];
                                }
                                ?>"/>   <small style="color:red;"><?php echo $msg2; ?></small>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="your_pass" placeholder="Password" value="<?php if(isset($_COOKIE['passcookie'])){
                                    echo $_COOKIE['passcookie'];
                                }
                                ?>"/>
                                <small style="color:red;"><?php echo $msg; ?></small>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
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

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>