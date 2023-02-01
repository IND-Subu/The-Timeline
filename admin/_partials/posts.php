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
            <th>Sl</th>
            <th>Topic</th>
            <th>Catagory</th>
            <th>Description</th>
            <!-- <th>Content</th> -->
            <!-- <th>Keywords</th> -->
            <th>Date</th>
            <th>Action</th>
        </thead>
    <?php
        include('../../components/db_connect.php');
        $sql = "Select * from content_database";
        $sql_run = mysqli_query($conn, $sql);
        $i = 0;
        while ($contents = mysqli_fetch_assoc($sql_run)) {
            $i = $i + 1;
            echo '
                <tbody>
                    <tr>
                        <td>' . $i . '</td>
                        <td>' . $contents["topic"] . '</td>
                        <td>' . $contents["catagory"] . '</td>
                        <td>' . $contents["description"] . '</td>
                        
                       
                        <td><pre>' . $contents["c_date"] . '</pre></td>
                        <td><pre>
                            <a href="#" data-p_eid="'.$contents["index_no"].'" class="edit-pencil pedit"><img src="../src/edit_pencil.png"></a><a href="#" data-p_did="'.$contents["index_no"].'" class="delete-btn pdelete"><img src="../src/delete.png"></a></pre>
                        </td>
                    </tr>
                </tbody>';
            }
    ?>
    </table>
</body>
</html>