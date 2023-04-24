<aside class="uk-padding-small uk-background-default" id="filter_aside">
    <ul class="uk-nav uk-nav-default">
        <li class="uk-active ">
            <a href="" class="uk-text-large cinn-bg-lightblue">
                <span class="uk-margin-small-right uk-icon" uk-icon="list"> </span>Categorías</a>
            <?php
            $modulo != 'personas' ? $index = 2 : $index = 1;
            $subcat = loadCats($index);
            if(count($subcat) > 0){
            ?>
                <ul class="uk-nav uk-nav-secondary uk-margin-left cinn-category-list">
                <?php
                foreach ($subcat as $scat) {
                ?>
                    <li><a href="<?php echo  '?md='.$modulo.'&cat='.$scat['id']; ?>" class="uk-text-meta"><?php echo  ucfirst($scat['nombre']); ?></a></li>
            <?php
                }
            ?>
            </ul>
            <?php
            }
            ?>
        </li>
    </ul> 
    <ul class="uk-nav uk-nav-default">
        <li class="uk-active ">
            <a href="" class="uk-text-large cinn-bg-lightblue">
                <span class="uk-margin-small-right uk-icon" uk-icon="list"> </span> Ubicaciones</a>
            <?php
            $locations = loadLocations();
            if(count($locations) > 0){
            ?>
                <ul class="uk-nav uk-nav-secondary uk-margin-left cinn-category-list">
                <?php
                foreach ($locations as $loc) {
                ?>
                    <li><a href="" class="uk-text-meta"><?php echo  ucfirst($loc['nombre']); ?></a></li>
            <?php
                }
            ?>
            </ul>
            <?php
            }
            ?>
        </li>
    </ul> 
    <ul class="uk-nav uk-nav-default">
        <li class="uk-active ">
            <a href="" class="uk-text-large cinn-bg-lightblue">
                <span class="uk-margin-small-right uk-icon" uk-icon="list"> </span> Otros</a>
                <ul class="uk-nav uk-nav-secondary uk-margin-left cinn-category-list">
                    <li><a href="" class="uk-text-meta">Especialización</a></li>
                    <li><a href="" class="uk-text-meta">Publicaciones</a></li>
                    <li><a href="" class="uk-text-meta">Maestría</a></li>
                    <li><a href="" class="uk-text-meta">Calificación de la comunidad</a></li>
            </ul>
        </li>
    </ul> 
</aside>