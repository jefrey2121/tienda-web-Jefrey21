<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcup icon" href="img/logo.png">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">
    <title>Jefrey21</title>
</head>
<body>
<header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">
                <img src="img/logo.png" alt="logo">Jefrey21</a>
                <div class="nav__menu" id="nav-menu">
                       <ul class="nav__list">
                       <li class="nav__item">
                             <!-- Buscador -->
                        <div class="search-container container" id="search">
                            <input class="input__search" name="text" placeholder="Buscar..." type="search">
                        </div>
                        </li>
                        <li class="nav__item">
                                <a href="{{ route('inicio') }}" class="nav__link active-link">Inicio</a>
                        </li>
                        <li class="nav__item">
                            <a href="#popular" class="nav__link">Popular</a>
                        </li>
                        <li class="nav__item">
                            <a href="#about" class="nav__link">Nosotros</a>
                        </li>
                        <li class="nav__item">
                            <a href="{{ route('carrito') }}" class="nav__link"><i class="ri-shopping-cart-line"></i></a>
                        </li>
                        <li class="nav__item">
                            <a href="{{route('login')}}" class="nav__link"><i class="ri-user-line"></i></a>
                        </li>
                        
                       </ul> 
                       <div class="nav__close" id="nav-close">
                        <i class="ri-close-line"></i>
                       </div>
                       <img src="img/mariposa.png" alt="" class="nav__img-1">
                       <img src="img/mariposa.png" alt="" class="nav__img-2"> 
                </div> 
                <div class="nav__buttons">
                    <i class="ri-moon-line change-theme" id="theme-button"></i>

                    <div class="nav__toggle" id="nav-toggle">
                        <i class="ri-apps-fill"></i>
                    </div>
                </div>
            </a>
        </nav>
</header>