<section id="content_wrapper">
    <div id="add_button">
        <a href="./admin/add_users.php" class="iframe cboxElement">Agregar Usuario</a>
    </div>
    <div id="tabs">
        <ul>
            <li><a href="#tabs-1">Asesores</a></li>
            <li><a href="#tabs-2">Clinetes</a></li>
        </ul>
        <div id="tabs-1">
            <table>
                <thead>
                    <tr class="encabezado-fila">
                        <th>Documento</th>
                        <th>Nombre Completo</th>
                        <th>Telefono</th>
                        <th>Direccion</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    
                    $sql = "SELECT * FROM usuarios
                            WHERE tipo_usuario = 'asesor'
                            ORDER BY nombres ASC;";
                    $rs  = mysql_query($sql, $cnx);

                    $nr = mysql_num_rows($rs);

                    if ($nr <= 0) {
                        echo "<tr><td colspan='5'>No hay asesores registrados</td></tr>";
                    }
                    else
                    {
                        while ($reg = mysql_fetch_array($rs)) 
                        {
                    ?>
                        <tr>
                            <td><?php echo $reg['no_identificacion']; ?></td>
                            <td><?php echo $reg['nombres']." ".$reg['apellidos']; ?></td>
                            <td><?php echo $reg['telefono_fijo']; ?></td>
                            <td><?php echo $reg['direccion_residencia']; ?></td>
                            <td>
                                <div class="view_button">
                                    <a href="./admin/list_user.php?id=<?php echo $reg['id_usuario']; ?>" class="iframe cboxElement">
                                        <img src="./public/images/icons/view.png" alt="" id="view_icon">
                                    </a>
                                </div>
                                <div class="modify_button">
                                    <a href="./admin/update_users.php?id=<?php echo $reg['id_usuario']; ?>" class="iframe cboxElement">
                                        <img src="./public/images/icons/modify.png" alt="" id="modify_icon">
                                    </a>
                                </div>
                                <div class="state_button">
                                    <a href="javascript:;" onclick="deleteAction('customer', <?php echo $reg['id_usuario']; ?>)">
                                        <img src="./public/images/icons/estado1.png" alt="" id="state_icon">
                                    </a>
                                </div> 
                                <div class="delete_button">
                                    <a href="./admin_backend.php" class="dlt_link" data-id="<?php echo $reg['id_usuario']; ?>" data-rol="user">
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
                        <th>Documento</th>
                        <th>Nombre Completo</th>
                        <th>Telefono</th>
                        <th>Direccion</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                <?php

                    $sql = "SELECT * FROM usuarios
                            WHERE tipo_usuario = 'cliente'
                            ORDER BY nombres ASC;";
                    $rs  = mysql_query($sql,$cnx);

                    $nr = mysql_num_rows($rs);

                    if ($nr <= 0) {
                        echo "<tr><td colspan='5'>No hay clientes registrados</td></tr>";
                    }
                    else
                    {
                        while ($reg = mysql_fetch_array($rs)) 
                        {
                    ?>
                        <tr>
                            <td><?php echo $reg['no_identificacion']; ?></td>
                            <td><?php echo $reg['nombres']." ".$reg['apellidos']; ?></td>
                            <td><?php echo $reg['telefono_fijo']; ?></td>
                            <td><?php echo $reg['direccion_residencia']; ?></td>
                            <td class="temporal">
                                <div class="view_button">
                                    <a href="./admin/list_user.php?id=<?php echo $reg['id_usuario']; ?>"  class="iframe cboxElement">
                                        <img src="./public/images/icons/view.png" alt="" id="view_icon">
                                    </a>
                                </div>
                                <div class="modify_button">
                                    <a href="./admin/update_users.php?id=<?php echo $reg['id_usuario']; ?>" class="iframe cboxElement">
                                        <img src="./public/images/icons/modify.png" alt="" id="modify_icon">
                                    </a>
                                </div>
                                <div class="state_button">
                                    <a href="javascript:;" onclick="deleteAction('customer', <?php echo $reg['id_usuario']; ?>)">
                                        <img src="./public/images/icons/estado1.png" alt="" id="state_icon">
                                    </a>
                                </div> 
                                <div class="delete_button">
                                    <a href="../admin_backend.php" data-id="<?php echo $reg['id_usuario']; ?>" data-rol="user">
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

