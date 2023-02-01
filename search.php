<?php
session_start();
$open = $_GET['search'];
if ($open == 'open') {
    echo 'Success';
}
else{
    echo 'failed';
}
?>