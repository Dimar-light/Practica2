<?php
function ImportCSS()
{
    echo '
        <head>
        <meta charset="UTF-8" />
        <title>Tienda de Mascotas</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="/Practica2/View/css/tabler-icons.min.css" />
        <link rel="stylesheet" href="/Practica2/View/css/main.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css" />
        
        <style>
            body {
                background-color: #f5f6fa !important; 
                background-image: none !important;    
            }
            #db-wrapper {
                display: flex;
                min-height: 100vh;
                position: relative;
            }
            #topbar {
                z-index: 999 !important; 
                left: 250px; 
                width: calc(100% - 250px);
            }
            .main-content {
                margin-left: 250px; 
                width: calc(100% - 250px);
                padding-top: 80px !important; 
                min-height: 100vh;
                background: #f5f6fa !important;
            }
            .card {
                border: none !important;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05) !important;
            }
        </style>
        </head>
        <body>
        <div id="db-wrapper">
    ';
}

function ImportJS()
{
    echo '
        </div>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.21.0/dist/jquery.validate.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="/Practica2/View/js/sidebar.js"></script>
        </body>
    ';
}

function Navbar()
{
    echo '
        <div id="overlay" class="overlay"></div>

        <nav id="topbar" class="navbar bg-white border-bottom fixed-top topbar px-3">
            <button id="toggleBtn" class="btn btn-light btn-icon btn-sm d-none d-lg-inline-flex">
                <i class="ti ti-layout-sidebar-left-expand"></i>
            </button>

            <button id="mobileBtn" class="btn btn-light btn-icon btn-sm d-lg-none me-2">
                <i class="ti ti-layout-sidebar-left-expand"></i>
            </button>
            
            <div class="ms-auto">
                <ul class="list-unstyled d-flex align-items-center mb-0 gap-1">
                    <li class="ms-3 dropdown">
                        <a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ti ti-user-circle fs-2 text-secondary"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end p-0" style="min-width: 200px;">
                            <div>
                                <div class="d-flex gap-3 align-items-center border-dashed border-bottom px-3 py-3">
                                    <div>
                                        <h4 class="mb-0 small fw-bold">Tienda de Mascotas</h4>
                                    </div>
                                </div>
                                <div class="p-3 d-flex flex-column gap-1 small lh-lg">
                                    <a href="RegistroCliente.php" class="text-decoration-none text-dark"><span>Inicio</span></a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        
        <main class="main-content">
            <div class="container-fluid pt-4">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-md-11 col-lg-9 col-xl-8 text-center">
    ';
}

function Sidebar()
{
    echo '
        <aside id="sidebar" class="sidebar">
        <div class="logo-area text-center py-3">
            <a href="RegistroCliente.php" class="d-inline-flex align-items-center justify-content-center w-100 text-decoration-none">
                <h6 class="text-white mb-0 fw-bold logo-full text-uppercase tracking-wider"><i class="ti ti-building-store text-info me-1"></i> Tienda Mascotas</h6>
                <h5 class="text-white mb-0 fw-bold logo-collapsed"><i class="ti ti-building-store text-info"></i></h5>
            </a>
        </div>
        <ul class="nav flex-column mt-4">
            <li class="nav-item">
                <a class="nav-link" href="RegistroCliente.php">
                    <i class="ti ti-user-plus"></i>
                    <span class="nav-text">Registro Clientes</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="RegistroMascota.php">
                    <i class="ti ti-paw"></i>
                    <span class="nav-text">Registro Mascotas</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ConsultaMascotas.php">
                    <i class="ti ti-table"></i>
                    <span class="nav-text">Consulta General</span>
                </a>
            </li>
        </ul>
        </aside>
    ';
}

function Footer()
{
    echo '
                    </div> </div> <div class="row w-100 mt-4">
                    <div class="col-12">
                        <footer class="text-center py-3 text-secondary border-top bg-white rounded shadow-sm mb-4">
                            <p class="mb-0 small">Copyright © ' . date("Y") . ' - Universidad Fidélitas. Todos los derechos reservados.</p>
                        </footer>
                    </div>
                </div>
            </div> 
        </main> 
    ';
}