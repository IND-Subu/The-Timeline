<?php
    include('../../components/db_connect.php');
        $id = $_POST['c_eid'];
        $sql = "select * from catagories where index_no = $id";
        $result = mysqli_query($conn,$sql);
        $cid = mysqli_fetch_assoc($result);
echo '
    <form>
        <input type="text" name="c_name" id="c_name" value='.$cid['Catagory'].'>
        <input type="text" hidden id="c_id" value='.$cid['index_no'].'>
        <input type="submit" name="c_edit-submit" id="cedit-submit">
    </form>';
?>