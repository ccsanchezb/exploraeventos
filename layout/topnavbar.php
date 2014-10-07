<header>
    <ul id="navigation">
        <li class="home"><a title="Formulario" href="formulario.php"></a></li>
    </ul>
    <div id="header_wrapper">
        <div id="logo"><a href="./index.php"><img src="./public/images/logo.png"></a></div>
        <div id="main_nav_wrapper">
            <nav>
                <ul>            
                    <li class="line-left" <?php if ($page == "index"){echo "id='activo'";} ?>><a href="index.php">Inicio</a></li>
                    <li class="line-left" <?php if ($page == "salones"){echo "id='activo'";} ?>><a href="salones.php">Salones</a></li>
                    <li class="line-left" <?php if ($page == "decoracion"){echo "id='activo'";} ?>><a href="decoracion.php">Decoración</a></li>
                    <li class="line-left" <?php if ($page == "tematicas"){echo "id='activo'";} ?>><a href="tematicas.php">Temáticas</a></li>
                    <li class="line-left" <?php if ($page == "menu"){echo "id='activo'";} ?>><a href="menu.php">Menú</a></li>
                    <li class="line-left" <?php if ($page == "formulario"){echo "id='activo'";} ?>><a href="formulario.php">Cotiza Ya</a></li>  
                <?php if (!isset($_SESSION['userCheck'])): ?>
                    <li class="line-right"><a href="#" data-reveal-id="myModal">Iniciar Sesión</a></li>                                  
                <?php else: ?>
                    <li class="line-right"><a href="./bd/destroy.php">Cerrar Sesión</a></li>   
                <?php endif ?>                               
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