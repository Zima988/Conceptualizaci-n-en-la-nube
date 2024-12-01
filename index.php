<?php include('header.php'); ?>
<style>
body, html {
    margin: 0;
    padding: 0;
    overflow-x: hidden;
}
    /* Contenedor de los logos */


   .logos-container {
    display: flex;
    justify-content: space-around;
    align-items: center;
    position: absolute; /* Coloca los logos sobre el carrusel */
    top: 60px; /* Ajusta la distancia desde la parte superior de la página */
    width: 100%; /* Extiende el contenedor de logos para que abarque todo el ancho */
    z-index: 2;
    padding: 0; /* Elimina el padding */
}

.logos-container img {
    height: 100px;
    display: block;
}

.background-carousel {
    position: relative;
    width: 100%;
    height: 80vh;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
}

.carousel-slide {
    position: absolute;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 1s ease;
}

.carousel-slide.active {
    opacity: 1;
}

.carousel-slide::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 1;
}

.content-wrapper {
    margin: 0 auto;
    padding: 0;
}

.carousel, .gallery-section {
    max-height: 100vh;
    overflow: hidden;
}

.carousel-content {
    position: relative;
    text-align: center;
    color: #ffffff;
    z-index: 2;
}

.carousel-content h1 {
    font-size: 48px;
    font-weight: bold;
    margin: 0;
}

.carousel-content p {
    font-size: 24px;
    margin: 10px 0;
}

.carousel-content .highlight {
    color: #A4DE02;
}

.carousel-content .more-button {
    display: inline-block;
    background-color: #000;
    color: #fff;
    padding: 10px 20px;
    font-size: 18px;
    border-radius: 30px;
    text-decoration: none;
    margin-top: 20px;
}
    /* Estilo para la galería y superposición de texto */
    .gallery-section {
    position: relative;
    top: -100px; /* Ajusta este valor para que la galería se superponga más arriba */
    z-index: 2;
    text-align: center;
    padding: 20px 0;
    background-color: #f9f9f9;
}

.gallery-title {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 20px;
}

.gallery-carousel-container {
    display: flex;
    justify-content: center; /* Centrar horizontalmente */
    overflow: hidden;
    width: 100%; /* Ajusta el ancho al 100% del contenedor principal */
    max-width: 90%; /* Limita el ancho máximo para mantener el contenido centrado */
    margin: 0 auto; /* Asegura que esté centrado */
}

.carousel-track {
    display: flex;
    transition: transform 0.5s ease;
    gap: 10px;
}

.gallery-item {
    flex: 0 0 calc(25% - 10px);
    height: 300px;
    border-radius: 8px;
    overflow: hidden;
    position: relative;
    cursor: pointer;
}

.gallery-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.6);
    color: white;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
    text-align: center;
    padding: 10px;
}

.gallery-item:hover .overlay {
    opacity: 1;
}

.overlay h3 {
    margin: 10px;
    font-size: 18px;
}

.overlay p {
    margin: 5px;
    font-size: 14px;
}

.overlay a {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    background-color: #28a745;
    color: #fff;
    font-size: 24px;
    border-radius: 50%;
    text-decoration: none;
}

.carousel-nav-buttons {
    display: flex;
    justify-content: center;
    margin-top: 20px;
    gap: 10px;
}

.carousel-nav-button {
    padding: 10px;
    background-color: #0052CC;
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 5px;
}
/* Flechas de navegación en la galería */
.gallery-nav-arrow {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    font-size: 30px;
    color: #0052CC; /* Azul */
    background-color: rgba(255, 255, 255, 0.8);
    padding: 10px;
    border-radius: 50%;
    cursor: pointer;
    z-index: 1;
    transition: background-color 0.3s ease;
}

.gallery-nav-arrow:hover {
    background-color: #0052CC; /* Azul más oscuro */
    color: white;
}

.gallery-nav-arrow.left {
    left: 10px;
}

.gallery-nav-arrow.right {
    right: 10px;
}

/* Ajustes generales de la galería */
.gallery-section {
    position: relative;
    z-index: 2;
    text-align: center;
    padding: 20px 0;
    background-color: transparent;
}

.gallery-title {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 20px;
}

.gallery-carousel-container {
    position: relative;
    display: flex;
    justify-content: center;
    overflow: hidden;
    width: 100%;
    max-width: 90%;
    margin: 0 auto;
}

.carousel-track {
    display: flex;
    transition: transform 0.5s ease;
    gap: 10px;
}

.gallery-item {
    flex: 0 0 calc(25% - 10px);
    height: 300px;
    border-radius: 8px;
    overflow: hidden;
    position: relative;
    cursor: pointer;
}

.gallery-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.6);
    color: white;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
    text-align: center;
    padding: 10px;
}

.gallery-item:hover .overlay {
    opacity: 1;
}

.overlay h3 {
    margin: 10px;
    font-size: 18px;
}

.overlay p {
    margin: 5px;
    font-size: 14px;
}

.overlay a {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    background-color: #28a745;
    color: #fff;
    font-size: 24px;
    border-radius: 50%;
    text-decoration: none;
}

    .carousel-content {
        position: relative;
        text-align: center;
        color: #ffffff;
        z-index: 2;
    }

    .button-container {
        position: absolute;
        z-index: 3;
        width: 100%;
        height: 100%;
    }

    /* Estilo común para todos los botones */
    .custom-button {
        position: absolute;
        background-color: #000;
        color: #fff;
        padding: 10px 25px;
        font-size: 18px;
        border-radius: 20px;
        text-decoration: none;
        text-align: center;
        white-space: nowrap; /* Evita el salto de línea */
        transition: transform 0.3s ease, background-color 0.3s ease;
    }

    .custom-button:hover {
        transform: scale(1.1);
        background-color: #444;
    }

    /* Posiciones específicas */
    .button-mas {
        top: 100px;
        left: 600px;
    }

    .button-acerca {
        top: -200px;
        left:  590px;
    }

    .button-flayers {
        top: 100px;
        right:  600px;
    }

    .button-conocenos {
        top: -70px;
        left:  590px;
    }

    .button-documentales {
       top: -200px;
        right:  600px;
    }

    .button-difusion {
        top: -65px;
        right: 600px;
    }
</style>

<body>

  <center>
<br>
    <div>
        <form action="buscar.php" method="post">
            <input type="text" name="buscar" id="">
            <input type="submit" value="Buscar">
            <a href="nuevo.php">Añadir Nuevo</a>
        </form>
    </div>
    <br>
    <div>
        <table border="1">
            <tr>
                <td>ID</td>
                <td>NOMBRES</td>
                <td>APELLIDOS</td>
                <td>NOTA1</td>
                <td>NOTA2</td>
                <td>NOTA3</td>
                <td>PROMEDIO</td>
                <td>ESTADO</td>
            </tr>
            <?php
                $cnx = mysqli_connect("localhost", "root", "root123456", "dbprueba");
                $sql = "SELECT id, nom, ape, n1, n2, n3, ROUND((n1+n2+n3)/3, 1) as p
                        FROM talumno
                        
                        order by p desc";
                $rta = mysqli_query($cnx, $sql);
                while ($mostrar = mysqli_fetch_row($rta)) {
                    ?>
                    <tr>
                        <td><?php echo $mostrar[0] ?></td>
                        <td><?php echo $mostrar[1] ?></td>
                        <td><?php echo $mostrar[2] ?></td>
                        <td><?php echo $mostrar[3] ?></td>
                        <td><?php echo $mostrar[4] ?></td>
                        <td><?php echo $mostrar[5] ?></td>
                        <td><?php echo $mostrar[6] ?></td>
                        <td>
                            <?php 
                                if ($mostrar[6] >= 13) {
                                    echo "Aprobado";
                                }
                                else {
                                    echo "Desaprobado";
                                }
                            ?>
                        
                        </td>
                        <td>
                            <a href="editar.php?
                            id=<?php echo $mostrar[0] ?> &
                            nom=<?php echo $mostrar[1] ?> &
                            ape=<?php echo $mostrar[2] ?> &
                            n1=<?php echo $mostrar[3] ?> &
                            n2=<?php echo $mostrar[4] ?> &
                            n3=<?php echo $mostrar[5] ?>
                            ">Editar</a>
                            <a href="speliminar.php? id=<?php echo $mostrar[0] ?>">Eliminar</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
        </table>
    </div>
    </center>
            </div>
        </div>
        <!-- Agrega más diapositivas según sea necesario -->
    </div>

    <script>
    let currentSlide = 0;
    const slides = document.querySelectorAll('.carousel-slide');

    function showSlide(index) {
        slides[currentSlide].classList.remove('active');
        currentSlide = index;
        slides[currentSlide].classList.add('active');
    }

    setInterval(() => {
        showSlide((currentSlide + 1) % slides.length);
    }, 5000);
</script>


<script>
    const galleryTrack = document.getElementById('gallery-carousel-track');
    const galleryItems = document.querySelectorAll('.gallery-item');
    let galleryIndex = 0;

    function moveGallery(direction) {
        const itemsToShow = 4;
        const totalItems = galleryItems.length;
        galleryIndex += direction;

        // Evitar índices fuera de rango
        if (galleryIndex < 0) galleryIndex = 0;
        if (galleryIndex > totalItems - itemsToShow) galleryIndex = totalItems - itemsToShow;

        // Mover el track
        const itemWidth = galleryItems[0].offsetWidth + 10; // Ancho del elemento + gap
        galleryTrack.style.transform = `translateX(-${galleryIndex * itemWidth}px)`;
    }
</script>
      </div>
    </div>
<?php include('footer.php'); ?>
