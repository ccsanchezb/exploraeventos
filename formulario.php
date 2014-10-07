<?php 
  $page = "formulario";
  session_start();
  include 'layout/header.php';
  include 'layout/topnavbar.php';
  include 'layout/modal.php';
?>

<div class="cont">
    <h1>Formulario de cotización</h1>
    <div class="form">
        <form action="submit.php" method="post">
            <!-- DATOS EVENTOS -->
            <div class="personales">
                <h2>Datos de contacto</h2>
                <br>
                <div class="datos">
                    <b for="">Nombre Completo</b><br>
                    <input type="text" class="nombre" name="nombre" required>
                </div>
                <div class="datos2">
                    <b for="">Correo Electronico</b><br>
                    <input type="mail" class="email" name="email" required>
                </div>
                <div class="datos">
                    <b for="">Telefono Fijo</b><br>
                    <input type="text" class="fijo" name="fijo" required>
                </div>
                <div class="datos2">
                    <b for="">Telefono Movil</b><br>
                    <input type="text" class="movil" name="movil" required>
                </div>
                <div class="datos">
                    <b for="">Ciudad</b><br>
                    <input type="text" class="ciudad" name="ciudad" required>
                </div>
                <div class="datos2">
                    <b for="">Referidos</b><br>
                    <input type="text" class="referidos" name="referidos" required>
                </div>
                <div class="datos3">
                    <b for="">Comentarios</b><br>
                    <textarea name="comentarios" class="comentarios" cols="30" rows="10"></textarea>
                </div>
            </div>
            <br>
        <!-- DATOS EVENTOS -->
            <div class="evento">            
                <h2>Datos del evento</h2><br>
                <div class="datos">
                    <b for="">Menu:</b><br>
                    <input type="checkbox" name="menu" value="coctel" class="coctel"><label for="">Coctel de bienvenida</label><br>
                    <input type="checkbox" name="menu" value="pasabocas" class="pasabocas"><label for="">Ronda de pasabocas</label><br>
                    <input type="checkbox" name="menu" value="cena" class="cena"><label for="">Cena</label><br>
                    <input type="checkbox" name="menu" value="postre" class="postre"><label for="">Postre</label><br>
                    <input type="checkbox" name="menu" value="champagne" class="champagne"><label for="">Champagne</label><br>
                    <input type="checkbox" name="menu" value="ponque" class="ponque"><label for="">Ponque</label><br>
                    <input type="checkbox" name="menu" value="gaseosa" class="gaseosa"><label for="">Bebidas Gaseosas</label>
                </div>
                <div class="datos2 decoracion">
                    <b for="">Decoracion:</b><br>
                    <input type="radio" name="decoracion" value="si" class="decoracion"><label for="">Si</label><br>
                    <input type="radio" name="decoracion" value="no" class="decoracion"><label for="">No</label>
                </div>
                <div class="datos2">
                    <b for="">Coordinacion Logistica</b><br>
                    <input type="checkbox" name="logistica" value="planeador" class="planeador"><label for="">Planeador del evento</label><br>
                    <input type="checkbox" name="logistica" value="chef" class="chef"><label for="">Chef</label><br>
                    <input type="checkbox" name="logistica" value="asistente" class="asistente"><label for="">Asistente Chef</label><br>
                    <input type="checkbox" name="logistica" value="meseros" class="meseros"><label for="">Meseros</label><br>
                    <input type="checkbox" name="logistica" value="vigilancia" class="vigilancia"><label for="">Vigilancia Privada</label><br>
                    <input type="checkbox" name="logistica" value="aseo" class="aseo"><label for="">Aseo</label>
                </div>
                <div class="datos">
                    <b for="">Alquiler de Menaje</b><br>
                    <input type="checkbox" name="menaje" value="vajilla" class="menaje"><label for="">Vajilla</label><br>
                    <input type="checkbox" name="menaje" value="sillas-mesas" class="menaje"><label for="">Sillas y Mesas</label><br>
                    <input type="checkbox" name="menaje" value="manteleria" class="menaje"><label for="">Manteleria</label><br>
                    <input type="checkbox" name="menaje" value="cristaleria" class="menaje"><label for="">Cristaleria</label>
                </div>                  
                <div class="datos">
                    <b for="">Servicios Tecnicos</b><br>
                    <input type="checkbox" name="tecnico" value="sonido" class="sonido"><label for="">Sonido</label><br>
                    <input type="checkbox" name="tecnico" value="luces" class="aseo"><label for="">Luces</label><br>
                    <input type="checkbox" name="tecnico" value="camara" class="aseo"><label for="">Camara de humo</label><br>
                    <input type="checkbox" name="tecnico" value="dj" class="aseo"><label for="">DJ</label><br>
                    <input type="checkbox" name="tecnico" value="fotos-videos" class="aseo"><label for="">Fotos y videos</label>
                </div>
                <div class="datos">
                    <input type="submit" value="Enviar">
                    <input type="reset" value="Limpiar Formulario">
                </div>
            </div>
        </form>
    </div>
</div>

<?php 
    include 'layout/content_footer.php';
    include 'layout/footer.php';
?>