<section id="content_wrapper">
<?php
    $page="admin-evento";
    session_start();
    include "../layout/header.php";
    require "../bd/open.php";

    if ($_POST)
    {
        $nombre            = $_POST['nombre_evento'];
        $precio            = $_POST['precio'];
        $descripcion       = $_POST['descripcion'];
        $evento            = $_POST['tipo_evento'];               

        if ($evento == "social") {

            $ruta = "../public/images/page/eventos_sociales/".$_FILES['imagen_evento']['name'];
            move_uploaded_file($_FILES['imagen_evento']['tmp_name'], $ruta);

            $imagen = $ruta;

            $sql = "INSERT INTO eventos_sociales
                    VALUES(default, '$nombre',$precio, 
                           '$descripcion', '$imagen');";

            if (mysql_query($sql, $cnx)) 
            {   
                echo "<script>";
                echo "alert('El evento se agrego correctamente.');";
                echo "window.location.replace('../salones_admin.php');";
                echo "</script>";
            }
            else
            {
                echo "<script>";
                echo "alert('problemas para agregar el evento.');";            
                echo "</script>";
            } 
        }
        else
        {
            $ruta = "../public/images/page/eventos_empresariales/".$_FILES['imagen_evento']['name'];
            move_uploaded_file($_FILES['imagen_evento']['tmp_name'], $ruta);

            $imagen = $ruta;

            $sql = "INSERT INTO eventos_empresariales
                    VALUES(default, '$nombre',$precio, 
                           '$descripcion', '$imagen');";

            if (mysql_query($sql, $cnx)) 
            {   
                echo "<script>";
                echo "alert('El evento se agrego correctamente.');";
                echo "window.location.replace('../salones_admin.php');";
                echo "</script>";
            }
            else
            {
                echo "<script>";
                echo "alert('problemas para agregar el evento.');";            
                echo "</script>";
            } 
        }
    }
?>

    <div id="content-form" class="admin-forms">
        <h1 class="text_tittle">Agregar Salon</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="group-form">
                <label for="">Nombre del evento</label><br>
                <input type="text" name="nombre_evento" required="required">
            </div>
            <div class="group-form">
                <label for="">Precio</label><br>
                <input type="number" name="precio" required="required">
            </div>            
            <div class="group-form">
                <label for="">Descripción</label><br>
                <textarea name="descripcion" id="" cols="45" rows="10"></textarea>
            </div>
            <div class="group-form">
                <label for="">Tipo de evento</label><br>
                <select name="tipo_evento" id="" required="required">
                    <option value="">Seleccione...</option>
                    <option value="social">Evento Social</option>
                    <option value="empresarial">Evento Empresarial</option>
                </select>
            </div>            
            <div class="group-form">
                <label for="">Imagen del evento</label><br>
                <input type="file" name="imagen_evento" required="required">
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