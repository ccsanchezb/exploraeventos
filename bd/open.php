<?php 

    # Creamos conexion a la BD

    $server = 'localhost';
    $user = "root";
    $pass = "";
    $dbname = "explorae";
    $cnx = mysql_connect($server, $user, $pass);



    if (!$cnx) 
    {
        die('Error de conexion a la BD => '.mysql_error());
    }

    if (!mysql_select_db($dbname)) 
    {
        die('Error de seleccion => '.mysql_error());
    }

?>