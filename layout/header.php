<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">

<title>
  <?php 

    switch ($page) {
        case 'salones':
            echo "Explora Eventos | Salones";
            break;

        case 'decoracion':
            echo "Explora Eventos | Decoración";
            break;

        case 'tematicas':
            echo "Explora Eventos | Temáticas";
            break;

        case 'menu':
            echo "Explora Eventos | Menú";
            break;

        case 'formulario':
            echo "Explora Eventos | Cotiza Ya";
            break;

        case 'sociales':
            echo "Explora Eventos | Eventos Sociales";
            break;

        case 'empresariales':
            echo "Explora Eventos | Eventos Empresariales";
            break;

        case 'artistas':
            echo "Explora Eventos | Artistas";
            break;

        case 'equipos':
            echo "Explora Eventos | Alquiler de equipos";
            break;

        case 'admin':
            echo "Explora Eventos | Panel del administrador";
            break;

        case 'admin-salon':
            echo "Explora Eventos | Administrar Salones";
            break;

        case 'admin-evento':
            echo "Explora Eventos | Administrar Eventos";
            break;

        case 'admin-equipos':
            echo "Explora Eventos | Administrar Equipos";
            break;

        case 'admin-artistas':
            echo "Explora Eventos | Administrar Artistas";
            break;

        default:
            echo "Explora Eventos | Inicio";
            break;
    }
  ?>
</title>

<link rel="icon" type="image/png" href="http://localhost/exploraeventos/public/images/icons/favicon.png">
<link rel="stylesheet" type="text/css" media="screen" href="http://localhost/exploraeventos/public/css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="http://localhost/exploraeventos/public/css/jquery-ui.css">
<link rel="stylesheet" type="text/css" media="screen" href="http://localhost/exploraeventos/public/css/reveal.css">
<link rel="stylesheet" type="text/css" media="screen" href="http://localhost/exploraeventos/public/css/colorbox.css"> 
<link rel="stylesheet" type="text/css" media="screen" href="http://localhost/exploraeventos/public/css/lightbox.css"> 
<link rel="stylesheet" type="text/css" media="screen" href="http://localhost/exploraeventos/bxslider/jquery.bxslider.css">
<!-- <link rel="stylesheet" type="text/css" media="screen" href="./public/css/normalize.css"> -->
<!-- <link rel="stylesheet" type="text/css" media="screen" href="./public/css/reset.css"> -->
<!-- <link rel="stylesheet" type="text/css" media="screen" href="./public/css/bootstrap.css"> -->
<!-- <link rel="stylesheet" type="text/css" media="screen" href="./css/jquery-ui.theme.css"> --> 

<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
<![endif]-->
<!--[if lt IE 9]>
        <script type="text/javascript" src="js/html5.js"></script>
        <link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
<![endif]-->

</head>
<body>

<!--==============================header=================================-->
