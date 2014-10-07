<section id="content_wrapper">
<?php
    $page="admin-salon";
    session_start();
    include "../layout/header.php";
    require "../bd/open.php";

    if ($_POST)
    {
        if (isset($_FILES['imagen_artista']['name'])) 
        {
            $ruta = "../public/images/page/artistas/".$_FILES['imagen_artista']['name'];
            if (file_exists($_POST['iorigen'])) 
            {
                unlink($_POST['iorigen']);
            }
          
            move_uploaded_file($_FILES['imagen_artista']['tmp_name'], $ruta);
        }
        else
        {
            $ruta = $_POST['iorigen'];
        }

        $id                = $_POST['id'];
        $nombre            = $_POST['nombre_artista'];
        $precio            = $_POST['precio_contrato'];
        $nombre_contacto   = $_POST['nombre_contacto'];        
        $telefono_contacto = $_POST['tel_contacto'];
        $correo_contacto   = $_POST['email_contacto'];
        $lista_canciones   = $_POST['lista_canciones'];
        $tipo_artista      = $_POST['tipo_artista'];
        $imagen            = $ruta;

        $sqlUpdate = "UPDATE artistas
                      SET id_artista        = $id,                          
                          nombre_artista    = '$nombre',
                          precio_contrato   = $precio,                          
                          nombre_contacto   = '$nombre_contacto',                          
                          telefono_contacto = $telefono_contacto,
                          correo_contacto   = '$correo_contacto',
                          lista_canciones   = '$lista_canciones',
                          tipo_artista      = '$tipo_artista',                         
                          imagen_artista    = '$imagen'            
                      WHERE id_artista = $id;";

        if (mysql_query($sqlUpdate, $cnx)) 
        { 
            echo "<script>";
            echo "alert('El artista se modifico correctamente.');";
            //echo "window.location.replace('../admin_backend.php');";
            echo "</script>";
        }
        else
        {
            echo "<script>";
            echo "alert('problemas para modificar el artista.'".mysql_error().");";
            //echo "window.location.replace('../admin_backend.php');";
            echo "</script>";
        }
    }

    $id = $_GET['id']; 

    $sql = "SELECT * FROM artistas
            WHERE id_artista = $id";
            
    $rs  = mysql_query($sql, $cnx);

    while ($reg = mysql_fetch_array($rs)) 
    {
?>

    <div id="content-form" class="admin-forms">
        <h1 class="text_tittle">Modificar Artista</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="group-form">
                <label for="">Nombre del artista</label><br>
                <input type="text" name="nombre_artista" value="<?php echo $reg['nombre_artista']; ?>" required="required">
            </div>
            <div class="group-form">
                <label for="">Precio de contratación</label><br>
                <input type="number" name="precio_contrato" value="<?php echo $reg['precio_contrato']; ?>" required="required">
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
            </div>
            <div class="group-form">
                <label for="">Lista de canciones</label><br>
                <textarea name="lista_canciones" id="" cols="45" rows="10" required="required"><?php echo $reg['lista_canciones']; ?></textarea>
            </div>
            <div class="group-form">
                <label for="">Tipo de artista</label><br>
                <select name="tipo_artista" id="">
                    <option value="">Seleccione...</option>
                    <option value="solista" <?php if ($reg['tipo_artista']=="solista") { echo "selected='selected'"; } ?>>Solista</option>
                    <option value="grupo" <?php if ($reg['tipo_artista']=="grupo") { echo "selected='selected'"; } ?>>Grupo</option>
                </select>
            </div>
            <div class="group-form">
                <label for="">Imagen del artista</label><br>
                <img src="<?php echo $reg['imagen_artista']; ?>" alt="">
                <input type="file" name="imagen_artista">
                <input type="hidden" name="id" value="<?php echo $reg['id_artista']; ?>">
                <input type="hidden" name="iorigen" value="<?php echo $reg['imagen_artista']; ?>">
            </div>                 
            <div class="group-form">
                <input type="submit" value="Modificar">
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