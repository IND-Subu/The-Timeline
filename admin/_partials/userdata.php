<?php
    include('../../components/db_connect.php');
    if (isset($_POST['firstname'])) {
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $email = $_POST['email'];
        if (strtolower($_POST['role']) == 'admin') {
            $role = 1;
        }
        else{
            $role = 0;
        }
        $sql = "INSERT INTO `userdata` (`sl`, `firstName`, `lastName`,`email`,`role`) VALUES (NULL, '$fname','$lname','$email','$role')";
        $result = mysqli_query($conn,$sql);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Userdata</title>
</head>
<body>
    <table>
        <thead>
            <th>Index</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Action</th>
        </thead>
    <?php
        $sql = "Select * from userdata";
        $sql_run = mysqli_query($conn, $sql);
        //  $rows = mysqli_num_rows($run);
        $i = 0;
        while ($tableData = mysqli_fetch_assoc($sql_run)) {
            $i = $i + 1;
            if($tableData['role'] == 1){$Role = 'Admin';}else{$Role = 'User';}
            echo '
                <tbody>
                    <tr>
                        <td>' . $i . '</td>
                        <td>' . $tableData["firstName"] . '</td>
                        <td>' . $tableData["lastName"] . '</td>
                        <td>' . $tableData["email"] . '</td>
                        <td>' . $Role . '</td>
                        <td>
                        <a href="#" data-eid="'.$tableData["sl"].'" class="edit-pencil uedit"><img src="../src/edit_pencil.png"></a>
                        <a href="#" data-id="'.$tableData["sl"].'" class="delete-btn udelete"><img src="../src/delete.png"></a>
                        </td>
                    </tr>
                </tbody>';
            }
    ?>
    </table>
</body>
</html>