<div class="cinn-divider-text"><span>Nuestros aliados</span></div>
<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="autoplay:true; autoplay-interval:3000">
    <ul class="uk-slider-items slide_marcas uk-grid">
        <?php 
            foreach(EMPRESAS as $empresa){
                ?>
                <li>
                    <div class="uk-flex uk-flex-middle uk-flex-center">
                        <a href="?md=empresa&id=<?php echo $empresa['id'];?>"><img class="" src="images/<?php echo $empresa['avatar'];?>"></a>
                    </div>
                </li>
                <?php
            }
        ?>
    </ul>
</div>