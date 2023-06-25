<?php
$r1 = rand(1,3); 
$r2 = rand(1,9); 
$person = loadUser($r1);
$emp = loadEmpresa($r2);
?>
<aside class="uk-padding-small" id="right_aside">
    <div id="resenas" class="">
        <img class="" src="images/mkt_creativo.gif">
    </div>
    <div id="marcas-widget" class="uk-padding-small ">
        <h5>Otros profesionales y empresas en tu zona</h5>
        <div class="uk-text-center uk-margin-bottom uk-card-hover uk-transition-toggle uk-flex uk-flex-middle uk-background-default uk-flex-center" tabindex="0">
            <a href="?md=empresa&id=<?php echo $emp['id'];?>">    
                <img class="uk-transition-scale-up uk-transition-opaque" src="images/<?php echo $emp['avatar'];?>">
            </a>
        </div>
        <div class="uk-text-center uk-margin-bottom uk-card-hover uk-transition-toggle uk-flex uk-flex-middle cinn-bg-lightblue" tabindex="0">
            <article class="uk-comment uk-transition-scale-up uk-transition-opaque" role="comment">
                <header class="uk-comment-header uk-padding-small uk-padding-remove-vertical">
                        <div class="uk-width-auto">
                            <img class="uk-border-circle uk-comment-avatar" src="images/<?php echo $person['perfil']['foto'];?>" width="80" height="80" alt="">
                        </div>
                        <div class="uk-width-expand">
                            <h5 class=" uk-margin-remove "><a href="?md=persona&id=<?php echo $person['id'];?>" class="uk-link-reset"><?php echo ucwords($person['nombre']);?></a></h5>
                            <ul class="uk-comment-list uk-margin-remove">
                                <li class="uk-list"><a href="?md=persona&id=<?php echo $person['id'];?>" class="uk-text-meta uk-text-decoration-none cinn-meta"><?php echo ucfirst($person['perfil']['profesion']);?></a></li>
                            </ul>
                        </div>
                </header>
            </article>
        </div>
    </div>
</aside> 