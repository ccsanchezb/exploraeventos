<?php
  
    session_start();
    $page = "admin-salon";
    include "../layout/header.php";
    require "../bd/open.php";
    
    if (isset($_SESSION['userCheck'])) 
    {
        $id = $_GET['id'];
        $sql = "DELETE FROM artistas
                WHERE id_artista = $id;";
        
        if (mysql_query($sql, $cnx)) 
        {
            echo "<script>";
            echo "alert('Registro eliminado con exito');";
            echo "window.location.replace('../artistas_admin.php')";
            echo "</script>";  
        }
        else
        {
            echo "<script>";
            echo "alert('Problemas para eliminar el registro.');";
            echo "</script>";
        }
    }
    
    require "../bd/close.php";
    include "../layout/footer.php";    

 ?>