<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />

    <!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->
    <title>AICEMA</title>

     <style>
        body {
            font-family: "Helvetica", sans-serif;
            background-color: #fff;
            color: #000;
            margin: 0;
            padding: 0;
        }
      h2{
      
            font-family: "Frutiger semibold", sans-serif;
           /* background-color: #fff;
            color: #000;
            margin: 0;
            padding: 0;
       */
      }
        /* Navbar con logo circular a la izquierda */
        .navbar {
          
            color: #fff;
            display: flex;
            align-items: center;
            padding: 10px 20px;
            font-weight: bold;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 10;
        }
        .navbar-logo {
            background-color: #fff;
            border-radius: 50%;
            width: 100px; /* Tamaño ajustado para que el logo sea más grande */
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            left: 20px;
            top: -30px;
            margin-right: ;
        }
        .navbar-logo img {
            width: 90%; /* Ajuste de tamaño de la imagen dentro del logo */
            height: auto;
            border-radius: 50%;
        }
        .navbar-links {
            display: flex;
            gap:0px;
          justify-content: space-evenly; /* Distribuye los enlaces uniformemente */
            align-items: center;
            width: 100%;
           margin-left:0px;
            margin-right: 0px; /* Ajuste para separar los enlaces del borde derecho */
        }
        .navbar a {
            color: #fff;
            text-decoration: none;
            padding: 0px 0px;
            display: flex;
            align-items: center;
        }
        .navbar a:hover {
            color: #1E90FF; /* Color azul para el enlace al pasar el mouse */
        }
    

        .content-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: vh;
            padding-top: 120px; /* Espacio ajustado para la barra de navegación y el logo */
        }

 /* Menú desplegable */
        .dropdownlogo {
            position: relative;

        }
        .dropdownlogo-content {
display: block;
    transform-origin: top;
    transform: scaleY(-40px); /* Inicialmente colapsado */
    transform: translateY(-60px);
    transition: transform 2s ease-in, transform 0.5s ease-out; /* Lento para la entrada, rápido para la salida */
    position: absolute;
    top: 20%;
    left: 100%;
    background-color: #000;
    padding: 10px;
    border-radius: 4px;
    min-width: 180px;
        }
        .dropdownlogo-content a {
            color: #fff;
            padding: 8px 100px;
            text-decoration: none;
            display: block;
            white-space: nowrap;
        }
        .dropdownlogo-content a:hover {
            
        }
        /* Mostrar el menú desplegable al pasar el mouse sobre la sección principal */
        .dropdownlogo:hover .dropdownlogo-content {
        
           visibility: visible; /* Hacerlo visible */
            opacity: 1; /* Hacerlo completamente opaco */
             display: block;
        }
    /* Menú desplegable */
        .dropdown {
            position: relative;
        }
        .dropdown-content {

            display: none;
            position: absolute;
            top: 100%;
            left: 25%;
            background-color: #000;
            padding: 1px;
            border-radius: 4px;
            min-width: 180px;
        }
        .dropdown-content a {
            color: #fff;
            padding: 8px 16px;
            text-decoration: none;
            display: block;
            white-space: nowrap;
        }
        .dropdown-content a:hover {
            background-color: #333;
        }
        /* Mostrar el menú desplegable al pasar el mouse sobre la sección principal */
        .dropdown:hover .dropdown-content {
            display: block;
        }
         </style>
  </head>
  <body> <!-- Navbar -->
    <div class="navbar">
  <div class="dropdownlogo">    <div class="navbar-logo"> <a href="index.php"><img  src="img/logo_aicema.png" alt="Logo de Crecimiento Económico y Medio Ambiente"></a>
   <div class="dropdownlogo-content">
        
      <div class="navbar-links">
        <div class="dropdown"> <a href="nosotros.php">Nosotros</a>
          <div class="dropdown-content"> <a href="#">Misión</a>
           <a href="#">Visión</a>
            <a href="#">Investigadores</a> 
            </div>
        </div>
        <div class="dropdown"> <a href="proyecto_AICEMA.php">UAM-EPIC</a>
        
          <div class="dropdown-content"> <a href="Acerca_de.php">Acerca de</a> 
          <a href="Flyers.php">Flyers
            </a> 
              
             <a href="Conocenos.php">Conócenos</a>
             
            <a href="Documentales.php">Documentales</a> 
                        <a href="Mas.php">Más</a> 
                        
                         <a href="Medios de difusion.php">Medios de difusión</a> </div>
        </div>
        <div class="dropdown"> <a href="investigacion.php">Investigación</a>
          <div class="dropdown-content"> <a href="#">Líneas de investigación</a>
            <a href="#">Proyectos de investigación</a> </div>
        </div>
        <a href="#">Publicaciones</a> <a href="escenarios.php">Plataforma SED</a> 
        <a href="servicio_social.php">Servicio social</a> </div>
    </div>
        </div>
      </div>
         <script>
        // JavaScript para controlar el menú desplegable
        const dropdownlogo = document.querySelector('.dropdownlogo');
        const dropdownlogoContent = document.querySelector('.dropdownlogo-content');

        dropdownlogo.addEventListener('mouseenter', () => {
            dropdownlogoContent.style.transform = 'scaleY(1) translateY(0)'; // Mostrar el menú
        });

        dropdownlogo.addEventListener('mouseleave', () => {
            dropdownlogoContent.style.transform = 'scaleY(0) translateY(-20px)'; // Ocultar el menú
        });
    </script>
          </div>
      </div>
