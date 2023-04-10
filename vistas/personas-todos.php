<div class="uk-container uk-padding ">
    <h2 class="uk-heading-small uk-heading-line cinn-title-section">Personas</h2>
    <h3 class="uk-margin-remove-top">Encuentra profesionales y personas especializadas en diferentes oficios y tareas.</h3>
    <ul class="uk-list cinn-list-striped">
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