<section id="content_wrapper">
    <div id="add_button">
        <a href="./admin/add_tools.php" class="iframe cboxElement">Agregar Equipo</a>
    </div>
    <table>
        <thead>
            <tr class="encabezado-fila">
                <th>Nombre Equipo</th>
                <th>Precio Alquiler</th>
                <th>Nombre de contacto</th>
                <th>Telefono de contacto</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php
            
            $sql = "SELECT * FROM equipos
                    ORDER BY nombre_equipo ASC;";
            $rs  = mysql_query($sql,$cnx);

            $nr = mysql_num_rows($rs);

            if ($nr <= 0) {
                echo "<tr><td colspan='5'>No hay equipos registrados</td></tr>";
            }
            else
            {
                while ($reg = mysql_fetch_array($rs)) 
                {
            ?>
                <tr>
                    <td><?php echo $reg['nombre_equipo']; ?></td>            
                    <td>$ <?php echo $reg['precio_alquiler']; ?></td>
                    <td><?php echo $reg['nombre_contacto']; ?></td>
                    <td><?php echo $reg['telefono_contacto']; ?></td>
                    <td>
                        <div class="view_button">
                            <a href="./admin/list_tool.php?id=<?php echo $reg['id_equipo']; ?>" class="iframe cboxElement">
                                <img src="./public/images/icons/view.png" alt="" id="view_icon">
                            </a>
                        </div>
                        <div class="modify_button">
                            <a href="./admin/update_tools.php?id=<?php echo $reg['id_equipo']; ?>" class="iframe cboxElement">
                                <img src="./public/images/icons/modify.png" alt="" id="modify_icon">
                            </a>
                        </div>
                        <div class="gallery_button">
                            <a href="javascript:;">
                                <img src="./public/images/icons/gallery.png" alt="" id="gallery_icon">
                            </a>
                        </div>
                        <div class="delete_button">
                            <a href="./salones_admin.php" class="dlt_link" data-id="<?php echo $reg['id_equipo']; ?>" data-rol="tool">
                                <img src="./public/images/icons/delete.png" alt="" id="delete_icon">
                            </a>
                        </div>                                                  
                    </td>
                </tr>
            <?php
                }
            }
        ?>
        </tbody>
    </table>
</section>