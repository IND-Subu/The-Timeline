<?php
require('components/db_connect.php');
$showAlert = false;
require('components/navbar.php');
session_start();
if  (!isset($_SESSION['email'])){
    echo '<!DOCTYPE html>
            <html>
            <head>
                <meta charset="utf-8" />
                <meta http-equiv="X-UA-Compatible" />
                <title>Log In</title>
                <meta name="description" content="Login To Timestamp.org" />
                <meta name="viewport" content="width=device-width, initial-scale=1" />
                <link rel="stylesheet" href="/css/login.css" />
                <!-- <meta http-equiv="refresh"  content=""> -->
            </head>
            <body>
                <div class="form">
                    <h1>Login To Our Website</h1>
                    <form action="/login.php" method="POST">
                        <input type="text" id="email" name="user" class="inpbox" placeholder="User Name" required>
                        <input type="password" id="password" name="password" class="inpbox" placeholder="Password" required>
                        <input type="submit" value="LOG IN" id="login" />';
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                $user = $_POST["user"];
                                $passwd = $_POST["password"];
                                        $sql = "Select * from userdata where email = '$user' AND password = '$passwd'";
                                        $result = mysqli_query($conn, $sql);
                                        $userdata = mysqli_fetch_assoc($result);
                                        // $userdata = array($userdata['email'], $userdata['role']);
                                        $rows = mysqli_num_rows($result);
                                        if ($rows == 1) {
                                            $_SESSION['email'] = $userdata['email'];
                                            $_SESSION['role'] = $userdata['role'];
                                           if ($_SESSION['role'] == 1) {
                                            echo '<script>window.location.href="admin/";</script>';
                                           }
                                           else {
                                            echo '<script>window.location.href="admin/user.php";</script>';
                                           }
                                        // echo $email;
                                        // echo $role;
                                        }
                                    }
                                    
    echo '<p class="showAlert blue">New User! <a href="register.php">Sign Up</a></p></form></div>
            </body>
            </html>';
}
else{
    $returnToPage = $_SERVER['HTTP_REFERER'];
    if ($_SESSION['role'] == 0) {
        echo '<script>window.location.href="admin/";</script>';
    }
    else {
        echo '<script>window.location.href="admin/user.php";</script>';
    }
}

?>




























