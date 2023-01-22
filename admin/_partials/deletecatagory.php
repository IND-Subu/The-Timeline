<?php
    include('../../components/db_connect.php');
        $id = $_POST['cid'];
        $sql = "DELETE FROM `catagories` WHERE `catagories`.`index_no` = $id";
        $result = mysqli_query($conn,$sql);
?>
