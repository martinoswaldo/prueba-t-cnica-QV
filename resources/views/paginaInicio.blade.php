<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/paginaInicio.css') }}">
    <title>Document</title>
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
                    <a href="#" class="nav-link">Rutas de Formacion <i class='bx bx-chevron-down'></i></a>
                    <ul class="listaDesplegable-menu">
                        <li><a href="#">Cientifico de datos</a></li>
                        <li><a href="#">Ruta de Formacion en .NET</a></li>
                        <li><a href="#">Ruta de Formacion en Automatizacion </a></li>
                    </ul>
                </div>
            </nav>
            <div class="iniciosesion">
                <a href="#" class="nav-link">
                    <i class='bx bx-user'></i>
                    <span class="tooltip">Iniciar sesion</span>
                </a>
            </div>
        </div>
        <div class="texto">
            <h2 class="text-center">Continua tu formacion con izyAcademy</h2>
            <p class="lead text-center">Te ofrecemos una experiencia de aprendizaje basada en tu formacion por proyectos,</p>
            <p class="lead text-center">apoyada en el uso de recursos interctivos para que tu aprendizaje sea efectivo.</p>
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
                    <a href="#">Bienvenidos a izyAcademy</a>
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
                    <a href="#">Bienvenidos a izyAcademy</a>
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
                    <a href="#">Bienvenidos a izyAcademy</a>
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
                    <a href="#">Bienvenidos a izyAcademy</a>
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
</body>
</html>