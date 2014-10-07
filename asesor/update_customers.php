<section id="content_wrapper">
<?php
    $page="admin-asesor";
    session_start();
    include "../layout/header.php";
    require "../bd/open.php";

    if ($_POST)
    {
        $id                   = $_POST['id'];        
        $nombres              = $_POST['nombres'];
        $apellidos            = $_POST['apellidos'];
        $documento            = $_POST['no_identificacion'];
        $correo               = $_POST['email'];
        $clave                = $_POST['password'];        
        $telefono_fijo        = $_POST['tel_fijo'];
        $telefono_movil       = $_POST['tel_movil'];        
        $direccion_residencia = $_POST['direccion'];
        $ciudad_residencia    = $_POST['ciudad'];
        $tipo_usuario         = $_POST['tipo_usuario'];
        $fecha_registro       = $_POST['fecha_registro'];
        $estado               = $_POST['estado'];

        $sqlUpdate = "UPDATE usuarios
                      SET id_usuario           = $id,                          
                          nombres              = '$nombres',
                          apellidos            = '$apellidos',
                          no_identificacion    = $documento,
                          email                = '$correo',
                          password             = '$clave',                          
                          telefono_fijo        = $telefono_fijo,
                          telefono_movil       = $telefono_movil,                         
                          direccion_residencia = '$direccion_residencia',
                          ciudad_residencia    = '$ciudad_residencia',
                          tipo_usuario         = '$tipo_usuario',
                          estado               = '$estado',
                          fecha_registro       = '$fecha_registro'
                      WHERE id_usuario         = $id;";

        if (mysql_query($sqlUpdate, $cnx)) 
        { 
            echo "<script>";
            echo "alert('El cliente se modifico correctamente.');";
            //echo "window.location.replace('../admin_backend.php');";
            echo "</script>";
        }
        else
        {
            echo "<script>";
            echo "alert('problemas para modificar el cliente.');";
            //echo "window.location.replace('../admin_backend.php');";
            echo "</script>";
        }
    }

    $id = $_GET['id']; 

    $sql = "SELECT * FROM usuarios
            WHERE id_usuario = $id";
            
    $rs  = mysql_query($sql, $cnx);

    while ($reg = mysql_fetch_array($rs)) 
    {
?>

<div id="content-form" class="admin-forms">
    <h1 class="text_tittle">Modificar Usuario</h1>
    <form action="" method="post">
        <div class="group-form">
            <label for="">Nombres</label><br>
            <input type="text" name="nombres" value="<?php echo $reg['']; ?>" required="required">
        </div>
        <div class="group-form">
            <label for="">Apellidos</label><br>
            <input type="text" name="apellidos" value="<?php echo $reg['']; ?>" required="required">
        </div>            
        <div class="group-form">
            <label for="">No. Identificacion</label><br>
            <input type="text" name="no_identificacion" value="<?php echo $reg['']; ?>" required="required">
        </div>
        <div class="group-form">
            <label for="">Correo Electronico</label><br>
            <input type="email" name="email" value="<?php echo $reg['']; ?>" required="required">
        </div>
        <div class="group-form">
            <label for="">Telefono Fijo</label><br>
            <input type="number" name="tel_fijo" value="<?php echo $reg['']; ?>" required="required">
        </div>
        <div class="group-form">
            <label for="">Telefono Movil</label><br>
            <input type="number" name="tel_movil" value="<?php echo $reg['']; ?>" required="required">
        </div>
        <div class="group-form">
            <label for="">Direccion Residencia</label><br>
            <input type="text" name="direccion" value="<?php echo $reg['']; ?>" required="required">
        </div>
        <div class="group-form">
            <label for="">Ciudad Residencia</label><br>
            <input type="text" name="ciudad" value="<?php echo $reg['']; ?>" required="required">
        </div>
        <div class="group-form"> 
            <input type="hidden" name="tipo_usuario" value="cliente">               
            <input type="hidden" name="estado" value="Activo">
            <input type="hidden" name="password" value="">
            <input type="hidden" name="fecha_registro" value="<?php echo date('Y-m-d'); ?>">
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