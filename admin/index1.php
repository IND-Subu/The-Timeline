<?php
require('header.php'); 
include('../components/db_connect.php');
$sql = "Select * from userdata";
$run = mysqli_query($conn, $sql);
$rows = mysqli_num_rows($run);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="../js/jquery.min.js"></script>
    <title>Admin Panel</title>
</head>
<body>
    <div class="container">
        <div class="menu_view">
            <ul>
                <li class="user"> <img src="../src/add-user.svg" alt=""><a href="#">User</a> </li>
                <li class="catagory"> <img src="../src/catagory.svg" alt=""><a href="#">Catagory</a> </li>
                <li class="post"> <img src="../src/add-post.svg" alt=""><a href="#">Post</a> </li>
            </ul>
        </div>

        <div class="main_view">
            <div class="userdata">
                <span><a href="#"><img src="../src/edit_pencil.png" alt="edit">Add New</a> </span>
                <table>
                    <thead>
                            <th>Index</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                    </thead>
                  <?php
                  while ($result = mysqli_fetch_assoc($run)) {
                    echo '<tbody>
                    <td><a href="#">'.$result["sl"].'</a></th>
                    <td><a href="#">'.$result["firstName"].'</a></td>
                    <td><a href="#">'.$result['email'].'</a></td>
                    <td><a href="#">';if ($result['role'] == 0) { echo "Admin"; } else{ echo "User";};
                   echo '</a></td>
            </tbody>';
                  }
                  ?>
                </table>
            </div>
        </div>
    </div>












<script>
    $(document).ready(function() {
        $('.menu').click(function() {
            $('.menu_view').toggleClass("menu_view_collaps");
            });
        });

        $(document).ready(function() {
        $('.user').click(function() {
            $('.userdata').addClass("userdataa");
            });
        });

</script>
<script>
        $(document).ready(function() {
        $('.catagory').click(function() {
            $('.userdata').toggleClass("menu_hidden");
            });
        });
</script>
</body>
</html>