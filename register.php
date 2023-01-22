<?php include './components/db_connect.php';
$showAlert = false;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Register</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- <link rel="stylesheet" href="/css/register.css" /> -->
    <link rel="stylesheet" href="/css/login.css">
    <!-- <meta http-equiv="refresh" content="3"> -->
</head>

<body>
<?php 
 require('./components/navbar.php'); ?>
    <div class="form">
        <h1>Register Yourself</h1>
        <form action="/register.php" method="post">
            <input type="text" name="fname" id="fname" placeholder="First Name" class="inpbox">
            <input type="text" name="lname" id="lname" placeholder="Last Name" class="icon-search inpbox">
            <input type="email" name="email" id="email" placeholder="Email" class="inpbox">
            <input type="password" name="password" id="password" placeholder="Password" class="inpbox">
            <input type="password" name="confpassword" id="confpassword" placeholder=" Conform Password" class="inpbox">
            <?php
                if (isset($_SESSION['loggedin'])) {
                  echo '<div class="showAlert blue"> You are Already Logged In.! <a href="/logout.php" >Click Here</a> to Logout First.</div>';
                } 

            ?>
            <input type="submit" value="LOG IN" id="login" />
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  $fname = $_POST["fname"];
                  $lname = $_POST["lname"];
                  $email = $_POST["email"];
                  $passwd = $_POST["password"];
                  $cpasswd = $_POST["confpassword"];
                  if (!isset($_POST)) {
                    $showAlert = "Fill all Fields";
                  } elseif (!$fname) {
                    $showAlert = "Please Enter First Name.";
                  } elseif (!$lname) {
                    $showAlert = "Please Enter Last Name.";
                  } elseif (!$email) {
                    $showAlert = "Please Enter Your Email.";
                  } elseif ($passwd != $cpasswd) {
                    $showAlert = "Password does not match.";
                  } else {
                    $verify_email = "Select * from userdata where email = '$email'";
                    $verified_email_dataCount = mysqli_query($conn, $verify_email);
                    $verified_email = mysqli_num_rows($verified_email_dataCount);
                    if ($verified_email == 0) {
                      $sql = "INSERT INTO `userdata` (`firstName`, `lastName`, `email`, `password`,`username`, `dTime`) VALUES ('$fname', '$lname', '$email', '$passwd', '$fname$lname', current_timestamp())";
                      $result = mysqli_query($conn, $sql);
                      $showAlert = "Submitted Successfully";
                      echo '<script> window.location.href="/login.php";</script>';
                    }
                    else{
                      $showAlert = 'Email Address Already Exits.';
                    }
                  }
                }
              ?>
            <div class="showAlert"><?php echo "$showAlert"; ?></div>
            <p class="showAlert blue">Already have a Account! <a href="login.php">Log In Here.</a> </p>
          </form>
        </div>
   
</body>

</html>