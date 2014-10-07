<section id="content_wrapper">
    <h1 class="text_tittle">Consultar Evento</h1>
    <table class="table_view">
<?php
    $page="admin-salon";
    include "../layout/header.php";
    require "../bd/open.php";

    $evento = $_GET['evento'];

    if ($evento == "social") 
    {
        $id = $_GET['id'];

        $sql = "SELECT * FROM eventos_sociales
                WHERE id_sociales = $id";
    }
      
    else
    {
        $id = $_GET['id'];

        $sql = "SELECT * FROM eventos_empresariales
                WHERE id_empresariales = $id";
    }
        $rs  = mysql_query($sql,$cnx);

    while ($reg = mysql_fetch_array($rs)) 
    {
?>
        <tbody>          
            <tr>
                <td><strong>Id Evento</strong></td>
                <td><?php if ($evento=="social") { echo $reg['id_sociales']; }else{ echo $reg['id_empresariales']; } ?></td>
            </tr>

            <tr>
                <td><strong>Nombres del evento</strong></td>
                <td><?php echo $reg['nombre_evento']; ?></td>
            </tr>

            <tr>
                <td><strong>Precio</strong></td>
                <td><?php echo $reg['precio']; ?></td>
            </tr>

            <tr>
                <td><strong>Descripción</strong></td>
                <td><?php echo $reg['descripcion']; ?></td>
            </tr>

            <tr>
                <td><strong>Imagen Evento</strong></td>
                <td>
                    <img src="<?php echo $reg['imagen_social']; ?>" alt="">
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