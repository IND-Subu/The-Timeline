<?php
    include('../../components/db_connect.php');
    $id = $_POST['c_id'];
    $catagory = $_POST['catagory'];
    $sql = "UPDATE `catagories` SET `Catagory` = '$catagory' WHERE `catagories`.`index_no` = '$id'";
    $sql_run = mysqli_query($conn,$sql);

?>