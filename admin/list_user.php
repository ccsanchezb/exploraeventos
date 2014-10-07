<section id="content_wrapper">
    <h1 class="text_tittle">Consultar Usuario</h1>
    <table class="table_view">
<?php
    $page="admin";
    include "../layout/header.php";
    require "../bd/open.php";

    $id = $_GET['id'];

    $sql = "SELECT * FROM usuarios
            WHERE id_usuario = $id";
            
    $rs  = mysql_query($sql,$cnx);

    while ($reg = mysql_fetch_array($rs)) 
    {
?>
        <tbody>          
            <tr>
                <td><strong>Id</strong></td>
                <td><?php echo $reg['id_usuario']; ?></td>
            </tr>

            <tr>
                <td><strong>Nombres</strong></td>
                <td><?php echo $reg['nombres']; ?></td>
            </tr>

            <tr>
                <td><strong>Apellidos</strong></td>
                <td><?php echo $reg['apellidos']; ?></td>
            </tr>

            <tr>
                <td><strong>Documento</strong></td>
                <td><?php echo $reg['no_identificacion']; ?></td>
            </tr>

            <tr>
                <td><strong>Correo</strong></td>
                <td><?php echo $reg['email']; ?></td>
            </tr>

            <tr>
                <td><strong>Clave</strong></td>
                <td><?php echo $reg['password']; ?></td>
            </tr>

            <tr>
                <td><strong>Telefono Fijo</strong></td>
                <td><?php echo $reg['telefono_fijo']; ?></td>
            </tr>

            <tr>
                <td><strong>Telefono Movil</strong></td>
                <td><?php echo $reg['telefono_movil']; ?></td>
            </tr>

            <tr>
                <td><strong>Direccion de residencia</strong></td>
                <td><?php echo $reg['direccion_residencia']; ?></td>
            </tr>

            <tr>
                <td><strong>Ciudad de residencia</strong></td>
                <td><?php echo $reg['ciudad_residencia']; ?></td>
            </tr>            

            <tr>
                <td><strong>Rol</strong></td>
                <td><?php echo $reg['tipo_usuario']; ?></td>
            </tr>

            <tr>
                <td><strong>Estado</strong></td>
                <td><?php echo $reg['estado']; ?></td>
            </tr>

            <tr>
                <td><strong>Fecha de registro</strong></td>
                <td><?php echo $reg['fecha_registro']; ?></td>
            </tr>
        </tbody>
<?php 
    }
    require "../bd/close.php";
    include "../layout/footer.php";
?>
    </table> 
</section> 