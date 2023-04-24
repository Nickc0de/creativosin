<nav class="uk-navbar-container uk-sticky cinn-bg-gray uk-box-shadow-small"  id="main-nav" uk-sticky="position:top">
        <div class="uk-width-expand">
            <div uk-navbar>
                <div class="uk-navbar-left">
                    <a class="uk-navbar-item uk-logo uk-margin-left" href="./" aria-label="Back to Home">
                            <img src="images/logo_main.png"  alt="Creativos Inn" width="120" >
                    </a>    
                </div>
                    <div class="uk-navbar-item uk-width-expand ">
                        <form class="uk-search uk-search-default cinn-main-searh cinn-form">
                            <a href="" class="uk-search-icon-flip cinn-search-icon " uk-search-icon></a>
                            <input id="s-bar" class="uk-search-input uk-border-rounded" type="search" placeholder="Búsqueda" aria-label="Search">
                            <div id="r-panel" class="uk-position-absolute uk-width-1-1"></div>
                        </form>
                    </div>
                
                <div class="nav-overlay uk-navbar-right  uk-padding-small uk-padding-remove-vertical">
                    <ul class="uk-navbar-nav">
                        <li class="uk-active"><a class="uk-text-capitalize" href="?md=personas">Personas</a></li>
                        <li><a class="uk-text-capitalize" href="?md=empresas">Empresas</a></li>
                        <li><a class="uk-text-capitalize" href="#">Planes</a></li>
                        
                            <?php
                            if($modulo == 'panel'){
                                ?>
                                <li><span uk-icon="icon: user" class="cinn-text-orange"></span></li>
                                <?php
                            } else{
                                ?>
                               <li><a class="uk-text-capitalize " href="#"><span uk-icon="icon: user" class="cinn-text-orange"></span>Ingreso</a>
                                <div id="login-form" class="uk-card uk-card-body uk-card-default uk-box-shadow-large uk-width-xlarge uk-border-rounded" uk-drop="mode: click">
                                    <div class="uk-child-width-expand" uk-grid >
                                        <div class="uk-width-2-5">
                                        <h5 class="uk-text-default">¿No tienes una cuenta?</h5>
                                        <span class=""><a href="" class="cinn-text-violet" uk-toggle="target: #register-modal-1">Regístrate aquí</a></span>
                                        </div>
                                        <div>
                                            <form class="cinn-form">
                                                <fieldset class="uk-fieldset">
                                                    <div class="uk-margin">
                                                        <input class=" uk-width-1-1 uk-input uk-border-rounded" type="email" placeholder="Correo electrónico">
                                                    </div>
                                                    <div class="uk-margin">
                                                        <input class=" uk-width-1-1 uk-input uk-border-rounded" type="password" placeholder="Contraseña">
                                                    </div>
                                                    <div class="uk-grid uk-child-width-expand uk-margin">
                                                        <div>
                                                            <input type="checkbox" class="uk-checkbox uk-border-rounded uk-margin-small-right">Recordarme
                                                        </div>
                                                        <div>
                                                            <!-- <span class="">
                                                                <a href="" class="cinn-text-violet" uk-toggle="target: #register-modal-1">Regístrate aquí</a>
                                                            </span> -->
                                                        </div>
                                                    </div>
                                                    <a href="?md=panel" class=" uk-margin-small-top uk-width-1-1 uk-button uk-button-default cinn-button-violet-inv uk-border-rounded" >Ingresar"</a>
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div> 
                                </li>
                                <li><a href="" class="uk-text-capitalize" uk-toggle="target: #register-modal-1">Registro</a>
                                <?php
                            }
                            ?>                          
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <script src="js/search.js"></script>