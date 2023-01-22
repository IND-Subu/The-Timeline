<?php
include '../components/db_connect.php';
if (isset($_POST['name'])) {
    $catagory = $_POST['name'];
    $query = "Select * from catagories where Catagory = '$catagory'";
    $runQuery = mysqli_query($conn, $query);
    if (!$catagory) {
        echo 'Fields can not Be Empty..';
    } elseif (mysqli_num_rows($runQuery) > "0") {
        echo 'Catagory Already Esixt..';
    } elseif (mysqli_num_rows($runQuery) == "0") {
        $sql = "INSERT INTO `catagories` (`index_no`, `Catagory`) VALUES (NULL, '$catagory')";
        $run = mysqli_query($conn, $sql);
        echo "Catagory Added: " . '"' . $catagory . '"';
    } else {
        $message = die("Error" . mysqli_connect_error());
    }
}

?>