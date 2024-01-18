<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/paginaInicio.css') }}">
    <title>IzyAcademy</title>
</head>
<body>
    <header>
        <div class="contenedor">
            <div class="logo">
                <img src="{{ asset('imagenes/Logo izyacademy transparente2022.png')}}" alt="logo">
            </div>
            <nav>
                <a href="" class="nav-link">Inicio</a>
                <div class="listaDesplegable">
                    <a href="#" class="nav-link">Rutas de Formación <i class='bx bx-chevron-down'></i></a>
                    <ul class="listaDesplegable-menu">
                        <li><a href="#">Científico de datos</a></li>
                        <li><a href="#">Ruta de Formación en .NET</a></li>
                        <li><a href="#">Ruta de Formación en Automatización </a></li>
                    </ul>
                </div>
            </nav>
            <div class="iniciosesion">
                <a href="#" class="nav-link">
                    <i class='bx bx-user'></i>
                    <span class="tooltip">Iniciar sesión</span>
                </a>
            </div>
        </div>
        <div class="texto">
            <h2 class="text-center">Continua tu formación con izyAcademy</h2>
            <p class="lead text-center">Te ofrecemos una experiencia de aprendizaje basada en tu formación por proyectos,</p>
            <p class="lead text-center">apoyada en el uso de recursos interactivos para que tu aprendizaje sea efectivo.</p>
        </div>
    </header>

    <h3>Novedades</h3>

    <div class="contenedorNovedades">
        <div class="novedadAu">
            <div class="imgNovAu">
                <img src="{{ asset('imagenes/novedadAumento.jpg')}}" alt="aumento">
            </div>
            <div class="titulo">
                <a href="#">Bienvenidos a izyAcademy</a>
            </div>
            <div class="contenido">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                    Laudantium doloremque tenetur similique, aspernatur laborum 
                    impedit in vero nostrum magnam sint tempora cupiditate architecto, 
                    sit blanditiis quas consectetur ipsa id fugiat!</p>
            </div>
        </div>
        <div class="novedades">
            <div class="carta">
                <div class="imgnov">
                    <img src="{{ asset('imagenes/novedad1.jpg')}}" alt="">
                </div>
                <div class="titulo">
                    <a href="#">Generación de comunidad </a>
                </div>
                <div class="texto2">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Inventore saepe beatae temporibus architecto sed sapiente
                        voluptas aliquam nihil, voluptates quos, delectus recusandae 
                        aliquid officiis ducimus natus ullam cum sequi officia?</p>
                </div>
            </div>
            <div class="carta">
                <div class="imgnov">
                    <img src="{{ asset('imagenes/novedad2.jpg')}}" alt="">
                </div>
                <div class="titulo">
                    <a href="#">Transferencia de conocimiento </a>
                </div>
                <div class="texto2">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Inventore saepe beatae temporibus architecto sed sapiente
                        voluptas aliquam nihil, voluptates quos, delectus recusandae 
                        aliquid officiis ducimus natus ullam cum sequi officia?</p>
                </div>
            </div>
            <div class="carta">
                <div class="imgnov">
                    <img src="{{ asset('imagenes/novedad3.jpg')}}" alt="">
                </div>
                <div class="titulo">
                    <a href="#">Certificaciones e insignias</a>
                </div>
                <div class="texto2">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Inventore saepe beatae temporibus architecto sed sapiente
                        voluptas aliquam nihil, voluptates quos, delectus recusandae 
                        aliquid officiis ducimus natus ullam cum sequi officia?</p>
                </div>
            </div>
            <div class="carta">
                <div class="imgnov">
                    <img src="{{ asset('imagenes/novedad4.jpg')}}" alt="">
                </div>
                <div class="titulo">
                    <a href="#">Apropiación de conocimiento </a>
                </div>
                <div class="texto2">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Inventore saepe beatae temporibus architecto sed sapiente
                        voluptas aliquam nihil, voluptates quos, delectus recusandae 
                        aliquid officiis ducimus natus ullam cum sequi officia?</p>
                </div>
            </div>
        </div>
    </div>

    <div class="conteTitAli">
        <h3 class="titAlia">Aliados</h3>
        <p class="texAlia">Nuestros entrenamientos, procesos formativos y certificación cuentan con el respaldo de empresas que confían en nosotros.</p>
    </div>

    <div class="contImgAli">
        <img src="{{ asset('imagenes/aliados1.jpg')}}" alt="">
        <img src="{{ asset('imagenes/aliados2.png')}}" alt="">
        <img src="{{ asset('imagenes/aliados3.png')}}" alt="">
        <img src="{{ asset('imagenes/aliados4.jpg')}}" alt="">
        <img src="{{ asset('imagenes/aliados5.jpg')}}" alt="">
        <img src="{{ asset('imagenes/aliados6.jpg')}}" alt="">
        <img src="{{ asset('imagenes/aliados7.png')}}" alt="">
        <img src="{{ asset('imagenes/aliados8.png')}}" alt="">
    </div>

    <footer class="piePagina">
        <div class="grupo1">
            <div class="box">
                <h2>Contáctanos</h2>
                <p>E-mail : comercial@qvision.us</p>
                <p>WhatsApp : +300 255 02 65</p>
                <p>Comunícate con nosotros</p>
            </div>
            <div class="box">
                <h2>Categorías de cursos</h2>
                <p>Desarrollo</p>
                <p>Metodología de Pruebas</p>
                <p>Pruebas Funcionales</p>
                <p>Pruebas No Funcionales</p>
                <p>DevOps</p>
                <p>Cloud</p>
                <p>Automatización</p>
            </div>
            <div class="box">
                <h2>Certificaciones</h2>
                <p>Scrum Master</p>
                <p>Scrum Product Owner</p>
                <p>Scrum Developer</p>
                <p>Agile Coach</p>
                <p>Desing Thinking</p>
                <p>Kanban</p>
                <p>OKR</p>
                <p>DevOps</p>
            </div>
            <div class="box">
                <h2>Q-Vision Technologies</h2>
                <p>Desarrollo de Software</p>
                <p>Aseguramiento de Calidad</p>
                <p>Automatización de procesos con RPA</p>
                <p>Talento TI</p>
                <p>Gestión inteligente de datos</p>
            </div>
            <div class="box">
                <h2>Soporte</h2>
                <p>Si tienes incovenientes o dudas, contáctanos al correo:</p>
                <p>izyacademy@qvision.us</p>
            </div>
        </div>
        <div class="grupo2">
            <small>&copy; 2024 IzyAcademy Marca Registrada By Q-Vision Technologies</small>
        </div>
    </footer>
</body>
</html>