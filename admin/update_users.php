<section id="content_wrapper">
<?php
    $page="admin";
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
                      SET id_usuario = $id,                          
                          nombres = '$nombres',
                          apellidos = '$apellidos',
                          no_identificacion = $documento,
                          email = '$correo',
                          password = '$clave',                          
                          telefono_fijo = $telefono_fijo,
                          telefono_movil = $telefono_movil,                         
                          direccion_residencia = '$direccion_residencia',
                          ciudad_residencia = '$ciudad_residencia',
                          tipo_usuario = '$tipo_usuario',
                          estado = '$estado',
                          fecha_registro = '$fecha_registro'
                      WHERE id_usuario = $id;";

        if (mysql_query($sqlUpdate, $cnx)) 
        { 
            echo "<script>";
            echo "alert('El usuario se modifico correctamente.');";
            echo "window.location.replace('../admin_backend.php');";
            echo "</script>";
        }
        else
        {
            echo "<script>";
            echo "alert('problemas para modificar el usuario.');";
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
    <h1 class="text_tittle">Agregar Usuario</h1>
    <form action="" method="post">
        <div class="group-form">
            <label for="">Nombres</label><br>
            <input type="text" name="nombres" value="<?php echo $reg['nombres']; ?>" required="required">
        </div>
        <div class="group-form">
            <label for="">Apellidos</label><br>
            <input type="text" name="apellidos" value="<?php echo $reg['apellidos']; ?>" required="required">
        </div>            
        <div class="group-form">
            <label for="">No. de Identificacion</label><br>
            <input type="text" name="no_identificacion" value="<?php echo $reg['no_identificacion']; ?>" required="required">
        </div>
        <div class="group-form">
            <label for="">Correo Electronico</label><br>
            <input type="email" name="email" value="<?php echo $reg['email']; ?>" required="required">
        </div>
        <div class="group-form">
            <label for="">Contraseña</label><br>
            <input type="password" name="password" value="<?php echo $reg['password']; ?>" required="required">
        </div>
        <div class="group-form">
            <label for="">Telefono Fijo</label><br>
            <input type="number" name="tel_fijo" value="<?php echo $reg['telefono_fijo']; ?>" required="required">
        </div>
        <div class="group-form">
            <label for="">Telefono Movil</label><br>
            <input type="number" name="tel_movil" value="<?php echo $reg['telefono_movil']; ?>" required="required">
        </div>
        <div class="group-form">
            <label for="">Direccion de residencia</label><br>
            <input type="text" name="direccion" value="<?php echo $reg['direccion_residencia']; ?>" required="required">
        </div>
        <div class="group-form">
            <label for="">Ciudad de residencia</label><br>
            <input type="text" name="ciudad" value="<?php echo $reg['ciudad_residencia']; ?>" required="required">
        </div>           
        <div class="group-form">
            <label for="">Tipo Usuario</label><br>
            <select name="tipo_usuario" id="" required="required">
                <option value="<?php echo $reg['']; ?>">Seleccione...</option>
                <option value="admin" <?php if ($reg['tipo_usuario'] == "admin") echo "selected='selected'"; ?>>Administrador</option>
                <option value="asesor" <?php if ($reg['tipo_usuario'] == "asesor") echo "selected='selected'"; ?>>Asesor(a)</option>
                <option value="cliente" <?php if ($reg['tipo_usuario'] == "cliente") echo "selected='selected'"; ?>>Cliente</option>
            </select>
        </div>
         <div class="group-form">                
            <label for="">Estado</label><br>
            <select name="estado" id="" required="required">
                <option value="<?php echo $reg['']; ?>">Seleccione...</option>
                <option value="Activo" <?php if ($reg['estado'] == "Activo") echo "selected='selected'"; ?>>Activo</option>
                <option value="Inactivo" <?php if ($reg['estado'] == "Inactivo") echo "selected='selected'"; ?>>Inactivo</option>
            </select>
            <input type="hidden" name="id" value="<?php echo $reg['id_usuario']; ?>">
        </div>
        <div class="group-form">
            <label for="">Fecha de registro</label>
            <input type="date" name="fecha_registro" value="<?php echo $reg['id_usuario']; ?>">
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