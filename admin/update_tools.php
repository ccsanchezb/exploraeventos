<section id="content_wrapper">
<?php
    $page="admin-salon";
    session_start();
    include "../layout/header.php";
    require "../bd/open.php";

    if ($_POST)
    {
        if (isset($_FILES['imagen_equipo']['name'])) 
        {
            $ruta = "../public/images/page/equipos/".$_FILES['imagen_equipo']['name'];
            if (file_exists($_POST['iorigen'])) 
            {
                unlink($_POST['iorigen']);
            }
          
            move_uploaded_file($_FILES['imagen_equipo']['tmp_name'], $ruta);
        }
        else
        {
            $ruta = $_POST['iorigen'];
        }
        $id                = $_POST['id'];
        $nombre            = $_POST['nombre_equipo'];
        $precio            = $_POST['precio_alquiler'];
        $nombre_contacto   = $_POST['nombre_contacto'];        
        $telefono_contacto = $_POST['tel_contacto'];
        $email_contacto    = $_POST['email_contacto'];
        $detalle           = $_POST['detalle'];
        $imagen            = $ruta;

        $sqlUpdate = "UPDATE equipos
                      SET id_equipo         = $id,                          
                          nombre_equipo     = '$nombre',
                          precio_alquiler   = $precio,                          
                          nombre_contacto   = '$nombre_contacto',                          
                          telefono_contacto = $telefono_contacto,
                          correo_contacto   = '$email_contacto',                         
                          detalle           = '$detalle',
                          imagen_equipo     = '$imagen'            
                      WHERE id_equipo       = $id;";

        if (mysql_query($sqlUpdate, $cnx)) 
        { 
            echo "<script>";
            echo "alert('El equipo se modifico correctamente.');";
            //echo "window.location.replace('../admin_backend.php');";
            echo "</script>";
        }
        else
        {
            echo "<script>";
            echo "alert('problemas para modificar el equipo.'".mysql_error().");";
            //echo "window.location.replace('../admin_backend.php');";
            echo "</script>";
        }
    }

    $id = $_GET['id']; 

    $sql = "SELECT * FROM equipos
            WHERE id_equipo = $id";
            
    $rs  = mysql_query($sql, $cnx);

    while ($reg = mysql_fetch_array($rs)) 
    {
?>

    <div id="content-form" class="admin-forms">
        <h1 class="text_tittle">Modificar Salon</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="group-form">
                <label for="">Nombre del equipo</label><br>
                <input type="text" name="nombre_equipo" value="<?php echo $reg['nombre_equipo']; ?>" required="required">
            </div>
            <div class="group-form">
                <label for="">Precio Alquiler</label><br>
                <input type="number" name="precio_alquiler" value="<?php echo $reg['precio_alquiler']; ?>" required="required">
            </div>            
            <div class="group-form">
                <label for="">Nombre del contacto | Persona encargada</label><br>
                <input type="text" name="nombre_contacto" value="<?php echo $reg['nombre_contacto']; ?>" required="required">
            </div>
            <div class="group-form">
                <label for="">Telefono del contacto</label><br>
                <input type="number" name="tel_contacto" value="<?php echo $reg['telefono_contacto']; ?>" required="required">
            </div>
            <div class="group-form">
                <label for="">Correo del contacto</label><br>
                <input type="email" name="email_contacto" value="<?php echo $reg['correo_contacto']; ?>" required="required">
                <input type="hidden" name="id" value="<?php echo $reg['id_equipo']; ?>">
                <input type="hidden" name="iorigen" value="<?php echo $reg['imagen_equipo']; ?>">
            </div>
            <div class="group-form">
                <label for="">Detalles</label><br>
                <textarea name="detalle" id="" cols="45" rows="10"><?php echo $reg['detalle'];?></textarea>
            </div>
            <div class="group-form">
                <label for="">Imagen del salon</label><br>
                <img src="<?php echo $reg['imagen_equipo']; ?>" alt="">
                <input type="file" name="imagen_equipo" accept="image/png image/jpg" />                      
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