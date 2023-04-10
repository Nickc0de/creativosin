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
    <div class="uk-max-width-medium uk-grid-small uk-padding-small uk-child-width-1-4 uk-text-center" uk-grid>
        <div class="uk-card uk-card-default uk-border-rounded uk-overflow-hidden uk-margin-medium-bottom uk-padding-remove-horizontal">
            <div class="uk-card-media-top uk-inline-clip uk-cover-container uk-width-expand uk-height-small">
                <img class="" src="images/cat-3.jpg" alt="" uk-cover>
                <div class="uk-overlay-primary uk-position-cover"></div>
            </div>
            <div class="uk-grid-small uk-child-width-expand uk-margin-bottom" uk-grid>
                    <div class="uk-width-2-5  uk-position-z-index uk-text-center uk-border-circle uk-height-auto uk-background-default uk-border-rounded uk-box-shadow-small emp-list-avatar">    
                        <img class="" src="images/<?php echo loadEmpresa(1)['avatar'];?>" height="50">
                    </div>
            </div>
            <div>
                <h5 class="uk-margin-remove cinn-text-violet"><?php echo loadEmpresa(1)['nombre'];?></h5>
            </div>
        </div>
    </div>
    <ul class="uk-g cinn-list-striped">
        <?php
        foreach(PERSONAS as $persona){
        ?>
        <li class="uk-margin-remove">
            <div class="uk-padding-small uk-child-width-expand" uk-grid>
                <div class="uk-width-auto">
                    <?php 
                    if(profUser($persona['id'])['foto']){
                        ?>
                         <img class="uk-border-circle uk-comment-avatar" src="images/<?php echo profUser($persona['id'])['foto'];?>" width="50" height="50" alt="">
                        <?php
                    }else{
                        ?>
                        <span uk-icon="icon: user;ratio:2;" class="cinn-text-blue">
                        <?php
                    }
                    ?>
                   
                </div>
                <div class="uk-width-expand">
                    <h5 class=" uk-margin-remove cinn-text-blue"><?php echo ucwords($persona['nombre']);?>
                        <?php
                        if(profUser($persona['id'])['foto']){
                            ?>
                            <a class="uk-badge cinn-button-blue uk-margin-left uk-padding-small uk-padding-remove-vertical" href="?md=persona&id=<?php echo $persona['id'];?>">Ver perfil</a>
                            <?php
                        }
                        ?> 
                    </h5>
                    <ul class="uk-comment-list uk-margin-remove">
                        <li class="uk-list"><span class="uk-text-meta cinn-meta"><?php echo ucfirst(profUser($persona['id'])['profesion']).', '.ucfirst(profUser($persona['id'])['titulos']);?></span></li>
                    </ul>
                </div>
                <div class="uk-width-auto uk-flex uk-flex-bottom">
                    <a class="uk-button uk-button-default uk-button-small uk-text-meta" href="<?php if(profUser($persona['id'])['foto']){echo '?md=persona&id='.$persona['id'];}else{ echo '#';}?>">Ponte en contacto</a>
                </div>
            </div>
        </li>
        <?php
        }
        ?>
    </ul>
</div>