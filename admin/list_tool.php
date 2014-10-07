<section id="content_wrapper">
    <h1 class="text_tittle">Consultar Equipo</h1>
    <table class="table_view">
<?php
    $page="admin-equipos";
    include "../layout/header.php";
    require "../bd/open.php";

    $id = $_GET['id'];

    $sql = "SELECT * FROM equipos
            WHERE id_equipo = $id";
            
    $rs  = mysql_query($sql,$cnx);

    while ($reg = mysql_fetch_array($rs)) 
    {
?>
        <tbody>          
            <tr>
                <td><strong>Id Salon</strong></td>
                <td><?php echo $reg['id_equipo']; ?></td>
            </tr>

            <tr>
                <td><strong>Nombres del salón</strong></td>
                <td><?php echo $reg['nombre_equipo']; ?></td>
            </tr>

            <tr>
                <td><strong>Precio Alquiler</strong></td>
                <td><?php echo $reg['precio_alquiler']; ?></td>
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
                <td><?php echo $reg['correo_contacto']; ?></td>
            </tr>

            <tr>
                <td><strong>Detalles</strong></td>
                <td><?php echo $reg['detalle']; ?></td>
            </tr>

            <tr>
                <td><strong>Imagen del equipo</strong></td>
                <td>
                    <img src="<?php echo $reg['imagen_equipo']; ?>" alt="">
                </td>
            </tr>

        </tbody>
<?php 
    }
    require "../bd/close.php";
    include "../layout/footer.php";
?>
    </table> 
</section> 