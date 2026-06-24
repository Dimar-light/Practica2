<?php

function ImportCSS()
{
    echo '
        <head>
        <meta charset="UTF-8" />
        <title>Tienda de Mascotas</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css" />
        <link rel="stylesheet" href="/Practica2/View/css/main.css" />
        
        <style>
            body{
                background:#f4f6f9 !important;
                background-image:none !important;
                overflow-x:hidden;
            }

            .main-content{
                margin-left:250px !important;
                width:calc(100% - 250px) !important;
                min-height:100vh !important;
                padding:110px 30px 40px 30px !important;
                display:flex !important;
                flex-direction:column !important;
                justify-content:flex-start !important;
                align-items:center !important;
            }

            #topbar{
                left:250px !important;
                width:calc(100% - 250px) !important;
                height:70px !important;
                background:#fff !important;
                box-shadow:
                    0 2px 10px rgba(0,0,0,.05) !important;
                z-index:1030 !important;
            }

            .main-content .card, .card-table{
                width:100% !important;
                max-width:900px !important;
                border:none !important;
                border-radius:18px !important;
                overflow:hidden !important;
                box-shadow:
                    0 12px 35px rgba(0,0,0,.08),
                    0 3px 12px rgba(0,0,0,.05) !important;
                margin-top: 20px;
            }

            .card-header{
                background:linear-gradient(
                    135deg,
                    #ff6b35,
                    #f04e23
                ) !important;
                color:white !important;
                border:none !important;
                padding:18px 25px !important;
                font-size:1.4rem !important;
                font-weight:600 !important;
            }

            .card-body{
                padding:30px !important;
            }

            .card-body form,
            .card-body .mb-3{
                text-align:left !important;
            }

            .form-label{
                font-weight:600;
                color:#495057;
                margin-bottom:8px;
            }

            .form-control{
                height:52px !important;
                border-radius:10px !important;
                border:1px solid #dee2e6 !important;
                padding:12px 15px !important;
                transition:all .3s ease;
            }

            .form-control:focus{
                border-color:#ff6b35 !important;
                box-shadow:
                    0 0 0 .20rem rgba(255,107,53,.15) !important;
            }

            .btn-primary{
                height:52px !important;
                border:none !important;
                border-radius:10px !important;
                background:linear-gradient(
                    135deg,
                    #4338ca,
                    #312e81
                ) !important;
                font-weight:600 !important;
                transition:all .3s ease;
            }

            .btn-primary:hover{
                transform:translateY(-2px);
                box-shadow:
                    0 10px 20px rgba(67,56,202,.25);
            }

            .app-footer{
                width:100%;
                max-width:900px;
                margin-top:25px;
                background:white;
                border-radius:15px;
                padding:18px;
                text-align:center;
                color:#6c757d;
                box-shadow:
                    0 4px 15px rgba(0,0,0,.05);
            }

            .app-footer p{
                margin:0;
                font-size:14px;
            }

            @media(max-width:991px){
                .main-content{
                    margin-left:0 !important;
                    width:100% !important;
                    padding:100px 15px 30px 15px !important;
                }
                #topbar{
                    left:0 !important;
                    width:100% !important;
                }
                .main-content .card, .card-table{
                    max-width:100% !important;
                }
                .app-footer{
                    max-width:100%;
                }
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

        <nav id="topbar" class="navbar bg-white border-bottom fixed-top px-3">
            <button id="toggleBtn" class="btn btn-light btn-icon btn-sm d-none d-lg-inline-flex">
                <i class="ti ti-layout-sidebar-left-expand"></i>
            </button>

            <button id="mobileBtn" class="btn btn-light btn-icon btn-sm d-lg-none me-2">
                <i class="ti ti-layout-sidebar-left-expand"></i>
            </button>
            
            <div class="ms-auto d-flex align-items-center gap-2">
                <span class="text-secondary small fw-medium">Bienvenido(a) a la Práctica #2</span>
                <i class="ti ti-user-circle fs-3 text-secondary ms-2"></i>
            </div>
        </nav>
        
        <main class="main-content">
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
                    <span class="nav-text">Consulta Mascotas</span>
                </a>
            </li>
        </ul>
        </aside>
    ';
}

function Footer()
{
    echo '
            <footer class="app-footer">
                <p>
                    © ' . date("Y") . ' Universidad Fidélitas - Todos los derechos reservados.
                </p>
            </footer>
        </main>
    ';
}