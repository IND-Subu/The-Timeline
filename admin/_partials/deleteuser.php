<?php
    include('../../components/db_connect.php');
        $id = $_POST['uid'];
        $sql = "DELETE FROM `userdata` WHERE `userdata`.`sl` = $id";
        $result = mysqli_query($conn,$sql);
?>
