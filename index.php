<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
  $show = 'Welcome';
} else {
  include 'db_connect.php';
  $uname = $_SESSION['username'];
  $sql = "SELECT * FROM userdata where username = '$uname'";
  $runQuery = mysqli_query($conn, $sql);
  $name_fetch = mysqli_fetch_assoc($runQuery);
  $show = $name_fetch['firstName'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta http-equiv="refresh" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Blog</title>
  <link rel="stylesheet" href="css/style.css" />
  <!-- <link rel="stylesheet" href="/web/css/normalize.css"> -->
  <!-- <link rel="stylesheet" href="/web/css/skeleton.css"> -->
</head>

<body>
  <?php include "./components/navbar.html"; ?>
</body>

</html>