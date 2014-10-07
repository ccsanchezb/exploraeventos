<?php 

    $page ="admin";
    session_start();
    include "security/auth.php";
    include "layout/header.php";
    include "layout/topnavbar_backend.php";
    require "bd/open.php";

    include "layout/admin_users.php";
    //include "./layout/modals_user.php";

    require "bd/close.php";
    require 'layout/footer.php';
?>