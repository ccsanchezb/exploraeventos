<?php 
    $page = "index";
    session_start();
    include 'layout/header.php';
    include 'layout/topnavbar.php';
    include 'layout/modal.php';
    require 'bd/open.php';
    require 'bd/login.php';
?>

	<div id="banner_wrapper">
		<div id="slider">
			<div class="slides_container">
				<a href="planes.php"><img src="public/images/slide1.jpg"><div class="label_banner">Planes. (Otros servicios)</div></a>
				<a href="wellness.php"><img src="public/images/slide2.jpg"><div class="label_banner">Rituales de relajacion. "WELLNESS"</div></a>
				<a href="cincoelementos.php"><img src="public/images/slide3.jpg"><div class="label_banner">Masajes de relajación (5 elementos y mucho mas)</div></a>
				<a href="renacerfacial.php"><img src="public/images/slide4.jpg"><div class="label_banner">Renacer Facial</div></a>
			</div>
			<a href="#" class="prev slider_nav"><img src="public/images/prev.png" alt=""></a>
			<a href="#" class="next"><img src="public/images/next.png" alt=""></a>
            <div id="imagen2"><img src="public/images/sombra.png"></div> 
		</div>
	</div>	


<!--=============================boxes=================================-->
<section id="boxes">
	<div id="boxes_wrapper">
		<div class="col4"><a href="sociales.php" target="_BLANK"><h1>Eventos Sociales</h1><img src="public/images/sociales_menu.png" class="boxes_img"><p></p></a></div>
		<div class="col4"><a href="empresariales.php" target="_BLANK"><h1>Eventos Empresariales</h1><img src="public/images/empresariales_menu.png" class="boxes_img"><p></p></a></div>
		<div class="col4"><a href="artistas.php" target="_BLANK"><h1>Artistas</h1><img src="public/images/artistas_menu.png" class="boxes_img"><p></p></a></div>
		<div class="col4"><a href="equipos.php" target="_BLANK"><h1>Alquiler de Equipos</h1><img src="public/images/equipo_menu.png" class="boxes_img"><p></p></a></div>
	</div>
	<div class="clr"></div>
</section>

<!--============================== Salones =================================-->
<section id="salones">
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