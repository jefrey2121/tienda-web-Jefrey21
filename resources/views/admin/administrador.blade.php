<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('css/admin.css')}}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">
  <title>Administrador-Jefrey21</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="p-3 m-0 border-0 bd-example m-0 border-0">    
    <nav class="navbar navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand tittle" href="#">Administrador</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">
            <a href="#" class="logo_adm">
                Jefrey21
            </a>
              </h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body menu_container">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="ri-store-2-line icon_menu"></i>Almacen
                </a>
                <ul class="dropdown-menu dropdown-menu-dark">
                  <li><a class="dropdown-item" href="{{ route('articulos') }}">
                </i>Artirculos</a></li>
                       <hr class="dropdown-divider">
                  <li><a class="dropdown-item" href="{{ route('categoria') }}">categoria</a></li>
                  <li>
                    
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="ri-shopping-cart-line icon_menu"></i>compras
                </a>
                <ul class="dropdown-menu dropdown-menu-dark">
                  <li><a class="dropdown-item" href="{{ route('ingresos') }}">Ingresos </a></li>
                       <hr class="dropdown-divider">
                  <li><a class="dropdown-item" href="{{ route('proveedores') }}">Proveedores</a></li>
                  <li>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="ri-money-dollar-circle-fill icon_menu"></i>ventas
                </a>
                <ul class="dropdown-menu dropdown-menu-dark">
                  <li><a class="dropdown-item" href="{{ route('ventas') }}">Ventas</a></li>
                         <hr class="dropdown-divider">
                  <li><a class="dropdown-item" href="{{ route('clientes') }}">Clientes</a></li>
                  <li>                 
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('subs') }}">
                <i class="ri-mail-send-line icon_menu"></i>Subscripciones</a>
              </li>
              <br>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('inicio') }}">
                <i class="ri-door-open-fill icon_menu"></i>Cerrar seción</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </body>
</html>


