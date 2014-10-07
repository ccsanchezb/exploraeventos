<section id="content_wrapper">
<?php
    $page="admin-salon";
    session_start();
    include "../layout/header.php";
    require "../bd/open.php";

    if ($_POST)
    {
        $ruta = "../public/images/page/artistas/".$_FILES['imagen_artista']['name'];
        move_uploaded_file($_FILES['imagen_artista']['tmp_name'], $ruta);


        $nombre            = $_POST['nombre_artista'];
        $precio            = $_POST['precio_contrato'];
        $nombre_contacto   = $_POST['nombre_contacto'];        
        $telefono_contacto = $_POST['tel_contacto'];
        $correo_contacto   = $_POST['email_contacto'];
        $lista_canciones   = $_POST['lista_canciones'];
        $tipo_artista      = $_POST['tipo_artista'];
        $imagen            = $ruta;

        $sql = "INSERT INTO artistas
                VALUES(default, '$nombre',
                       $precio, '$nombre_contacto',
                       $telefono_contacto, '$correo_contacto',
                       '$lista_canciones', '$tipo_artista',
                       '$imagen');";

        if (mysql_query($sql, $cnx)) 
        {   
            echo "<script>";
            echo "alert('El artista se agrego correctamente.');";
            //echo "window.location.replace('../salones_admin.php');";
            echo "</script>";
        }
        else
        {
            echo "<script>";
            echo "alert('problemas para agregar el artista.');";            
            echo "</script>";
        }
    }
?>

    <div id="content-form" class="admin-forms">
        <h1 class="text_tittle">Agregar Artista</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="group-form">
                <label for="">Nombre del artista</label><br>
                <input type="text" name="nombre_artista" required="required">
            </div>
            <div class="group-form">
                <label for="">Precio de contratación</label><br>
                <input type="number" name="precio_contrato" required="required">
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
                <label for="">Lista de canciones</label><br>
                <textarea name="lista_canciones" id="" cols="45" rows="10" required="required"></textarea>
            </div>
            <div class="group-form">
                <label for="">Tipo Artista</label><br>
                <select name="tipo_artista" id="">
                    <option value="">Seleccione...</option>
                    <option value="solista">Solista</option>
                    <option value="grupo">Grupo</option>
                </select>
            </div>
            <div class="group-form">
                <label for="">Imagen del salon</label><br>
                <input type="file" name="imagen_artista" required="required">
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