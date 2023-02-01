<!-- Auto Update userData on Page Load -->
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
        include('../../components/db_connect.php');
        $sql = "Select * from userdata";
        $sql_run = mysqli_query($conn, $sql);
        //  $rows = mysqli_num_rows($run);
        $i = 0;
        while ($tableData = mysqli_fetch_assoc($sql_run)) {
            $i = $i + 1;
            echo '
                <tbody>
                    <tr>
                        <td>' . $i . '</td>
                        <td>' . $tableData["firstName"] . '</td>
                        <td>' . $tableData["lastName"] . '</td>
                        <td>' . $tableData["email"] . '</td>
                        <td>' . $tableData["role"] . '</td>
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