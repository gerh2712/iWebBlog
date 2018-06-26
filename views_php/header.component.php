<header class="row">
    
    <div class="col-12 p-0">
        <!-- Barra de navegacion -->
        <nav class="navbar navbar-expand-lg navbar-dark unique-color-dark scrolling-navbar">
            <a class="navbar-brand" href="index.php"><strong>iwebblog</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#blog">Blog <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item disabled">
                        <a class="nav-link disabled" disabled href="#youtube">Próximamente...</a>
                    </li>
                    <!--<li class="nav-item">
                        <a class="nav-link" href="views_php/entrada.view.php">Cursos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#youtube">Youtube</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Sobre Nosotros</a>
                    </li>-->
                </ul>
    
                <?php 
                
                if (isset($_SESSION['usuario'])) {
                    
                    echo
                        "<ul class='navbar-nav nav-flex-icons'>                                   
                            <li class='nav-item'>
                                <a href='php/cerrar_sesion.php' class='btn btn-primary'>Cerrar Sesión</a>
                            </li>               
                        </ul>"
                    ;
                }elseif(!isset($_SESSION['usuario'])){
                    
                    echo
    
                        "<ul class='navbar-nav nav-flex-icons'>                                   
                            <li class='nav-item'>
                            <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#modalIniciarSesion'>Iniciar Sesión</button>
                            </li>
                        </ul>"
                    ;
    
                }
    
                ?>
    
            </div>
        </nav>
    </div>

    <div class="col-12">
    
        

    </div>


</header>