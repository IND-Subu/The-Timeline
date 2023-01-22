<?php
include './components/db_connect.php';
$showAlert = false;
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" />
    <title>Log In</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="/css/login.css" />
    <!-- <meta http-equiv="refresh"  content=""> -->
</head>

<body>
    <div class="form">
        <h1>Login To Our Website</h1>
        <form action="/login.php" method="post">
            <input type="text" id="email" name="user" class="inpbox" placeholder="User Name">
            <input type="password" id="password" name="password" class="inpbox" placeholder="Password">
            <input type="submit" value="LOG IN" id="login" />
            <?php



      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user = $_POST["user"];
        $passwd = $_POST["password"];

        if (!$user and !$passwd) {
          $showAlert = "Fill all Fields";
        } elseif (!$user) {
          $showAlert = "Please Enter Username.";
        } elseif (!$passwd) {
          $showAlert = "Please Enter Password";
        } else {
          $sql = "Select * from userdata where username = '$user' AND password = '$passwd'";
          $result = mysqli_query($conn, $sql);
          $rows = mysqli_num_rows($result);
          if ($rows == 1) {
              session_start();
              $_SESSION['loggedin'] = true;
              $_SESSION['username']= $user;
              echo '<script>window.location.href="/"</script>';
            }
            else {
              $showAlert = 'Invalid Credentials.';
            }
          }
        }
      ?>
            <div class="showAlert"><?php echo "$showAlert"; ?></div>
        </form>
        <div class="blue showAlert"> New user! <a href="/register.php">Click Here</a> to Sign Up.</div>
    </div>
    <?php 
 require('./components/navbar.php'); ?>

</body>

</html>