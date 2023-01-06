<!--Aqui esta el portafolio-->



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="librerias/css/Estilo.css">
    <title>LP Desarrollador Web</title>
</head>

<body>
    <!-- SECCION I N I C I O -->
    <section id="inicio">
        <div class="contenido">
            <header>
                <div class="contenido-header">
                    <img src="img/logo.png" alt="">
                    <nav id="nav" class="">
                        <ul id="links">
                            <li><a href="#inicio" class="seleccionado" onclick="seleccionar(this)">INICIO</a></li>
                            <li><a href="#sobremi" onclick="seleccionar(this)">SOBRE MI</a></li>
                            <li><a href="#servicios" onclick="seleccionar(this)">SERVICIOS</a></li>
                            <li><a href="#portfolio" onclick="seleccionar(this)">PORTFOLIO</a></li>
                            <li><a href="#contacto" onclick="seleccionar(this)">CONTACTO</a></li>
                        </ul>
                    </nav>
                    <!-- Icono del menu responsive -->
                    <div id="icono-nav" onclick="responsiveMenu()">
                        <i class="fa-solid fa-bars"></i>
                    </div>

                    <!--  <div class="redes">
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram-square"></i></a>
                    </div> -->
                </div>
            </header>
            <div class="presentacion">
                <!--<p class="bienvenida">Bienvenidos</p>-->
                <h2>Soy<span>Lisibeth Vivas</span>, Desarrollador Web</h2>
                <!--  <p class="descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta,</p>-->
                <a href="#portfolio">Ir a Portafolio</a>
            </div>
        </div>

        <!--Aqui esta el estilo de la franja con onda-->
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path>
            </svg></div>

    </section>

    <!-- SECCION S O B R E M I -->
    <section id="sobremi">
        <div class="contenedor-foto">
            <img src="img/yo.png" alt="">
        </div>
        <div class="sobremi">
            <p class="titulo-seccion">Sobre Mi</p>
            <h2>Gracias <span>por tu visita</span> </h2>
            <h3>Te invito a conocer mi trabajo</h3>
            <p>Actualmente  me encuentro aprendiendo a diseñar y programar nuevos proyectos y sitios de aplicaciones web, del lado del cliente
            (Front-end). <br> <br> Soy totalmente autodidacta, me encanta esta en un contante aprendizaje y probar cosas nuevas en cuanto a diseño se refiere.
            No me gusta definirme por el trabajo que he hecho, si no por el que puedo llegar hacer. La habilidades, en mi definición se pueden enseñar, La personalidad es inherente. 
            Elijo seguir aprendiendo, desafiarme cada día y lograr realizar cosas que importen y tengan un significado. <br>
                
            <a href="cvlisibeth.pdf" class="btn" download="cv.pdf">Descargar CV</a>

        </div>
    </section>

    <!-- SECCION S E R V I C I O S -->
    <section id="servicios">
        <h3 class="titulo-seccion">MIS SERVICIOS</h3>
        <div class="fila">
            <div class="servicio">
                <span class="icono"> <i class="fa-solid fa-code"></i></span>
                <h4>Diseño de Sitios Web</h4>
                <hr>
                <ul class="servicios-tag">
                    <li>Web</li>
                    <li>Graphic</li>
                    <li>SEO</li>
                </ul>
                <p>I have been providing web design services with great success for 9 years. The client is very happy</p>
            </div>

            <div class="servicio">
                <span class="icono"><i class="fa-solid fa-file-code"></i></span>
                <h4>Porgramación PHP && javascript</h4>
                <hr>
                <ul class="servicios-tag">
                    <li>Web</li>
                    <li>Graphic</li>
                    <li>SEO</li>
                </ul>
                <p>I have been providing web design services with great success for 9 years. The client is very happy</p>
            </div>

            <div class="servicio">
                <span class="icono"><i class="fa-solid fa-database"></i></span>
                <h4>Alojamiento de Sitios</h4>
                <hr>
                <ul class="servicios-tag">
                    <li>Web</li>
                    <li>Graphic</li>
                    <li>SEO</li>
                </ul>
                <p>I have been providing web design services with great success for 9 years. The client is very happy</p>
            </div>




        </div>
    </section>

    <!-- SECCION H A B I L I D A D E S -->
    <div class="contenedor-skills" id="skills">
        <h3>HABILIDADES</h3>
        <div class="skill">
            <div class="info">
                <p> <span class="lista"> </span>Html / Css / Bootstrap</p>
                <span class="porcentaje">95%</span>
            </div>

            <div class="barra">
                <div class="" id="html"></div>
            </div>
        </div>
        <div class="skill">
            <div class="info">
                <p> <span class="lista"> </span>Javascript</p>
                <span class="porcentaje">90%</span>
            </div>

            <div class="barra">
                <div class="" id="js"></div>
            </div>
        </div>
        <div class="skill">
            <div class="info">
                <p> <span class="lista"> </span>Php</p>
                <span class="porcentaje">90%</span>
            </div>

            <div class="barra">
                <div class="" id="bd"></div>
            </div>
        </div>
        <div class="skill">
            <div class="info">
                <p> <span class="lista"> </span>Bases de Datos</p>
                <span class="porcentaje">85%</span>
            </div>

            <div class="barra">
                <div class="" id="ps"></div>
            </div>
        </div>
    </div>

    <!-- SECCION PORTAFOLIO -->
    <section id="portfolio">
        <h3 class="titulo-seccion">Mis Proyectos</h3>
        <div class="fila">
            <div class="proyecto">
                <div class="overlay"></div>
                <img src="img/proyecto1.png" alt="">
                <div class="info">
                    <h4>Sistema de intranet</h4>
                    <p>Realizado en: Php, Javascript, Html, Css, Bootstrap y Mysql</p>
                </div>
            </div>
            <div class="proyecto">
                <div class="overlay"></div>
                <img src="img/proyecto2.png" alt="">
                <div class="info">
                    <h4>Pagina de servicios</h4>
                    <p>Realizado en: Php, Javascript, Html, Css, Bootstrap</p>
                </div>
            </div>
            <div class="proyecto">
                <div class="overlay"></div>
                <img src="img/proyecto3.jpg" alt="">
                <div class="info">
                    <h4>Descripcion Proyecto</h4>
                    <p>Diseño Web</p>
                </div>
            </div>
        </div>
        <div class="fila">
            <div class="proyecto">
                <div class="overlay"></div>
                <img src="img/proyecto4.jpg" alt="">
                <div class="info">
                    <h4>Descripcion Proyecto</h4>
                    <p>Diseño Web</p>
                </div>
            </div>
            <div class="proyecto">
                <div class="overlay"></div>
                <img src="img/proyecto5.jpg" alt="">
                <div class="info">
                    <h4>Descripcion Proyecto</h4>
                    <p>Diseño Web</p>
                </div>
            </div>
            <div class="proyecto">
                <div class="overlay"></div>
                <img src="img/proyecto6.jpg" alt="">
                <div class="info">
                    <h4>Descripcion Proyecto</h4>
                    <p>Diseño Web</p>
                </div>
            </div>
        </div>
        <div class="fila">
            <div class="proyecto">
                <div class="overlay"></div>
                <img src="img/proyecto7.jpg" alt="">
                <div class="info">
                    <h4>Descripcion Proyecto</h4>
                    <p>Diseño Web</p>
                </div>
            </div>
            <div class="proyecto">
                <div class="overlay"></div>
                <img src="img/proyecto8.jpg" alt="">
                <div class="info">
                    <h4>Descripcion Proyecto</h4>
                    <p>Diseño Web</p>
                </div>
            </div>
            <div class="proyecto">
                <div class="overlay"></div>
                <img src="img/proyecto9.jpg" alt="">
                <div class="info">
                    <h4>Descripcion Proyecto</h4>
                    <p>Diseño Web</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCTION C O N T A C T O -->
    <section id="contacto">
        <h3 class="titulo-seccion">Puedes contactarme por aqui</h3> <br>
        <div class="contenedor-form">
            <form id="formulario" class="well col-lg-12" action="controlador/enviar.php" method="post" name="formulario" enctype="multipart/form-data">
                <form action="">
                    <div class="fila mitad">
                        <input id="Nombre" class="input-mitad" type="text" name="Nombre" placeholder="Escribe tu nombre completo" />
                        <input id="Email" class="input-mitad" type="email" name="Email" placeholder="Direccion de email" />
                    </div>
                    <!--   <div class="fila">
                    <input type="text" placeholder="asunto" class="input-full">
                </div> -->
                    <div class="fila">
                        <textarea id="Mensaje" class="input-full" name="Mensaje" rows="4" placeholder="Escribe tu mensaje aqui"></textarea>
                    </div>
                    <input type="submit" value="Enviar Mensaje" class="btn-enviar">
                </form>
        </div>
    </section>

    <!-- SECCION FOOTER -->

    <div class="container-footer">
        <footer>

       
            <!--Iconos de redes sociales-->
            <div class="redes-footer">
                <a href="https://www.linkedin.com/in/lisibeth-vivas-9a4b24195" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-linkedin-in icon-redes-footer"></i></a>
                <a href=""><i class="fa-brands fa-facebook icon-redes-footer" target="_blank" rel="noopener noreferrer"></i></a>
                <a href=""><i class="fa-brands fa-instagram icon-redes-footer" target="_blank" rel="noopener noreferrer"></i></a>
                
                <!-- <a href=""><i class="fa-brands fa-twitter icon-redes-footer"></i></a>-->
            </div>
            <!--Derechos de autor-->
            <h4>@ Derechos reservardos- Lisibeth Vivas</h4>
        </footer>
    </div>

    <!--Aqui hacemos el llamado a los script-->
    <script src="librerias/js/script.js"></script>
</body>

</html>