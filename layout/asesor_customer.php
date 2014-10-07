<section id="content_wrapper">
    <div id="add_button">
        <a href="./asesor/add_customer.php" class="iframe cboxElement">Agregar Cliente</a>
    </div>
    <table>
        <thead>
            <tr class="encabezado-fila">
                <th>No. Identificacion</th>
                <th>Nombre Completo</th>
                <th>Telefono Fijo</th>
                <th>Correo Electronico</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php
            
            $sql = "SELECT * FROM usuarios
                    WHERE tipo_usuario = 'cliente'
                    ORDER BY nombres ASC;";
            $rs  = mysql_query($sql, $cnx);

            $nr = mysql_num_rows($rs);

            if ($nr <= 0) {
                echo "<tr><td colspan='5'>No hay <b>Clientes</b> registrados</td></tr>";
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
                    <td><?php echo $reg['email']; ?></td>
                    <td>
                        <div class="view_button">
                            <a href="./asesor/list_customer.php?id=<?php echo $reg['id_usuario']; ?>" class="iframe cboxElement">
                                <img src="./public/images/icons/view.png" alt="" id="view_icon">
                            </a>
                        </div>
                        <div class="modify_button">
                            <a href="./asesor/update_customers.php?id=<?php echo $reg['id_usuario']; ?>" class="iframe cboxElement">
                                <img src="./public/images/icons/modify.png" alt="" id="modify_icon">
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