<section id="content_wrapper">
    <h1 class="text_tittle">Consultar Usuario</h1>
    <table class="table_view">
<?php
    $page="admin-salon";
    include "../layout/header.php";
    require "../bd/open.php";

    $id = $_GET['id'];

    $sql = "SELECT * FROM salones
            WHERE id_salon = $id";
            
    $rs  = mysql_query($sql,$cnx);

    while ($reg = mysql_fetch_array($rs)) 
    {
?>
        <tbody>          
            <tr>
                <td><strong>Id Salon</strong></td>
                <td><?php echo $reg['id_salon']; ?></td>
            </tr>

            <tr>
                <td><strong>Nombres del salón</strong></td>
                <td><?php echo $reg['nombre_salon']; ?></td>
            </tr>

            <tr>
                <td><strong>Precio Alquiler</strong></td>
                <td><?php echo $reg['precio_alquiler']; ?></td>
            </tr>

            <tr>
                <td><strong>Dirección de ubicacion</strong></td>
                <td><?php echo $reg['direccion_ubicacion']; ?></td>
            </tr>

            <tr>
                <td><strong>Total de capacidad</strong></td>
                <td><?php echo $reg['total_capacidad']; ?> Personas</td>
            </tr>

            <tr>
                <td><strong>Nombre del contacto | Persona Encargada</strong></td>
                <td><?php echo $reg['nombre_contacto']; ?></td>
            </tr>

            <tr>
                <td><strong>Telefono del Contacto</strong></td>
                <td><?php echo $reg['telefono_contacto']; ?></td>
            </tr>

            <tr>
                <td><strong>Correo del contacto</strong></td>
                <td><?php echo $reg['email_contacto']; ?></td>
            </tr>

        </tbody>
<?php 
    }
    require "../bd/close.php";
    include "../layout/footer.php";
?>
    </table> 
</section> 