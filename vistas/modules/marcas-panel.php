<?php
$persona1 = loadUser(1);
$persona2 = loadUser(2);
$empresa1 = loadEmpresa(1);
$empresa2 = loadEmpresa(2);
?>
<div id="marcas" class="uk-max-width-medium uk-grid-small uk-padding-small uk-child-width-1-2 uk-text-center cinn-bg-gray uk-margin-remove-left" uk-grid>
        <div class="uk-card-hover uk-transition-toggle uk-flex uk-flex-middle uk-flex-center uk-background-default" tabindex="0">
            <a href="?md=empresa&id=<?php echo $empresa1['id'];?>">
                <img class="uk-transition-scale-up uk-transition-opaque" src="images/<?php echo $empresa1['avatar'];?>">
            </a>
        </div>
        <div class="uk-card-hover uk-transition-toggle uk-flex uk-flex-middle cinn-bg-lightblue" tabindex="0">
                <article class="uk-comment uk-transition-scale-up uk-transition-opaque" role="comment">
                    <header class="uk-comment-header uk-padding-small uk-padding-remove-vertical">
                            <div class="uk-width-auto">
                                <img class="uk-border-circle uk-comment-avatar" src="images/<?php echo $persona1['perfil']['foto'];?>" width="80" height="80" alt="">
                            </div>
                            <div class="uk-width-expand">
                                <h5 class=" uk-margin-remove "><a class="uk-link-reset" href="?md=persona&id=<?php echo $persona1['id'];?>"><?php echo ucwords($persona1['nombre']);?></a></h5>
                                <ul class="uk-comment-list uk-margin-remove">
                                    <li class="uk-list"><a href="?md=persona&id=<?php echo $persona1['id'];?>" class="uk-text-meta uk-text-decoration-none cinn-meta"><?php echo ucfirst($persona1['perfil']['profesion']);?></a></li>
                                </ul>
                            </div>
                    </header>
                </article>
        </div>
        <div class="uk-card-hover uk-transition-toggle uk-flex uk-flex-middle uk-background-default uk-flex-center" tabindex="0">
            <a href="?md=empresa&id=<?php echo $empresa2['id'];?>">
                <img class="uk-transition-scale-up uk-transition-opaque" src="images/<?php echo $empresa2['avatar'];?>">
            </a>    
        </div>
        <div class="uk-card-hover uk-transition-toggle uk-flex uk-flex-middle cinn-bg-lightblue" tabindex="0">
                <article class="uk-comment uk-transition-scale-up uk-transition-opaque" role="comment">
                    <header class="uk-comment-header uk-padding-small uk-padding-remove-vertical">
                            <div class="uk-width-auto">
                                <img class="uk-border-circle uk-comment-avatar" src="images/<?php echo $persona2['perfil']['foto'];?>" width="80" height="80" alt="">
                            </div>
                            <div class="uk-width-expand">
                                <h5 class=" uk-margin-remove "><a class="uk-link-reset" href="?md=persona&id=<?php echo $persona2['id'];?>"><?php echo $persona2['nombre'];?></a></h5>
                                <ul class="uk-comment-list uk-margin-remove">
                                    <li class="uk-list"><a href="?md=persona&id=<?php echo $persona2['id'];?>" class="uk-text-meta uk-text-decoration-none cinn-meta"><?php echo $persona2['perfil']['profesion'];?></a></li>
                                </ul>
                            </div>
                    </header>
                </article>
        </div>
</div>