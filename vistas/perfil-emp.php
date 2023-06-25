<div class="uk-padding-small">
    <div class="uk-card uk-card-default uk-border-rounded uk-overflow-hidden uk-margin-medium-bottom" id="persona-profesion">
        <div class="uk-card-media-top uk-inline-clip uk-transition-toggle uk-cover-container uk-width-expand cinn-portada" tabindex="0">
            <img class="uk-transition-scale-up uk-transition-opaque" src="images/cat-4.jpg" alt="" uk-cover>
            <div class="uk-overlay-primary uk-position-cover"></div>
        </div>
        <div class="uk-position-relative cinn-overlay-nav uk-margin-right uk-light">
            <div class="uk-width-expand uk-text-right">
                <button class="uk-margin-small-top uk-form-small uk-button cinn-button-violet uk-border-rounded" type="button" >Enviar mensaje</button>
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
            <div class="uk-width-1-6 uk-margin-left uk-position-z-index uk-text-center uk-background-default" id="prof-avatar">
                <div class="uk-height-small uk-flex uk-flex-middle uk-flex-center uk-background-default uk-border-rounded uk-box-shadow-small">    
                    <img class="" src="images/<?php echo $empresa['avatar'];?>" width="120" height="120" alt="">
                </div>
            </div>
            <div>
               <h2 class="uk-margin-remove cinn-text-violet"><?php echo $empresa['nombre'];?></h2>
                <p>
                <?php echo $empresa['perfil'];?>
                </p>
            </div>
        </div>
    </div>
    <div class="uk-card uk-margin-medium-bottom" id="persona-social">
        <div class=" uk-padding uk-padding-remove-vertical">
            <div class="uk-grid-medium uk-flex uk-flex-middle" uk-grid>
                <div class="uk-width-auto">
                    <h2 class="cinn-text-violet">Presencia en línea</h2>
                </div>
                <div class="uk-width-expand">
                    <a id="twitter" href="" class="uk-icon-button cinn-button-gray cinn-button-social uk-margin-small-right" uk-icon="twitter"></a>
                    <a id="facebook" href="" class="uk-icon-button cinn-button-gray cinn-button-social  uk-margin-small-right" uk-icon="facebook"></a>
                    <a id="linkedin" href="" class="uk-icon-button cinn-button-gray cinn-button-social  uk-margin-small-right" uk-icon="linkedin"></a>
                    <a id="instagram" href="" class="uk-icon-button cinn-button-gray cinn-button-social  uk-margin-small-right" uk-icon="instagram"></a>
                    <a id="whatsapp" href="" class="uk-icon-button cinn-button-gray cinn-button-social  uk-margin-small-right" uk-icon="whatsapp"></a>
                    <!-- <a id="github" href="" class="uk-icon-button cinn-button-gray cinn-button-social  uk-margin-small-right" uk-icon="github"></a> -->
                    <a id="youtube" href="" class="uk-icon-button cinn-button-gray cinn-button-social" uk-icon="youtube"></a>
                </div>
                <div class="uk-width-auto">
                    <h2 class="cinn-text-blue">Página web: <a href="" class="uk-margin-small-right" target="_blank"><?php echo $empresa['web'];?></a></h2>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-card uk-card-default uk-border-rounded uk-margin-medium-bottom uk-padding" id="persona-profile">
        <?php
        if(count($empresa['servicios']) >0){
        ?>
        <div class="">
            <h2 class="cinn-text-violet">Servicios</h2>
            <div>
                <ul class="uk-list uk-list-circle uk-column-1-2">
                    <?php
                        foreach($empresa['servicios'] as $servicio){
                            ?>
                            <li><?php echo $servicio;?></li>
                    <?php
                        }
                    ?>
                </ul>
            </div>
        </div>
        <?php
        }
        ?>
        <div class="">
            <h2 class="cinn-text-violet">Experiencia</h2>
            <p>
                <?php echo $empresa['experiencia'];?>
            </p>
        </div>
        <?php
        if($empresa['google_maps']){
        ?>
        <div class="">
            <h2 class="cinn-text-violet">Ubicación</h2>
            <iframe src="<?php echo $empresa['google_maps'];?>" width="1920" height="720" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" uk-responsive></iframe>
        </div>
        <?php
        }
        ?>
    </div>
</div>