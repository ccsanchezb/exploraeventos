<?php 
    $page = "decoracion";
    session_start();
    include 'layout/header.php';
    include 'layout/topnavbar.php';
    include 'layout/modal.php';
    require 'bd/open.php';
    require 'bd/login.php';
?>

<section id="salones">
    <h1>Iglesia</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate voluptatem odit autem libero officia velit expedita quo fugiat, officiis. Enim porro cumque nostrum natus blanditiis minus animi. Est, voluptatum, ipsum.</p>
    <ul class="bxslider">           
        <li><img src="public/images/salon1.jpg" alt=""></li>
        <li><img src="public/images/salon2.jpg" alt=""></li> 
        <li><img src="public/images/salon3.jpg" alt=""></li>
        <li><img src="public/images/salon4.jpg" alt=""></li>
    </ul>
</section>

<section id="salones">
    <h1>Salon de eventos</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor iste voluptas, repellendus. Cum expedita nemo asperiores ex! Quia molestias optio ullam, tempore facilis laborum. Nam accusantium excepturi quas a neque.</p>
    <ul class="bxslider">           
        <li><img src="public/images/salon1.jpg" alt=""></li>
        <li><img src="public/images/salon2.jpg" alt=""></li> 
        <li><img src="public/images/salon3.jpg" alt=""></li>
        <li><img src="public/images/salon4.jpg" alt=""></li>
    </ul>
</section>

<section id="salones">
    <h1>Pasabocas</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor iste voluptas, repellendus. Cum expedita nemo asperiores ex! Quia molestias optio ullam, tempore facilis laborum. Nam accusantium excepturi quas a neque.</p>
    <ul class="bxslider">           
        <li><img src="public/images/salon1.jpg" alt=""></li>
        <li><img src="public/images/salon2.jpg" alt=""></li> 
        <li><img src="public/images/salon3.jpg" alt=""></li>
        <li><img src="public/images/salon4.jpg" alt=""></li>
    </ul>
</section>

<?php 
    require 'bd/close.php';
    include 'layout/content_footer.php';
    include 'layout/footer.php';
?>