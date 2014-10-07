<header>
    <ul id="navigation">
        <li class="home"><a title="Formulario" href="formulario.php"></a></li>
    </ul>
    <div id="header_wrapper">
        <div id="logo"><a href="./index.php"><img src="./public/images/logo.png"></a></div>
        <div id="main_nav_wrapper">        
            <nav>           
                <ul> 
                <?php if ($_SESSION['userRole']=="admin"): ?>           
                    <li class="line-left" <?php if ($page == "admin"){echo "id='activo'";} ?>><a href="./admin_backend.php">Gestion Usuarios</a></li>
                    <li class="line-left" <?php if ($page == "admin-salon"){echo "id='activo'";} ?>><a href="./salones_admin.php">Gestion Salones</a></li>
                    <li class="line-left" <?php if ($page == "admin-evento"){echo "id='activo'";} ?>><a href="./eventos_admin.php">Gestion Eventos</a></li>
                    <li class="line-left" <?php if ($page == "admin-equipos"){echo "id='activo'";} ?>><a href="./equipos_admin.php">Gestion Equipos</a></li>
                    <li class="line-left" <?php if ($page == "admin-artistas"){echo "id='activo'";} ?>><a href="./artistas_admin.php">Gestion Artistas</a></li>
                <?php else: ?>
                    <li class="line-left" <?php if ($page == "admin-asesor"){echo "id='activo'";} ?>><a href="./admin_backend.php">Gestion Usuarios</a></li>
                    <li class="line-left" <?php if ($page == "Cotizaciones"){echo "id='activo'";} ?>><a href="./salones_admin.php">Cotizaciones</a></li>
                <?php endif ?>
                 <li class="line-right"><a href="./bd/destroy.php">Cerrar Sesión</a></li>
                </ul>                
            </nav>                          
        </div>
        <div class="clr"></div>
        <ul id="navigationMenu">
            <li><a class="cotiza" href="formulario.php"><span>Cotizanos Ya</span></a></li>           
            <li><a class="facebook" href="https://www.facebook.com/pages/Explora-Eventos/260561217452786?fref=ts"><span>Facebook</span></a></li>         
            <li><a class="twitter" href="#"><span>Twitter</span></a></li>           
            <li><a class="youtube" href="#"><span>Youtube</span></a></li>       
        </ul>
    </div>
    <div class="clr"></div>
</header>