<?php 
    session_start();
    unset($_SESSION['userCheck']);
    session_destroy();

    echo "<script>";
    echo "window.location.replace('../index.php')";
    echo "</script>";
?>