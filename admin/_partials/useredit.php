<?php
    include('../../components/db_connect.php');
        $id = $_POST['eid'];
        $sql = "select * from userdata where sl = $id";
        $result = mysqli_query($conn,$sql);
        $uid = mysqli_fetch_assoc($result);
echo '
    <form>
        <input type="text" name="fname" id="fname" value='.$uid['firstName'].'>
        <input type="text" name="lname" id="lname" value='.$uid['lastName'].'>
        <input type="text" name="email" id="email" value='.$uid['email'].'>
        <select name="role" id="role">
            <option value="">Select Role</option>
            <option value="ADMIN">Admin</option>
            <option value="USER">User</option>
        </select>
        <input type="text" style="display:none" id="sl" value='.$uid['sl'].'>
        <input type="submit" name="edit-submit" id="uedit-submit">
    </form>';
?>