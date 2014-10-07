<section id="content_wrapper">
    <div id="add_button">
        <a href="./admin/add_rooms.php" class="iframe cboxElement">Agregar Salón</a>
    </div>
    <table>
        <thead>
            <tr class="encabezado-fila">
                <th>Nombre Salon</th>
                <th>Direccion de ubicación</th>
                <th>Precio de alquiler</th>
                <th>Nombre de contacto</th>
                <th>Telefono de contacto</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php
            
            $sql = "SELECT * FROM salones
                    ORDER BY nombre_salon ASC;";
            $rs  = mysql_query($sql,$cnx);

            $nr = mysql_num_rows($rs);

            if ($nr <= 0) {
                echo "<tr><td colspan='6'>No hay salones registrados</td></tr>";
            }
            else
            {
                while ($reg = mysql_fetch_array($rs)) 
                {
            ?>
                <tr>
                    <td><?php echo $reg['nombre_salon']; ?></td>
                    <td><?php echo $reg['direccion_ubicacion']; ?></td>
                    <td>$ <?php echo $reg['precio_alquiler']; ?></td>
                    <td><?php echo $reg['nombre_contacto']; ?></td>
                    <td><?php echo $reg['telefono_contacto']; ?></td>
                    <td>
                        <div class="view_button">
                            <a href="./admin/list_room.php?id=<?php echo $reg['id_salon']; ?>" class="iframe cboxElement">
                                <img src="./public/images/icons/view.png" alt="" id="view_icon">
                            </a>
                        </div>
                        <div class="modify_button">
                            <a href="./admin/update_rooms.php?id=<?php echo $reg['id_salon']; ?>" class="iframe cboxElement">
                                <img src="./public/images/icons/modify.png" alt="" id="modify_icon">
                            </a>
                        </div>
                        <div class="gallery_button">
                            <a href="javascript:;">
                                <img src="./public/images/icons/gallery.png" alt="" id="gallery_icon">
                            </a>
                        </div>
                        <div class="delete_button">
                            <a href="./salones_admin.php" class="dlt_link" data-id="<?php echo $reg['id_salon']; ?>" data-rol="room">
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