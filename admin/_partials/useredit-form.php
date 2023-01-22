<?php
    include('../../components/db_connect.php');
    $id = $_POST['id'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['e_mail'];
    $role = $_POST['role_id'];
    echo $fname;
    $sql = "UPDATE `userdata` SET `firstName` = '$fname', `lastName` = '$lname', `email` = '$email', `role` = '$role' WHERE `userdata`.`sl` = '$id'";
    $sql_run = mysqli_query($conn,$sql);

?>