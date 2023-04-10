<div class="uk-padding-small">
    <div class="uk-card uk-card-default uk-border-rounded uk-overflow-hidden uk-margin-medium-bottom" id="persona-profesion">
        <div class="uk-card-media-top uk-inline-clip uk-transition-toggle uk-cover-container uk-width-expand cinn-portada" tabindex="0">
            <img class="uk-transition-scale-up uk-transition-opaque" src="images/cat-1.jpg" alt="" uk-cover>
            <div class="uk-overlay-primary uk-position-cover"></div>
        </div>
        <div class="uk-position-relative cinn-overlay-nav uk-margin-right uk-light">
            <div class="uk-width-expand uk-text-right">
                <a href="mailto:<?php echo $usuario['correo'];?>" target="_blank" class="uk-margin-small-top uk-form-small uk-button cinn-button-violet uk-border-rounded" >Enviar mensaje</a>
                <div class="uk-inline">
                    <button class="uk-margin-small-top uk-form-small uk-button uk-button-default uk-border-rounded">Más</button>
                    <div uk-dropdown="mode: click; pos: bottom-center;">
                        <ul class="uk-nav uk-dropdown-nav">
                            <li class="uk-active"><a href="#">Solicitar cotización</a></li>
                            <li><a href="#">Compartir</a></li>
                            <li><a href="#">Escribir reseña</a></li>
                            <li><a href="#">Guardar en favoritos</a></li>
                            <li><a href="#">Recomendar</a></li>
                            <li><a href="#">Calificar servicios</a></li>
                            <li><a href="#">Denuncia / reclamo</a></li>
                        </ul>
                    </div>
                </div>       
            </div>
        </div>
        <div class="uk-grid-small uk-child-width-expand uk-padding-small uk-margin-bottom" uk-grid>
            <div class="uk-width-1-6 uk-margin-left uk-position-z-index uk-text-center" id="prof-avatar">
                <img class="uk-border-circle" src="images/<?php echo $usuario['perfil']['foto'];?>" width="120" height="120" alt="">
            </div>
            <div>
               <h2 class="uk-margin-remove "><?php echo ucwords($usuario['nombre']);?></h2>
                <h3 class="uk-margin-remove  cinn-text-blue"><?php echo ucfirst($usuario['perfil']['profesion']).', '.ucfirst($usuario['perfil']['titulos']);?></h3>
                <p>
                <?php echo ucfirst($usuario['perfil']['perfil']);?>
                </p> 
            </div>
        </div>
    </div>
    <div class="uk-card uk-margin-medium-bottom" id="persona-social">
        <div class=" uk-padding uk-padding-remove-vertical">
            <div class="uk-grid-medium uk-flex uk-flex-middle" uk-grid>
                <div class="uk-width-auto">
                    <h2 class="cinn-text-blue">Presencia en línea</h2>
                </div>
                <div class="uk-width-expand">
                    <a href="" class="uk-icon-button cinn-button-gray cinn-button-social uk-margin-small-right" uk-icon="twitter"></a>
                    <a href="" class="uk-icon-button cinn-button-gray cinn-button-social  uk-margin-small-right" uk-icon="facebook"></a>
                    <a href="" class="uk-icon-button cinn-button-gray cinn-button-social  uk-margin-small-right" uk-icon="linkedin"></a>
                    <a href="" class="uk-icon-button cinn-button-gray cinn-button-social  uk-margin-small-right" uk-icon="instagram"></a>
                    <a href="" class="uk-icon-button cinn-button-gray cinn-button-social  uk-margin-small-right" uk-icon="whatsapp"></a>
                    <a href="" class="uk-icon-button cinn-button-gray cinn-button-social  uk-margin-small-right" uk-icon="github"></a>
                    <a href="" class="uk-icon-button cinn-button-gray cinn-button-social" uk-icon="youtube"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-card uk-card-default uk-border-rounded uk-margin-medium-bottom uk-padding" id="persona-profile">
        <div class="">
            <h2 class="cinn-text-blue">Perfil profesional</h2>
            <p>
            <?php echo ucfirst($usuario['perfil']['experiencia']);?>
                    </p>
        </div>
        <?php
        if(count($usuario['perfil']['habilidades']) >0){
        ?>
        <div class="">
            <h2 class="cinn-text-blue">Habilidades</h2>
            <div>
                <ul class="uk-list uk-list-circle uk-column-1-2">
                    <?php
                        foreach($usuario['perfil']['habilidades'] as $skill){
                            ?>
                            <li><?php echo $skill;?></li>
                    <?php
                        }
                    ?>
                </ul>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
</div>