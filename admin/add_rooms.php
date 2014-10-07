<section id="content_wrapper">
<?php
    $page="admin-salon";
    session_start();
    include "../layout/header.php";
    require "../bd/open.php";

    if ($_POST)
    {
        $ruta = "../public/images/page/salones/".$_FILES['imagen_salon']['name'];
        move_uploaded_file($_FILES['imagen_salon']['tmp_name'], $ruta);


        $nombre            = $_POST['nombre_salon'];
        $precio            = $_POST['precio_alquiler'];
        $direccion         = $_POST['direccion_ubicacion'];
        $capacidad         = $_POST['capacidad'];
        $nombre_contacto   = $_POST['nombre_contacto'];        
        $telefono_contacto = $_POST['tel_contacto'];
        $email_contacto    = $_POST['email_contacto'];
        $imagen            = $ruta;

        $sql = "INSERT INTO salones
                VALUES(default, '$nombre',
                       $precio, '$direccion',
                       $capacidad, '$nombre_contacto',
                       $telefono_contacto,'$email_contacto',
                       '$imagen');";

        if (mysql_query($sql, $cnx)) 
        {   
            echo "<script>";
            echo "alert('El usuario se agrego correctamente.');";
            echo "window.location.replace('../salones_admin.php');";
            echo "</script>";
        }
        else
        {
            echo "<script>";
            echo "alert('problemas para agregar el salon.');";            
            echo "</script>";
        }
    }
?>

    <div id="content-form" class="admin-forms">
        <h1 class="text_tittle">Agregar Salon</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="group-form">
                <label for="">Nombre del salon</label><br>
                <input type="text" name="nombre_salon" required="required">
            </div>
            <div class="group-form">
                <label for="">Precio Alquiler</label><br>
                <input type="number" name="precio_alquiler" required="required">
            </div>            
            <div class="group-form">
                <label for="">Dirección de ubicación</label><br>
                <input type="text" name="direccion_ubicacion" required="required">
            </div>
            <div class="group-form">
                <label for="">Total de capacidad</label><br>
                <input type="number" name="capacidad" required="required">
            </div>
            <div class="group-form">
                <label for="">Nombre del contacto | Persona encargada</label><br>
                <input type="text" name="nombre_contacto" required="required">
            </div>
            <div class="group-form">
                <label for="">Telefono del contacto</label><br>
                <input type="number" name="tel_contacto" required="required">
            </div>
            <div class="group-form">
                <label for="">Correo del contacto</label><br>
                <input type="email" name="email_contacto" required="required">
            </div>
            <div class="group-form">
                <label for="">Imagen del salon</label><br>
                <input type="file" name="imagen_salon" required="required">
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