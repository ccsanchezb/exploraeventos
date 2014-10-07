<?php 
    if (!isset($_SESSION['userCheck'])) 
    {
?>

        <script>
            alert('Esta zona es para personal autorizado... \nPor favor Inicie Seccion');
            window.location.replace('./');
        </script>";

<?php 
    }
?>