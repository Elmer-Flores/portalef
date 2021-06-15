<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/link.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/estilos2.css">
    <link rel="stylesheet" href="css/links.css">
    <title>Elmer Flores</title>
</head>
<body>
    <div class="container">
        <nav class="navbar" id="home">
            <h2 class="logo-name">Codigo Negro</h2>
            <ul class="options">
                <li><a href="#home">Home</a></li>
                <li><a href="#mi">¿Quién soy?</a></li>
                <li><a href="#servicios">Servicios</a></li>
                <li><a href="#footer">Contactos</a></li>
            </ul>
        </nav>
        <header class="header">
            <img src="img/fondo.jpg" class="image" alt="">
            <h1 class="name"><?php echo "< Elmer Flores />"; ?></h1>
            <h2 class="job">Development</h2>
        </header>
        
        <main class="main">
            <section class="home-section" id="servicios">
                <div class="box-lg">
                    <h3 class="title-box-lg">Areás de Trabajo</h3>
                </div>
                <div class="box">
                    <h3 class="title-box">Layout</h3>
                    <p class="p-box">□□</p>
                    <p class="p-box">□□</p>
                </div>
                <div class="box">
                    <h3 class="title-box">Code</h3>
                    <p class="icon-area"></p>
                </div>
                <div class="box">
                    <h3 class="title-box">Design</h3>
                    <p class="icon-area">⫘</p>
                </div>
            </section>
            <section class="me-present" id="mi">
                <img src="img/gorila.png" class="image-monkey" alt="" id="monkey">
                <div class="container-conts">
                    <div class="cont-part">
                        <div class="cont-title-me">
                            <h2 class="title-me">Perfil Personal</h2>
                        </div>
                        <div class="text-me">
                            <p class="p-me">Soy Elmer Flores estudiante secundario, aspirante a ser un Desarollador Web especialista en PHP, Desarollador Web Full Stack con Python y JavaScript. Actualmente soy cursante en la institucion en Argentina.</p>
                            <p class="p-me">Actualmente me encuentra en la mejora constante de mis habilidades y conocimientos. Ansioso de trabajar y aprender de nuevas compañeros en los equipos de software.</p>
                        </div>
                    </div>
                    <div class="cont-part">
                        <div class="cont-title-me">
                            <h2 class="title-me">Habilidades</h2>
                        </div>
                        <div class="text-me">
                            <p class="p-me">Maquetador web con fuertes conocimientos de HTML y CSS.<br>Diseñador de paginas Web con CSS, JS y herramientas de diseño.<br>Creacion de aplicaciones de escritorio y web con tegnologias C#, JS, React, Django, PHP, Laravel.</p>
                            <p class="p-me">Consumo de API con JavaScript para la Web. Manejo de versionados de aplicaciones con Git y Github.</p>
                        </div>
                    </div>
                    <div class="cont-part">
                        <div class="cont-title-me">
                            <h2 class="title-me">Contactos</h2>
                        </div>
                        <div class="text-me">
                            <p class="p-me">Si quieres trabajar conmigo o tener una relacion más fluida, puedes comunicarte conmigo o ver mis proyectos más novedosos en mi <a class="link-ctc" href="https://www.instagram.com/elmerfloresok/" target="_blank">GitHub</a>.</p>
                            <p class="p-me">De la misma manera puedes hacerlo con mis otras redes sociales y de trabajo: <a class="link-ctc" href="https://www.instagram.com/elmerfloresok/" target="_blank">instagram</a>, <a class="link-ctc" href="https://www.linkedin.com/in/elmer-flores-58a02b210/"" target="_blank">linkedin</i></a>, <a class="link-ctc" href="https://www.facebook.com/profile.php?id=100029316218959" target="_blank">facebook</a>.</p>
                        </div>
                    </div>
                    <div class="cont-part">
                        <div class="cont-title-me">
                            <h2 class="title-me">Experiencia Laboral</h2>
                        </div>
                        <div class="text-me">
                            <p class="p-me">He realizado diversos cursos de Desarollo Web con distintos lengujes y tecnologias.<br>Curso Desarollo Web 1 en <a class="link-ctc" href="https://aprendeprogramando.virtual.bue.edu.ar/" target="_blank">Aprende Programando</a> en colaboracion con la UTN, el programa "<a class="link-ctc" href="https://junior.org.ar/" target="_blank">Yo puedo Programar</a>" de Junior Atachment en Argentina. Distinos cursos de Udemy, Plazti y Youtube para complementarlas.</p>
                            <p class="p-me">
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer class="footer" id="footer">
            <div class="descripcion-footer">
                <h3 class="titulo-descripcion">Desing,</h3>
                <h3 class="titulo-descripcion">tester &</h3>
                <h3 class="titulo-descripcion">develpment</h3>
                <h5 class="subtitulo-descripcion">COPYRIGHT 2021 ELMER FLORES</h5>
                <h5 class="redes">
                    <a class="link-red" href="https://www.instagram.com/elmerfloresok/" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a class="link-red" href="https://github.com/Elmer-Flores" target="_blank"><i class="fab fa-github"></i></a>
                    <a class="link-red" href="https://www.linkedin.com/in/elmer-flores-58a02b210/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                </h5>
            </div>
            <div class="contacto">
                <h2 class="titulo-contacto">Formulario de Contacto</h2>
                <form action="enviar.php" method="POST" class="form" autocomplete="off">
                    <input class="campo" type="text" name="nombre" placeholder="Nombre" required>
                    <input class="campo" type="email" name="gmail" placeholder="Correo" required>
                    <input class="campo" type="text" name="mensaje" placeholder="mensaje" required>
                    <p><input class="btn-form" name="boton-envio" type="submit" value="Enviar"></p>
                </form>
            </div>
        </footer>
    </div>
    <script src="js/script.js"></script>
</body>
</html>