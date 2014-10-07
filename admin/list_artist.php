<section id="content_wrapper">
    <h1 class="text_tittle">Consultar Artista</h1>
    <table class="table_view">
<?php
    $page="admin-salon";
    include "../layout/header.php";
    require "../bd/open.php";

    $id = $_GET['id'];

    $sql = "SELECT * FROM artistas
            WHERE id_artista = $id";
            
    $rs  = mysql_query($sql,$cnx);

    while ($reg = mysql_fetch_array($rs)) 
    {
?>
        <tbody>          
            <tr>
                <td><strong>Id Salon</strong></td>
                <td><?php echo $reg['id_artista']; ?></td>
            </tr>

            <tr>
                <td><strong>Nombres del salón</strong></td>
                <td><?php echo $reg['nombre_artista']; ?></td>
            </tr>

            <tr>
                <td><strong>Precio Alquiler</strong></td>
                <td><?php echo $reg['precio_contrato']; ?></td>
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
                <td><strong>Lista de canciones</strong></td>
                <td><?php echo $reg['lista_canciones']; ?><br></td>
            </tr>

            <tr>
                <td><strong>Tipo de artista</strong></td>
                <td><?php echo $reg['tipo_artista']; ?> Personas</td>
            </tr>

            <tr>
                <td><strong>Imagen de artista</strong></td>
                <td>
                    <img src="<?php echo $reg['imagen_artista']; ?>" alt="">
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