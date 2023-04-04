<div class="uk-container uk-padding-small">
    <div class="uk-card uk-card-default uk-border-rounded uk-overflow-hidden " id="profile">
        <div class="uk-card-media-top uk-inline-clip uk-transition-toggle uk-cover-container uk-width-expand cinn-portada cinn-bg-darkgray" tabindex="0">
            <a href="" class="uk-position-small uk-position-top-right uk-light">Cambiar foto de portada</a>
            <!-- <img class="uk-transition-scale-up uk-transition-opaque" src="images/cat-1.jpg" alt="" uk-cover>
            <div class="uk-overlay-primary uk-position-cover"></div> -->
            <!-- <div class="uk-overlay uk-position-bottom uk-light uk-text-center">
                <h2 class=""><a class="uk-link-heading">Herramientas</a></h2>
            </div> -->
        </div>
        <div class="uk-grid-small uk-child-width-expand uk-padding-small " uk-grid>
            <div class="uk-width-1-6 uk-margin-left uk-position-z-index uk-text-center" id="prof-avatar">
                <!-- <img class="uk-border-circle" src="images/prof-1.jpg" width="120" height="120" alt=""> -->
                <span class="uk-icon-button" uk-icon="icon: user; ratio:3" ></span>
                <div class="uk-text-meta uk-width-1-1 ">
                    <a  href="#">Añadir foto de perfil</a>
                </div>
            </div>
            <div>
               <h2 class="uk-margin-remove ">Carlos Castañeda</h2>
                <h3 class="uk-margin-remove  cinn-text-violet">Administrador de empresas</h3>
                <div class="uk-margin-top">
                    <form action="" class="cinn-form">
                        <label class="uk-form-label" for="profile-titles">Añada una descripción de sus títulos</label>
                        <div class="uk-margin">
                            <textarea id="profile-titles" class="uk-textarea uk-border-rounded" rows="5" aria-label="Textarea"></textarea>
                        </div>
                        <label class="uk-form-label" for="profile-description">Añada una descripción de perfil profesional</label>
                        <div class="uk-margin">
                            <textarea id="profile-description" class="uk-textarea uk-border-rounded" rows="5" aria-label="Textarea"></textarea>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="uk-padding">
            <div class="uk-grid-medium   uk-child-width-expand" uk-grid>
                <div>
                    <form action="" class="cinn-form">
                        <div>  
                            <legend class="uk-legend">Formación académica</legend>
                            <div class="uk-margin">
                                <input class=" uk-width-1-1 uk-input uk-border-rounded" type="text" placeholder="Ej: Adminsitrador de empresas">
                                <div class="uk-width-expand uk-text-right">
                                    <button class="uk-margin-small-top uk-form-small uk-button uk-button-default cinn-button-violet-inv uk-border-rounded">Añadir formación académica</button>
                                    <div uk-form-custom>
                                        <input type="file" aria-label="Custom controls">
                                        <button class="uk-margin-small-top uk-form-small uk-button uk-button-primary cinn-button-violet uk-border-rounded" type="button" tabindex="-1">Cargar certificados</button>
                                    </div>          
                                </div>
                            </div>
                        </div>
                        <div>  
                            <legend class="uk-legend">Experiencia laboral</legend>
                            <div class="uk-margin">
                                <input class=" uk-width-1-1 uk-input uk-border-rounded" type="text" placeholder="Ej: gerente">
                                <div class="uk-width-expand uk-text-right">
                                    <button class="uk-margin-small-top uk-form-small uk-button uk-button-default cinn-button-violet-inv uk-border-rounded">Añadir experiencia laboral</button>
                                    <div uk-form-custom>
                                        <input type="file" aria-label="Custom controls">
                                        <button class="uk-margin-small-top uk-form-small uk-button uk-button-primary cinn-button-violet uk-border-rounded" type="button" tabindex="-1">Cargar certificados</button>
                                    </div>          
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div>
                    <form action="" class="cinn-form">
                        <legend class="uk-legend">Redes sociales y presencia en línea</legend>
                        <div class="uk-margin">
                            <div class="uk-inline uk-width-expand uk-margin-small-bottom">
                                <span class="uk-form-icon" href="#" uk-icon="icon: facebook"></span>
                                <input class="uk-input uk-border-rounded" type="text" aria-label="facebook">
                            </div>
                            <div class="uk-inline uk-width-expand uk-margin-small-bottom">
                                <span class="uk-form-icon" href="#" uk-icon="icon: twitter"></span>
                                <input class="uk-input uk-border-rounded" type="text" aria-label="facebook">
                            </div>
                            <div class="uk-inline uk-width-expand uk-margin-small-bottom">
                                <span class="uk-form-icon" href="#" uk-icon="icon: linkedin"></span>
                                <input class="uk-input uk-border-rounded" type="text" aria-label="facebook">
                            </div>
                            <div class="uk-inline uk-width-expand uk-margin-small-bottom">
                                <span class="uk-form-icon" href="#" uk-icon="icon: instagram"></span>
                                <input class="uk-input uk-border-rounded" type="text" aria-label="facebook">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="ch-password-modal" uk-modal bg-close="false">
    <div class="uk-modal-dialog uk-modal-body uk-border-rounded uk-width-large">
        <h2>Bienvenido Usuario</h2>
        <h5>Este es su panel administrador donde podrá actualizar la información de su perfil</h5>
        <span>Por favor cree una contraseña para poder acceder a su cuenta</span>
        <form class="cinn-form">
            <fieldset class="uk-fieldset uk-margin-small-top">
                <div class="uk-margin">
                    <input class=" uk-width-1-1 uk-input uk-border-rounded" type="password" placeholder="Contraseña">
                </div>
                <div class="uk-margin">
                    <input class=" uk-width-1-1 uk-input uk-border-rounded" type="password" placeholder="Comprobar contraseña">
                </div>
                <a  href="persona.php" class=" uk-margin-small-top uk-width-1-1 uk-button uk-button-default cinn-button-violet-inv uk-border-rounded" >CREAR CONTRASEÑA"</a>
            </fieldset>
        </form>
    </div>
</div>
<?php
    if(isset($_GET['repass'])){
        ?>
        <script type="text/javascript">
            UIkit.modal('#ch-password-modal').show();
        </script>   
        <?php
    }
    ?>