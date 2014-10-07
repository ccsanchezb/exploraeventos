<?php 

    $page ="admin-asesor";
    session_start();
    include "security/auth.php";
    include "layout/header.php";
    include "layout/topnavbar_backend.php";
    require "bd/open.php";

    include "layout/asesor_customer.php";

    require "bd/close.php";
    require 'layout/footer.php';
?>