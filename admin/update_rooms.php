<section id="content_wrapper">
<?php
    $page="admin-salon";
    session_start();
    include "../layout/header.php";
    require "../bd/open.php";

    if ($_POST)
    {
        if (isset($_FILES['imagen_salon']['name'])) 
        {
            $ruta = "../public/images/page/salones/".$_FILES['imagen_salon']['name'];
            if (file_exists($_POST['iorigen'])) 
            {
                unlink($_POST['iorigen']);
            }
          
            move_uploaded_file($_FILES['imagen_salon']['tmp_name'], $ruta);
        }
        else
        {
            $ruta = $_POST['iorigen'];
        }

        $id                = $_POST['id'];        
        $nombre            = $_POST['nombre_salon'];
        $precio            = $_POST['precio_alquiler'];
        $direccion         = $_POST['direccion_ubicacion'];
        $capacidad         = $_POST['capacidad'];
        $imagen            = $ruta;

        $sqlUpdate = "UPDATE salones
                      SET id_salon            = $id,                          
                          nombre_salon        = '$nombre',
                          precio_alquiler     = $precio,
                          direccion_ubicacion = '$direccion',
                          total_capacidad     = $capacidad,
                          nombre_contacto     = '$nombre_contacto',                          
                          telefono_contacto   = $telefono_contacto,
                          email_contacto      = '$email_contacto',                         
                          imagen_salon        = '$imagen'            
                      WHERE id_salon = $id;";

        if (mysql_query($sqlUpdate, $cnx)) 
        { 
            echo "<script>";
            echo "alert('El salón se modifico correctamente.');";
            //echo "window.location.replace('../admin_backend.php');";
            echo "</script>";
        }
        else
        {
            echo "<script>";
            echo "alert('problemas para modificar el salón.'".mysql_error().");";
            //echo "window.location.replace('../admin_backend.php');";
            echo "</script>";
        }
    }

    $id = $_GET['id']; 

    $sql = "SELECT * FROM salones
            WHERE id_salon = $id";
            
    $rs  = mysql_query($sql, $cnx);

    while ($reg = mysql_fetch_array($rs)) 
    {
?>

    <div id="content-form" class="admin-forms">
        <h1 class="text_tittle">Modificar Salon</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="group-form">
                <label for="">Nombre del salon</label><br>
                <input type="text" name="nombre_salon" value="<?php echo $reg['nombre_salon']; ?>" required="required">
            </div>
            <div class="group-form">
                <label for="">Precio Alquiler</label><br>
                <input type="number" name="precio_alquiler" value="<?php echo $reg['precio_alquiler']; ?>" required="required">
            </div>            
            <div class="group-form">
                <label for="">Dirección de ubicación</label><br>
                <input type="text" name="direccion_ubicacion" value="<?php echo $reg['direccion_ubicacion']; ?>" required="required">
            </div>
            <div class="group-form">
                <label for="">Total de capacidad</label><br>
                <input type="number" name="capacidad" value="<?php echo $reg['total_capacidad']; ?>" required="required">
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
                <input type="email" name="email_contacto" value="<?php echo $reg['email_contacto']; ?>" required="required">
                <input type="hidden" name="id" value="<?php echo $reg['id_salon']; ?>">
                <input type="hidden" name="iorigen" value="<?php echo $reg['imagen_salon'];?>">
            </div>
            <div class="group-form">
                <label for="">Imagen del salon</label><br>
                <img src="<?php echo $reg['imagen_salon']; ?>" alt="">
                <input type="file" name="imagen_salon" accept="image/png image/jpg" />
                      
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