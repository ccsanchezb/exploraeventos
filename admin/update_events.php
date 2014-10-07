<section id="content_wrapper">
<?php
    $page="admin-evento";
    session_start();
    include "../layout/header.php";
    require "../bd/open.php";

    if ($_POST)
    {
        $id          = $_POST['id'];
        $nombre      = $_POST['nombre_evento'];
        $precio      = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $evento      = $_POST['tipo_evento']; 

        if ($evento == "social") 
        {
            if (isset($_FILES['imagen_evento']['name'])) 
            {
                $ruta = "../public/images/page/eventos_sociales/".$_FILES['imagen_evento']['name'];
                
                if (file_exists($_POST['iorigen'])) 
                {
                    unlink($_POST['iorigen']);
                }
          
                move_uploaded_file($_FILES['imagen_evento']['tmp_name'], $ruta);
            }
            else
            {
                $ruta = $_POST['iorigen'];
            }

            $imagen = $ruta;

            $sqlUpdate = "UPDATE eventos_sociales
                          SET id_sociales   = $id,                          
                              nombre_evento = '$nombre',
                              precio        = $precio,
                              descripcion   = '$descripcion',                                           
                              imagen_social = '$imagen'            
                          WHERE id_sociales = $id;";

            if (mysql_query($sqlUpdate, $cnx)) 
            { 
                echo "<script>";
                echo "alert('El evento se modifico correctamente.');";
                //echo "window.location.replace('../admin_backend.php');";
                echo "</script>";
            }
            else
            {
                echo "<script>";
                echo "alert('problemas para modificar el evento.'".mysql_error().");";
                //echo "window.location.replace('../admin_backend.php');";
                echo "</script>";
            }
        }
        else
        {
            if (isset($_FILES['imagen_salon']['name'])) 
            {
                $ruta = "../public/images/page/eventos_empresariales/".$_FILES['imagen_evento']['name'];
            
                if (file_exists($_POST['iorigen'])) 
                {
                    unlink($_POST['iorigen']);
                }
          
                move_uploaded_file($_FILES['imagen_evento']['tmp_name'], $ruta);
            }
            else
            {
                $ruta = $_POST['iorigen'];
            }

            $imagen = $ruta;

            $sqlUpdate = "UPDATE eventos_empresariales
                          SET id_empresariales   = $id,                          
                              nombre_salon       = '$nombre',
                              precio             = $precio,
                              descripcion        = '$descripcion',                                           
                              imagen_empresarial = '$imagen'            
                          WHERE id_empresariales = $id;";

            if (mysql_query($sqlUpdate, $cnx)) 
            { 
                echo "<script>";
                echo "alert('El evento se modifico correctamente.');";
                //echo "window.location.replace('../admin_backend.php');";
                echo "</script>";
            }
            else
            {
                echo "<script>";
                echo "alert('problemas para modificar el evento.'".mysql_error().");";
                //echo "window.location.replace('../admin_backend.php');";
                echo "</script>";
            }
        }
    }

    if ($_GET['evento']=="social") 
    {
        $id = $_GET['id']; 

        $sql = "SELECT * FROM eventos_sociales
                WHERE id_sociales = $id";
    }
    else
    {
        $id = $_GET['id']; 

        $sql = "SELECT * FROM eventos_empresariales
                WHERE id_empresariales = $id";
    }
            
    $rs  = mysql_query($sql, $cnx);

    while ($reg = mysql_fetch_array($rs)) 
    {

?>

    <div id="content-form" class="admin-forms">
        <h1 class="text_tittle">Modificar Evento</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="group-form">
                <label for="">Nombre del evento</label><br>
                <input type="text" name="nombre_evento" value="<?php echo $reg['nombre_evento']; ?>" required="required">
            </div>
            <div class="group-form">
                <label for="">Precio</label><br>
                <input type="number" name="precio" value="<?php echo $reg['precio']; ?>" required="required">
            </div>            
            <div class="group-form">
                <label for="">Descripción</label><br>
                <textarea name="descripcion" id="" cols="30" rows="10"><?php echo $reg['descripcion']; ?></textarea>
            </div>
            <div class="group-form">
                <label for="">Tipo de evento</label><br>
                <select name="tipo_evento" id="">
                    <option value="">Seleccione...</option>
                    <option value="social" <?php if ($_GET['evento']=="social") { echo "selected='selected'"; } ?>>Evento Social</option>
                    <option value="empresarial" <?php if ($_GET['evento']=="empresarial") { echo "selected='selected'"; } ?>>Evento Empresarial</option>
                </select>
            </div>            
            <div class="group-form">
                <label for="">Imagen del evento</label><br>
                <img src="<?php if ($_GET['evento']=='social') { echo $reg['imagen_social']; }else{ echo $reg['imagen_empresarial']; } ?>" alt="">
                <input type="file" name="imagen_evento">
                <input type="hidden" name="id" value="<?php if ($_GET['evento']=='social') { echo $reg['id_sociales']; }else{ echo $reg['id_empresariales']; } ?>">
                <input type="hidden" name="iorigen" value="<?php if ($_GET['evento']=='social') { echo $reg['imagen_social']; }else{ echo $reg['imagen_empresarial']; } ?>">
            </div>                             
            <div class="group-form">
                <input type="submit" value="Enviar">
                <input type="reset" value="Limpiar Formulario">
            </div>
        </form>
    </div>

<?php
}
    require "../bd/close.php"; 
    include "../layout/footer.php"; 
?> 
</section>