<section id="content_wrapper">
<?php
    $page="admin-salon";
    session_start();
    include "../layout/header.php";
    require "../bd/open.php";

    if ($_POST)
    {
        $ruta = "../public/images/page/equipos/".$_FILES['imagen_equipo']['name'];
        move_uploaded_file($_FILES['imagen_equipo']['tmp_name'], $ruta);


        $nombre            = $_POST['nombre_equipo'];
        $precio            = $_POST['precio_alquiler'];
        $nombre_contacto   = $_POST['nombre_contacto'];        
        $telefono_contacto = $_POST['tel_contacto'];
        $email_contacto    = $_POST['email_contacto'];
        $detalle           = $_POST['detalle'];
        $imagen            = $ruta;

        $sql = "INSERT INTO equipos
                VALUES(default, '$nombre',
                       $precio, '$nombre_contacto',
                       $telefono_contacto,'$email_contacto',
                       '$detalle', '$imagen');";

        if (mysql_query($sql, $cnx)) 
        {   
            echo "<script>";
            echo "alert('El equipo se agrego correctamente.');";
            echo "window.location.replace('../salones_admin.php');";
            echo "</script>";
        }
        else
        {
            echo "<script>";
            echo "alert('problemas para agregar el equipo.');";            
            echo "</script>";
        }
    }
?>

    <div id="content-form" class="admin-forms">
        <h1 class="text_tittle">Agregar Salon</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="group-form">
                <label for="">Nombre del equipo</label><br>
                <input type="text" name="nombre_equipo" required="required">
            </div>
            <div class="group-form">
                <label for="">Precio Alquiler</label><br>
                <input type="number" name="precio_alquiler" required="required">
            </div> 
            <div class="group-form">
                <label for="">Nombre del contacto | Persona Encargada</label><br>
                <input type="text" name="nombre_contacto" required="required">
            </div>
            <div class="group-form">
                <label for="">Telefono del contacto</label><br>
                <input type="number" name="tel_contacto" required="required">
            </div>
            <div class="group-form">
                <label for="">Correo del contacto</label><br>
                <input type="text" name="email_contacto" required="required">
            </div>
            <div class="group-form">
                <label for="">Detalles</label><br>
                <textarea name="detalle" id="" cols="45" rows="10"></textarea>
            </div>            
            <div class="group-form">
                <label for="">Imagen del equipo</label><br>
                <input type="file" name="imagen_equipo" required="required">
            </div>                 
            <div class="group-form">
                <input type="submit" value="Enviar">
                <input type="reset" value="Limpiar Formulario">
            </div>
        </form>
    </div>


<?php    
    require "../bd/close.php";  
    include "../layout/footer.php";
?> 
</section>