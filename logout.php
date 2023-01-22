<?php 
    session_start();
    session_unset();
    session_destroy();
    header('Location: /');  





//     $returnToPage = False;
//     $returnToPage = $_SERVER['HTTP_REFERER'];
//     if(isset($returnToPage)) {
//         header('Location: '.$returnToPage);  
//    } else {
//      //    header('Location: index.php');  
//      header('Location: '.$returnToPage);  
//    }
//    exit; 

?>