<div class="uk-container uk-padding ">
    <h2 class="uk-heading-small uk-heading-line cinn-title-section">Empresas</h2>
    <div class="uk-grid uk-child-width-expand ">
        <span class=" uk-width-1-3 uk-text-center ">
            <h2 class="uk-text-xlarge uk-text-uppercase uk-margin-remove">Más de</h3>
            <h2 class="uk-text-xlarge uk-text-uppercase uk-margin-remove"><strong>2500</strong> Aliados</h3>
        </span>
        <span  class="uk-text-large" >            
            Miles de ofertas y promociones en nuestra comunidad de empresarios. Encuentre el servicio o el producto que busca al mejor precio y más cerca a usted.  
        </span>
    </div>
    <div class="uk-grid-medium uk-child-width-1-4 uk-text-center uk-grid-match" uk-grid>
        <?php
        foreach(EMPRESAS as $empresa){
        ?>
        <div class=" uk-margin-medium-bottom cinn-emp-list">
            <div class="uk-card uk-card-default uk-border-rounded uk-overflow-hidden">
                <div class="uk-card-media-top uk-cover-container uk-width-expand ">
                    <img class="" src="images/cat-3.jpg" alt="" uk-cover>
                    <div class="uk-overlay-primary uk-position-cover"></div>
                </div>
                <div class="uk-grid-collapse uk-child-width-expand uk-margin-small-bottom uk-padding-small uk-padding-remove-vertical" uk-grid>
                        <div class="uk-width-2-5 uk-position-z-index uk-text-center uk-border-circle uk-height-auto uk-background-default uk-border-rounded uk-box-shadow-small emp-list-avatar">    
                            <img class="" src="images/<?php echo $empresa['avatar'];?>" height="50">
                        </div>
                        <div class="uk-align-left">
                            <a class="uk-badge cinn-button-violet uk-padding-small uk-padding-remove-vertical" href="?md=empresa&id=<?php echo $empresa['id'];?>">Ver perfil</a>
                        </div>
                </div>
                <div class="uk-margin-small-bottom">
                    <h5 class="uk-margin-remove cinn-text-violet"><?php echo $empresa['nombre'];?></h5>
                </div>
                <?php
                if($empresa['web']){
                    ?>
                <div class="uk-width-auto uk-margin-small-bottom">
                    <a class="uk-button uk-button-default uk-button-small uk-text-meta" href="<?php echo $empresa['web'];?>" target="_blank">Visitar sitio web</a>
                </div>
                <?php } ?>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
</div>