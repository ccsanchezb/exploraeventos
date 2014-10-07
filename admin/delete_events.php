<?php
  
    session_start();
    $page = "admin-evento";
    include "../layout/header.php";
    require "../bd/open.php";
    
    if (isset($_SESSION['userCheck'])) 
    {
        $evento = $_GET['evento'];
        echo $evento;

        if ($evento=="social")
        {
            $id = $_GET['id'];
            $sql = "DELETE FROM eventos_sociales
                    WHERE id_sociales = $id;";
        }
        else
        {
            $id = $_GET['id'];
            $sql = "DELETE FROM eventos_empresariales
                    WHERE id_empresariales = $id;";
        }
        
        if (mysql_query($sql, $cnx)) 
        {
            echo "<script>";
            echo "alert('Registro eliminado con exito');";
            echo "window.location.replace('../eventos_admin.php')";
            echo "</script>";  
        }
        else
        {
            echo "<script>";
            echo "alert('Problemas para eliminar el registro.');";
            echo "</script>";
        }
    }
    else
    {
        echo "<script>";
        echo "alert('Por favor inicie sesión');";
        echo "window.location.replace('../index.php')";
        echo "</script>";
    }
    
    require "../bd/close.php";
    include "../layout/footer.php";    

 ?>