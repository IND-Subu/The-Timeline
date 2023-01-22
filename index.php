<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>India</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php require('components/navbar.php'); ?>
<section class="container">
    <?php 
    require_once("components/db_connect.php");
    $sql = "select * from `content_database`";
    $run_sql = mysqli_query($conn, $sql);
    while ($thread = mysqli_fetch_assoc($run_sql)) {
        echo '<div class="box"><div class="topic"><h2><a href="article_view.php?token_no='.$thread["token"].'">' . $thread["topic"] . '</a></h2><span class="date"><p>' . $thread["c_date"] . '</p></span>
        </div>
        <div class="desc"><p>' . $thread["description"] . '</p></div></div>';
    }
     ?>
</section>
    
</body>
</html>