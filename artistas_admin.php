<?php 

    $page ="admin-artistas";
    session_start();
    include "security/auth.php";
    include "layout/header.php";
    include "layout/topnavbar_backend.php";
    require "bd/open.php";

    include "layout/admin_artists.php";
    include "layout/modals_room.php";

    require "bd/close.php";
    require 'layout/footer.php';
?>