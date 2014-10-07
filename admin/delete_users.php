<?php
  
    session_start();
    $page = "admin";
    include "../layout/header.php";
    require "../bd/open.php";
    
    if (isset($_SESSION['userCheck'])) 
    {
        $id = $_GET['id'];
        $sql = "DELETE FROM usuarios
                WHERE id_usuario = $id;";
        
        if (mysql_query($sql, $cnx)) 
        {
            echo "<script>";
            echo "alert('Registro eliminado con exito');";
            echo "window.location.replace('../admin_backend.php')";
            echo "</script>";  
        }
        else
        {
            echo "<script>";
            echo "alert('Problemas para eliminar el registro.'".mysql_error($sql).");";
            echo "</script>";
        }
    }
    
    require "../bd/close.php";
    include "../layout/footer.php";    

 ?>