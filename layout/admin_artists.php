<section id="content_wrapper">
    <div id="add_button">
        <a href="./admin/add_artists.php" class="iframe cboxElement">Agregar Artista</a>
    </div>
    <div id="tabs">
        <ul>
            <li><a href="#tabs-1">Solistas</a></li>
            <li><a href="#tabs-2">Grupos</a></li>
        </ul>
        <div id="tabs-1">
            <table>
                <thead>
                    <tr class="encabezado-fila">
                        <th>Nombre del artista</th>
                        <th>Precio de contratacion</th>
                        <th>Nombre de contacto</th>
                        <th>Telefono de contacto</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    
                    $sql = "SELECT * FROM artistas
                            WHERE tipo_artista = 'solista'
                            ORDER BY nombre_artista ASC;";
                    $rs  = mysql_query($sql, $cnx);

                    $nr = mysql_num_rows($rs);

                    if ($nr <= 0) {
                        echo "<tr><td colspan='5'>No hay <b>Artistas: solistas</b> registrados</td></tr>";
                    }
                    else
                    {
                        while ($reg = mysql_fetch_array($rs)) 
                        {
                    ?>
                        <tr>
                            <td><?php echo $reg['nombre_artista']; ?></td>            
                            <td>$ <?php echo $reg['precio_contrato']; ?></td>
                            <td><?php echo $reg['nombre_contacto']; ?></td>
                            <td><?php echo $reg['telefono_contacto']; ?></td>
                            <td>
                                <div class="view_button">
                                    <a href="./admin/list_artist.php?id=<?php echo $reg['id_artista']; ?>" class="iframe cboxElement">
                                        <img src="./public/images/icons/view.png" alt="" id="view_icon">
                                    </a>
                                </div>
                                <div class="modify_button">
                                    <a href="./admin/update_artists.php?id=<?php echo $reg['id_artista']; ?>" class="iframe cboxElement">
                                        <img src="./public/images/icons/modify.png" alt="" id="modify_icon">
                                    </a>
                                </div>
                                <div class="gallery_button">
                                    <a href="javascript:;">
                                        <img src="./public/images/icons/gallery.png" alt="" id="gallery_icon">
                                    </a>
                                </div>
                                <div class="delete_button">
                                    <a href="./artistas_admin.php" class="dlt_link" data-id="<?php echo $reg['id_artista']; ?>" data-rol="artist">
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
                        <th>Nombre del artista</th>
                        <th>Precio de contratacion</th>
                        <th>Nombre de contacto</th>
                        <th>Telefono de contacto</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    
                    $sql = "SELECT * FROM artistas
                            WHERE tipo_artista = 'grupo'
                            ORDER BY nombre_artista ASC;";
                    $rs  = mysql_query($sql,$cnx);

                    $nr = mysql_num_rows($rs);

                    if ($nr <= 0) {
                        echo "<tr><td colspan='5'>No hay <b>Artistas: grupos</b> registrados</td></tr>";
                    }
                    else
                    {
                        while ($reg = mysql_fetch_array($rs)) 
                        {
                    ?>
                        <tr>
                            <td><?php echo $reg['nombre_artista']; ?></td>            
                            <td>$ <?php echo $reg['precio_contrato']; ?></td>
                            <td><?php echo $reg['nombre_contacto']; ?></td>
                            <td><?php echo $reg['telefono_contacto']; ?></td>
                            <td>
                                <div class="view_button">
                                    <a href="./admin/list_artist.php?id=<?php echo $reg['id_artista']; ?>" class="iframe cboxElement">
                                        <img src="./public/images/icons/view.png" alt="" id="view_icon">
                                    </a>
                                </div>
                                <div class="modify_button">
                                    <a href="./admin/update_artists.php?id=<?php echo $reg['id_artista']; ?>" class="iframe cboxElement">
                                        <img src="./public/images/icons/modify.png" alt="" id="modify_icon">
                                    </a>
                                </div>
                                <div class="gallery_button">
                                    <a href="javascript:;">
                                        <img src="./public/images/icons/gallery.png" alt="" id="gallery_icon">
                                    </a>
                                </div>
                                <div class="delete_button">
                                    <a href="./artitas_admin.php" class="dlt_link" data-id="<?php echo $reg['id_artista']; ?>" data-rol="artist">
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