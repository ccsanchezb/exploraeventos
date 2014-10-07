<section id="content_wrapper">
    <div id="add_button">
        <a href="./admin/add_events.php" class="iframe cboxElement">Agregar Evento</a>
    </div>
    <div id="tabs">
        <ul>
            <li><a href="#tabs-1">Eventos Sociales</a></li>
            <li><a href="#tabs-2">Eventos Empresariales</a></li>
        </ul>
        <div id="tabs-1">
            <table>
                <thead>
                    <tr class="encabezado-fila">
                        <th>Nombre del evento</th>
                        <th>Precio</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    
                    $sql = "SELECT * FROM eventos_sociales                            
                            ORDER BY nombre_evento ASC;";
                    $rs  = mysql_query($sql,$cnx);

                    $nr = mysql_num_rows($rs);

                    if ($nr <= 0) {
                        echo "<tr><td colspan='3'>No hay eventos sociales registrados</td></tr>";
                    }
                    else
                    {
                        while ($reg = mysql_fetch_array($rs)) 
                        {
                    ?>
                        <tr>
                            <td><?php echo $reg['nombre_evento']; ?></td>
                            <td>$ <?php echo $reg['precio']; ?></td>                            
                            <td>
                                <div class="view_button">
                                    <a href="./admin/list_event.php?id=<?php echo $reg['id_sociales']; ?>&evento=social" class="iframe cboxElement">
                                        <img src="./public/images/icons/view.png" alt="" id="view_icon">
                                    </a>
                                </div>
                                <div class="modify_button">
                                    <a href="./admin/update_events.php?id=<?php echo $reg['id_sociales']; ?>&evento=social" class="iframe cboxElement">
                                        <img src="./public/images/icons/modify.png" alt="" id="modify_icon">
                                    </a>
                                </div>
                                <div class="gallery_button">
                                    <a href="javascript:;">
                                        <img src="./public/images/icons/gallery.png" alt="" id="gallery_icon">
                                    </a>
                                </div>
                                <div class="delete_button">
                                    <a href="./admin_backend.php" class="dlt_link" data-id="<?php echo $reg['id_sociales']; ?>" data-rol="social">
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
        </div>
        <div id="tabs-2">
            <table>
                <thead>
                    <tr class="encabezado-fila">
                        <th>Nombre del Evento</th>
                        <th>Precio</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                <?php

                    $sql = "SELECT * FROM eventos_empresariales
                            ORDER BY nombre_evento ASC;";
                    $rs  = mysql_query($sql,$cnx);

                    $nr = mysql_num_rows($rs);

                    if ($nr <= 0) {
                        echo "<tr><td colspan='3'>No hay eventos empresariales registrados</td></tr>";
                    }
                    else
                    {
                        while ($reg = mysql_fetch_array($rs)) 
                        {
                    ?>
                        <tr>
                            <td><?php echo $reg['nombre_evento']; ?></td>
                            <td>$ <?php echo $reg['precio']; ?></td>                            
                            <td class="temporal">
                                <div class="view_button">
                                    <a href="./admin/list_event.php?id=<?php echo $reg['id_empresariales']; ?>&evento=empresarial"  class="iframe cboxElement">
                                        <img src="./public/images/icons/view.png" alt="" id="view_icon">
                                    </a>
                                </div>
                                <div class="modify_button">
                                    <a href="./admin/update_events.php?id=<?php echo $reg['id_empresariales']; ?>&evento=empresarial" class="iframe cboxElement">
                                        <img src="./public/images/icons/modify.png" alt="" id="modify_icon">
                                    </a>
                                </div>
                                <div class="gallery_button">
                                    <a href="javascript:;">
                                        <img src="./public/images/icons/gallery.png" alt="" id="gallery_icon">
                                    </a>
                                </div> 
                                <div class="delete_button">
                                    <a href="../admin_backend.php" data-id="<?php echo $reg['id_empresariales']; ?>" data-rol="empresarial">
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
        </div>
    </div>
</section>

