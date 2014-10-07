<section id="content_wrapper">
<?php
    $page="admin";
    session_start();
    include "../layout/header.php";
    require "../bd/open.php";

    if ($_POST)
    {
        $documento            = $_POST['no_identificacion'];
        $nombres              = $_POST['nombres'];
        $apellidos            = $_POST['apellidos'];
        $telefono_fijo        = $_POST['tel_fijo'];
        $telefono_movil       = $_POST['tel_movil'];
        $clave                = $_POST['password'];
        $correo               = $_POST['email'];
        $direccion_residencia = $_POST['direccion'];
        $ciudad_residencia    = $_POST['ciudad'];
        $tipo_usuario         = $_POST['tipo_usuario'];
        $fecha_registro       = $_POST['fecha_registro'];
        $estado               = $_POST['estado'];
    
        $sql = "INSERT INTO usuarios
                VALUES(default, '$nombres', '$apellidos',
                       $documento, '$correo', '$clave', $telefono_fijo, 
                       $telefono_movil , '$direccion_residencia', 
                       '$ciudad_residencia', '$tipo_usuario', 
                       '$estado', '$fecha_registro');";
    
        if (mysql_query($sql, $cnx)) 
        { 
            echo "<script>";
            echo "alert('El usuario se agrego correctamente.');";
            echo "window.location.replace('../admin_backend.php');";
            echo "</script>";
        }
        else
        {
            echo "<script>";
            echo "alert('problemas para agregar el usuario.');";
            echo "window.location.replace('../admin_backend.php');";
            echo "</script>";
        }
    }
?>

<div id="content-form" class="admin-forms">
    <h1 class="text_tittle">Agregar Usuario</h1>
    <form action="" method="post">
        <div class="group-form">
            <label for="">Nombres</label><br>
            <input type="text" name="nombres" required="required">
        </div>
        <div class="group-form">
            <label for="">Apellidos</label><br>
            <input type="text" name="apellidos" required="required">
        </div>            
        <div class="group-form">
            <label for="">No. Identificacion</label><br>
            <input type="text" name="no_identificacion" required="required">
        </div>
        <div class="group-form">
            <label for="">Correo Electronico</label><br>
            <input type="email" name="email" required="required">
        </div>
        <div class="group-form">
            <label for="">Contraseña</label><br>
            <input type="password" name="password" required="required">
        </div>
        <div class="group-form">
            <label for="">Telefono Fijo</label><br>
            <input type="number" name="tel_fijo" required="required">
        </div>
        <div class="group-form">
            <label for="">Telefono Fijo</label><br>
            <input type="number" name="tel_movil" required="required">
        </div>
        <div class="group-form">
            <label for="">Direccion Residencia</label><br>
            <input type="text" name="direccion" required="required">
        </div>
        <div class="group-form">
            <label for="">Ciudad Residencia</label><br>
            <input type="text" name="ciudad" required="required">
        </div>           
        <div class="group-form">
            <label for="">Tipo Usuario</label><br>
            <select name="tipo_usuario" id="" required="required">
                <option value="">Seleccione...</option>
                <option value="admin">Administrador</option>
                <option value="asesor">Asesor(a)</option>
                <option value="cliente">Cliente</option>
            </select>
        </div>
         <div class="group-form">                
            <input type="hidden" name="estado" value="Activo">
            <input type="hidden" name="fecha_registro" value="<?php echo date('Y-m-d'); ?>">
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