<?php 
    $page = "empresariales";
    session_start();
    include 'layout/header.php';
    include 'layout/topnavbar.php';
    include 'layout/modal.php';
    require 'bd/open.php';
    require 'bd/login.php';
?>

<section id="salones">
    <ul class="bxslider">           
        <li><img src="images/salon1.jpg" alt=""></li>
        <li><img src="images/salon2.jpg" alt=""></li> 
        <li><img src="images/salon3.jpg" alt=""></li>
        <li><img src="images/salon4.jpg" alt=""></li>
    </ul>
</section>

<div id="tabs">
    <ul>
        <li><a href="#tabs-1">15'S</a></li>
        <li><a href="#tabs-2">Matrimonios</a></li>
        <li><a href="#tabs-3">Bodas de plata</a></li>
        <li><a href="#tabs-4">Bodas de plata</a></li>
    </ul>
    <div id="tabs-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
    <div id="tabs-2">Phasellus mattis tincidunt nibh. Cras orci urna, blandit id, pretium vel, aliquet ornare, felis. Maecenas scelerisque sem non nisl. Fusce sed lorem in enim dictum bibendum.</div>
    <div id="tabs-3">Nam dui erat, auctor a, dignissim quis, sollicitudin eu, felis. Pellentesque nisi urna, interdum eget, sagittis et, consequat vestibulum, lacus. Mauris porttitor ullamcorper augue.</div>
    <div id="tabs-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, numquam consequatur! Eligendi cumque beatae aperiam fuga a qui quasi! Quidem ratione ullam, temporibus necessitatibus atque, unde sed dolore officia explicabo!</div>
</div>

<?php 
    require 'bd/close.php';
    include 'layout/content_footer.php';
    include 'layout/footer.php';
?>