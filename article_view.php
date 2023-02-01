<?php
    require_once("components/db_connect.php");
    $token = $_GET['token_no'];
    $sql = "SELECT * FROM `content_database` WHERE token = $token";
    $run_sql = mysqli_query($conn, $sql);
    $thread = mysqli_fetch_assoc($run_sql);
    // $split = str_split($thread['content']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $thread['topic']?>
    </title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php require('components/navbar.php'); ?>
    <div class="article">
        <?php
            echo "<p>".$thread['content']."</p>";
        ?>
    </div>   




</body>
</html>