<?php 
    
    if (isset($_POST['no_identificacion'])) 
    {
        $no_identificacion = $_POST['no_identificacion'];
        $password   = $_POST['password'];

        $sql = "SELECT nombres, no_identificacion, password, tipo_usuario, id_usuario
                FROM usuarios 
                WHERE no_identificacion = '$no_identificacion'
                AND password = '$password'
                AND estado = 'Activo'
                LIMIT 1;";

        $rs = mysql_query($sql, $cnx);
        $nr = mysql_num_rows($rs);

        if ($nr < 1) 
        {
            echo "<script>";
            echo "alert('No. Identificacion o Contraseña son incerrectos, por favor verifique de nuevo');";
            echo "window.location.replace('./index.php');";
            echo "</script>";
        }
        else
        {
            while ($reg = mysql_fetch_array($rs)) 
            {
                $_SESSION['userName'] = $reg['nombres'];
                $_SESSION['userRole'] = $reg['tipo_usuario'];
                $_SESSION['userId'] = $reg['id_usuario'];
                $_SESSION['userCheck'] = $reg['no_identificacion'];
            }
            switch ($_SESSION['userRole']) {
                case 'admin':
                    echo "<script>";
                    echo "alert('Bienvenid@: ".$_SESSION['userName']."');";
                    echo "window.location.replace('./admin_backend.php');";
                    echo "</script>";
                    break;

                case 'asesor':
                    echo "<script>"; 
                    echo "alert('Bienvenid@: ".$_SESSION['userName']."');";           
                    echo "window.location.replace('./asesor_backend.php');";
                    echo "</script>";
                    break;
                
                default:
                    header('./security/auth.php');
                    break;
            }    
        }
    }
?>