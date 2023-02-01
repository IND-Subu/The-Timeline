<?php
    include('../components/db_connect.php');
    // For Showing Catagory..
    $query = "select * from catagories";
    $result = mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Write a Article</title>
    <link rel="stylesheet" href="/admin/css/post.css">
    <script src="../ckeditor/ckeditor.js"></script>
</head>
<body>
    
<section>
    <form action="post">
        <select name="choose_catagory" id="choose_catagory">
            <option value="">Select Role</option>
            <?php
                while ($catagory = mysqli_fetch_assoc($result)) {
                    echo '<option value="'.$catagory['Catagory'].'">'.$catagory['Catagory'].'</option>';
                }
            ?>
            
        </select>
        <textarea name="add_article" id="add_article"></textarea>
    </form>
</section>




















<!-- Some Useful JavaScript Code -->

<script>
        CKEDITOR.replace('add_article');
    </script>
    <!-- <script src="../components/ajax.jquery.js"></script> -->
</body>
</html>