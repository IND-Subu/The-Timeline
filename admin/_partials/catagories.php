<?php
    include('../../components/db_connect.php');
    if (isset($_POST['cname'])) {
        $name = $_POST['cname'];
        $sql = "INSERT INTO `catagories` (`index_no`, `Catagory`) VALUES (NULL, '$name')";
        $result = mysqli_query($conn,$sql);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catagories</title>
</head>
<body>
    <table>
        <thead>
            <th>Index</th>
            <th>Catagory</th>
            <th>Action</th>
        </thead>
    <?php
        $sql = "Select * from catagories";
        $sql_run = mysqli_query($conn, $sql);
        //  $rows = mysqli_num_rows($run);
        $i = 0;
        while ($catagory = mysqli_fetch_assoc($sql_run)) {
            $i = $i + 1;
            echo '
                <tbody>
                    <tr>
                        <td>' . $i . '</td>
                        <td>' . $catagory["Catagory"] . '</td>
                        <td><a href="#" class="edit-pencil"><img src="../src/edit_pencil.png"></a><a href="#" data-id="'.$catagory["index_no"].'" class="delete-btn cdelete"><img src="../src/delete.png"></a></td>
                    </tr>
                </tbody>';
            }
    ?>
    </table>
</body>
</html>