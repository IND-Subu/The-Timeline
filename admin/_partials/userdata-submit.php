<!-- on Click userSubmit Botton data will Insert into database and auto update page -->
<?php
    include('../../components/db_connect.php');
    if (isset($_POST['firstname'])) {
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $email = $_POST['email'];
        $role = $_POST['role'];
        $sql = "INSERT INTO `userdata` (`sl`, `firstName`, `lastName`,`email`,`role`) VALUES (NULL, '$fname','$lname','$email','$role')";
        $result = mysqli_query($conn,$sql);
    }
?>