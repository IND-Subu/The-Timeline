<?php
    include('../../components/db_connect.php');
    if (isset($_POST['catagory_id'])) {
        $catagory = $_POST['catagory_id'];
        $sql = "INSERT INTO `catagories` (`index_no`, `Catagory`) VALUES (NULL, '$catagory')";
        $result = mysqli_query($conn,$sql);
    }
?>