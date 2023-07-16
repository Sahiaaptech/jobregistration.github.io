<?php
include 'connection.php';
$msg = NULL;
$msg2 = NULL;
if(isset($_POST['signup'])){
$n =mysqli_real_escape_string($con,$_POST['name']) ;
$e =mysqli_real_escape_string($con,$_POST['email']) ;
$p =mysqli_real_escape_string($con,$_POST['pass']) ;
$rp =mysqli_real_escape_string($con,$_POST['re_pass']) ;
$pwd = password_hash($p, PASSWORD_BCRYPT);
$cpwd = password_hash($rp, PASSWORD_BCRYPT);
$emailquery = "select * from signup where email = '$e'";
$query = mysqli_query($con,$emailquery);
$emailcount = mysqli_num_rows($query);
if($emailcount>0)
{
    $msg =  "Email Exist";

}
else
{
    if($p===$rp)
    {
        $insert = "INSERT INTO signup( name, email, password, cpassword) VALUES ('$n','$e','$pwd','$cpwd')";
        $iquery = mysqli_query($con,$insert);
        if($iquery)
        {
            ?>
            <script> alert("Record Inserted")</script>
            <?php
        }
        else
        {
            ?>
             <script> alert("Record Not Inserted")</script>
            <?php
        }
    }
    else
    {
        $msg2 = "Passowrd Not match";
    }
}
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name" required/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" required/>
                                <small style="color:red;"><?php echo $msg; ?></small>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password" required/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password" required/><small style="color:red;"><?php echo $msg2; ?></small>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="signin.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>